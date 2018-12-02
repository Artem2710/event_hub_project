var map;
var geocoder;

function loadMap() {
    var pune = {lat: 49.988358, lng: 36.232845};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: pune
    });

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllEvents(allData)
}

function showAllEvents(allData) {

    var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data){
        var content = document.createElement('div');
        var strong = document.createElement('a');
        strong.setAttribute('href', 'events/' + data.id);
        strong.setAttribute('style', 'color: black');

        strong.textContent = data.title;
        content.appendChild(strong);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data.latitude, data.longitude),
            map: map
        });

        marker.addListener('mouseover', function(){
            infoWind.setContent(content);
            infoWind.open(map, marker);
        })
    })
}

function codeAddress(cdata) {
    Array.prototype.forEach.call(cdata, function(data){
        var address = data.city + ' ' + data.street + ' ' + data.house;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                var points = {};
                points.id = data.id;
                points.latitude = map.getCenter().lat();
                points.longitude = map.getCenter().lng();
                updateCollegeWithLatLng(points);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    });
}