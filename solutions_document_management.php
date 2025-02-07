<?php include_once("includes/header.php"); ?>

<!-- CSS -->
<style>
    .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
    }

    /* .cover {
        height: 48vh;
    } */
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
    .bg-img {
        padding: 0px 0px;
    }
</style>
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid bg-img">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Content Section -->
                    <div class="col-12 col-lg-6 text-center text-lg-start">
                        <h2 class="headline fw-bold" style="color: #000d39;">AI Powered Document Management System</h2>
                        <h1 class="display-3 mt-1" style="color: #000d39;">
                            Transforming Document Management with SmartIDP
                        </h1>
                        <p class="fw-bold fs-5 mb-3">Leverage AI for Smarter Document Handling</p>
                        <ul class="list-unstyled content-text">
                            <li class="mb-1 text-left" style="list-style:none ;">
                                <p><i class="fas fa-check-circle me-2"></i> Manage large volumes of documents with AI efficiency</p>
                            </li>
                            <li class="mb-1 text-left" style="list-style:none ;">
                                <p><i class="fas fa-check-circle me-2"></i> Speed up document processing and boost productivity</p>
                            </li>
                            <li class="mb-1 text-left" style="list-style:none ;">
                                <p><i class="fas fa-check-circle me-2"></i> Ensure compliance with cutting-edge SmartIDP technology</p>
                            </li>
                            <li class="mb-1 text-left" style="list-style:none ;">
                                <p><i class="fas fa-check-circle me-2"></i> Enhance decision-making with AI-driven automation</p>
                            </li>
                            <li class="mb-1 text-left" style="list-style:none ;">
                                <p><i class="fas fa-check-circle me-2"></i> Increase data accuracy and reduce manual errors</p>
                            </li>
                            <li class="mb-1 text-left" style="list-style:none ;">
                                <p><i class="fas fa-check-circle me-2"></i> Streamline workflows and improve team collaboration</p>
                            </li>
                        </ul>
                        <div class="my-4">
                            <a class="btn rounded-pill px-4 text-white fw-bold" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
                        </div>
                    </div>
                    <!-- Right Column: Image Section -->
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center my-2">
                        <img src="assets/images/document_management/document_management.svg" loading="lazy" class="img-fluid" alt="SmartIDP" >
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
            <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                SmartIDP</h2>
        </div> -->
        <div class="mt-5"></div>
        <?php include_once("smartidp_logos.php"); ?>
        <div class="container text-center">
            <h2 class="mb-4 responsive-heading1 fw-bold"><span class="gradient">Efficiency</span> begins with an <span class="gradient">AI-powered</span> SmartIDP DMS</h2>
            <p class="mb-4 fs-5">Say goodbye to paper, floating files, email attachments, and file directories. The SmartIDP document management system empowers you to take full control of your documents with seamless digital management of contracts, orders, invoices, HR documents, and more.</p>
            <p class="mb-5">Quickly access all business-critical information, accelerate decision-making, eliminate errors, and strengthen the long-term success of your organization.</p>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Enhanced Productivity -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-rocket fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Enhanced Productivity</h5>
                            <p class="card-text">Work and manage all your documents digitally with SmartIDP: Reduce lead times, speed up decision-making, and avoid costly mistakes.</p>
                        </div>
                    </div>
                </div>

                <!-- Easier Compliance -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-check-circle fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Easier Compliance</h5>
                            <p class="card-text">Minimize the time and effort spent on meeting compliance requirements. Prevent sanctions and ensure full regulatory adherence with SmartIDP.</p>
                        </div>
                    </div>
                </div>

                <!-- Better Resource Deployment -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Better Resource Deployment</h5>
                            <p class="card-text">Automate document filing and distribution workflows with SmartIDP, freeing up valuable resources for service, order processing, and other critical tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5">
            <!-- Headline Section -->
            <div class="text-center mb-5">
                <h2 class="fw-bold"><span class="gradient">Document management</span> at a glance</h2>
                <p class="fw-bold fs-5">Everything you need at every stage of the document life cycle.</p>
            </div>

            <!-- Icon Boxes -->
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <!-- Capture Documents -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-camera fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Capture Documents</h5>
                            <p class="card-text">Digitize, process and analyze</p>
                        </div>
                    </div>
                </div>

                <!-- Archive Documents -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-archive fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Archive Documents</h5>
                            <p class="card-text">File compliantly and retrievably</p>
                        </div>
                    </div>
                </div>

                <!-- Organize Documents -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-sitemap fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Organize Documents</h5>
                            <p class="card-text">In the right context, in the right place, in the right file</p>
                        </div>
                    </div>
                </div>

                <!-- Understand Documents -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <!-- Icon for Understand Documents -->
                            <i class="fas fa-brain fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Understand Documents</h5>
                            <p class="card-text">Extract information and generate insights with AI</p>
                        </div>
                    </div>
                </div>

                <!-- Find Documents -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <!-- Icon for Find Documents -->
                            <i class="fas fa-search fa-3x mb-3 gradient"></i>
                            <h5 class="card-title fw-bold">Find Documents</h5>
                            <p class="card-text">Search and find information easily company-wide</p>
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
                                    <a href="contact" class="button ce_rsce_oneo_button text-center" style="background-color: #0090f9; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Learn more</a>
                                </div>
                            </div>
                            <!-- Right Column (Image) -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="content-image">
                                    <figure>
                                        <img src="assets/images/intelligent_content_Automation/person.gif" alt="SmartIDP" class="img-fluid" width="352" height="145" style="border-radius: 15px;">
                                    </figure>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <!-- Headline Section -->
            <div class="text-center mb-5">
                <h2 class="fw-bold"><span class="gradient">Enhance productivity</span> with <span class="gradient">SmartIDP</span> for Document Management</h2>
            </div>

            <!-- Icon Boxes Section -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Search Icon Box -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-search fa-3x gradient mb-3"></i>
                            <h5 class="card-title fw-bold">Search</h5>
                            <p class="card-text">Keyword, full-text, or a combination of both: Find every document, even those stored across various locations in your organization. You don’t need the original software – SmartIDP can display over 250 file formats for seamless access.</p>
                        </div>
                    </div>
                </div>

                <!-- File Icon Box -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-folder-open fa-3x gradient mb-3"></i>
                            <h5 class="card-title fw-bold">File</h5>
                            <p class="card-text">SmartIDP simplifies document filing with intelligent information management. Clear file dialogs and automated context assignment make organizing new documents quick and efficient.</p>
                        </div>
                    </div>
                </div>

                <!-- Process Icon Box -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-tasks fa-3x gradient mb-3"></i>
                            <h5 class="card-title fw-bold">Process</h5>
                            <p class="card-text">Enhance your document management process with SmartIDP’s add-ons. You can access DMS functions like searching and filing directly within Microsoft Office, Outlook, IBM Notes, and more. Quickly create new documents using SmartIDP templates.</p>
                        </div>
                    </div>
                </div>

                <!-- Comment Icon Box -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-comment-dots fa-3x gradient mb-3"></i>
                            <h5 class="card-title fw-bold">Comment</h5>
                            <p class="card-text">Add digital comments and notes to documents with SmartIDP without modifying the original. This additional information is included in your document searches, enhancing your overall document workflow.</p>
                        </div>
                    </div>
                </div>

                <!-- Version Icon Box -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-history fa-3x gradient mb-3"></i>
                            <h5 class="card-title fw-bold">Version</h5>
                            <p class="card-text">SmartIDP’s version management tracks all document changes, ensuring you always have access to the most up-to-date versions. You can also quickly retrieve older versions, giving you full control over your document lifecycle.</p>
                        </div>
                    </div>
                </div>

                <!-- Structure Icon Box -->
                <div class="col">
                    <div class="card custom-card-shadow h-100 text-center">
                        <div class="card-body text-center">
                            <i class="fas fa-sitemap fa-3x gradient mb-3"></i>
                            <h5 class="card-title fw-bold">Structure</h5>
                            <p class="card-text">SmartIDP organizes electronic files by business context. Whether it's contracts, orders, emails, or customer/supplier processes, all relevant information is brought together for better insight and management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="custom-card">
                        <div class="custom-logo">
                            <span class="custom-circle custom-circle1"></span>
                            <span class="custom-circle custom-circle2"></span>
                            <span class="custom-circle custom-circle3"></span>
                            <span class="custom-circle custom-circle4"></span>
                            <span class="custom-circle custom-circle5">
                           <svg width="35.575" height="17.9" viewBox="0 0 35.575 17.9" xmlns="http://www.w3.org/2000/svg"><g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#ffffff" stroke-width="0.1mm" fill="#ffffff" style="stroke:#ffffff;stroke-width:0.1mm;fill:#ffffff"><path d="M 6.875 17.65 L 6.875 0.25 Q 8.05 0.125 9.175 0.063 A 37.828 37.828 0 0 1 10.222 0.02 Q 10.934 0 11.75 0 A 12.152 12.152 0 0 1 13.586 0.132 Q 14.57 0.282 15.403 0.604 A 7.299 7.299 0 0 1 15.637 0.7 A 7.745 7.745 0 0 1 17.46 1.78 A 6.806 6.806 0 0 1 18.337 2.625 Q 19.4 3.85 19.913 5.463 A 11.064 11.064 0 0 1 20.405 8.212 A 12.876 12.876 0 0 1 20.425 8.925 A 11.327 11.327 0 0 1 20.055 11.849 A 10.451 10.451 0 0 1 19.9 12.375 Q 19.375 14 18.288 15.238 A 7.242 7.242 0 0 1 16.224 16.85 A 8.814 8.814 0 0 1 15.512 17.188 Q 13.944 17.85 11.802 17.897 A 15.048 15.048 0 0 1 11.475 17.9 A 46.745 46.745 0 0 1 10.457 17.89 Q 9.954 17.879 9.505 17.856 A 25.375 25.375 0 0 1 8.987 17.825 Q 7.925 17.75 6.875 17.65 Z M 26.3 17.7 L 23.925 17.7 L 23.925 0.25 Q 24.95 0.125 26.188 0.063 Q 27.425 0 28.75 0 A 11.49 11.49 0 0 1 30.41 0.114 Q 31.296 0.243 32.043 0.521 A 6.503 6.503 0 0 1 32.45 0.688 A 6.152 6.152 0 0 1 33.72 1.445 A 4.843 4.843 0 0 1 34.775 2.575 A 4.787 4.787 0 0 1 35.57 5.079 A 5.849 5.849 0 0 1 35.575 5.325 A 6.315 6.315 0 0 1 35.398 6.856 A 4.817 4.817 0 0 1 34.65 8.5 A 5.578 5.578 0 0 1 32.762 10.158 A 7.016 7.016 0 0 1 32.075 10.488 Q 30.425 11.175 28.25 11.175 A 26.006 26.006 0 0 1 27.116 11.151 A 20.732 20.732 0 0 1 26.3 11.1 L 26.3 17.7 Z M 2.375 17.7 L 0 17.7 L 0 0.2 L 2.375 0.2 L 2.375 17.7 Z M 9.25 2.175 L 9.25 15.7 Q 9.775 15.775 10.35 15.8 A 26.816 26.816 0 0 0 11.241 15.824 A 30.324 30.324 0 0 0 11.55 15.825 A 9.476 9.476 0 0 0 13.091 15.707 Q 13.929 15.569 14.613 15.269 A 5.007 5.007 0 0 0 15.225 14.95 Q 16.65 14.075 17.325 12.513 A 8.073 8.073 0 0 0 17.889 10.494 A 10.626 10.626 0 0 0 18 8.925 Q 18 7.125 17.325 5.55 Q 16.65 3.975 15.25 3.013 A 5.224 5.224 0 0 0 13.487 2.248 Q 12.777 2.078 11.949 2.054 A 9.502 9.502 0 0 0 11.675 2.05 Q 10.95 2.05 10.35 2.088 Q 9.75 2.125 9.25 2.175 Z M 26.3 2.1 L 26.3 9.075 Q 26.7 9.125 27.275 9.163 Q 27.85 9.2 28.55 9.2 A 7.958 7.958 0 0 0 29.895 9.094 Q 31.175 8.874 32 8.2 A 3.224 3.224 0 0 0 33.214 5.84 A 4.33 4.33 0 0 0 33.225 5.525 Q 33.225 3.9 32.05 2.95 A 3.866 3.866 0 0 0 30.78 2.284 Q 29.889 2 28.7 2 A 32.781 32.781 0 0 0 27.886 2.01 A 27.485 27.485 0 0 0 27.425 2.025 A 22.819 22.819 0 0 0 26.704 2.066 A 18.76 18.76 0 0 0 26.3 2.1 Z" vector-effect="non-scaling-stroke"/></g></svg>
                            </span>
                        </div>
                        <div class="custom-glass"></div>
                        <div class="custom-content">
                            <span class="custom-title mb-5">SmartIDP for Document Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container mt-5">
            <h2 class="text-center mb-4 fw-bold">Unlock the Power of SmartIDP in <span class="gradient">Digital Document Management</span></h2>
            <div class="row mb-4">
                <!-- Left Column: Content -->
                <div class="col-md-6">
                    <!-- Content Item 1 -->
                    <div class="content-item p-4" onmouseover="changeImage('img1')" onmouseout="resetImage()" style="border-radius: 20px;">
                        <div class="card-title text-dark fw-bold">Achieve Unmatched Efficiency with SmartIDP</div>
                        <p class="card-text">Discover how SmartIDP enhances your document management processes by automating tedious tasks, streamlining workflows, and providing valuable insights. Our solution significantly boosts productivity while reducing errors and manual work.</p>
                    </div>
                    <hr>
                    <!-- Content Item 2 -->
                    <div class="content-item p-4" onmouseover="changeImage('img2')" onmouseout="resetImage()" style="border-radius: 20px;">
                        <div class="card-title text-dark fw-bold">Case Study: How SmartIDP Transformed Document Management at Global Enterprises</div>
                        <p class="card-text">Leading global enterprises in finance and healthcare trust SmartIDP to automate the categorization and extraction of vital data from contracts, invoices, and medical records. These companies have achieved a 40% reduction in processing time and enhanced compliance with industry regulations.</p>
                    </div>
                    <hr>

                    <!-- Content Item 3 -->
                    <div class="content-item p-4" onmouseover="changeImage('img3')" onmouseout="resetImage()" style="border-radius: 20px;">
                        <div class="card-title text-dark fw-bold">Guide: Revolutionize Your Business with SmartIDP for Document Management</div>
                        <p class="card-text">Get our comprehensive guide to understanding how SmartIDP’s intelligent automation solutions can transform your document management system. With practical tips, real-world case studies, and checklists, this guide will help you make informed decisions to streamline your processes and reduce costs.</p>
                    </div>
                    <hr>
                </div>

                <!-- Right Column: Image (Centered) -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img id="right-img" src="assets/images/document_management/dms-2.png" class="img-fluid" alt="SmartIDP Document Management Solution" style="width: 100%; max-height: 500px; max-width: 500px; border-radius: 20px;">
                </div>
            </div>
        </div>

    </main>
</div>
<?php include_once("includes/footer.php"); ?>
<script>
    const images = {
        img1: "assets/images/document_management/dms-2.png",
        img2: "assets/images/document_management/dms-1.jpg",
        img3: "assets/images/document_management/dms-3.jpg"
    };

    function changeImage(imgType) {
        document.getElementById("right-img").src = images[imgType];
    }

    function resetImage() {
        document.getElementById("right-img").src = images.img1;
    }
</script>