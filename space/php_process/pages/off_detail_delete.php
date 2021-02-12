<meta charset='utf-8'>
<?php
$off_delete_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="delete from SPACE_OFF where SPACE_OFF_num=$off_delete_num";

mysqli_query($dbConn,$sql);

echo"
<script>
 alert('삭제가 완료되었습니다.')
 location.href='/space/pages/office/off.php'
</script>
"
?>