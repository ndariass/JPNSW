var map;
var markers;
var latitude, longitude;


function setPosition() {
    var position;

    position = {lat: 4.5345353, lng: -75.673134};

    return position;
}
function initMapCredit() {
    var position;

    position = setPosition();

    map = new google.maps.Map(document.getElementById('map'), {
        center: position,
        zoom: 14,
    });

    var marker1 = new google.maps.Marker({
        position:  {lat: 4.538126, lng: -75.667978},
        map: map,
    });

    var marker2 = new google.maps.Marker({
        position:  {lat: 4.531900, lng: -75.673134},
        map: map,
    });
}

