<?php include_once("includes/header.php"); ?>
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

    /* Gradient text styling */
    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
    }

    /* Large Screen (Desktops and Tablets) */
    .responsive-heading {
        font-size: 3.5em !important;
    }

    .responsive-heading1 {
        font-size: 2.5em !important;
    }

    .responsive-paragraph {
        font-size: 1.4rem;
        /* text-align: justify; */
    }

    /* Small Screen (Phones and smaller devices) */
    @media (max-width: 767px) {
        .responsive-heading {
            font-size: 2em !important;
            /* Smaller font size for the heading on mobile */
        }

        .responsive-heading1 {
            font-size: 1.8em !important;
        }

        .responsive-paragraph {
            font-size: 1rem;
            /* Slightly smaller text for mobile */
        }

        .btn {
            font-size: 1rem;
            /* Adjust button size for mobile */
            padding: 8px 25px;
            /* Adjust padding */
        }
    }

    /* Extra Small Screen (Portrait Mobile) */
    @media (max-width: 480px) {
        .responsive-heading {
            font-size: 1.5em !important;
            /* Further reduce the heading size on smaller screens */
        }

        .responsive-heading1 {
            font-size: 1.5em !important;
        }

        .responsive-paragraph {
            font-size: 0.9rem;
            /* Further reduce paragraph text size */
        }

        .btn {
            font-size: 1rem;
            /* Button font size */
            padding: 8px 20px;
            /* Button padding on smaller screens */
        }
    }
