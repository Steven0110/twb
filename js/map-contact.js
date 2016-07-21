function init(){
    var map = new google.maps.Map( document.getElementById("map"), {
        center: { lat: 19.394122, lng: -99.179566 },
        scrollwheel: false,
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
