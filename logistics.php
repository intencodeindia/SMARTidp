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

        <div class="container-fluid py-3" id="article-43622" style="background-image: url('assets/images/logistic/logic3.jpg'); background-size: cover; background-position: 0% 10%" loading="lazy">
            <div class="container">
                <div id="serhead2-146243" class="serhead2 d-flex justify-content-center align-items-start" data-delay="8" data-parallax="">
                    <!-- Slide Container -->
                    <div data-id="1" class="slide slide-1 active">
                        <div class="slide-content">
                            <div class="slide-text">
                                <h3 class="text-black fs-1 text-center ">Digitalizing Logistics with SmartIDP</h3>
                                <h2 class="text-black fs-1 text-center fw-bold">Syncing Information and Goods Logistics with SmartIDP</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Triangle SVG (for design effect) -->
                    <svg class="triangle-bottom" viewBox="0 0 2000 125" preserveAspectRatio="xMinYMin meet">
                        <polygon points="0,100 0,125 2000,125 2000,0"></polygon>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="mt-5"></div>
        <?php include_once("smartidp_logos.php"); ?>

        <!-- first card -->
        <div class="mt-6"></div>
        <?php include_once("smartidp_logos.php"); ?>
        <div class="container mt-6">
            <h2 class="fw-bold fs-2 text-center justify-content-center py-6">Enterprise content management for <span class="gradient">logistics</span></h2>
            <p class="justify-content-center text-center">Respond faster, streamline communication, and accelerate underwriting and claims processes with SmartIDP. By automating document handling and data extraction, SmartIDP helps you enhance efficiency, improve accuracy, and provide a seamless customer experience. This not only boosts customer loyalty and satisfaction but also lays the foundation for sustainable growth in the insurance industry.</p>
            <div class="row text-center mt-5">
                <!-- Smarter Customer Service -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                <!-- Updated icon for customer service -->
                                <i class="fas fa-comments-dollar fa-md"></i>
                            </div>
                            <h5 class="card-title fw-bold">Enhance Customer Service with SmartIDP</h5>
                            <p>Streamline and Accelerate Customer Inquiry Processing with SmartIDP, Delivering Real-Time Information</p>
                        </div>
                    </div>
                </div>

                <!-- Expedited Claims Processing --> 
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                <!-- Updated icon for claims processing -->
                                <i class="fas fa-archive fa-md d-flex justify-content-center align-items-center"></i>
                            </div>
                            <h5 class="card-title fw-bold">Access Documents Anytime, Anywhere with SmartIDP</h5>
                            <p>Simplify Collaboration for Decentralized Teams and Accelerate Workflows with SmartIDP, Including Mobile Uploads for Seamless Deliveries</p>
                        </div>
                    </div>
                </div>

                <!-- Optimize Resource Utilization -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                <!-- Updated icon for task optimization -->
                                <i class="fas fa-cogs fa-md"></i>
                            </div>
                            <h5 class="card-title fw-bold">Ensure Audit-Proof Archiving with SmartIDP</h5>
                            <p>Archive and manage billions of shipping documents on a single software platform — central, secure and in compliance with the law.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Left Column: Headline and Content -->
                <h2 class="fw-bold">Streamline Information Management in <span class="gradient"> Global Logistics with SmartIDP</span></h2>
                <div class="col-lg-6 col-md-6 content-text">
                    <p>Explore Our Guide to SmartIDP Solutions</strong></p>
                    <ul>
                        <li><strong>How SmartIDP Creates More Transparency in Supply Chains</strong></li>
                        <li><strong>Efficient Stakeholder Management with SmartIDP</strong></li>
                        <li><strong>Success Stories of 4 Digital Pioneers Using SmartIDP</strong></li>
                    </ul>
                    <a class="btn rounded-pill px-4 text-white fw-bold mb-md-0 mb-4" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Discover SmartIDP</a>
                </div>

                <!-- Right Column: Image -->
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="assets/images/logistic/logic4.jpg" alt="Microsoft Partner" class="img-fluid shadow-lg imghv" style="border-radius: 20px;width:400px;" loading="lazy">
                </div>
            </div>
        </div>

        <div class="container" id="article-29421 py-5">
            <h2 class="text-left mb-4 fw-bold"> Advanced ECM Solutions for Streamlined <span class="gradient">Logistics Operations</span></h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Streamlining Files for Shipping, Freight & Transportation Management -->
                            <div class="icon-boxes-item mb-4  -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon d-flex justify-content-center align-items-center"><i class="fas fa-shipping-fast fa-lg"></i></span>
                                <h3 class="fw-bold">Streamlining Files for Shipping, Freight & Transportation Management</h3>
                                <p>With SmartIDP, users can access electronic files globally, including consignment notes, customs papers, hazardous goods documentation, import/export declarations, and data from TMS, ERP, CRM, and resource planning systems. SmartIDP ensures seamless and efficient management of all critical documents and data in real-time.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Streamlined Process Management -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon d-flex justify-content-center align-items-center"><i class="fas fa-tasks fa-lg"></i></span>
                                <h3 class="fw-bold">Streamlined Process Management with SmartIDP</h3>
                                <p>Manage your order verifications, contract approvals, dispatch of supporting documents, and more with SmartIDP. SmartIDP automatically generates and sends receipt confirmations, streamlining your entire workflow.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Seamless Customer Service Integration -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon d-flex justify-content-center align-items-center"><i class="fas fa-plug fa-lg"></i></span>
                                <h3 class="fw-bold">Seamless Customer Service Integration with SmartIDP</h3>
                                <p>Integrating SmartIDP into your customer portals and apps further elevates your service offerings: Provide real-time access to orders, delivery notes, tracking information, and more to your customers, enhancing their experience and satisfaction.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                        <img src="assets/images/logistic/logic5.jpg" alt="Microsoft Outlook Integration" class="img-fluid" style="border-radius:50%; height:450px;width:450px" loading="lazy">

                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-md-5">
            <h2 class="fw-bold fs-2 text-center justify-content-center py-1">The <span class="gradient">Advantages</span> of the SmartIDP ECM Platform</h2>
            <div class="row text-center mt-5 justify-content-center">
                <!-- Access Billions of Documents Worldwide -->
                <div class="col-6 col-md-2 mb-4">
                    <div class="card custom-card-shadow h-100" style="height: 200px;">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <!-- Check mark icon -->
                                <i class="fas fa-check fa-sm"></i>
                            </div>
                            <p class="card-text ">Access Billions of Documents Worldwide with SmartIDP</p>
                        </div>
                    </div>
                </div>

                <!-- Optimize Your Ability to Provide Customers with Real-Time Information -->
                <div class="col-6 col-md-2 mb-4">
                    <div class="card custom-card-shadow h-100" style="height: 200px;">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <!-- Check mark icon -->
                                <i class="fas fa-check fa-md"></i>
                            </div>
                            <p class="card-text">Optimize Your Ability to Provide Customers with Real-Time Information Using SmartIDP</p>
                        </div>
                    </div>
                </div>

                <!-- Transparently Document and Manage the Entire Supply Chain -->
                <div class="col-6 col-md-2 mb-4">
                    <div class="card custom-card-shadow h-100" style="height: 200px;">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <!-- Check mark icon -->
                                <i class="fas fa-check fa-md"></i>
                            </div>
                            <p class="card-text">Transparently Document and Manage the Entire Supply Chain with SmartIDP</p>
                        </div>
                    </div>
                </div>

                <!-- Ensure Compliance by Archiving All Relevant Documents -->
                <div class="col-6 col-md-2 mb-4">
                    <div class="card custom-card-shadow h-100" style="height: 200px;">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <!-- Check mark icon -->
                                <i class="fas fa-check fa-md"></i>
                            </div>
                            <p class="card-text">Ensure Compliance by Archiving All Relevant Documents in Line with Audit Requirements Using SmartIDP</p>
                        </div>
                    </div>
                </div>

                <!-- Manage Documents and Processes Across Locations and Countries -->
                <div class="col-6 col-md-2 mb-4">
                    <div class="card custom-card-shadow h-100" style="height: 200px;">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <!-- Check mark icon -->
                                <i class="fas fa-check fa-md"></i>
                            </div>
                            <p class="card-text">Manage Documents and Processes Seamlessly Across Locations and Countries with SmartIDP</p>
                        </div>
                    </div>
                </div>

                <!-- Offer Digital Customer Services -->
                <div class="col-6 col-md-2 mb-4">
                    <div class="card custom-card-shadow h-100" style="height: 200px;">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <!-- Check mark icon -->
                                <i class="fas fa-check fa-md"></i>
                            </div>
                            <p class="card-text">Offer Digital Customer Services with Information in Real Time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mod_article max-width-viewport block mb-0" id="article-44383">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800">
                        <div class="centered-wrapper-inner">
                            <!-- Content Section -->
                            <div class="content-text">
                                <h3 class="fw-bold">Leverage AI to Automatically Understand and Process Documents with SmartIDP</h3>
                                <div class="rte">
                                    <p>SmartIDP leverages artificial intelligence to automatically extract key information from consignment notes, display comprehensive freight transport details at a glance, and initiate invoice workflows upon delivery. This intelligent use of AI within an ECM system for logistics companies revolutionizes business processes, enhancing efficiency, speed, and security.</p>
                                    <p>Work today with the innovation of tomorrow, powered by SmartIDP.</p>
                                    <p>"Discover SmartIDP — our intelligent content automation platform for smarter business processes."</p>
                                </div>
                            </div>

                            <!-- Button Section to Experience smartIDP -->
                            <div class="button-box ce_rsce_oneo_button -left">
                                <a class="button ce_rsce_oneo_button -left" href="contact">
                                    Book a demo now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #eaedfa;">
            <div class="container py-5">
                <div class="card shadow-lg" style="border-radius: 15px; border: none;">
                    <div class="card-body">
                        <!-- Row for content and image -->
                        <div class="row justify-content-center align-items-center">
                            <!-- Left Column (Text and Button) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="headline-box ser-headline-box ce_rsce_ser_headline_box">
                                    <h2 class="headline -extra-large responsive-heading1 text-center" style="font-size: 2.5em; font-weight: 600;">
                                        <span class="gradient">"Customers and analysts rate SmartIDP & its intelligent automation solutions highly"</span>
                                </div>
                                <div class="button-box ce_rsce_oneo_button" style="margin-bottom: 30px;">
                                    <a href="contact" class="button ce_rsce_oneo_button text-center rounded-pill" style="background-color: #0090f9; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Explore now</a>
                                </div>
                            </div>
                            <!-- Right Column (Image) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="content-image">
                                    <figure>
                                        <img src="assets/images/logistic/logic6.avif" alt="SmartIDP" class="img-fluid" width="480" height="345" style="border-radius: 15px" loading="lazy">
                                    </figure>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="article-29421 py-5">
            <h2 class="mb-4 fw-bold text-center"> Digital files tailored to meet your business needs</h2>
            <p class="text-center">When it comes to managing your information, SmartIDP offers a variety of eFile solutions</p>
            <p class="text-center">Well-structured and easily accessible from anywhere, anytime.</p>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Contract Files Managed with SmartIDP -->
                            <div class="icon-boxes-item mb-4  -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon d-flex justify-content-center align-items-center"><i class="fas fa-file-contract fa-lg"></i></span>
                                <h3>Contract files managed with SmartIDP >></h3>
                                <p class="py-3">Centralize all contracts with customers and business partners using SmartIDP, and let the platform automatically remind you of upcoming contract deadlines, ensuring timely actions and seamless contract management.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Centralized Customer File Management -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon d-flex justify-content-center align-items-center"><i class="fas fa-users fa-lg"></i></span>
                                <h3>Centralized Customer File Management with SmartIDP >></h3>
                                <p class="py-3">Access the complete customer history—from inquiries and offers to CRM data and notes—quickly and from anywhere with SmartIDP.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Seamless Lease File Management -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon d-flex justify-content-center align-items-center"><i class="fas fa-cogs fa-lg"></i></span>
                                <h3>Seamlessly Manage and Access Your Lease Files with SmartIDP >></h3>
                                <p class="py-3">SmartIDP centralizes all information related to your leased assets, such as vehicle fleets, airplanes, and more. With SmartIDP, managing your lease contracts and ensuring compliance with IFRS 16 becomes simple and automated.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/logistic/logic7.webp" alt="Microsoft Outlook Integration" class="img-fluid" style="border-radius: 50%; height:400px;width:400px" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center py-5">
            <hr>
            <h1 class=" mb-3 text-start">Streamlining Documentation & Ensuring Compliance</span></h1>
            <p class="text-start">Seamlessly Document <span class="fw-bold">Entire Supply Chain</p>
            <p class="text-start">Are all supporting documents, such as customs papers and import declarations, readily available when needed? Did consignments reach their destinations without damage? SmartIDP ensures seamless documentation of these processes. With SmartIDP, you can archive all proofs of shipment and tax-related documents in full compliance with international laws and standards. Our extensive certifications provide proof of this commitment.</p>
            <hr>
        </div>

        <div class="container-fluid py-md-2">
            <div class="row align-items-center">
                <!-- Column 1: Text Content -->
                <div class="col-lg-5 offset-md-1 col-md-12 mb-4">
                    <div class="headline-box text-left">
                        <h2 class="fw-bold">SmartIDP is available in 13 languages, ensuring global accessibility and seamless communication across regions.</h2>
                    </div>
                    <div class="mb-4">
                        <p>Multilingual support and Unicode capability make SmartIDP the perfect ECM platform for global deployment, enabling seamless integration and collaboration across diverse languages and regions.</p>
                        <p>SmartIDP is highly scalable with a multitenant architecture, enabling global deployment and centralized management. Available in multiple languages including German, English, French, Spanish, Portuguese, Italian, Polish, Russian, Turkish, Chinese, Hungarian, Dutch, and Arabic, SmartIDP ensures that international companies can provide employees with user interfaces and metadata in their preferred local languages.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img src="assets/images/logistic/logic8.avif" alt="Smart Automation" class="img-fluid" style="border-radius:50%; height:450px; width:450px"loading="lazy">
                </div>
            </div>
        </div>





    </main>
</div>
<?php include_once("includes/footer.php"); ?>