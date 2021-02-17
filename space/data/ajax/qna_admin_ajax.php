
<li class="adminTitle clear">
  <span class="qnaCheck">삭제</span>
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

$sql="select * from SPACE_QNA order by SPACE_QNA_num desc limit $from,5";
$qna_result=mysqli_query($dbConn,$sql);

while($qna_row=mysqli_fetch_array($qna_result)){
  $qna_num=$qna_row['SPACE_QNA_num'];
  $qna_id=$qna_row['SPACE_QNA_id'];
  $qna_tit=nl2br($qna_row['SPACE_QNA_tit']);
  $qna_tit=addslashes($qna_tit);
  $qna_reg=$qna_row['SPACE_QNA_reg'];
  $qna_hit=$qna_row['SPACE_QNA_hit'];
  $qna_con=nl2br($qna_row['SPACE_QNA_con']);
  $qna_con=addslashes($qna_con);
?>
<form action="/space/php_process/admin/qna_check_delete.php?num=<?=$qna_num?>" method="post" name="adminDelete" class="adminDelete">
<li class="adminContents clear qnaContents">
<span class="qnaCheck"><button type="submit" class="qnaDelBtn" onclick="confirmDel()">DELETE</button></span>
<!-- <span class="qnaCheck"><input type="checkbox" name="item[]" value="<?=$qna_num?>"></span> -->
<span class="qnaNum"><?=$qna_num?></span>

<?php
  $ans_sql="select * from SPACE_ANS where SPACE_ANS_QNA_num=$qna_num order by SPACE_ANS_num desc";
  $ans_result = mysqli_query($dbConn, $ans_sql);
  $ans_num_row=mysqli_num_rows($ans_result);
  $ans_row=mysqli_fetch_array($ans_result);
  $ans_num=$ans_row['SPACE_ANS_num'];
  $ans_con=nl2br($ans_row['SPACE_ANS_con']);
  $ans_con=addslashes($ans_con);
  $ans_reg=$ans_row['SPACE_ANS_reg'];
  if(!$ans_num_row){
?>
<span class="qnaTit"><?=$qna_tit?></span>
<?php
} else {
?>
<span class="qnaTit"><?=$qna_tit?> [답변완료]</span>
<?php
}
?>
<span class="qnaId"><?=$qna_id?></span>
<span class="qnaReg"><?=$qna_reg?></span>
<span class="qnaHit"><?=$qna_hit?></span>
</li>
</form>
<div class="txtBox clear">
  <span class="qnaCon"><?=$qna_con?></span>
  <span class="qnaAns">
    <em><?=$ans_con?></em>
    <span>
      <a href="/space/php_process/admin/ans_delete.php?num=<?=$ans_num?>" class="ansDelete">DELETE</a>
      <p><?=$ans_reg?></p>
    </span>
  </span>
  <div class="ansWrite">
    <form action="/space/php_process/pages/ans_insert.php?num=<?=$qna_num?>" method="post" class="ansWrForm" name="ansWrForm" id="ansWrForm" enctype="multipart/form-data">
      <textarea name="ansWrTxt" id="ansWrTxt" placeholder="내용을 입력해주세요."></textarea>
      <div class="ansWriteBtns">
        <button type="submit" class="ansSubmit">SUBMIT</button>
      </div>
    </form>
  </div>  
</div>
<?php
}
?>