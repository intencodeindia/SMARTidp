<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
    #article-43622 {
        position: relative;
        height: 60vh;
        width: 100%;
    }

    .banner-image {
        background-image: url('assets/images/locations/locations5.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    @media (max-width: 767px) {
        #article-43622 {
            height: 38vh;
        }

        .banner-image {
            background-size: contain;
            background-position: center center;
        }
    }

    @media (max-width: 536px) {
        #article-43622 {
            height: 25vh;
        }
    }


    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
    }

    #map_wrapper {
        height: 50vh;
    }

    #map_canvas {
        width: 100%;
        height: 100%;
    }

    #padtop {
        margin-top: 85px !important;
    }

    .accordion-separator {
        border-top: 6px solid white;
        /* Adds a white line */

    }

    /* Change text color to black when the button is active */
    .accordion-button:not(.collapsed) {
        color: black !important;
        background-color: #f8f9fa !important;
        /* You can adjust the background color if needed */
    }

    .accordion-button {
        color: white;
        /* Default text color for collapsed state */
    }

    /* .video-container {
        position: relative;
        display: inline-block;
        border-radius: 25px;
        padding: 2px;
    }

    .video-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(260deg, #0090f9 0%, #00b09c 100%);
        border-radius: 25px;
        z-index: -1;
    } */
</style>
<div class="content-wrapper1">
    <main role="main" class="main-content1">

        <div class="container-fluid p-0" id="article-43622">
            <div class="banner-image"></div>
        </div>
        <h2 class="text-center display-5 fw-bold gradient py-3">
            We Are Here To Help You
        </h2>
        <h4 class="font-weight-bold text-center">Our Regional Offices</h4>
        <div class="container-fluid py-2">
            <div id="map_wrapper">
                <div id="map_canvas" class="mapping" style="width:100%; height:500px;"></div>
            </div>
        </div>

        <div class="container my-5" id="padtop">
            <h2 class="fw-bold text-center mb-3">SmartIDP locations</h2>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="accordion" id="officeAccordion">
                        <!-- USA - Head Office -->
                        <div class="accordion-item border-0 bg-transparent py-2">
                            <h2 class="accordion-header" id="headingUSA">
                                <button class="accordion-button collapsed rounded-pill text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUSA" aria-expanded="true" aria-controls="collapseUSA">
                                    USA - Head Office
                                </button>
                            </h2>
                            <div id="collapseUSA" class="accordion-collapse collapse" aria-labelledby="headingUSA" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>5900 Balcones Drive STE 13688 Austin, TX 78731 USA</p>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <!-- <div class="accordion-separator"></div> -->

                        <!-- Australia -->
                        <div class="accordion-item border-0 bg-transparent py-2">
                            <h2 class="accordion-header" id="headingAustralia">
                                <button class="accordion-button collapsed rounded-pill text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAustralia" aria-expanded="false" aria-controls="collapseAustralia">
                                    Australia
                                </button>
                            </h2>
                            <div id="collapseAustralia" class="accordion-collapse collapse" aria-labelledby="headingAustralia" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>Woodville Park SA 5011, Australia</p>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <!-- <div class="accordion-separator"></div> -->

                        <!-- Saudi Arabia -->
                        <div class="accordion-item border-0 bg-transparent py-2">
                            <h2 class="accordion-header" id="headingSaudiArabia">
                                <button class="accordion-button collapsed rounded-pill text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaudiArabia" aria-expanded="false" aria-controls="collapseSaudiArabia">
                                    Saudi Arabia
                                </button>
                            </h2>
                            <div id="collapseSaudiArabia" class="accordion-collapse collapse" aria-labelledby="headingSaudiArabia" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>2149 Talhat Ibn Malik, Al Malaz, Riyadh, Kingdom Of Saudi Arabia</p>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <!-- <div class="accordion-separator"></div> -->

                        <!-- India -->
                        <div class="accordion-item border-0 bg-transparent py-2">
                            <h2 class="accordion-header" id="headingIndia">
                                <button class="accordion-button collapsed text-white rounded-pill fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndia" aria-expanded="false" aria-controls="collapseIndia">
                                    India
                                </button>
                            </h2>
                            <div id="collapseIndia" class="accordion-collapse collapse" aria-labelledby="headingIndia" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>16-2-747/40 Mumtaz Colony, Hyderabad, Telangana, India</p>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <!-- <div class="accordion-separator"></div> -->

                        <!-- New Zealand -->
                        <div class="accordion-item border-0 bg-transparent py-2">
                            <h2 class="accordion-header" id="headingNewZealand">
                                <button class="accordion-button collapsed rounded-pill text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNewZealand" aria-expanded="false" aria-controls="collapseNewZealand">
                                    New Zealand
                                </button>
                            </h2>
                            <div id="collapseNewZealand" class="accordion-collapse collapse" aria-labelledby="headingNewZealand" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>93 Ferndale Road, Mount Wellington, Auckland, 1060, New Zealand</p>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <!-- <div class="accordion-separator"></div> -->

                        <!-- Pakistan -->
                        <div class="accordion-item border-0 bg-transparent py-2">
                            <h2 class="accordion-header" id="headingPakistan">
                                <button class="accordion-button collapsed text-white rounded-pill fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePakistan" aria-expanded="false" aria-controls="collapsePakistan">
                                    Pakistan
                                </button>
                            </h2>
                            <div id="collapsePakistan" class="accordion-collapse collapse" aria-labelledby="headingPakistan" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>EUS2 KDA Overseas Block 16 A Gulshan-EJohar, Karachi, Pakistan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <!-- <div class="accordion-separator"></div> -->

                        <!-- Canada -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingCanada">
                                <button class="accordion-button collapsed text-white rounded-pill fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCanada" aria-expanded="false" aria-controls="collapseCanada">
                                    Canada
                                </button>
                            </h2>
                            <div id="collapseCanada" class="accordion-collapse collapse" aria-labelledby="headingCanada" data-bs-parent="#officeAccordion">
                                <div class="accordion-body">
                                    <p>480 Dymott Ave, Milton, ON L9T 7V2 Canada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-md-7 mt-4 mt-md-0">
                    <div class="content-image">
                        <figure class="mb-0 d-flex justify-content-center align-items-center video-container">
                            <figure class="mb-0 d-flex justify-content-center align-items-center video-container">
                                <img src="assets/images/logo/smartIDP.gif" alt="GIF" class="w-100 responsive-video" style="border-radius: 25px;">
                            </figure>
                            <!-- <video autoplay muted loop playsinline class="w-100 p-2 responsive-video" style="border-radius: 25px;">
                                <source src="<?php echo BASE_PATH; ?>assets/sidp.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> -->
                        </figure>
                    </div>
                </div>

            </div>
        </div>


    </main>
