<?php

$check_id=$_GET['id'];

if(!$check_id){
  echo "아이디를 입력해주세요.";
} else {
  include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
  $sql="select * from SPACE_MEM where SPACE_MEM_id='$check_id'";
  $result=mysqli_query($dbConn,$sql);
  $num_record=mysqli_num_rows($result);
  if($num_record){
    echo $check_id."는(은) 이미 사용중인 아이디 입니다.";
  } else {
    echo $check_id."는(은) 사용 가능합니다.";
  }
}
?>