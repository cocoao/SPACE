<meta charset='utf-8'>
<?php
$admin_mem_num=$_GET['num'];

// echo $admin_mem_num;
include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="delete from SPACE_MEM where SPACE_MEM_num=$admin_mem_num";

mysqli_query($dbConn,$sql);

echo"
<script>
 alert('삭제가 완료되었습니다.')
 location.href='/space/pages/admin/admin.php?key=admin_mem'
</script>
"
?>