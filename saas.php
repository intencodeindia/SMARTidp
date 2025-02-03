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

    /* Default styles for the empowerment-text class */
    .empowerment-text {
        text-transform: uppercase;
        font-weight: bold;
        color: white;
        font-size: 2rem;
        /* Base font size for mobile */
        line-height: 1.3;
        text-align: center;
        /* Ensures it's centered */
        margin: 0 auto;
    }

    /* Medium screen (Tablet) */
    @media (max-width: 556px) {
        .empowerment-text {
            font-size: 1.2rem;
            /* Larger font size for tablets */
        }
    }

    /* Medium screen (Tablet) */
    @media (min-width: 768px) {
        .empowerment-text {
            font-size: 1.5rem;
            /* Larger font size for tablets */
        }
    }

    /* Large screen (Desktop) */
    @media (min-width: 1024px) {
        .empowerment-text {
            font-size: 2rem;
            /* Even larger font size for desktops */
        }
    }

    /* Extra large screen (Large Desktop) */
    @media (min-width: 1200px) {
        .empowerment-text {
            font-size: 2.5rem;
            /* For very large screens */
        }
    }
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
                            <div class="empowerment-text">
                                Empowering tens of thousands of users with SmartIDP automation, anytime, anywhere
                            </div>

                        </div>
                        <div class="mt-4">
                            <a class="btn rounded-pill px-4 text-white fw-bold" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-md-4">
            <div class="serhead-main-headline">
                <h2 class="fw-bold text-center mb-md-4"><span class="gradient">SmartIDP</span> for Intelligent Automation, Business Process Management & Collaboration</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-cloud fa-lg"></i> <!-- Cloud icon for SaaS -->
                        </div>
                        <h3 class="fw-bold">Software-as-a-Service</h3>
                        <p>Optimize your business processes with SmartIDP’s intelligent automation platform, while maintaining full transparency of operating costs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-headset fa-lg"></i> <!-- Headset icon for Always Available -->
                        </div>
                        <h3 class="fw-bold">Always Available</h3>
                        <p>You focus on your core business, while we ensure that your SmartIDP solutions run smoothly and efficiently, 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-cogs fa-lg"></i> <!-- Cogs icon for adaptability -->
                        </div>
                        <h3 class="fw-bold">Completely Adaptable</h3>
                        <p>SmartIDP is designed to grow with your business — customize and scale it to your company’s evolving needs and requirements.</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="container my-5">
            <div class="row align-items-center"> 
                <!-- Image Column -->
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="assets/images/egslogo.png" alt="Equilon Global Synergies Trading Logo" class="img-fluid" width="180" height="162" loading="lazy">
                </div>

                <!-- Text Column -->
                <div class="col-md-8">
                    <blockquote class="blockquote">
                        <p class="mb-0">At Equilon Global Synergies Trading, we leverage innovative strategies and advanced technologies to drive international trade. Our commitment to delivering reliable, efficient, and secure trade solutions ensures seamless business operations and strengthens global partnerships across various industries.</p>
                    </blockquote>
                    <footer class="blockquote-footer" style="font-size: 0.6em;">CEO, Equilon Global Synergies Trading</footer>
                </div>
            </div>
        </div>


        <div class="container" id="article-29421">
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Information accessible everywhere & at any time -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-cloud fa-md"></i></span> <!-- Cloud icon for access anytime -->
                                <h3 class="fw-bold">Information accessible everywhere & at any time</h3>
                                <p>Access your critical data and business processes from anywhere, anytime. SmartIDP integrates seamlessly with cloud services like Office 365 and Salesforce, ensuring your business momentum is never interrupted.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Improve resource utilization -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span> <!-- Cogs icon for resource optimization -->
                                <h3 class="fw-bold">Improve resource utilization</h3>
                                <p>SmartIDP offers optimized cost structures, helping you achieve lower total cost of ownership (TCO) while utilizing your IT resources more efficiently to focus on core business needs.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Reliable, secure & endlessly extendible -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-shield-alt fa-lg"></i></span> <!-- Shield icon for security & reliability -->
                                <h3 class="fw-bold">Reliable, secure & endlessly extendible</h3>
                                <p>SmartIDP leverages top-tier cloud infrastructure, ensuring maximum security with up to 99.99% availability. Our solution is designed to scale dynamically with your growing business needs.</p>
                            </div>
                        </div>
                    </section>

                </div>
                <!-- Right Column: Icon Boxes -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- Short time to market -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-clock fa-lg"></i></span> <!-- Clock icon for time to market -->
                                <h3 class="fw-bold">Short time to market</h3>
                                <p>Deploy ECM, BPM, and collaboration solutions rapidly with SmartIDP’s pre-configured templates and solution packages. Customize easily to meet your business needs, ensuring faster delivery.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Roll out new solutions fast -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span> <!-- Cogs icon for deployment & customization -->
                                <h3 class="fw-bold">Roll out new solutions fast</h3>
                                <p>SmartIDP’s cloud deployment options provide flexibility without sacrificing functionality. Our low-code design tools allow you to quickly adapt the platform to your business processes.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Help when you need it -->
                            <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <span class="icon-boxes-item-icon"><i class="fas fa-headset fa-lg"></i></span> <!-- Headset icon for support -->
                                <h3 class="fw-bold">Help when you need it</h3>
                                <p>Take advantage of our dedicated Professional Services and support teams. Choose the service package that best suits your needs to ensure the continued success of your SmartIDP platform.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="container my-md-5">
            <div class="row align-items-center">
                <!-- Heading Column -->
                <div class="col-md-4 text-left mb-4 mb-md-0">
                    <h2 class="fw-bold">Scalable to meet your evolving needs</h2>
                </div>
                <!-- Text Content Column -->
                <div class="col-md-8">
                    <p>
                        Whether deployed in the cloud or on-premises, SmartIDP provides flexible, tailored ECM, BPM, and collaboration solutions on a single platform. With SmartIDP, you get a unified technology stack with a broad functional scope that’s both user-friendly and highly adaptable to your business processes. Our cloud-based solutions are cutting-edge and require minimal maintenance, allowing you to focus on what matters most. The seamless scalability of SmartIDP, combined with the dynamic power of modern cloud infrastructure, ensures it can grow and evolve with your business needs. While you concentrate on driving your business forward, we ensure your SmartIDP platform is running smoothly and efficiently, around the clock. Start your journey with SmartIDP-as-a-service today.
                    </p>
                    <!-- Button -->
                    <div class="text-left">
                        <a class="btn rounded-pill px-4 text-white fw-bold" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Go to contact form</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-md-4" id="article-29421">
            <h2 class="text-left fw-bold">Your options in the<span class="gradient"> SmartIDP Cloud</span></h2>
            <div class="row align-items-center">
                <!-- Left Column: Icon Boxes -->
                <div class="col-md-6">
                    <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                        <div class="row">
                            <!-- SmartIDP-as-a-service -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                                <!-- Robot icon for automation -->
                                <span class="icon-boxes-item-icon"><i class="fas fa-robot fa-md"></i></span>
                                <h3 class="fw-bold">SmartIDP-as-a-service</h3>
                                <p>Three comprehensive service packages plus optional add-ons: Our SmartIDP-as-a-service packages offer up to 24/7 availability, complete management of your SmartIDP environment, and seamless automation to keep your workflows running smoothly at all times.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- SmartIDP classification & extraction-as-a-service -->
                            <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                                <!-- Life-ring icon for support and services -->
                                <span class="icon-boxes-item-icon"><i class="fas fa-life-ring fa-md"></i></span>
                                <h3 class="fw-bold">SmartIDP Classification & Extraction-as-a-Service</h3>
                                <p>A hybrid cloud service that automatically analyzes and classifies both incoming and existing documents in your on-premises system, extracting relevant data and providing it as metadata for use in workflows or other business processes.</p>
                            </div>
                        </div>
                    </section>

                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="content-image text-center">
                        <figure>
                            <img src="assets/images/logo/logo1.png" alt="Microsoft Outlook Integration" class="img-fluid" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-md-5">
            <div class="row align-items-center">
                <!-- Heading Column -->
                <div class="col-md-4 text-left mb-4 mb-md-0">
                    <h2 class="fw-bold">Cloud, On-Premises & Hybrid</h2>
                </div>
                <!-- Text Content Column -->
                <div class="col-md-8">
                    <p><strong>SmartIDP in the cloud, on-premises, or as a hybrid solution — </strong>choose the deployment that suits your business needs best.</p>
                    <p>
                        Stay agile with SmartIDP: Seamlessly combine cloud-based SmartIDP solutions with on-premises infrastructure or hybrid setups to meet your specific requirements. The advantage: consistent user interfaces and automated workflows across your organization. SmartIDP stands as the leading intelligent document processing platform, offering a unified experience whether deployed on-premises or in the cloud.
                    </p>
                </div>
            </div>
        </div>

        <div class="container my-md-5 my-2">
            <section class="row align-items-center feature-box">
                <!-- Text Column -->
                <div class="col-md-6 content-text">
                    <h5 class="fw-bold">SmartIDP Software-as-a-Service:<br>Technical Highlights</h5>
                    <ul class="list-unstyled">
                        <li>All SmartIDP content, processes & cognitive services in the cloud</li>
                        <li>Certified data centers (e.g. ISO 27001, ISO 27018, SOC 1/2/3)</li>
                        <li>Market-leading public cloud infrastructure, extendible at any time</li>
                        <li>AES256 encryption on the storage level (at rest)</li>
                        <li>HTTPS communication/SSL encryption (in transit)</li>
                        <li>Customizing & multitenant architecture</li>
                        <li>Scales with your users and storage needs</li>
                        <li>Optimal load balancing and failover mechanisms</li>
                        <li>Ongoing audit trail & system monitoring</li>
                        <li>24/7 monitoring & support</li>
                    </ul>
                    <a class="btn rounded-pill px-4 text-white fw-bold mb-3" href="contact" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">More details</a>
                    
                </div>
                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    
                        <img src="assets/images/saas.jpeg"  alt="SmartIDP Cloud" loading="lazy" class="img-fluid" style="border-radius: 20px;">
                    
                </div>
            </section>
        </div>


    </main>
</div>
<?php include_once("includes/footer.php"); ?>