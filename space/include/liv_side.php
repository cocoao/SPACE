<div class="subMenu">
  <div class="subBox">
    <div class="subTit">
      <h3>Living space</h3>
      <a href="/space/pages/living/liv.php">MORE</a>
    </div>
    <hr>
    <div class="subImgBoxes">
      <?php
      include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
      $sql="select * from SPACE_LIV order by SPACE_LIV_num desc limit 3";

      $result=mysqli_query($dbConn,$sql);
      while($row=mysqli_fetch_array($result)){
        $liv_num=$row['SPACE_LIV_num'];
        $liv_main=$row['SPACE_LIV_img1'];
      ?>
      <div class="subImgBox">
        <a href="/space/pages/living/liv_detail.php?num=<?=$liv_num?>">
          <span class="hoverWhite"></span>
          <img src="/space/data/living/<?=$liv_main?>" alt="living_img">
        </a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</div><!-- end of subMenu-->