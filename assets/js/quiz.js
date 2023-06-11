$(document).ready(function() {
  $.ajax({
    type: "GET",
    url: "assets/json/quiz.json",
    contentType: "application/json; charset=UTF-8",
  }).done( json => { quizStart(json); })
  .fail(  err => { throw err });

  for (let i = 1; i <= 4; i++) {
    let key = "anser_" + String(i);
    $(`[data-id='${key}']`).click(function() {checkAns(i); });
  }

  function quizStart(json) {
    console.debug(json);
    window.data_length = json.length;
    window.current_q = 0;
    window.correct_count = 0;
    window.data = json;
    setQuestion();
  }
  function setQuestion() {
    for (let i = 1; i <= 4; i++) {
      let key = "anser_" + String(i);
      $(`[data-id='${key}']`)
        .text(data[current_q][key]);
    }
  }
  function checkAns(i) {
    if ( data[current_q].collect_anser == i ) {
      correct_count ++;
      console.debug("yes");
    } else {
      console.debug("no");
    }

    current_q ++;
    console.debug(current_q)
    if (current_q != data_length) {
      setTimeout(setQuestion, 300);
    } else {
      console.debug("finish");
    }
  }

  // 変数に要素を入れる
  var open = $('.modal-open');
  const container = $('.modal-container');

  //開くボタンをクリックしたらモーダルを表示する
  open.on('click',function(){ 
    container.addClass('active');
    return false;
  });

  //モーダルの外側をクリックしたらモーダルを閉じる
  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal-body').length) {
      container.removeClass('active');
    }
  });
});