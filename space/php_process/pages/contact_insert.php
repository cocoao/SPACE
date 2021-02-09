<meta charset='utf-8'>
<?php

$msg_name=$_POST['contName'];
$msg_email=$_POST['contEmail'];
$msg_title=nl2br($_POST['contTit']);
$msg_title=addslashes($msg_title);
$msg_txt=nl2br($_POST['contTxt']);
$msg_txt=addslashes($msg_txt);
$msg_reg=date("Y-m-d H:i:s");

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="insert into SPACE_MSG(SPACE_MSG_name,SPACE_MSG_email,SPACE_MSG_tit,SPACE_MSG_con,SPACE_MSG_reg)value('$msg_name','$msg_email','$msg_title','$msg_txt','$msg_reg')";

mysqli_query($dbConn,$sql);

echo"
<script>
  alert('메세지가 전송되었습니다. ')
  location.href='/space/index.php'
</script>
"
?>