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
  <script src="/space/js/join.js" defer></script>
</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/header.php"
    ?>
    <section class="contents join">
      <div class="center clear">
        <div class="title">
            <h2>Join us</h2>
        </div><!-- end of common title -->
        <div class="joinBox">
          <form action="/space/php_process/login/insert_members.php" method="post" name="joinForm">
            <p class="inputBox idInputBox">
              <label for="id">ID</label>
              <input type="text" name="id" placeholder="Your ID" class="columnTitle" id="id">
              <button type="button" name="button" class="idCheck" id="idCheck">Check</button>
            </p>
            <p class="inputBox nameInputBox">
              <label for="name">NAME</label>
              <input type="text" name="name" placeholder="Your Name" class="columnTitle" id="name">
            </p>
            <p class="inputBox passInputBox">
              <label for="pass">PASSWORD</label>
              <input type="password" name="pass" placeholder="Your Password" class="columnTitle" id="pass">
            </p>
            <p class="inputBox checkInputBox">
              <label for="check">PASSWORD CHECK</label>
              <input type="password" name="check" placeholder="Check Your Password" class="columnTitle" id="check">
            </p>
            <p class="inputBox emailInputBox">
              <label for="email1">EMAIL</label>
              <input type="text" name="email1" placeholder="Your Email ID" class="email1" id="email1">
              <span>@</span>
              <input type="text" name="email2" placeholder="Your Email Address" class="email2" id="email2">
              <select name="selectEmail" id="selectEmail">
                <option value="" selected>직접입력</option>
                <option value="naver.com">naver.com</option>
                <option value="gmail.com">gmail.com</option>
                <option value="hanmail.net">hanmail.net</option>
                <option value="hanmail.net">hatmail.com</option>
              </select>
            </p>
            <div class="formBtns">
              <button type="button" class="resetBtn">RESET</button>
              <button type="button" class="sendBtn">SEND</button>
            </div>
          </form>
        </div>
      </div>
    </section><!-- end of about section -->

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php";
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php";
    ?>

  </div><!-- end of wrap -->
</body>
</html>