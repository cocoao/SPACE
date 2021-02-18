<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPACE</title>

  <!-- favicon link -->
  <link rel="icon" href="/space/img/favicon.ico">
  <link rel="apple-touch-icon" href="/space/img/favicon.ico">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="/space/css/style.css">
  <link rel="stylesheet" href="/space/css/admin.css">
  <link rel="stylesheet" href="/space/css/animation.css">
  <link rel="stylesheet" href="/space/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="/space/js/custom.js" defer></script>
  <script src="/space/js/admin.js" defer></script>

</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/header.php"
    ?>
    <?php
    if($userlevel != 1){
    ?>
    <div class="deny">
      <p>관리자 페이지입니다. 관리자로 로그인 해 주세요.</p>
      <a href="/space/pages/login/login_form.php">LOGIN</a>
    </div>
    <?php
    } else {
    ?>
   <section class="contents liv">
    <div class="center clear">

    <?php
    $include_path = $_GET['key'];

    //echo $include_path;
    include $_SERVER['DOCUMENT_ROOT'].'/space/include/'.$include_path.'.php';
    ?>

    <?php
    }
    ?>
   </div><!-- end of center -->
   </section><!-- end of liv section -->

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php"
    ?> 
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php"
    ?>

  </div><!-- end of wrap -->
  <!-- <script>
    function confirmDel(){
    let confirmCheck = confirm('정말 삭제하시겠습니까?');
    if(confirmCheck == false){
      return false;
    } else {
      document.adminDelete.submit();
    }
  }
  </script> -->
</body>
</html>