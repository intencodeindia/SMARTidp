<?php include_once("includes/header.php"); ?>
<style>
    .main-content .main-slider,
    .main-content .rsts-main,
    .oneo-fullwidth .main-content {
        margin: 0
    }
</style>
<style>
     .background-gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        width: 1440px;
        /* Set the width to match your image */
        height: 375px;
        /* Set the height to match your image */
    }

    /* Large screen (Desktop and tablets) */
    .responsive-video {
        width: 100%;
        height: auto;
    }

    .responsive-heading {
        font-size: 3.5em !important;
    }

    /* Medium and smaller screens (Phones) */
    @media (max-width: 767px) {
        .responsive-video {
            width: 100%;
            height: auto;
            max-height: 400px;
            /* Limit the video height on mobile for better view */
        }

        .responsive-heading {
            font-size: 1.8em !important;
            /* Smaller font size for mobile screens */
            line-height: 1.3;
            /* Adjust line height for better readability */
        }

        .responsive-heading1 {
            font-size: 1.8em !important;
            /* Smaller font size for mobile screens */
            line-height: 1.3;
            /* Adjust line height for better readability */
        }

        .content-text p {
            font-size: 1.1em;
            /* Reduce font size of text on smaller screens */
        }

        .button-box a {
            font-size: 1.1rem;
            /* Adjust button font size */
        }
    }

    /* Extra Small Screens (Mobile Portrait) */
    @media (max-width: 480px) {
        .responsive-heading {
            font-size: 1.8em !important;
            /* Further reduce the heading font size */
        }

        .responsive-heading1 {
            font-size: 1.8em !important;
            /* Smaller font size for mobile screens */
        }

        .responsive-heading2 {
            font-size: 1.4em !important;
            /* Smaller font size for mobile screens */
        }

        .content-text p {
            font-size: 0.6em;
            /* Further reduce text size */
        }

        .button-box a {
            font-size: 1rem;
            /* Ensure buttons are readable but not too big */
        }
    }

    /* Mobile view adjustments */
    @media screen and (max-width: 768px) {
        .icon-boxes-item {
            padding: 20px;
            margin-bottom: 20px;
        }

        .icon-boxes-item-icon-image {
            margin-bottom: 10px;
            /* Space between icon and text */
        }

        .icon-boxes-item h3 {
            margin-top: 10px;
            /* Add some margin on top of the title */
        }

        .icon-boxes-item-text {
            margin-top: 10px;
            /* Space between title and description */
        }

        .icon-boxes-item .icon-boxes-item-icon-image i {
            font-size: 2.5rem;
            /* Adjust icon size for mobile view */
        }
    }

    /* Unique class for shadow effect */
    .custom-card-shadow {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1), 0 8px 24px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1.25rem;
        border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box, var(--theme-gradient) border-box;
    transition: transform 0.3s ease;
    }

    .custom-card-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2), 0 16px 48px rgba(0, 0, 0, 0.25);
    }

    /* .video-container {
        position: relative;
        display: inline-block;
        border-radius: 30px;
        padding: 10px;
    }

    .video-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(260deg, #0090f9 0%, #00b09c 100%);
        border-radius: 30px;
        z-index: -1;
    } */
</style>


