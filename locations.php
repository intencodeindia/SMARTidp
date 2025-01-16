<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
    #article-43622 {
        position: relative;
        height: 60vh;
        width: 100%;
    }

    .banner-image {
        background-image: url('assets/images/locations/locations4.png');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    @media (max-width: 767px) {
        #article-43622 {
            height: 25vh;
        }
  
        .banner-image {
            background-size: contain;
            background-position: center center; 
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
    #padtop{
        margin-top: 85px !important;
    }
</style>
<div class="content-wrapper1">
    <main role="main" class="main-content1">
        <div class="container-fluid p-0" id="article-43622">
            <div class="banner-image"></div>
        </div>
        <h2 class="text-center display-5 fw-bold gradient py-3">
            Here to help You
        </h2>
        <h4 class="font-weight-bold text-center">Our Regional Offices</h4>
        <div class="container-fluid py-2">
            <div id="map_wrapper">
                <div id="map_canvas" class="mapping" style="width:100%; height:500px;"></div>
            </div>
        </div>
 
        <div class="container my-5" id="padtop">
            <h2>SmartIDP locations</h2>
            <div class="accordion" id="officeAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingUSA">
                        <button class="accordion-button text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUSA" aria-expanded="true" aria-controls="collapseUSA">
                            USA - Head Office
                        </button>
                    </h2>
                    <div id="collapseUSA" class="accordion-collapse collapse show" aria-labelledby="headingUSA" data-bs-parent="#officeAccordion">
                        <div class="accordion-body">
                            <p>5900 Balcones Drive STE 13688 Austin, TX 78731 USA</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAustralia">
                        <button class="accordion-button  text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAustralia" aria-expanded="false" aria-controls="collapseAustralia">
                            Australia
                        </button>
                    </h2>
                    <div id="collapseAustralia" class="accordion-collapse collapse" aria-labelledby="headingAustralia" data-bs-parent="#officeAccordion">
                        <div class="accordion-body">
                            <p>Woodville Park SA 5011, Australia</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSaudiArabia">
                        <button class="accordion-button  text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaudiArabia" aria-expanded="false" aria-controls="collapseSaudiArabia">
                            Saudi Arabia
                        </button>
                    </h2>
                    <div id="collapseSaudiArabia" class="accordion-collapse collapse" aria-labelledby="headingSaudiArabia" data-bs-parent="#officeAccordion">
                        <div class="accordion-body">
                            <p>2149 Talhat Ibn Malik, Al Malaz, Riyadh, Kingdom Of Saudi Arabia</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingIndia">
                        <button class="accordion-button  text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndia" aria-expanded="false" aria-controls="collapseIndia">
                            India
                        </button>
                    </h2>
                    <div id="collapseIndia" class="accordion-collapse collapse" aria-labelledby="headingIndia" data-bs-parent="#officeAccordion">
                        <div class="accordion-body">
                            <p>16-2-747/40 Mumtaz Colony, Hyderabad, Telangana, India</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNewZealand">
                        <button class="accordion-button  text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNewZealand" aria-expanded="false" aria-controls="collapseNewZealand">
                            New Zealand
                        </button>
                    </h2>
                    <div id="collapseNewZealand" class="accordion-collapse collapse" aria-labelledby="headingNewZealand" data-bs-parent="#officeAccordion">
                        <div class="accordion-body">
                            <p>93 Ferndale Road, Mount Wellington, Auckland, 1060, New Zealand</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPakistan">
                        <button class="accordion-button  text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePakistan" aria-expanded="false" aria-controls="collapsePakistan">
                            Pakistan
                        </button>
                    </h2>
                    <div id="collapsePakistan" class="accordion-collapse collapse" aria-labelledby="headingPakistan" data-bs-parent="#officeAccordion">
                        <div class="accordion-body">
                            <p>EUS2 KDA Overseas Block 16 A Gulshan-EJohar, Karachi, Pakistan</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCanada">
                        <button class="accordion-button  text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCanada" aria-expanded="false" aria-controls="collapseCanada">
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
            ['USA - Head Office', 30.378261, -97.727154, 'https://i.ibb.co/r7PZwqh/pin.png'],
            ['Australia', -34.931432, 138.598738, 'https://i.ibb.co/r7PZwqh/pin.png'],
            ['Saudi Arabia', 24.631448, 46.770779, 'https://i.ibb.co/r7PZwqh/pin.png'],
            ['India', 17.375501, 78.473349, 'https://i.ibb.co/r7PZwqh/pin.png'],
            ['New Zealand', -36.927727, 174.835075, 'https://i.ibb.co/r7PZwqh/pin.png'],
            ['Pakistan', 24.929208, 67.092005, 'https://i.ibb.co/r7PZwqh/pin.png'],
            ['Canada', 43.528905, -79.899588, 'https://i.ibb.co/r7PZwqh/pin.png']
        ];

        var infoWindowContent = [
            ['<h3>USA - Head Office</h3><p>5900 Balcones Drive STE 13688 Austin, TX 78731 USA</p>'],
            ['<h3>Australia</h3><p>Woodville Park SA 5011, Australia</p>'],
            ['<h3>Saudi Arabia</h3><p>2149 Talhat Ibn Malik, Al Malaz, Riyadh, Kingdom Of Saudi Arabia</p>'],
            ['<h3>India</h3><p>16-2-747/40 Mumtaz Colony, Hyderabad, Telangana, India</p>'],
            ['<h3>New Zealand</h3><p>93 Ferndale Road, Mount Wellington, Auckland, 1060, New Zealand</p>'],
            ['<h3>Pakistan</h3><p>EUS2 KDA Overseas Block 16 A Gulshan-EJohar, Karachi, Pakistan</p>'],
            ['<h3>Canada</h3><p>480 Dymott Ave, Milton, ON L9T 7V2 Canada</p>']
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