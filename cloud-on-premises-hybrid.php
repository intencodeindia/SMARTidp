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
                <h2 class="fw-bold text-center mb-md-4"><span class="gradient">SmartIDP:</span> Cloud, on-premises & hybrid</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-cloud fa-lg"></i> <!-- Cloud icon for SaaS -->
                        </div>
                        <h3 class="fw-bold">Flexible deployment</h3>
                        <p>Optimize your business processes with SmartIDP’s intelligent automation platform, while maintaining full transparency of operating costs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-headset fa-lg"></i> <!-- Headset icon for Always Available -->
                        </div>
                        <h3 class="fw-bold">Custom-fit licensing models</h3>
                        <p>You focus on your core business, while we ensure that your SmartIDP solutions run smoothly and efficiently, 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-boxes-item">
                        <div class="icon-box-circle rounded-circle mb-3">
                            <i class="fas fa-cogs fa-lg"></i> <!-- Cogs icon for adaptability -->
                        </div>
                        <h3 class="fw-bold">Multi-platform technology</h3>
                        <p>SmartIDP is designed to grow with your business — customize and scale it to your company’s evolving needs and requirements.</p>
                    </div>
                </div>
            </div>
        </div>
  </main>
</div>
<?php include_once("includes/footer.php"); ?>