<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="mod_article fade-out-background1 max-width-viewport block py-0" id="article-42563">
            <div class="mod_article_inner">
                <div class="container-fluid text-center text-sm-start">
                    <div class="row align-items-center">
                        <!-- Right Column (Video) - Moves to top on small screens -->
                        <div class="col-lg-7 col-md-12 order-md-last py-4">
                            <div class="content-image">
                                <figure class="mb-0 d-flex justify-content-center align-items-center video-container">
                                    <img src="assets/images/logo/smartIDP.gif" alt="GIF" class="w-100 responsive-video" style="border-radius: 25px;">
                                </figure>
                            </div>
                        </div>

                        <!-- Left Column (Text) -->
                        <div class="col-lg-5 col-md-12 d-flex justify-content-center align-items-center mb-4 mb-lg-0 px-md-5 order-md-first">
                            <div class="mx-auto text-center">
                                <div class="headline-box">
                                    <h1 class="headline fs-1 fw-bold responsive-heading">
                                        <span class="gradient">Take control</span> of your documents and <span class="gradient">automate</span> processes
                                    </h1>
                                </div>
                                <div class="content-text mb-4 px-md-5 text-center px-1" style="font-size: 1.3em !important; color: #000; font-weight: 500;text-align: justify;">
                                    <p class="">"SmartIDP classifies, extracts, understands, analyzes, and centralizes your enterprise documents, compliantly and at scale - enabling you to automate manual tasks and cut costs."</p>
                                </div>
                                <div class="content-text mb-4">
                                    <p class="text-center"><span class="gradient" style="font-size: 1.3rem !important;">Powered by the latest AI</span></p>
                                </div>
                                <div class="button-box">
                                    <a class="btn rounded-pill px-4 text-white" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                    <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                        SmartIDP</h2>
                </div>
                <?php include_once("smartidp_logos.php"); ?>
            </div>
        </div>
        <div class="container pb-md-5 pb-3" id="article-42568">
            <div class="text-center mb-5">
                <h2 class="responsive-heading1 fw-bold">
                    <span class="gradient">Improve</span> your enterprise <br> content management
                </h2>
                <p class="fs-5 responsive-paragraph">Everything you need to work better, faster and more securely.</p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <!-- Document Management Card -->
                <div class="col">
                    <div class="card h-100 border-0 text-center custom-card-shadow">
                        <div class="card-body">
                            <i class="fas fa-file-alt fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            <h3 class="h5">Document management</h3>
                            <p>Digitize, understand and work on documents</p>
                        </div>
                    </div>
                </div>

                <!-- Team Collaboration Card -->
                <div class="col">
                    <div class="card h-100 border-0 text-center custom-card-shadow">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            <h3 class="h5">Team collaboration</h3>
                            <p>Collaborate from anywhere with anyone</p>
                        </div>
                    </div>
                </div>

                <!-- Intelligent Archiving Card -->
                <div class="col">
                    <div class="card h-100 border-0 text-center custom-card-shadow">
                        <div class="card-body">
                            <i class="fas fa-archive fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            <h3 class="h5">Intelligent archiving</h3>
                            <p>Securely store and find information</p>
                        </div>
                    </div>
                </div>

                <!-- Process Automation Card -->
                <div class="col">
                    <div class="card h-100 border-0 text-center custom-card-shadow">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            <h3 class="h5">Process automation</h3>
                            <p>Automate business processes and tasks</p>
                        </div>
                    </div>
                </div>

                <!-- Content Understanding Card -->
                <div class="col">
                    <div class="card h-100 border-0 text-center custom-card-shadow">
                        <div class="card-body">
                            <i class="fas fa-brain fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            <h3 class="h5">Content understanding</h3>
                            <p>Extract information and create/generate insights</p>
                        </div>
                    </div>
                </div>

                <!-- Connecting Business Card -->
                <div class="col">
                    <div class="card h-100 border-0 text-center custom-card-shadow">
                        <div class="card-body">
                            <i class="fas fa-plug fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            <h3 class="h5">Connecting business</h3>
                            <p>Integrate seamlessly with best-of-breed applications</p>
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
                                    <h2 class="headline -extra-large responsive-heading1" style="font-size: 2.5em; font-weight: 600;">
                                        <span class="gradient">Customers</span> and <span class="gradient">Analysts</span> <br>
                                        rate SmartIDP
                                    </h2>
                                </div>
                                <div class="button-box ce_rsce_oneo_button" style="margin-bottom: 30px;">
                                    <a href="javascript:void(0)" class="button ce_rsce_oneo_button text-center" style="background-color: #0090f9; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Read more</a>
                                </div>
                            </div>
                            <!-- Right Column (Image) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="content-image">
                                    <figure>
                                        <img src="assets/images/intelligent_content_Automation/person.gif" alt="SmartIDP" class="img-fluid" width="352" loading="lazy" height="145" style="border-radius: 15px;">
                                    </figure>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_article  max-width-viewport ser-hide-mobile block" id="article-42567"
            style="margin-top: 0px;">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start fade-out-background "
                    style=" ">
                    <div class="centered-wrapper-inner ">
                        <div style="margin-bottom: 50px;"
                            class="headline-box ser-headline-box ce_rsce_ser_headline_box">
                            <h2 class="headline"><span class="gradient">Tailored</span> solutions
                                for your digital transformation</h2>
                        </div>
                        <nav class="tab-navigation -columns-4 ce_rsce_oneo_tab_nav">
                            <ul>
                                <li class="tab-navigation-item">
                                    <a href="#manufacturing" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">
                                        Manufacturing </a>
                                </li>
                                <!-- <li class="tab-navigation-item">
                                    <a href="#bank">
                                        Banking & Financial Services </a>
                                </li>
                                <li class="tab-navigation-item">
                                    <a href="#insurance">
                                        Insurance </a>
                                </li> -->
                                <li class="tab-navigation-item">
                                    <a href="#logistic" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">
                                        Logistics </a>
                                </li>
                                <li class="tab-navigation-item">
                                    <a href="#healthcare" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">
                                        Healthcare </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-start ce_rsce_oneo_tab_start" id="manufacturing">
                            <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered"
                                style="">
                                <div class="centered-wrapper-inner ">
                                    <div class="rs-columns ce_rs_columns_start">
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row px-3 px-lg-0" style="min-height: 415px !important;">
                                            <div
                                                class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                                <h3 class="headline -large ">Faster time-to-value, streamlined
                                                    manufacturing processes</h3>
                                            </div>
                                            <div class="content-text">
                                                <div class="rte">
                                                    <p style="text-align: justify;">Leading manufacturing companies optimize all processes
                                                        related to production through SmartIDP. The entire
                                                        purchase-to-pay process is digitized, accelerated and
                                                        automated - ensuring higher customer
                                                        satisfaction through the reliable and timely delivery of
                                                        goods.</p>
                                                    <ul>
                                                        <li>Faster&nbsp;<a
                                                                href="purchasing_procurement">Purchasing & procurement
                                                                processes</a></li>
                                                        <li>Improved production planning</li>
                                                        <li>Transparent project management</li>
                                                        <li>Documented QM processes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                                <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                                    href="contact">
                                                    Find out more → </a>
                                            </div>
                                        </div>
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                            <div class="quote-screenshot hide-tablet content-image">
                                                <figure>
                                                    <img src="assets/images/SmartIDP/all_docs1.png"
                                                        alt width="480" height="459" loading="lazy" style="border-radius: 20px;">
                                                </figure>
                                            </div>
                                            <div class="ce_quote block ">
                                                <div class="ser-quote ">

                                                    <div class="quote">
                                                        <p>All documents relevant to production are compiled in
                                                            one&nbsp;efile where the user can search through
                                                            them. This makes work so much easier.</p>
                                                    </div>
                                                    <div class="author-logo">
                                                        <p>All production documents are stored in a single e-file, making it easy to search and manage them.</p>
                                                        <img class="quote-logo"
                                                            src="assets/images/SmartIDP/logo_123.png" width="50" height="50"
                                                            alt="Neways Electronics Riesa GmbH & Co. KG"
                                                            loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-start ce_rsce_oneo_tab_start" id="bank" style="display:none;">
                            <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered"
                                style="">
                                <div class="centered-wrapper-inner ">
                                    <div class="rs-columns ce_rs_columns_start">
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row px-3 px-lg-0">
                                            <div
                                                class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                                <h3 class="headline -large ">Streamlined processes, ensured
                                                    compliance</h3>
                                            </div>
                                            <div class="content-text">
                                                <div class="rte">
                                                    <p>Top financial&nbsp;service providers are gaining
                                                        a&nbsp;competitive advantage&nbsp;through agile banking
                                                        processes. SmartIDP helps you to meet customer
                                                        expectations, speed up response times, reduce
                                                        costs and automate compliance.</p>
                                                    <ul>
                                                        <li>Better customer service</li>
                                                        <li>Swifter loan processing</li>
                                                        <li>Improved resource utilization</li>
                                                        <li>Mitigated legal risks</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                                <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                                    href="javascript:void(0)">
                                                    Find out more → </a>
                                            </div>
                                        </div>
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                            <div class="quote-screenshot hide-tablet content-image">
                                                <figure>
                                                    <img src="assets/images/SmartIDP/all_docs1.png"
                                                        alt width="480" loading="lazy" height="459" style="border-radius: 20px;" style="border-radius: 20px;" style="border-radius: 20px;">
                                                </figure>
                                            </div>
                                            <div class="ce_quote block">
                                                <div class="ser-quote ">

                                                    <div class="quote">
                                                        <p>Questions such as 'Which loan processes were in place
                                                            on March 14, 2015?’ can be answered easily and
                                                            immediately today using our ECM system.</p>
                                                    </div>
                                                    <div class="author-logo">
                                                        <p class="quote-author"><span class="author">Petra
                                                                John</span><br><span
                                                                class="quote-title-company">Procedures Officer,
                                                                Aareal Bank Gruppe</span></p>
                                                        <img class="quote-logo"
                                                            src="assets/images/SmartIDP/logo_123.png" width="50" height="50"
                                                            alt="Aareal Bank Gruppe" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-start ce_rsce_oneo_tab_start" id="healthcare" style="display:none;">
                            <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered" style="">
                                <div class="centered-wrapper-inner ">
                                    <div class="rs-columns ce_rs_columns_start">
                                        <div class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row px-3 px-lg-0">
                                            <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                                <h3 class="headline -large ">Optimized patient care, faster response times</h3>
                                            </div>
                                            <div class="content-text">
                                                <div class="rte">
                                                    <p>Leading healthcare providers don’t keep patients waiting. SmartIDP helps you deliver top-tier care by accelerating patient intake, treatment processes, and response times.</p>
                                                    <ul>
                                                        <li>360° view of patient history</li>
                                                        <li>Faster patient processing</li>
                                                        <li>Improved care coordination</li>
                                                        <li>More efficient use of healthcare resources</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                                <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                                    href="javascript:void(0)">
                                                    Find out more → </a>
                                            </div>
                                        </div>
                                        <div class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                            <div class="quote-screenshot hide-tablet content-image">
                                                <figure>
                                                    <img src="assets/images/SmartIDP/all_docs1.png"
                                                        alt width="480" height="459" loading="lazy" style="border-radius: 20px;">
                                                </figure>
                                            </div>
                                            <div class="ce_quote block">
                                                <div class="ser-quote ">

                                                    <div class="quote">
                                                        <p>Our patients notice that the care process is faster, thanks to the improved response times and streamlined workflows.</p>
                                                    </div>
                                                    <div class="author-logo">
                                                        <p class="quote-author"><span class="author">Dr. Sarah Lang</span><br><span
                                                                class="quote-title-company">Chief Medical Officer, HealthCare Plus Network</span></p>
                                                        <img class="quote-logo"
                                                            src="assets/images/SmartIDP/logo_123.png" width="50" height="50"
                                                            alt="HealthCare Plus Network" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="tab-start ce_rsce_oneo_tab_start" id="insurance" style="display:none;">
                            <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered"
                                style="">
                                <div class="centered-wrapper-inner ">
                                    <div class="rs-columns ce_rs_columns_start">
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row px-3 px-lg-0">
                                            <div
                                                class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                                <h3 class="headline -large ">Optimized claims processes, shorter
                                                    response times</h3>
                                            </div>
                                            <div class="content-text">
                                                <div class="rte">
                                                    <p>Successful insurance providers don’t leave their
                                                        customers waiting. SmartIDP helps you to offer first-class
                                                        customer service and speed up underwriting and claims
                                                        processes.</p>
                                                    <ul>
                                                        <li>360° view of policy holders</li>
                                                        <li>Expedited claims processes</li>
                                                        <li>Better customer service</li>
                                                        <li>More efficient use of resources</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                                <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                                    href="javascript:void(0)">
                                                    Find out more → </a>
                                            </div>
                                        </div>
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                            <div class="quote-screenshot hide-tablet content-image">
                                                <figure>
                                                    <img src="assets/images/SmartIDP/all_docs1.png"
                                                        alt width="480" height="459" loading="lazy" style="border-radius: 20px;" style="border-radius: 20px;">
                                                </figure>
                                            </div>
                                            <div class="ce_quote block">
                                                <div class="ser-quote ">

                                                    <div class="quote">
                                                        <p>The customers notice that our processing speed is
                                                            higher due to the fact that we respond so much
                                                            faster.</p>
                                                    </div>
                                                    <div class="author-logo">
                                                        <p class="quote-author"><span class="author">Alexander
                                                                Erpenbach</span><br><span
                                                                class="quote-title-company">Head of the Policy
                                                                Department for the divisions Property,
                                                                Liability, Accident, Automotive Insurance and
                                                                Customer Center Service, DEVK
                                                                Versicherungen</span></p>
                                                        <img class="quote-logo"
                                                            src="assets/images/SmartIDP/logo_123.png" width="50" height="50"
                                                            alt="DEVK Versicherungen" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="tab-start ce_rsce_oneo_tab_start" id="logistic" style="display:none;">
                            <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered"
                                style="">
                                <div class="centered-wrapper-inner ">
                                    <div class="rs-columns ce_rs_columns_start">
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row px-3 px-lg-0">
                                            <div
                                                class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                                <h3 class="headline -large ">Information and goods logistics in
                                                    sync</h3>
                                            </div>
                                            <div class="content-text">
                                                <div class="rte">
                                                    <p style="text-align: justify;">Billions of documents, tens of thousands of users: SmartIDP
                                                        is the ECM platform of choice of the largest logistics
                                                        corporations in the world. Give customers information at
                                                        any time about the whereabouts
                                                        and estimated arrival of their packages through
                                                        transparent documentation.</p>
                                                    <ul>
                                                        <li>Access documents from everywhere</li>
                                                        <li>360° view of shipping operations</li>
                                                        <li>Real-time delivery updates for customers</li>
                                                        <li>Audit-proof archiving of billions of shipping
                                                            documents</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                                <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                                    href="javascript:void(0)">
                                                    Find out more → </a>
                                            </div>
                                        </div>
                                        <div
                                            class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                            <div class="quote-screenshot hide-tablet content-image">
                                                <figure>
                                                    <img src="assets/images/SmartIDP/all_docs1.png"
                                                        alt width="480" height="459" loading="lazy" style="border-radius: 20px;">
                                                </figure>
                                            </div>
                                            <div class="ce_quote block">
                                                <div class="ser-quote ">

                                                    <div class="quote">
                                                        <p>Working together is so much easier now in the TGW
                                                            Group. We continue to grow together as a corporate
                                                            group, because we have access to the same data and
                                                            can efficiently share information.</p>
                                                    </div>
                                                    <div class="author-logo">
                                                        <p class="quote-author"><span class="author">Johannes
                                                                Gebetsberger</span><br><span
                                                                class="quote-title-company">Application Services
                                                                Project Manager, TGW Logistics Group GmbH</span>
                                                        </p>
                                                        <img class="quote-logo"
                                                            src="assets/images/SmartIDP/logo_123.png" width="50" height="50"
                                                            alt="TGW Logistics Group GmbH" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_article  max-width-viewport ser-show-mobile block" id="article-42703">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start fade-out-background "
                    style=" ">
                    <div class="centered-wrapper-inner ">
                        <div style="margin-bottom: 50px;"
                            class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                            <h2 class="headline -extra-large "><span class="gradient">Tailored</span> solutions
                                for your digital transformation</h2>
                        </div>
                        <section class="ce_accordionStart ce_accordion block">
                            <div class="toggler">
                                Manufacturing </div>
                            <div class="accordion">
                                <div>
                                    <div
                                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                        <h3 class="headline -large ">Faster time-to-value, streamlined
                                            manufacturing processes</h3>
                                    </div>
                                    <div class="content-text">
                                        <div class="rte">
                                            <p>Manufacturing leaders keep their production running smoothly.
                                                SmartIDP enhances efficiency across your production processes - for
                                                a higher customer satisfaction due to reliable and on-time
                                                delivery of goods.</p>
                                            <ul>
                                                <li>Production continuity</li>
                                                <li>Improved production planning</li>
                                                <li>Transparent project management</li>
                                                <li>Documented QM processes</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                        <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                            href="javascript:void(0)">
                                            Find out more → </a>
                                    </div>
                                    <div class="ce_quote block">
                                        <div class="ser-quote ">

                                            <div class="quote">
                                                <p>All documents relevant to production are compiled in
                                                    one&nbsp;efile where the user can search through them. This
                                                    makes work so much easier.</p>
                                            </div>
                                            <div class="author-logo">
                                                <p class="quote-author"><span class="author">Christian
                                                        Döring</span><br><span
                                                        class="quote-title-company">Process Engineering, Neways
                                                        Electronics Riesa GmbH & Co. KG</span></p>
                                                <img class="quote-logo"
                                                    src="https://cdn.sergroup.com/assets/images/9/Neways_Logo-qdhhr9v6tejwfkm.png"
                                                    alt="Neways Electronics Riesa GmbH & Co. KG" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="ce_accordionStart ce_accordion block">
                            <div class="toggler">
                                Bank & Financial Services </div>
                            <div class="accordion">
                                <div>
                                    <div
                                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                        <h3 class="headline -large ">Streamlined processes, mitigated legal
                                            risks</h3>
                                    </div>
                                    <div class="content-text">
                                        <div class="rte">
                                            <p>Top financial institutes get ahead of competition with agile
                                                banking processes. SmartIDP helps you to meet customer
                                                expectations, speed up response time, reduce costs and automate
                                                compliance.</p>
                                            <ul>
                                                <li>Better customer service</li>
                                                <li>Swift loan processing</li>
                                                <li>Improved resource utilization</li>
                                                <li>Mitigation of legal risks</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                        <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                            href="javascript:void(0)">
                                            Find out more → </a>
                                    </div>
                                    <div class="ce_quote block">
                                        <div class="ser-quote ">

                                            <div class="quote">
                                                <p>Questions such as 'Which loan processes were in place on
                                                    March 14, 2015?’ can be answered easily and immediately
                                                    today using our ECM system.</p>
                                            </div>
                                            <div class="author-logo">
                                                <p class="quote-author"><span class="author">Petra
                                                        John</span><br><span
                                                        class="quote-title-company">Procedures Officer, Aareal
                                                        Bank Gruppe</span></p>
                                                <img class="quote-logo"
                                                    src="https://cdn.sergroup.com/assets/images/8/Aareal-z7ceqq7frb6bkgf.png"
                                                    alt="Aareal Bank Gruppe" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="ce_accordionStart ce_accordion block">
                            <div class="toggler">
                                Insurance </div>
                            <div class="accordion">
                                <div>
                                    <div
                                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                        <h3 class="headline -large ">Optimized claims processes, shorter
                                            response times</h3>
                                    </div>
                                    <div class="content-text">
                                        <div class="rte">
                                            <p>Successful insurance providers don’t leave their customers
                                                waiting. SmartIDP helps you to offer first-class customer service
                                                and speed up underwriting and claims processes.</p>
                                            <ul>
                                                <li>360° view of policy holders</li>
                                                <li>Expedited claims processes</li>
                                                <li>Better customer service</li>
                                                <li>More efficient use of resources</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                        <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                            href="javascript:void(0)">
                                            Find out more → </a>
                                    </div>
                                    <div class="ce_quote block">
                                        <div class="ser-quote ">

                                            <div class="quote">
                                                <p>The customers notice that our processing speed is higher due
                                                    to the fact that we respond so much faster.</p>
                                            </div>
                                            <div class="author-logo">
                                                <p class="quote-author"><span class="author">Alexander
                                                        Erpenbach</span><br><span
                                                        class="quote-title-company">Head of the Policy
                                                        Department for the divisions Property, Liability,
                                                        Accident, Automotive Insurance and Customer Center
                                                        Service, DEVK Versicherungen</span></p>
                                                <img class="quote-logo"
                                                    src="https://cdn.sergroup.com/assets/images/0/DEVK-logo-g1fa45a445vawhh.png"
                                                    alt="DEVK Versicherungen" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="ce_accordionStart ce_accordion block">
                            <div class="toggler">
                                Logistics </div>
                            <div class="accordion">
                                <div>
                                    <div
                                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                                        <h3 class="headline -large ">Excellence in worldwide logistics, high
                                            capacity document management</h3>
                                    </div>
                                    <div class="content-text">
                                        <div class="rte">
                                            <p>Logistics champions manage billions of documents and tens of
                                                thousands of users. SmartIDP helps you to access documents
                                                worldwide and keep your customers fully informed about their
                                                shipments</p>
                                            <ul>
                                                <li>Access documents from everywhere</li>
                                                <li>360° view of shipping operations</li>
                                                <li>Real time delivery information for customers</li>
                                                <li>Audit-proof archiving of billions of shipping documents</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="button-box ce_rsce_oneo_button mt-3 -tertiary  -left">
                                        <a class="button ce_rsce_oneo_button mt-3 -tertiary  -left"
                                            href="javascript:void(0)">
                                            Find out more → </a>
                                    </div>
                                    <div class="ce_quote block">
                                        <div class="ser-quote ">

                                            <div class="quote">
                                                <p>Working together is so much easier now in the TGW Group. We
                                                    continue to grow together as a corporate group, because we
                                                    have access to the same data and can efficiently share
                                                    information.</p>
                                            </div>
                                            <div class="author-logo">
                                                <p class="quote-author"><span class="author">Johannes
                                                        Gebetsberger</span><br><span
                                                        class="quote-title-company">Application Services Project
                                                        Manager, TGW Logistics Group GmbH</span></p>
                                                <img class="quote-logo"
                                                    src="https://cdn.sergroup.com/assets/images/6/tgw-logo-ohne-hintergrund-1d2v092mgby26pz.png"
                                                    alt="TGW Logistics Group GmbH" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="mod_article block" id="article-42571" style="margin-top: 0px;">
            <div class="mod_article_inner">
                <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                    <h2 class="headline -extra-large ">More than software – <span class="gradient">your
                            expert</span> for digital transformation</h2>
                </div>
                <section class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes">
                    <a class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left    -icon-align-left -background-color"
                        style="background-color: #ffffff;"
                        href="/en/service-delivery/consulting-implementation.html">
                        <div class="icon-boxes-item-icon-image">
                            <img src="https://cdn.sergroup.com/assets/images/d/icon-consulting-8gcdgw96gpn567k.svg"
                                width="69" height="68" alt="">
                        </div>
                        <h3 class="-medium">Consulting and implementation</h3>
                        <div class="icon-boxes-item-text">
                            <p>Enhance the impact of digital transformation</p>
                        </div>
                        <p class="icon-boxes-item-link -link">Learn more →</p>
                    </a>
                    <a class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left    -icon-align-left -background-color"
                        style="background-color: #ffffff;" href="/en/service-delivery/managed-services.html">
                        <div class="icon-boxes-item-icon-image">
                            <img src="https://cdn.sergroup.com/assets/images/j/icon-managed-services-6cy9ds5d76gmdd3.svg"
                                width="69" height="68" alt="">
                        </div>
                        <h3 class="-medium">Managed services</h3>
                        <div class="icon-boxes-item-text">
                            <p>Focus on your business, we'll do the rest</p>
                        </div>
                        <p class="icon-boxes-item-link -link">Learn more →</p>
                    </a>
                    <a class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left    -icon-align-left -background-color"
                        style="background-color: #ffffff;" href="/en/knowledge-center/seracademy.html">
                        <div class="icon-boxes-item-icon-image">
                            <img src="https://cdn.sergroup.com/assets/images/6/icon-training-540mz02wgh6azy5.svg"
                                width="69" height="68" alt="">
                        </div>
                        <h3 class="-medium">SERacademy training</h3>
                        <div class="icon-boxes-item-text">
                            <p>Learn how to maximize the effectiveness of SmartIDP</p>
                        </div>
                        <p class="icon-boxes-item-link -link">Learn more →</p>
                    </a>
                </section>
            </div>
        </div> -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="card shadow-lg" style="border-radius: 15px; border: none;">
                    <div class="card-body">
                        <!-- Row for content and image -->
                        <div class="row justify-content-center align-items-center">
                            <!-- Left Column (Text and Button) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="responsive-heading2">
                                    <h2 class="responsive-heading2" style="font-size: 2.5rem;">
                                        <span class="gradient">SmartIDP</span> named a <span class="gradient">Leader</span> in 2023 IDC MarketScape
                                    </h2>
                                </div>
                                <div class="button-box ce_rsce_oneo_button text-center" style="margin-bottom: 30px;">
                                    <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center"
                                        style="background-color: #0090f9; color: white; padding: 10px 30px; text-decoration: none; 
              border-radius: 50px;">Expert advice</a>
                                </div>

                            </div>

                            <!-- Right Column (Image) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="ser-carousel-wrapper">
                                    <div class="ser-carousel" style="--base-animation-time: 4s;">
                                        <img src="assets/images/intelligent_content_Automation/tech_gif.gif" alt="" loading="lazy" class="img-fluid" loading="lazy" width="352" height="300" style="border-radius: 15px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row"> 
                <!-- First Card -->
                <div class="col-12 col-md-4 d-flex p-2">
                    <div class="card flex-fill" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 1.25rem;">
                        <div class="card-body">
                            <h6 class="card-title text-white">News</h6>
                            <figure>
                                <img src="assets/images/process_automation/bgatr.png" class="card-img-top" alt="SmartIDP News" loading="lazy" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;height: 230px;">
                            </figure>
                            <h3 class="card-subtitle mt-2 text-white">A Strong Performer: SmartIDP Group with the highest score in current offering category</h3>
                            <p class="card-text mt-2 text-white">Read more about SmartIDP's recognition in the industry.</p>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-12 col-md-4 d-flex p-2">
                    <div class="card flex-fill" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 1.25rem;">
                        <div class="card-body">
                            <h6 class="card-title text-white">News</h6>
                            <figure>
                                <img src="assets/images/SmartIDP/Intelligent-Document-Processing-for-Enterprise.png" class="card-img-top" alt="Intelligent Document Processing" loading="lazy" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;height: 230px;">
                            </figure>
                            <h3 class="card-subtitle mt-2 text-white">SmartIDP a 'Distinguished Leader' in Spark Matrix 2023 report</h3>
                            <p class="card-text mt-2 text-white">Discover more about SmartIDP's achievements in the Spark Matrix 2023 report.</p>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-12 col-md-4 d-flex p-2">
                    <div class="card flex-fill" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 1.25rem;">
                        <div class="card-body">
                            <h6 class="card-title text-white">News</h6>
                            <figure>
                                <img src="assets/images/SmartIDP/intelligent-document-processing.png" class="card-img-top" alt="Intelligent Document Processing" loading="lazy" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;height: 230px;">
                            </figure>
                            <h3 class="card-subtitle mt-2 text-white">SmartIDP Group named a Leader in the IDC MarketScape</h3>
                            <p class="card-text mt-2 text-white">Learn more about SmartIDP Group's leadership in the IDC MarketScape report.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all tab links and tab content divs
        const tabLinks = document.querySelectorAll(".tab-navigation-item a");
        const tabContents = document.querySelectorAll(".tab-start");

        // Add a click event listener for each tab link
        tabLinks.forEach(link => {
            link.addEventListener("click", function(event) {
                event.preventDefault();

                // Remove 'active' class from all tab links and hide all tab contents
                tabLinks.forEach(link => link.parentElement.classList.remove("active"));
                tabContents.forEach(content => content.style.display = "none");

                // Add 'active' class to clicked tab and show corresponding content
                link.parentElement.classList.add("active");
                const targetId = link.getAttribute("href").substring(1); // get ID without the '#'
                document.getElementById(targetId).style.display = "block";
            });
        });

        // Set the first tab as active by default
        if (tabLinks.length > 0) {
            tabLinks[0].click();
        }
    });
</script>

<?php include_once("includes/footer.php"); ?>