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

    .icon-box-circle {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin: 0 auto;
    }
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">

        <div class="container-fluid" style="background-image: url('assets/images/SmartIDP_Group/Animated.svg'); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 25px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Content Section -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                        <h2 class="fw-bold mb-4 text-white"><span class="gradient">SmartIDP</span> for Purchasing & Procurement</h2>
                        <p class="lead fw-bold text-white mb-4">Save time and money with order processes and supplier management using SmartIDP.</p>
                    </div>
                    <!-- Right Column: Image Section -->
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
                        <img src="assets/images/purchasing_procurement/img1.png"loading="lazy" class="img-fluid" alt="SmartIDP" style="max-width: 65%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5"></div>
        <?php include_once("smartidp_logos.php"); ?>

        <div class="container-fluid py-md-4 py-2" style="background-color: #eaedfc;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-3">
                        <h2 class="fw-bold mt-0">SmartIDP for <span class="gradient">procurement processes</span></h2>
                    </div>
                    <div class="col-12 text-center">
                        <p>The increasing pressure to innovate is affecting purchasing and procurement: You constantly need to improve your processes to procure goods on time and within budget – from purchase requisition and order verification to supplier management. The challenge is to maintain relationships with suppliers and service providers all over the world while dealing with complex contract structures, countless deadlines, and thousands of associated documents. How do you keep track of all this information and all these processes while simultaneously identifying potential for process and quality optimization? With SmartIDP.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="headline-box -align-left ce_rsce_oneo_headline_box">
                    <h2 class="fw-bold text-center mt-0"><span class="gradient">SmartIDP Solutions</span> for Purchasing & Procurement</h2>
                </div>
                <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                    <div class="icon-boxes-wrapper">
                        <div
                            class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-file-alt fa-md"></i></span>
                            <h3>Digital purchase requisitions</h3>
                            <div class="icon-boxes-item-text">
                                <p class="text-justify px-2 pe-md-4">Automates the purchase requisition, assists when filling in cost center, project number, etc., and shows the order status</p>
                            </div>
                        </div>
                        <div
                            class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-truck fa-md"></i></span>
                            <h3>Automated order releases</h3>
                            <div class="icon-boxes-item-text">
                                <p class="text-justify px-2 pe-md-4">For order verification, release of orders, including automated deadline reminders</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                    <div class="icon-boxes-wrapper">
                        <div
                            class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-plug fa-md"></i></span>
                            <h3>ERP integration</h3>
                            <div class="icon-boxes-item-text">
                                <p class="text-justify px-2 pe-md-4">Automated data transfer & archiving from SAP and other ERP systems via certified interfaces</p>
                            </div>
                        </div>
                        <div
                            class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-users fa-md"></i></span>
                            <h3>Supplier onboarding</h3>
                            <div class="icon-boxes-item-text">
                                <p class="text-justify px-2 pe-md-4">Digital processes to identify suitable suppliers, request certifications, meetings with suppliers, audits, etc.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                    <div class="icon-boxes-wrapper">
                        <div
                            class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-shield-alt fa-md"></i></span>
                            <h3>Quality management</h3>
                            <div class="icon-boxes-item-text">
                                <p class="text-justify px-2 pe-md-4">Digital, verifiable QM processes for supplier management, recertification & correct inventory process</p>
                            </div>
                        </div>
                        <div
                            class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                            <span class="icon-boxes-item-icon"><i class="fas fa-clipboard-list fa-md"></i></span>
                            <h3>Documentation & reports</h3>
                            <div class="icon-boxes-item-text">
                                <p class="text-justify px-2 pe-md-4">Record the processing times in purchasing, order volumes in all departments, contract deadlines, delivery times, etc.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container my-md-5">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12">
                        <h2 class="fw-bold">Benefits with <span class="gradient">SmartIDP</span></h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Benefit 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3">
                                    <i class="fas fa-check fa-2x text-white gradient"></i>
                                </div>
                                <p><strong>Faster & More Efficient Procurement:</strong> Faster & more efficient procurement processes</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3">
                                    <i class="fas fa-check fa-2x text-white gradient"></i>
                                </div>
                                <p><strong>Easier Purchase Requisition:</strong> Easier purchase requisition for employees in all departments</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3">
                                    <i class="fas fa-check fa-2x text-white gradient"></i>
                                </div>
                                <p><strong>Better Collaboration & Communication:</strong> Better collaboration & communication with suppliers</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3">
                                    <i class="fas fa-check fa-2x text-white gradient"></i>
                                </div>
                                <p><strong>Process Optimization Overview:</strong> Overview of process optimization potential</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3">
                                    <i class="fas fa-check fa-2x text-white gradient"></i>
                                </div>
                                <p><strong>Quality & Compliance Verification:</strong> Verifiable quality & compliance in liability issues</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 custom-card-shadow">
                            <div class="card-body">
                                <div class="icon-box-circle rounded-circle mb-3">
                                    <i class="fas fa-check fa-2x text-white gradient"></i>
                                </div>
                                <p><strong>Audit-Compliance in Archiving:</strong> Audit-compliant archiving of documents subject to mandatory retention</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-1" style="background-color: #eaedfc;">
            <div class="container my-md-5 my">
                <div class="row align-items-center">
                    <!-- Text Content Column -->
                    <div class="col-md-8">
                        <h2 class="fw-bold"><span class="gradient">Process optimization</span> with documentation & reports</h2>
                        <p class="font-italic">
                            With SmartIDP, you can keep an eye on procurement processes <strong>at all times</strong>.
                        </p>
                        <p>
                            Which suppliers are fastest? How long does which subsidiary take to verify orders? Figures such as these help you to further optimize your processes. SmartIDP documents all processes, processing times, and partial steps. You always have the integrated reports on hand – no matter where you are. This enables you to react immediately to deviations, prevent costly delays, and optimize your procurement processes in the long term.
                        </p>
                    </div>
                    <!-- Image Column -->
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="assets/images/purchasing_procurement/img2.jpg" class="img-fluid" loading="lazy" alt="SmartIDP Mobile Work" style="border-radius: 20px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-md-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <!-- Quote Text -->
                    <div class="blockquote blockquote-custom p-4 mb-4" style="border-left: thick solid #32a1ce;">
                        <p class="mb-0">
                            "Our team is able to make better decisions based on the information in the supplier eFiles regarding what went well in the supplier processes and what needs to be optimized next year, also in terms of material quality."
                        </p>
                    </div>

                    <!-- Author and Company Info -->
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <div>
                            <!-- <p class="font-weight-bold mb-0">Lars Schmerge</p> -->
                            <p class="text-muted mb-0">Project Manager,&nbsp&nbsp&nbsp&nbsp<img src="<?php echo BASE_PATH; ?>assets/images/logo/logo1.png" alt="SmartIDP" class="img-fluid" style="max-width: 100px;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-1" style="background-color: #eaedfc;">
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
                                <img src="assets/images/purchasing_procurement/img3.jpg" class="img-fluid" alt="SmartIDP Customization"loading="lazy" style="border-radius: 20px;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-md-5" id="article-29421">
            <h2 class="text-left mb-4 fw-bold"><span class="gradient">SmartIDP ECM Solutions:</span> Use Cases and Case Studies</h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Next-generation enterprise content management -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span> <!-- Changed to cogs for automation -->
                                <h3 class="fw-bold">Next-generation enterprise content management</h3>
                                <p>SmartIDP helps organizations improve efficiency by streamlining content management. With powerful tools for document management and automation, businesses can optimize workflows and reduce operational costs.</p>
                            </div>
                        </div>

                        <div class="row">
                            <!-- SEW-EURODRIVE case study -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-industry fa-md"></i></span> <!-- Changed to industry for SEW-EURODRIVE -->
                                <h3 class="fw-bold">SEW-EURODRIVE case study</h3>
                                <p>SmartIDP helped SEW-EURODRIVE optimize their content management system. Discover how the company benefited from implementing Intelligent Content Automation and the improvements they saw in efficiency and collaboration.</p>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Purchasing teams interlinked worldwide -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-network-wired fa-md"></i></span> <!-- Changed to network-wired for global connectivity -->
                                <h3 class="fw-bold">Purchasing teams interlinked worldwide</h3>
                                <p>Duravit uses SmartIDP to seamlessly connect sales and purchasing teams across over 120 countries. The platform enables them to manage supplier relationships and coordinate materials for their sanitary fixtures in multiple languages and regions.</p>
                            </div>
                        </div>

                    </section>
                </div>

                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/purchasing_procurement/img4.jpg"  loading="lazy"alt="SmartIDP Outlook Integration" class="img-fluid" style="border-radius: 20px;">
                        </figure>
                    </div>
                </div>
            </div>
        </div>




    </main>
</div>
<?php include_once("includes/footer.php"); ?>