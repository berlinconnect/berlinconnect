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

  // setTimeout(function() {
  //   if (location.hash) {
  //     window.scrollTo(0, 0);
  //   }
  // }, 1);

  // $(".slate").click(function(e) {
  //     window.location.hash = $(this).attr("id");
  //     e.preventDefault();
  // });

  $('.lightbox .close').click(function() {
    $('.lightbox').addClass('hidden');
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
