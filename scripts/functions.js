$(document).ready(function(){
    $('.TopNavButton').hover(function(){
		$(this).animate({'opacity':'0.5'}, 1);
	});
	$('.TopNavButton').mouseleave(function(){
		$(this).animate({'opacity':'1'}, 1);
	});
    $('.BodyContent').hover(function(){
		$(this).animate({'opacity':'0.5'}, 1);
	});
	$('.BodyContent').mouseleave(function(){
		$(this).animate({'opacity':'1'}, 1);
	});
    function checkWindowSize() {
        
        
        if ( $(window).width() < 500 ) {
            $('#topHeader').hide();
<<<<<<< HEAD
            $('.NavHeader').fitText(.6);
            $('.BodyHeader').fitText(2);
            $('.PostHeader').fitText(.8);
            $('p').fitText(1.3);
=======
            $('#body').css({'left' : '5%', 'right' : '5%', 'width' : '90%'});
            $('#leftContent').css({width: '100%', 'right' : '0'});
>>>>>>> 9600cc364370253d14c1b73ad7fe36365d86b409
        }
        else {
            $('#topHeader').show();
<<<<<<< HEAD
            $('.NavHeader').fitText(.6);
            $('.BodyHeader').fitText(2);
            $('.PostHeader').fitText(.8);
            $('p').fitText(1.3);
=======
            $('#rightContent').show();
            $('#leftContent').css({'right' : '40%', width: '55%'});
            $('#body').css({'left' : '30%', 'right' :'5%', 'width' : '65%'});
>>>>>>> 9600cc364370253d14c1b73ad7fe36365d86b409
        }

    }
    
$(window).load(checkWindowSize);
$(window).resize(checkWindowSize);
<<<<<<< HEAD
=======
   
>>>>>>> 9600cc364370253d14c1b73ad7fe36365d86b409
});