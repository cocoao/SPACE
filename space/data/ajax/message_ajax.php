
<li class="adminTitle clear">
  <span class="msgCheck">선택</span>
  <span class="msgNum">번호</span>
  <span class="msgTit">제목</span>
  <span class="msgName">이름</span>
  <span class="msgEmail">이메일</span>
  <span class="msgReg">등록일</span>
</li>
<?php
$page = $_REQUEST['page'];

if($page==''){
  $page=1;
}
$from = ($page -1)*5;

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

$sql="select * from SPACE_MSG order by SPACE_MSG_num desc limit $from,5";
$msg_result=mysqli_query($dbConn,$sql);

while($msg_row=mysqli_fetch_array($msg_result)){
  $msg_num = $msg_row['SPACE_MSG_num'];
  $msg_tit = $msg_row['SPACE_MSG_tit'];
  $msg_name = $msg_row['SPACE_MSG_name'];
  $msg_email = $msg_row['SPACE_MSG_email'];
  $msg_reg = $msg_row['SPACE_MSG_reg'];
  $msg_con = $msg_row['SPACE_MSG_con'];
?>
<form action="/space/php_process/admin/msg_check_delete.php" method="post" name="adminDelete">
<li class="adminContents clear">
  <span class="msgCheck"><input type="checkbox" name="item[]" value="<?=$msg_num?>"></span>
  <span class="msgNum"><?=$msg_num?></span>
  <span class="msgTit"><?=$msg_tit?></span>
  <span class="msgName"><?=$msg_name?></span>
  <span class="msgEmail"><?=$msg_email?></span>
  <span class="msgReg"><?=$msg_reg?></span>
</li>
<div class="txtBox clear">
  <span class="msgCon"><?=$msg_con?></span>
</div>
<?php
}
?>
</form>
