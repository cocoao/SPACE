// $(function(){
  
//   const adminTab = function(){
//     $(".adminTab button").click(function(){
//       let tabIndex = $(this).index();
//       $(".adminTab button").removeClass("active");
//       $(this).addClass("active");
//       $(".adminPanel").hide();
//       $(".adminPanel").eq(tabIndex).show();
//     });
//     $(".adminTab button").eq(0).trigger("click");
//   };
//   adminTab();


//   $('.adminContents').click(function(){
//     if($(this).next().hasClass("active")){
//      $(this).next().removeClass("active");
//     } else {
//    $(this).next().removeClass("active");
//      $(this).next().addClass("active");
//     }
//    });

// });



// $(function(){
//   let url = "/space/data/ajax/message_ajax.php";

//   $.get(
//     url,
//     {page:1},
//     function(msg_data){
//       $(".adminList").html(msg_data);
//     }
//   );
// });

// let currentPage = 1;
// let pageLength = $(".pgNum").length;
// function getPage(no){
//   let url = "/space/data/ajax/message_ajax.php";
//   $(".pgNum").removeClass("active");
//   $(".pgNum").eq(no-1).addClass("active");

//   $.get(
//     url,
//     {page:no},
//     function(qna_data){
//     $(".adminList").html(qna_data);
//     currentPage = no;
//     }
//   );
// }
// $(".pgNum").eq(0).trigger('click');


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
