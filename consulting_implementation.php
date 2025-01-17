<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
  #article-43622 {
    position: relative;
    height: 60vh;
    width: 100%;
  }

  .banner-image {
    background-image: url('assets/images/banner_consulting_implementation.webp');
    background-size: cover;
    /* Keep it covering the container */
    background-position: top center;
    /* Keep it centered */
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    object-fit: cover;
    /* Added to avoid cutting off image in some cases */
  }

  /* Additional responsiveness for mobile */
  @media (max-width: 767px) {
    #article-43622 {
      height: 38vh;
      /* Adjust height for smaller screens */
    }

    .banner-image {
      background-size: contain;
      /* Use contain for smaller screens to prevent cropping */
      background-position: center center;
      /* Keep image centered */
    }
  }

  @media (max-width: 640px) {
    #article-43622 {
      height: 30vh;
      /* Adjust height for smaller screens */
    }
  }

  @media (max-width: 536px) {
    #article-43622 {
      height: 22vh;
      /* Adjust height for smaller screens */
    }
  }

  /* Gradient text styling */
  .gradient {
    background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
    -webkit-background-clip: text;
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
</style>
<div class="content-wrapper">
  <main role="main" class="main-content">
    <div class="container-fluid p-0" id="article-43622">
      <div class="banner-image"></div>
    </div>
    <div class="container text-center">
      <h2 class="fw-bold">Empowering your digital <span class="gradient">transformation</span> with every SmartIDP
        solution
      </h2>
      <p class="fw-bold fs-3">SmartIDP Professional Services</p>

      <section class="row text-center">
        <!-- First Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card custom-card-shadow h-100 text-center">
            <div class="card-body">
              <div class="icon-box-circle rounded-circle mb-3">
                <i class="fas fa-cloud-upload-alt fa-lg"></i>
                <!-- Changed icon to better match 'Seamless Integration' -->
              </div>
              <h5 class="card-title">Seamless Integration</h5>
              <p class="card-text">Our global smartIDP team supports your journey, whether on-premises or in the cloud,
                ensuring smooth transitions and optimal results.</p>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card custom-card-shadow h-100 text-center">
            <div class="card-body">
              <div class="icon-box-circle rounded-circle mb-3">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <!-- Changed icon to better match 'Unmatched Expertise' -->
              </div>
              <h5 class="card-title">Unmatched Expertise</h5>
              <p class="card-text">With over five million users and countless successful projects, our expertise spans
                across all industries and geographies.</p>
            </div>
          </div>
        </div>

        <!-- Third Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card custom-card-shadow h-100 text-center">
            <div class="card-body">
              <div class="icon-box-circle rounded-circle mb-3">
                <i class="fas fa-cogs fa-lg"></i> <!-- Changed icon to better match 'End-to-End Service' -->
              </div>
              <h5 class="card-title">End-to-End Service</h5>
              <p class="card-text">From consultation and implementation to direct support and a global partner
                ecosystem, we
                are with you every step of the way.</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="container py-md-5">
      <div class="row align-items-center">
        <!-- Column 1: Headline -->
        <div class="col-lg-4 col-md-6 mb-4">
          <h2 class="fw-bold">We’re here to support your digital journey</h2>
        </div>
        <!-- Column 2: Text Content -->
        <div class="col-lg-8 col-md-6">
          <div class="mb-4">
            <p><em>Maximize the value of your smartIDP solutions across your organization!</em></p>
          </div>
          <p class="text-justify">
            From strategic planning and implementation to global rollouts and continuous enhancement:
            The international smartIDP Professional Services team, along with our trusted integration partners, delivers comprehensive solutions.
            Working closely with you, we ensure that your smartIDP platform is deployed successfully and optimized for performance:
            Whether it’s tailored solutions with rapid implementation or complex, enterprise-wide platforms for global organizations;
            from on-premises to cloud environments: We are there wherever you need us.
          </p>
        </div>
      </div>
    </div>

    <div class="container" id="article-29421">
      <h2 class="mb-4 fw-bold text-center text-sm-start"><span class="gradient">Your </span> SmartIDP Professionals</h2>
      <div class="row align-items-center">
        <!-- Left Column: Icon Boxes -->
        <div class="col-md-6">
          <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
            <div class="row">
              <!-- Specialized consultants -->
              <div class="icon-boxes-item mb-4 -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span> <!-- Changed icon to better represent technical consultants -->
                <h3 class="fw-bold">Specialized consultants</h3>
                <p class="text-justify px-2 px-md-0">Our technical consultants handle the infrastructure (databases, operating systems, etc.) that powers your smartIDP solutions. Our ECM consultants fine-tune and optimize your smartIDP systems for maximum performance. Organizational consultants, with their expertise in IT projects, complete our comprehensive Professional Services team.</p>
              </div>
            </div>
            <div class="row">
              <!-- Certified project managers -->
              <div class="icon-boxes-item mb-4 -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-clipboard-check fa-lg"></i></span> <!-- Changed icon to represent project management -->
                <h3 class="fw-bold">Certified project managers</h3>
                <p class="text-justify px-2 px-md-0">Our project managers are certified in leading methodologies such as PMP, Prince 2, and IPMA. To ensure success in your projects, our team undergoes continuous training and produces comprehensive project documentation to keep your projects on track.</p>
              </div>
            </div>
            <div class="row">
              <!-- Strong international teams for any scenario -->
              <div class="icon-boxes-item -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-users fa-md"></i></span> <!-- Changed icon to represent international teams -->
                <h3 class="fw-bold">Strong international teams for any scenario</h3>
                <p class="text-justify px-2 px-md-0">Many of our Professional Services team members specialize in specific product areas or industries. We assemble international teams tailored to your needs, from department-specific solutions to global, multilingual scenarios. Our expertise extends to integrations with platforms such as SAP, Microsoft, Salesforce, and Oracle, and we support cloud, on-premises, and hybrid deployments.</p>
              </div>
            </div>
          </section>
        </div>
        <!-- Right Column: Image -->
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="content-image text-center">
            <figure>
              <img src="assets/images/consulting/professionals.jpg" alt="Microsoft Outlook Integration" class="img-fluid" style="border-radius: 20px;">
            </figure>
          </div>
        </div>
      </div>
    </div>

    <div class="mod_article_inner container">
      <div class="headline-box -align-left ce_rsce_oneo_headline_box">
        <h2 class="fw-bold text-center text-sm-start">This is how we help you <span class="gradient">succeed</span></h2>
      </div>
      <div class="content-text">
        <div class="rte">
          <p class="text-justify px-2 px-md-0">At smartIDP, our extensive international team provides everything from a single source. We offer software licenses and services for <a href="cloud-on-premises-hybrid.php" target="_blank">on-premises, cloud, or hybrid</a> environments. Additionally, we serve as a general contractor with a highly experienced multinational partner network. Our mission is to seamlessly integrate your smartIDP solutions into your organization and IT landscape, driving the success of your digital transformation.</p>
        </div>
      </div>
      <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
        <div class="icon-boxes-wrapper">
          <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
            <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span>
            <h3>Management consulting</h3>
            <div class="icon-boxes-item-text">
              <p class="text-justify px-2 px-md-0">Which organizational and technical strategies will help you meet your goals? We provide expert guidance to identify efficient, profitable, and high-performance solutions that can be seamlessly integrated into your IT infrastructure.</p>
            </div>
          </div>
          <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
            <span class="icon-boxes-item-icon"><i class="fas fa-check-circle fa-md"></i></span>
            <h3>Status quo check</h3>
            <div class="icon-boxes-item-text">
              <p class="text-justify px-2 px-md-0">Our status quo check evaluates your needs, goals, and requirements, taking into account your organizational workflows and IT setup. This process uncovers areas for improvement and opportunities for optimization.</p>
            </div>
          </div>
          <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left -headline-icon">
            <span class="icon-boxes-item-icon"><i class="fas fa-pencil-alt fa-md"></i></span>
            <h3>Creating a specification sheet</h3>
            <div class="icon-boxes-item-text">
              <p class="text-justify px-2 px-md-0">Following the status quo check, our specialists create a detailed specification sheet for your hardware and software. This document outlines all desired functions, adjustments, and use cases, with you determining the required system configuration.</p>
            </div>
          </div>
          <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon mb-3">
            <span class="icon-boxes-item-icon"><i class="fas fa-project-diagram fa-md"></i></span>
            <h3>Project implementation</h3>
            <div class="icon-boxes-item-text">
              <p class="text-justify px-2 px-md-0">Our project plan covers all stages: preparation, concept, implementation, installation, prototyping, testing, and roll-out. We provide support throughout all project phases — whether on-site or remotely via access to your system. We also offer procedural documentation in compliance with regulatory requirements.</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="mod_article block" id="article-27767">
      <div class="mod_article_inner container">
        <h2 class="headline-hr ce_rsce_oneo_separator fw-bold"> You can rely on us for these <span class="gradient">services</span> </h2>
        <div class="rs-columns ce_rs_columns_start">
          <div class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
            <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-globe fa-md"></i></span> <!-- Changed to 'fa-globe' for Global project management -->
                <h3>Global project management</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-clipboard-list fa-md"></i></span> <!-- Changed to 'fa-clipboard-list' for Business process consulting -->
                <h3>Business process consulting</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-lightbulb fa-md"></i></span> <!-- Changed to 'fa-lightbulb' for Rough & well-defined concepts -->
                <h3>Rough & well-defined concepts</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-tools fa-md"></i></span> <!-- Changed to 'fa-tools' for Software adjustments & maintenance -->
                <h3>Software adjustments & maintenance</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-cloud fa-md"></i></span> <!-- Changed to 'fa-cloud' for Implementation (on-premises, cloud) -->
                <h3>Implementation (on-premises, cloud)</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-plug fa-md"></i></span> <!-- Changed to 'fa-plug' for Integration into multiple applications -->
                <h3>Integration into multiple applications</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-laptop-code fa-md"></i></span> <!-- Changed to 'fa-laptop-code' for System launch in productive systems -->
                <h3>System launch in productive systems</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-globe fa-md"></i></span> <!-- Changed to 'fa-globe' for Go-live support around the globe -->
                <h3>Go-live support around the globe</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-file-alt fa-md"></i></span> <!-- Changed to 'fa-file-alt' for Creation of procedural documentation -->
                <h3>Creation of procedural documentation</h3>
              </div>
              <div class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon">
                <span class="icon-boxes-item-icon"><i class="fas fa-certificate fa-md"></i></span> <!-- Changed to 'fa-certificate' for Support in international certification measures -->
                <h3>Support in international certification measures</h3>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>


  </main>
</div>
<?php include_once("includes/footer.php"); ?>