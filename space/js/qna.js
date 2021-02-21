$(function(){
  let url = "/space/data/ajax/qna_ajax.php";
  
  $.get(
    url,
    {page:1},
    function(qna_data){
      $(".qnaList").html(qna_data);
    }
  );

});

function qnaWrSubmit(){
  if(!document.qnaWrForm.qnaWrTit.value){
    alert("제목을 입력해주세요.");
    document.qnaWrForm.qnaWrTit.focus();
    return;
  }
  if(!document.qnaWrForm.qnaWrTxt.value){
    alert("내용을 입력해주세요.");
    document.qnaWrForm.qnaWrTxt.focus();
    return;
  }
  document.qnaWrForm.submit();
}

function plzLogin(){
  alert("글쓰기를 하시려면 로그인이 필요합니다.")
  location.href='/space/pages/login/login_form.php'
}

const qnaReset = document.querySelector(".reset");
qnaReset.addEventListener('click',function(e){
  e.preventDefault();
  document.qnaWrForm.qnaWrTit.value='';
  document.qnaWrForm.qnaWrTxt.value='';
  document.qnaWrForm.qnaWrTit.focus();
  return;
});

let currentPage = 1;
let pageLength = $(".pgNum").length;
function getPage(no){
  let url = "/space/data/ajax/qna_ajax.php";
  $(".pgNum").removeClass("active");
  $(".pgNum").eq(no-1).addClass("active");

  $.get(
    url,
    {page:no},
    function(qna_data){
    $(".qnaList").html(qna_data);
    currentPage = no;
    }
  );
}
$(".pgNum").eq(0).trigger('click');

function goNext(){
  if(currentPage == pageLength){
    getPage(pageLength);
  } else {
    getPage(currentPage + 1);
  }
}

function goPrev(){
  if(currentPage == 1){
    getPage(1);
  } else {
    getPage(currentPage - 1);
  }
}

function goFirst(){
  getPage(1);
}

function goLast(){
  getPage(pageLength);
}

function search_check(){
  if(!document.qnaSearch.searchInput.value){
    alert('검색어를 입력해주세요.');
    document.qnaSearch.searchInput.focus();
    return;
  }
  document.qnaSearch.submit();
}

function returnPage(){
  location.href='/space/pages/qna/qna.php';
}


$(document).on('click','.qnaContents',function(){
  // let qnaIndex = $(this).index();
  // console.log(qnaIndex);
    if($(this).next().hasClass("active")){
      $(this).next().removeClass("active");
  } else {
    $(this).next().removeClass("active");
    $(this).next().addClass("active");
  }
});

$(document).on('click','.qnaUpdateBtn',function(){
  const clickIndex = $(this).index();
  // console.log(clickIndex);
  $(this).parents("div").eq(clickIndex).toggleClass("on");
  if($(this).parents("div").eq(clickIndex).hasClass("on")){
    $(".qnaUpdateBtn").eq(clickIndex).text("취소");
    $(".hiddenDelete").eq(clickIndex).hide();
    $(".hiddenUpdate").eq(clickIndex).show();
    $(".nowTit").eq(clickIndex).hide();
    $(".nowCon").eq(clickIndex).hide();
    $(".hiddenTit").eq(clickIndex).show();
    $(".hiddenCon").eq(clickIndex).show();

  } else {
    $(".qnaUpdateBtn").eq(clickIndex).text("수정");
    $(".hiddenDelete").eq(clickIndex).show();
    $(".hiddenUpdate").eq(clickIndex).hide();
    $(".nowTit").eq(clickIndex).show();
    $(".nowCon").eq(clickIndex).show();
    $(".hiddenTit").eq(clickIndex).hide();
    $(".hiddenCon").eq(clickIndex).hide();
  }
});

$(document).on('click','.hiddenUpdate',function(){
  document.qnaUpdate.submit();
});
