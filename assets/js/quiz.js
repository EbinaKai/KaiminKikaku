$(document).ready(function() {

  // shuffle elements function
  $.fn.shuffle = function() {
    
    var currentIndex = this.length, temporaryValue, randomIndex;
    console.debug(currentIndex);

    // Fisher-Yatesアルゴリズムを使用して要素の順番をシャッフル
    while (currentIndex !== 0) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = this[currentIndex];
      this[currentIndex] = this[randomIndex];
      this[randomIndex] = temporaryValue;
    }

    return this;
  };

  // get quiz list
  $.ajax({
    type: "GET",
    url: "assets/json/quiz.json",
    contentType: "application/json; charset=UTF-8",
  }).done( json => { quizStart(json); })
  .fail(  err => { throw err });

  const result_store = []

  // quizStart -> setQuestion -> checkAns -> setQuestion ... 
  function quizStart(json) {
    console.debug(json);
    window.data_length = json.length;
    window.current_q = 0;
    window.correct_count = 0;
    window.data = json;
    setQuestion();
  }

  function setQuestion() {
    close_modal();
    if (current_q == data_length) {
      console.debug("finish");
      draw_result();
      return;
    }

    $(".q").text(data[current_q].question);
    for (let i = 1; i <= 4; i++) {
      let key = "anser_" + String(i);
      $(`[data-id='${key}']`)
        .text(data[current_q][key]);
    }

    // set image
    $('#quiz img.img-fluid').attr('src', 'assets/images/quiz/quiz-' + String(data[current_q].id) + '.jpg');

    // shuffle elements
    let elements = $('.ans button')
    elements.shuffle();
    $('.ans').empty().append(elements);
    
    // set button events
    for (let i = 1; i <= 4; i++) {
      let key = "anser_" + String(i);
      $(`[data-id='${key}']`).click(function() {checkAns(i); });
    }
  }

  function checkAns(i) {
    const result = (1 == i);
    if ( result ) { correct_count ++; }
    result_store.push(
      {
        question: data[current_q].question,
        correct_anser: data[current_q]["anser_1"],
        your_anser: data[current_q]["anser_" + String(i)]
      }
    )

    current_q ++;
    open_modal(result);
    setTimeout(setQuestion, 500);
  }

  function draw_result() {
    $result_list = $(".result-list");
    result_store.forEach(function(result) {
      let element = $.parseHTML(`
        <div class="mb-5">
          <h4></h4>
          <p class="correct-ans"></p>
          <p class="your-ans"></p>
        </div>
      `);
      $(element).find("h4").text(result.question);
      $(element).find(".correct-ans").text(result.correct_anser);
      $(element).find(".your-ans").text(result.your_anser);
      $result_list.append(element);
    });

    console.debug(current_q, correct_count, Math.round(correct_count / current_q * 1000));
    let correct_answer_rate = Math.round(correct_count / current_q * 1000) / 10;
    $(".correct_answer_rate").text(correct_answer_rate);
    $("#result").removeClass("d-none");
    $("#quiz").addClass("d-none");
  }

  // modal
  //開くボタンをクリックしたらモーダルを表示する
  $('.modal-open').on('click',open_modal);;

  // 変数に要素を入れる
  const container = $('.modal-container');

  function open_modal(result=true) {
    if (result) {
      $(".modal-content p")
        .text("正解")
        .removeClass("incorrect");
    } else {
      $(".modal-content p")
        .text("不正解")
        .addClass("incorrect");
    }

    container.addClass('active');
    return false;
  }

  function close_modal() {
    if(container.hasClass('active')) {
      container.removeClass('active');
    }
  }

});