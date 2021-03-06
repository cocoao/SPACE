<meta charset="UTF-8">
<?php
$login_id=$_POST['loginId'];
$login_pass=$_POST['loginPass'];

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
$sql="select*from SPACE_MEM where SPACE_MEM_id='$login_id'";

$result=mysqli_query($dbConn,$sql);
$num_match=mysqli_num_rows($result);

if(!$num_match){
  echo "
  <script>
    alert('등록되지않은 아이디입니다.');
    history.go(-1);
  </script>
  ";
} else {
  $row=mysqli_fetch_array($result);
  $db_pass=$row['SPACE_MEM_pass'];

  if($db_pass != $login_pass){
  echo "
  <script>
    alert('비밀번호가 맞지않습니다.');
    history.go(-1);
  </script>
  ";
  } else {
    session_start();
    $_SESSION["userid"]=$row['SPACE_MEM_id'];
    $_SESSION["userpoint"]=$row['SPACE_MEM_point'];
    $_SESSION["userlevel"]=$row['SPACE_MEM_level'];

    echo "
    <script>
      location.href='/space/index.php'
    </script>
    ";
  }
};
?>