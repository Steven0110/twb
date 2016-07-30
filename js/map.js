function initContact(){
    var map = new google.maps.Map( document.getElementById("map"), {
        center: { lat: 19.394122, lng: -99.179566 },
        zoom: 17
    });
    var marker = new google.maps.Marker({
        animation: google.maps.Animation.BOUNCE,
        position: { lat: 19.394122, lng: -99.179566 }
    });
    marker.setMap( map );
    var info = new google.maps.InfoWindow({
        content: "<div class='info-content'><p class='info-title'>OFICINAS CENTRALES</p><p class='map-title'>DIRECCIÓN: </p>Filadelfia 124 Nápoles 03810 Ciudad de México, D.F.<p class='map-title'>TELÉFONO: </p>55-31305867<p class='map-title'>E-MAIL: </p>cabello.acosta.gerardo@gmail.com<p class='info-title'>REDES SOCIALES</p><div class='icons-bar'><a href='#'><img src='img/other/fb-icon.png' class='icon' /></a><a href='#'><img src='img/other/twitter-icon.png' class='icon' /></a><a href='#'><img src='img/other/yt-icon.png' class='icon' /></a></div></div>",
    });
    info.open( map, marker);
    marker.addListener("click", function(){
        info.open( map, marker);
    });
}

function initSuc(){

    var info = new google.maps.InfoWindow();
    var marker;
    var popup = function(marker, i, contenido) {
        return function() {
          info.setContent( contenido );
          info.open(map, marker);
        };
    };
    var map = new google.maps.Map( document.getElementById("map"), {
        center: { lat: 19.494122, lng: -99.109566 },
        zoom: 11
    });
    $.ajax({
        url : "php/getStores.php",
        success : function( response ){
            var stores = JSON.parse( response ).stores;
            for( var i = 0 ; i < stores.length ; i++ ){
                var content = "<div class='info-content'>" +
                                    "<p class='map-title'>Nombre</p>" +
                                    "<p>" + stores[ i ].name + "</p>" +
                                    "<p class='map-title'>Dirección</p>" +
                                    "<p>" + stores[ i ].dir + "</p>" +
                                    "<p class='map-title'>Teléfono</p>" +
                                    "<p>" + stores[ i ].tel + "</p>" +
                                    "<p class='map-title'>Email</p>" +
                                    "<p>" + stores[ i ].email + "</p>" +
                              "</div>";

                console.log( "Content: " + content );
                marker = new google.maps.Marker({
                   position : { lat: Number( stores[ i ].posX ), lng: Number( stores[ i ].posY ) },
                    map: map
                });
                google.maps.event.addListener(marker, "click", (popup)(marker, i, content));
            }
        }
    });
}
