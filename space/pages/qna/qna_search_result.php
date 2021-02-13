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
        <div class="qnaBoxes qnaResult">
          <div class="qnaTable">
            <ul class="qnaList">

            <li class="qnaTitle clear">
              <span class="qnaNum">번호</span>
              <span class="qnaTit">제목</span>
              <span class="qnaId">아이디</span>
              <span class="qnaReg">등록일</span>
              <span class="qnaHit">조회수</span>
            </li>

            <?php
              $search_select=$_POST['searchSelect'];
              $search_input=$_POST['searchInput'];

              include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
              if($search_select == 'qnaSearchID'){
                $sql="select * from SPACE_QNA where SPACE_QNA_id like '%$search_input%' order by SPACE_QNA_num desc";
              } else {
                $sql="select * from SPACE_QNA where SPACE_QNA_tit like '%$search_input%' order by SPACE_QNA_num desc";
              }
              $search_result=mysqli_query($dbConn,$sql);
              $search_result_num=mysqli_num_rows($search_result);

              if(!$search_result_num){
                echo '<li style="padding:10px 0; width:100%; text-align:center;">데이터가 존재하지않습니다. 검색 조건 및 검색어를 확인해주세요.</li>';
              } else {
                while($search_result_row=mysqli_fetch_array($search_result)){
                  $qna_result_num=$search_result_row['SPACE_QNA_num'];
                  $qna_result_id=$search_result_row['SPACE_QNA_id'];
                  $qna_result_tit=$search_result_row['SPACE_QNA_tit'];
                  $qna_result_reg=$search_result_row['SPACE_QNA_reg'];
                  $qna_result_hit=$search_result_row['SPACE_QNA_hit'];
            ?>
            <li class="qnaContents clear">
              <span class="qnaNum"><?=$qna_result_num?></span>
              <span class="qnaTit"><a href="/space/pages/qna/qna_view.php?num<?=$qna_result_num?>"><?=$qna_result_tit?></a></span>
              <span class="qnaId"><?=$qna_result_id?></span>
              <span class="qnaReg"><?=$qna_result_reg?></span>
              <span class="qnaHit"><?=$qna_result_hit?></span>
            </li>
            <?php
                }
              }
            ?>
            </ul>
            <div class="bottomBox">
              <div class="btns">
                <button onclick="returnPage()">RETURN</button>
              </div>
            <div class="paging">
              <span class="firstPg" onclick="goFirst()"><i class="fa fa-angle-double-left"></i></span>
              <span class="prevPg" onclick="goPrev()"><i class="fa fa-angle-left"></i></span>
              <?php
              $total_record=mysqli_num_rows($search_result);
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
          </div><!-- end of qnaTable -->

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