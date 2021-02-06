$(function(){
  let fitHeight = function(){
    $(window).resize(function(){
      let imgHeight = $(".processImgBox").height();
      console.log(imgHeight);
      $(".processImg").height(imgHeight);
    });
  }
  fitHeight();
});