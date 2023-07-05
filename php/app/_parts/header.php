<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="G8">
  <title><?= h($title) ?> | 快眠企画</title>
  <link rel="icon" href="favicon.ico">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/hamberger.css">
  
  <?php if (isset($page_specific_css)): ?>
    <link rel="stylesheet" type="text/css" href="<?= $page_specific_css; ?>">
  <?php endif; ?>

  <!-- javascript -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <?php if (isset($page_specific_js)): ?>
    <script src=<?= $page_specific_js; ?> defer></script>
  <?php endif; ?>
</head>

<body>
  <div id="wrapper">
    <header class="d-flex align-items-center flex-grow-1 sticky-top">
      <input type="checkbox" id="overlay-input" />
      <label for="overlay-input" id="overlay-button"><span></span></label>
      <nav id="overlay">
        <ul class="uppercase-text d-flex gap-2 justify-content-between align-items-center mb-0">
          <li><a href="index.php">快眠企画</a></li>
          <li><a href="risk.php">risk</a></li>
          <li><a href="study.php">study</a></li>
          <li><a href="quality.php">quality</a></li>
          <li><a href="community.php">community</a></li>
          <li><a href="implementation.php">implementation</a></li>
          <li><a href="quiz.php">quiz</a></li>
          <li><a href="aboutus.php">about us</a></li>
      </nav>
    </header>