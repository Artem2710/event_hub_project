function way() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    document.getElementById('submit').addEventListener('click', function () {
        calculateAndDisplayRoute(directionsService, directionsDisplay);
    });
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    navigator.geolocation.getCurrentPosition(function (position) {
        var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };

        var map = new google.maps.Map(document.getElementById('map_canvas'), {
            zoom: 8,
            center: {lat: pos.lat, lng: pos.lng}
        });
        directionsDisplay.setMap(map);


        var x = document.createElement("INPUT");
        x.setAttribute("type", "hidden");
        x.setAttribute("id", "start");
        x.setAttribute("value", pos.lat + ', ' + pos.lng);
        document.body.appendChild(x);
        if (pos) {
            directionsService.route({
                origin: document.getElementById('start').value,
                destination: document.getElementById('end').value,
                optimizeWaypoints: true,
                travelMode: 'DRIVING'
            }, function (response, status) {

                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                    var route = response.routes[0];
                    var summaryPanel = document.getElementById('directions-panel');
                    summaryPanel.innerHTML = '';
                    // For each route, display summary information.
                    for (var i = 0; i < route.legs.length; i++) {
                        summaryPanel.innerHTML += route.legs[i].start_address + ' - <b>начало пути</b><br>';
                        summaryPanel.innerHTML += route.legs[i].end_address + ' - <b>конец пути</b><br>';
                        summaryPanel.innerHTML += route.legs[i].distance.text;
                    }
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }
    }, function () {
        handleLocationError(true, infoWindow, map.getCenter());
    });
}