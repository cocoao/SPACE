<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPACE</title>

  <!-- favicon link -->
  <link rel="icon" href="/space/img/favicon.ico">
  <link rel="apple-touch-icon" href="/space/img/favicon.ico">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="/space/css/style.css">
  <link rel="stylesheet" href="/space/css/animation.css">
  <link rel="stylesheet" href="/space/css/media.css">
  <link rel="stylesheet" href="/space/css/liv_off_sto.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="/space/js/custom.js" defer></script>
  <script src="/space/js/liv_off_sto.js" defer></script>
</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/header.php"
    ?>

    <section class="contents liv">
      <div class="center clear">
        <div class="title">
          <h2>Living Space</h2>
        </div><!-- end of common title -->
        <div class="inBoxes livBoxes">
          <div class="inBox livBox">
            <div class="imgBox">
            <div class="hoverWhite"></div>
            <a href="/space/pages/living/liv_input_form.php" class="viewBtn">view detail</a>
              <img src="/space/img/L_01_01.jpg" alt="">
            </div>
          </div>
          <div class="inBox livBox">
            <div class="imgBox">
            <div class="hoverWhite"></div>
            <a href="#" class="viewBtn">view detail</a>
              <img src="/space/img/L_01_01.jpg" alt="">
            </div>
          </div>
          <div class="inBox livBox">
            <div class="imgBox">
            <div class="hoverWhite"></div>
            <a href="#" class="viewBtn">view detail</a>
              <img src="/space/img/L_01_01.jpg" alt="">
            </div>
          </div>
          <div class="inBox livBox">
            <div class="imgBox">
            <div class="hoverWhite"></div>
            <a href="#" class="viewBtn">view detail</a>
              <img src="/space/img/L_01_01.jpg" alt="">
            </div>
          </div>
          <div class="inBox livBox">
            <div class="imgBox">
            <div class="hoverWhite"></div>
            <a href="#" class="viewBtn">view detail</a>
              <img src="/space/img/L_01_01.jpg" alt="">
            </div>
          </div>
          <div class="inBox livBox">
            <div class="imgBox">
            <div class="hoverWhite"></div>
            <a href="#" class="viewBtn">view detail</a>
              <img src="/space/img/L_01_01.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="inBtns btns">
          <button class="loadMore">Load More</button>
          <button class="goToTop">go to top</button>
          <button onclick="location.href='/space/pages/living/liv_input_form.php'">upload</button>
        </div>
      </div>
</section>

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php"
    ?> 
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php"
    ?>
  </div><!-- end of wrap -->
</body>
</html>