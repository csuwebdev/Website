
$(document).ready(function(){

	$('#loginButton').click(function(){
		$('#loginForm').fadeToggle();
		$('#loginButton').toggle();
		$('#logoutmessage').hide();
		$('#registerButton').toggle();
	});
	
});
