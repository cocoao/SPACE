$(function(){
  $(".processImg").click(function(){
    let proIndex = $(this).index();
    $(".processTxt").hide();
    $(".processTxt").eq(proIndex).show();
  });

  $(".processImg").eq(0).trigger("click");

  const loca = $(location).attr('href').split('#')[1];
  console.log(loca)
  if(loca == 'about'){
    const aboutOff = $(".process").offset().top;
    $("html, body").animate({scrollTop:aboutOff}, 1000, 'easeInQuint');
  }

  let gnbOffTop = $(".gnb").offset().top;
  let fixHeader = function(){
    $(window).scroll(function(){
      let gnbScroll = $(window).scrollTop();
      let winWidth = $(window).width();
      if(winWidth <= 480 && gnbOffTop <=gnbScroll){
        $(".gnb").css({"position":"fixed"});
      } else {
        $(".gnb").css({"position":"relative"});
      }
    });
  }
  fixHeader();

  $(".mobileMenu").click(function(){
    $(this).$toggleClass("on");
    if($(this).hasClass("on")){
      $(this).find("i").attr("class","fa fa-times");
      $(this).prev("ul").slideDown("fest");
    } else {
      $(this).find("i").attr("class","fa fa-bars");
      $(this).prev("ul").slideUp("fest"); 
    }
  });
});
  