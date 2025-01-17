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

  .carousel-item {
    height: 400px;
  }

  @media (max-width:768) {}

  .image-container {
    position: relative;
    width: 100%;
    height: auto;
  }

  .custom-image {
    width: 100%;
    height: auto;
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
</style>

<div class="content-wrapper">
  <main role="main" class="main-content">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="image-container">
            <img src="assets/images/inbound_mail_automation/email1.webp" class="d-block w-100 mt-1 my-3 g-2 custom-image" alt="...">
            <div class="image-overlay"></div>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h1 class="fs-2 text-white">"Previously, invoice processing could take over three weeks, risking the eligibility for cash discounts. With SmartIDP, the process has been streamlined, ensuring timely processing and maximizing discount opportunities.</h1>
            <p class="text-white fs-3 text-white">Placeholder content for the initial slide.</p>
            <h5 class="btn btn-primary btn-outline-dark">Learn More</h5>
          </div>
        </div>
        <div class="carousel-item">
          <div class="image-container">
            <img src="assets/images/inbound_mail_automation/email2.png" class="d-block w-100" alt="...">
            <div class="image-overlay"></div>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h1 class="fs-2 text-white">"The digital workbasket was quickly embraced by all users, resulting in a 75% reduction in the time and resources spent on mail distribution.</h1>
            <p class="text-white  fs-3 text-white">Sample placeholder content for the second slide.</p>
            <h5 class="btn btn-primary btn-outline-dark">Learn More</h5>
          </div>
        </div>
        <div class="carousel-item">
          <div class="image-container">
            <img src="assets/images/inbound_mail_automation/email7.jpeg" class="d-block w-100" alt="...">
            <div class="image-overlay"></div>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h1 class="fs-2 text-white">"Previously, invoice processing could take over three weeks, risking the eligibility for cash discounts. With SmartIDP, the process has been streamlined, ensuring timely processing and maximizing discount opportunities.</h1>
            <p class="text-white k-50 fs-3 text-white">Placeholder content for the initial slide.</p>
            <h5 class="btn btn-primary btn-outline-dark">Learn More</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
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
              <i class="fa-solid fa-arrow-right fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon for efficiency and forward action -->
              <h4 class="card-title fw-bold">Boost Revenue with SmartIDP</h4>
              <p class="card-text">Quickly forward inbound mail to the right person and enhance order processing efficiency with SmartIDP.</p>
            </div>
          </div>
        </div>
        <!-- Second Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="text-center">
            <div class="card-body">
              <i class="fa-solid fa-bolt fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon for speed and responsiveness -->
              <h4 class="card-title fw-bold">Respond Faster with SmartIDP.</h4>
              <p class="card-text">Respond to service cases, customer inquiries, and supplier offers instantly, eliminating idle periods and transportation delays with SmartIDP.</p>
            </div>
          </div>
        </div>
        <!-- Third Card -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="text-center">
            <div class="card-body">
              <i class="fa-solid fa-stream fa-3x mb-3 gradient"></i> <!-- Font Awesome Icon for workflow automation -->
              <h4 class="card-title fw-bold">Optimize Resource Usage with SmartIDP.</h4>
              <p class="card-text">Automate time-consuming tasks such as sorting, classifying, and distributing inbound mail with SmartIDP.</p>
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
                                <p>Getting all your relevant emails directly to your inbox is just the beginning. With SmartIDP, automate the processing of documents you receive by mail, ensuring the right information reaches the right people. This drives productivity, streamlines workflows, and accelerates customer service, laying the foundation for more efficient processes.</p>
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
  </main>
</div>


<?php include_once("includes/footer.php"); ?>