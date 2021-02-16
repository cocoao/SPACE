<?php
$liv__detail_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="select* from SPACE_LIV where SPACE_LIV_num=$liv__detail_num";

$result=mysqli_query($dbConn,$sql);
$row_result=mysqli_fetch_array($result);

$liv__detail_tit=$row_result['SPACE_LIV_tit'];
$liv__detail_type=$row_result['SPACE_LIV_type'];
$liv__detail_cli=$row_result['SPACE_LIV_cli'];
$liv__detail_term=$row_result['SPACE_LIV_term'];
$liv__detail_desc=nl2br($row_result['SPACE_LIV_desc']);
$liv__detail_desc = addslashes($liv__detail_desc);

$liv__detail_img1=$row_result['SPACE_LIV_img1'];
$liv__detail_img2=$row_result['SPACE_LIV_img2'];
$liv__detail_img3=$row_result['SPACE_LIV_img3'];
$liv__detail_img4=$row_result['SPACE_LIV_img4'];

if(!$liv__detail_img3){
?>
<style>
  .imgNav a:nth-child(3){display:none;}
</style>
<?php  
}
if(!$liv__detail_img4){
?>
<style>
  .imgNav a:nth-child(4){display:none;}
</style>
<?php  
}
?>

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

    <section class="contents livDetail detailContents">
      <div class="center clear">
        <div class="title">
          <h2><?=$liv__detail_tit?></h2>
        </div><!-- end of common title -->
        <div class="detailBox">
          <div class="leftBox clear">
            <div class="sideBox">
              <div class="imgNav">
                <a href="#" class="active">
                  <span class="hoverWhite"></span>
                  <img src="/space/data/living/<?=$liv__detail_img1?>" alt="living1">
                </a>
                <a href="#">
                  <span class="hoverWhite"></span>
                  <img src="/space/data/living/<?=$liv__detail_img2?>" alt="living1">
                </a>
                <a href="#">
                  <span class="hoverWhite"></span>
                  <img src="/space/data/living/<?=$liv__detail_img3?>" alt="living1">
                </a>
                <a href="#">
                  <span class="hoverWhite"></span>
                  <img src="/space/data/living/<?=$liv__detail_img4?>" alt="living1">
                </a>
              </div>
              <div class="btns">
                <a href="/space/pages/admin/update_form.php?key=liv_update_form&num=<?=$liv__detail_num?>">UPDATE</a>
                <a href="/space/php_process/pages/liv_detail_delete.php?num=<?=$liv__detail_num?>">DELETE</a>
             </div>
            </div>
            <div class="imgBoxes">
              <div class="imgBox">
                <img src="/space/data/living/<?=$liv__detail_img1?>" alt="living1">
              </div>
              <div class="imgBox">
                <img src="/space/data/living/<?=$liv__detail_img2?>" alt="living1">
              </div>
              <div class="imgBox">
                <img src="/space/data/living/<?=$liv__detail_img3?>" alt="living1">
              </div>
              <div class="imgBox">
                <img src="/space/data/living/<?=$liv__detail_img4?>" alt="living1">
              </div>
            </div>
          </div><!-- end of left box -->
          <div class="rightBox">
            <div class="txtBox">
              <div class="leftTxt">
                <p>Type</p>
                <p>Client</p>
                <p>Term</p>
                <p>Explain</p>
              </div>
              <div class="lineBox">
                <span> | </span>
                <span> | </span>
                <span> | </span>
                <span> | </span>
              </div>
              <div class="rightTxt">
                <p><?=$liv__detail_type?></p>
                <p><?=$liv__detail_cli?></p>
                <p><?=$liv__detail_term?></p>
                <p><?=$liv__detail_desc?></p>
              </div>
            </div>

            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/space/include/off_side.php";
            include $_SERVER["DOCUMENT_ROOT"]."/space/include/sto_side.php";
            ?> 

          </div>
        </div><!-- end of detail box -->
      </div><!-- end of center -->
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