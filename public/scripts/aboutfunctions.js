
    $( "#dialog_trigger").click(function() {
        $( "#dialog" ).dialog( "open" );
    });
    $("#dialog").dialog({
        autoOpen: false,
        position: 'center' ,
        title: 'EDIT',
        draggable: false,
        width : 800,
        height : 700, 
        resizable : true,
        modal : true,
    });