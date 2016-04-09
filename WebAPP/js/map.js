var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 4.6447628, lng: -74.1086459},
        zoom: 12
    });

    var marker = new google.maps.Marker({
        position: {lat: 4.6447628, lng: -74.1086359},
        map: map,
        title: 'Hello World!'
    });

    var contentString = 'This is a message!';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });
}