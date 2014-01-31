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
            $('.BodyHeader').fitText(3.1);
            $('.PostHeader').fitText(2);
            $('ul').fitText(3);
        }
        else {
            $('#topHeader').show();
            $('.BodyHeader').fitText(3.1);
            $('.PostHeader').fitText(2);
            $('ul').fitText(4);
        }

    }
    
$(window).load(checkWindowSize);
$(window).resize(checkWindowSize);
});