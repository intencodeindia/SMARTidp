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

    /* Make the headlines responsive */
    @media (max-width: 767px) {
        .responsive-headline {
            font-size: large !important;
            /* Adjust for large tablets/desktops */
        }
    }

    @media (max-width: 992px) {
        .responsive-headline {
            font-size: large !important;
            /* Adjust for medium-sized tablets */
        }
    }

    @media (max-width: 768px) {
        .responsive-headline {
            font-size: large !important;
            /* Adjust for smaller tablets */
        }
    }

    @media (max-width: 576px) {
        .responsive-headline {
            font-size: large !important;
            /* Adjust for mobile screens */
        }
    }

    /* Adjust the subheadline text size */
    @media (max-width: 992px) {
        .subheadline {
            font-size: large !important;
        }
    }

    @media (max-width: 576px) {
        .subheadline {
            font-size: large !important;
        }
    }

    /* Ensure the background image is responsive */
    #article-43622 {
        background-size: cover;
        /* Ensures the image covers the full area */
        background-position: center center;
        /* Adjust position to center on smaller screens */
    }

    /* For smaller screens, adjust the background positioning and size */
    @media (max-width: 768px) {
        #article-43622 {
            background-position: center top;
            /* Adjust for better visual on small screens */
            background-size: cover;
            /* Keep the image cover the area */
        }
    }

    /* Optional: Adjust the container and text on mobile for better spacing */
    @media (max-width: 768px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .subheadline {
            font-size: 1.5rem;
            /* Reduce the font size on smaller screens */
        }

        .display-3 {
            font-size: 2rem;
            /* Reduce the headline size for small screens */
        }

        .btn {
            padding: 10px 20px;
            /* Adjust button size */
        }
    }

    .imghv {
        height: 300px;
        width: 530px;
    }
