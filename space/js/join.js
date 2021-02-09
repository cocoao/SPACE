$(function(){
  // email selectbox
  var emailInput = $(".email2");
  $("#selectEmail").change(function(){
    var element = $(this).find("option:selected");
    var emailTxt = element.attr('value');
    emailInput.val(emailTxt);
  });

  // id check
  $(".idCheck").click(function(){
    const url = '/space/php_process/login/member_id_check.php?id='+$("#id").val();
    $.get(url, function(data){
      alert(data);
    });
  });
});

const idCheckBtn=document.querySelector('.idCheck');
idCheckBtn.addEventListener('click',idCheck);

let checkCount=0;
function idCheck(){
  checkCount++;
}

function resetInput(){
  document.joinForm.id.value='';
  document.joinForm.name.value='';
  document.joinForm.pass.value='';
  document.joinForm.check.value='';
  document.joinForm.email1.value='';
  document.joinForm.email2.value='';

  document.joinForm.id.focus();
  return;
}

const sendBtn=document.querySelector('.sendBtn');
const resetBtn=document.querySelector('.resetBtn');

sendBtn.addEventListener('click',checkInput);
resetBtn.addEventListener('click',resetInput);

function checkInput(){
  if(!document.joinForm.id.value){
    alert('아이디를 입력해주세요.');
    document.joinForm.id.focus();
    return;
  }
  if(!document.joinForm.name.value){
    alert('이름을 입력해주세요.');
    document.joinForm.name.focus();
    return;
  }
  if(!document.joinForm.pass.value){
    alert('비밀번호를 입력해주세요.');
    document.joinForm.pass.focus();
    return;
  }
  if(!document.joinForm.check.value){
    alert('비밀번호 확인을 입력해주세요.');
    document.joinForm.check.focus();
    return;
  }
  if(document.joinForm.pass.value != document.joinForm.check.value){
    alert('비밀번호가 일치하지않습니다. \n다시 입력해주세요.');
    document.joinForm.pass.value='';
    document.joinForm.pass.value='';
    document.joinForm.pass.focus();
    return;
  }
  if(!document.joinForm.email1.value){
    alert('이메일을 입력해주세요.');
    document.joinForm.email1.focus();
    return;
  }
  if(!document.joinForm.email2.value){
    alert('이메일을 입력해주세요.');
    document.joinForm.email2.focus();
    return;
  }
  if(checkCount===0){
    alert('아이디 중복체크를 해주세요.');
  }else{
    document.joinForm.submit();
  }
}
