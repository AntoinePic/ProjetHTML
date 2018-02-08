
var map;
$(document).ready(function () {
    //Initialisation de Google Maps
    var mapOptions = {
        zoom: 18,
        center: new google.maps.LatLng(47.47, -0.55)
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    google.maps.event.addListener(map, 'click', function (e) {
        placeMarker(map, event.latLng);

    });


});
function placeMarker(map, location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
    var infowindow = new google.maps.InfoWindow({
        content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
    });
    infowindow.open(map, marker);
}
