$( document ).ready(function() {
  $(".burger").click(function(){
    $(".burger-line").toggleClass("line-active"),
    $(".mobile-menu-aside").toggleClass("open");
  });

  //top-button fade
 jQuery(function(f){
    var element = f('.top-btn');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 400 ? 'In': 'Out')](500);
    });
 });
});
