<meta charset='utf-8'>
<?php
$liv_delete_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="delete from SPACE_LIV where SPACE_LIV_num=$liv_delete_num";

mysqli_query($dbConn,$sql);

echo"
<script>
 alert('삭제가 완료되었습니다.')
 location.href='/space/pages/living/liv.php'
</script>
"
?>