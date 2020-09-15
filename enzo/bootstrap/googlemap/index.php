<style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
        height: 100%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<script>
    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.
    var map, infoWindow;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 43.259,
                lng: 5.570
            },
            zoom: 9
        });

        markerB = new google.maps.Marker({
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,
            position: {
                lat: 43.259120,
                lng: 5.570815
            }
        });
        // infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                console.log(pos["lat"]);
                marker = new google.maps.Marker({
                    map: map,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                    position: {
                        lat: pos["lat"],
                        lng: pos["lng"]
                    }
                });
                let a = {
                    'lat': 43.259120 * Math.PI / 180,
                    'lng': 5.570815 * Math.PI / 180
                }
                let b = {
                    'lat': pos["lat"] * Math.PI / 180,
                    'lng': pos["lng"] * Math.PI / 180
                }
                let Sab = Math.acos(Math.sin(a["lat"]) * Math.sin(b["lat"]) + Math.cos(a["lat"]) * Math.cos(b["lat"]) * Math.cos(b["lng"] - a["lng"]))
                console.log(Sab * 6378137);
                var Circle = new google.maps.Circle({
                    strokeColor: '#32CD32',
                    strokeOpacity: 0.5,
                    strokeWeight: 2,
                    fillColor: '#32CD32',
                    fillOpacity: 0.2,
                    map: map,
                    center: {
                        lat: 43.259120,
                        lng: 5.570815
                    },
                    radius: 100000,
                });

                // infoWindow.setPosition(pos);
                // infoWindow.setContent('Vous êtes ici.');
                // infoWindow.open(map);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAs4x5crvSjDDcLy6BaYGcbeyhCOF7HUsU&callback=initMap">
</script>