</style>
<div class="content-wrapper">
    <div role="main" class="main-content">

        <div class="container-fluid" style="background-image: url('assets/images/manufacturing/banner.gif'); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 25px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Content Section -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                        <h2 class="headline fw-bolder mb-4" style="color: #000d39;">SmartIDP for the Manufacturing Sector</h2>
                        <h1 class="display-3 text-white">
                            "SmartIDP and Industry 5.0: Are You Digitally Ready?"
                        </h1>
                        <p class="fs-5 text-white mb-4">SmartIDP: Bridging Your Supply Chain, Production, and IIoT Systems with People, Machines, and Information.</p>
                        <div class="mt-4">
                            <a class="btn rounded-pill text-white" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);width:150px;">Request Demo</a>
                        </div>
                    </div>
                    <!-- Right Column: Image Section -->
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
                        <img src="assets/images/manufacturing/gif_2.gif" loading="lazy" class="img-fluid" alt="SmartIDP">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5"></div>
        <?php
        //  include_once("smartidp_logos.php"); 
        ?>
        <div class="container">
            <div class="serhead-main-headline text-center justify-content-center">
                <h2 class="fw-bold fs-2"><span class="gradient">"SmartIDP:</span> Driving Digital Transformation in the Manufacturing Sector</h2>
                <p class="justify-content-center">"SmartIDP: Enhancing Efficiency Across Your Production Processes. Empower your team with real-time, up-to-date information from the initial customer inquiry through project<span class="gradient"> management, development, production, and delivery."</span></p>
            </div>
        </div>
        <!-- Article Block for SAP Integration -->
        <div class="container">
            <div class="mod_article max-width-viewport block" id="article-29430">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
                        <div class="centered-wrapper-inner">
                            <!-- Icon Boxes Section for SAP Integration Features -->
                            <section class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes">
                                <!-- First Icon Box: Full Process Transparency -->
                                <div class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -inverted-icon p-2">
                                    <span class="icon-boxes-item-icon" style="width: 3.5em;"><i class="fas fa-sync-alt fa-lg"></i></span> <!-- Updated icon: sync for streamlined processes -->
                                    <h5 class="fw-bold">SmartIDP: Streamlining Your Processes for Greater Efficiency</h5>
                                    <div class="icon-boxes-item-text">
                                        <p>SmartIDP: Accelerate End-to-End Workflows in Production with Faster Document Access and Enhanced Transparency</p>
                                    </div>
                                </div>

                                <!-- Second Icon Box: Save Time & Prevent Mistakes -->
                                <div class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon p-2">
                                    <span class="icon-boxes-item-icon" style="width: 3.5em;"><i class="fas fa-tachometer-alt fa-lg"></i></span> <!-- Updated icon: tachometer for acceleration -->
                                    <h5 class="fw-bold">Accelerate Time-to-Value with SmartIDP</h5>
                                    <div class="icon-boxes-item-text">
                                        <p>Accelerate your supply Streamline Your Supply Chain with SmartIDP: Enhance Supplier Management and Drive Faster, More Reliable Procurement</p>
                                    </div>
                                </div>

                                <!-- Third Icon Box: Minimize Risks -->
                                <div class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon p-2">
                                    <span class="icon-boxes-item-icon" style="width: 3.5em;"><i class="fas fa-cogs fa-lg"></i></span> <!-- Updated icon: cog for guaranteed compliance -->
                                    <h5 class="fw-bold">Ensure Compliance with SmartIDP</h5>
                                    <div class="icon-boxes-item-text">
                                        <p>Streamline Contract Execution, Production, and Service with SmartIDP for Guaranteed Quality and Reduced Risk</p>
                                    </div>
                                </div>
                            </section>
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
                                <h3 class="fw-bold">SmartIDP in Manufacturing</h3>
                                <div class="rte">
                                    <p>Looking to streamline procurement, supply chain, and daily operations? SmartIDP helps you analyze, process, and ensure your data is accurate, accessible, and error-free, while automating tasks so you can focus on what matters most.</p>
                                    <p>Want to learn more about SmartIDP?</p>
                                </div>
                            </div>

                            <!-- Button Section to Experience SmartIDP -->
                            <div class="button-box ce_rsce_oneo_button -left">
                            <a href="contact" class="button ce_rsce_oneo_button rounded-pill text-center my-md-3" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); color: white; padding: 10px 20px; text-decoration: none;">Experience SmartIDP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-md-5">
            <div class="row align-items-center my-0">
                <!-- Left Column: Headline and Content -->
                <h2 class="fw-bold">What Matters to Manufacturing Leaders Today: <span class="gradient">Efficiency Automation, and Smart Data</span> Integration with SmartIDP</h2>
                <div class="col-lg-6 col-md-6 content-text">
                    <p><strong>Our Global Survey Insights: SmartIDP's Impact on Manufacturing Efficiency and Automation</strong></p>
                    <ul>
                        <li>The 5 Biggest Manufacturing Challenges and How SmartIDP Solves Them</li>
                        <li>The 6 Key Trends in Manufacturing Powered by SmartIDP</li>
                        <li>The 3 Most Promising Digital Transformation Projects with SmartIDP in 2024</li>
                    </ul>
                    <a class="btn rounded-pill text-white mb-md-0 mb-4" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); width:150px;">Learn Now</a>
                </div>

                <!-- Right Column: Image -->
                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="assets/images/manufacturing/menu2.jpeg" alt="Microsoft Partner" class="img-fluid shadow-lg imghv" loading="lazy" style="border-radius: 20px;">
                </div>
            </div>
        </div>

        <div class="container" id="article-29421">
            <h2 class="text-left mb-4 fw-bold">SmartIDP Solutions for the Manufacturing Industry:<span class="gradient"> Streamlining Processes and Enhancing Efficiency</span></h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Audit-proof email archiving -->
                            <div class="icon-boxes-item mb-4  -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-archive fa-lg"></i></span>
                                <h3 class="fw-bold">SmartIDP Integration with CAD, ERP,PDM</h3>
                                <p class="mt-3">Meet Documentation Requirements and Archive Data Across Systems with SmartIDP: Ensure Compliance and Enable Seamless, Cross-Functional Processes</p>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Structured, company-wide filing -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-folder-open fa-lg"></i></span>
                                <h3 class="fw-bold">Streamlining Digital Document Processes</h3>
                                <p class="mt-3">Efficiently Manage Change Requests and Approvals with SmartIDP: Automate Workflows Across Planning, Production, and Construction with Full Transparency, Traceability, and Version History</p>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Integrate processes in Outlook -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-plug fa-lg"></i></span>
                                <h3 class="fw-bold">SmartIDP for Streamlined Quality Management</h3>
                                <p class="mt-3">Leverage SmartIDP for Quality Management: Benefit from Quality-Assured, Fully Documented Processes. SmartIDP Comes with an ISO-Compliant Framework, Easily Extendable and Adaptable to Your Internal Compliance Structure.</p>
                            </div>
                        </div>

                    </section>
                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image d-flex align-items-center justify-content-center">
                        <figure>
                            <img src="assets/images/manufacturing/menu3.png" alt="Microsoft Outlook Integration" class="img-fluid shadow-lg imghv" loading="lazy" style="border-radius:20px; height: 400px;">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-md-5">
            <h2 class="fw-bold">SmartIDP Solutions for Key Manufacturing Sectors: Driving Efficiency and Automation</h2>
            <div class="col-md-6 mt-md-0 ">
            </div>
            <div class="row">
                <!-- Accordion Section -->
                <div class="col-md-6">
                    <div class="accordion" id="benefitsAccordion">
                        <!-- Accordion Item 1 -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed rounded-pill w-100 border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. SmartIDP for the Automotive Industry
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#benefitsAccordion">
                                <div class="accordion-body">
                                    The automotive sector is a highly profitable industry, with projections from Prognos AG showing a 3% growth by 2030.<span class="gradient"> To stay competitive and boost resilience, digital transformation is essential.</span> SmartIDP's intelligent information management is key to driving this transformation, ensuring efficient, streamlined operations and enhanced decision-making.
                                    <p> <span class="gradient">Eissmann Group Automotive, SEW-Eurodrive, and FEV Europe </span>are trusted global leaders who rely on SmartIDP to tackle industry challenges and drive digital transformation across their operations.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded-pill w-100 border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2.SmartIDP for Engineering
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#benefitsAccordion">
                                <div class="accordion-body">
                                    <span class="gradient"> From managing CAD drawings and optimizing quality management to integrating smart factories with the supply chain,</span> the engineering sector faces significant challenges — and SmartIDP offers immense opportunities for transformation and efficiency.
                                    <p>SmartIDP bridges the gap between your IoT systems and administrative processes like procurement. Discover how industry leaders Bernhard Krone Holding and Hansa-Flex have leveraged SmartIDP to drive their digital transformation.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item border-0 bg-transparent">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded-pill w-100 border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3.SmartIDP for Chemicals & Pharmaceuticals
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#benefitsAccordion">
                                <div class="accordion-body">
                                    SmartIDP is the solution to the growing challenges in the chemicals and pharmaceuticals sectors. With robust quality management, seamless documentation, and a reliable purchase-to-Pay process, SmartIDP enables innovation and strengthens data-driven decision-making.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="assets/images/manufacturing/menu5.webp" alt="" class="img-fluid shadow-lg imghv" loading="lazy" style="border-radius: 20px;">
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Left Column: Headline and Content -->
                <h2 class="fw-bold">SmartIDP Intelligent <span class="gradient">Purchase-to-Pay</span> Automation</h2>
                <div class="col-lg-6 col-md-6 content-text">
                    <p><span class="gradient">Flexibility and scalability in purchase-to-pay processes</span> are key to boosting profitability for manufacturing companies. SmartIDP's Intelligent Purchase-to-Pay Automation Suite <span class="gradient">optimizes, accelerates, and automates end-to-end processes</span>, driving efficiency and growth.</p>
                    <p><strong>A Smart Investment with Tangible Returns. Here's Why:</strong></p>
                    <ul>
                        <li>Up to 10% reduction in annual procurement costs</li>
                        <li>60-80% lower invoice processing costs</li>
                        <li>Save up to 70% time in invoice processing</li>
                        <li>Fewer delivery delays through advanced supplier management</li>
                        <li>Enhanced compliance across processes</li>
                    </ul>
                    <a class="btn rounded-pill px-2 text-white mb-md-0 mb-4" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Discover SmartIDP</a>
                </div>

                <!-- Right Column: Image -->
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="assets/images/manufacturing/menu4.jpeg" alt="Microsoft Partner" class="img-fluid shadow-lg imghv" loading="lazy" style="border-radius: 20px;">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="max-width-viewport block" id="article-44383">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800">
                        <div class="centered-wrapper-inner">
                            <!-- Content Section -->
                            <div class="content-text">
                                <div class="rte">
                                    <p> <span class="red">"</span> business processes are significantly faster and more efficient with electronic contract, customer, and supplier files, all seamlessly integrated into SAP through SmartIDP".</p>
                                    <p>Ulrich Peekhaus, Head of IT, KNIPEX-Werk C. Gustav Putsch KG, on the benefits of SmartIDP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="mod_article max-width-viewport" id="article-29438">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start ">
                        <div class="centered-wrapper-inner ">
                            <div class="headline-box -align-left ce_rsce_oneo_headline_box ">
                                <h2 class="fw-bold text-center">One Platform, Endless Opportunities <span class="gradient">with SmartIDP</span></h2>
                            </div>
                            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                                <!-- Mobile Access -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-mobile-alt fa-lg"></i></span> <!-- Updated icon: mobile-alt for mobile access -->
                                    <h3 class="fw-bold">Mobile Access with SmartIDP</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>Access essential documents related to your projects, products, and processes anytime, anywhere—from mobile devices on the production site to your office desktop—with SmartIDP, speeding up decision-making across your operations.</p>
                                    </div>
                                </div>
                                <!-- Accelerated Contract Execution -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-signature fa-lg"></i></span> <!-- Updated icon: signature for contract execution -->
                                    <h3 class="fw-bold">Accelerated Contract Execution with SmartIDP</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>With process-oriented views and automated workflows, SmartIDP enables seamless end-to-end collaboration, immediate access to information, and enhanced productivity.</p>
                                    </div>
                                </div>

                                <!-- Structured Overview for Operations -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-th-large fa-lg"></i></span> <!-- Updated icon: th-large for structured overview -->
                                    <h3 class="fw-bold">SmartIDP: Achieving a Structured Overview for Seamless Operations</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>SmartIDP: Access real-time information for quick, informed decisions—reducing development and production costs through improved coordination and streamlined approval processes.</p>
                                    </div>
                                </div>
                                <!-- Transparent Project Management -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-project-diagram fa-lg"></i></span> <!-- Updated icon: project-diagram for project management -->
                                    <h3 class="fw-bold">SmartIDP: Enabling Transparent and Efficient Project Management</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>SmartIDP: Enhance internal project organization and collaboration with customers and suppliers through standardized workflows and transparent project management.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                                <div class="icon-boxes-wrapper">
                                    <!-- Meet Documentation Requirements -->
                                    <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                        <span class="icon-boxes-item-icon"><i class="fas fa-archive fa-md"></i></span> <!-- Updated icon: archive for documentation -->
                                        <h3>SmartIDP: Effortlessly meet documentation requirements with automated, compliant processes.</h3>
                                        <div class="icon-boxes-item-text">
                                            <p class="text-justify px-2 px-md-0">Archive all product-related documents and process steps with complete change history, ensuring seamless, audit-proof documentation for full compliance.</p>
                                        </div>
                                    </div>
                                    <!-- Achieve Global Compliance -->
                                    <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                        <span class="icon-boxes-item-icon"><i class="fas fa-globe-americas fa-md"></i></span> <!-- Updated icon: globe-americas for global compliance -->
                                        <h3>Achieve Global Compliance with SmartIDP</h3>
                                        <div class="icon-boxes-item-text">
                                            <p class="text-justify px-2 px-md-0">Ensure Compliance with Information Security, Data Protection, and Archiving Standards with SmartIDP</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </main>
    </div>

    <?php include_once("includes/footer.php"); ?>