</style>
<!-- <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/five.css"> -->
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid py-5" id="article-43622" style="background-image: url('assets/images/process_automation/pad.png'); background-size: cover; background-position: 0% 10%;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-lg-6 text-white">
                        <div class="mb-4">
                            <h2 class="subheadline text-uppercase" style="font-size: 2.5rem; font-weight: 700;">
                                <span class="gradient">Powered by the latest AI</span>
                            </h2>
                            <h1 class="display-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">Intelligent business process automation</h1>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Automate and manage all your business processes, end-to-end
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Experience a real-time, transparent view of project progress
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Automate manual tasks and speed up daily work
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Elevate decision-making by harnessing your institutional knowledge with AI
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a class="btn rounded-pill px-4 text-white" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <figure>
                            <a href="https://cdn.sergroup.com/files/content/images/screenshots/DE/SER-doxis-dashboard.png" rel="noreferrer noopener" data-lightbox="lb260066" title="Purchase-to-pay automation software from SER">
                                <img src="https://cdn.sergroup.com/assets/images/w/SER-doxis-dashboard-znhb5qkwzxj4tqa.png" alt="Purchase-to-pay automation software" class="img-fluid" width="700" height="399">
                            </a>
                        </figure>
                    </div>
                </div> -->
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

                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/17@4x.png" class="d-block" alt="Logo 4" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/Asset 40@4x.png" class="d-block" alt="Logo 5" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/logo-kenz.png" class="d-block" alt="Logo 6" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

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

                    <!-- Logos (only Second set) -->

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


        <div class="container py-5">
            <div class="row text-center mb-4">
                <h2 class="responsive-heading1 fw-bold">Elevating <span class="gradient">Efficiency</span> with SmartIDP AI</h2>
            </div>

            <section class="row text-center">
                <!-- First Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon -->
                            <h5 class="card-title">Faster Automation Results</h5>
                            <p class="card-text">With SmartIDP and AI, reduce document processing times and improve decision-making, enabling you to meet targets faster, optimize efficiency, and delight your customers.</p>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-robot fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon -->
                            <h5 class="card-title">AI-driven Quality Enhancement</h5>
                            <p class="card-text">Optimize and standardize business processes across your organization using SmartIDP's AI-powered automation. Deliver superior outcomes with consistent, high-quality results.</p>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-tasks fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon -->
                            <h5 class="card-title">Complete Process Control</h5>
                            <p class="card-text">SmartIDP offers full visibility into all your active processes and tasks. Gain complete control over your operations with a 360° view, ensuring streamlined and efficient workflows.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div class="container py-5">
            <div class="row text-center mb-4">
                <h2 class="responsive-heading1 fw-bold">Streamline Operations with <span class="gradient">AI Automation</span></h2>
                <p class="lead fw-bold responsive-paragraph">Experience how AI-powered automation improves business efficiency, reduces operational costs, and enhances decision-making across your organization.</p>
            </div>

            <section class="icon-boxes is-animated does-repeat row text-center">
                <!-- First Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-file-alt fa-3x custom-icon mb-3 gradient"></i>
                            <h3 class="h5">Smart Document Processing</h3>
                            <p>Automate document capture, data extraction, and classification to streamline processes across your departments.</p>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-credit-card fa-3x custom-icon mb-3 gradient"></i>
                            <h3 class="h5">Invoice Automation</h3>
                            <p>Leverage AI to automate invoice processing, speeding up approval cycles, improving accuracy, and reducing costs.</p>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-briefcase fa-3x custom-icon mb-3 gradient"></i>
                            <h3 class="h5">Case Management</h3>
                            <p>Enhance case management with AI-driven workflows, giving your team a comprehensive view of tasks and improving response times.</p>
                        </div>
                    </div>
                </div>
            </section>
  
            <section class="icon-boxes is-animated does-repeat row text-center mt-4">
                <!-- Fourth Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x custom-icon mb-3 gradient"></i>
                            <h3 class="h5">Team Collaboration</h3>
                            <p>Boost collaboration with AI-driven tools for communication, task management, and file sharing to improve project flow.</p>
                        </div>
                    </div>
                </div>

                <!-- Fifth Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-chalkboard-teacher fa-3x custom-icon mb-3 gradient"></i>
                            <h3 class="h5">HR Automation</h3>
                            <p>Automate HR tasks like onboarding, offboarding, and performance management to improve accuracy and consistency across your HR processes.</p>
                        </div>
                    </div>
                </div>

                <!-- Sixth Card -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x custom-icon mb-3 gradient"></i>
                            <h3 class="h5">Quality Management</h3>
                            <p>Ensure process compliance and document centralization with automated quality management systems powered by AI.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="container">
            <!-- Heading Section -->
            <div class="row text-center mb-5">
                <h2 class="responsive-heading1 fw-bold" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
                    One Tool for <span class="gradient">All Your Processes</span>
                </h2>
            </div>

            <!-- Main Content Section -->
            <div class="row align-items-center">
                <!-- Left Column (Image) -->
                <div class="col-md-6">
                    <div class="content-image text-center mb-4 mb-md-0">
                        <figure class="shadow-lg rounded-lg overflow-hidden">
                            <img src="assets/images/SmartIDP/image.png" alt="Business Process Management" title="One business process management (BPM) software for all processes" class="img-fluid"  style="border-radius: 20px;"/>
                        </figure>
                    </div>
                </div>

                <!-- Right Column (Text) -->
                <div class="col-md-6">
                    <div class="content-text">
                        <ul class="list-unstyled text-justify">
                            <li class="mb-3">
                                <h4><strong>Ad hoc, standardized, hybrid:</strong> Experience comprehensive BPM, organizing and working on combinations of processes for both structured and unstructured work.</h4>
                            </li>
                            <li class="mb-3">
                                <h4><strong>Break boundaries:</strong> Processes seamlessly span departments and systems.</h4>
                            </li>
                            <li class="mb-3">
                                <h4><strong>Foundation for digital operations:</strong> Enable company-wide digital business processes.</h4>
                            </li>
                            <li>
                                <h4><strong>Automation:</strong> Apply AI to automate workflow steps, increase efficiency, and improve decision-making.</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-md-4">
            <div class="row text-center mb-4">
                <h2 class="responsive-heading1 fw-bold"><span class="gradient">Enhancing</span> ECM & BPM with Just <span class="gradient">One System</span></h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Column (Video) -->
                <div class="col-md-6">
                    <div class="content-vimeo text-center">
                        <figure class="aspect-ratio ratio ratio-16x9">
                            <button data-splash-screen>
                                <!-- Video with Autoplay and Muted Attributes -->
                                <video width="100%" height="100%" autoplay muted loop>
                                    <source src="assets/images/explanation-vid.mp4" type="video/mp4" >
                                    Your browser does not support the video tag.
                                </video>
                            </button>
                        </figure>
                    </div>
                </div>

                <!-- Right Column (Text) -->
                <div class="col-md-6">
                    <div class="content-text text-justify">
                        <p>Information and processes go hand in hand, so why not manage them easily with one solution? Make business process management easier by giving your employees everything they need in one solution, no matter their location, device, or job role.</p>
                        <p>Say goodbye to information silos and unify your customer data, product information, and process data with SmartIDP.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <!-- Headline Section -->
            <div class="row text-center mb-5">
                <h2 class="responsive-heading1 fw-bold">Seamless <span class="gradient">Operations</span>, Satisfied <span class="gradient">Customers</span></h2>
            </div>
            <!-- Icon Boxes Section -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Box 1: Improve efficiency across the board -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="icon">
                            <i class="fas fa-arrow-right fa-3x custom-icon my-2 gradient"></i>
                        </div>
                        <h3 class="h5">Improve efficiency across the board</h3>
                        <p>Seamlessly automate and manage your business processes across all departments and systems, empowering your entire organization.</p>
                    </div>
                </div>

                <!-- Box 2: Informed decisions, every time -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="icon">
                            <i class="fas fa-check-circle fa-3x custom-icon my-2 gradient"></i>
                        </div>
                        <h3 class="h5">Informed decisions, every time</h3>
                        <p>Rest easy knowing that employees are working with up-to-date information and your process-driven choices are always based on current, reliable information.</p>
                    </div>
                </div>

                <!-- Box 3: Supercharge productivity, slash waiting times -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="icon">
                            <i class="fas fa-clock fa-3x custom-icon my-2 gradient"></i>
                        </div>
                        <h3 class="h5">Supercharge productivity, slash waiting times</h3>
                        <p>Free your team from repetitive tasks. Watch as processes speed up, boosting overall productivity.</p>
                    </div>
                </div>

                <!-- Box 4: Remain one step ahead -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="icon">
                            <i class="fas fa-bolt fa-3x custom-icon my-2 gradient"></i>
                        </div>
                        <h3 class="h5">Remain one step ahead</h3>
                        <p>Stay ahead of the curve. Adapt swiftly to new challenges without the need for complex programming.</p>
                    </div>
                </div>

                <!-- Box 5: Exceed customer and partner expectations -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="icon">
                            <i class="fas fa-users fa-3x custom-icon my-2 gradient"></i>
                        </div>
                        <h3 class="h5">Exceed customer and partner expectations</h3>
                        <p>Streamline workflows for swift delivery of top-notch products and services, ensuring smiles all around.</p>
                    </div>
                </div>

                <!-- Box 6: Stay traceable, transparent & compliant -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="icon">
                            <i class="fas fa-shield-alt fa-3x custom-icon my-2 gradient"></i>
                        </div>
                        <h3 class="h5">Stay traceable, transparent & compliant</h3>
                        <p>Infuse transparency and traceability into your processes, setting a gold standard for audits and compliance.</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="mod_article  max-width-viewport block" id="article-43725">
            <div class="mod_article_inner">
                <div class="ce_quote block">
                    <div class="ser-quote ser-quote-light">
                       
                        <div class="quote">
                            <p>With SmartIDP we were able to optimize our processes, which had a positive effect on our HR resources and the quality of our service.</p>
                        </div>
                        <div class="author-logo">
                            <p class="quote-author"><span class="author">Helmut Glas</span><br><span class="quote-title-company">Head of IT, Ärztliche Verrechnungsstelle Büdingen</span></p>
                            <img class="quote-logo" src="https://cdn.sergroup.com/assets/images/q/aerztliche_verrechnungsstelle_buedingen-jyn2h82nyfma6jb.png" alt="Ärztliche Verrechnungsstelle Büdingen" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div id="article-43617">
                <div class="mod_article_inner">
                    <div class="container py-5">
                        <div class="text-center mb-5">
                            <!-- Headline Section -->
                            <h2 class="responsive-heading1 fw-bold">Shape <span class="gradient">business processes</span> your way</h2>
                            <p class="lead responsive-paragraph fw-bold">Whether your process is normative or adaptive — SmartIDP business process automation digitizes them all:</p>
                        </div>
                        <!-- Icon Boxes Section -->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                            <!-- Box 1: Set your own standards -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fas fa-cogs fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>Set your own standards</h5>
                                    <p>With SmartIDP business process management, you have the power to standardize and automate structured processes. You dictate the degree of interdependence between individual tasks and processes, and you call the shots on which workflows operate autonomously.</p>
                                </div>
                            </div>

                            <!-- Box 2: Stay agile -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fas fa-sync-alt fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>Stay agile</h5>
                                    <p>Spontaneously organize tasks based on the situation or deviate from standardized processes when necessary. SmartIDP BPM gives you the flexibility for such situations. Effortlessly strategize and oversee tasks as they progress.</p>
                                </div>
                            </div>

                            <!-- Box 3: Create context -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fas fa-clipboard-list fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>Create context</h5>
                                    <p>Every process holds a wealth of vital information essential for progress. In line with Adaptive Case Management (ACM), SmartIDP consolidates all pertinent data, ensuring optimal utilization in scenarios like service cases.</p>
                                </div>
                            </div>

                            <!-- Box 4: Combine processes -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fas fa-exchange-alt fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>Combine processes</h5>
                                    <p>Model both normative and ad hoc processes with one BPM software. Enhance your standardized invoice process by incorporating additional verification steps. Turn routine ad hoc customer service workflows into one standardized process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="article-43722">
            <div class="text-center mb-2">
                <h2 class="responsive-heading1 fw-bold">FAQs about <span class="gradient">Business</span> Process <span class="gradient">Automation</span></h2>
            </div>
            <div class="mx-auto">
                <!-- Bootstrap Accordion -->
                <div class="accordion" id="accordionFAQ">

                    <!-- Accordion Item 1 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                <strong>What is BPM?</strong>

                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body bg-light p-4 rounded-3 text-justify ">
                                Business process management seeks to optimize business processes through analyzing, improving, and automation. Business processes are tasks or activities that co-ordinate the behavior of people, systems, and information to produce outcomes that support a business’ strategy. Processes can either be structured and repeatable or unstructured and variable. A range of methods are used to model, measure, optimize and control business activity.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                <strong>What is business process management software?</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                Business process management software helps businesses to manage and automate their processes and workflows to improve day-to-day functions. BPM software helps turn time-consuming manual processes into streamlined workflows across business applications through automation. This allows you to manage routine, highly structured processes as well as unstructured, derived processes and integrate standardized and knowledge-based processes.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                <strong>What is the role of ECM in business process management?</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                Enterprise Content Management (ECM) is the process of managing information, documents, and data. The management of information is just as important as managing your processes. Combining insights into your documents and data with control over your processes means you'll be able to achieve the goals of your organization. We are the first ECM vendor to unite ECM and BPM on one unified technological platform.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 4 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed p-3 rounded-3 shadow-sm w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                                <strong>Why do I need business process management?</strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body bg-light p-4 rounded-3 text-justify">
                                Business process automation elevates your business process management and enables you to take your digital business transformation to the next level. Agile business processes have drastically changed the requirements of companies: modern BPM tools need to be quick and intuitively adaptable to each task. The SmartIDP BPM solution makes this a reality and offers all kinds of extra benefits for automating your business processes.
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
                                <img src="assets/images/SmartIDP/all_docs.png" class="card-img-top" alt="SmartIDP News" loading="lazy" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;">
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
                                <img src="assets/images/SmartIDP/Intelligent-Document-Processing-for-Enterprise.png" class="card-img-top" alt="Intelligent Document Processing" loading="lazy" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;">
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
                                <img src="assets/images/SmartIDP/intelligent-document-processing.png" class="card-img-top" alt="Intelligent Document Processing" loading="lazy" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;">
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
<?php include_once("includes/footer.php"); ?>