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

</style>
<div class="content-wrapper">
    <main role="main" class="main-content">

        <div class="container-fluid py-5" id="article-43622"
            style="background-image: url('assets/images/banking_financial/fin4.png'); 
                    background-size: cover; background-position: center; height: 80vh; position: relative;">
            <h2 class="subheadline text-uppercase d-flex justify-content-start">
                <span class="text-body-emphasis" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 2rem; text-align: center; color: white;">
                    SmartIDP for Banks and Financial Services
                </span>
            </h2>
        </div>

        <div class="container-fluid pt-3" id="article-43622" style="background-color: #eaedfa;">
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
        <div class="container">
            <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800 -vertical-centered">
                <div class="centered-wrapper-inner">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="content-text">
                                <h3>SmartIDP in Banking and Financial Services </h3>
                                <div class="rte text-justify">
                                    <p>Feeling overwhelmed by information overload? SmartIDP helps you work smarter, more efficiently, and faster. Managing large volumes of customer data can be challenging, but SmartIDP ensures error-free data capture and streamlines your key processes, like loan management, to ensure nothing is overlooked. With SmartIDP, you have the support you need to stay organized and efficient.</p>
                                    <h3>Want to learn more about SmartIDP?</h3>
                                </div>
                            </div>
                            <div class="button-box ce_rsce_oneo_button -left">
                                <a class="button ce_rsce_oneo_button -left" href="contact.php">
                                    Experience SmartIDP
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-image">
                                <figure>
                                    <img src="assets/images/banking_financial/fin5.png" class="img-fluid" alt="SmartIDP in Banking">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container py-3" id="article-43660 ">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Headline Box -->
                    <div class="headline-box text-center mb-4">
                        <h2 class="headline -extra-large fw-bold" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">
                            <span class="gradient">Solutions for</span> <span class="gradient">Banks & Financial Service</span> Providers
                        </h2>
                    </div>

                    <!-- Icon Boxes Section -->
                   <section class="row">
    <!-- Icon Box 1 -->
    <div class="col-12 col-md-6 mb-4">
        <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
            <div class="card-body d-flex align-items-center">
                <i class="fa-solid fa-file-alt fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                <div>
                    <h3 class="card-title">Loan & Lease Files with SmartIDP</h3>
                    <p class="card-text text-justify">SmartIDP consolidates electronic files for loans, leases, or property financing, bringing together all relevant documents and customer data to support informed decision-making.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Box 2 -->
    <div class="col-12 col-md-6 mb-4">
        <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
            <div class="card-body d-flex align-items-center">
                <i class="fa-solid fa-plug fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                <div>
                    <h3 class="card-title">Integration in Bank Systems</h3>
                    <p class="card-text text-justify">SmartIDP enables seamless transfer of information from integrated core applications to index electronic credit files, contract files, and more, while also allowing easy retrieval of credit files from the primary system.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Box 3 -->
    <div class="col-12 col-md-6 mb-4">
        <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
            <div class="card-body d-flex align-items-center">
                <i class="fa-solid fa-cogs fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                <div>
                    <h3 class="card-title">Manage and Process Documents with SmartIDP</h3>
                    <p class="card-text text-justify">SmartIDP enables location-independent and efficient processing of loans, automated digital statements of account, monthly payment plans, and more, all through secure customer portals.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Box 4 -->
    <div class="col-12 col-md-6 mb-4">
        <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
            <div class="card-body d-flex align-items-center">
                <i class="fa-solid fa-shield-alt fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                <div>
                    <h3 class="card-title">Governance, Risk & Compliance (GRC) with SmartIDP</h3>
                    <p class="card-text text-justify">With SmartIDP, publishing and managing specifications and official documents for risk management becomes easy and efficient, helping you meet quality management requirements seamlessly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <main role="main" class="main-content mb-5">
                <div class="container-fluid py-3 cover" id="article-43622" style="background-image: url('assets/images/document_management/cove_pic.png'); background-size: cover; background-position: center center;">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Left Column (Text Content) -->
                            <div class="col-lg-8 text-white">
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
                                    <a class="btn rounded-pill px-4 text-white fw-bold" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Download Your Free Copy</a>
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
            <h2 class=" mb-4">Is Your Legacy System Limiting Your Efficiency? Upgrade to SmartIDP for Seamless Transformation
            </h2>
            <section class="row align-items-center">
                <!-- Text Section -->
                <div class="col-md-6">
                    <blockquote class="">
                        <p>Discontinued support, scalability limitations, and security risks — SmartIDP helps you break free from the constraints of legacy systems, enabling you to retire outdated, inefficient applications. Our proven migration strategy guides you to the scalable, flexible SmartIDP platform. You have the flexibility to choose how your solution is deployed: on-premises, in the cloud, or through a hybrid model. Whether you’re migrating ten gigabytes or hundreds of terabytes, SmartIDP ensures a smooth and seamless transition.</p>
                    </blockquote>
                    <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 10px 30px; text-decoration: none; 
              border-radius: 50px;">Learn How Migration Works with SmartIDP</a>
                </div>

                <!-- Image Section -->
                <div class="col-md-6 py-3 text-center">
                    <img src="assets/images/banking_financial/fin10.jpeg" class="img-fluid" alt="Logistics" style="max-width: 95%;border-radius: 35px; height:50%">
                </div>
            </section>
            <hr>
        </div>

        <div class="container">
            <div id="article-43617">
                <div class="mod_article_inner">
                    <div class="container py-5">
                        <div class="text-center mb-5">
                            <!-- Headline Section -->
                            <h2 class="responsive-heading1 fw-bold">Boost Productivity <span class="gradient">with the SmartIDP Platform</span></h2>
                            <!-- Icon Boxes Section -->
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                                <!-- Box 1: Make Smarter Decisions -->
                                <div class="col">
                                    <div class="card custom-card-shadow h-100 text-center">
                                        <div class="icon m-2">
                                            <i class="fa-solid fa-play custom-icon fa-3x me-3 gradient"></i>
                                        </div>
                                        <h5>Make Smarter Decisions with SmartIDP</h5>
                                        <p>"Systematically integrate information from core banking systems, bank procedures, ERP, and CRM with SmartIDP to enhance decision-making and accelerate information discovery."</p>
                                    </div>
                                </div>

                                <!-- Box 2: Reduce Response Times -->
                                <div class="col">
                                    <div class="card custom-card-shadow h-100 text-center">
                                        <div class="icon m-2">
                                            <i class="fa-brands fa-soundcloud custom-icon my-2 fa-3x me-3 gradient"></i>
                                        </div>
                                        <h5>"Reduce Response Times with SmartIDP"</h5>
                                        <p>"Automate data entry, manage incoming mail, emails, and online form submissions digitally, and seamlessly route them to the right person with SmartIDP."</p>
                                    </div>
                                </div>

                                <!-- Box 3: Optimized Verification -->
                                <div class="col">
                                    <div class="card custom-card-shadow h-100 text-center">
                                        <div class="icon m-2">
                                            <i class="fa-solid fa-check fa-3x custom-icon my-2 gradient"></i>
                                        </div>
                                        <h5>"Optimized Verification & Approval Processes with SmartIDP"</h5>
                                        <p>"Verify and approve loan applications, overdraft extensions, property financing, and more much faster with SmartIDP’s automated approval processes, seamlessly linked to the necessary supporting documents."</p>
                                    </div>
                                </div>

                                <!-- Box 4: Mitigate Legal Risks -->
                                <div class="col">
                                    <div class="card custom-card-shadow h-100 text-center ">
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