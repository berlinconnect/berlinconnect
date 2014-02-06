$(document).ready(function(){
  $('.hero').mousemove(function(e){
    var amountMovedX = (e.pageX * 0 / 20);
    var amountMovedY = (e.pageY * -1 / 20);
    $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
  });
})
