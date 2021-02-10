$(function(){
  const loadMore = function(){
    $(".inBox").hide();
    $(".inBox").slice(0,4).show();

  $(".loadMore").click(function(e){
    e.preventDefault();
    $(".inBox:hidden").slice(0,4).show();
    if($(".inBox:hidden").length == 0){
      $(".loadMore").hide();
    }
  });
}
loadMore();

  $(".goToTop").click(function(){
    $("html,body").animate({scrollTop:0},300);
  });
});

// uproad
$(document).ready(function(){
let fileTarget = $(".uploadHidden");

fileTarget.on('change',function(){
  let filename;
  if(window.FileReader){
    filename=$(this)[0].files[0].name;
  } else {
    filename = $(this).val().split('/').pop().split('\\').pop();
  }
  $(this).siblings('.uploadName').val(filename);
});

$('#mainImage').on("change",mainFileSelect);
$('#subImage1').on("change",subFileSelect1);
$('#subImage2').on("change",subFileSelect2);
$('#subImage3').on("change",subFileSelect3);
});

let mainFileSelect = function(event){
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function(){
    let dataURL = reader.result;
    let output = document.getElementById("main");
    output.src=dataURL;
  };
  reader.readAsDataURL(input.files[0]);
}
let subFileSelect1 = function(event){
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function(){
    let dataURL = reader.result;
    let output = document.getElementById("sub1");
    output.src=dataURL;
  };
  reader.readAsDataURL(input.files[0]);
}
let subFileSelect2 = function(event){
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function(){
    let dataURL = reader.result;
    let output = document.getElementById("sub2");
    output.src=dataURL;
  };
  reader.readAsDataURL(input.files[0]);
}
let subFileSelect3 = function(event){
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function(){
    let dataURL = reader.result;
    let output = document.getElementById("sub3");
    output.src=dataURL;
  };
  reader.readAsDataURL(input.files[0]);
}

const submitBtn=document.querySelector('#submitBtn');

submitBtn.addEventListener('click',function(e){
  e.preventDefault();
  if(!document.uploadForm.title.value){
    alert('제목을 입력해주세요.');
    document.uploadForm.title.focus();
    return;
  }
  if(!document.uploadForm.type.value){
    alert('공간의 용도를 입력해주세요.');
    document.uploadForm.type.focus();
    return;
  }
  if(!document.uploadForm.client.value){
    alert('업체명을 입력해주세요.');
    document.uploadForm.client.focus();
    return;
  }
  if(!document.uploadForm.term.value){
    alert('작업 기간을 입력해주세요.');
    document.uploadForm.term.focus();
    return;
  }
  if(!document.uploadForm.desc.value){
    alert('설명을 입력해주세요.');
    document.uploadForm.desc.focus();
    return;
  }
  if(!document.uploadForm.main.value){
    alert('메인 이미지를 입력해주세요.');
    document.uploadForm.main.focus();
    return;
  }
  if(!document.uploadForm.sub1.value){
    alert('서브 이미지를 입력해주세요.');
    document.uploadForm.sub1.focus();
    return;
  } else {
  document.uploadForm.submit();
  }
});

function resetInput(e){
  e.preventDefault();
  document.uploadForm.title.value='';
  document.uploadForm.type.value='';
  document.uploadForm.client.value='';
  document.uploadForm.term.value='';
  document.uploadForm.desc.value='';
  document.uploadForm.main.value='';
  document.uploadForm.sub1.value='';
  document.uploadForm.sub2.value='';
  document.uploadForm.sub3.value='';
  document.getElementById("uploadName1").value = "";
  document.getElementById("uploadName2").value = "";
  document.getElementById("uploadName3").value = "";
  document.getElementById("uploadName4").value = "";
  $('#main').attr('src', '');
  $('#sub1').attr('src', '');
  $('#sub2').attr('src', '');
  $('#sub3').attr('src', '');

  document.uploadForm.title.focus();
  return;
}

const resetBtn=document.querySelector('#resetBtn');
resetBtn.addEventListener('click',resetInput);