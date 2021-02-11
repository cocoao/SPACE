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

  $(".imgNav>a").click(function(e){
    e.preventDefault();
    var detailIndex = $(this).index();
    $(".imgNav>a").removeClass("active");
    $(this).addClass("active");
    $(".imgBox").hide();
    $(".imgBox").eq(detailIndex).show();
  });

  $(".imgNav>a").eq(0).trigger("click");
});

