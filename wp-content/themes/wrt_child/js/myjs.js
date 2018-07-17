(function($){
  $(document).ready(function(){
    $(".button-collapse").sideNav();


  // this adds background color to the nav bar

  var scroll_start = 0;
  var startchange = $('.info, .about_us, .bio_logo, .calcium_12_section, .calcium_A_section, .contactus_info_section, .customer_services_return, .news_section, .privacy_services, .services_steps, .terms_of_use, .news_scroll, .events_scroll, .blog_style');
  var offset = startchange.offset();
  $(document).scroll(function(){
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top){
        $('nav').css('background-color', '#fff');
        $('nav').css('border-bottom', '1px solid #d8d5d5');
        $('nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i').css('color', '#00c853');
      }else {
        $('nav').css('background-color', 'transparent');
        $('nav').css('border-bottom', 'none');
        $('nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i').css('color', '#fff');
      }
    });
  });
})(jQuery);
