<?php
require('../app/functions.php');
$title = 'クイズページ';
$page_specific_css = 'assets/css/quiz.css';
$page_specific_js = 'assets/js/quiz.js';

include('../app/_parts/header.php')
?>

<main>
  <h1 class="text-center mb-5">クイズページ</h1>
  <section id="quiz" class="container mb-3">
    <div>
      <h5 class="q">問題文サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</h5>
      <div class="text-center"><img class="img-fluid" style="max-height: 400px;" src="assets/images/question.jpg" alt="クイズ画像"></div>
      <div class="ans row">
        <button class="btn btn-blue col-sm mx-2 my-2" data-id="anser_1">解答1</button>
        <button class="btn btn-blue col-sm mx-2 my-2" data-id="anser_2">解答2</button>
        <button class="btn btn-blue col-sm mx-2 my-2" data-id="anser_3">解答3</button>
        <button class="btn btn-blue col-sm mx-2 my-2" data-id="anser_4">解答4</button>
      </div>
    </div>
  </section>

  <section id="result" class="container mb-3 d-none">
    <div>
      <h2>結果</h2>
      <h3 class="mt-5">
        正答率
        <span class="correct_answer_rate">0</span>
      </h3>
      <div class="result-list mt-5"></div>
    </div>
    <a href="quiz.php" class="text-decoration-none"><button class="btn btn-block btn-blue mb-5">もう一度</button></a>
  </section>
</main>

<div class="modal-container">
  <div class="modal-body">
    <div class="modal-content">
      <p>正解</p>
    </div>
  </div>
</div>

<?php
include('../app/_parts/footer.php');