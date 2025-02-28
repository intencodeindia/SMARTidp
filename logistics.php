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

        <div class="container-fluid" style="background-image: url('assets/images/manufacturing/banner.gif'); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 25px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Content Section -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                        <h2 class="headline fw-bolder mb-4" style="color: #000d39;">Digitalizing Logistics with SmartIDP</h2>
                        <h1 class="display-3 text-white">
                            Syncing Information and Goods Logistics with SmartIDP
                        </h1>
                        <p class="fs-5 text-white mb-4">SmartIDP revolutionizes logistics by automating document handling, streamlining workflows, and ensuring real-time data syncing across the supply chain.</p>
                    </div>
                    <!-- Right Column: Image Section -->
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
                        <img src="assets/images/logistic/gif_logistics.gif" loading="lazy" class="img-fluid" alt="SmartIDP" style="max-width: 85%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="mt-5"></div>
        <?php
        //  include_once("smartidp_logos.php"); 
        ?>

        <!-- first card -->
        <!-- <div class="mt-3"></div> -->
        <?php
        //  include_once("smartidp_logos.php"); 
        ?>
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

        <div class="container py-md-5">
            <div class="row align-items-center">
                <!-- Left Column: Headline and Content -->
                <h2 class="fw-bold">Streamline Information Management in <span class="gradient"> Global Logistics with SmartIDP</span></h2>
                <div class="col-lg-6 col-md-6 content-text">
                    <p><strong>Explore Our Guide to SmartIDP Solutions</strong></p>
                    <ul>
                        <li>How SmartIDP Creates More Transparency in Supply Chains</li>
                        <li>Efficient Stakeholder Management with SmartIDP</li>
                        <li>Success Stories of 4 Digital Pioneers Using SmartIDP</li>
                    </ul>
                    <a class="btn rounded-pill px-2 text-white mb-md-0 mb-4" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Discover SmartIDP</a>
                </div>

                <!-- Right Column: Image -->
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="assets/images/logistic/logic4.jpg" alt="Microsoft Partner" class="img-fluid shadow-lg imghv" style="border-radius: 20px;width:400px;" loading="lazy">
                </div>
            </div>
        </div>
        <div class="container" id="article-29421 py-5 px-1">
            <h2 class="text-left mb-4 fw-bold"> Advanced ECM Solutions for Streamlined <span class="gradient">Logistics Operations</span></h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6 px-3">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Streamlining Files for Shipping, Freight & Transportation Management -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-truck fa-md"></i></span> <!-- Truck Icon for Logistics -->
                                <h3 class="fw-bold">Streamlining Files for Shipping, Freight & Transportation Management</h3>
                                <p class="px-2 py-1 ">With SmartIDP, users can access electronic files globally, including consignment notes, customs papers, hazardous goods documentation, import/export declarations, and data from TMS, ERP, CRM, and resource planning systems. SmartIDP ensures seamless and efficient management of all critical documents and data in real-time.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Streamlined Process Management with SmartIDP -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span> <!-- Cogs Icon for Process Management -->
                                <h3 class="fw-bold">Streamlined Process Management with SmartIDP</h3>
                                <p class="px-2 py-1">Manage your order verifications, contract approvals, dispatch of supporting documents, and more with SmartIDP. SmartIDP automatically generates and sends receipt confirmations, streamlining your entire workflow.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Seamless Customer Service Integration with SmartIDP -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-headset fa-md"></i></span> <!-- Headset Icon for Customer Service -->
                                <h3 class="fw-bold">Seamless Customer Service Integration with SmartIDP</h3>
                                <p class="px-2">Integrating SmartIDP into your customer portals and apps further elevates your service offerings: Provide real-time access to orders, delivery notes, tracking information, and more to your customers, enhancing their experience and satisfaction.</p>
                            </div>
                        </div>
                    </section>
                </div>


                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0 py-5">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/logistic/logic5.jpg" alt="Microsoft Outlook Integration" class="img-fluid" style="border-radius:50%; height:450px;width:450px" loading="lazy">

                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-3">
            <div class="container">
                <h2 class="fw-bold mb-md-5 text-center py-1">The <span class="gradient">Advantages</span> of the SmartIDP ECM Platform</h2>
                <div class="row">
                    <!-- Intelligent Document Processing -->
                    <div class="col-12 col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-check fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Access Billions of Documents Worldwide</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Automated Data Extraction -->
                    <div class="col-12 col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-check fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Optimize Real-Time Customer Information</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Workflow Automation -->
                    <div class="col-12 col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-check fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Manage Supply ChainTransparently</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Real-time Collaboration -->
                    <div class="col-12 col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-check fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Ensure Compliance with Archiving</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Contract Lifecycle Management -->
                    <div class="col-12 col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle">
                                    <i class="fas fa-check fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Seamlessly Manage Documents Globally</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Secure Digital Archiving -->
                    <div class="col-12 col-xl-2 col-lg-3 col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3 d-flex justify-content-center align-items-center">
                                    <i class="fas fa-check fa-md"></i>
                                </div>
                                <h3 class="card-title text-center">Provide Real-Time Digital Services</h3>
                            </div>
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

                            <!-- Button Section to Experience SmartIDP -->
                            <div class="button-box ce_rsce_oneo_button -left">
                            <a href="contact" class="button ce_rsce_oneo_button rounded-pill text-center my-md-3" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); color: white; padding: 10px 20px; text-decoration: none;">Book Demo now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container py-5">
                <div class="card shadow-lg" style="border-radius: 15px; border: none;">
                    <div class="card-body">
                        <!-- Row for content and image -->
                        <div class="row justify-content-center align-items-center">
                            <!-- Left Column (Text and Button) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="headline-box ser-headline-box ce_rsce_ser_headline_box">
                                    <h2 class="headline -extra-large responsive-heading1 text-center" style="font-size: 1.5em; font-weight: 600;">
                                        <span class="gradient">"Customers and analysts rate SmartIDP & its intelligent automation solutions highly"</span>
                                </div>
                                <div class="button-box ce_rsce_oneo_button" style="margin-bottom: 30px;">
                                    <a href="contact" class="button ce_rsce_oneo_button text-center rounded-pill" style="background-color: #0090f9; color: white; padding: 10px 30px; text-decoration: none; border-radius: 5px;">Explore now</a>
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
                            <!-- Contract files managed with SmartIDP -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-file-contract fa-md"></i></span> <!-- Contract Icon -->
                                <h3 class="fw-bold">Contract files managed with SmartIDP</h3>
                                <p class="px-2 py-1">Centralize all contracts with customers and business partners using SmartIDP, and let the platform automatically remind you of upcoming contract deadlines, ensuring timely actions and seamless contract management.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Centralized Customer File Management -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-users fa-md"></i></span> <!-- Users Icon -->
                                <h3 class="fw-bold">Centralized Customer File Management with SmartIDP</h3>
                                <p class="px-2 py-1">Access the complete customer history—from inquiries and offers to CRM data and notes—quickly and from anywhere with SmartIDP.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Manage Lease Files with SmartIDP -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-warehouse fa-md"></i></span> <!-- Warehouse Icon (for assets) -->
                                <h3 class="fw-bold px-3">Seamlessly Manage and Access Your Lease Files with SmartIDP</h3>
                                <p class="px-2 py-1">SmartIDP centralizes all information related to your leased assets, such as vehicle fleets, airplanes, and more. With SmartIDP, managing your lease contracts and ensuring compliance with IFRS 16 becomes simple and automated.</p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/logistic/logic7.webp" alt="Microsoft Outlook Integration" class="img-fluid" style="border-radius: 20px;" loading="lazy">
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

        <div class="container-fluid py-1">
            <div class="container my-md-5 my-3">
                <div class="row align-items-center">
                    <!-- Text Content Column -->
                    <div class="col-md-8 d-flex flex-column justify-content-center">
                        <h2 class="fw-bold mt-0">SmartIDP: <span class="gradient">Tailored Language Solutions</span> for Your Needs</h2>
                        <p class="font-italic">
                            Multilingualism & Unicode capability make SmartIDP the ideal ECM platform for multinational deployment.
                        </p>
                        <p>
                            SmartIDP is highly scalable with a multi-tenant architecture that can be rolled out globally and managed centrally. While SmartIDP does not come pre-packaged in 13 languages, we offer customizable solutions to meet your specific language requirements. This means that multinational companies can provide their decentralized purchasing teams with user interfaces and metadata tailored to their respective local languages, ensuring seamless integration and usability.
                        </p>
                    </div>

                    <!-- Image Column -->
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <figure>
                                <img src="assets/images/logistic/map.png" class="img-fluid" alt="SmartIDP Customization" loading="lazy" style="border-radius: 20px;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<div class="py-4"></div>
<?php include_once("includes/footer.php"); ?>