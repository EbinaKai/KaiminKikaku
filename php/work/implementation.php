<?php
require('../app/functions.php');
$title = '企業向けページ';

include('../app/_parts/header.php')
?>

<main>
  <h1 class="text-center mb-5">企業向けページ</h1>

  <section class="container mb-3">
    <h2>仮眠室の導入をご検討されている皆様へ</h2>
    <p>仮眠は仕事や勉学の効率化をはかるためにとても効果的な方法の一つだといえます。そのため、仮眠室の導入はとても生産性のあることです。</p>
    <p>ですが、ただ寝るだけではいいというわけではありません。リラックスかつしっかりと休憩するためにも、睡眠の質の向上はとても重要な要素であります。</p>
    <p>昨今、仮眠室の重要性が世の中で浸透しつつあります。その中で仮眠室の需要もあがってきています。私共からは、「より快適」、「より格安」をモットーに仮眠室の提案させていただいております。</p>
  </section>

  <section class="container mb-3">
    <h2>理想的な仮眠室とは</h2>
    <p>理想的な仮眠室の実現のためにわたくしたちは5つの要素について着目しました。</p>
    <ul>
      <li>清潔感</li>
      <li>プライバシー保護</li>
      <li>低コスト</li>
      <li>設備の充実</li>
      <li>安心感</li>
    </ul>
    <p>設備を充実させるために合同開発を行い開発したオリジナル寝具一式を配備し、より快適な睡眠を提供いたします。</p>
    <p>また、これらの5つの要素を満たすためにはカプセル型の仮眠室がおすすめです。完全個室かつオリジナル寝具を配置することによりプライバシーの配慮、設備の充実、安心感を与える空間の提供が行えます。</p>
    <img class="img-fluid pb-3" src="assets/images/sample_image.jpg" alt="サンプル画像">
  </section>

  <section class="container mb-3">
    <h2>ニーズに合わせた仮眠室</h2>
    <p>様々なニーズに合わせた仮眠室を提供するために、3つの仮眠室モデルを提案させていただきます。</p>
    <p>1.大部屋</p>
    <p>大きなスペースかつ大人数で仮眠室を使いたい人向けのモデルです。</p>
    <img class="img-fluid pb-3 w-75 mx-auto d-block" src="assets/images/Big_image.png" alt="仮眠室（大）">
    
    <p>2.個室</p>
    <p>スペースの大きさで個室の数をカスタマイズすることができます。</p>
    <img class="img-fluid pb-3 w-75 mx-auto d-block" src="assets/images/Private_image.png" alt="仮眠室（個室）">

    <p>3.カプセル型</p>
    <p>大小さまざまなスペースに合わせて配置できます。</p>
    <img class="img-fluid pb-3 w-75 mx-auto d-block" src="assets/images/Capsule_image.png" alt="仮眠室（カプセル）">
  </section>

  <?php
    include('../app/_parts/article_list.php');
  ?>

</main>

<?php
include('../app/_parts/header.php');