<?php include_once("includes/header.php"); ?>
<style>
    /* Default margin for larger screens */
    /* #smartidp-img {
        margin-bottom: 17%;
    } */

    /* Remove margin on smaller screens */
    @media (max-width: 767px) {
        #smartidp-img {
            margin-bottom: 0 !important;
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
        text-align: justify;
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

    /* Custom Navigation Styles */
    .custom-nav {
        list-style: none !important;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* Style for each navigation item */
    .custom-nav-item {
        flex: 1 0 220px;
        max-width: 220px;
        padding: 5px;
    }

    /* Style for the links inside each item */
    .custom-nav-item .nav-link {
        font-size: 1rem;
        /* font-weight: bold; */
        padding: 12px 25px;
        color: white;
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        border-radius: 25px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        text-align: center;
        width: 100%;
    }

    /* Hover effects */
    .custom-nav-item .nav-link:hover {
        background: linear-gradient(331deg, #007ac9 0%, #00b09c 100%);
        color: white;
    }

    /* Active tab styling */
    .custom-nav-item .nav-link.active {
        background: linear-gradient(331deg, #007ac9 0%, #00b09c 100%);
    }
    .bg-img {
        padding: 65px 0;
    }
</style>

<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid bg-img">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Content Section -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                        <h2 class="headline fw-bold mb-4" style="color: #000d39;">Content Automation Supercharged With <br>Artificial Intelligence</h2>
                        <!-- <h1 class="display-3" style="color: #000d39;">
                            Content automation supercharged with <br>Artificial intelligence
                        </h1> -->
                        <p class="fs-5 mb-4" style="color: #000d39;">Empower your employees' daily work, improve document understanding, and supercharge business processes with SmartIDP Intelligent Content Automation's next-generation ECM capabilities.</p>

                        <a class="btn rounded-pill px-4 text-white mb-md-0 mb-4" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Experience Advice</a>
                    </div>
                    <!-- Right Column: Image Section -->
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
                        <img src="assets/images/artificial_intelligence/artificial_intelligence_in_smartidp.svg" loading="lazy" class="img-fluid" alt="SmartIDP" style="max-width: 85%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="row pt-md-5">
                <div class="col-lg-6">
                    <div class="text-start">
                        <h2 class="fw-bold" style="margin-bottom: 0.5rem;">
                            <span class="gradient">Content automation</span> supercharged with<span class="gradient"> Artificial intelligence</span>
                        </h2>
                        <p class="mb-4" style="font-weight: bold;">
                            Empower your employees' daily work, improve document understanding, and supercharge business processes with SmartIDP Intelligent Content Automation's next-generation ECM capabilities.
                        </p>
                        <a class="btn" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); color: white; padding: 10px 30px; text-decoration: none; border-radius: 50px; ">
                            Experience Advice
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center align-items-center justify-content-center">
                    <img src="assets/images/SmartIDP/intelligent-document-processing1.png" alt="SmartIDP" class="img-fluid py-2 py-md-0" id="smartidp-img" loading="lazy" style="border-radius: 20px;">
                </div>
            </div>
        </div> -->


        <div class="mod_article  max-width-viewport ser-hide-mobile block" id="article-43655">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered" style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                            <h2 class="fw-bold"><span class="gradient">Faster,</span> better and stronger work<span
                                    class="gradient"> with AI</span></h2>
                        </div>
                        <section class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes">
                            <div class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -inverted-icon">
                                <div class="icon-boxes-item-icon-image">
                                    <i class="fas fa-cogs fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                </div>
                                <p class="-medium">Increased efficiency</p>
                                <div class="icon-boxes-item-text">
                                    <p>Automated processes and intelligent assistance empower employees to work smarter, not harder – achieving more with the same resources.</p>
                                </div>
                            </div>

                            <div class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon">
                                <div class="icon-boxes-item-icon-image">
                                    <i class="fas fa-brain fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                </div>
                                <p class="-medium">Apply AI wherever it's needed</p>
                                <div class="icon-boxes-item-text">
                                    <p>Seamless integration of cutting-edge AI capabilities work in tandem with your current systems, transforming and improving your processes.</p>
                                </div>
                            </div>

                            <div class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon">
                                <div class="icon-boxes-item-icon-image">
                                    <i class="fas fa-chart-line fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                </div>
                                <p class="-medium">Make better decisions</p>
                                <div class="icon-boxes-item-text">
                                    <p>Increased transparency and intelligent insights from AI ensure you get the best insights from your data, optimizing business decisions and minimizing risks.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_article fade-out-background max-width-viewport block" id="article-43656">
            <div class="mod_article_inner">
                <div class="container py-3">
                    <div class="text-center mb-5">
                        <h1 class="responsive-heading1 fw-bold"><span class="gradient">AI</span> Is Here To <span class="gradient">Help</span></h1>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                        <!-- Card 1: Intelligent Digital Workplace -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-laptop fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent; "></i>
                                    <h3 class="h5">Intelligent Digital Workplace</h3>
                                    <p>Empower your workforce with AI for enhanced productivity, streamlined workspaces, smarter decision-making, better collaboration, and a trusty assistant at your side.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Intelligent Document Processing -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-file-alt fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">Intelligent Document Processing</h3>
                                    <p>Supercharge and simplify your processes with the helping hand of AI – empowering employees through automation and improving document-driven processes end-to-end.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Intelligent Process Automation -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-cogs fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">Intelligent Process Automation</h3>
                                    <p>Experience unparalleled efficiency across your workforce through the automation of workflows and cross-system processes, powered by AI.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Intelligent Content Assistant -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-comments fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">Intelligent Content Assistant</h3>
                                    <p>The right information, at the right time, whatever app you're working with. Work smarter with Doxi, your Intelligent Content Assistant.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5: AI Assistance for Citizen Developers -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-users fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">AI assistance for <br>citizen developers</h3>
                                    <p>Achieve a faster time to value and reduce IT costs and personnel bottlenecks with our no-code app builder. AI assists citizen developers in configuring the perfect content apps for their needs.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6: AI-powered Insights -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-brain fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">AI-powered Insights</h3>
                                    <p>Unlock actionable insights from your data with AI-driven analytics, enabling smarter decision-making and deeper understanding of your business.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 7: AI-driven Recommendations -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-lightbulb fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">AI-driven Recommendations</h3>
                                    <p>Enhance user experiences with AI-driven personalized recommendations, tailored to the unique needs and preferences of each individual.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 8: AI for Predictive Analytics -->
                        <div class="col">
                            <div class="card h-100 border-0 text-center custom-card-shadow">
                                <div class="card-body">
                                    <i class="fas fa-chart-line fa-3x mb-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <h3 class="h5">AI for Predictive Analytics</h3>
                                    <p>Unlock the power of predictive analytics with AI, allowing you to forecast trends and behaviors to make more informed decisions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox " style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="content-text ">
                            <h3>Hi! I&apos;m SmartIDP - your Intelligent Content Assistant</h3>
                            <div class="rte">
                                <p>Think of me as your speedy, smart assistant that&nbsp;gets you the right
                                    information, at the right time, whatever app you're working with.</p>
                                <p>Got a question? Just ask me. I can help you with manual tasks that take up
                                    time such as adding metadata, so you can focus on the things you should be
                                    prioritizing.</p>
                                <p>Want to learn more about me? &nbsp;</p>
                            </div>
                        </div>
                        <div class="button-box ce_rsce_oneo_button   -left">
                            <a class="btn rounded-pill px-4 text-white mb-md-0 mb-4" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);width: 150px">
                                Get Demo </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <!-- Main Heading with Gradient and Styling -->
            <div class="text-center mb-5">
                <h2 class="responsive-heading1 fw-bold" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                    <span class="gradient">AI</span> is there for <span class="text-gradient"><span class="gradient">your people</span>
                </h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Column (Video/Image) -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-center">
                        <div class="position-relative">
                            <!-- <button class="btn btn-link p-0" data-splash-screen> -->
                            <img src="assets/images/artificial_intelligence/m1.jpg" alt="SmartIDP Video" class="img-fluid" style="max-width: 100%; height: 420px; border-radius: 20px;" loading="lazy">
                            <!-- </button> -->
                        </div>
                    </div>
                </div>

                <!-- Right Column (Text and Headings) -->
                <div class="col-lg-6">
                    <div class="mb-1">
                        <h3 class="fw-bold">
                            <span class="gradient">AI-powered Automation</span>
                        </h3>

                        <h3>Instantly automating routine tasks</h3>
                        <p style="font-size: 1rem; color: #444; line-height: 1.6; text-align: justify;">
                            Want to produce more results with the same resources? AI-powered content automation vastly improves your ability to overcome growing complexity and fast-paced work demands. SmartIDP AI empowers workers through the automation of routine tasks so that they can focus on the work that fulfills them and generates value for your company.
                        </p>
                    </div>
                    <div>
                        <h3 class="fw-bold">
                            <span class="gradient">AI-powered assistance</span>
                        </h3>

                        <h3>Find and understand the information you need</h3>
                        <p style="font-size: 1rem; color: #444; line-height: 1.6; text-align: justify;">
                            A little helping hand can really lighten your workload. Work intelligently, creatively, and productively – all while staying connected with the information and people in your company. SmartIDP AI enriches your daily work with helpful context and content related to your task at hand, and even automatically creates workflows to progress the next steps.
                        </p>
                    </div>

                </div>
            </div>
        </div>



        <div class="container py-1">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <!-- Card with Linear Gradient Background -->
                    <div class="card shadow-lg rounded-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border: none;">
                        <div class="card-body text-center">
                            <!-- Quotation marks and Quote text -->
                            <div class="quote position-relative">
                                <blockquote class="blockquote text-white mb-0" style="font-size: 1.25rem; font-style: italic;">
                                    <i class="bi bi-quote mt-2" style="font-size: 3rem; position: absolute; top: -20px; left: -20px; color: rgba(255, 255, 255, 0.3);"></i>
                                    We are processing much more than we used to with the same amount of people. We can do more without hiring people and follow up many more quotations.
                                </blockquote>
                            </div>
                            <!-- Author or attribution (optional) -->
                            <footer class="blockquote-footer text-white mt-3" style="font-size: 1rem;">SmartIDP</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="responsive-heading1 fw-bold">
                    Manual work? <span class="gradient">Transformed</span> with AI
                </h2>
            </div>

            <!-- Bootstrap Tabs -->
            <ul class="nav custom-nav" id="myTab" role="tablist">
                <li class="nav-item custom-nav-item" role="presentation">
                    <a class="nav-link active" id="manufacturing-tab" data-bs-toggle="tab" href="#manufacturing" role="tab" aria-controls="manufacturing" aria-selected="true">
                        Magic Extraction
                    </a>
                </li>
                <li class="nav-item custom-nav-item" role="presentation">
                    <a class="nav-link" id="bank-tab" data-bs-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">
                        Purchase-to-Pay
                    </a>
                </li>
                <li class="nav-item custom-nav-item" role="presentation">
                    <a class="nav-link" id="insurance-tab" data-bs-toggle="tab" href="#insurance" role="tab" aria-controls="insurance" aria-selected="false">
                        Document Insights
                    </a>
                </li>
                <li class="nav-item custom-nav-item" role="presentation">
                    <a class="nav-link" id="logistic-tab" data-bs-toggle="tab" href="#logistic" role="tab" aria-controls="logistic" aria-selected="false">
                        AI in Business Studio
                    </a>
                </li>
            </ul>



            <div class="tab-content mt-4" id="myTabContent">
                <!-- Manufacturing Tab Content -->
                <div class="tab-pane fade show active" id="manufacturing" role="tabpanel" aria-labelledby="manufacturing-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-bold">Instant data extraction with one click</h3>
                            <p>How long does it take to index documents for search later down the line? SmartIDP AI does this in just one click:</p>
                            <ul>
                                <li>Instantly analyze content – no training required</li>
                                <li>Extract the correct terms and summarize the content</li>
                                <li>Assign metadata to documents immediately to improve search</li>
                                <li>Enables employees to quickly validate information</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <figure>
                                <img src="assets/images/artificial_intelligence/extract.png" alt="Magic Extraction" class="img-fluid" loading="lazy">
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Purchase-to-Pay Tab Content -->
                <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-bold">Streamlined processes, ensured compliance</h3>
                            <p>Gain a competitive advantage through agile, automated, and accurate purchase-to-pay processes.</p>
                            <ul>
                                <li>Instantly detect and respond to market changes, bottlenecks, and deviations</li>
                                <li>Increase customer satisfaction through reliable and punctual delivery</li>
                                <li>Reduce <a href="invoice_automation">invoice processing</a> costs by as much as 80%</li>
                            </ul>
                            <!-- <div class="mt-3">
                                <a href="contact.php" class="btn btn-primary">Find out more →</a>
                            </div> -->
                        </div>
                        <div class="col-lg-4">
                            <figure>
                                <img src="assets/images/artificial_intelligence/diocalap.png" alt="Purchase-to-Pay" class="img-fluid" loading="lazy">
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Document Insights Tab Content -->
                <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-bold">Painting an immediate picture of data</h3>
                            <p>Easily understand documents and improve organizational understanding and efficiency.</p>
                            <ul>
                                <li>Ask a question, SmartIDP gives you context-based answers</li>
                                <li>Receive document summaries in seconds</li>
                                <li>Engage with automatically generated Q&As</li>
                                <li>Experience improved decision-making</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <figure>
                                <img src="assets/images/artificial_intelligence/graph3.png" alt="Document Insights" class="img-fluid" loading="lazy">
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- AI in Business Studio Tab Content -->
                <div class="tab-pane fade" id="logistic" role="tabpanel" aria-labelledby="logistic-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-bold">Fast, flexible, for everyone</h3>
                            <p>The SmartIDP Business Studio provides you a user-friendly, no-code content app builder that, with the power of AI, accelerates time to value and cuts costs and personnel.</p>
                            <ul>
                                <li>Undergo digital transformation in weeks – driven by business experts</li>
                                <li>Interact with intuitive UX and AI-assisted configuration</li>
                                <li>Select and easily customize your content app with a preconfigured Fast Starter template</li>
                                <li>Utilize natural language-based prompt Fast Starters for custom metadata extraction</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <figure>
                                <img src="assets/images/artificial_intelligence/dashboard.png" alt="Document Insights" class="img-fluid" loading="lazy">
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Include FontAwesome CDN -->

        <div class="container py-md-3 py-1" id="article-43660">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Headline Box -->
                    <div class="headline-box text-center mb-4">
                        <h2 class="responsive-heading1 fw-bold">
                            Unlock your<span class="gradient"> organization's potential</span> with AI
                        </h2>
                    </div>

                    <!-- Icon Boxes Section -->
                    <section class="row">
                        <!-- Icon Box 1 -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card custom-card-shadow h-100 text-center">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-cogs fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>

                                    <div>
                                        <h3 class="card-title">Transform processes through automation</h3>
                                        <p class="card-text ">Streamline your operations by seamlessly integrating cutting-edge ML methods into document management and processes. Experience a surge in your workflow efficiency and elevate the quality of your outcomes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 2 -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card custom-card-shadow h-100 text-center">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-brain fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Empower users with AI support</h3>
                                        <p class="card-text ">Unleash the potential of SmartIDP AI to effortlessly classify documents, generate dynamic metadata and empower the search experience. Free teams and departments from mundane tasks so they can focus on what truly matters.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 3 -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card custom-card-shadow h-100 text-center">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-chart-line fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Informed decision-making, simplified</h3>
                                        <p class="card-text ">Elevate decision-making with SmartIDP. Our intelligent assistance function has the power to guide employees, global teams, and departments through tasks, suggest similar documents, expert help, and optimal workflow steps. Stay two steps ahead.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 4 -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card custom-card-shadow h-100 text-center">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-smile fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Delight customers and partners, every time</h3>
                                        <p class="card-text ">Not only can everyone in your organization access the information they need, but so can your partners and suppliers through self-service portals. Everyone is united around data and your customers can easily keep coming back for more.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 5 -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card custom-card-shadow h-100 text-center">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-lock fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Unleash information potential, mitigate risks</h3>
                                        <p class="card-text ">Don’t just store unstructured data – unlock its hidden value. With our machine learning technologies, you can unearth patterns, discover relevant content, and extract crucial metadata to shine light on potential risks, and stop them in their tracks. Standardized data and automation of workflows means you're always in line with compliance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 6 -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card custom-card-shadow h-100 text-center">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-robot fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Revolutionize operations with Auto ML</h3>
                                        <p class="card-text ">We always use an existing large language model but adapt that for your own use case. What we are doing is we try to optimize and automate that for use with Auto ML. No need for manual effort and data labelling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>


        <!-- <div class="mod_article  max-width-viewport block" id="article-43661">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800  -vertical-centered"
                    style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="rs-columns ce_rs_columns_start">
                            <div
                                class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                <div class="content-text">
                                    <h3>Want to achieve 336% ROI with AI?</h3>
                                    <div class="rte">
                                        <p>Discover how our customer SEW-EURODRIVE achieved:</p>
                                        <ul>
                                            <li>336% ROI over 3 years</li>
                                            <li>90%-time savings by year 3</li>
                                            <li>Richer insights into sales processes</li>
                                            <li>Streamlined collaboration across 430 global sites</li>
                                        </ul>
                                        <p>Using&nbsp;AI-powered SmartIDP Intelligent Content Automation.</p>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button   -left">
                                    <a class="button ce_rsce_oneo_button   -left"
                                        href="/en/knowledge-center/analyst-reports/forrester-tei.html">
                                        Read study now </a>
                                </div>
                            </div>
                            <div
                                class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                <div class="ser-hide-mobile">
                                    <div class="content-image">
                                        <figure>
                                            <a href="/en/knowledge-center/analyst-reports/forrester-tei.html">
                                                <img src="https://cdn.sergroup.com/files/content/images/mediathek/3d/whitepaper/EN/tei-study-background.png"
                                                    alt width="722" height="690">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container py-md-5 py-1" id="article-43662">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Headline Box -->
                    <div class="text-center mb-4">
                        <h2 class="responsive-heading1 fw-bold">
                            Our AI strategy: <span class="gradient">Intelligent to the core</span>
                        </h2>
                    </div>

                    <!-- Content Section -->
                    <div class="row align-items-stretch">
                        <!-- Text Column -->
                        <div class="col-12 col-lg-6 mb-4 " style="font-size: 1rem; line-height: 1.6; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <p><strong>SmartIDP</strong> Intelligent Content Automation stands as a pioneer and <strong>leader</strong> among content services platforms with AI embedded into the core. Our goal is to empower our customers to get maximum value from their information.</p>
                                <p>SmartIDP enables them to make the right decisions, enhance employee and customer experiences and ultimately manage content in ways that are smarter, more connected and context-aware.</p>
                                <p>We are fully committed to providing our customers with the best AI technology. Our AI strategy focuses on 7 core areas:</p>
                                <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                    <li>Composable AI</li>
                                    <li>Responsible AI</li>
                                    <li>Generative AI</li>
                                    <li>Prompt Engineering</li>
                                    <li>General purpose and custom ML</li>
                                    <li>Multimodal recognition for documents</li>
                                    <li>Combining composable and contextual AI</li>
                                </ul>
                                <p><strong>Learn more about our AI strategy <a href="contact" style="color: #007bff; text-decoration: none;">here</a>.</strong></p>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img src="assets/images/SmartIDP/Intelligent_doc.png" alt="meets AI" class="img-fluid" style="max-width: 100%; height: auto;  border-radius: 20px" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5" id="article-44138">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Card with content -->
                    <div class="card rounded-3" style="border: none; overflow: hidden; background: transparent;">

                        <!-- Card Header with Linear Gradient -->
                        <div class="card-header d-flex justify-content-center align-items-center text-center" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);">
                            <div>
                                <h2 class="display-4 fw-bold text-white" style="margin: 0;">Harnessing AI to Solve Humanity's Biggest Problems</h2>
                            </div>
                        </div>


                        <!-- Card Body with content -->
                        <div class="card-body ">
                            <p class="lead fw-bold" style="font-size: 1.25rem; line-height: 1.7; color: #333;">AI is transforming industries, and SmartIDP is at the forefront of this revolution. Organizations are now leveraging AI to manage and analyze vast amounts of content, revolutionizing workflows and enhancing decision-making.</p>

                            <p style="font-size: 1.1rem; color: #555; line-height: 1.7;">SmartIDP seamlessly integrates with existing business processes to unlock the full potential of your data. By utilizing cutting-edge AI, SmartIDP empowers teams to manage content innovatively. This results in faster decision-making, more efficient collaboration, and the ability to stay ahead of challenges that might arise.</p>

                            <h4 style="font-size: 1.5rem; font-weight: 600; color: #222;">How SmartIDP Drives Innovation with AI</h4>
                            <ul style="list-style-type:none; font-size: 1.1rem; color: #555; line-height: 1.7;">
                                <li><strong>Automating Document Processing:</strong> SmartIDP can classify documents, extract valuable data, and enhance your content workflows.</li>
                                <li><strong>Intelligent Insights:</strong> Leverage AI-driven analytics to identify patterns, improve decision-making, and provide personalized content recommendations.</li>
                                <li><strong>AI-Powered Search:</strong> Unlock powerful search capabilities using natural language processing, enabling users to find relevant content faster and more accurately.</li>
                                <li><strong>Future-Ready Automation:</strong> The SmartIDP platform evolves with your organization, adapting to new challenges and technologies without needing manual intervention.</li>
                            </ul>

                            <p style="font-size: 1.1rem; color: #555; line-height: 1.7;">By adopting AI-powered solutions like SmartIDP, businesses can optimize processes, reduce operational costs, and improve overall efficiency. SmartIDP is reshaping the future of content management by empowering organizations to make data-driven decisions faster and more effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5" id="article-43664">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Card for the heading -->
                    <div class="card" style="border: none; overflow: hidden; background: transparent;">
                        <!-- Card Header with Linear Gradient -->
                        <div class="card-header text-center" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); color: white;">
                            <h2 class="display-4 fw-bold mb-0 text-white" style="margin: 0;">Dive into the World of AI</h2>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <!-- Card for the first article -->
                    <div class="card custom-card-shadow h-100 mt-2">
                        <!-- Card Body with content -->
                        <div class="card-body">
                            <div>
                                <!-- Image with fixed height and width -->
                                <img src="assets/images/SmartIDP/intelligent-document-processing.png" alt="" loading="lazy" class="img-fluid" style="height: 250px; width: 100%; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                            </div>
                            <div>
                                <h3 class="mt-2">7 AI Trends Shaping the Future of Content Management and the Digital Workplace</h3>
                                <p class="text-muted mt-2">Explore the latest trends in AI and how they are transforming content management in the digital era. Discover the key insights that will shape the future.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <!-- Card for the second article -->
                    <div class="card custom-card-shadow h-100 mt-2">
                        <!-- Card Body with content -->
                        <div class="card-body">
                            <div>
                                <!-- Image with fixed height and width -->
                                <img src="assets/images/artificial_intelligence/3_ways.webp" alt="" loading="lazy" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                            </div>
                            <div>
                                <h3 class="mt-2">3 Ways AI is Revolutionizing Banking and Financial Services</h3>
                                <p class="text-muted mt-2">Learn how AI is reshaping banking and financial services. The future of the sector relies heavily on automation, machine learning, and AI-driven innovations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <!-- Card for the third article -->
                    <div class="card custom-card-shadow h-100 mt-2">
                        <!-- Card Body with content -->
                        <div class="card-body">
                            <div>
                                <!-- Image with fixed height and width -->
                                <img src="assets/images/artificial_intelligence/management.webp" alt="" loading="lazy" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;border-top-left-radius: 20px; border-top-right-radius: 20px;">
                            </div>
                            <div>
                                <h3 class="mt-2">Input Management at Its Best</h3>
                                <p class="text-muted mt-2">Discover how AI-powered input management is transforming data capture, automating processes, and improving overall operational efficiency for organizations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
</div>
<?php include_once("includes/footer.php"); ?>