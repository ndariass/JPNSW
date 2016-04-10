var map;
var markers;
var latitude, longitude;

function getLocation() {
    navigator.geolocation.getCurrentPosition(displayLocation, handleError);
}

function displayLocation(position){
    //showAndroidToast(position.coords.latitude + ", " + position.coords.longitude, position.coords.longitude);
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;

    initMap();
}

function handleError(e){
    initMap();
}

function setPosition() {
    var position;

    if (latitude && longitude) {
        position = {lat: latitude, lng: longitude};
    }
    else {
        position = {lat: 4.6515167, lng: -74.0594862};

    }
    return position;
}
function initMap() {

    var position;

    position = setPosition();

    map = new google.maps.Map(document.getElementById('map'), {
        center: position,
        zoom: 16,
    });

    var currentPositionMarker = new google.maps.Marker({
        position: position,
        map: map,
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 5
        },
    });

    markers = new Array(BANKS.length);

    for (var i = 0; i < BANKS.length; i++){
        setMarker(BANKS[i], i);
    }
}


function setMarker(data, index){
    console.log(data.position);
    markers[index] = new google.maps.Marker({
        position: data.position,
        map: map,
        title: 'Hello World!'
    });

    var contentString = buildBankInformation(data);

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    markers[index].addListener('click', function () {
        infowindow.open(map, markers[index]);
    });
}

function buildBankInformation(data) {
    var contentString = '<strong>' + data.name + '</strong> </br>';
    var contentString = contentString + data.address;

    return contentString;
}

