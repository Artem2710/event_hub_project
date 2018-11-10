var map;
var geo;

function init() {
    geo = new google.maps.Geocoder();

    var opt = {
        zoom: 15
    }

    map = new google.maps.Map(document.getElementById("map_canvas"), opt);

    console.log(address);


    geo.geocode({'address': address}, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {

            //console.log(results[0].geometry.location);
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        }
        else {
            alert('Not valid address');
        }
    });
}