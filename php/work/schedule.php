<?php
require('../app/functions.php');
$title = '勉強スケジュール生成';

include('../app/_parts/header.php')
?>
    
<main>
  <h1 class="text-center mb-5">勉強スケジュール生成</h1>

  <section class="container mb-3">
    <h2>勉強スケジュールを提案するにあたって</h2>
    <p>スケジュール作成に必要な情報を収集するためのフォームを作成しました。ご協力いただければ幸いです。</p>
  </section>

  <section class="container mb-3">
    <h2>あなたの生活について教えてください</h2>
    <form class="mb-2"> 
      <div class="form-group">
        <h3>年齢</h3>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="age" id="age-childish" value="childish">
            <label class="form-check-label" for="age-childish">10～13歳</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="age" id="age-young" value="young"  checked>
            <label class="form-check-label" for="age-young">14～18歳</label>
          </div>
      </div>
      <div class="form-group">
        <h3>モード選択</h3>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mode" id="mode-study" value="study" checked>
            <label class="form-check-label" for="mode-study">勉強用</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mode" id="mode-general" value="general">
            <label class="form-check-label" for="mode-general">一般用</label>
          </div>
      </div>
      
      <div class="form-group">
        <H3>家を出る時間</H3>
        <select class="custom-select">
            <option value="6:00">6:00</option>
            <option value="6:15">6:15</option>
            <option value="6:30">6:30</option>
            <option value="6:45">6:45</option>
            <option value="7:00">7:00</option>
            <option value="7:15">7:15</option>
            <option value="7:30">7:30</option>
            <option value="7:45">7:45</option>
            <option value="8:00">8:00</option>
            <option value="8:15">8:15</option>
            <option value="8:30">8:30</option>
            <option value="8:45">8:45</option>
            <option value="9:00">9:00</option>
            <option value="9:15">9:15</option>
            <option value="9:30">9:30</option>
            <option value="9:45">9:45</option>
            <option value="10:00">10:00</option>
            <option value="10:15">10:15</option>
            <option value="10:30">10:30</option>
            <option value="10:45">10:45</option>
            <option value="11:00">11:00</option>
            <option value="11:15">11:15</option>
            <option value="11:30">11:30</option>
            <option value="11:45">11:45</option>
            <option value="12:00">12:00</option>
        </select>
      </div>
      
      <div class="form-group">
        <H3>帰宅時間</H3>
        <select class="custom-select">
            <option value="14:00">14:00</option>
            <option value="14:15">14:15</option>
            <option value="14:30">14:30</option>
            <option value="14:45">14:45</option>
            <option value="15:00">15:00</option>
            <option value="15:15">15:15</option>
            <option value="15:30">15:30</option>
            <option value="15:45">15:45</option>
            <option value="16:00">16:00</option>
            <option value="16:15">16:15</option>
            <option value="16:30">16:30</option>
            <option value="16:45">16:45</option>
            <option value="17:00">17:00</option>
            <option value="17:15">17:15</option>
            <option value="17:30">17:30</option>
            <option value="17:45">17:45</option>
            <option value="18:00">18:00</option>
            <option value="18:15">18:15</option>
            <option value="18:30">18:30</option>
            <option value="18:45">18:45</option>
            <option value="19:00">19:00</option>
            <option value="19:15">19:15</option>
            <option value="19:30">19:30</option>
            <option value="19:45">19:45</option>
            <option value="20:00">20:00</option>
        </select>
      </div>

      <div class="form-group">
        <h3>勉強する科目</h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="subject-humanities" value="humanities">
          <label class="form-check-label" for="subject-humanities">文系科目</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="subject-sciences" value="sciences">
          <label class="form-check-label" for="subject-sciences">理数科目</label>
        </div>
      </div>

      <div class="form-group">
        <h3>課題の有無</h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="task" id="task-exists" value="exists" checked>
          <label class="form-check-label" for="task-exists">ある</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="task" id="task-none" value="none">
          <label class="form-check-label" for="task-none">ない</label>
        </div>
      </div>

      <div class="form-group">
        <h3>希望勉強時間</h3>
        <label for="study-hours"><span class="range-value">2</span>時間</label>
        <input type="range" class="custom-range" min="2" max="10" value="2" id="study-hours">
      </div>

      <button type="button" class="btn btn-block btn-blue submit-forms-btn">Submit</button>
    </form>
  </section>
</main>

<script>
  let $range = $(".range-value");
  $('#study-hours').change( function() {
    $range.text($(this).val());
  });

  $('.submit-forms-btn').click(function() {
    alert('ご提供いただいた情報をもとにスケジュールの提案を作成します。');
    window.open('assets/images/schedule.jpg', '_blank');
  });
</script>

<?php
include('../app/_parts/header.php');