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
  $('.slate').click(function() {
    // get class name of the element
    var elementClassName = $(this).attr('id');
    //find the divs with this class name and show them
    $('div.'+elementClassName).removeClass('hidden');
  });
  $('.lightbox').click(function() {
    $(this).addClass('hidden');
  });

});

$(document).ready(function() {

  $(window).on("scroll", function() {
      var fromTop = $(window).scrollTop();
      console.log(fromTop);
      $(".menu").toggleClass("down", (fromTop > 820));
  });
});
