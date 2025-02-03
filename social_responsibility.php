<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
    #article-43622 {
        position: relative;
        height: 60vh;
        width: 100%;
    }

    .banner-image {
        background-image: url('assets/images/social_responsibility/The-Social.webp');
        background-size: cover;
        /* Keep it covering the container */
        background-position: center center;
        /* Keep it centered */
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        object-fit: cover;
        /* Added to avoid cutting off image in some cases */
    }

    /* Additional responsiveness for mobile */
    @media (max-width: 767px) {
        #article-43622 {
            height: 46vh;
            /* Adjust height for smaller screens */
        }

        .banner-image {
            background-size: contain;
            /* Use contain for smaller screens to prevent cropping */
            background-position: center center;
            /* Keep image centered */
        }
    }

    @media (max-width: 640px) {
        #article-43622 {
            height: 38vh;
            /* Adjust height for smaller screens */
        }
    }

    @media (max-width: 536px) {
        #article-43622 {
            height: 28vh;
            /* Adjust height for smaller screens */
        }
    }

    /* Gradient text styling */
    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
        font-size: 250%;
    }

    /* Unique class for shadow effect */
    .custom-card-shadow {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1), 0 8px 24px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1.25rem;
    }

    .custom-card-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2), 0 16px 48px rgba(0, 0, 0, 0.25);
    }
</style>
<div class="content-wrapper1">
    <main role="main" class="main-content1">
        <div class="container-fluid p-0" id="article-43622">
            <div class="banner-image"></div>
        </div>
        <h6 class="text-center fw-bold gradient py-3">
            We care about the future
        </h6>
        <div class="container">
            <section class="row text-center">
                <!-- Equal opportunities -->
                <div class="col-md-4 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fa fa-users fa-3x mb-3" style="color: #007bff;"></i>
                            <h5 class="card-title fw-bold">Equal opportunities</h5>
                            <p class="card-text">We support our young talent & skilled workers</p>
                        </div>
                    </div>
                </div>

                <!-- Environment -->
                <div class="col-md-4 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fa fa-leaf fa-3x mb-3" style="color: #28a745;"></i>
                            <h5 class="card-title fw-bold">Environment</h5>
                            <p class="card-text">We believe in sustainable architecture</p>
                        </div>
                    </div>
                </div>

                <!-- Causes close to our heart -->
                <div class="col-md-4 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fa fa-heart fa-3x mb-3" style="color: #dc3545;"></i>
                            <h5 class="card-title fw-bold">Causes close to our heart</h5>
                            <p class="card-text">We support projects to help people</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container my-md-5">
            <div class="row align-items-center">
                <!-- Left Column (Headline) -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle fa-3x me-3 text-primary"></i>
                        <h2 class="fw-bold">We make our actions count</h2>
                    </div>
                </div>

                <!-- Right Column (Text Content) -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <!-- <i class="fas fa-heart fa-2x me-3 text-danger"></i> -->
                        <p class="h5 mb-0"><strong><em>Commitment</em></strong> to people and to the future.</p>
                    </div>
                    <p>
                        Digitalization is our daily bread. And we never lose sight of <em>why</em> we develop our software: to help people and to create a better future. This is why we take our responsibilities towards society so seriously. We want to provide opportunities for the next generation: We want them to develop professionally, live in a healthy environment, and enjoy social stability. We have been actively committed to this for many years.
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-md-5">
            <div class="row">
                <!-- Left Column: Icon Boxes Section in Rows -->
                <div class="col-lg-6 col-12 mb-4">
                    <!-- Fair Company Icon Box -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center p-4 rounded hover-shadow-lg transition">

                            <div>
                                <h4 class="fw-bold mb-2"><i class="fas fa-users me-1 text-primary pe-2"></i>Fair Company</h4>
                                <p class="mb-0">This is why SmartIDP has been recognized with the “Fair Company” title. We are committed to creating a positive and inclusive work environment. Additionally, we support various initiatives aimed at digital literacy in schools, helping talented students unlock their potential at an early age.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Scholarships Icon Box -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center p-4 rounded hover-shadow-lg transition">

                            <div>
                                <h4 class="fw-bold mb-2"><i class="fas fa-graduation-cap text-success pe-2"></i>Scholarships & Promotion of Young Talent</h4>
                                <p class="mb-0">SmartIDP believes in empowering young talent to focus on their studies without financial worry. That’s why we proudly support the German scholarship program <em>Deutschlandstipendium</em> as a premium sponsor, providing opportunities for the next generation of innovators.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Research Icon Box -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center p-4 rounded hover-shadow-lg transition">

                            <div>
                                <h4 class="fw-bold mb-2"> <i class="fas fa-flask text-warning pe-2"></i> Research & University Cooperations</h4>
                                <p class="mb-0">SmartIDP has a strong tradition of collaborating with research institutions and universities. Alongside joint projects with numerous academic partners, we offer our employees the flexibility to work and study part-time, further fostering growth in both their careers and education.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Image Section (Centered) -->
                <div class="col-lg-6 col-12 mb-4 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <img src="assets/images/social_responsibility/Research_methods.jpg" alt="Image Description" class="img-fluid shadow-lg" style="border-radius: 20px" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-md-5">
            <div class="row align-items-center">
                <!-- Left Column: Image (Hidden on mobile) -->
                <div class="col-lg-6 col-md-6 d-none d-md-block mb-4">
                    <div class="text-center">
                        <img
                            src="assets/images/social_responsibility/sustain.webp"
                            alt="Green Building"
                            class="img-fluid" style="border-radius: 20px" loading="lazy" />
                    </div>
                </div>


                <!-- Right Column: Text Content -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <h3 class="fw-bold">Green building for sustainability</h3>

                    <p><em>We care for our <strong>environment</strong>.</em></p>

                    <p>
                        Our headquarters in Bonn passed the strict sustainability criteria of the DGNB (German sustainable building council) with flying colors. It was awarded the DGNB certificate in the “gold” category and certified as one of the best new buildings in Germany. Our office in Hamburg on the Mittelweg campus also meets the highest sustainability standards as a green building, confirmed by the DGNB certificate in silver.
                    </p>

                    <p>This is ensured by:</p>

                    <!-- Sustainability Features List with Icons -->
                    <ul class="list-unstyled">
                        <li><i class="fas fa-leaf text-success me-2"></i>Environmentally-friendly, pollutant-free building materials & resources</li>
                        <li><i class="fas fa-bolt text-primary me-2"></i>High energy efficiency & low emissions</li>
                        <li><i class="fas fa-building text-info me-2"></i>An open building & communication infrastructure</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container my-md-5">
            <div class="row align-items-center">
                <!-- Left Column: Text Content -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <h2 class="fw-bold">Charitable causes close to our heart</h2>

                    <p><em>We care a great deal about <strong>people’s</strong> welfare.</em></p>

                    <p>
                        Health and well-being are critical to ensuring a better quality of life. This is why we are keen to support organizations and projects that promote these purposes. We support numerous worthy causes through our regular donations and fundraising campaigns: ranging from sports and leisure activities for families with sick children to the work of hospitals and hospices.
                    </p>
                </div>

                <!-- Right Column: Image (Hidden on mobile) -->
                <div class="col-lg-6 col-md-6 d-none d-md-block mb-4">
                    <div class="text-center">
                        <img
                            src="assets/images/social_responsibility/charity.jpg"
                            alt="Charitable Causes"
                            class="img-fluid" style="border-radius: 20px" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<?php include_once("includes/footer.php"); ?>