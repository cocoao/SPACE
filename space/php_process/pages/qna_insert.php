<meta charset='utf-8'>

<?php
$qna_id=$_GET['id'];
$qna_tit=$_POST['qnaWrTit'];
$qna_txt=$_POST['qnaWrTxt'];
$qna_reg=date('Y-m-d');
$qna_hit=0;

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

$sql = "insert into SPACE_QNA(SPACE_QNA_id,SPACE_QNA_tit,SPACE_QNA_con,SPACE_QNA_reg,SPACE_QNA_hit) values ('$qna_id','$qna_tit','$qna_txt','$qna_reg','$qna_hit')";

mysqli_query($dbConn,$sql);

echo "
<script>
  alert('글이 등록되었습니다.')
  location.href='/space/pages/qna/qna.php'  
</script>
"
?>