</div>
<?php include_once("includes/footer.php"); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Load the Google Maps API with async and defer attributes -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAryRO9Ng3KZ2XMJx8y-Ue_3ew5oZZ_cNo&callback=initialize"></script>

<script>
    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        map.setTilt(45);

        var markers = [
            ['USA - Head Office', 30.378261, -97.727154, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/usa.jpg'],
            ['Australia', -34.931432, 138.598738, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/australia.jpg'],
            ['Saudi Arabia', 24.631448, 46.770779, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/sa.jpg'],
            ['India', 17.375501, 78.473349, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/india.avif'],
            ['New Zealand', -36.927727, 174.835075, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/newzealand.jpg'],
            ['Pakistan', 24.929208, 67.092005, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/pk.jpg'],
            ['Canada', 43.528905, -79.899588, 'https://i.ibb.co/r7PZwqh/pin.png', 'assets/images/locations/canada.jpg']
        ];

        var infoWindowContent = [
            ['<h6 style="font-weight: bold;">USA - Head Office</h6><p>5900 Balcones Drive STE 13688 Austin, TX 78731 USA</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/usa.jpg" alt="USA" loading="lazy" style="width:100%; height:100%; object-fit:cover;"></div>'],
            ['<h6 style="font-weight: bold;">Australia</h6><p>Woodville Park SA 5011, Australia</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/australia.jpg" alt="Australia" loading="lazy" style="width:100%; height:100%; object-fit:cover;"></div>'],
            ['<h6 style="font-weight: bold;">Saudi Arabia</h6><p>2149 Talhat Ibn Malik, Al Malaz, Riyadh, Kingdom Of Saudi Arabia</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/sa.jpg" alt="Saudi Arabia" style="width:100%; height:100%; object-fit:cover;"></div>'],
            ['<h6 style="font-weight: bold;">India</h6><p>16-2-747/40 Mumtaz Colony, Hyderabad, Telangana, India</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/india.avif" alt="India" style="width:100%; height:100%; object-fit:cover;"></div>'],
            ['<h6 style="font-weight: bold;">New Zealand</h6><p>93 Ferndale Road, Mount Wellington, Auckland, 1060, New Zealand</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/newzealand.jpg" alt="New Zealand"  loading="lazy" style="width:100%; height:100%; object-fit:cover;"></div>'],
            ['<h6 style="font-weight: bold;">Pakistan</h6><p>EUS2 KDA Overseas Block 16 A Gulshan-EJohar, Karachi, Pakistan</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/pk.jpg" alt="Pakistan" loading="lazy" style="width:100%; height:100%; object-fit:cover;"></div>'],
            ['<h6 style="font-weight: bold;">Canada</h6><p>480 Dymott Ave, Milton, ON L9T 7V2 Canada</p><div style="width:100%; height:200px; overflow:hidden;"><img src="assets/images/locations/canada.jpg" alt="Canada" loading="lazy" style="width:100%; height:100%; object-fit:cover;"></div>']
        ];

        var infoWindow = new google.maps.InfoWindow();
        var marker, i;

        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0],
                icon: markers[i][3]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));
        }

        map.fitBounds(bounds);

        // Adjust the zoom level to ensure all markers are visible
        var listener = google.maps.event.addListener(map, "idle", function() {
            if (map.getZoom() > 5) map.setZoom(5); // Set a maximum zoom level
            google.maps.event.removeListener(listener);
        });
    }
</script>