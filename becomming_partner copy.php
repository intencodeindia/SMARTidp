<?php include_once("includes/header.php"); ?>

<!-- <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/bp.css"> -->
<!-- <script src="https://cdn.sergroup.com/assets/js/jquery.min.js-c31f118d.js"></script> -->

<style>
    /* Make the container responsive */
    #page-head {
        padding: 20px 0;
    }

    /* Adjust for small screens */
    @media (max-width: 576px) {
        .responsive-heading1 {
            font-size: 2rem;
            /* Smaller text on smaller screens */
        }
    }
</style>
<!-- Optional: Add custom styles for extra visual appeal -->
<style>
    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
    }

    .card-body {
        padding: 30px;
        background-color: #f7f7f7;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .btn-outline-primary,
    .btn-outline-success,
    .btn-outline-warning {
        font-size: 0.875rem;
        padding: 8px 16px;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
</style>
<!-- Optional: Add custom styles for extra visual appeal -->
<style>
    .content-headline {
        font-size: 2rem;
        font-weight: 700;
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
        /* Blue color for headline */
    }

    .content-text {
        font-size: 1.125rem;
        color: #555;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 400;
        color: #444;
    }

    .container {
        max-width: 1140px;
        /* Limits the max width */
    }

    @media (max-width: 767px) {
        .content-headline {
            font-size: 1.5rem;
            /* Smaller headline on mobile */
        }

        .lead {
            font-size: 1.125rem;
            /* Adjust lead text for smaller screens */
        }
    }
</style>
<!-- Optional: Add custom styles for extra visual appeal -->

<style>
    .partner-benefits-title {
        font-size: 2.25rem;
        font-weight: 700;
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
        text-align: center;
    }

    .partner-benefit-box {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        height: 100%;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .partner-benefit-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .partner-benefit-heading {
        font-size: 1.4rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .partner-benefit-description {
        font-size: 1rem;
        color: #666;
        flex-grow: 1;
    }

    .container {
        max-width: 1200px;
    }

    /* Adjusting the layout for smaller screens */
    @media (max-width: 767px) {
        .partner-benefits-title {
            font-size: 1.75rem;
            /* Adjust title size */
        }

        .partner-benefit-box {
            padding: 2rem;
            margin-bottom: 20px;
        }

        .partner-benefit-heading {
            font-size: 1.2rem;
        }

        .partner-benefit-description {
            font-size: 0.9rem;
        }
    }
</style>

<!-- Optional: Add custom styles -->
<style>
    .container {
        max-width: 1200px;
    }

    .accordion .card-header {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
    }

    .accordion .card-body {
        background-color: #fafafa;
    }

    .card-title {
        font-size: 1.25rem;
    }

    .btn-link {
        color: #0056b3;
        text-decoration: none;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>

<!-- Optional: Add custom styles -->
<style>
    .custom-container {
        max-width: 1200px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
        text-align: center;
    }

    .section-description {
        font-size: 1.25rem;
        color: #333;
        text-align: center;
    }

    .custom-card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: all 0.3s ease-in-out;
    }

    .custom-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .custom-card-img {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .custom-card-body {
        padding: 15px;
    }

    .custom-card-title {
        font-size: 1.4rem;
        font-weight: 600;
        text-align: center;
        color: #333;
    }

    .custom-card-text {
        font-size: 1rem;
        text-align: center;
        color: #666;
    }

    .custom-card-header {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 10px 10px 0 0;
    }

    .custom-card-body {
        background-color: #f9f9f9;
    }

    .btn-link {
        color: #00b09c;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-link:hover {
        color: #0090f9;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>

<!-- Optional: Add custom styles -->
<style>
    .custom-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        -webkit-background-clip: text;
        color: transparent;
        text-align: center;
        margin-bottom: 30px;
    }

    .section-description {
        font-size: 1.25rem;
        color: #333;
        text-align: center;
        margin-bottom: 40px;
    }

    .custom-card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: all 0.3s ease-in-out;
    }

    .custom-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .custom-card-img {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .custom-card-body {
        padding: 15px;
    }

    .custom-card-title {
        font-size: 1.4rem;
        font-weight: 600;
        text-align: center;
        color: #333;
    }

    .custom-card-text {
        font-size: 1rem;
        text-align: center;
        color: #666;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    /* Large Screen (Desktops and Tablets) */
    .responsive-heading {
        font-size: 3.5em !important;
    }

    .responsive-heading1 {
        font-size: 2.5em !important;
        padding: 10px;
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

<body>

    <div class="content-wrapper">
        <main role="main" class="">
            <div class="container-fluid" style="background-image: url('assets/images/becoming-partner/banner.png'); background-size: cover; background-position: 0% 90% ; height:60vh;">
            </div>

            <div class="container" id="page-head">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="ce_ser_head_2 block">
                            <div class="serhead-main-headline">
                                <h1 class="responsive-heading1 fw-bold">Join the <span class="gradient">SmartIDP Global</span> Partner Network</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container" id="article-32843">
                <div class="row justify-content-center mb-5">
                    <div class="col-12">
                        <section class="icon-boxes">
                            <div class="row text-center">
                                <!-- Box 1: Drive Business Opportunities -->
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="card shadow-lg border-0 rounded">
                                        <div class="card-body">
                                            <h3 class="card-title text-primary">Drive Business Opportunities</h3>
                                            <p class="card-text">Partnering with SmartIDP enables you to access untapped opportunities and deliver exceptional ECM solutions. We work closely with you to drive mutual growth and success.</p>
                                        </div>
                                        <!-- <div class="card-footer bg-transparent border-0">
                                            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Box 2: Targeted Approach -->
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="card shadow-lg border-0 rounded">
                                        <div class="card-body">
                                            <h3 class="card-title text-success">Targeted Approach</h3>
                                            <p class="card-text">We understand that each market and industry is unique. Our partnership will provide you with a focused strategy, tailored to meet the specific needs of your region and customers.</p>
                                        </div>
                                        <!-- <div class="card-footer bg-transparent border-0">
                                            <a href="#" class="btn btn-outline-success btn-sm">Get Started</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Box 3: Practical & Effective Training -->
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="card shadow-lg border-0 rounded">
                                        <div class="card-body">
                                            <h3 class="card-title text-warning">Practical & Effective Training</h3>
                                            <p class="card-text">Gain access to exclusive training modules that help you leverage SmartIDP’s full potential. Our customized and standard partner enablement programs ensure your success.</p>
                                        </div>
                                        <!-- <div class="card-footer bg-transparent border-0">
                                            <a href="#" class="btn btn-outline-warning btn-sm">Become a Partner</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="container" id="article-32865">
                <div class="row align-items-center mb-5">
                    <!-- Left Column: Heading -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <h2 class="responsive-heading1 fw-bold"><span class="gradient">Growth</span> Based on Partnership</h2>
                    </div>
                    <!-- Right Column: Content Text -->
                    <div class="col-lg-8 col-md-12">
                        <div class="content-text">
                            <p class="lead responsive-paragraph text-justify">Are you seeking ways to drive your business growth, improve customer satisfaction, boost revenue opportunities, and gain a competitive edge? We know that to accomplish this, you need to not only offer a flexible, cutting-edge information management technology in your portfolio. You also need support, resources &amp; quick, effective training to deliver top results. SmartIDP offers this and invites you to join the SmartIDP global partner network!</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container" id="partner-benefits">
                <h2 class="responsive-heading1 text-center pb-5">What are the <span class="gradient">benefits of joining the SmartIDP</span> Group partner network?</h2>
                <div class="row">
                    <!-- Partner Benefit 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="partner-benefit-box p-4 border rounded shadow-sm">
                            <h3 class="partner-benefit-heading">Partnering with a market leader</h3>
                            <p class="partner-benefit-description text-justify">
                                Benefit from a partnership with SmartIDP, a leading vendor in the ECM market, recognized by
                                <a href="javascript:void(0)">market analysts</a> Gartner and Forrester Research.
                            </p>
                        </div>
                    </div>

                    <!-- Partner Benefit 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="partner-benefit-box p-4 border rounded shadow-sm">
                            <h3 class="partner-benefit-heading">Comprehensive onboarding & enablement</h3>
                            <p class="partner-benefit-description text-justify">
                                We guide you through all stages of the partnership with an elaborate
                                <a href="javascript:void(0)">onboarding and enablement process</a>, including dedicated training and regular meetings.
                            </p>
                        </div>
                    </div>

                    <!-- Partner Benefit 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="partner-benefit-box p-4 border rounded shadow-sm">
                            <h3 class="partner-benefit-heading">Joint market strategy approach</h3>
                            <p class="partner-benefit-description text-justify">
                                We invest in a deep relationship with a joint market strategy to provide you with a strong foundation for software developments & project success.
                            </p>
                        </div>
                    </div>

                    <!-- Partner Benefit 4 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="partner-benefit-box p-4 border rounded shadow-sm">
                            <h3 class="partner-benefit-heading">Quick & professional support</h3>
                            <p class="partner-benefit-description text-justify">
                                We believe in a collaborative approach and offer quick, pragmatic & professional support to ensure your success.
                            </p>
                        </div>
                    </div>

                    <!-- Partner Benefit 5 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="partner-benefit-box p-4 border rounded shadow-sm">
                            <h3 class="partner-benefit-heading">Access to many practical resources</h3>
                            <p class="partner-benefit-description text-justify">
                                Our exclusive Partner Portal gives you access to a wide range of resources, enablement offerings, and insights to boost the success of your marketing, sales, and project implementations.
                            </p>
                        </div>
                    </div>

                    <!-- Partner Benefit 6 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="partner-benefit-box p-4 border rounded shadow-sm">
                            <h3 class="partner-benefit-heading">Ready-to-go solution templates</h3>
                            <p class="partner-benefit-description text-justify">
                                We offer cutting-edge, agile <a href="javascript:void(0)">ECM platform</a> technology with flexible
                                <a href="javascript:void(0)">deployment</a> options and ready-to-go <a href="javascript:void(0)">solution templates</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container custom-container" id="article-34445">
                <h2 class="responsive-heading1 mb-md-5 text-center">Levels of <span class="gradient">Partnership</span></h2>
                <p class="responsive-paragraph text-justify mb-5">
                    In our partner network, we differentiate between three levels of partnership. Our business partners must meet certain requirements for each level. Regardless of the level of partnership, SmartIDP helps its business partners progress to higher levels and meet specific goals.
                </p>

                <div class="row">
                    <!-- Level 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="custom-card">
                            <img src="assets/images/becoming-partner/partner.png" alt="Certified Partner" class="custom-card-img">
                            <div class="custom-card-body">
                                <h5 class="custom-card-title fw-bold" style="color: #0056b3;">Certified Partner</h5>
                                <p class="custom-card-text">Our entry-level partnership for businesses that are certified to sell and implement SmartIDP solutions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Level 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="custom-card">
                            <img src="assets/images/becoming-partner/partner1.png" alt="Gold Partner" class="custom-card-img">
                            <div class="custom-card-body">
                                <h5 class="custom-card-title fw-bold" style="color: #D4AF37;">Gold Partner</h5>
                                <p class="custom-card-text">Partners with extensive experience in implementing SmartIDP solutions with a proven track record of success.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Level 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="custom-card">
                            <img src="assets/images/becoming-partner/partner2.png" alt="Platinum Partner" class="custom-card-img">
                            <div class="custom-card-body">
                                <h5 class="custom-card-title fw-bold" style="color: #B8B8B8;">Platinum Partner</h5>
                                <p class="custom-card-text">Our highest level of partnership for businesses with exceptional expertise and a close relationship with SmartIDP.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container custom-container" id="article-34444">
                <h2 class="responsive-heading1 mb-md-5 text-center">Types of <span class="gradient">Business Partners</span></h2>
                <p class="responsive-paragraph mb-md-5 text-justify">
                    Based on the business model and an agreed go-to-market approach, we differentiate between the following types of business partners to help us respond to different needs and requirements and tailor our partner support.
                </p>

                <div class="row mt-2">
                    <!-- Partner Types List -->
                    <div class="col-lg-8 col-md-12">
                        <ul style="list-style: none; padding-left: 0;">
                            <!-- Software Reseller -->
                            <li style="display: flex; align-items: center; margin-bottom: 20px; font-size: 1.1rem;">
                                <i class="fas fa-cogs" style="font-size: 2rem; color: #007bff; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="partner-title" style="font-size: 1.5rem; font-weight: bold; color: #007bff;">Software Reseller (SWR)</h5>
                                    <p class="responsive-paragraph text-justify" style="color: #333;">From qualified leads to independent selling of SmartIDP without additional project implementation and support.</p>
                                </div>
                            </li>

                            <!-- Value Added Reseller -->
                            <li style="display: flex; align-items: center; margin-bottom: 20px; font-size: 1.1rem;">
                                <i class="fas fa-hand-holding-heart" style="font-size: 2rem; color: #28a745; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="partner-title" style="font-size: 1.5rem; font-weight: bold; color: #28a745;">Value Added Reseller (VAR)</h5>
                                    <p class="responsive-paragraph text-justify" style="color: #333;">Covers all aspects of selling, implementation, and support of SmartIDP for our joint customers. SmartIDP is also enhanced by industry and business solutions designed in-house.</p>
                                </div>
                            </li>

                            <!-- Cloud Solution Provider -->
                            <li style="display: flex; align-items: center; margin-bottom: 20px; font-size: 1.1rem;">
                                <i class="fas fa-cloud" style="font-size: 2rem; color: #17a2b8; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="partner-title" style="font-size: 1.5rem; font-weight: bold; color: #17a2b8;">Cloud Solution Provider (CSP)</h5>
                                    <p class="responsive-paragraph text-justify" style="color: #333;">Provides a shared solution on SmartIDP or implements a dedicated business solution via the cloud.</p>
                                </div>
                            </li>

                            <!-- Global Solution Integrator -->
                            <li style="display: flex; align-items: center; margin-bottom: 20px; font-size: 1.1rem;">
                                <i class="fas fa-globe" style="font-size: 2rem; color: #ffc107; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="partner-title" style="font-size: 1.5rem; font-weight: bold; color: #ffc107;">Global Solution Integrator (GSI)</h5>
                                    <p class="responsive-paragraph text-justify" style="color: #333;">Delivers global roll-out and advises our enterprise customers across countries and continents. Our GSIs are market leaders and understand how to build high-end solutions based on SmartIDP.</p>
                                </div>
                            </li>

                            <!-- Original Equipment Manufacturers -->
                            <li style="display: flex; align-items: center; margin-bottom: 20px; font-size: 1.1rem;">
                                <i class="fas fa-cogs" style="font-size: 2rem; color: #dc3545; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="partner-title" style="font-size: 1.5rem; font-weight: bold; color: #dc3545;">Original Equipment Manufacturers (OEM)</h5>
                                    <p class="responsive-paragraph text-justify" style="color: #333;">To define a joint OEM approach we differentiate between white labelling, light integration, and full OEM. All levels demand strong commitment and a long-term view from both parties.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Partner Image -->
                    <div class="col-lg-4 col-md-12 text-center">
                        <img src="assets/images/becoming-partner/napkin-selection-1.svg" alt="Types of Partners" class="img-fluid rounded shadow-sm" style="max-width: 100%; border-radius: 10px;">
                    </div>
                </div>
            </div>

            <div class="container py-5" id="article-32867">
                <h1 class="responsive-heading1 text-center mb-md-5 fw-bold">Become a <span class="gradient">SmartIDP Partner</span></h1>
                <h3 class="responsive-paragraph text-justify mb-md-4">
                    At SmartIDP, we understand that every automation project requires a variety of skills and expertise. We provide our partners with professional, flexible, and fast training to ensure success.
                </h3>

                <div class="row justify-content-center">
                    <!-- Training from Anywhere -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-laptop-house" style="font-size: 4rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                        </div>
                        <h3 class="mb-3">Training from Anywhere</h3>
                        <p class="responsive-paragraph text-justify">
                            Whether you're looking for individual or standard training modules, we offer flexible training options: at your location, virtually, or at our dedicated SmartIDP facilities – whatever suits your needs best.
                        </p>
                    </div>

                    <!-- Learn from the Experts -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-chalkboard-teacher" style="font-size: 4rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                        </div>
                        <h3 class="mb-3">Learn from the Experts</h3>
                        <p class="responsive-paragraph text-justify">
                            Our team of experts will guide you through the SmartIDP platform, sharing best practices, pro tips, and insights. From basic setup to advanced functionalities, we ensure you're ready to optimize your SmartIDP solutions.
                        </p>
                    </div>

                    <!-- Individual Partner Training -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-user-cog" style="font-size: 4rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                        </div>
                        <h3 class="mb-3">Individual Partner Training</h3>
                        <p class="responsive-paragraph text-justify">
                            Tailored to your market, region, specific needs, and expertise level, our personalized training ensures that you quickly gain the knowledge and skills to maximize your SmartIDP solutions and drive successful implementations.
                        </p>
                    </div>

                    <!-- Standard Training Modules -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-book-open" style="font-size: 4rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                        </div>
                        <h3 class="mb-3">Standard Training Modules</h3>
                        <p class="responsive-paragraph text-justify">
                            Our comprehensive standard training modules are designed to provide an in-depth understanding of the SmartIDP platform. Become a SmartIDP expert by learning the full potential and capabilities of the solution.
                        </p>
                    </div>
                </div>
            </div>




            <div class="container py-4" id="article-32870">
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                        <div class="parallelogram content-image">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/becoming-partner/partner4.png" type="image/webp" class="img-fluid" alt="SmartIDP Partner">
                                    <img src="assets/images/becoming-partner/partner4.png" class="img-fluid" alt="SmartIDP Partner" loading="lazy">
                                </picture>
                            </figure>
                        </div>
                    </div>

                    <!-- Text Column -->
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2>Interested in Becoming a <span class="gradient">SmartIDP Partner?</span></h2>
                            <p class="responsive-paragraph text-justify">Ready to join the SmartIDP global partner network? We offer a range of benefits for our partners, including extensive training, resources, and support to help you succeed in delivering SmartIDP solutions to your customers.</p>
                            <p class="responsive-paragraph text-justify">Our Global Partner Program is designed to empower you with the tools and knowledge to grow your business while working with cutting-edge intelligent automation solutions.</p>
                            <p class="responsive-paragraph text-justify">Start your partnership journey with SmartIDP today and unlock exciting opportunities for collaboration, innovation, and growth.</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</body>
<?php include_once("includes/footer.php"); ?>