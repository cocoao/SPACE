<?php
$sto_detail_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

$sql="select* from SPACE_STO where SPACE_STO_num=$sto_detail_num";

$result=mysqli_query($dbConn,$sql);
$row_result=mysqli_fetch_array($result);

$sto__detail_tit=$row_result['SPACE_STO_tit'];
$sto__detail_type=$row_result['SPACE_STO_type'];
$sto__detail_cli=$row_result['SPACE_STO_cli'];
$sto__detail_term=$row_result['SPACE_STO_term'];
$sto__detail_desc=$row_result['SPACE_STO_desc'];
$sto__detail_img1=$row_result['SPACE_STO_img1'];
$sto__detail_img2=$row_result['SPACE_STO_img2'];
$sto__detail_img3=$row_result['SPACE_STO_img3'];
$sto__detail_img4=$row_result['SPACE_STO_img4'];
?>

<div class="uploadBox">
  <form action="/space/php_process/pages/sto_update.php?num=<?=$sto_detail_num?>" method="post" name="uploadForm" class="uploadForm" enctype="multipart/form-data">
    <div class="inputUnit">
      <p class="title_input">
        <label for="title">Title</label>
        <input type="text" value="<?=$sto__detail_tit?>" id="title" name="title">
      </p>
      <p class="type_input">
        <label for="type">Type</label>
        <input type="text" value="<?=$sto__detail_type?>" id="type" name="type">
      </p>
    </div>
    <div class="inputUnit">
      <p class="client_input">
        <label for="client">Client</label>
        <input type="text" value="<?=$sto__detail_cli?>" id="client" name="client">
      </p>
      <p class="term_input">
        <label for="term">Term</label>
        <input type="text" value="<?=$sto__detail_term?>" id="term" name="term">
      </p>
    </div>
    <div class="desc_input">
      <textarea name="desc"><?=$sto__detail_desc?></textarea>
    </div>
    <div class="imgUploadBox">
      <div class="imgUpload">
        <div class="inputControll">
          <input class="uploadName" value="<?=$sto__detail_img1?>" id="uploadName1">
          <label for="mainImage">SELECT IMAGE</label>
          <input type="file" id="mainImage" name="main" class="uploadHidden">
        </div>
        <div class="formImgBox">
          <img id="main" src="/space/data/store/<?=$sto__detail_img1?>">
        </div>
      </div><!-- end of uploadBox -->
      <div class="imgUpload">
        <div class="inputControll">
          <input class="uploadName" value="<?=$sto__detail_img2?>" id="uploadName2">
          <label for="subImage1">SELECT IMAGE</label>
          <input type="file" id="subImage1" name="sub1"class="uploadHidden">
        </div>
        <div class="formImgBox">
          <img id="sub1" src="/space/data/store/<?=$sto__detail_img2?>">
        </div>
      </div><!-- end of uploadBox -->
      <div class="imgUpload">
        <div class="inputControll">
          <input class="uploadName" value="<?=$sto__detail_img3?>" id="uploadName3">
          <label for="subImage2">SELECT IMAGE</label>
          <input type="file" id="subImage2" name="sub2"class="uploadHidden">
        </div>
        <div class="formImgBox">
          <img id="sub2" src="/space/data/store/<?=$sto__detail_img3?>">
        </div>
      </div><!-- end of uploadBox -->
      <div class="imgUpload">
        <div class="inputControll">
          <input class="uploadName" value="<?=$sto__detail_img4?>" id="uploadName4">
          <label for="subImage3">SELECT IMAGE</label>
          <input type="file" id="subImage3" name="sub3"class="uploadHidden">
        </div>
        <div class="formImgBox">
          <img id="sub3" src="/space/data/store/<?=$sto__detail_img4?>">
        </div>
      </div><!-- end of uploadBox -->
    </div><!-- end of imgUploadBox -->
  </form>
  <div class="btns">
    <a href="#" id="resetBtn">RESET</a>
    <a href="#" id="submitBtn">UPDATE</a>
  </div>
</div>