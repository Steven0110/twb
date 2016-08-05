$(document).ready(function(){
    $("#sub-menu").hide();
    $("#menu").click(function(){
        if( $("#sub-menu").is(":visible"))
            $("#sub-menu").slideUp();
        else
            $("#sub-menu").slideDown();
    });
    $(window).click(function(event){
        if( !event.target.matches("#menu"))
            $("#sub-menu").slideUp();
        else{

        }
    });
});
