<li class="adminTitle clear">
  <span class="memCheck">삭제</span>
  <span class="memId">아이디</span>
  <span class="memName">이름</span>
  <span class="memEmail">이메일</span>
  <span class="memPo">포인트</span>
  <span class="memLv">레벨</span>
  <span class="memUp">수정</span>
</li>

<?php
$page = $_REQUEST['page'];

if($page==''){
  $page=1;
}
$from = ($page -1)*5;

include $_SERVER['DOCUMENT_ROOT'].'/space/php_process/connect/db_connect.php';

$sql="select * from SPACE_MEM order by SPACE_MEM_num desc limit $from,5";
$mem_result=mysqli_query($dbConn,$sql);

while($mem_row=mysqli_fetch_array($mem_result)){
  $mem_num = $mem_row['SPACE_MEM_num'];
  $mem_id = $mem_row['SPACE_MEM_id'];
  $mem_name = $mem_row['SPACE_MEM_name'];
  $mem_email = $mem_row['SPACE_MEM_email'];
  $mem_point = $mem_row['SPACE_MEM_point'];
  $mem_level = $mem_row['SPACE_MEM_level'];
?>
  <li class="adminContents clear memAdmin">
    <span class="memCheck"><button type="button" class="qnaDelBtn" onclick="javascript:location.href='/space/php_process/admin/mem_check_delete.php?num=<?=$mem_num?>'">DELETE</button></span>
    <span class="memId"><?=$mem_id?></span>
    <span class="memName"><?=$mem_name?></span>
    <span class="memEmail"><?=$mem_email?></span>
    <form action="/space/php_process/admin/mem_update.php?num=<?=$mem_num?>" method="post" name="upConfirmCheck">
      <span class="memPo"><input type="text" value="<?=$mem_point?>" name="point"></span>
      <span class="memLv"><input type="text" value="<?=$mem_level?>" name="level"></span>
      <span class="memUp"><button type="submit" class="qnaDelBtn" onclick="confirmUpdate()">UPDATE</button></span>
    </form>
  </li>
<?php
}
?>
