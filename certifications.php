<?php include_once("includes/header.php"); ?>
<style>
    .hero-section {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        padding: 5rem 0;
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

    .cert-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 1rem;
    }

    .trust-banner {
        /* background: linear-gradient(to right, #14aefb, #00bfff); */
        background: linear-gradient(to right, #14aefb, #00bfff, #1e90ff);
        border-radius: 1rem;
        padding: 2rem;
        margin-top: 4rem;
    }
</style>

<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid" id="article-43622">
            <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                    SmartIDP</h2>
            </div>
            <?php include_once("smartidp_logos.php"); ?>
        </div>


        <!-- Hero Section -->
        <div class="hero-section text-white">
            <div class="container text-center">
                <h2 class="display-4 fw-bold mb-4">Trust in Our Excellence</h2>
                <p class="lead text-light opacity-90">
                    Our commitment to quality and security is validated by internationally recognized certifications
                </p>
            </div>
        </div>
        <!-- Certifications Section -->
        <div class="container py-5">
            <div class="row g-4">
                <!-- CMMI Certification -->
                <div class="col-md-4">
                    <div class="card custom-card-shadow h-100">
                        <div class="card-body text-center p-4">
                            <img src="assets/images/certificates_page/cmmi-cert.png"
                                alt="CMMI Certification"
                                class="cert-image mb-3">
                            <h4 class="card-title fw-bold">CMMI Maturity Level 3</h4>
                            <p class="text-muted mb-3">Information Technology, Security, Applications & Software</p>
                            <a href="assets/certificates/KENZ_INNOVATIONS_CMMI.pdf" target="_blank" class="btn rounded-pill text-white" style="background-color: #2b88c4;">View Certificate</a>
                        </div>
                    </div>
                </div>

                <!-- ISMS / ISO 27001 Certification -->
                <div class="col-md-4">
                    <div class="card custom-card-shadow h-100">
                        <div class="card-body text-center p-4">
                            <img src="assets/images/certificates_page/isms-cert.png"
                                alt="ISMS Certification"
                                class="cert-image mb-3">
                            <h4 class="card-title fw-bold">ISO/IEC 27001:2013</h4>
                            <p class="text-muted mb-3">Cyber Security, Data Protection & Risk Management</p>
                            <a href="assets/certificates/kenz_innovations.pdf" target="_blank" class="btn rounded-pill text-white" style="background-color: #2b88c4;">View Certificate</a>
                        </div>
                    </div>
                </div>

                <!-- ISO 9001:2015 Certification -->
                <div class="col-md-4">
                    <div class="card custom-card-shadow h-100">
                        <div class="card-body text-center p-4">
                            <img src="assets/images/certificates_page/iso-cert.png"
                                alt="ISO 9001 Certification"
                                class="cert-image mb-3">
                            <h4 class="card-title fw-bold">ISO 9001:2015</h4>
                            <p class="text-muted mb-3">Software Development, IT Services & <br>Consulting</p>
                            <a href="assets/certificates/KENZ_ISO9001.pdf" target="_blank" class="btn rounded-pill text-white" style="background-color: #2b88c4;">View Certificate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Banner -->
            <div class="trust-banner text-white text-center">
                <h2 class="display-6 fw-bold mb-3">Why Our Certifications Matter</h2>
                <p class="lead opacity-75 mx-auto" style="max-width: 800px;">
                    These certifications demonstrate our unwavering commitment to quality, security, and continuous improvement.
                    When you work with us, you're choosing a partner dedicated to maintaining the highest industry standards.
                </p>
            </div>
        </div>

    </main>
</div>

<?php include_once("includes/footer.php"); ?>