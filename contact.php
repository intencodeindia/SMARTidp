<?php include_once("includes/header.php"); ?>
<style>
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
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid py-5" id="article-43622">
            <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                    SmartIDP</h2>
            </div>
            <div class="customer-logos-marquee">
                <div class="customer-logos">
                    <!-- Logos (only one set) -->
                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/ko.png" class="d-block" alt="Logo 1" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

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

                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/17@4x.png" class="d-block" alt="Logo 4" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/Asset 40@4x.png" class="d-block" alt="Logo 5" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

                    <!-- <div class="card customer-logo" style="border-radius: 9%; box-shadow: 7px 7px 10px 10px rgba(36, 26, 199, .1);">
                                <div class="card-body d-flex justify-content-center align-items center">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/logo-kenz.png" class="d-block" alt="Logo 6" width="150" height="60" style="width: 150px; height: 50px;">
                                </div>
                            </div> -->

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
        </div>
        <div class="mod_article  max-width-viewport block" id="article-26234">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start " style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="rs-columns ce_rs_columns_start">
                            <div class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                <div class="content-text">
                                    <h3>Contact us - we look forward to talking to you!</h3>
                                    <div class="rte">
                                        <p>Fill out the form and we’ll quickly be in touch to answer your questions, discuss your challenges, and explore use cases related to your needs.</p>
                                    </div>
                                </div>
                                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start shaded_content_block padding-left-xs padding-right-xs padding-top-xs padding-bottom-xs " style="margin-top: 50px;background-color: #E8EDED; ">
                                    <div class="centered-wrapper-inner ">
                                        <div class="content-text">
                                            <div class="rte">
                                                <h3 class="mt-0">You can find us here</h3>
                                                <div class="country-based-content">
                                                    <div data-country="KW,SA,AE,QA">
                                                        <p><strong>SmartIDP Software Solutions Middle East Ltd.</strong></p>
                                                        <p>Unit 1002-1003, Level 10, Innovation One, DIFC<br>Dubai, United Arab Emirates<br>PO. Box Number 482097</p>
                                                        <p>Tel: +971 (0) 4 591 8828<br>Email: <a href="javascript:void(0)">info@smartIDP.com</a></p>
                                                    </div>
                                                    <div data-country="US">
                                                        <p><strong>SmartIDP Group Inc.</strong></p>
                                                        <p>6 Liberty Square # 2817<br>Boston, MA 02109</p>
                                                        <p>Email: <a href="javascript:void(0)">info@smartIDP.com</a></p>
                                                    </div>
                                                    <div data-country="default">
                                                        <p><strong>SmartIDP Head Office.</strong></p>
                                                        <p>5900 Balcones Drive STE 13688<br>Austin, TX 78731<br>USA</p>
                                                        <p>Email: <a href="javascript:void(0)">info@smartIDP.com</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                <!-- indexer::stop -->
                                <div class="ce_form block">
                                    <form method="post" enctype="application/x-www-form-urlencoded" class="invert demo_form prevent_multiple_submits" action="process_form.php">
                                        <div class="formbody">
                                            <div class="widget widget-text half_sized mandatory">
                                                <input type="text" name="firstname" id="ctrl_1176" class="text half_sized mandatory" value="" required placeholder="First name*">
                                            </div>
                                            <div class="widget widget-text half_sized mandatory">
                                                <input type="text" name="lastname" id="ctrl_1177" class="text half_sized mandatory" value="" required placeholder="Last name*">
                                            </div>
                                            <div class="widget widget-text mandatory">
                                                <input type="email" name="email" id="ctrl_1180" class="text mandatory" value="" required placeholder="Email address*">
                                            </div>
                                            <div class="widget widget-text mandatory">
                                                <input type="text" name="phone" id="ctrl_1181" class="text mandatory" value="" required placeholder="Telephone*">
                                            </div>
                                            <div class="widget widget-text mandatory">
                                                <input type="text" name="company" id="ctrl_1179" class="text mandatory" value="" required placeholder="Company/Organization*">
                                            </div>
                                            <div class="widget widget-select select mandatory">
                                                <select name="company_size" id="ctrl_2833" class="select mandatory" required>
                                                    <option value="">Company sizes<span class="text-danger">*</span></option>
                                                    <option value="100-500">100-500 employees</option>
                                                    <option value="501-1000">501-1000 employees</option>
                                                    <option value="1001-5000">1001-5000 employees</option>
                                                    <option value="5001-10000">5001-10000 employees</option>
                                                    <option value=">10000">>10000 employees</option>
                                                </select>
                                            </div>
                                            <div class="widget widget-select select mandatory">
                                                <select name="country" id="ctrl_5386" class="select mandatory" required>
                                                    <option value="" selected>-- Country* --</option>
                                                    <!-- The country options will be dynamically added here -->
                                                </select>
                                            </div>
                                            <div class="widget widget-submit looks_like_link text-center">
                                                <!-- Change the anchor tag to a button that submits the form -->
                                                <button type="submit" class="btn rounded-pill px-5 text-white" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">
                                                    SEND
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- indexer::continue -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_article  max-width-viewport block" id="article-44422" style="margin-top: 0px;">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800 " style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="content-text">
                            <h3>Not quite sure we&apos;re the right fit for you?</h3>
                            <div class="rte">
                                <p>Here's a little guidance to&nbsp;help you decide:</p>
                                <ul>
                                    <li>SmartIDP&nbsp;supports businesses&nbsp;with lots of users (100 upwards) working in multiple departments, often across the globe<br><br></li>
                                    <li>We are ideal for enterprises&nbsp;that want to scale growth quickly and never miss a beat (or a document!)<br><br></li>
                                    <li>SmartIDP Intelligent Content Automation is designed specifically for elaborate, high-volume business environments</li>
                                </ul>
                                <p>Doesn't sound right for you? We'd be happy to connect you with one of our excellent partners.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<!-- JavaScript to populate the country dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(countries => {
                const selectElement = document.getElementById('ctrl_5386');
                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.cca2;
                    option.textContent = country.name.common;
                    selectElement.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching country data:', error));
    });
</script>

<?php include_once("includes/footer.php"); ?>