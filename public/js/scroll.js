$(document).ready(function(){
  $(".nav ul li a").click(function(event){
      $('.nav ul li a').removeClass('active');
      $(this).addClass('active');
      thisAttrHref = $(this).attr('href');
      thisAttrHrefOffset = $(thisAttrHref).offset().top;
      $('html,body').animate({scrollTop:thisAttrHrefOffset});
      event.preventDefault();
  });
});

