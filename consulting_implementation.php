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
    font-size: 250%;
  }
</style>
<div class="content-wrapper">
  <main role="main" class="main-content">

    <div class="container-fluid p-0" id="article-43622">
      <div class="banner-image"></div>
    </div>

  </main>
</div>
<?php include_once("includes/footer.php"); ?>