<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
    /* Marquee container styling */
    .customer-logos-marquee {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    /* Flex container for the logos */
    .customer-logos {
        height: 150px;
        display: flex;
        animation: marquee 20s linear infinite;
    }

    /* Each logo card */
    .customer-logo {
        flex: 0 0 auto;
        margin-right: 30px;
        /* Space between cards */
        width: 240px;
        /* Fixed width for uniform card size */
        height: 90px;
        /* Fixed height for uniform card size */
    }

    /* Keyframes for the scrolling animation */
    @keyframes marquee {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
    }

    .button1:hover {
        background-color: #04AA6D;
        color: white;
    }
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid py-5" id="article-43622" style="background-image: url('assets/images/contract_management/dm020.png'); background-size: cover; background-position: 0% 10%;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-lg-6 text-white">
                        <div class="mb-4">
                            <h2 class="subheadline text-uppercase" style="font-size: 2.2rem; font-weight: 900;">
                                <span class="gradient">Powered by the latest AI</span>
                            </h2>
                            <h1 class="display-3" style="font-size: 1.8rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">Intelligent contract management automation</h1>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Automate and manage all your contract management processes, from start to finish.
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Experience a real-time, transparent view of contract status and milestones.
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Automate manual contract management tasks and accelerate daily workflows.
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i>Enhance decision-making by leveraging your organization's contract data and insights with AI.
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a class="btn btn-outline-primary rounded-pill px-5 text-white" href="contact.php"><b>REQUEST DEMO</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="article-43622">
            <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                    SmartIDP</h2>
            </div>
            <div class="customer-logos-marquee">
                <div class="customer-logos">
                    <!-- Logos (only one set) -->
                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/ko.png" class="d-block" alt="Logo 1" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 12%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>



                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <!-- Logos (only Third set) -->
                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <!-- Logos (only Fourth set) -->
                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row text-center ">
                <h2 class="responsive-heading1 fw-bold">Take control of your company’s global task: <br>contract management with
                    <span class="gradient fw-bold"> SmartIDP AI<br>
                </h2>
                <p>Contract management is the foundation of every business. Do you manage and archive a variety of contracts,
                    such as loans, supplier agreements, employee contracts, or rental,
                    purchase, and framework agreements, in a decentralized way? With an efficient contract management solution,
                    you can reduce errors and resource usage. Standardize contract management,
                    improve transparency, and enhance security and compliance. The system simplifies contract work with
                    features like annotations, templates, and version control.</p>
            </div>

            <section class="row text-center">
                <!-- First Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-file-signature fa-3x mb-3 linear gradient"></i> <!-- Font Awesome Icon -->
                            <h4 class="card-title fw-bold">Consistent, organization-wide contract management</h4>
                            <p class="card-text">Utilize SmartIDP and AI to streamline contract management across the organization,
                                speeding up processing and decision-making. This enhances efficiency and drives customer satisfaction.</p>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="text-center">
                        <div class="card-body">
                            <i class="fa-brands fa-android fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon -->
                            <h4 class="card-title fw-bold">AI-driven Contract Quality Enhancement</h4>
                            <p class="card-text">With SmartIDP and AI, streamline contract processing times and enhance decision-making,
                                allowing you to meet deadlines faster, optimize efficiency, and exceed client expectations.</p>
                        </div>
                    </div>
                </div>
                <!-- Third Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class=" text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-hourglass fa-3x  gradient"></i> <!-- Font Awesome Icon -->
                            <h4 class="card-title fw-bold"><br>End-to-End Contract Management Control</h4>
                            <p class="card-text">Maintain end-to-end contract management control to ensure compliance with obligations, deadlines,
                                data protection laws, retention periods, and deletion dates.
                        </div>
                    </div>
            </section>
        </div>
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox ">
            <div class="centered-wrapper-inner ">
                <div class="content-text text-justify"><br>
                    <h3 style="font-size: 23px;">Comprehensive Contract Management Solution</h3>
                    <div class="rte">
                        <p>From drafting to signing and finalizing, our contract management solution supports the entire contract lifecycle.
                            Enjoy streamlined workflows, fast access to information with advanced search capabilities,
                            and efficiently manage partner agreements, employee contracts, leases, and more.</p>
                        <p>Want to learn more about me? &nbsp;</p>
                    </div>
                </div>
                <div class="button-box ce_rsce_oneo_button   -left">
                    <a class="button ce_rsce_oneo_button   -left" href="/en/live-demo.html">
                        Get Demo </a>
                </div>
            </div>
            <br>
        </div>


        <div class="container py-md-5">
            <div class="row">

            </div>
            <div class="row">
                <div class="col">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <!-- Archive Data & Documents -->
                        <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-asterisk fa-lg"></i></span>
                            <h3>Manage contract costs and risks effectively.</h3>
                            <div class="icon-boxes-item-text">
                                <p>Leverage SmartIDP and AI to streamline document processing, minimize costs, and mitigate risks, ensuring faster decision-making and improved efficiency.</p>
                            </div>
                        </div>
                        <!-- Find All Information -->
                        <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                            <div class="icon-boxes-item-icon" style="text-align: center; margin-bottom: 15px;">
                                <i class="fas fa-satellite-dish fa-lg"></i>
                            </div>
                            <h3 style="text-align: left; margin-bottom: 10px;">Access contracts anytime, anywhere, with seamless management</h3>
                            <div class="icon-boxes-item-text">
                                <p>Streamline contract management with SmartIDP and AI for anytime, anywhere access, faster decisions, improved efficiency,enhanced customer satisfaction.</p>
                            </div>
                        </div>

                    </section>
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <!-- Archive Data & Documents -->
                        <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-circle-info fa-lg"></i></span>
                            <h3>Provide prompt, accurate responses with detailed information.</h3>
                            <div class="icon-boxes-item-text">
                                <p>Utilize SmartIDP and AI to deliver quick, precise responses and access detailed information, improving decision-making and efficiency while enhancing customer satisfaction.</p>
                            </div>
                        </div>
                        <!-- Find All Information -->
                        <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-circle-check fa-lg"></i></span>
                            <h3>Accelerate contract approval processes.</h3>
                            <div class="icon-boxes-item-text">
                                <p>Leverage SmartIDP and AI to speed up contract approval processes, enhance decision-making, and optimize efficiency, helping you meet targets faster and improve customer satisfaction.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <!-- cards start here -->
            <div class="container" id="article-29421">
                <div class="row align-items-center">
                    <!-- Left Column: Icon Boxes -->

                    <!-- cards start here  -->
                    <div class="row">
                        <div class="col">
                            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                                <!-- Archive Data & Documents -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-file fa-lg"></i></span>
                                    <h3>Digital contract documents.</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>The contract file offers a comprehensive summary of all essential contract information, including deadlines and reminders. It allows you to securely store contracts and related documents in an organized and complete manner.</p>
                                    </div>
                                </div>
                                <!-- Find All Information -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-file-contract fa-lg"></i></span>
                                    <h3>Automated contract workflows</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>Automated contract processes: Create, verify, release, finalize, manage, and archive. Each step is documented in an organized, transparent, and verifiable manner.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                                <!-- Archive Data & Documents -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-fingerprint fa-lg"></i></span>
                                    <h3>Integrated with ERP & CRM</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>Master data on customers, suppliers, and partners is automatically transferred from your integrated ERP and CRM systems and incorporated into your contracts-accurately and in real-time.</p>
                                    </div>
                                </div>
                                <!-- Find All Information -->
                                <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                    <span class="icon-boxes-item-icon"><i class="fas fa-folder-open fa-lg"></i></span>
                                    <h3>Smart search & automatic categorization</h3>
                                    <div class="icon-boxes-item-text">
                                        <p>Easily access the information you need with smart search features. Contracts are categorized and stored in the correct location, with details such as contract numbers, deadlines, prices, and terms added automatically.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- cards end here -->

                    <div class="container pt-3">
                        <div class="row text-center">
                            <h2 class="responsive-heading1 fw-bold">Frequently Asked Questions about <span class="gradient">Contract Management</span></h2>

                            <!-- accordion bootstrap -->
                            <div class="accordion" id="accordionFAQ">

                            <!-- Accordion Item 1 -->
                            <div class="accordion-item border-0 pt-4">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="style.color='white'">
                                        <strong>What is Contract Lifecycle Management (CLM)?</strong>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                        Contract Lifecycle Management (CLM) focuses on optimizing the entire contract process, from creation and negotiation to execution and renewal. CLM involves managing and automating tasks, ensuring compliance, and streamlining workflows to improve efficiency and mitigate risks. Contracts can be standardized and repeatable or unique and complex. Various tools and methods are used to track, measure, and optimize each stage of the contract lifecycle to align with business objectives and strategy.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 2 -->
                            <div class="accordion-item border-0 mt-2">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                        <strong>Comprehensive overview of all contract data.</strong>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                        Contract management provides a clear and comprehensive overview of all contract information while streamlining your contract processes. It ensures better compliance, risk management, and performance tracking across all agreements. Additionally, it enhances collaboration and visibility among stakeholders, improving decision-making and efficiency.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="accordion-item border-0 mt-2">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                        <strong>What is contract management?</strong>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                        Contract management is the process of managing the creation, execution, and monitoring of contracts to ensure compliance and performance. It involves tracking key dates, terms, and obligations, while mitigating risks associated with contractual agreements. Effective contract management enhances efficiency, reduces errors, and ensures that all parties fulfill their contractual commitments.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 4 -->

                            <div class="accordion-item border-0 mt-2">
                                <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                        <strong>Why is contract management important?</strong>
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                        Contract management is crucial for ensuring that all terms and obligations are clearly defined and met, reducing the risk of disputes. It helps organizations stay compliant with legal and regulatory requirements, avoiding costly penalties. Effective contract management also improves efficiency, reduces errors, and enhances collaboration across teams.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Accordion Item 5 -->
                        <div class="accordion-item border-0 mt-2 pb-2">
                            <div class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                    <strong>Which software is best for contract management?</strong>
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                    There are several software options for contract management, including DocuSign, ContractWorks, and Icertis, each offering features for document storage, e-signatures, and workflow automation. These tools help streamline contract creation, tracking, and compliance, improving efficiency and reducing manual errors. Choosing the right software depends on your organization's specific needs, such as integration capabilities and scalability.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</main>
</div>

<?php include_once("includes/footer.php"); ?>