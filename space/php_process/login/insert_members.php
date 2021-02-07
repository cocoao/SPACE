<meta charset="UTF-8">
<?php
  $member_id=$_POST['id'];
  $member_name=$_POST['name'];
  $member_pass=$_POST['pass'];
  $member_email1=$_POST['email1'];
  $member_email2=$_POST['email2'];

  $member_email=$member_email1.'@'.$member_email2;

  $member_reg=date("Y-m-d H:i:s");
  $member_level=9;
  $member_point=0;

  // echo $member_id,$member_name,$member_pass,$member_email,$member_reg,$member_level,$member_point;

  include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

  $sql = "insert into SPACE_MEM(SPACE_MEM_id,SPACE_MEM_name,SPACE_MEM_email,SPACE_MEM_pass,SPACE_MEM_reg,SPACE_MEM_level,SPACE_MEM_point) values ('$member_id','$member_name','$member_email','$member_pass','$member_reg','$member_level','$member_point')";
  mysqli_query($dbConn,$sql);

  echo "
    <script>
      alert('가입이 완료되었습니다.');
      location.href='/space/index.php';
    </script>"
?>