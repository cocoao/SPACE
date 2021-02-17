<meta charset='utf-8'>
<?php
$admin_qna_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="delete from SPACE_QNA where SPACE_QNA_num=$admin_qna_num";

mysqli_query($dbConn,$sql);

echo"
<script>
 alert('삭제가 완료되었습니다.')
 location.href='/space/pages/admin/admin.php?key=admin_qna'
</script>
"
?>