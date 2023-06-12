$(document).ready(function() {

  // get quiz list
  $.ajax({
    type: "GET",
    url: "assets/json/quiz.json",
    contentType: "application/json; charset=UTF-8",
  }).done( json => { quizStart(json); })
  .fail(  err => { throw err });

  // set button events
  for (let i = 1; i <= 4; i++) {
    let key = "anser_" + String(i);
    $(`[data-id='${key}']`).click(function() {checkAns(i); });
  }
  const anser_store = []

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
      return;
    }

    $(".q").text(data[current_q].question);
    for (let i = 1; i <= 4; i++) {
      let key = "anser_" + String(i);
      $(`[data-id='${key}']`)
        .text(data[current_q][key]);
    }
  }

  function checkAns(i) {
    const result = data[current_q].collect_anser == i;
    if ( result ) { correct_count ++; }

    current_q ++;
    open_modal(result);
    setTimeout(setQuestion, 500);
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