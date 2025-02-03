<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
    /* Gradient text styling */
    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        /* -webkit-background-clip: text; */
        color: transparent;
        /* font-size: 250%; */
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

    .rounded-circle {
        font-size: 30px;
    }

    .icon-box-circle {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin: 0 auto;
    }
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">

        <div class="container-fluid py-md-5">
            <div class="row align-items-center">
                <!-- Column 1: Text Content -->
                <div class="col-lg-5 offset-md-1 col-md-12 mb-4">
                    <div class="headline-box text-left">
                        <h2 class="fw-bold">SmartIDP solutions — <br>empowering automation</h2>
                    </div>
                    <div class="mb-4">
                        <p>SmartIDP subscription customers now have access to three advanced, scalable service packages — Silver, Gold, and Platinum — designed to optimize your intelligent process automation needs. Focus on growth while we handle the automation!</p>
                    </div>
                    <div class="mb-3">
                        <a class="btn rounded-pill px-4 text-white fw-bold" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Learn More</a>
                    </div>
                </div>
                <!-- Column 2: Image -->
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img src="assets/images/managed_services/relaxed1.webp" alt="Smart Automation" class="img-fluid" style="border-radius:20px" loading="lazy">
                </div>
            </div>
        </div>

        <div class="container my-md-3">
            <hr>
            <div class="row">
                <!-- Title Section -->
                <div class="col-12 col-md-12 col-lg-6 d-flex align-items-center">
                    <h2 class="fw-bold">SmartIDP <span class="gradient">Benefits at a Glance</span></h2>
                </div>
                <!-- Accordion Section -->
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="accordion" id="benefitsAccordion">
                        <!-- Accordion Item 1 -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed rounded-pill w-100 border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. Exclusive access to cutting-edge automation features
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#benefitsAccordion">
                                <div class="accordion-body">
                                    As a SmartIDP subscriber, you gain exclusive access to a stream of intelligent process automation innovations. Continuous updates, new functionalities, and automated enhancements keep your operations optimized and at the forefront of technology.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded-pill w-100 border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Comprehensive service and support packages
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#benefitsAccordion">
                                <div class="accordion-body">
                                    Our end-to-end managed services ensure your SmartIDP environment runs seamlessly. We handle system monitoring, maintenance, and updates while optimizing your automation processes. Our service packages offer flexible support options, including up to 24/7 availability.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded-pill w-100 border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Scalability and flexibility tailored to your business
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#benefitsAccordion">
                                <div class="accordion-body">
                                    SmartIDP grows with your business! Effortlessly scale automation processes, user access, and storage capacities to meet your evolving needs. Stay agile and pay only for what you use.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="container" id="article-29421">
            <h2 class="text-left fw-bold">See the<span class="gradient"> benefits for yourself!</span></h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- The new SmartIDP service packages at a glance -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <!-- More relevant icon for automation (gears or robot) -->
                                <span class="icon-boxes-item-icon"><i class="fas fa-robot fa-md"></i></span>
                                <h3 class="fw-bold">SmartIDP Automation Service Packages at a Glance</h3>
                                <p>Three comprehensive service packages plus optional add-ons: Our packages offer up to 24/7 availability, end-to-end management of your SmartIDP environment, and ensure seamless automation at all times.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Enhanced managed services & support packages for SmartIDP -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <!-- More relevant icon for services/support (headset or life-ring) -->
                                <span class="icon-boxes-item-icon"><i class="fas fa-headset fa-md"></i></span>
                                <h3 class="fw-bold">Enhanced Managed Services & Support Packages</h3>
                                <p>Introducing SmartIDP's comprehensive managed services and support packages, ensuring that your automation solutions run smoothly, with proactive monitoring and dedicated assistance.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/microsoft/email.png" alt="Microsoft Outlook Integration" class="img-fluid" loading="lazy" style="border-radius: 20px;">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center mb-md-5 fw-bold">Subscription customers benefit from a wide range of services in our <span class="gradient">extended SmartIDP portfolio</span></h2>
            <div class="row text-center mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title fw-bold">System Services</h5>
                            <p>We manage your SmartIDP environment, perform regular checks, updates, and provide recommendations to ensure optimal performance of your automation systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <i class="fas fa-cogs fa-lg"></i>
                            </div>
                            <h5 class="card-title fw-bold">Support Services</h5>
                            <p>Our support team is available around the clock, offering 24/7 assistance. We guarantee response times of up to 30 minutes to ensure the smooth performance of your SmartIDP system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <i class="fas fa-sync-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title fw-bold">Mentoring Services</h5>
                            <p>Ensure your team is empowered to manage your SmartIDP system independently. Our experts will provide hands-on support to get your admin team up to speed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="mod_article  max-width-viewport block" id="article-38500">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start " style="margin-top: -30px;margin-bottom: 25px; ">
                    <div class="centered-wrapper-inner ">
                        <hr class=" ce_rsce_oneo_separator">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="rs-columns ce_rs_columns_start">
                            <div class="ce_rs_column_start  rs-column -large-col-5-2 -large-first -large-first-row -medium-col-5-2 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                <div class="parallelogram content-image">
                                    <figure>
                                        <picture>
                                            <source srcset="assets/images/managed_services/question.jpg" type="image/webp" width="374" height="249">
                                            <img src="assets/images/managed_services/question.jpg" alt width="374" height="249"  loading="lazy" style="border-radius: 20px;">
                                        </picture>

                                    </figure>
                                </div>
                            </div>
                            <div class="ce_rs_column_start  rs-column -large-col-5-3 -large-last -large-first-row -medium-col-5-3 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                <div class="content-text">
                                    <h2>We have the answers!</h2>
                                    <div class="rte">
                                        <p>Do you have questions about the new service packages or how to switch your Doxis license to a subscription model? Want to learn more about the new service packages or request a no-obligation offer? Call
                                            or email us and we will be happy to help!</p>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button   -left">
                                    <a class="button ce_rsce_oneo_button   -left" href="contact">
                                        Contact us now </a>
                                </div>
                            </div>
                        </div>
                        <hr class=" ce_rsce_oneo_separator">
                    </div>
                </div>
            </div>
        </div>
        <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
            <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                SmartIDP</h2>
        </div>
        <?php include_once("smartidp_logos.php"); ?>
    </main>
</div>
<?php include_once("includes/footer.php"); ?>