var map;
var markers;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 4.6515167, lng: -74.0594862},
        zoom: 16,
    });

    markers = new Array(BANKS.length);

    for (var i = 0; i < BANKS.length; i++){
        setMarker(BANKS[i], i);
    }


    for (var i = 0; i < BANKS.length; i++){
        marker[i].addListener('click', function () {

            for (var j = 0; j < BANKS.length; j++){
                if (i != j)
                    marker[j].close();
            }
        });
    }
}

function setMarker(data, index){
    console.log(data.position);
    markers[index] = new google.maps.Marker({
        position: data.position,
        map: map,
        title: 'Hello World!'
    });

    var contentString = '<strong>' + data.name + '</strong> </br>';
    var contentString = contentString + data.address;

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    markers[index].addListener('click', function () {
        infowindow.open(map, markers[index]);
    });
}