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
            $('.NavHeader').fitText(.6);
            $('.BodyHeader').fitText(2);
            $('.PostHeader').fitText(.8);
            $('p').fitText(1.3);
        }
        else {
            $('#topHeader').show();
            $('.NavHeader').fitText(.6);
            $('.BodyHeader').fitText(2);
            $('.PostHeader').fitText(.8);
            $('p').fitText(1.3);
        }

    }
    
$(window).load(checkWindowSize);
$(window).resize(checkWindowSize);
});