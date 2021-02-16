<meta charset='utf-8'>
<?php

if(!isset($_POST['item'])){
  echo"
  <script>
  alert('삭제할 게시글을 선택해 주세요');
  history.go(-1)
  </script>";
} else {

  include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

  for($i=0; $i<count($_POST['item']); $i++){
    $check_num=$_POST['item'][$i];
    echo $check_num;
    $sql="delete from SPACE_QNA where SPACE_QNA_num=$check_num";
    mysqli_query($dbConn,$sql);
  }
  echo"
    <script>
    alert('삭제가 완료되었습니다');
    location.href='/space/pages/admin/admin.php?key=admin_qna'
    </script>";

};
?>