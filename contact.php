<?php include_once("includes/header.php"); ?>
<!-- Add custom styles for the form -->

<!-- Add custom styles for the form -->
<style>
    .col-md-6 {
        /* background-color: #f8f9fa; */
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style for the form heading */
    h4 {
        color: #007bff;
        font-weight: 600;
    }

    /* Customize form controls for compact look */
    .form-control,
    .form-select {
        height: 40px;
        font-size: 14px;
    }

    /* Style for the submit button */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: bold;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    /* Add margins for spacing */
    .mb-3 {
        margin-bottom: 15px;
    }
</style>


<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container-fluid" id="article-43622">
            <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                <h2 class="headline -medium " style="color: #4A6A98">These global leaders trust in
                    SmartIDP</h2>
            </div>
            <?php include_once("smartidp_logos.php"); ?>
        </div>
        <div class="container my-5" id="article-26234">
            <div class="row">
                <!-- Left Column: Contact Us and Address -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3>Contact us - we look forward to talking to you!</h3>
                    <p>Fill out the form and we’ll quickly be in touch to answer your questions, discuss your challenges, and explore use cases related to your needs.</p>

                    <!-- Address Section -->
                    <div class="p-4 mt-4" style="background-color: #e8eded;">
                        <h4>You can find us here</h4>
                        <div class="country-based-content">
                            <!-- Middle East Office -->
                            <div data-country="KW,SA,AE,QA">
                                <p><strong>SmartIDP Software Solutions Middle East Ltd.</strong></p>
                                <p>Unit 1002-1003, Level 10, Innovation One, DIFC<br>Dubai, United Arab Emirates<br>PO. Box Number 482097</p>
                                <p>Tel: +971 (0) 4 591 8828<br>Email: <a href="mailto:info@smartIDP.com">info@smartIDP.com</a></p>
                            </div>

                            <!-- US Office -->
                            <div data-country="US">
                                <p><strong>SmartIDP Group Inc.</strong></p>
                                <p>6 Liberty Square # 2817<br>Boston, MA 02109</p>
                                <p>Email: <a href="mailto:info@smartIDP.com">info@smartIDP.com</a></p>
                            </div>

                            <!-- Default Head Office -->
                            <div data-country="default">
                                <p><strong>SmartIDP Head Office.</strong></p>
                                <p>5900 Balcones Drive STE 13688<br>Austin, TX 78731<br>USA</p>
                                <p>Email: <a href="mailto:info@smartIDP.com">info@smartIDP.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="col-md-6 mx-auto">
                    <h4 class="text-center">Fill out the form below</h4>
                    <form method="post" action="process_form.php">
                        <!-- First Name and Last Name in same row -->
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label for="firstname" class="form-label">First name<span class="text-danger">*</span></label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required placeholder="First name*">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" required placeholder="Last name*">
                            </div>
                        </div>

                        <!-- Email field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" required placeholder="Email address*">
                        </div>

                        <!-- Country code and Phone in same row -->
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label for="countryCode">Country Code<span class="text-danger">*</span></label>
                                <select class="form-select countrycode" id="countryCode" name="countryCode">
                                    <option value="" disabled selected>Select Country Code</option>
                                    <option value="+1">USA (+1)</option>
                                    <option value="+44">UK (+44)</option>
                                    <option value="+91">India (+91)</option>
                                    <option value="+61">Australia (+61)</option>
                                    <option value="+49">Germany (+49)</option>
                                    <option value="+33">France (+33)</option>
                                    <option value="+81">Japan (+81)</option>
                                    <option value="+86">China (+86)</option>
                                    <option value="+55">Brazil (+55)</option>
                                    <option value="+64">New Zealand (+64)</option>
                                    <option value="+82">South Korea (+82)</option>
                                    <option value="+7">Russia (+7)</option>
                                    <option value="+971">United Arab Emirates (+971)</option>
                                    <option value="+966">Saudi Arabia (+966)</option>
                                    <option value="+965">Kuwait (+965)</option>
                                    <option value="+974">Qatar (+974)</option>
                                    <option value="+968">Oman (+968)</option>
                                    <option value="+973">Bahrain (+973)</option>
                                    <option value="+92">Pakistan (+92)</option>
                                    <option value="+880">Bangladesh (+880)</option>
                                    <option value="+960">Maldives (+960)</option>
                                    <option value="+66">Thailand (+66)</option>
                                    <option value="+63">Philippines (+63)</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="phone" class="form-label">Telephone<span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" required placeholder="Telephone*">
                            </div>
                        </div>
                        <!-- Company field -->
                        <div class="mb-3">
                            <label for="company" class="form-label">Company/Organization<span class="text-danger">*</span></label>
                            <input type="text" name="company" id="company" class="form-control" required placeholder="Company/Organization*">
                        </div>
                        <!-- Company size field -->
                        <div class="mb-3">
                            <label for="company_size" class="form-label">Company size<span class="text-danger">*</span></label>
                            <select name="company_size" id="company_size" class="form-select" required>
                                <option value="">Select company size</option>
                                <option value="100-500">100-500 employees</option>
                                <option value="501-1000">501-1000 employees</option>
                                <option value="1001-5000">1001-5000 employees</option>
                                <option value="5001-10000">5001-10000 employees</option>
                                <option value=">10000">>10000 employees</option>
                            </select>
                        </div>
                        <!-- Country selection field -->
                        <div class="mb-3">
                            <label for="country" class="form-label">Country<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="country" id="country" placeholder=" ">
                        </div>

                        <!-- Submit button -->
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary rounded-pill px-5 py-2">SEND</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="mod_article  max-width-viewport block" id="article-44422" style="margin-top: 0px;">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800 ">
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
    async function setCountryData() {
        try {
            // Fetch data from the PHP proxy
            const response = await fetch('proxy.php');

            // Parse the JSON response
            const data = await response.json();

            // Check if there was an error in the response
            if (data.error) {
                console.error(data.error);
                return;
            }

            // Set the country code in the dropdown
            const countryCodeSelect = document.getElementById('countryCode');
            countryCodeSelect.value = data.country_calling_code; // e.g., +91

            // Set the country name in the input field
            document.getElementById('country').value = data.country_name; // e.g., India
        } catch (error) {
            console.error('Error fetching country data:', error);
        }
    }

    // Call the function on page load
    // window.onload = setCountryData;
</script>
<?php include_once("includes/footer.php"); ?>