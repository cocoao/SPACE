<div class="subMenu">
  <div class="subBox">
    <div class="subTit">
      <h3>Store space</h3>
      <a href="/space/pages/store/sto.php">MORE</a>
    </div>
    <hr>
      <div class="subImgBoxes">
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
        $sql="select * from SPACE_STO order by SPACE_STO_num desc limit 3";

        $result=mysqli_query($dbConn,$sql);
        while($row=mysqli_fetch_array($result)){
          $sto_num=$row['SPACE_STO_num'];
          $sto_main=$row['SPACE_STO_img1'];
        ?>
        <div class="subImgBox">
          <a href="/space/pages/store/sto_detail.php?num=<?=$sto_num?>">
          <span class="hoverWhite"></span>
          <img src="/space/data/store/<?=$sto_main?>" alt="store_img">
          </a>
        </div>
        <?php
        }
        ?>
      </div>
  </div>
</div><!-- end of subMenu-->