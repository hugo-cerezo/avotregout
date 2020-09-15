    <!--Section: Contact v.2-->
    <section class="mb-4">
        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <h5>Nos Informations</h5>
                    </li>
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>30 Boulevard Marechal Lyautey 13470 Carnoux-En-Provence</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>0650843001</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>fcbaelo@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 50%;
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