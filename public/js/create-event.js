var autocompletes, marker, infowindow, map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 49.988358, lng: 36.232845},
        zoom: 13
    });
    infowindow = new google.maps.InfoWindow();

    marker = new google.maps.Marker({
        map: map
    });


    var inputs = document.querySelector('#address');
    autocompletes = new google.maps.places.Autocomplete(inputs);


    google.maps.event.addListener(autocompletes, 'place_changed', function () {
        marker.setVisible(false);
        infowindow.close();


        var place = autocompletes.getPlace();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        // If the place has a geometry, then present it on a map.
        //console.log(place);
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
        }

        marker.setIcon(({
            url: place.icon,
            /*size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),*/
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }

        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);



        document.getElementById('latitude').value = place.geometry.location.lat();
        document.getElementById('longitude').value = place.geometry.location.lng();
        /*alert(place.name);*/
        var city = '';
        var street = '';
        var house = '';
        // var region = '';
        var country = '';

        var tmp = '';
        console.log(place);
        place.address_components.forEach(function(item, i, arr) {
            //console.log(item);
            tmp = item.long_name;
            if(item.types) {
                item.types.forEach(function(t) {
                    //console.log(t);
                    switch (t) {
                        case 'street_number' :
                            house = tmp;
                            break;
                        case 'route' :
                            street = tmp;
                            break;
                        case 'administrative_area_level_1' :
                        case 'administrative_area_level_2' :
                            region = tmp;
                            break;
                        case 'country' :
                            country = tmp;
                            break;
                        case 'postal_town' :
                        case 'locality' :
                            city = tmp;
                            break;
                    }
                });
            }
        });
        document.getElementById('city').value = city;
        document.getElementById('street').value = street;
        document.getElementById('house').value = house;
        // document.getElementById('region').value = region;
        document.getElementById('country').value = country;
    });
}