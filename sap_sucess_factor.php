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
<!-- <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/saps.css"> -->
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid py-3" id="article-43622" style="background-image: url('assets/images/process_automation/pad.png'); background-size: cover; background-position: 0% 10%;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-lg-6 text-white">
                        <div class="mb-4">
                            <h2 class="subheadline text-uppercase" style="font-size: 2.5rem; font-weight: 700;">
                                <span class="gradient">Empowered by SAP SmartIDP</span>
                            </h2>
                            <h1 class="display-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">AI-Driven Business Process Automation with SAP SmartIDP</h1>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Seamlessly automate and optimize end-to-end business processes with SAP SmartIDP
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Gain real-time, actionable insights and complete transparency into your project progress
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Accelerate daily operations by automating repetitive tasks and workflows
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i> Enhance decision-making capabilities by leveraging AI and institutional knowledge with SAP SmartIDP
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a class="btn rounded-pill px-4 text-white" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
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

        <div class="container" id="article-40037">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="responsive-heading1 fw-bold">Document <span class="gradient">Management</span> Made Easy with <span class="gradient">SAP SmartIDP</span></h2>
                        <p class="lead responsive-paragraph fw-bold">Automate and streamline your document management processes with the power of AI and SAP SmartIDP. Enhance compliance, security, and efficiency in managing employee and business documents across your organization.</p>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Icon Box 1 -->
                    <div class="col">
                        <div class="card h-100  p-4 shadow-sm" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="icon mb-3 text-center">
                                <i class="fas fa-folder-open" style="font-size: 3rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            </div>
                            <h5 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold;">Fast & Secure File Management</h5>
                            <p class="card-text text-justify" style="font-size: 1.1rem;">Unify employee and business documents in a consolidated, user-friendly, and secure view. Gain complete control over all documents across various stages, from onboarding to offboarding.</p>
                            <div class="card-body" style="text-align: left; padding-left: 25px;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Unify and secure HR documents</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Full control over document flow</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Automated notifications for deadlines</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Box 2 -->
                    <div class="col">
                        <div class="card h-100  p-4 shadow-sm" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="icon mb-3 text-center">
                                <i class="fas fa-users-cog" style="font-size: 3rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            </div>
                            <h5 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold;">More Efficient HR Workflows</h5>
                            <p class="card-text text-justify" style="font-size: 1.1rem;">Automate the entire employee lifecycle, including applicant workflows, on-/offboarding, leave requests, and more. Boost productivity by automating manual tasks.</p>
                            <div class="card-body" style="text-align: left; padding-left: 25px;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Automate employee lifecycle tasks</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Streamline contract workflows with digital signatures</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Reduce response times and administrative costs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Box 3 -->
                    <div class="col">
                        <div class="card h-100  p-4 shadow-sm" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="icon mb-3 text-center">
                                <i class="fas fa-shield-alt" style="font-size: 3rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                            </div>
                            <h5 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold;">Streamlined Compliance</h5>
                            <p class="card-text text-justify" style="font-size: 1.1rem;">Ensure your document management complies with regulations and avoid risks by setting role-based access, automated task notifications, and protecting data through automated retention policies.</p>
                            <div class="card-body" style="text-align: left; padding-left: 25px;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Manage documents in compliance with regulations</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Set role-based access rights</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle mr-2" style="color: #00b09c;"></i>
                                    <span style="font-size: 1.1rem;">Automate data protection and retention policies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5">
            <div class="text-center mb-5">
                <h2 class="responsive-heading1 fw-bold">A look inside the <span class="gradient">SmartIDP SuccessFactors</span> integration</h2>
            </div>

            <div id=" carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 mb-4">
                                    <img src="assets/images/artificial_intelligence/extract.png" class="img-fluid" alt="Screen 1" style="max-width: 100%; height: auto;">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <h3 class="h4 fw-bold">Self-service for HR professionals</h3>
                                    <p class="text-justify">HR professionals can use the self-service functionality to quickly and easily generate customized documents based on each employee’s or applicant’s particular needs, reducing their workload thanks to a modern employee document management system.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 mb-4">
                                    <h3 class="h4 fw-bold">Always up-to-date & on track</h3>
                                    <p class="text-justify">Visibility of information & documents throughout the employee lifecycle is crucial. HR professionals are supported with automatic notifications and reminders of pending deadlines, missing documents, expiring contracts and more in SAP SuccessFactors.</p>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <img src="assets/images/artificial_intelligence/diocalap.jpg" class="img-fluid" alt="Screen 2" style="max-width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 mb-4">
                                    <img src="assets/images/artificial_intelligence/graph3.png" class="img-fluid" alt="Screen 3" style="max-width: 100%; height: auto;">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <h3 class="h4 fw-bold">Secure & compliant</h3>
                                    <p class="text-justify">Role-based permissions ensure that only authorized HR users can view and upload documents, ensuring a clear and traceable organization of information. Furthermore, retention and access management capabilities support data protection and privacy management.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Carousel Controls -->
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
            </div>
        </div>

        <div class="mod_article max-width-viewport block" id="article-43050">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800 -vertical-centered" style=" ">
                    <div class="centered-wrapper-inner">
                        <div class="rs-columns ce_rs_columns_start">
                            <div class="ce_rs_column_start rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                <div class="content-text">
                                    <h3>Hello, I think you might be interested in this...</h3>
                                    <div class="rte text-justify">
                                        <p>Did you know that HR departments spend 36% of their working hours searching for information? But those who use SmartIDP &amp; SAP Success Factors benefit from:</p>
                                        <ul>
                                            <li>More time for employees</li>
                                            <li>Finding documents instantly</li>
                                            <li>Faster and efficient onboarding</li>
                                            <li>High level of employee loyalty</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button -left">
                                    <a class="button ce_rsce_oneo_button -left" href="contact.php">
                                        Discover SmartIDP
                                    </a>
                                </div>

                            </div>

                            <div class="ce_rs_column_start rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last d-none d-sm-block">
                                <div class="content-image">
                                    <figure>
                                        <img src="assets/images/SmartIDP/intelligent-document-processing.png" style="width: 500px; height: 350px;">
                                    </figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-12 col-md-6 mb-4">
                    <h2 class="responsive-heading1 fw-bold">
                        Unlock <span class="gradient">Faster</span> & <span class="gradient">Smarter Business</span> Operations with SAP SuccessFactors Integration
                    </h2>
                    <p class="text-justify" style="font-size: 1.2rem; font-weight: 500; line-height: 1.6;">
                        <strong style="color: #0090f9;">Transform Your Business</strong> with SAP SuccessFactors and SmartIDP integration. Streamline HR processes, improve efficiency, and make your operations smarter with advanced AI-driven automation.
                    </p>
                    <div>
                        <!-- <p style="font-size: 1rem; color: #333;">
                            At <strong>adesso Group</strong>, we leveraged the power of SmartIDP to seamlessly connect HR documents, employee data, and contract information with <strong>SAP S/4HANA Public C</strong> and <strong>SAP SuccessFactors</strong>. The result?
                            <span class="text-primary fw-bold">Fully digitized, faster, and more efficient workflows</span> that simplify complex HR tasks, improve accuracy, and boost overall productivity.
                        </p> -->
                        <a href="contact.php" class="btn btn-lg mt-3" style="border-radius: 50px; padding: 12px 30px; font-weight: bold; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);">
                            Explore the Full Case Study →
                        </a>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-12 col-md-6 mb-4 text-center">
                    <div class="position-relative">
                        <img src="assets/images/SmartIDP/all_docs.png" class="img-fluid shadow-lg rounded-3" alt="Adesso Group HR Management" style=" border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-2">
            <div class="row align-items-center">
                <!-- Left Column: Heading -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="headline-box">
                        <h2 class="responsive-heading1 fw-bold">
                            <span class="gradient">Revolutionize HR</span> with <span class="gradient">SmartIDP and SAP</span> Integration
                        </h2>
                    </div>
                </div>

                <!-- Right Column: Image Section -->
                <div class="col-12 col-md-6 mb-4 text-center">
                    <div class="shadow-sm rounded-3">
                        <img src="assets/images/SmartIDP/intelligent-document-processing.png" alt="SmartIDP Integration with SAP" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>

            <!-- Text Content -->
            <div class="row">
                <!-- Left Column: Key Benefits 1 -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="content-text text-justify">
                        <ul class="list-unstyled">
                            <li><strong>Seamless Document Processing</strong>: With SmartIDP and SAP integration, automate the capture, extraction, and processing of documents—whether it's invoices, contracts, or HR documents—directly within SAP's ecosystem.</li>
                            <li><strong>Improved Accuracy & Reduced Errors</strong>: SmartIDP leverages advanced AI to extract data accurately from documents, minimizing human error and ensuring that all data is seamlessly fed into your SAP system for further processing.</li>
                            <li><strong>Faster Decision-Making</strong>: By automating document workflows, SmartIDP ensures faster data availability, leading to quicker decision-making across departments—from HR to finance and operations.</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column: Key Benefits 2 -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="content-text text-justify">
                        <ul class="list-unstyled">
                            <li><strong>End-to-End Automation</strong>: SmartIDP with SAP transforms traditional manual document management into a fully automated workflow. Automate everything from document capture to approval processes and data entry, increasing efficiency across the board.</li>
                            <li><strong>Enhanced Compliance & Security</strong>: With SAP’s robust security features, combined with SmartIDP's role-based access controls, your documents are not only managed efficiently but are also kept secure and compliant with industry regulations.</li>
                            <li><strong>Centralized Document Management</strong>: Integrating SmartIDP into SAP allows HR and other departments to manage and access documents from one central, digital repository, improving accessibility and collaboration across the organization.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




    </main>
</div>

<?php include_once("includes/footer.php"); ?>