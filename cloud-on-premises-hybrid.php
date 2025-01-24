<?php include_once("includes/header.php"); ?>
<!-- CSS -->
<style>
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
    <div class="container-fluid cover" id="article-43622"
      style="background-image: url('assets/images/microsoft/1.jpg'); background-size: cover; background-position: center center; height: 60vh" loading="lazy">
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
              <a class="btn rounded-pill px-4 text-white fw-bold" href="contact"
                style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">REQUEST DEMO</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-md-4">
      <div class="serhead-main-headline">
        <h2 class="fw-bold text-center mb-md-4"><span class="gradient">SmartIDP:</span> Cloud, on-premises & hybrid</h2>
      </div>
      <div class="row g-4 text-center">
        <div class="col-lg-4 col-md-6">
          <div class="icon-boxes-item">
            <div class="icon-box-circle rounded-circle mb-3">
              <i class="fas fa-cloud fa-lg"></i> <!-- Cloud icon for SaaS -->
            </div>
            <h3 class="fw-bold">Flexible deployment</h3>
            <p>Optimize your business processes with SmartIDP’s intelligent automation platform, while maintaining full
              transparency of operating costs.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-boxes-item">
            <div class="icon-box-circle rounded-circle mb-3">
              <i class="fas fa-headset fa-lg"></i> <!-- Headset icon for Always Available -->
            </div>
            <h3 class="fw-bold">Custom-fit licensing models</h3>
            <p>You focus on your core business, while we ensure that your SmartIDP solutions run smoothly and
              efficiently, 24/7.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-boxes-item">
            <div class="icon-box-circle rounded-circle mb-3">
              <i class="fas fa-cogs fa-lg"></i> <!-- Cogs icon for adaptability -->
            </div>
            <h3 class="fw-bold">Multi-platform technology</h3>
            <p>SmartIDP is designed to grow with your business — customize and scale it to your company’s evolving needs
              and requirements.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-md-5">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="assets/images/egslogo.png" alt="Equilon Global Synergies Trading Logo" class="img-fluid" width="180"
            height="162" loading="laz">
        </div>
        <!-- Text Column -->
        <div class="col-md-8">
          <blockquote class="blockquote">
            <p class="mb-0">At Equilon Global Synergies Trading, we leverage innovative strategies and advanced
              technologies to drive international trade. Our commitment to delivering reliable, efficient, and secure
              trade solutions ensures seamless business operations and strengthens global partnerships across various
              industries.</p>
          </blockquote>
          <footer class="blockquote-footer" style="font-size: 0.6em;">CEO, Equilon Global Synergies Trading</footer>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="headline-box -align-left ce_rsce_oneo_headline_box">
        <h2 class="fw-bold text-center text-sm-start"><span class="gradient">Tailored</span> to your SmartIDP</h2>
      </div>
      <div class="content-text">
        <div class="rte">
          <p class="text-justify px-2 px-md-0">The choice is yours — the technology and functional scope remain the same across all options: SmartIDP elevates your digital transformation with seamless scalability on a leading public cloud platform. You can quickly get started with the SmartIDP Cloud, or consolidate your existing IT infrastructure with SmartIDP on-premises, cutting operational costs. Or, opt for a hybrid solution to gain the benefits of both worlds.</p>
        </div>
      </div>
      <section class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller">
        <div class="icon-boxes-wrapper">
          <div
            class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon">
            <span class="icon-boxes-item-icon"><i class="fas fa-cogs fa-md"></i></span>
            <h3>SmartIDP-as-a-service</h3>
            <div class="icon-boxes-item-text">
              <p class="text-justify px-2 pe-md-4">Develop solutions with our all-in-one cloud platform for intelligent document processing, workflow automation, and collaboration without managing your own server hardware or complex IT infrastructure, all without heavy upfront costs. The SmartIDP Cloud ensures top-tier security, scalability, and availability, while providing unmatched financial and technological flexibility. You'll benefit from fully scalable solutions and remain up-to-date with automatic updates.</p>
            </div>
          </div>
          <div
            class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon">
            <span class="icon-boxes-item-icon"><i class="fas fa-check-circle fa-md"></i></span>
            <h3>SmartIDP in your data center</h3>
            <div class="icon-boxes-item-text">
              <p class="text-justify px-2 pe-md-4">If your organization has a robust IT team and operates its own data centers, running and maintaining SmartIDP-based document processing, process management, and collaboration solutions within your infrastructure might be the ideal solution. SmartIDP supports all major operating systems, database technologies, and storage solutions, giving you full control of your environment.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container my-md-5">
      <div class="row align-items-center">
        <h2 class="fw-bold text-center text-sm-start">Smart Solutions</h2>
        <hr>
        <div class="col-md-6">
          <img src="assets/images/cloud-on-premises-hybrid/data-center.avif" class="img-fluid" alt="SmartIDP Solution" loading="lazy" style="border-radius: 20px;">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold">From the data center into the cloud</h2>
          <p>70,000 users, more than 300 million documents, 21 tenants — the company-wide SmartIDP Content Management (SCM) system with the SmartIDP platform. Learn more about SCM, which was first run in the DB Systel data centers in 2011 and has since been fully migrated to the cloud.</p>
          <a class="btn rounded-pill px-4 text-white" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Learn now</a>
        </div>
        <hr class="mt-3">
      </div>
    </div>
    <div class="container my-5">
      <h2 class="mb-md-4 fw-bold"><span class="gradient">Multi-platform</span> support</h2>
      <div class="row">
        <!-- Server operating systems -->
        <div class="col-md-6 mb-4">
          <h3><i class="fas fa-server gradient">&nbsp&nbsp</i>Server operating systems</h3>
          <ul class="ms-4">
            <li>Windows Server x64</li>
            <li>Linux (SLES, RedHat)</li>
            <li>Unix (AIX)</li>
            <li>Additional systems on request</li>
          </ul>
        </div>
        <!-- Application server -->
        <div class="col-md-6 mb-4">
          <h3><i class="fas fa-sync-alt gradient">&nbsp&nbsp</i>Application server</h3>
          <ul class="ms-4">
            <li>Wildfly</li>
            <li>JBOSS EAP</li>
            <li>IBM Websphere</li>
            <li>Additional systems on request</li>
          </ul>
        </div>
        <!-- Databases -->
        <div class="col-md-6 mb-4">
          <h3><i class="fas fa-database gradient">&nbsp&nbsp</i>Databases</h3>
          <ul class="ms-4">
            <li>Oracle</li>
            <li>Microsoft SQL Server</li>
            <li>PostgreSQL</li>
            <li>IBM DB2</li>
          </ul>
        </div>
        <!-- Virtualization -->
        <div class="col-md-6 mb-4">
          <h3><i class="fas fa-desktop gradient">&nbsp&nbsp</i>Virtualization</h3>
          <ul class="ms-4">
            <li>VMware</li>
            <li>Docker</li>
            <li>Citrix</li>
          </ul>
        </div>
      </div>
    </div>

  </main>
</div>
<?php include_once("includes/footer.php"); ?>