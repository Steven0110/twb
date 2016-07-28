function checkLogin(){
    if( $.cookie( "username" ) != undefined ){
        $("body").prepend( createHeader( $.cookie( "username" ) ) );
        var acc_button = createAccountButton();
        var login_button = $("#replace");
        login_button.replaceWith( acc_button );
    }
}
function unlogin(){
    $.removeCookie("username");
    location.reload();
}
function createHeader( nombre ){
    var hour = new Date().getHours;
    var time = "Buenos días";
    if( hour > 0 && hour < 12 )
        time = "Buenos días";
    else if( hour >= 12 && hour < 7 )
        time = "Buenas tardes";
    else
        time = "Buenas noches";

    var header = $("<div id='header'></div>");
    var saludo = $("<div id='saludo' class='header-izq col-xs-6 col-sm-8 col-lg-10 col-md-10'>" + time + " " + nombre + "</div>");
    var ordenar = $("<div class='header-der col-xs-6 col-sm-4 col-lg-2 col-md-2'>Ordenar ahora</div>");
    var close_session_button = $("<p onclick='unlogin()'>Cerrar sesión</p>");
    header.append( saludo );
    header.append( ordenar );
    header.append( close_session_button );

    return header;
}
function createAccountButton(){
    var active = "";
    var url = location.href;
    if( url.substr("account.html") === true  )
        active = "active";

    return $("<button id=\"replace\" class=\"nav-btn col-md-2 col-sm-2 col-xs-2 col-lg-2 " + active + "\" onclick=\"location.href='account.html' \">MI CUENTA</button>");
}
