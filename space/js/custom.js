$(function(){
  // process section
  $(".processImg").click(function(){
    let proIndex = $(this).index();
    $(".processTxt").hide();
    $(".processTxt").eq(proIndex).show();
  });

  $(".processImg").eq(0).trigger("click");

  // mobile navigation fixed
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

  // mobile navigation
  $(".mobileMenu").click(function(){
    $(this).toggleClass("on");
    if($(this).hasClass("on")){
      $(this).find("i").attr("class","fa fa-times");
      $(this).prev("ul").slideDown("fest");
    } else {
      $(this).find("i").attr("class","fa fa-bars");
      $(this).prev("ul").slideUp("fest"); 
    }
  });

  
  // navigation about click
  var loca = $(location).attr('href').split('#')[1];
  if(loca == 'about'){
    var aboutOff = $(".process").offset().top;
    console.log(aboutOff);
    $("html, body").animate({scrollTop:aboutOff}, 1000, 'easeInQuint');
  }

  $("header .gnb li.aboutGnb").click(function(){
    var aboutOff = $(".process").offset().top;
    console.log(aboutOff);
    $("html, body").animate({scrollTop:aboutOff}, 1000, 'easeInQuint');
  });

});