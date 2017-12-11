$(document).ready(function(){
	
	/* Slajder */
	
   
     

   
	slideShow();
	
	
	$('#menu li ul').css({
    display: "none",
    left: "auto"
  });
  $('#menu li').hover(function() {
    $(this)
      .find('ul')
      .stop(true, true)
      .slideDown('fast');
  }, function() {
    $(this)
      .find('ul')
      .stop(true,true)
      .fadeOut('fast');
});});

function slideShow() 
{
  var current = $('.content .slajd');
  var next = current.next().length ? current.next() : current.parent().children(':first');
  
  current.hide().removeClass('slajd');
  next.fadeIn().addClass('slajd');
  
  setTimeout(slideShow, 4000);
}
