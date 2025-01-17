<?php include_once("includes/header.php"); ?>
<!-- CSS -->
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
            style="background-image: url('assets/images/invoice_automation/inb8.png'); background-size: cover; background-position: 1% 15%; mb-3">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-lg-6 text-white">
                        <div class="mb-4">
                            <h2 class="subheadline text-uppercase" style="font-size: 2.5rem; font-weight: 700;">
                                <span class="text-white">SmartIDP Invoice Automation</span>
                            </h2>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i>Same-day processing of thousands of invoices
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i>Time savings of around 50% per invoice
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i>Automation of manual tasks
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle me-2"></i>Transparency across all invoice processes
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a class="btn rounded-pill px-3 text-white" href="contact.php"
                                style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid" id="article-43622">
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

                    <div class="card customer-logo d-flex justify-content-center align-items center"
                        style="border-radius: 12%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block"
                                alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3"
                                style="height: 60px;">
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

                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <!-- Logos (only Second set) -->

                    <div class="card customer-logo d-flex justify-content-center align-items center"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block"
                                alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3"
                                style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>



                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <!-- Logos (only Third set) -->
                    <div class="card customer-logo d-flex justify-content-center align-items center"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block"
                                alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3"
                                style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <!-- Logos (only Fourth set) -->
                    <div class="card customer-logo d-flex justify-content-center align-items center"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block"
                                alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" alt="Logo 3"
                                style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo"
                        style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10"
                                width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center my-4">
            <h2 class="mb-3 responsive-heading1 fw-bold"><span class="gradient">High-Speed </span>Invoice Processing
                with SmartIDP</h2>
            <p class="mb-4 fs-5">Automatically file inbound invoices in the correct digital supplier file. Let SmartIDP
                extract the invoice data with only one verification step required and retrieve invoices in seconds, just
                as easily as using Google Search.</p>
            <p class="mb-5">SmartIDP streamlines, optimizes, and automates your entire digital invoice workflow.</p>

            <div class="row row-cols-1 row-cols-md-3 g-2">
                <!-- Enhanced Productivity -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-rocket fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Boost Profitability with SmartIDP</h5>
                            <p class="card-text">Manage and process all your invoices digitally with SmartIDP: Reduce
                                processing times, accelerate decision-making, and eliminate costly errors in your
                                invoice workflows.</p>
                        </div>
                    </div>
                </div>
                <!-- Easier Compliance -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-check-circle fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Boost Efficiency with SmartIDP</h5>
                            <p class="card-text">Minimize the time and effort spent on managing invoice compliance.
                                Ensure full regulatory adherence, prevent errors, and avoid penalties with SmartIDP
                                Invoice Automation.</p>
                        </div>
                    </div>
                </div>

                <!-- Better Resource Deployment -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Enhance Liquidity Planning with SmartIDP</h5>
                            <p class="card-text">Automate invoice processing and management with SmartIDP, freeing up
                                valuable resources to focus on more strategic tasks such as service delivery, order
                                processing, and other critical business operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mod_article max-width-viewport block" id="article-43050">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800 -vertical-centered">
                    <div class="centered-wrapper-inner">
                        <div class="row">
                            <!-- Text Content Column -->
                            <div class="col-12 col-lg-6">
                                <div class="content-text">
                                    <h3>Ready to Simplify eInvoicing Compliance with SmartIDP?</h3>
                                    <div class="rte text-justify">
                                        <p>In an increasingly regulated world, SmartIDP eDocument Exchange provides a
                                            secure, cloud-based solution for receiving electronic invoices from over 30
                                            countries. This feature empowers organizations to effortlessly manage
                                            eInvoicing requirements while scaling their operations efficiently.
                                            SmartIDP eDocument Exchange is now available for SmartIDP Invoice Automation
                                            customers.</p>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button -left">
                                    <a class="button ce_rsce_oneo_button -left" href="contact.php">
                                        Check out eDocument Exchange
                                    </a>
                                </div>
                            </div>

                            <!-- Image Column (Visible on medium and larger screens) -->
                            <div class="col-12 col-lg-6 d-none d-lg-block d-flex justify-content-end align-content-center">
                                <div class="content-image">
                                    <figure>
                                        <img src="assets/images/invoice_automation/inv9.png"
                                        alt="eInvoicing Compliance" style="max-width: 140%;margin-left: 40px;border-radius: 20px;">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="article-43617">
                <div class="mod_article_inner">
                        <div class="text-center mb-2">
                            <!-- Headline Section -->
                            <h2 class="responsive-heading1 fw-bold pb-md-4">optimize your<span class="gradient">Invoice
                                    Processing with These SmartIDP Features</span></h2>
                        </div>
                        <!-- Icon Boxes Section -->
                        <div class="row g-3">
                            <!-- Box 1: Set your own standards -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card custom-card-shadow h-100 text-center">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold">Ensure Compliance & Accuracy with SmartIDP</h5><br>
                                        <p>SmartIDP automatically checks the formal requirements and content of all
                                            invoice formats, including PDF, EDI, XRechnung, ZUGFeRD, Factur-X, FacturaE,
                                            Peppol BIS Billing, and UBL, ensuring compliance and data accuracy across
                                            your invoice processing.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Box 2: Stay agile -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card custom-card-shadow h-100 text-center">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold">Verify Compliance & Accuracy with SmartIDP</h5><br>
                                        <p>With the SmartIDP mobile solution, you can approve and process invoices
                                            anytime, anywhere, ensuring seamless and efficient invoice management on the
                                            go.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Box 3: Identify Processors & Workflows -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card custom-card-shadow h-100 text-center">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold">Identify Processors & Workflows with SmartIDP</h5><br>
                                        <p>Leveraging the separation of duties principle, SmartIDP automatically
                                            identifies the appropriate process, assigns processors, and designates
                                            backup reviewers, ensuring seamless collaboration and compliance in your
                                            invoice processing workflows.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Box 4: Automate Invoice Posting -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card custom-card-shadow h-100 text-center">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold">Automate Invoice Posting with SmartIDP</h5><br>
                                        <p>SmartIDP fully processes invoices with purchase order references, including
                                            automatic posting, ensuring a streamlined and error-free invoicing workflow.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <section id="features" class="features section">
            <div class="container py-md-5">
                <h2 class="mb-3 responsive-heading1 fw-bold text-center pb-md-4"><span class="gradient"> 4 Steps to Efficient </span>Digital
                    Invoice Processing with SmartIDP</h2>
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out"
                        data-aos-delay="100">
                        <img src="assets/images/invoice_automation/inv10.webp" class="img-fluid"
                            alt="SmartIDP Group Collaboration" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="responsive-heading1 fw-bold">Streamlined Invoice Receipt with SmartIDP</h3>
                        <p class="fst-italic responsive-paragraph text-justify">
                            SmartIDP begins processing electronic invoices as soon as they arrive. With integrated interfaces,
                            SmartIDP automatically accesses the digital inbox and retrieves incoming invoices. For paper-based
                            invoices, SmartIDP ensures they are scanned in compliance with regulatory requirements before being
                            processed.

                            SmartIDP is extendable to support company-wide inbound mail processing and can even evolve into a
                            comprehensive ECM platform </p>
                    </div>
                </div>
                <div class="row gy-4 align-items-center features-item py-5">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="assets/images/invoice_automation/inv11.png" class="img-fluid mb-10"
                            alt="SmartIDP Collaboration Features" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-7 order-2 order-md-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="responsive-heading1 fw-bold">Automated Data Extraction with SmartIDP </h3>
                        <p class="fst-italic responsive-paragraph text-justify">
                            SmartIDP features integrated OCR capabilities that efficiently recognize, capture, and interpret all
                            essential invoice data. When an invoice meets the EN 1631 standard, SmartIDP automatically
                            categorizes and stores it in the corresponding digital supplier file.
                        </p>
                        <p class="fst-italic responsive-paragraph text-justify">
                            Supports various formats such as paper, PDF, email, and EN 16931-compliant eInvoices including
                            XRechnung, ZUGFeRD, and Factur-X. It distinguishes between standard PDFs and structured eInvoice
                            formats.
                        </p>
                        <p class="fst-italic responsive-paragraph text-justify">
                            SmartIDP handles invoices with and without a PO reference (including automatic posting), as well as
                            single, partial, collective, and final invoices. The system's on-the-fly learning continuously
                            improves the recognition and processing of invoice documents, ensuring accuracy and efficiency.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out">
                        <img src="assets/images/invoice_automation/inv5.png" class="img-fluid"
                            alt="SmartIDP Document Management" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-7 aos-init aos-animate" data-aos="fade-up">
                        <h3 class="responsive-heading1 fw-bold">Automated Invoice Verification with SmartIDPnced</h3>
                        <p class="fst-italic responsive-paragraph text-justify">SmartIDP automatically checks that inbound
                            invoices are complete and contain all required information. Any missing or incorrect details are
                            flagged immediately, allowing for quick action to resolve discrepancies (e.g., between order
                            confirmation) and prevent potential production delays.</p>
                        <p class="fst-italic responsive-paragraph text-justify">SmartIDP automatically checks that inbound
                            invoices are complete and contain all required information. Any missing or incorrect details are
                            flagged immediately, allowing for quick action to resolve discrepancies (e.g., between order
                            confirmation) and prevent potential production delays.</p>
                        <ul class="responsive-paragraph text-justify">
                            <li><i class="bi bi-check"></i><span> Supports all types of invoice release processes</span></li>
                            <li><i class="bi bi-check"></i><span> Deep integration with SAP and compatibility with any ERP and
                                    financial accounting system</span></li>
                            <li><i class="bi bi-check"></i><span> Supports multiple currencies and up to 13 languages</span>
                            </li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out">
                        <img src="assets/images/invoice_automation/invoi1.webp" class="img-fluid"
                            alt="SmartIDP Group Member Features" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-7 order-2 order-md-1 aos-init aos-animate" data-aos="fade-up">
                        <h3 class="responsive-heading1 fw-bold">Efficient Invoice Release with SmartIDP</h3>
                        <p class="fst-italic responsive-paragraph text-justify">
                            SmartIDP transfers the verified invoice into a release workflow, using criteria such as cost center,
                            invoice items, and amounts to determine the responsible party for approval. The multi-stage release
                            workflow ensures compliance with internal controls, including the separation of duties. A deputy
                            rule allows alternative approvers to step in quickly, ensuring smooth and uninterrupted invoice
                            processing to prevent delays.
                        </p>
                        <ul class="responsive-paragraph text-justify">
                            <li><i class="bi bi-check"></i><span> Automatically define processors and escalation
                                    mechanisms</span></li>
                            <li><i class="bi bi-check"></i><span> Multi-stage release workflow with delegation and deputy
                                    rules</span></li>
                        </ul>

                    </div>
                </div><!-- Features Item -->
            </div>
        </section>
        <div class="container text-center">
            <h2 class="mb-4 responsive-heading1 fw-bold"><span class="gradient">Benefits of </span>Digital Invoice Processing
                with SmartIDP</h2>
            <p class="mb-4 fs-5">Digitalizing and automating your invoice processing with SmartIDP offers significant potential:
                it accelerates processes and reduces costs. With SmartIDP, fewer personnel are needed to handle invoices, errors
                are minimized, and full transparency is provided for better liquidity planning. Empower your teams to post
                invoices more efficiently, ensuring you can take advantage of early payment discount opportunities and enhance
                your overall financial performance.</p>
            <div class="row">
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="responsive-heading1 fw-bold"><i class="fas fa-check-circle me-2"></i>Faster Invoice Processing, Enhanced Quality with SmartIDP</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            Automate Invoice Reading, Data Capture, Verification, and Posting with SmartIDP
                            SmartIDP automates the entire invoice process from reading and data capture to verification and posting reducing errors and ensuring greater efficiency in your workflows.
                            advantage of cash discounts and optimize your financial operations.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="responsive-heading1 fw-bold"><i class="fas fa-check-circle me-2"></i>Reduce Costs with SmartIDP Invoice Automation</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            Process More Invoices with Fewer Resources and Capture Cash Discounts with SmartIDP
                            SmartIDP allows you to process a higher volume of invoices with fewer resources, enabling your team to take advantage of early payment discounts and improve overall financial efficiency.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="responsive-heading1 fw-bold"><i class="fas fa-check-circle me-2"></i>Optimize Resource Utilization with SmartIDP</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            Reduce Manual Tasks and Empower Your Team to Collaborate with Financial Partners using SmartIDP
                            SmartIDP automates routine invoice processes, freeing up your team to focus on strategic tasks and strengthen relationships with financial partners.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="responsive-heading1 fw-bold"><i class="fas fa-check-circle me-2"></i>Real-Time Liquidity Planning with SmartIDP</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            Enhance Liquidity Planning with Real-Time Invoice Status Updates via SmartIDP
                            SmartIDP provides constantly updated invoice status overviews, ensuring accurate and timely liquidity planning for better cash flow management.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mod_article max-width-viewport block" id="article-43050">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800 -vertical-centered">
                    <div class="centered-wrapper-inner">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="content-text">
                                    <h3>SmartIDP for Invoice Automation</h3>
                                    <div class="rte text-justify">
                                        <p>Looking to Accelerate Your Invoice Management and Processing with Accuracy?
                                            SmartIDP automates your invoice processes, efficiently extracting relevant data and detecting errors in real-time. It enables you to analyze and make informed decisions based on document information, speeding up daily operations and enhancing compliance across your organization.</p>
                                        <h3>want to learn more about SmartIDP?</h3>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button -left">
                                    <a class="button ce_rsce_oneo_button -left" href="contact.php">
                                        Experience SmartIDP
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 d-none d-lg-block d-flex justify-content-end align-content-center">
                                <div class="content-image">
                                    <figure>
                                        <img src="assets/images/invoice_automation/inv6.png" alt="Invoice Automation" style="max-width: 140%;margin-left: 40px;border-radius: 20px;">
                                    </figure>
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