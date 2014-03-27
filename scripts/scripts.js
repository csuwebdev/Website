$(document).ready(function(){

	$('#loginButton').click(function(){
		$('#loginForm').fadeToggle();
		$('#loginButton').fadeToggle();
		$('#logoutmessage').hide();
		$('#registerButton').fadeToggle();
	});
	
    function checkWindowSize() {
        
        if ( $(window).width() < 500 ) {
             
            $('#topHeader').hide();
            $('.BodyHeader').css({"margin-left" : "-30px"});
            $('.BodyHeader').fitText(3.1);
            $('.PostHeader').fitText(.6);
            $('p').fitText(.9);
            $('ul').fitText(1);
             $('#postOne').css({"left" : "0%"});
             $('#postTwo').css({"left" : "45%"});
             $('#postThree').css({"left" : "0%"});
             $('#postFour').css({"left" : "45%"});
        }
       
        else {
            
            $('.BodyHeader').css({"margin-left" : "0px"});
             $('#topHeader').show();
            $('.BodyHeader').fitText(3.1);
            $('.PostHeader').fitText(.8);
            $('p').fitText(1.5);           
            $('ul').fitText(1.8);
            $('#postOne').css({"left" : "20%"});
             $('#postTwo').css({"left" : "60%"});
             $('#postThree').css({"left" : "20%"});
             $('#postFour').css({"left" : "60%"});
        }
        if ( $(window).width() < 620 ) 
        {
            $('#topHeader').hide();
        }
        if( $(window).width() >= 620 )
        {
            $('#topHeader').show();
        }
    }
    
$(window).load(checkWindowSize);
$(window).resize(checkWindowSize);
});