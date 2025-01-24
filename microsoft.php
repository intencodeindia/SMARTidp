<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        /* -webkit-background-clip: text; */
        color: transparent;
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

    .icon-box-circle1 {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        width: 80px;
        /* Adjusted width */
        height: 60px;
        /* Adjusted height */
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-right: 15px;
        /* Space between icon and text */
    }

    .icon-box-item {
        display: flex;
        align-items: center;
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
</style>
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">
        <!-- Hero Section -->
        <div class="container-fluid cover" id="article-43622" style="background-image: url('assets/images/microsoft/1.jpg'); background-size: cover; background-position: center center; height: 60vh;">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row w-100 justify-content-center">
                    <!-- Left Column (Text Content) -->
                    <div class="col-12 text-white text-center">
                        <div class="mb-4">
                            <h2 class="subheadline text-uppercase fw-bold fs-1 fs-md-2 fs-lg-3 text-white" style="line-height: normal;">
                                SmartIDP Integration: Enhancing Machinery Performance and Accelerating Transportation
                            </h2>
                        </div>
                        <div class="mt-4">
                            <a class="btn rounded-pill px-4 text-white fw-bold" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Section -->
        <div class="container mt-5">
            <h2 class="text-center mb-5 fw-bold"><span class="gradient">SmartIDP Integration</span> with Microsoft</h2>
            <div class="row text-center mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title fw-bold">Secure Document Processing</h5>
                            <ul class="list-unstyled text-left">
                                <li>Automate secure document processing across Microsoft applications</li>
                                <li>Ensure compliance and enhance data security</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <i class="fas fa-cogs fa-lg"></i>
                            </div>
                            <h5 class="card-title fw-bold">Efficient Document Handling</h5>
                            <ul class="list-unstyled text-left">
                                <li>Reduce manual effort with intelligent document classification</li>
                                <li>Improve productivity within the Microsoft environment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 custom-card-shadow">
                        <div class="card-body">
                            <div class="icon-box-circle rounded-circle mb-3">
                                <i class="fas fa-sync-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title fw-bold">End-to-End Automation</h5>
                            <ul class="list-unstyled text-left">
                                <li>Seamlessly integrate with Microsoft Office, Outlook, and SharePoint</li>
                                <li>Automate document workflows and processes from start to finish</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center py-5">
            <hr>
            <h2 class="fw-bold mb-3"><span class="gradient">Experience smartIDP Live!</span></h2>
            <p class="text-dark fw-bold">Join a live demo or schedule a personalized session at your workplace.</p>
            <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 15px 30px; text-decoration: none; 
              border-radius: 50px;">Request live Demo</a>
            <hr>
        </div>

        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-undo-alt fa-lg"></i> <!-- Changed icon to represent "360° view" -->
                        </div>
                        <h3 class="fw-bold">360° view of all projects</h3>
                        <p>Systematically combine information from Microsoft & business applications for a complete overview to expedite decision-making and provide accurate, up-to-date information.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-gavel fa-lg"></i>
                        </div>
                        <h3 class="fw-bold">Eliminate legal gray areas</h3>
                        <p>Automate your email, document & SharePoint content archiving and effortlessly prove compliance with retention periods and data protection requirements.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-laptop-house fa-lg"></i>
                        </div>
                        <h3 class="fw-bold">Familiar work environment</h3>
                        <p>You continue working as normal in the standard Office applications and use the integrated ECM functions to easily and intuitively file documents, search for content, and more.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-tasks fa-lg"></i>
                        </div>
                        <h3 class="fw-bold">Efficient, error-free digital processes</h3>
                        <p>Put an end to delays caused by switching between media & systems and benefit from transparent, automated processes.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-md-3">
            <h2 class="text-center fw-bold mb-3">These companies have already <span class="gradient">integrated smartIDP</span> into their <span class="gradient">Microsoft systems</span></h2>
            <hr>
            <div class="customer-logos-marquee">
                <div class="customer-logos">
                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 12%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" loading="lazy" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" loading="lazy" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150" height="60" loading="lazy" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" height="60"  loading="lazy" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <!-- Logos (only Second set) -->

                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" loading="lazy" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block"loading="lazy" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150"loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150"loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <!-- Logos (only Third set) -->
                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" loading="lazy" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" loading="lazy" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" alt="Logo 7" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" height="60" loading="lazy" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" height="60" loading="lazy" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <!-- Logos (only Fourth set) -->
                    <div class="card customer-logo d-flex justify-content-center align-items center" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo_inten.png" class="d-block" loading="lazy" alt="Logo 2">
                        </div>
                    </div>

                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/egslogo.png" class="d-block" loading="lazy" alt="Logo 3" style="height: 60px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/Logo1@2x.png" class="d-block" loading="lazy" alt="Logo 7" width="150" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo-exl.png" class="d-block" alt="Logo 9" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/3@4x.png" class="d-block" alt="Logo 8" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                    <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                        <div class="card-body d-flex justify-content-center align-items center">
                            <img src="<?php echo BASE_PATH; ?>assets/images/sidp.png" class="d-block" alt="Logo 10" width="150" loading="lazy" height="60" style="width: 150px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="container py-md-5">
            <div class="row align-items-center">
                <!-- Left Column: Headline -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="headline-box">
                        <h2 class="display-4 fw-bold">Get more out of your documents, emails, and more</h2>
                    </div>
                </div>

                <!-- Right Column: Content Text -->
                <div class="col-lg-6">
                    <div class="content-text">
                        <p>Emails, presentations, costings, contracts, cover letters: Do you manage an overwhelming array of documents and data from Microsoft Office, Outlook, and SharePoint? It’s a challenge to keep track of file names, storage locations, document versions, and email arrangements. With smartIDP, you can enhance Microsoft’s capabilities with transparent processes, powerful search tools, and secure archiving for your business-critical documents.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-md-3" id="best-practice-smartidp">
            <hr>
            <h2 class="text-center mb-4 fw-bold">Best Practice
            </h2>
            <section class="row align-items-center">
                <!-- Text Section -->
                <div class="col-md-6">
                    <blockquote class="">
                        <p>Our interconnected eFiles act as central access points to documents from a range of sources, including SAP documents, emails, MS Office, and more, helping us improve operations in various areas, such as customer service.</p>
                    </blockquote>
                    <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 10px 30px; text-decoration: none; 
              border-radius: 50px;">Learn More</a>
                </div>

                <!-- Image Section -->
                <div class="col-md-6 py-3 text-center">
                    <img src="assets/images/microsoft/12.png" class="img-fluid" loading="lazy"  alt="Logistics" style="max-width: 65%;border-radius: 25px;">
                </div>
            </section>
            <hr>
        </div>

        <div class="container py-md-5" id="article-29420">
            <div class="row align-items-center">
                <!-- Left Column: Headline -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="display-4 fw-bold">A Better Overview & More Structure for Microsoft Office</h2>
                </div>

                <!-- Right Column: Content Text -->
                <div class="col-md-6">
                    <p>Are your Word documents, Excel lists, and PowerPoint presentations scattered across local file directories? It’s easy to lose track of what’s where. With smartIDP, we streamline your document management, providing a full overview and organized structure. Thanks to version control, changes stay traceable. In eFiles, you can quickly access related information connected to your documents. The practical DMS functions from smartIDP are integrated directly into your Microsoft applications:</p>
                    <ul>
                        <li><strong>Add-in</strong>: Search and manage documents directly from Microsoft applications</li>
                        <li><strong>Annotations</strong>: Collaborate more effectively and coordinate documents</li>
                        <li><strong>Workflows</strong>: Approvals, follow-ups, and deadline reminders</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" id="article-29421">
            <h2 class="text-left mb-4 fw-bold"><span class="gradient">Structured Email Management</span> for Microsoft Outlook</h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Audit-proof email archiving -->
                            <div class="icon-boxes-item mb-4  -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-archive fa-lg"></i></span>
                                <h3 class="fw-bold">Audit-proof Email Archiving</h3>
                                <p>Archive emails and attachments from Microsoft Outlook with smartIDP's email archiving, ensuring redundancy-free and audit-compliant storage: simply via drag-and-drop, automatically, or using journal archiving. This ensures your correspondence is secure while reducing the load on your mailboxes.</p>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Structured, company-wide filing -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-folder-open fa-lg"></i></span>
                                <h3 class="fw-bold">Structured, Company-wide Filing</h3>
                                <p>Share emails across departments and teams with smartIDP: smartIDP eFiles bundle all information about a business case, such as inquiries, orders, and contracts. With the integrated add-in, filing and searching can be done directly from Outlook.</p>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Integrate processes in Outlook -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-plug fa-lg"></i></span>
                                <h3 class="fw-bold">Integrate Processes in Outlook</h3>
                                <p>Automate your inbound mail processing with smartIDP. Emails, correspondence, applications, online forms, and more are captured, classified, and forwarded to the appropriate individuals for processing. For managing all other tasks, use smartIDP BPM.</p>
                            </div>
                        </div>

                    </section>
                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/microsoft/email.png" alt="Microsoft Outlook Integration" loading="lazy" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="mod_article max-width-viewport block" id="article-29425">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start">
                    <div class="centered-wrapper-inner">
                        <!-- Headline -->
                        <div class="headline-box -align-left ce_rsce_oneo_headline_box">
                            <h2 class="fw-bold"><span class="gradient">Microsoft Dynamics</span> is Even More Dynamic</h2>
                        </div>
                        <!-- Content Text -->
                        <div class="content-text">
                            <div class="rte">
                                <p>smartIDP rounds out Microsoft <strong>Dynamics 365 Sales, Dynamics 365 Finance</strong> and <strong>Dynamics 365 Supply Chain Management</strong>.</p>
                            </div>
                        </div>
                        <!-- Icon Boxes Section -->
                        <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                            <!-- Archive Data & Documents -->
                            <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-archive fa-lg"></i></span>
                                <h3>Archive Data & Documents</h3>
                                <div class="icon-boxes-item-text">
                                    <p>Print lists, invoices, quotations: Inbound and outbound documents from Microsoft Dynamics 365 are archived automatically with smartIDP. For example, smartIDP imports customer or vendor master data and stores everything in an audit-proof manner.</p>
                                </div>
                            </div>
                            <!-- Find All Information -->
                            <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-search fa-lg"></i></span>
                                <h3>Find All Information</h3>
                                <div class="icon-boxes-item-text">
                                    <p>smartIDP provides you with direct access in Microsoft Dynamics to all the relevant information about a transaction. It's easy to switch back and forth between, for example, a smartIDP vendor or customer file and Dynamics at the click of a button.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="mod_article max-width-viewport block" id="article-29427">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
                    <div class="centered-wrapper-inner">
                        <!-- Article Content Section -->
                        <div class="rs-columns ce_rs_columns_start">

                            <!-- Left Column: Headline and Content -->
                            <div class="ce_rs_column_start rs-column -large-col-3-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                <div class="headline-box -align-left ce_rsce_oneo_headline_box">
                                    <h2 class="fw-bold">Go for Gold</h2>
                                </div>
                                <div class="content-text">
                                    <div class="rte">
                                        <p>smartIDP is a long-standing <strong>certified Gold Partner</strong> of Microsoft: This is the best prerequisite for your integration. Only 1% of all Microsoft partners have achieved Gold status — and smartIDP has been a Gold Partner for over a decade. This guarantees that your smartIDP solutions run with every Microsoft release and ensures both systems are seamlessly integrated.</p>
                                        <p>smartIDP has achieved Gold status in four categories of Microsoft's partner program:</p>
                                        <ul>
                                            <li>Application Development</li>
                                            <li>Application Integration</li>
                                            <li>Data Center</li>
                                            <li>Data Analytics</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button -left">
                                    <a class="button ce_rsce_oneo_button -left" href="contact">Learn More</a>
                                </div>
                            </div>
                            <div class="centered-wrapper -vertical-centered">
                                <div class="ser-hide-mobile">
                                    <div class="content-image">
                                        <figure>
                                            <img src="assets/images/microsoft/gold.jpg" alt="Microsoft Partner" width="300" height="169" loading="lazy">
                                        </figure>
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