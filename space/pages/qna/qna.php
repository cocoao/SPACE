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
  <link rel="stylesheet" href="/space/css/qna.css">
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
    <section class="contents liv">
      <div class="center clear">
        <div class="title">
          <h2>Q&A</h2>
        </div><!-- end of common title -->
        <div class="qnaBoxes">
          <div class="qnaTable">
            <ul class="qnaList">
              <li class="qnaTitle clear">
                <span class="qnaNum">번호</span>
                <span class="qnaTit">제목</span>
                <span class="qnaId">아이디</span>
                <span class="qnaReg">등록일</span>
                <span class="qnaHit">조회수</span>
              </li>
              <li class="qnaContents clear">
                <span class="qnaNum">번호</span>
                <span class="qnaTit">첫번째 게시글입니다</span>
                <span class="qnaId">아이디</span>
                <span class="qnaReg">등록일</span>
                <span class="qnaHit">조회수</span>
              </li>
              <li class="qnaContents clear">
                <span class="qnaNum">번호</span>
                <span class="qnaTit">첫번째 게시글입니다</span>
                <span class="qnaId">아이디</span>
                <span class="qnaReg">등록일</span>
                <span class="qnaHit">조회수</span>
              </li>
            </ul>
          </div><!-- end of qnaTable -->
          <div class="bottomBox">
            <div class="search">
              <form action="#">
                <select name="searchSelect" id="" class="searchSelect">
                  <option value="qnaSearchID">아이디</option>
                  <option value="qnaSearchTitle">제목</option>
                </select>
                <input type="text" name="searchInput" placeholder="검색어를 입력해주세요." class="searchInput">
                <a type="button" class="qnaSearchBtn"><i class="fa fa-search"></i></a>
              </form>
            </div><!-- end of search -->
            <div class="paging">
              <span class="firstPg"><i class="fa fa-angle-double-left"></i></span>
              <span class="prevPg"><i class="fa fa-angle-left"></i></span>
              <span class="nowPg">1</span>
              <span class="nextPg"><i class="fa fa-angle-right"></i></span>
              <span class="lastPg"><i class="fa fa-angle-double-right"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- end of liv section -->

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/about.php"
    ?> 
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/space/include/footer.php"
    ?>

  </div><!-- end of wrap -->
</body>
</html>