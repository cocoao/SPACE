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
  <link rel="stylesheet" href="/space/css/liv_off_sto.css">
  <link rel="stylesheet" href="/space/css/animation.css">
  <link rel="stylesheet" href="/space/css/media.css">

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

    <section class="contents sto">
      <div class="center clear">
        <div class="title">
          <h2>Store Space</h2>
        </div><!-- end of common title -->
        <div class="inBoxes stoBoxes">
        <?php
          include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
          $sql="select * from SPACE_STO order by SPACE_STO_num desc";

          $result=mysqli_query($dbConn,$sql);
          while($row=mysqli_fetch_array($result)){
            $liv_num=$row['SPACE_STO_num'];
            $liv_main=$row['SPACE_STO_img1'];
        ?>
          <div class="inBox stoBox">
            <div class="imgBox">
              <div class="hoverWhite"></div>
              <a href="/space/pages/store/sto_detail.php?num=<?=$liv_num?>" class="viewBtn">view detail</a>
              <img src="/space/data/store/<?=$liv_main?>" alt="store_img" id="imgView">
            </div>
          </div>
          <?php
            }
          ?>  
        </div>
        <div class="inBtns btns">
          <?php
          if($userlevel == 1){
          ?>
          <button class="loadMore">Load More</button>
          <button class="goToTop">go to top</button>
          <button onclick="location.href='/space/pages/store/sto_input_form.php'">upload</button>
          <?php
          } else {
          ?>
          <button class="loadMore">Load More</button>
          <button class="goToTop">go to top</button>
        </div>
        <?php
          }
        ?>
      </div>
    </section>

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php";
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php";
    ?>
  </div><!-- end of wrap -->
</body>
</html>