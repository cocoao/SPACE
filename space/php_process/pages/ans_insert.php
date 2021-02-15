<meta charset="UTF-8">
<?php

$ans_qna_num=$_GET['num'];
$ans_txt=$_POST['ansWrTxt'];
$ans_reg=date('Y-m-d');

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="insert into SPACE_ANS(SPACE_ANS_QNA_num,SPACE_ANS_con,SPACE_ANS_reg) values('$ans_qna_num','$ans_txt','$ans_reg')";
mysqli_query($dbConn,$sql);

echo "
<script>
alert ('답글이 등록되었습니다.');
history.go(-1);
</script>
";
?>