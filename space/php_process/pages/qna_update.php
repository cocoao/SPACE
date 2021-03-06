<meta charset="UTF-8">
<?php

$qna_update_num = $_GET['num'];
$qna_update_tit = $_POST['updateTit'];
$qna_update_con = $_POST['updateCon'];

echo $qna_update_num,$qna_update_tit ,$qna_update_con;

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

$sql = "UPDATE SPACE_QNA SET SPACE_QNA_tit='$qna_update_tit, SPACE_QAN_con='$qna_update_con' WHERE SPACE_QNA_num='$qna_update_num'";

mysqli_query($dbConn,$sql);

// echo "
// <script>
//   alert('수정이 완료되었습니다.');
//   location.href='/space/pages/qna/qna_view.php?num=$qna_update_num';
// </script>
// "
?>