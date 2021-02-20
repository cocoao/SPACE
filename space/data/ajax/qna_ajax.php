
<?php
session_start();
if(isset($_SESSION["userlevel"])){
    $userlevel=$_SESSION["userlevel"];
  }else{
    $userlevel='';
  }

?>
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

  // $new_hit = $qna_hit + 1;
  // $hit_sql = "update SPACE_QNA set GOLD_QNA_hit='$new_hit' where GOLD_QNA_num=$qna_num";
  // mysqli_query($dbConn,$hit_sql); 

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
<li class="qnaContents clear">
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
  <form action="/space/php_process/pages/qna_update.php?num=<?=$qna_num?>" method="post" name="qnaUpdate">  
  <span class="qnaTit">
  <p class="nowTit"><?=$qna_tit?></p>
    <input type="text" value="<?=$qna_tit?>" class="hiddenTit" name="updateTit">
  </span>
  <?php
  } else {
  ?>
  <span class="qnaTit">
    <p class="nowTit"><?=$qna_tit?> [답변완료]</p>
    <input type="text" value="<?=$qna_tit?>" class="hiddenTit" name="updateTit">
    </span>
  <?php
  }
  ?>
  <span class="qnaId"><?=$qna_id?></span>
  <span class="qnaReg"><?=$qna_reg?></span>
  <span class="qnaHit"><?=$qna_hit?></span>
</li>

<?php
if(!$userlevel == 1){
?> 

<div class="txtBox clear">
  <div class="txtBoxWrap">
  <div class="qnaConBtnBox">
    <span class="qnaCon">
      <p class="nowCon"><?=$qna_con?></p>
      <textarea class="hiddenCon" value="<?=$qna_con?>" name="updateCon"><?=$qna_con?></textarea>
    </span>
    <div class="qnaBtns">
      <div class="qnaBtn">  
        <button type="button" class="qnaUpdateBtn">수정</button>
        <button type="button" class="hiddenDelete">삭제</button>
        <button type="submit" onclick="qnaUpdate()" class="hiddenUpdate">등록</button>
      </div>
    </div>
  </div>
  <?php
    if(!$ans_num_row){
  ?>
  <spqn class="hidden"></spqn>
  <?php
    } else if($ans_num_row){
  ?>
  <span class="qnaAns">
    <em><?=$ans_con?></em>
    <span>
      <p><?=$ans_reg?></p>
    </span>
  </span>
  <?php
    }
  ?>
  </div>  
</div>

<?php
} else {
?>

<div class="txtBox clear">
  <div class="txtBoxWrap">
  <div class="qnaConBtnBox">
    <span class="qnaCon">
      <p class="nowCon"><?=$qna_con?></p>
      <textarea class="hiddenCon" value="<?=$qna_con?>" name="updateCon"><?=$qna_con?></textarea>
    </span>
    <div class="qnaBtns">
      <div class="qnaBtn">
        <button type="button" class="qnaUpdateBtn">수정</button>
        <button type="button" class="hiddenDelete">삭제</button>
        <button type="submit" onclick="qnaUpdate()" class="hiddenUpdate">등록</button>
      </div>
    </div>
  </div>
  </form>
  <?php
    if(!$ans_num_row){
  ?>
    <div class="ansWrite">
      <form action="/space/php_process/pages/ans_insert.php?num=<?=$qna_num?>" method="post" class="ansWrForm" name="ansWrForm" id="ansWrForm" enctype="multipart/form-data">
        <textarea name="ansWrTxt" id="ansWrTxt" placeholder="내용을 입력해주세요."></textarea>
        <div class="ansWriteBtns">
          <button type="submit" class="ansSubmit">SUBMIT</button>
        </div>
      </form>
    </div>
  <?php
    } else if($ans_num_row){
  ?>
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
  <?php
    }
  ?>
  </div>  
</div>

<?php
  }
}
?>