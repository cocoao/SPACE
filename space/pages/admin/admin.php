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
          <div class="adminTab">
            <button type="button">MESSAGE</button>
            <button type="button">MEMBER</button>
            <button type="button">Q&A</button>
          </div>
        <div class="adminPanel msgAdmin">
          <div class="title">
            <h2>MESSAGE ADMIN</h2>
          </div><!-- end of common title -->
          <div class="adminTable">
            <ul class="adminList">
              <li class="adminTitle clear">
                <span class="msgCheck">선택</span>
                <span class="msgNum">번호</span>
                <span class="msgTit">제목</span>
                <span class="msgName">이름</span>
                <span class="msgEmail">이메일</span>
                <span class="msgReg">등록일</span>
              </li>
              <?php
              $page = $_REQUEST['page'];

              if($page==''){
                $page=1;
              }
              $from = ($page -1)*5;

              include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

              $sql="select * from SPACE_MSG order by SPACE_MSG_num desc limit $from,5";
              $msg_result=mysqli_query($dbConn,$sql);

              while($msg_row=mysqli_fetch_array($msg_result)){
                $msg_num = $msg_row['SPACE_MSG_num'];
                $msg_tit = $msg_row['SPACE_MSG_tit'];
                $msg_name = $msg_row['SPACE_MSG_name'];
                $msg_email = $msg_row['SPACE_MSG_email'];
                $msg_reg = $msg_row['SPACE_MSG_reg'];
                $msg_con = $msg_row['SPACE_MSG_con'];
              ?>
              <form action="/space/php_process/admin/msg_check_delete.php" method="post" name="adminMsgDelete">
              <li class="adminContents clear">
                <span class="msgCheck"><input type="checkbox" name="item[]" value="<?=$msg_num?>"></span>
                <span class="msgNum"><?=$msg_num?></span>
                <span class="msgTit"><?=$msg_tit?></span>
                <span class="msgName"><?=$msg_name?></span>
                <span class="msgEmail"><?=$msg_email?></span>
                <span class="msgReg"><?=$msg_reg?></span>
              </li>
              <div class="txtBox clear">
                <span class="msgCon"><?=$msg_con?></span>
              </div>
              <?php
              }
              ?>
              </form>
            </ul>
            <div class="bottomBox">
              <button type="button" class="checkDelBtn" onclick="confirmDel()">DELETE</button>
              <div class="paging">
                <span class="firstPg" onclick="goFirst()"><i class="fa fa-angle-double-left"></i></span>
                <span class="prevPg" onclick="goPrev()"><i class="fa fa-angle-left"></i></span>
                <?php
                $sql="select * from SPACE_MSG order by SPACE_MSG_num desc";
                $paging_result=mysqli_query($dbConn,$sql);
                $total_record=mysqli_num_rows($paging_result);
                $scale=5;

                if($total_record % $scale == 0){
                  $total_page = floor($total_record/$scale);
                } else {
                  $total_page = floor($total_record/$scale) + 1;
                }

                for($i=1; $i<=$total_page; $i++){
                ?>
                <span class="pgNum" onclick="getPage(<?=$i?>)"><?=$i?></span>
                <?php
                }
                ?>
                <span class="nextPg" onclick="goNext()"><i class="fa fa-angle-right"></i></span>
                <span class="lastPg" onclick="goLast()"><i class="fa fa-angle-double-right"></i></span>
            </div><!-- end of paging -->
            </div>
          </div>
        </div><!-- end of message admin panel -->
        <div class="adminPanel memAdmin">
          <div class="title">
            <h2>MEMBER ADMIN</h2>
          </div><!-- end of common title -->
        </div><!-- end of member admin panel -->
        <div class="adminPanel qnaAdmin">
          <div class="title">
            <h2>Q&A ADMIN</h2>
          </div><!-- end of common title -->
        </div><!-- end of qna admin panel -->
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
  <script>
    function confirmDel(){
  let confirmCheck = confirm('정말 삭제하시겠습니까?');
  if(confirmCheck == false){
    return false;
  } else {
    document.adminMsgDelete.submit();
  }
}
  </script>
</body>
</html>