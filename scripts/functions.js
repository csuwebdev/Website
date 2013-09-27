$(document).ready(function(){
    $('.TopNavButton').hover(function(){
		$(this).animate({'opacity':'0.5'}, 1);
	});
	$('.TopNavButton').mouseleave(function(){
		$(this).animate({'opacity':'1'}, 1);
	});
    
    function checkWindowSize() {

        if ( $(window).width() < 600 ) {
            $('#rightContent').hide();
            $('#leftAside').hide();
            $('#topHeader').hide();
            $('.NavHeader').fitText(.6);
            $('#body h1').fitText(1.9);
            $('#body').css({'left' : '5%', 'right' : '5%', 'width' : '90%'});
            $('#leftContent').css({width: '90%', 'right' : '5%', 'left' : '5%'});
            $('.TopNavButton').css({'float':'left'});
        }
        else {
            $('#leftAside').show();
            $('#topHeader').show();
            $('#rightContent').show();
            $('.NavHeader').fitText(.6);
            $('#body h1').fitText(1.9);
            $('#leftContent').css({'right' : '40%', width: '55%'});
            $('#body').css({'left' : '30%', 'right' :'5%', 'width' : '65%'});
            $('.TopNavButton').css({'float':'right'});
        }

    }
    
$(window).load(checkWindowSize);
$(window).resize(checkWindowSize);
        //(UPDATE)do add remove of CSS-classes, according to w / needs
    var link = $('.play-menu li a'),
		expander = $('.show-entries-hover'),
		container = $('.menu-container'),
		pos1 = 0,
		pos2 = "46px",
		pos3 = "92px",
		pos4 = "138px",
		pos5 = "184px",
		pos6 = "230px",
		left = "-200px"
		storeColor = "#A60000",
		appsColor = "#A60000",
		moviesColor = "#A60000",
		musicColor = "#A60000",
		booksColor = "#A60000",
		devicesColor = "#A60000";
	
	// Initialization, start positions
	$('li#store').css('top', pos1);
	$('li#store .menu-entry-text').css({'background-color' : storeColor,'color' : 'white'});
	$('li#apps').css('top', pos2);
	$('li#movies').css('top', pos3);
	$('li#music').css('top', pos4);
	$('li#books').css('top', pos5);
	$('li#devices').css('top', pos6);
	
	// Click function standard
	link.each(function() {
		$(this).on('click', function() {
			// Remove Background-Color when i click on an unselected item
			// Hiding is removed for debugging
			link.not($(this)).parent().addClass('hide');
			expander.removeClass('hidden');
			link.not($(this)).children('.menu-entry-text').attr("style", "");
			// Hide all menus except the right one
			link.not($(this)).next('.sub-menu').css({'opacity' : 0}).addClass('index').removeClass('active');
			$(this).next('.sub-menu').css({'opacity' : 1}).addClass('active');

			// Changing Background-Color and Position
			// "Store"
			// This also resets all menu entries to their initial order
			if ($(this).children().hasClass('store')) {
				$(this).children('.menu-entry-text').css({'background-color' : storeColor,'color' : 'white'});
				$(this).parent().css('top', pos1).removeClass('hide');
				$('#apps').css('top', pos2);
				$('#movies').css('top', pos3);
				$('#music').css('top', pos4);
				$('#books').css('top', pos5);
				$('#devices').css('top', pos6);
				$('li').removeClass('hide');
			}
			// "Apps"
			else if ($(this).children().hasClass('apps')) {
				$(this).children('.menu-entry-text').css({'background-color' : appsColor,'color' : 'white'});
				$(this).parent().css('top', pos1).removeClass('hide');
				$('#store').css('top', pos6);
				$('#movies').css('top', pos2);
				$('#music').css('top', pos3);
				$('#books').css('top', pos4);
				$('#devices').css('top', pos5);
				$('.hide').css({'left': left, 'opacity' : 0, 'transition' : 'all 0s', '-webkit-transition' : 'all 0s', '-moz-transition' : 'all 0s' });
			}
			// "Movies"
			else if ($(this).children().hasClass('movies')) {
				$(this).children('.menu-entry-text').css({'background-color' : moviesColor,'color' : 'white'});
				$(this).parent().css('top', pos1).removeClass('hide');
				$('#store').css('top', pos6);
				$('#apps').css('top', pos2);
				$('#music').css('top', pos3);
				$('#books').css('top', pos4);
				$('#devices').css('top', pos5);
				$('.hide').css({'left': left, 'opacity' : 0, 'transition' : 'all 0s', '-webkit-transition' : 'all 0s', '-moz-transition' : 'all 0s' });
			}
			// "Music"
			else if ($(this).children().hasClass('music')) {
				$(this).children('.menu-entry-text').css({'background-color' : musicColor,'color' : 'white'});
				$(this).parent().css('top', pos1).removeClass('hide');
				$('#store').css('top', pos6);
				$('#apps').css('top', pos2);
				$('#movies').css('top', pos3);
				$('#books').css('top', pos4);
				$('#devices').css('top', pos5);
				$('.hide').css({'left': left, 'opacity' : 0, 'transition' : 'all 0s', '-webkit-transition' : 'all 0s', '-moz-transition' : 'all 0s' });
			}
			// "Books"
			else if ($(this).children().hasClass('books')) {
				$(this).children('.menu-entry-text').css({'background-color' : booksColor,'color' : 'white'});
				$(this).parent().css('top', pos1).removeClass('hide');
				$('#store').css('top', pos6);
				$('#apps').css('top', pos2);
				$('#movies').css('top', pos3);
				$('#music').css('top', pos4);
				$('#devices').css('top', pos5);
				$('.hide').css({'left': left, 'opacity' : 0, 'transition' : 'all 0s', '-webkit-transition' : 'all 0s', '-moz-transition' : 'all 0s' });
			}
			// "Devices"
			else if ($(this).children().hasClass('devices')) {
				$(this).children('.menu-entry-text').css({'background-color' : devicesColor,'color' : 'white'});
				$(this).parent().css('top', pos1).removeClass('hide');
				$('#store').css('top', pos6);
				$('#apps').css('top', pos2);
				$('#movies').css('top', pos3);
				$('#music').css('top', pos4);
				$('#books').css('top', pos5);
				$('.hide').css({'left': left, 'opacity' : 0, 'transition' : 'all 0s', '-webkit-transition' : 'all 0s', '-moz-transition' : 'all 0s' });
			}
			
			return false;
		});
	});
	
	// Hide menu when you leave the menu container
	container.on('mouseleave', function() {
		$('.hide').css({'left': left, 'opacity' : 0, 'transition' : '', '-webkit-transition' : '', '-moz-transition' : ''});
		$('.sub-menu').removeClass('index');
	})

	// Show the menu when you hover the trigger 
	expander.on('mouseover', function() {
		$('.hide').css({'left': 0, 'opacity' : 1, 'transition' : '', '-webkit-transition' : '', '-moz-transition' : ''});
		$('.sub-menu').addClass('index');
	});
});