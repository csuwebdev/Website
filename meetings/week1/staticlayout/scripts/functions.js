$(document).ready(function(){
	$('.topNav').hover(function(){
		$(this).animate({'opacity':'0.8'}, 1);
	});
	$('.topNav').mouseleave(function(){
		$(this).animate({'opacity':'1'}, 1);
	});

});