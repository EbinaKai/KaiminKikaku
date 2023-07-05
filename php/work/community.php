<?php
require('../app/functions.php');
$title = '睡眠関係についてのコミュニティ案内';

include('../app/_parts/header.php')
?>

<main>
  <h1 class="text-center mb-5">睡眠関係についてのコミュニティ案内</h1>

  
  
  <section class="container mb-3">
    <h2>コミュニティー概要</h2>
    <p>私達快眠企画は、みなさんの睡眠に対する意識を上げるお手伝いができるように、睡眠に関する情報を発信しております。</p>
  </section>
  <section class="container mb-3">
    <h2>寝る前に読むのにおすすめBOOK</h2>
    <dl>
      <dt>1位</dt>
      <dd>本のタイトル</dd>
      <dt>2位</dt>
      <dd>本のタイトル</dd>
      <dt>3位</dt>
      <dd>本のタイトル</dd>
    </dl>
  </section>

  <section class="container mb-3">
    <h2>お問い合わせ</h2>
    <form class="mb-2"> 
      <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" id="InputName" placeholder="Your name">
      </div>
      <div class="form-group">
        <label for="InputEmail">Email</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="FormControlTextarea">Message</label>
        <textarea class="form-control" id="FormControlTextarea" rows="5" placeholder="Message here"></textarea>
      </div>
      <button type="submit" class="btn btn-blue">Submit</button>
    </form>
  </section>
</main>

<?php
include('../app/_parts/footer.php');