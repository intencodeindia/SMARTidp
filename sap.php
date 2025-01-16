<?php include_once("includes/header.php"); ?>
<style>
  /* Blockquote styling */
  .main-content blockquote:before {
    content: "“";
    float: left;
    margin-left: 62px;
    margin-top: -10px;
    font-size: 5em;
    line-height: 1;
    color: #ffff;
  }

  .gradient {
    background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
    /* -webkit-background-clip: text; */
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
</style>
<!-- <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/saps.css"> -->
<div class="content-wrapper">
  <main role="main" class="main-content">

    <div class="container-fluid py-3" id="article-43622" style="background-image: url('assets/images/sap/React.svg'); background-size: cover; background-position: 0% 10%;">
      <div class="container">
        <div id="serhead2-146243" class="serhead2 d-flex justify-content-center align-items-center" data-delay="8" data-parallax="">
          <!-- Slide Container -->
          <div data-id="1" class="slide slide-1 active">
            <div class="slide-content">
              <div class="slide-text">
                <!-- Blockquote with testimonial -->
                <blockquote class="d-none d-xxl-block">
                </blockquote>
                <h2 class="text-white fs-1 text-center">The parallel launch of ECM and SAP was a huge success for the whole company.</h2>
              </div>
            </div>
          </div>
          <!-- Triangle SVG (for design effect) -->
          <svg class="triangle-bottom" viewBox="0 0 2000 125" preserveAspectRatio="xMinYMin meet">
            <polygon points="0,100 0,125 2000,125 2000,0"></polygon>
          </svg>
        </div>
      </div>
    </div>

    <div class="serhead-main-headline text-center">
      <h2 class="fw-bold"><span class="gradient">SAP Integration</span> with smartIDP</h2>
    </div>

    <!-- Article Block for SAP Integration -->
    <div class="mod_article max-width-viewport block" id="article-29430">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
          <div class="centered-wrapper-inner">
            <!-- Icon Boxes Section for SAP Integration Features -->
            <section class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes">
              <!-- First Icon Box: Full Process Transparency -->
              <div class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -inverted-icon">
                <span class="icon-boxes-item-icon" style="width: 3.5em;"><i class="fas fa-eye fa-lg"></i></span> <!-- Updated icon: eye for transparency -->
                <p class="-medium fw-bold">Full Process Transparency</p>
                <div class="icon-boxes-item-text">
                  <p>Bring together emails, contracts, invoices, and much more with SAP transactions, ensuring a complete overview of your processes.</p>
                </div>
              </div>

              <!-- Second Icon Box: Save Time & Prevent Mistakes -->
              <div class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon">
                <span class="icon-boxes-item-icon" style="width: 3.5em;"><i class="fas fa-clock fa-lg"></i></span> <!-- Updated icon: clock for time-saving -->
                <p class="-medium fw-bold">Save Time & Prevent Mistakes</p>
                <div class="icon-boxes-item-text">
                  <p>Automate the capture and verification of inbound invoices and benefit from vendor accounting & liquidity planning updated daily.</p>
                </div>
              </div>

              <!-- Third Icon Box: Minimize Risks -->
              <div class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon">
                <span class="icon-boxes-item-icon" style="width: 3.5em;"><i class="fas fa-shield-alt fa-lg"></i></span> <!-- Updated icon: shield for risk minimization -->
                <p class="-medium fw-bold">Minimize Risks</p>
                <div class="icon-boxes-item-text">
                  <p>Automatically comply with retention periods for documents & SAP data and fulfill data protection regulations, e.g. EU GDPR.</p>
                </div>
              </div>

            </section>

          </div>
        </div>
      </div>
    </div>

    <div class="mod_article max-width-viewport block" id="article-44383">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800">
          <div class="centered-wrapper-inner">
            <!-- Content Section -->
            <div class="content-text">
              <h3 class="fw-bold">Content Bridge SAP</h3>
              <div class="rte">
                <p>Ensure employees have access to a clear picture of data across your ERP and CRM systems. Say goodbye to information silos with smartIDP and close the information gaps between your ERP and CRM systems. With a full overview of customers, opportunities, and deals, you can make informed decisions, speed up processes, and create a shared basis of information.</p>
                <p>Want to learn more about smartIDP?</p>
              </div>
            </div>

            <!-- Button Section to Experience smartIDP -->
            <div class="button-box ce_rsce_oneo_button -left">
              <a class="button ce_rsce_oneo_button -left" href="contact">
                Experience smartIDP
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <hr>
      <h2 class="fw-bold mb-3"><span class="gradient">Experience smartIDP Live!</span></h2>
      <p class="text-dark fw-bold">Join a live demo or schedule a personalized session at your workplace.</p>
      <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 15px 30px; text-decoration: none; 
              border-radius: 50px;">Request live Demo</a>
      <hr>
    </div>

    <div class="mod_article max-width-viewport block" id="article-29432">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start" style=" ">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <div class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"></div>
              <!-- Icon Boxes Section -->
              <div class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                  <!-- 360° view of your projects & business partners -->
                  <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-sync-alt fa-lg"></i></span> <!-- Updated icon: sync-alt for 360° view -->
                    <h3 class="fw-bold">360° view of your projects & business partners</h3>
                    <div class="icon-boxes-item-text">
                      <p>Systematically combine information from SAP, Office & business applications and benefit from a complete overview to expedite decision-making and the provision of information.</p>
                    </div>
                  </div>

                  <!-- Mitigate legal risks -->
                  <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-gavel fa-lg"></i></span> <!-- Updated icon: gavel for legal risks -->
                    <h3 class="fw-bold">Mitigate legal risks</h3>
                    <div class="icon-boxes-item-text">
                      <p>Automate your SAP data archiving, automatically comply with retention periods & fulfill the requirements of the EU GDPR.</p>
                    </div>
                  </div>

                  <!-- Familiar work environment -->
                  <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-desktop fa-lg"></i></span> <!-- Updated icon: desktop for familiar work environment -->
                    <h3 class="fw-bold">Familiar work environment</h3>
                    <div class="icon-boxes-item-text">
                      <p>Continue working as normal in your SAP applications and access documents and additional information from other systems directly from SAP.</p>
                    </div>
                  </div>

                  <!-- Flexible & transparent processes -->
                  <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-exchange-alt fa-lg"></i></span> <!-- Updated icon: exchange-alt for flexible processes -->
                    <h3 class="fw-bold">Flexible & transparent processes</h3>
                    <div class="icon-boxes-item-text">
                      <p>Use the flexible smartIDP workflows to integrate SAP transactions automatically into end-to-end business processes and maintain seamless documentation across department boundaries.</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="text-center fw-bold mb-3">These companies have already <span class="gradient">integrated smartIDP</span> into their <span class="gradient">SAP systems</span></h2>
      <hr>
      <div class="customer-logos-marquee">
        <div class="customer-logos">
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
      <hr>
    </div>

    <div class="mod_article max-width-viewport block" id="article-29436">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start" style=" ">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <!-- Column for the Headline -->
              <div class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                  <h2 class="headline -large fw-bold">Add more information to your business processes</h2>
                </div>
              </div>
              <!-- Column for Content Text -->
              <div class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                <div class="content-text">
                  <div class="rte">
                    <p>SAP is indispensable whenever you process structured data on customers, suppliers, contracts, and orders. But you can only work on a business process completely when you have the related documents. SAP & smartIDP provide them to you: You’ll find emails, contracts, invoices, etc. in the context of your SAP transactions for a complete overview of your processes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mod_article max-width-viewport" id="article-29438">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start ">
          <div class="centered-wrapper-inner ">
            <div class="headline-box -align-left ce_rsce_oneo_headline_box ">
              <h2 class="fw-bold text-center"><span class="gradient">SAP integration</span> with smartIDP combines information &amp; processes</h2>
            </div>
            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
              <!-- Inbound invoices & SAP -->
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-file-invoice fa-lg"></i></span> <!-- Updated icon: file-invoice for inbound invoices -->
                <h3 class="fw-bold">Inbound invoices &amp; SAP</h3>
                <div class="icon-boxes-item-text">
                  <p>Integrated inbound invoice processing and approval processes directly in SAP: smartIDP automates the entire inbound invoice process, from capture and release to fully automated posting in SAP.</p>
                </div>
              </div>

              <!-- Combine SAP data & documents -->
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-folder-open fa-lg"></i></span> <!-- Updated icon: folder-open for combining data and documents -->
                <h3 class="fw-bold">Combine SAP data &amp; documents</h3>
                <div class="icon-boxes-item-text">
                  <p>Contracts, delivery notes, invoices, emails: You no longer need to search for documents relating to SAP transactions in attachment lists, file systems and mailboxes: smartIDP provides these directly from SAP.</p>
                </div>
              </div>

              <!-- Provide context with eFiles -->
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-folder fa-lg"></i></span> <!-- Updated icon: folder for eFiles and bundling data -->
                <h3 class="fw-bold">Provide context with eFiles</h3>
                <div class="icon-boxes-item-text">
                  <p>With electronic files, you can bundle data, documents and workflows in smartIDP, e.g. in the context of your vendors. The smartIDP Folder Cockpit or smartIDP eFiles turn your attachments list directly in SAP into a complete file.</p>
                </div>
              </div>

              <!-- Enhance SAP with DMS functions -->
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-lg"></i></span> <!-- Updated icon: cogs for DMS functions and enhancements -->
                <h3 class="fw-bold">Enhance SAP with DMS functions</h3>
                <div class="icon-boxes-item-text">
                  <p>Versioning, annotations, filing and searches: smartIDP adds missing DMS functions to SAP. This enables you to work on documents conveniently and traceably — and manage documents in an audit-proof manner. For all SAP filing and capture scenarios.</p>
                </div>
              </div>
            </section>

          </div>
        </div>
      </div>
    </div>
    <div class="mod_article max-width-viewport block" id="article-29436">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start" style=" ">
          <div class="centered-wrapper-inner">
            <hr>
            <div class="rs-columns ce_rs_columns_start">
              <!-- Column for the Headline -->
              <div class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                  <h2 class="headline -large">Add more information to your business processes</h2>
                </div>
              </div>
              <!-- Column for Content Text -->
              <div class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                <div class="content-text">
                  <div class="rte">
                    <p>SAP is indispensable whenever you process structured data on customers, suppliers, contracts, and orders. But you can only work on a business process completely when you have the related documents. SAP & smartIDP provide them to you: You’ll find emails, contracts, invoices, etc. in the context of your SAP transactions for a complete overview of your processes.</p>
                  </div>
                </div>

              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
    <div class="mod_article max-width-viewport ser-hide-mobile block" id="article-29443">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <!-- Column for Image -->
              <div class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                <div class="content-image">
                  <figure>
                    <img src="assets/images/sap/flexible.webp" alt="smartIDP offers standout usability" title="smartIDP is all about usability" width="250" height="412">
                  </figure>
                </div>
              </div>

              <!-- Column for Text Content -->
              <div class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                  <h3 class="headline -large fw-bold">Added flexibility for your processes</h3>
                </div>
                <div class="content-text">
                  <div class="rte">
                    <p>SAP workflows are practical, but sometimes a bit rigid. With smartIDP, you can design flexible standard and ad hoc processes customized exactly to your needs and incorporate information from a range of integrated business applications. smartIDP responds to events in SAP and initiates many processes automatically:</p>
                    <ul>
                      <li class="icon-arrow-5-right">Create new eFiles & processes — without ABAP programming</li>
                      <li class="icon-arrow-5-right">Automatic indexing & assignment of new SAP information</li>
                      <li class="icon-arrow-5-right">smartIDP archives all SAP data & related documents in line with audit requirements</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mod_article max-width-viewport ser-hide-mobile block" id="article-29444">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <div class="ce_rs_column_start rs-column -large-col-3-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                  <h3 class="headline -large fw-bold">Certified interfaces</h3>
                </div>
                <div class="content-text">
                  <div class="rte">
                    <p>As a long-standing certified partner of SAP, SER ensures a deep integration of SAP and smartIDP. With the certified interfaces and add-ons, as well as its own namespace in SAP, smartIDP is fully integrated — also for SAP S/4HANA.</p>
                    <ul>
                      <li class="icon-arrow-5-right">SAP add-on for automated invoice verification</li>
                      <li class="icon-arrow-5-right">SAP interface for archiving via ArchiveLink</li>
                      <li class="icon-arrow-5-right">smartIDP WebDAV Connector for ILM</li>
                    </ul>
                  </div>
                </div>
                <div class="button-box ce_rsce_oneo_button -left">
                  <a class="button ce_rsce_oneo_button -left" href="contact">
                    Learn more </a>
                </div>
              </div>
              <div class="ce_rs_column_start rs-column -large-col-3-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                <div class="ser-hide-mobile">
                  <div class="content-image">
                    <figure>
                      <img src="https://cdn.sergroup.com/assets/images/x/ser-sap-partner-logo3-z748nzpy6sgzz22.jpg" alt="" width="267" height="300">
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