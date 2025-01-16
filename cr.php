<?php include_once("includes/header.php"); ?>
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/cr.css">
<script src="https://cdn.sergroup.com/assets/js/jquery.min.js-c31f118d.js"></script>
<style>
    /* General styling */
/* General styling */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #333;
    background-color: #f3f5fd;
}

.main-content {
    padding: 20px;
}

/* Section header styling */
h1 {
    color: #3a3a3a;
    font-weight: 600;
    text-align: center;
    margin-bottom: 40px;
}

/* Customer list container styling */
#customer-list-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px 0;
    max-width: 1200px;
    margin: 0 auto;
    justify-content: space-between; /* Distributes cards evenly */
}

/* Individual customer card styling */
.customer-card {
    background: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    width: 30%; /* Ensures 3 cards per row */
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    min-height: 250px; /* Ensures all cards have uniform height */
}

.customer-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
    background-color: #f0f8ff;
}

/* Customer logo styling */
.customer-logo img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Customer information styling */
.customer-info .customer-name {
    font-weight: bold;
    font-size: 1.1rem;
    margin-bottom: 8px;
    color: #0056b3;
}

.customer-info .customer-description {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.4;
}

/* Responsive design */
@media (max-width: 1024px) {
    .customer-card {
        width: 45%; /* 2 cards per row on medium screens */
    }
}

@media (max-width: 768px) {
    .customer-card {
        width: 100%; /* Single column on smaller screens */
    }
}

</style>
<!-- <body> -->

    <div class="content-wrapper">
        <main role="main" class="main-content">
            <div class="mod_article  max-width-viewport block" id="article-2945">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start " style="background-color: #f3f5fd; ">
                        <div class="centered-wrapper-inner ">
                            <div class="content-text">
                                <div class="rte">
                                    <h1 style="color: #3a3a3a; margin-bottom: 0; font-weight: 600; text-align: center;">Customer References</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mod_article  max-width-viewport block" id="article-2946" style="margin-top: 0px;">
                <div class="mod_article_inner">
                    <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start " style="background-color: #f3f5fd; ">
                        <div class="centered-wrapper-inner ">
                            <div class="ce_customer_list block">
                                <div id="customer-list-container">
                                    <div id="customer-list">
                                        <div id="customer-1873" class="customer  dms electronic-archiving workflow industrial-sector utilities National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/s/steag_fernwaerme_300x169-kxwbw8wvvhxzfp5.png" alt="Logo: STEAG Fernwärme GmbH" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">STEAG Fernwärme GmbH</p>
                                                    <p class="customer-description">Workflow-supported processes for managing district-heating connections</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <a href="https://www.sergroup.com/en/references/detail/steag-fernwaerme-gmbh.html">To the case study <span>»</span></a>
                                            </div>
                                        </div>
                                        <div id="customer-294" class="customer  electronic-records public-administration National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/w/land-brandenburg-logo-q4pyefsgagkgf88.png" alt="Land Brandenburg" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">Land Brandenburg</p>
                                                    <p class="customer-description">Electronic records, processing and cabinet information system.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-297" class="customer  electronic-archiving email services Europaweit">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/q/mairdumont-logo-c4r8t4px0sgst2q.png" alt="MairDumont" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">MairDumont</p>
                                                    <p class="customer-description">Audit-proof email archiving under Lotus Notes with Doxis eMail Center and Doxis safeLock.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-283" class="customer  electronic-archiving electronic-processing-of-invoices industrial-sector National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/1/metabo-logo-sj02gwhezxhhjew.png" alt="Metabowerke GmbH" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">Metabowerke GmbH</p>
                                                    <p class="customer-description">Automated inbound invoice processing and email management.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-259" class="customer  dms electronic-records electronic-archiving banking-finance National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/y/nationalbank-bvqfvztz2xnn6pd.jpg" alt="National Bank" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">National Bank</p>
                                                    <p class="customer-description">Archiving and electronic records.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-348" class="customer  electronic-processing-of-invoices workflow commerce National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/g/newyorker-logo-az0n253n0mn591z.png" alt="New Yorker" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">New Yorker</p>
                                                    <p class="customer-description">Automated processing of incoming invoices with the Doxis InvoiceMaster.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-284" class="customer  electronic-archiving industrial-sector National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/d/nur-die-logo-9c48kwg9kc7rd9j.png" alt="NUR DIE GmbH" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">NUR DIE GmbH</p>
                                                    <p class="customer-description">Archiving all orders, invoices and delivery notes.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-331" class="customer  dms electronic-records electronic-archiving workflow services National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/y/oebb-immobilien-logo-95z33sz30n27mk2.png" alt="ÖBB Immo" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">ÖBB Immo</p>
                                                    <p class="customer-description">Management of all business-related documents for properties.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-327" class="customer  electronic-records electronic-archiving workflow health-care National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/v/oberoesterreichische_gesundheitsholding_web-b7bnq74aj137zzr.png" alt="Oberösterreichische Gesundheitsholding" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">Oberösterreichische Gesundheitsholding</p>
                                                    <p class="customer-description">Archiving and electronic records.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-261" class="customer  dms electronic-records electronic-archiving workflow services National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/3/rbs-logo-ra73jpt6p2mdf5y.png" alt="RBS roever broenner susat" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">RBS roever broenner susat</p>
                                                    <p class="customer-description">Archiving, document management &#40;DMS&#41;, workflow and electronic records.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-298" class="customer  dms electronic-archiving commerce Europaweit">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/y/richemont-logo-4h1sda4vw5akfpn.png" alt="RICHEMONT Northern Europe GmbH" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">RICHEMONT Northern Europe GmbH</p>
                                                    <p class="customer-description">Archiving SAP data and invoicing documents.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-275" class="customer  dms electronic-archiving electronic-processing-of-incoming-mails commerce National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/0/sportscheck-logo-f5c6mdkbw7mb6qr.png" alt="SportScheck GmbH" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">SportScheck GmbH</p>
                                                    <p class="customer-description">Invoice capture and electronic archiving of invoices.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-271" class="customer  dms electronic-archiving industrial-sector Europaweit">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/d/strabag-logo-wtjdvz8g1nrxy07.png" alt="STRABAG" loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">STRABAG</p>
                                                    <p class="customer-description">Archiving in the commercial sector.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
                                        </div>
                                        <div id="customer-299" class="customer  electronic-archiving electronic-processing-of-invoices public-administration National">
                                            <div class="customer-content">
                                                <div class="customer-logo">
                                                    <img src="https://cdn.sergroup.com/assets/images/z/strassen-nrw-logo-9kpm5ecc240ta2a.png" alt="Straßen.NRW." loading="lazy">
                                                </div>
                                                <div class="customer-info">
                                                    <p class="customer-name">Straßen.NRW.</p>
                                                    <p class="customer-description">Automated inbound invoice processing.</p>
                                                </div>
                                            </div>
                                            <div class="customer-case-study">
                                                <span><span>&#x200b;</span></span>
                                            </div>
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
<!-- </body> -->
<?php include_once("includes/footer.php"); ?>