if(jQuery.browser.mobile) {

}

else {

  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       200
    }
  );

  wow.init();
}

$(function(){
  $('.slate, .sidebar-container li').click(function() {
    // get class name of the element
    var elementClassName = $(this).attr('id');
    //find the divs with this class name and show them
    $('div.'+elementClassName).removeClass('hidden');
  });

  $('.lightbox').click(function() {
    $(this).addClass('hidden');
  });

  $('.sidebar-control').click(function() {
    $('body').toggleClass('active');
  });

  $('.sidebar .close').click(function() {
    $('body').removeClass('active');
  });

});

$(document).ready(function() {

  $(window).scroll(function () { 
    if ($(this).scrollTop() < 600) {
    }
    else
      $("body").removeClass("active", 1000);
  });
});
