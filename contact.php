<?php include_once("includes/header.php"); ?>
<style>

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
                <div class="col-md-6">
                    <div class="card p-4">
                        <h4>Fill out the form below</h4>
                        <form method="post" action="process_form.php">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First name*</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required placeholder="First name*">
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last name*</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" required placeholder="Last name*">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address*</label>
                                <input type="email" name="email" id="email" class="form-control" required placeholder="Email address*">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telephone*</label>
                                <input type="text" name="phone" id="phone" class="form-control" required placeholder="Telephone*">
                            </div>

                            <div class="mb-3">
                                <label for="company" class="form-label">Company/Organization*</label>
                                <input type="text" name="company" id="company" class="form-control" required placeholder="Company/Organization*">
                            </div>

                            <div class="mb-3">
                                <label for="company_size" class="form-label">Company size*</label>
                                <select name="company_size" id="company_size" class="form-select" required>
                                    <option value="">Select company size</option>
                                    <option value="100-500">100-500 employees</option>
                                    <option value="501-1000">501-1000 employees</option>
                                    <option value="1001-5000">1001-5000 employees</option>
                                    <option value="5001-10000">5001-10000 employees</option>
                                    <option value=">10000">>10000 employees</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country*</label>
                                <select name="country" id="country" class="form-select" required>
                                    <option value="">-- Country* --</option>
                                    <!-- Country options can be dynamically added here -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">SEND</button>
                        </form>
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