// function selectEmail(mail){
//   val mail = $(mail);
//   val email2 = $('input[name=email2]');

//   if($mail.val() == "1"){
//     $email2.attr('readonly',false);
//     $email2.val('');
//   } else {
//     $email2.attr('readonly',true);
//     $email2.val(mail.val());
//   }
// }

$(function(){
  $("#selectEmail").change(function(){
    if($("#selectEmail").val() == 'directly'){
      $('.email2').attr("disabled", false);
      $(".email2").val("");
      $(".email2").focus();
    } else {
      $('.email2').val($('#selectEmail').val());
    }
  });
});