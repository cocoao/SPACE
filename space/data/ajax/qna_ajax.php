<li class="qnaTitle clear">
  <span class="qnaNum">번호</span>
  <span class="qnaTit">제목</span>
  <span class="qnaId">아이디</span>
  <span class="qnaReg">등록일</span>
  <span class="qnaHit">조회수</span>
</li>

<?php
  $page = $_REQUEST['page'];

  if($page==''){
    $page=1;
  }
  $from = ($page -1)*5;

  include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
  $sql = "select * from SPACE_QNA order by SPACE_QNA_num desc limit $from,5";

  $qna_result = mysqli_query($dbConn, $sql);
  while($qna_row=mysqli_fetch_array($qna_result)){
    $qna_num=$qna_row['SPACE_QNA_num'];
    $qna_id=$qna_row['SPACE_QNA_id'];
    $qna_tit=$qna_row['SPACE_QNA_tit'];
    $qna_reg=$qna_row['SPACE_QNA_reg'];
    $qna_hit=$qna_row['SPACE_QNA_hit'];
    $qna_con=$qna_row['SPACE_QNA_con'];
?>
<li class="qnaContents clear">
  <span class="qnaNum"><?=$qna_num?></span>
  <span class="qnaTit"><?=$qna_tit?></span>
  <span class="qnaId"><?=$qna_id?></span>
  <span class="qnaReg"><?=$qna_reg?></span>
  <span class="qnaHit"><?=$qna_hit?></span>
  <span class="qnaCon"><?=$qna_con?></span>
</li>

<?php
}
?>