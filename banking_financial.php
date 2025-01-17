<?php include_once("includes/header.php"); ?>
<style>
    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
    }

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

    @media (max-width: 768px) {
        #article-43622 {
            height: 60vh;
            /* Reduce height on smaller screens */
        }

        .text-body-emphasis {
            font-size: 1.5rem;
            /* Adjust font size for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .text-body-emphasis {
            font-size: 1.2rem;
            /* Further reduce font size for very small screens */
        }
    }

    @media (max-width: 768px) {
        #article-43622 {
            background-position: center;
            /* Center the background image on smaller screens */
            padding-top: 3rem;
            /* Add padding to the top for spacing */
        }

        .text-white h1 {
            font-size: 1.8rem;
            /* Adjust heading font size on smaller screens */
        }

        .text-white p {
            font-size: 1rem;
            /* Adjust paragraph font size on smaller screens */
        }

        .btn {
            font-size: 0.9rem;
            /* Adjust button font size */
            padding: 12px 30px;
            /* Adjust button padding */
        }
    }

    @media (max-width: 480px) {
        .text-white h1 {
            font-size: 1.5rem;
            /* Further reduce heading size for very small screens */
        }

        .text-white p {
            font-size: 0.9rem;
            /* Further reduce paragraph text size */
        }

        .btn {
            font-size: 0.8rem;
            /* Reduce button font size further */
            padding: 10px 25px;
            /* Adjust button padding */
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
    @media (max-width: 768px) {
        #article-43622{
            background-position: center;

        }
    }
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">
        <!-- Hero Section -->
        <div class="container-fluid cover" id="article-43622" style="background-image: url('assets/images/banking_financial/fin4.png'); background-size: cover; background-position: center center; height: 60vh;">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row w-100 justify-content-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-12 text-white text-center">
                        <div class="mb-4">
                            <h2 class="subheadline text-uppercase fw-bold fs-1 fs-md-2 fs-lg-3 text-whitext-dark-emphasiste" style="line-height: normal;">
                                SmartIDP for Banks and Financial Services: Revolutionizing Document and Data Management
                            </h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-3" id="article-436221" style="background-color: #eaedfa;">
            <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
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

        <div class="container text-center my-5">
            <h2 class="mb-4 responsive-heading1 fw-bold"><span class="gradient">SmartIDP</span> A Modern Platform for Enhanced <span class="gradient"> Efficiency and Improved</span> Customer Satisfaction</h2>
            <p class="mb-4 fs-5">The volume of documents managed by banks and financial service providers continues to grow steadily, including loan applications, risk analyses, contracts, credit ratings, real estate assessments, stock settlements, and more. SmartIDP streamlines these documents, processes, and files within business workflows. By automating document management, SmartIDP helps organizations boost efficiency and enhance customer satisfaction through faster and more accurate case processing.</p>
            <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                <!-- Enhanced Productivity -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-users-gear  fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Smarter, AI-Driven Customer Service with SmartIDP</h5>
                            <p class="card-text">Digitally manage and process all your documents with SmartIDP: Streamline workflows, accelerate decision-making, and minimize errors to reduce costs.</p>
                        </div>
                    </div>
                </div>

                <!-- Easier Compliance -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-person-skating fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Fast, Automated Loan Processing with SmartIDP</h5>
                            <p class="card-text">Accelerate loan inquiries with SmartIDP by consolidating all necessary documents into comprehensive credit files, ensuring full process transparency and efficiency.</p>
                        </div>
                    </div>
                </div>

                <!-- Better Resource Deployment -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-tower-broadcast fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Optimized Resource Utilization with SmartIDP</h5>
                            <p class="card-text">Make work easier for employees with SmartIDP by automating manual tasks such as data capture, document filing, credit agreement preparation, and deadline management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_article max-width-viewport block" id="article-44383">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800">
                    <div class="centered-wrapper-inner">
                        <!-- Content Section -->
                        <div class="content-text">
                            <h3 class="fw-bold">SmartIDP in Banking and Financial Services</h3>
                            <div class="rte">
                                <p>Feeling overwhelmed by information overload? SmartIDP helps you work smarter, faster, and more efficiently. Managing large volumes of customer data can be challenging, but SmartIDP ensures error-free data entry and streamlines key processes like loan management, so no steps are missed. Let SmartIDP be your trusted solution for smoother operations.</p>
                                <p>Want to learn more about smartIDP?</p>
                            </div>
                        </div>

                        <!-- Button Section to Experience smartIDP -->
                        <div class="button-box ce_rsce_oneo_button -left">
                            <a class="button ce_rsce_oneo_button -left" href="contact">
                                Experience smartIDP
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div id="article-43617">
                <div class="mod_article_inner">
                    <div class="container">
                        <div class="text-center mb-5">
                            <!-- Headline Section -->
                            <h2 class="responsive-heading1 fw-bold">Solutions <span class="gradient">for Banks & Financial</span> Service Providers</h2>
                        </div>
                        <!-- Icon Boxes Section -->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                            <!-- Box 1: Set your own standards -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fa-solid fa-bars-progress fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>SmartIDP for Loan & Lease Management</h5>
                                    <p>SmartIDP consolidates electronic files for loans, leases, and property financing, bringing together all relevant documents and customer data to streamline the decision-making process.</p>
                                </div>
                            </div>

                            <!-- Box 2: Stay agile -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fa-solid fa-money-bill fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>SmartIDP Integration with Banking Systems</h5>
                                    <p>SmartIDP allows seamless transfer of information from integrated banking applications to index electronic credit files, contract documents, and more, ensuring easy retrieval of credit files directly from the core banking system.</p>
                                </div>
                            </div>

                            <!-- Box 3: Create context -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fa-solid fa-folder-open fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>SmartIDP: Streamlined Document Management</h5>
                                    <p>SmartIDP enables location-independent and efficient loan processing, automated digital statements, monthly payment plans, and more, all through secure customer portals.</p>
                                </div>
                            </div>

                            <!-- Box 4: Combine processes -->
                            <div class="col">
                                <div class="card custom-card-shadow h-100 text-center p-2">
                                    <div class="icon m-2">
                                        <i class="fa-regular fa-circle-check fa-3x custom-icon my-2 gradient"></i>
                                    </div>
                                    <h5>SmartIDP: GRC Solutions</h5>
                                    <p>With SmartIDP, publishing and managing risk management specifications and official documents is simple and efficient, helping you meet quality management requirements with ease.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <main role="main" class="main-content mb-5">
                <div class="container-fluid p-3 img-fluid" id="article-43622" style="background-image: url('assets/images/document_management/cove_pic.png'); background-size:cover; background-position: center;">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Left Column (Text Content) -->
                            <div class="col-lg-8 text-white py-md-5">
                                <div class="mb-4">
                                    <h1 class="display-3 text-white  fw-bold ">"Building a Lean, Modern, and Future-Proof Business with SmartIDP"</h1>
                                    <h3 class="text-white">"Your Essential Guide to SmartIDP Shows You:"</h3>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="fas fa-check-circle me-2"></i> "How SmartIDP Helps Overcome the Biggest Challenges in Banking and Insurance".
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="fas fa-check-circle me-2"></i>Key Steps to Modernization and the Benefits of AI and Automation with SmartIDP".
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="fas fa-check-circle me-2"></i> "Success Stories of 4 Digital Pioneers – How Our Banking and Insurance Customers Modernized with SmartIDP".
                                    </li>
                                </ul>

                                <div class="mt-4">
                                    <a class="btn rounded-pill px-4 text-white fw-bold" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="container" id="article-40037 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-lg-12 text-center mb-2">
                        <h2 class="responsive-heading1 fw-bold">Compliance & Data Protection <span class="gradient"> – SmartIDP Has You Covered</span></h2>
                        <p>"Risk management guidelines (Governance, Risk, and Compliance - GRC) not only define how financial processes should be managed but also enforce strict reporting standards. SmartIDP simplifies the publication and management of specification documents and related documentation for banks and financial service providers. With SmartIDP, you can also ensure verifiable compliance with data protection regulations, including the EU GDPR, backed by numerous certifications that demonstrate our commitment to security and compliance."</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-md-3" id="best-practice-smartidp">
            <hr>
            <h2 class=" mb-4 fw-bold">Is Your Legacy System Limiting Your Efficiency? Upgrade to SmartIDP for Seamless Transformation
            </h2>
            <section class="row align-items-center">
                <!-- Text Section -->
                <div class="col-md-6">
                    <blockquote class="">
                        <p>Discontinued support, scalability limitations, and security risks — SmartIDP helps you break free from the constraints of legacy systems, enabling you to retire outdated, inefficient applications. Our proven migration strategy guides you to the scalable, flexible SmartIDP platform. You have the flexibility to choose how your solution is deployed: on-premises, in the cloud, or through a hybrid model. Whether you’re migrating ten gigabytes or hundreds of terabytes, SmartIDP ensures a smooth and seamless transition.</p>
                        <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold
                    " style="background-color: #0090f9; color: white; padding: 10px 30px; text-decoration: none; 
              border-radius: 50px;">Learn How Migration Works with SmartIDP</a>
                    </blockquote>
                </div>

                <!-- Image Section -->
                <div class="col-md-6 py-3 text-center">
                    <img src="assets/images/banking_financial/fin10.jpeg" class="img-fluid" alt="Logistics" style="max-width: 95%;border-radius: 35px; height:50%">
                </div>
            </section>
            <hr>
        </div>

        <div class="container-fluid">
            <div id="article-43617">
                <div class="mod_article_inner">
                    <div class="container-fluid py-5">
                        <div class="text-center">
                            <!-- Headline Section -->
                            <h2 class="responsive-heading1 fw-bold">Boost Productivity <span class="gradient">with the SmartIDP Platform</span></h2>
                            <!-- Icon Boxes Section -->
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                                <!-- Box 1: Make Smarter Decisions -->
                                <div class="col">
                                    <div class="card custom-card-shadow px-2 h-100 text-center">
                                        <div class="icon m-2">
                                            <i class="fa-solid fa-play custom-icon fa-3x me-3 gradient"></i>
                                        </div>
                                        <h5>Make Smarter Decisions with SmartIDP</h5>
                                        <p>"Systematically integrate information from core banking systems, bank procedures, ERP, and CRM with SmartIDP to enhance decision-making and accelerate information discovery."</p>
                                    </div>
                                </div>

                                <!-- Box 2: Reduce Response Times -->
                                <div class="col">
                                    <div class="card custom-card-shadow px-2 h-100 text-center">
                                        <div class="icon m-2">
                                            <i class="fa-brands fa-soundcloud custom-icon my-2 fa-3x me-3 gradient"></i>
                                        </div>
                                        <h5>"Reduce Response Times with SmartIDP"</h5>
                                        <p>"Automate data entry, manage incoming mail, emails, and online form submissions digitally, and seamlessly route them to the right person with SmartIDP."</p>
                                    </div>
                                </div>

                                <!-- Box 3: Optimized Verification -->
                                <div class="col">
                                    <div class="card custom-card-shadow px-2 h-100 text-center">
                                        <div class="icon m-2">
                                            <i class="fa-solid fa-check fa-3x custom-icon my-2 gradient"></i>
                                        </div>
                                        <h5>"Optimized Verification & Approval Processes with SmartIDP"</h5>
                                        <p>"Verify and approve loan applications, overdraft extensions, property financing, and more much faster with SmartIDP’s automated approval processes, seamlessly linked to the necessary supporting documents."</p>
                                    </div>
                                </div>

                                <!-- Box 4: Mitigate Legal Risks -->
                                <div class="col">
                                    <div class="card custom-card-shadow px-2 h-100 text-center ">
                                        <div class="icon m-2">
                                            <i class="fa-brands fa-stack-overflow fa-3x custom-icon my-2 gradient"></i>
                                        </div>
                                        <h5>"Mitigate Legal Risks with SmartIDP"</h5>
                                        <p>"Automate audit-proof document and transaction data archiving with SmartIDP, ensuring verifiable compliance with retention periods and data protection regulations."</p>
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