<meta charset='utf-8'>
<?php

$mem_num = $_GET['num'];
$mem_level = $_POST['level'];
$mem_point = $_POST['point'];

// echo $mem_num, $mem_level, $mem_point;


include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

$sql = "UPDATE SPACE_MEM SET SPACE_MEM_level='$mem_level', SPACE_MEM_point='$mem_point' WHERE SPACE_MEM_num = '$mem_num'";

mysqli_query($dbConn, $sql);

echo"
<script>
  alert('수정이 완료되었습니다.')
  location.href='/space/pages/admin/admin.php?key=admin_mem';
</script>
";
?>