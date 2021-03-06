<div class="adminTab">
  <button type="button" onclick="javascript:location.href='/space/pages/admin/admin.php?key=admin_msg'">MESSAGE</button>
  <button type="button" class="active" onclick="javascript:location.href='/space/pages/admin/admin.php?key=admin_mem'">MEMBER</button>
  <button type="button" onclick="javascript:location.href='/space/pages/admin/admin.php?key=admin_qna'">Q&A</button>
</div>
<div class="adminPanel memAdmin">
  <div class="title">
    <h2>MEMBER ADMIN</h2>
  </div><!-- end of common title -->
  <div class="adminTable">
    <ul class="adminList">

    <!-- mem admin ajax -->

    </ul>
    <div class="bottomBox">
      <div class="paging">
        <span class="firstPg" onclick="goFirst()"><i class="fa fa-angle-double-left"></i></span>
        <span class="prevPg" onclick="goPrev()"><i class="fa fa-angle-left"></i></span>
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';
        $sql="select * from SPACE_MEM order by SPACE_MEM_num desc";
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
</div><!-- end of member admin panel -->

<script>
  function confirmUpdate(){
    let upConfirmCheck = confirm('수정하시겠습니까?');
    if(upConfirmCheck == false){
      return false;
    } else {
      document.upConfirmCheck.submit(); 
    }
  };

  $(function(){
  let url = "/space/data/ajax/member_ajax.php";

  $.get(
    url,
    {page:1},
    function(msg_data){
      $(".adminList").html(msg_data);
    }
  );
});

let currentPage = 1;
let pageLength = $(".pgNum").length;
function getPage(no){
  let url = "/space/data/ajax/member_ajax.php";
  $(".pgNum").removeClass("active");
  $(".pgNum").eq(no-1).addClass("active");

  $.get(
    url,
    {page:no},
    function(qna_data){
    $(".adminList").html(qna_data);
    currentPage = no;
    }
  );
}
$(".pgNum").eq(0).trigger('click'); 
</script>