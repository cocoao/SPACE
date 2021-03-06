<div class="subMenu">
  <div class="subBox">
    <div class="subTit">
      <h3>Office space</h3>
      <a href="/space/pages/office/off.php">MORE</a>
    </div>
    <hr>
    <div class="subImgBoxes">
      <?php
      include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
      $sql="select * from SPACE_OFF order by SPACE_OFF_num desc limit 3";

      $result=mysqli_query($dbConn,$sql);
      while($row=mysqli_fetch_array($result)){
        $off_num=$row['SPACE_OFF_num'];
        $off_main=$row['SPACE_OFF_img1'];
      ?>
      <div class="subImgBox">
        <a href="/space/pages/office/off_detail.php?num=<?=$off_num?>">
          <span class="hoverWhite"></span>
          <img src="/space/data/office/<?=$off_main?>" alt="office_img">
        </a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</div><!-- end of subMenu-->