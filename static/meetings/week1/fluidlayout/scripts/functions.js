$(document).ready(function(){
    $('.BodyContent').hover(function(){
        $(this).animate({'opacity':'0.5'}, 1);
	});
	$('.BodyContent').mouseleave(function(){
		$(this).animate({'opacity':'1'}, 1);
	});
    $('.TopNavButton').hover(function(){
		$(this).animate({'opacity':'0.5'}, 1);
	});
	$('.TopNavButton').mouseleave(function(){
		$(this).animate({'opacity':'1'}, 1);
	});
    function checkWindowSize() {

        if ( $(window).width() < 500 ) {
            $('#leftAside').hide();
            $('h3').fitText(.7);
            $('#body h1').fitText(1.7);
            $('#body').css({'left':'5%', right: '5%'});
            $('.TopNavButton').css({'float':'left'});
        }
        else {
            $('#leftAside').show();
            $('h3').fitText(.7);
            $('#body h1').fitText(1.7);
            $('#body').css({'left':'30%'});
            $('.TopNavButton').css({'float':'right'});
        }

    }
    $(window).load(checkWindowSize);
    $(window).resize(checkWindowSize);
});

	
