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
  <link rel="stylesheet" href="/space/css/liv_off_sto.css">
  <link rel="stylesheet" href="/space/css/animation.css">
  <link rel="stylesheet" href="/space/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="/space/js/custom.js" defer></script>
  <script src="/space/js/liv_off_sto_input.js" defer></script>

</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/header.php"
    ?>
    <section class="contents off">
      <div class="center clear">
        <div class="title">
          <h2>Office Space</h2>
          <div class="linkBox">
            <hr><a href="/space/pages/office/off.php">view all design</a>
          </div>
        </div><!-- end of common title -->
        <div class="uploadBox">
          <form action="/space/php_process/pages/off_insert.php" method="post" name="uploadForm" class="uploadForm" enctype="multipart/form-data">
            <div class="inputUnit">
              <p class="title_input">
                <label for="title">Title</label>
                <input type="text" placeholder="Title Here" id="title" name="title">
              </p>
              <p class="type_input">
                <label for="type">Type</label>
                <input type="text" placeholder="Type Here" id="type" name="type">
              </p>
            </div>
            <div class="inputUnit">
              <p class="client_input">
                <label for="client">Client</label>
                <input type="text" placeholder="Client Here" id="client" name="client">
              </p>
              <p class="term_input">
                <label for="term">Term</label>
                <input type="text" placeholder="Term Here" id="term" name="term">
              </p>
            </div>
            <div class="desc_input">
              <textarea name="desc" placeholder="Description Here"></textarea>
            </div>
            <div class="imgUploadBox">
              <div class="imgUpload">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Main image" id="uploadName1">
                  <label for="mainImage">SELECT IMAGE</label>
                  <input type="file" id="mainImage" name="main" class="uploadHidden">
                </div>
                <div class="formImgBox">
                  <img id="main">
                </div>
              </div><!-- end of uploadBox -->
              <div class="imgUpload">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Sub image" id="uploadName2">
                  <label for="subImage1">SELECT IMAGE</label>
                  <input type="file" id="subImage1" name="sub1"class="uploadHidden">
                </div>
                <div class="formImgBox">
                  <img id="sub1">
                </div>
              </div><!-- end of uploadBox -->
              <div class="imgUpload">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Sub image" id="uploadName3">
                  <label for="subImage2">SELECT IMAGE</label>
                  <input type="file" id="subImage2" name="sub2"class="uploadHidden">
                </div>
                <div class="formImgBox">
                  <img id="sub2">
                </div>
              </div><!-- end of uploadBox -->
              <div class="imgUpload">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Sub image" id="uploadName4">
                  <label for="subImage3">SELECT IMAGE</label>
                  <input type="file" id="subImage3" name="sub3"class="uploadHidden">
                </div>
                <div class="formImgBox">
                  <img id="sub3">
                </div>
              </div><!-- end of uploadBox -->
            </div><!-- end of imgUploadBox -->
          </form>
          <div class="btns">
            <a href="#" id="resetBtn">RESET</a>
            <a href="#" id="submitBtn">UPLOAD</a>
          </div>
        </div>
      </div>
    </section><!-- end of off section -->

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php"
    ?> 
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php"
    ?>

  </div><!-- end of wrap -->
</body>
</html>