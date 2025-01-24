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

    .rounded-circle {
        font-size: 30px;
    }

    .icon-box-circle {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin: 0 auto;
    }
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid" style="background-image: url('assets/images/SmartIDP_Group/Animated.svg'); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 25px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Content Section -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                        <h2 class="fw-bold mb-4 text-white"><span class="gradient">SmartIDP</span> Simplifying HR Document Management</h2>
                        <p class="lead fw-bold text-white mb-4">Efficiently manage all employee records, streamline HR workflows, and ensure compliance. SmartIDP integrates with your existing systems to centralize all documents in one secure platform.</p>
                    </div>
                    <!-- Right Column: Image Section -->
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
                        <img src="assets/images/human_resource/12.png" class="img-fluid"loading="lazy" alt="SmartIDP" style="max-width: 85%; height: auto;">
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-5"></div>
        <?php include_once("smartidp_logos.php"); ?>

        <div class="container-fluid py-md-4 py-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-3">
                        <h2 class="fw-bold mt-0">SmartIDP for The foundation for seamless and secure <span class="gradient">HR workflows</span></h2>
                    </div>
                    <div class="col-12 text-center">
                        <p>Recruitment, training, onboarding, offboarding—SmartIDP streamlines every aspect of your HR processes. Manage countless documents securely, ensuring they reach the right teams at the right time. With SmartIDP, you can efficiently handle everything digitally: from job applicant assessments to severance agreements, ensuring smooth workflows across HR, legal, and other departments. Simplify HR operations for your team, your company, and your employees with SmartIDP.</p>
                    </div>
                    <div class="row text-center mt-5">
                        <!-- Smarter HR Process Management -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 custom-card-shadow custom-card-shadow">
                                <div class="card-body">
                                    <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                        <!-- Icon for HR process management -->
                                        <i class="fas fa-users-cog fa-md"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">Streamlined & cost-effective HR processes</h5>
                                    <p>Store all employee information in SmartIDP's digital HR eFiles for faster request processing and a more efficient way of working, reducing administrative costs.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Empower HR Teams for Strategic Focus -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 custom-card-shadow custom-card-shadow">
                                <div class="card-body">
                                    <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                        <!-- Icon for strategic focus -->
                                        <i class="fas fa-lightbulb fa-md d-flex justify-content-center align-items-center"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">Empower your HR team</h5>
                                    <p>Eliminate time-consuming manual searches and paper-based filing. Give your HR team more time to focus on strategic initiatives like recruitment, retention, and employee development.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Risk Management & Accountability -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 custom-card-shadow custom-card-shadow">
                                <div class="card-body">
                                    <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                        <!-- Icon for risk management -->
                                        <i class="fas fa-shield-alt fa-md"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">Mitigate risks & enhance accountability</h5>
                                    <p>Keep track of contracts, agreements, and deadlines. Ensure timely actions on missing documents, approvals, and legal obligations to maintain compliance and accountability.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                <div class="icon-boxes-wrapper">
                    <div
                        class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                        <span class="icon-boxes-item-icon"><i class="fas fa-shield-alt fa-md"></i></span>
                        <h3>Avoid compliance risks and data violations</h3>
                        <div class="icon-boxes-item-text">
                            <p class="text-justify px-2 pe-md-4">SmartIDP ensures automated and compliant management of employee personal data, aligning with data protection regulations and retention policies to reduce legal risks.</p>
                        </div>
                    </div>
                    <div
                        class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                        <span class="icon-boxes-item-icon"><i class="fas fa-check-circle fa-md"></i></span>
                        <h3>Minimize errors & enhance productivity</h3>
                        <div class="icon-boxes-item-text">
                            <p class="text-justify px-2 pe-md-4">With SmartIDP, all employee lifecycle data and documents are centralized in one place, reducing errors and missed opportunities during onboarding, contract management, training, offboarding, and more.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                <div class="icon-boxes-wrapper">
                    <div
                        class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                        <span class="icon-boxes-item-icon"><i class="fas fa-lock fa-md"></i></span>
                        <h3>Protect employee data & documents</h3>
                        <div class="icon-boxes-item-text">
                            <p class="text-justify px-2 pe-md-4">With SmartIDP, ensure secure employee data management with detailed control over who can access, view, and modify sensitive documents, providing complete data protection.</p>
                        </div>
                    </div>
                    <div
                        class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                        <span class="icon-boxes-item-icon"><i class="fas fa-laptop-house fa-md"></i></span>
                        <h3>Work from anywhere, effortlessly</h3>
                        <div class="icon-boxes-item-text">
                            <p class="text-justify px-2 pe-md-4">SmartIDP’s HR eFile allows seamless access to employee documents and processes across devices and locations, enabling flexible workflows and enhanced collaboration within teams.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <div class="mod_article max-width-viewport block" id="article-44463">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800">
                        <div class="centered-wrapper-inner">
                            <!-- Content Section -->
                            <div class="content-text">
                                <h3 class="fw-bold">SmartIDP in HR</h3>
                                <div class="rte">
                                    <p>Overwhelmed by paperwork? HR is all about people, not paper! SmartIDP helps you reduce time spent on manual tasks, like document management and data entry, by automating workflows. Spend more time focusing on your most valuable asset—your people.</p>
                                    <p>Want to learn more about SmartIDP?</p>
                                </div>
                            </div>

                            <!-- Button Section -->
                            <div class="button-box ce_rsce_oneo_button -left">
                                <a class="button ce_rsce_oneo_button -left" href="contact">
                                    Experience SmartIDP
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid py-3" style="background-color: #eaedfc;">
            <div class="container">
                <h2 class="fw-bold mb-md-5 text-center">SmartIDP Solutions for Your Entire Organization</h2>
                <div class="row">
                    <!-- Intelligent Document Processing -->
                    <div class="col-12 col-lg-2 col-md-3 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-file-alt fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Intelligent Document Processing</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Automated Data Extraction -->
                    <div class="col-12 col-lg-2 col-md-3 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-cogs fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Automated Data Extraction</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Workflow Automation -->
                    <div class="col-12 col-lg-2 col-md-3 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-random fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Workflow Automation</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Real-time Collaboration -->
                    <div class="col-12 col-lg-2 col-md-3 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-users fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Real-time Collaboration</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Contract Lifecycle Management -->
                    <div class="col-12 col-lg-2 col-md-3 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-file-signature fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Contract Lifecycle Management</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Secure Digital Archiving -->
                    <div class="col-12 col-lg-2 col-md-3 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                    <i class="fas fa-database fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Secure Digital Archiving</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-md-5" id="article-29421">
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- HR management with SmartIDP -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-users-cog fa-md"></i></span> <!-- Changed to users-cog for HR management -->
                                <h3 class="fw-bold">HR management with SmartIDP</h3>
                                <p>SmartIDP allows you to automate tedious processes like information searches, so you can focus on high-value tasks such as recruiting and employee development.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Driving digitalization: Digital personnel files for HR -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-building fa-md"></i></span> <!-- Changed to building for digital transformation -->
                                <h3 class="fw-bold">Driving digitalization: Digital personnel files for HR</h3>
                                <p>"The digital HR file was the first step in our company's digitalization strategy. It streamlines processes, saving us time and costs in HR management."</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- How SmartIDP manages HR documents in compliance with data protection laws -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-shield-alt fa-md"></i></span> <!-- Changed to shield-alt for data protection compliance -->
                                <h3 class="fw-bold">How SmartIDP manages HR documents in compliance with data protection laws</h3>
                                <p>With the proliferation of data protection laws like GDPR and CCPA, SmartIDP ensures that your HR documents remain compliant by combining powerful cognitive services with strict regulatory guidelines.</p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/human_resource/img1.jpg" alt="SmartIDP Outlook Integration" class="img-fluid" style="border-radius: 20px;" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<?php include_once("includes/footer.php"); ?>