<meta charset='utf-8'>
<?php
  $sto_num=$_GET['num'];
  $sto_title = nl2br($_REQUEST['title']);
  $sto_title = addslashes($sto_title);
  $sto_type = $_REQUEST['type'];
  $sto_client = $_REQUEST['client'];
  $sto_term = $_REQUEST['term'];
  $sto_desc = $_REQUEST['desc'];

  $img_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/space/data/store/';

  $main_name = $_FILES['main']['name'];
  $main_tmp_name = $_FILES['main']['tmp_name'];
  $main_error = $_FILES['main']['error'];

  $sub1_name = $_FILES['sub1']['name'];
  $sub1_tmp_name = $_FILES['sub1']['tmp_name'];
  $sub1_error = $_FILES['sub1']['error'];

  $sub2_name = $_FILES['sub2']['name'];
  $sub2_tmp_name = $_FILES['sub2']['tmp_name'];
  $sub2_error = $_FILES['sub2']['error'];
  
  $sub3_name = $_FILES['sub3']['name'];
  $sub3_tmp_name = $_FILES['sub3']['tmp_name'];
  $sub3_error = $_FILES['sub3']['error'];

  if($main_name && !$main_error){
    $uploaded_main_file = $img_upload_dir.$main_name;
    if(!move_uploaded_file($main_tmp_name,$uploaded_main_file)){
        echo "
        <script>
            alert('사진이 업로드 되지 않았습니다.');
        </script>
        ";
        exit; 
        }
    } else {
        $main_name = '';
  }

  if($sub1_name && !$sub1_error){
    $uploaded_sub1_file = $img_upload_dir.$sub1_name;
    if(!move_uploaded_file($sub1_tmp_name,$uploaded_sub1_file)){
        echo "
        <script>
            alert('사진이 업로드 되지 않았습니다.');
        </script>
        ";
        exit;
        }
    } else {
        $sub1_name = '';
  }

  if($sub2_name && !$sub2_error){
    $uploaded_sub2_file = $img_upload_dir.$sub2_name;
    if(!move_uploaded_file($sub2_tmp_name,$uploaded_sub2_file)){
        echo "
        <script>
            alert('사진이 업로드 되지 않았습니다.');
        </script>
        ";
        exit;
        }
    } else {
        $sub2_name = '';
  }

  if($sub3_name && !$sub3_error){
    $uploaded_sub3_file = $img_upload_dir.$sub3_name;
    if(!move_uploaded_file($sub3_tmp_name,$uploaded_sub3_file)){
        echo "
        <script>
            alert('사진이 업로드 되지 않았습니다.');
        </script>
        ";
        exit;
        }
    } else {
        $sub3_name = '';
  }

  include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

  $sql = "UPDATE SPACE_STO SET SPACE_STO_tit='$sto_title', SPACE_STO_type='$sto_type', SPACE_STO_cli='$sto_client', SPACE_STO_term='$sto_term', SPACE_STO_desc='$sto_desc', SPACE_STO_img1='$main_name', SPACE_STO_img2='$sub1_name', SPACE_STO_img3='$sub2_name', SPACE_STO_img4='$sub3_name' WHERE SPACE_STO_num='$sto_num'";

  mysqli_query($dbConn,$sql);

  echo "
  <script>
      alert('수정이 완료되었습니다.');
      location.href='/space/pages/store/sto.php';
  </script>
  "
?>