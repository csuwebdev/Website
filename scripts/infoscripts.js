$(document).ready(function(){
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