$(document).ready(function(){
	$('#loginButton').click(function(){
		$('#loginForm').fadeToggle();
		$('#loginButton').toggle();
		$('#logoutmessage').hide();
		$('#registerButton').toggle();
	});
	
    function checkWindowSize() {
        
        
        if ( $(window).width() < 500 ) {
            $('.BodyHeader').fitText(3.1);
            $('.PostHeader').fitText(2);
            $('ul').fitText(3);
        }
        else {
            $('.BodyHeader').fitText(3.1);
            $('.PostHeader').fitText(2);
            $('ul').fitText(4);
        }

    }
    
$(window).load(checkWindowSize);
$(window).resize(checkWindowSize);
});