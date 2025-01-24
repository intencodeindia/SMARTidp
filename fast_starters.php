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
</style>

<div class="content-wrapper">
  <main role="main" class="main-content">

    <div class="container-fluid py-3 cover" id="article-43622"
      style="background-image: url('assets/images/document_management/cove_pic.png'); background-size: cover; background-position: center center;">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column (Text Content) -->
          <div class="col-lg-8 text-white">
            <div class="mb-4">
              <h2 class="subheadline text-uppercase fw-bold" style="font-size: 2.5rem;">
                SmartIDP Fast Starters
              </h2>
              <h1 class="display-3 text-white fw-bold">Automated Document Processing in Weeks, Not Months</h1>
            </div>
            <ul class="list-unstyled fs-5">
              <li class="d-flex mb-2">
                <i class="fas fa-check-circle me-2" style="font-size: 1.2rem;line-height: inherit;"></i>
                SmartIDP Fast Starters empower business users to quickly implement intelligent document processing (IDP)
                applications.
              </li>
              <li class="d-flex mb-2">
                <i class="fas fa-check-circle me-2" style="font-size: 1.2rem; line-height: inherit;"></i>
                Tailored to specific business needs, allowing customization for document-centric processes.
              </li>
              <li class="d-flex mb-2">
                <i class="fas fa-check-circle me-2" style="font-size: 1.2rem; line-height: inherit;"></i>
                Accelerates digital transformation by automating key document tasks like extraction, classification, and
                data processing.
              </li>
              <li class="d-flex mb-2">
                <i class="fas fa-check-circle me-2" style="font-size: 1.2rem; line-height: inherit;"></i>
                Reduces operational costs by eliminating manual document handling and streamlining workflows.
              </li>
              <li class="d-flex mb-2">
                <i class="fas fa-check-circle me-2" style="font-size: 1.2rem; line-height: inherit;"></i>
                Eases the workload on IT teams, enabling business users to manage and customize processes independently.
              </li>
              <li class="d-flex mb-2">
                <i class="fas fa-check-circle me-2" style="font-size: 1.2rem; line-height: inherit;"></i>
                Improves efficiency and accuracy by leveraging AI to automate document processing, reducing human error
                and speeding up decision-making.
              </li>
            </ul>
            <div class="mt-4">
              <a class="btn rounded-pill px-4 text-white fw-bold" href="contact.php"
                style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-md-5">
      <h2 class="text-center mb-5 fw-bold">Fast-Start Your SmartIDP <span class="gradient">ECM Projects</span></h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Empower Citizen Developers -->
        <div class="col">
          <div class="card h-100 custom-card-shadow">
            <div class="card-body">
              <div class="rounded-circle mb-3"
                style="background-color: #241AC7; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto;">
                <i class="fas fa-users fa-lg text-center"></i>
              </div>
              <h5 class="card-title fw-bold">Empower Citizen Developers</h5>
              <ul class="list-unstyled">
                <li>Fast, easy no-code document processing customization</li>
                <li>No technical expertise required for workflow automation</li>
                <li>Tailored to meet specific business and stakeholder needs</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Save Time and Costs -->
        <div class="col">
          <div class="card h-100 custom-card-shadow">
            <div class="card-body">
              <div class="rounded-circle mb-3"
                style="background-color: #241AC7; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto;">
                <i class="fas fa-clock fa-lg text-center"></i>
              </div>
              <h5 class="card-title fw-bold">Save Time and Costs</h5>
              <ul class="list-unstyled">
                <li>Accelerate time-to-value with quick document automation</li>
                <li>Significantly reduce operational costs</li>
                <li>Eliminate IT bottlenecks with low-code customization</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Simplify Work with a Modern UX -->
        <div class="col">
          <div class="card h-100  custom-card-shadow">
            <div class="card-body">
              <div class="rounded-circle mb-3"
                style="background-color: #241AC7; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto;">
                <i class="fas fa-laptop fa-lg text-center"></i>
              </div>
              <h5 class="card-title fw-bold">Simplify Work with a Modern UX</h5>
              <ul class="list-unstyled">
                <li>Intuitive interface designed for document automation tasks</li>
                <li>Clean, user-friendly design that enhances productivity</li>
                <li>AI-powered features to speed up document processing workflows</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5"
      style="background-image: url('assets/images/fast_starters/Rect.svg'); background-size: cover;">
      <div class="row text-center text-white mb-5">
        <div class="col-12">
          <h2 class="display-4 text-white">Fast Starters integrate seamlessly with your business ecosystem</h2>
          <p class="lead">Doxis Business Studio connects information between the Fast Starters and best-of-breed
            applications like Microsoft, Salesforce, Oracle, and more.</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="text-center">
            <img src="assets/images/fast_starters/sap.svg" alt="SAP" class="img-fluid mb-3" loading="lazy" />
            <h3 class="text-white">SAP</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="text-center">
            <img src="assets/images/fast_starters/salesforce.png" alt="Salesforce" class="img-fluid mb-3" loading="lazy" />
            <h3 class="text-white">Salesforce</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="text-center">
            <img src="assets/images/fast_starters/microsoft.svg" alt="Microsoft" class="img-fluid mb-3" loading="lazy" />
            <h3 class="text-white">Microsoft</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="text-center">
            <img src="assets/images/fast_starters/bussiness.png" alt="All Doxis business integrators"
              class="img-fluid mb-3" loading="lazy" />
            <h3 class="text-white">All Doxis business integrators</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="text-center fw-bold mb-md-5">Launch Your Next <span class="gradient">SmartIDP Project</span> in 3
            Steps</h2>
        </div>
      </div>
      <!-- Step 1: Choose a SmartIDP Fast Starter -->
      <div class="row mb-5 d-flex align-items-center">
        <div class="col-lg-6 col-md-12">
          <h3 class="h3 fw-bold">Step 1: Choose a SmartIDP Fast Starter</h3>
          <p>The expanding SmartIDP Fast Starter library offers a variety of pre-configured and easily customizable
            document processing workspaces for industries such as finance, healthcare, legal, and more. Looking for
            something tailored to your needs? Simply adapt one of our templates with just a few clicks.</p>
        </div>
        <div class="col-lg-6 col-md-12">
          <img src="assets/images/fast_starters/choose.webp"
            alt="Select a SmartIDP Fast Starter from an extensive library" class="img-fluid rounded" loadin="lazy"style="border-radius: 20px;">
        </div>
      </div>

      <!-- Step 2: Customize your SmartIDP Fast Starter -->
      <div class="row mb-5 d-flex align-items-center">
        <div class="col-lg-6 col-md-12 order-md-2">
          <h3 class="h3 fw-bold">Step 2: Customize Your SmartIDP Fast Starter</h3>
          <p>SmartIDP Fast Starters are designed with an intuitive user interface, allowing you to quickly customize
            your document processing workflows. Plus, thanks to a unified metadata layer, you can seamlessly integrate
            your SmartIDP solution with other ECM systems, ensuring smooth and efficient data flow across the
            organization.</p>
        </div>
        <div class="col-lg-6 col-md-12 order-md-1">
          <img src="assets/images/fast_starters/customize1.png" alt="Customizing a SmartIDP Fast Starter"
            class="img-fluid rounded"style="border-radius: 20px" loading="lazy">
        </div>
      </div>

      <!-- Step 3: Get Your Team Onboard -->
      <div class="row mb-5 d-flex align-items-center">
        <div class="col-lg-6 col-md-12">
          <h3 class="h3 fw-bold">Step 3: Get Your Team Onboard!</h3>
          <p>With SmartIDP Fast Starters, managing user groups, roles, and access rights is straightforward. Our
            drag-and-drop interface, search functionality, and clear overview allow you to quickly set up your team and
            get them ready for seamless document processing integration.</p>
        </div>
        <div class="col-lg-6 col-md-12">
          <img src="assets/images/fast_starters/team.webp" alt="User management in SmartIDP Fast Starters"
            class="img-fluid rounded"style="border-radius: 20px" loading="lazy">
        </div>
      </div>
    </div>

    <?php include_once("includes/footer.php"); ?>