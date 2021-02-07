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
  <link rel="stylesheet" href="/space/css/join_login.css">
  <link rel="stylesheet" href="/space/css/animation.css">
  <link rel="stylesheet" href="/space/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="/space/js/custom.js" defer></script>
</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/header.php"
    ?>
    <section class="contents login">
      <div class="center clear">
        <div class="title">
            <h2>Login</h2>
        </div><!-- end of common title -->
        <div class="loginFormBox">
          <form action="#" method="post" name="loginForm">
            <p class="inputBox idInputBox">
              <label for="id">ID</label>
              <input type="text" name="id" placeholder="Your ID" class="columnTitle" id="id">
            </p>
            <p class="inputBox passInputBox">
              <label for="pass">PASSWORD</label>
              <input type="password" name="pass" placeholder="Your Password" class="columnTitle" id="pass">
            </p>
            <div class="formBtns">
              <button type="button" class="resetBtn" onclick="location.href='/space/pages/login/join_form.php'">JOIN</button>
              <button type="button" class="sendBtn">LOGIN</button>
            </div>
          </form>
        </div>
        <div class="findInfo">
            <a href="#">아이디 찾기</a>
            <a href="#">비밀번호 찾기</a>
          </div>
      </div>
    </section><!-- end of about section -->

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php"
    ?> 
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php"
    ?>

  </div><!-- end of wrap -->
</body>
</html>