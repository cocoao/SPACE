const qnaSubmit = document.querySelector(".submit");
qnaSubmit.addEventListener('click',function(){
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
});

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





// $(document).reply(function(){
//   if(!document.ansWrForm.ansWrTxt.value){
//     alert("내용을 입력해주세요.");
//     document.ansWrForm.ansWrTxt.focus();
//     return;
//   }
//   document.ansWrForm.submit();
// });

// $(function () {
//   $('.ansSubmit').on('click', function () {
//       var Status = $(this).val();
//       $.ajax({
//           url: '/space/data/ajax/qna_ajax.php',
//           data: {
//               text: $("textarea[name=ansWrTxt]").val(),
//               Status: Status
//           },
//           dataType : 'json'
//       });
//   });
// });

// $(document).on("click",".ansSubmit",function(){
//     if(!document.ansWrForm.ansWrTxt.value){
//     alert("내용을 입력해주세요.");
//     document.ansWrForm.ansWrTxt.focus();
//     return;
//   }
//   document.ansWrForm.submit();
// });

// $(".ansSubmit").click(function (event) {


//   event.preventDefault();

//   // Get form
//   var form = $('.ansWrForm')[0];

// // Create an FormData object 
//   var data = new FormData(form);

// // disabled the submit button
//   $(".ansSubmit").prop("disabled", true);

//   $.ajax({
//       type: "POST",
//       enctype: 'multipart/form-data',
//       url: "/space/data/ajax/qna_ajax.php",
//       data: data,
//       processData: false,
//       contentType: false,
//       cache: false,
//       timeout: 600000,
//       success: function (data) {
//         alert("complete");
//           $(".ansSubmit").prop("disabled", false);
//       },
//       error: function (e) {
//           console.log("ERROR : ", e);
//           $(".ansSubmit").prop("disabled", false);
//           alert("fail");
//       }
//   });

// });