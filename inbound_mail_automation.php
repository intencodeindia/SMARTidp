<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
  .gradient {
    background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
    -webkit-background-clip: text;
    color: transparent;
  }


  .carousel-item {
    height: 400px;
  }

  @media (max-width:768) {}

  .image-container {
    position: relative;
    width: 100%;
    height: 500px;

  }


  .custom-image {
    width: 100%;
    height: 400px;
  }

  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    /* Adjust opacity and color as needed */
    transition: all 0.3s ease;
  }

  .image-container:hover .image-overlay {
    background-color: rgba(0, 0, 0, 0.7);
    /* Change overlay color on hover */
  }

  /* .heading{
  font-size: medium !important;
} */
  @media (max-width: 767px) {
    .heading {
      font-size: large !important;
    }
  }

  @media (max-width: 536px) {
    .heading {
      font-size: 16px !important;
    }
  }
</style>

<div class="content-wrapper">
  <main role="main" class="main-content">

    <div class="container-fluid py-5" style="background-image: url('assets/images/inbound_mail_automation/pic3.jpg'); height: 60vh;background-size: 100%; background-repeat: no-repeat ; display: flex; justify-content: center; align-items: center;">
      <div class="container text-center">
        <h2 class="text-white" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
          "SmartIDP automates inbound mail processing, ensuring timely handling and improving efficiency in meeting deadlines."
        </h2>
      </div>
    </div>




    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="image-container">
            <img src="assets/images/inbound_mail_automation/emailauto1.webp" class="d-block w-100 mt-1 my-3 g-2 custom-image img-fluid" loading="lazy" style="height: 400px;" alt="...">
            <div class="image-overlay"></div>
          </div>
          <div class="carousel-caption">
            <h1 class="text-white heading">"Previously, invoice processing could take over three weeks, risking eligibility for cash discounts. With SmartIDP, the process has been streamlined, ensuring timely processing and maximizing discount opportunities."</h1>
            <p class="text-white">Placeholder content for the initial slide.</p>
            <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 15px 30px; text-decoration: none; border-radius: 50px;">Learn More</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="image-container">
            <img src="assets/images/inbound_mail_automation/emailauto2.webp" class="d-block w-100 img-fluid" style="height:80%" loading="lazy" alt="...">
            <div class="image-overlay"></div>
          </div>
          <div class="carousel-caption">
            <h1 class="text-white heading">"The digital workbasket was quickly embraced by all users, resulting in a 75% reduction in the time and resources spent on mail distribution."</h1>
            <p class="text-white">Sample placeholder content for the second slide.</p>
            <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 15px 30px; text-decoration: none; border-radius: 50px;">Learn More</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="image-container">
            <img src="assets/images/inbound_mail_automation/smart2.jpeg" class="d-block w-100 img-fluid" style="height:70%" loading="lazy" alt="...">
            <div class="image-overlay">
            </div>
          </div>
          <div class="carousel-caption">
            <h1 class="text-white heading">"Previously, invoice processing could take over three weeks, risking eligibility for cash discounts. With SmartIDP, the process has been streamlined, ensuring timely processing and maximizing discount opportunities."</h1>
            <p class="text-white heading">Placeholder content for the third slide.</p>
            <a href="contact.php" class="button ce_rsce_oneo_button rounded-eclipse text-center my-md-3 fw-bold" style="background-color: #0090f9; color: white; padding: 15px 30px; text-decoration: none; border-radius: 50px;">Learn More</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->


    <div class="container ">
      <div class="row text-center ">
        <h2 class="responsive-heading1 fw-bold my-5">Electronic Inbound Mail with
          <span class="gradient fw-bold"> SmartIDP <br>
        </h2>
      </div>
      <section class="row text-center">
        <!-- First Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="text-center">
            <div class="card-body">
              <i class="fa-solid fa-arrow-right fa-3x mb-3 gradient"></i>
              <!-- Font Awesome Icon for efficiency and forward action -->
              <h4 class="card-title fw-bold">Boost Revenue with SmartIDP</h4>
              <p class="card-text">Quickly forward inbound mail to the right person and enhance order processing
                efficiency with SmartIDP.</p>
            </div>
          </div>
        </div>
        <!-- Second Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="text-center">
            <div class="card-body">
              <i class="fa-solid fa-bolt fa-3x mb-3 gradient"></i>
              <!-- Font Awesome Icon for speed and responsiveness -->
              <h4 class="card-title fw-bold">Respond Faster with SmartIDP.</h4>
              <p class="card-text">Respond to service cases, customer inquiries, and supplier offers instantly,
                eliminating idle periods and transportation delays with SmartIDP.</p>
            </div>
          </div>
        </div>
        <!-- Third Card -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="text-center">
            <div class="card-body">
              <i class="fa-solid fa-stream fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon for workflow automation -->
              <h4 class="card-title fw-bold">Optimize Resource Usage with SmartIDP.</h4>
              <p class="card-text">Automate time-consuming tasks such as sorting, classifying, and distributing inbound
                mail with SmartIDP.</p>
            </div>
          </div>
        </div>

      </section>
      <div class="mod_article max-width-viewport block" id="article-44383">
        <div class="mod_article_inner">
          <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800">
            <div class="centered-wrapper-inner">
              <!-- Content Section -->
              <div class="content-text">
                <h3 class="fw-bold">Inbound Mail Automation with SmartIDP</h3>
                <div class="rte">
                  <p class="justify-content-center">Getting all your relevant emails directly to your inbox is just the
                    beginning. With SmartIDP, automate the processing of documents you receive by mail, ensuring the
                    right information reaches the right people. This drives productivity, streamlines workflows, and
                    accelerates customer service, laying the foundation for more efficient processes.</p>
                  <p>Want to learn more about SmartIDP?</p>
                </div>
              </div>

              <!-- Button Section to Experience SmartIDP -->
              <div class="button-box ce_rsce_oneo_button -left">
              <a href="contact" class="button ce_rsce_oneo_button rounded-pill text-center my-md-3" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); color: white; padding: 10px 20px; text-decoration: none;">Experience SmartIDP</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-md-5 justify-content-center">
      <div class="row align-items-center">
        <!-- Left Column: Headline -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="headline-box">
            <h2 class="fw-bold">Get more out of your <span class="gradient">documents, emails, and more</span>
            </h2>
          </div>
        </div>

        <!-- Right Column: Content Text -->
        <div class="col-lg-6">
          <div class="content-text">
            <p class="justify-content-center">With SmartIDP, I now have quick access to all the important information I
              need. Previously, I had to pick up new mail three times a day at the team management office, but now I receive
              it conveniently in my electronic mailbox—such an efficient solution!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <hr>
      <h2 class="fw-bold mb-3"><span class="gradient">Discover SmartIDP in Action!</span></h2>
      <p class="text-dark fw-bold">Experience SmartIDP in a live demo or directly at your business.</p>
      <a href="contact" class="button ce_rsce_oneo_button rounded-pill text-center my-md-3" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); color: white; padding: 10px 20px; text-decoration: none;">Request Live Demo</a>

    </div>
    <div class="mod_article max-width-viewport block" id="article-29432">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start" style=" ">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <div
                class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
              </div>
              <!-- Icon Boxes Section -->
              <div
                class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
                  <!-- Simplify Workflows -->
                  <div
                    class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-robot"></i></span>
                    <!-- Updated icon: robot for automation -->
                    <h3 class="fw-bold">Simplify workflows with SmartIDP.</h3>
                    <div class="icon-boxes-item-text">
                      <p class="justif-content-center">Let SmartIDP automatically assign your inbound documents to the
                        appropriate eFiles, processes, and business partners.</p>
                    </div>
                  </div>

                  <!-- Boost Quality -->
                  <div
                    class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-check-circle"></i></span>
                    <!-- Updated icon: check-circle for quality assurance -->
                    <h3 class="fw-bold">Boost quality with SmartIDP.</h3>
                    <div class="icon-boxes-item-text">
                      <p class="justify-content-center">Automatically detect errors in addresses or form fields and flag
                        them for immediate correction with SmartIDP.</p>
                    </div>
                  </div>

                  <!-- Enhance Productivity -->
                  <div
                    class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-tasks"></i></span>
                    <!-- Updated icon: tasks for task management and productivity -->
                    <h3 class="fw-bold">Enhance productivity with SmartIDP.</h3>
                    <div class="icon-boxes-item-text">
                      <p class="justif-content-center">Automatically route invoices, service cases, orders, and contracts to
                        the appropriate person for seamless processing with SmartIDP.</p>
                    </div>
                  </div>

                  <!-- Improve Service -->
                  <div
                    class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-headset"></i></span>
                    <!-- Updated icon: headset for customer service -->
                    <h3 class="fw-bold">Enhance service with SmartIDP.</h3>
                    <div class="icon-boxes-item-text">
                      <p class="jutstify-content-center">Quickly respond to customer requests and manage inquiries more
                        efficiently with SmartIDP.</p>
                    </div>
                  </div>

                  <!-- Standardize Processes -->
                  <div
                    class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-cogs"></i></span>
                    <!-- Updated icon: cogs for process optimization -->
                    <h3 class="fw-bold">Standardize processes with SmartIDP.</h3>
                    <div class="icon-boxes-item-text">
                      <p>Consolidate inbound documents and emails—across all formats and channels—into a unified process for
                        seamless processing with SmartIDP.</p>
                    </div>
                  </div>

                  <!-- Ensure Document Compliance -->
                  <div
                    class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                    <span class="icon-boxes-item-icon"><i class="fas fa-file-alt"></i></span>
                    <!-- Updated icon: file-alt for document compliance -->
                    <h3 class="fw-bold">Ensure document compliance with SmartIDP.</h3>
                    <div class="icon-boxes-item-text">
                      <p>From receipt to archiving, SmartIDP ensures all document and email processing steps are fully
                        traceable and documented for future reference.</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <hr> -->
    <!-- <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
      <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
        SmartIDP</h2>
    </div> -->
    <?php 
    // include_once("smartidp_logos.php"); 
    ?>
    <!-- <hr> -->
    <div class="container py-md-5 justify-content-center">
      <div class="row align-items-center">
        <!-- Left Column: Headline -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="headline-box">
            <h2 class="fw-bold">Achieve greater success with fewer resources using <span
                class="gradient">SmartIDP.</span></h2>
          </div>
        </div>

        <!-- Right Column: Content Text -->
        <div class="col-lg-6">
          <div class="content-text">
            <p class="justif-content-center">Respond faster to customer inquiries, optimize employee workloads, and enhance
              process efficiency — with SmartIDP, you lay the foundation for end-to-end digital processes across your
              organization. Centralize inbound mail from all channels into a single, standardized process. SmartIDP’s
              intelligent inbound mail processing automatically routes your documents to the right employees, triggers the
              necessary downstream workflows, and securely archives all documents in compliance with audit standards.
              Eliminate waiting and transport times, while removing the need for manual distribution. Case processing starts
              instantly, improving employee productivity, customer satisfaction, and ultimately, your bottom line.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="mod_article max-width-viewport ser-hide-mobile block" id="article-29444">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <div
                class="ce_rs_column_start rs-column -large-col-3-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                  <h2 class="fw-bold"> <span class="gradient">Case Study</span></h2>
                </div>
                <div class="content-text">
                  <div class="rte">
                    <h3>The digital workbasket was quickly adopted by everyone. Time and resources spent on mail
                      distribution have decreased by 75% with SmartIDP.</h3>
                    <p class="justif-content-center">Alexander Erpenbach, Head of the Policy Department for Property,
                      Liability, Accident, Automotive Insurance, and Customer Center Service at DEVK, leveraging SmartIDP.
                    </p>
                  </div>
                </div>
                <div class="button-box ce_rsce_oneo_button -left">
                <a href="contact" class="button ce_rsce_oneo_button rounded-pill text-center my-md-3" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); color: white; padding: 10px 30px; text-decoration: none;">Read Now</a>
                </div>
              </div>
              <div
                class="ce_rs_column_start rs-column -large-col-3-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                <div class="ser-hide-mobile">
                  <div class="content-image">
                    <figure>
                      <img src="assets/images/logo/logo1.png" style="border-radius: 20px" loading="lazy">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-md-5 justify-content-center">
      <div class="row align-items-center">
        <!-- Left Column: Headline -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="headline-box">
            <h2 class="fw-bold">Begin your digital transformation with <span class="gradient">SmartIDP.</span>
            </h2>
          </div>
        </div>

        <!-- Right Column: Content Text -->
        <div class="col-lg-6">
          <div class="content-text">
            <p class="justify-content-center">If you’re looking to implement digital processes, the best place to start is
              with digital documents. With SmartIDP, inbound mail is digitized immediately upon arrival, laying the
              foundation for digital downstream processes such as invoice processing, application handling, and contract
              management. It’s the perfect starting point for streamlining business processes across your entire
              organization and boosting productivity. Work on all documents and processes digitally from end to end, while
              easily documenting and ensuring compliance with standards such as the EU GDPR and records management
              regulations.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-md-5 justify-content-center">
      <div class="row align-items-center">
        <!-- Left Column: Headline -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="headline-box">
            <h2 class="fw-bold"> <span class="gradient">SmartIDP:</span> A New Dawn for Digital Transformation.</h2>
          </div>
        </div>

        <!-- Right Column: Content Text -->
        <div class="col-lg-6">
          <div class="content-text">
            <p class="justify-content-center">We aim to minimize paper usage in our new building while accelerating inbound
              mail processes. SmartIDP is the perfect solution.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="mod_article max-width-viewport ser-hide-mobile block" id="article-29444">
      <div class="mod_article_inner">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered">
          <div class="centered-wrapper-inner">
            <div class="rs-columns ce_rs_columns_start">
              <div
                class="ce_rs_column_start rs-column -large-col-3-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                <div class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box">
                  <h2 class="fw-bold">Inbound mail processing with <span class="gradient">SmartIDP</span>
                    </.< /h3>
                </div>
                <div class="content-text">
                  <div class="rte">
                    <ul>
                      <li class="icon-arrow-5-right">Seamless processing of various inbound formats—both paper and
                        electronic documents—in a single process with SmartIDP.</li>
                      <li class="icon-arrow-5-right">Smart, self-learning technologies for classification, extraction, and
                        validation with SmartIDP.</li>
                      <li class="icon-arrow-5-right"><span class="gradient">Highly scalable to manage growing document
                          volumes with SmartIDP.</span></li>
                      <li class="icon-arrow-5-right">Supports a wide range of scanning scenarios: centrally, at
                        distributed locations, in shared service centers, and more with SmartIDP.</li>
                      <li class="icon-arrow-5-right">Easily extendable to become a company-wide ECM platform with
                        SmartIDP.</li>
                    </ul>
                  </div>
                </div>
                <div class="button-box ce_rsce_oneo_button -left">
                <a href="contact" class="button ce_rsce_oneo_button rounded-pill text-center my-md-3" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%); color: white; padding: 10px 25px; text-decoration: none;">More Details</a>
                </div>
              </div>
              <div
                class="ce_rs_column_start rs-column -large-col-3-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                <div class="ser-hide-mobile">
                  <div class="content-image">
                    <figure>
                      <img src="assets/images/inbound_mail_automation/mailauto.jpeg" style="border-radius: 20px" loading="lazy">
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