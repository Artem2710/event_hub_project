<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


    <style type="text/css">
        #mymap {
            border:1px solid red;
            width: 100%;
            height: 600px;
        }
    </style>


</head>
<body>

<div id="mymap"></div>


<script type="text/javascript">
    var locations = <?php print_r(json_encode($locations)) ?>;
    var mymap = new GMaps({
        el: '#mymap',
        lat: 49.988358,
        lng: 36.232845,
        zoom:12
    });
    $.each( locations, function( index, value ){
        mymap.addMarker({
            lat: value.lat,
            lng: value.lng,
            title: value.city,
            click: function(e) {
                alert('This is '+value.city+', gujarat from Ukraine.');
            }
        });
    });
</script>


</body>
</html>