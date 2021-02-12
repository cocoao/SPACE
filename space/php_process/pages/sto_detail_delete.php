<meta charset='utf-8'>
<?php
$sto_delete_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="delete from SPACE_STO where SPACE_STO_num=$sto_delete_num";

mysqli_query($dbConn,$sql);

echo"
<script>
 alert('삭제가 완료되었습니다.')
 location.href='/space/pages/store/sto.php'
</script>
"
?>