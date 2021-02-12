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
  <link rel="stylesheet" href="/space/css/qna.css">
  <link rel="stylesheet" href="/space/css/animation.css">
  <link rel="stylesheet" href="/space/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="/space/js/custom.js" defer></script>
  <script src="/space/js/qna.js" defer></script>

</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/header.php"
    ?>
    <section class="contents liv">
      <div class="center clear">
        <div class="title">
          <h2>Q&A</h2>
        </div><!-- end of common title -->
        <div class="qnaBoxes">
          <div class="qnaTable">
            <ul class="qnaList">

            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/space/data/ajax/qna_ajax.php"
            ?>

            </ul>
          </div><!-- end of qnaTable -->
          <div class="bottomBox">
            <div class="search">
              <form action="#">
                <select name="searchSelect" id="" class="searchSelect">
                  <option value="qnaSearchID">아이디</option>
                  <option value="qnaSearchTitle">제목</option>
                </select>
                <input type="text" name="searchInput" placeholder="검색어를 입력해주세요." class="searchInput">
                <a type="button" class="qnaSearchBtn"><i class="fa fa-search"></i></a>
              </form>
            </div><!-- end of search -->
            <div class="paging">
              <span class="firstPg" onclick="goFirst()"><i class="fa fa-angle-double-left"></i></span>
              <span class="prevPg" onclick="goPrev()"><i class="fa fa-angle-left"></i></span>
              <?php
              include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
              $sql="select * from SPACE_QNA order by SPACE_QNA_num desc";
              $paging_result=mysqli_query($dbConn,$sql);
              $total_record=mysqli_num_rows($paging_result);
              $scale=5;

              if($total_record % $scale == 0){
                $total_page = floor($total_record/$scale);
              } else {
                $total_page = floor($total_record/$scale) + 1;
              }

              for($i=1; $i<=$total_page; $i++){
              ?>
              <span class="pgNum" onclick="getPage(<?=$i?>)"><?=$i?></span>
              <?php
              }
              ?>
              <span class="nextPg" onclick="goNext()"><i class="fa fa-angle-right"></i></span>
              <span class="lastPg" onclick="goLast()"><i class="fa fa-angle-double-right"></i></span>
            </div><!-- end of paging -->
          </div><!-- end of bottomBox -->
        </div><!-- end of qnaBoxes -->
        <div class="qnaWriteBox">

        <?php
        if($userid == ''){
        ?>
        <div class="qnaWrite">
            <form action="/space/php_process/pages/qna_insert.php?id=<?=$userid?>" method="post" class="qnaWrForm" name="qnaWrForm">
              <input type="text" name="qnaWrTit" id="qnaWrTit" placeholder="제목을 입력해주세요." onclick="plzLogin()">
              <textarea name="qnaWrTxt" id="qnaWrTxt" placeholder="내용을 입력해주세요." onclick="plzLogin()"></textarea>
            </form>
            <div class="qnaWriteBtns">
              <button class="reset" onclick="plzLogin()">RESET</button>
              <button onclick="plzLogin()">SUBMIT</button>
            </div>
          </div>
        </div>
        <?php
        } else {
        ?>
        <div class="qnaWrite">
            <form action="/space/php_process/pages/qna_insert.php?id=<?=$userid?>" method="post" class="qnaWrForm" name="qnaWrForm">
              <input type="text" name="qnaWrTit" id="qnaWrTit" placeholder="제목을 입력해주세요.">
              <textarea name="qnaWrTxt" id="qnaWrTxt" placeholder="내용을 입력해주세요."></textarea>
            </form>
            <div class="qnaWriteBtns">
              <button class="reset">RESET</button>
              <button type="submit" class="submit">SUBMIT</button>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </section><!-- end of liv section -->

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php"
    ?> 
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php"
    ?>

  </div><!-- end of wrap -->
</body>
</html>