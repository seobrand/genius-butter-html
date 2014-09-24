$(document).ready(function(){
  $('.bxslider').bxSlider();
	
	
	
	 $( ".login-popup" ).hide()
	$( ".login" ).click(function() {
  $( ".login-popup" ).toggle()
	$( ".forgot-password" ).hide()
	
	});
	
	$( ".forgot-password" ).hide()
	$( "#forgot_password" ).click(function() {
	$( ".login-popup" ).hide()
  $( ".forgot-password" ).toggle()
	
	
	});
	
});