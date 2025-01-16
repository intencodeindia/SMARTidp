<?php include_once 'head.php'; ?>
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/third.css">
<header class="page-header">
    <div class="header-navigation is-fixed is-enabled" dir="ltr">
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start d-none "
            style="background-color: #000d39; ">
            <div class="centered-wrapper-inner ">
                <!-- rsce_my_element.html5 -->
                <div class="ce_rsce_text menu-top-slide-in ce_text block">
                    <p style="text-align: center;">SmartIDP named a Leader in the IDC MarketScape <a class="ml-5"
                            href="/en/knowledge-center/analyst-reports/idc-report.html">Find out why</a></p>
                </div>
                <button class="menu-top-slide-in-close -tertiary"><img width="8" height="8"
                        src="/files/content/redesign/icons/x-light.svg"></button>
                <script>
                    document.ready(() => {
                        document.querySelector('.menu-top-slide-in-close').addEventListener('click', (event) => {
                            event.target.parentNode.parentNode.style.display = 'none'
                        })
                    })
                </script>
            </div>
        </div>
        <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start container-fullhd">
            <div class="centered-wrapper-inner ">
                <div class="main-navigation-wrapper">
                    <!-- indexer::stop -->
                    <div class="ce_rsce_oneo_logo logo doxi mr-lg-3">
                        <a href="<?= BASE_PATH ?>index.php">
                            <img src="<?php echo BASE_PATH; ?>assets/images/logo/logo3.png"
                                width="176" height="150" alt="">
                        </a>
                    </div>
                    <!-- indexer::continue -->
                    <div class="ce_rsce_oneo_logo logo color-switch">
                    </div>
                    <!-- indexer::stop -->
                    <nav class="mod_rocksolid_mega_menu_custom main-navigation block">
                        <a href="en/#skipNavigation820" class="invisible">Skip navigation</a>
                        <ul class="level_1">
                            <li class="sibling first -mega">
                                <a href="/en/business-platform/doxis-intelligent-content-automation.html"
                                    title="SmartIDP Content Services Platform for ECM, BPM &amp; Collaboration"
                                    class="sibling first -mega" aria-haspopup="true" itemprop="url"><span
                                        itemprop="name">Products & Services</span>
                                </a>
                                <div class="mega-dropdown level_2 ">
                                    <div class="mega-dropdown-inner">
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-4-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                            <p class="mega-dropdown-heading">
                                                Products </p>
                                            <ul>
                                                <li class="menu-doxi">
                                                    <a href="<?php echo BASE_PATH; ?>ica.php"
                                                        class="menu-doxi">
                                                        SmartIDP Intelligent Content Automation </a>
                                                </li>
                                                <li class="menu-headline">
                                                    <a href="<?php echo BASE_PATH; ?>" class="menu-headline">
                                                        Hot Topics </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>ai.php"
                                                        class=""> 
                                                        Artificial intelligence in ECM </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>PA.php"
                                                        class="">
                                                        Process automation </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>dm.php" class="">
                                                        Document management </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>fast.php"
                                                        class="">
                                                        Fast Starters </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-4-1 -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                            <p class="mega-dropdown-heading">
                                                Integrations </p>
                                            <ul>
                                                <!-- <li class="">
                                                            <a href="/en/solutions/microsoft-365.html" class="">
                                                                Microsoft </a>
                                                        </li> -->
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>sap.php" class="">
                                                        SAP </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>saps.php" class="">
                                                        SAP SuccessFactors </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>sf.php" class="">
                                                        Salesforce </a>
                                                </li>
                                                <!-- <li class="menu-overview-page">
                                                            <a href="/en/solutions/business-connectors.html"
                                                                class="menu-overview-page">
                                                                All integrations </a>
                                                        </li> -->
                                            </ul>
                                        </section>
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-4-1 -large-first-row -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last">
                                            <p class="mega-dropdown-heading">
                                                Services </p>
                                            <ul>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>ci.php"
                                                        class="">
                                                        Consulting & implementation </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>ms.php"
                                                        class="">
                                                        Managed services </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <section
                                                    class="mega-dropdown-column  rs-column -large-col-4-1 -large-last -large-first-row -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last">
                                                    <p class="mega-dropdown-heading">
                                                        Product knowledge </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>saas.php" class="">
                                                                SaaS </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>cop.php"
                                                                class="">
                                                                Cloud, on-premises & hybrid </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/business-platform/certification.html" class="">
                                                                Certification </a>
                                                        </li>
                                                    </ul>
                                                </section>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-overview-page sibling -mega">
                                <a href="/en/solutions.html" title="Solutions &amp; Use Cases"
                                    class="menu-overview-page sibling -mega" aria-haspopup="true"
                                    itemprop="url"><span itemprop="name">Solutions</span>
                                </a>
                                <div class="mega-dropdown level_2 max-width-1200">
                                    <div class="mega-dropdown-inner">
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                            <p class="mega-dropdown-heading">
                                                Use Cases </p>
                                            <ul>
                                                <li class="">
                                                    <a href="/en/solutions/document-management.html" class="">
                                                        Document management </a>
                                                </li>
                                                <li class="">
                                                    <a href="/en/solutions/invoice-automation.html" class="">
                                                        Invoice automation </a>
                                                </li>
                                                <li class="">
                                                    <a href="/en/solutions/contract-management.html" class="">
                                                        Contract management </a>
                                                </li>
                                                <!-- <li class="">
                                                            <a href="/en/business-platform/archiving.html" class="">
                                                                Archiving </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/solutions/inbound-mail-automation.html"
                                                                class="">
                                                                Inbound mail automation </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/solutions/case-management.html" class="">
                                                                Case management </a>
                                                        </li> -->
                                                <li class="menu-overview-page sibling">
                                                    <a href="/en/solutions.html"
                                                        class="menu-overview-page sibling">
                                                        Solutions </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last">
                                            <p class="mega-dropdown-heading">
                                                Industries </p>
                                            <ul>
                                                <li class="">
                                                    <a href="/en/solutions/manufacturing.html" class="">
                                                        Manufacturing </a>
                                                </li>
                                                <!-- <li class="">
                                                            <a href="/en/solutions/bank-financial-services.html"
                                                                class="">
                                                                Banking & financial services </a>
                                                        </li> -->
                                                <li class="">
                                                    <a href="/en/solutions/insurance.html" class="">
                                                        Insurance </a>
                                                </li>
                                                <!-- <li class="">
                                                            <a href="/en/solutions/logistics.html" class="">
                                                                Logistics </a>
                                                        </li> -->
                                                <li class="">
                                                    <a href="/en/solutions/healthcare.html" class="">
                                                        Healthcare </a>
                                                </li>
                                                <li class="menu-overview-page">
                                                    <a href="/en/products-and-solutions/industry-solutions.html"
                                                        class="menu-overview-page">
                                                        All Industries </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <!-- <section
                                                    class="mega-dropdown-column  rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                                    <p class="mega-dropdown-heading">
                                                        Departments </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="/en/products-and-solutions/departments/purchasing-procurement.html"
                                                                class="">
                                                                Purchasing & procurement </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/solutions/human-resources.html" class="">
                                                                Human resources </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/products-and-solutions/departments/legal-department.html"
                                                                class="">
                                                                Legal </a>
                                                        </li>
                                                    </ul>
                                                </section> -->
                                    </div>
                                </div>
                            </li>

                            <li class="sibling -mega">
                                <a href="/en/references.html" title="Customers &amp; Partner"
                                    class="sibling -mega" aria-haspopup="true" itemprop="url"><span
                                        itemprop="name">Customers & Partners</span>
                                </a>
                                <div class="mega-dropdown level_2 max-width-1200">
                                    <div class="mega-dropdown-inner">
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                            <p class="mega-dropdown-heading">
                                                Customers </p>
                                            <ul>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>contact.php" class="">
                                                        Contact Us </a>
                                                </li>
                                                <!-- <li class="">
                                                            <a href="https://ser.ideas.aha.io/" class=""
                                                                target="_blank">
                                                                Idea portal </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/knowledge-center/seracademy.html" class="">
                                                                SERacademy training </a>
                                                        </li> -->
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>kenz_user.php" class="">
                                                        SmartIDP User Group </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                            <p class="mega-dropdown-heading">
                                                Partner </p>
                                            <ul>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>bp.php"
                                                        class="">
                                                        Becoming a partner </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>fp.php"
                                                        class="">
                                                        Finding a partner </a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </li>
                            <li class="sibling -mega">
                                <a href="/en/about-us.html" title="About the SER Group" class="sibling -mega"
                                    aria-haspopup="true" itemprop="url"><span itemprop="name">About Us</span>
                                </a>
                                <div class="mega-dropdown level_2 max-width-1200">
                                    <div class="mega-dropdown-inner">
                                        <section
                                            class="mega-dropdown-column mega-menu-image-only rs-column -large-col-4-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                            <div class="mega-dropdown-image">
                                                <!-- <img data-src="files/content/images/unternehmen/SmartIDP_headquarter_bonn.webp"
                                                            width="600" height="314" alt="" loading="lazy"
                                                            id="menu-headquarter"> -->
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var img = document.getElementById('menu-headquarter');
                                                        var menuItem = img.closest('li');
                                                        menuItem.addEventListener('mouseover', function setHeadquarterImage() {
                                                            img.src = img.dataset.src;
                                                            menuItem.removeEventListener('mouseover', setHeadquarterImage)
                                                        })
                                                    })
                                                </script>
                                            </div>
                                        </section>
                                        <section
                                            class="mega-dropdown-column  rs-column -large-col-4-1 -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                            <ul>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>manu.php" class="">
                                                        Management </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>am.php" class="">
                                                        Social responsibility </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo BASE_PATH; ?>loc.php" class="">
                                                        Locations </a>
                                                </li>
                                                <!-- <li class="">
                                                            <a href="/en/about-us/news-press.html" class="">
                                                                News/press </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="/en/about-us/careers.html" class="">
                                                                Careers </a>
                                                        </li> -->
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="demo-buchen-main-menu sibling last">
                                <a href="demo.smartidp.ai"
                                    title="Live demo" class="demo-buchen-main-menu sibling last"
                                    itemprop="url"><span itemprop="name">Live demo</span>
                                </a>
                            </li> -->
                        </ul>
                        <span id="skipNavigation820" class="invisible"></span>
                    </nav>
                    <!-- indexer::continue -->
                    <!-- indexer::stop -->
                    <div class="ce_rsce_oneo_nav_search main-navigation-search">
                        <a href="/en/search.html" title="Search"><svg xmlns="http://www.w3.org/2000/svg"
                                width="512" height="512" viewBox="0 0 512 512">
                                <path
                                    d="M499.953 432.698L377.631 310.374c18.44-30.298 29.062-65.879 29.062-103.952C406.693 95.827 310.861 0 200.252 0 89.663 0 0 89.662 0 200.265s95.827 206.421 206.417 206.421c36.777 0 71.213-9.956 100.828-27.255L430.232 502.42c12.03 12.036 31.548 12.036 43.572 0l30.506-30.499c12.037-12.038 7.676-27.188-4.357-39.223zM61.624 200.265c0-76.576 62.071-138.648 138.628-138.648 76.582 0 144.818 68.23 144.818 144.805 0 76.569-62.085 138.648-138.654 138.648-76.562 0-144.792-68.23-144.792-144.805z" />
                            </svg>
                        </a>
                        <form action="/en/search.html" method="get">
                            <label for="oneo-nav-search-637">Enter search term and press Enter</label>
                            <input id="oneo-nav-search-637" type="search" name="keywords">
                            <button type="submit">Search</button>
                            <a href="" class="main-navigation-search-close"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256.939 1.148C116.231 1.148 2.127 115.254 2.127 255.961s114.104 254.812 254.812 254.812c140.799 0 254.812-114.105 254.812-254.812S397.738 1.148 256.939 1.148zm0 463.296c-114.92 0-208.483-93.519-208.483-208.483S142.019 47.478 256.939 47.478c115.009 0 208.483 93.519 208.483 208.483s-93.474 208.483-208.483 208.483zm70.127-324.307l-70.534 70.535-70.534-70.535-45.878 45.877 70.535 70.535-69.631 69.631 45.877 45.876 69.63-69.631 69.631 69.631 45.877-45.876-69.631-69.631 70.535-70.535z" />
                                </svg>
                            </a>
                        </form>
                    </div>
                    <!-- indexer::continue -->
                    <!-- indexer::stop -->

                    <!-- indexer::continue -->
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation-mobile">
        <!-- indexer::stop -->
        <nav class="mod_navigation block">
            <a href="/en/#skipNavigation439" class="invisible">Skip navigation</a>
            <ul class="level_1">
                <li class="submenu menu-overview-page sibling"><a href="/en/solutions.html"
                        title="Solutions &amp; Use Cases" class="submenu menu-overview-page sibling"
                        aria-haspopup="true">Solutions</a><button
                        class="main-navigation-mobile-expand">expand</button>
                    <ul class="level_2">
                        <li><a href="/en/solutions/document-management.html"
                                title="SmartIDP DMS — Your document management system">Document management</a></li>
                        <li><a href="/en/solutions/invoice-automation.html"
                                title="Automated Invoice Processing Software">Invoice automation</a></li>
                        <li><a href="/en/solutions/order-confirmation-automation.html"
                                title="Automate your order confirmation process">Order confirmation
                                automation</a></li>
                        <li><a href="/en/solutions/contract-management.html"
                                title="Contract management software |electronic contract files with SmartIDP">Contract
                                management</a></li>
                        <li><a href="/en/solutions/customer-360.html"
                                title="Customer eFiles | Electronic customer files with SmartIDP">Customer 360°</a>
                        </li>
                        <li><a href="/en/solutions/supplier-360.html"
                                title="Electronic supplier eFiles with SmartIDP">Supplier 360°</a></li>
                        <li><a href="/en/solutions/case-management.html" title="Manage cases with SmartIDP">Case
                                management</a></li>
                        <li><a href="/en/solutions/enterprise-search.html"
                                title="Enterprise search with SmartIDP">Enterprise search</a></li>
                        <li><a href="/en/solutions/quality-management.html"
                                title="Quality management | QM manual with SmartIDP">Quality management</a></li>
                        <li><a href="/en/solutions/human-resources.html"
                                title="HR eFile solution | electronic HR files with SmartIDP">Human resources</a>
                        </li>
                        <li><a href="/en/solutions/inbound-mail-automation.html"
                                title="Electronic inbound mail processing with SmartIDP">Inbound mail
                                automation</a></li>
                        <li><a href="/en/solutions/doxis-intelligent-purchase-to-pay-automation.html"
                                title="Purchase-to-pay automation with SmartIDP">SmartIDP Intelligent Purchase-to-Pay
                                Automation</a></li>
                        <li><a href="/en/solutions/doxis-content-bridge-for-sap-and-salesforce.html"
                                title="SmartIDP Content Bridge for SAP &amp; Salesforce: More return on information">Content
                                Bridge for SAP & Salesforce</a></li>
                        <li class="menu-overview-page"><a href="/en/solutions/business-connectors.html"
                                title="Integration with SmartIDP" class="menu-overview-page">Business
                                integrators</a></li>
                        <li class="menu-overview-page"><a
                                href="/en/products-and-solutions/industry-solutions.html"
                                title="ECM industry solutions" class="menu-overview-page">All Industries</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu sibling"><a
                        href="/en/business-platform/doxis-intelligent-content-automation.html"
                        title="SmartIDP Content Services Platform for ECM, BPM &amp; Collaboration"
                        class="submenu sibling" aria-haspopup="true">Products & Services</a><button
                        class="main-navigation-mobile-expand">expand</button>
                    <ul class="level_2">
                        <li class="menu-doxi"><a
                                href="/en/business-platform/doxis-intelligent-content-automation.html"
                                title="SmartIDP Intelligent Content Automation" class="menu-doxi">SmartIDP Intelligent
                                Content Automation</a></li>
                        <li><a href="/en/business-platform/doxis-fast-starters.html"
                                title="SmartIDP Fast Starters - Your quick &amp; easy content apps">Fast
                                Starters</a></li>
                        <li><a href="/en/business-platform/content-services.html"
                                title="SmartIDP — the first true content services platform">Content Services
                                Platform SmartIDP</a></li>
                        <li><a href="/en/business-platform/content-understanding.html"
                                title="Artificial intelligence &amp; machine learning on the SmartIDP platform">Artificial
                                intelligence in ECM</a></li>
                        <li><a href="/en/business-platform/process-automation.html"
                                title="Business Process Management (BPM) Solution">Process automation</a></li>
                        <li><a href="/en/business-platform/archiving.html"
                                title="Digital Document Archiving Solution">Archiving</a></li>
                        <li><a href="/en/business-platform/enabling-remote-working.html"
                                title="Mobile working with SmartIDP">Enabling remote work</a></li>
                        <li><a href="/en/business-platform/collaboration.html"
                                title="Collaboration | Why companies choose ECM for collaboration">Collaboration</a>
                        </li>
                        <li><a href="/en/business-platform/information-governance.html"
                                title="Compliance Management Solution: stay compliant">Information
                                governance</a></li>
                        <li><a href="/en/business-platform/migration.html"
                                title="Migration to SmartIDP by SmartIDP">Migration</a></li>
                        <li><a href="/en/business-platform/saas.html"
                                title="SmartIDP-as-a-service in the cloud">SaaS</a></li>
                        <li><a href="/en/business-platform/cloud-on-premises-hybrid.html"
                                title="SmartIDP deployment: Cloud, on-premises &amp; hybrid">Cloud, on-premises &
                                hybrid</a></li>
                        <li><a href="/en/business-platform/certification.html"
                                title="SmartIDP-Certified">Certification</a></li>
                    </ul>
                </li>
                <li class="submenu sibling"><a href="/en/knowledge-center/media-library.html"
                        title="Knowledge Center" class="submenu sibling" aria-haspopup="true">Knowledge
                        Center</a><button class="main-navigation-mobile-expand">expand</button>
                    <ul class="level_2">
                        <li><a href="/en/knowledge-center/webinars.html" title="Webinars">Webinars</a></li>
                        <li><a href="/en/knowledge-center/events.html" title="Events from SmartIDP">Events</a></li>
                        <li><a href="/en/knowledge-center/seracademy.html" title="SmartIDPacademy">SmartIDPacademy
                                training</a></li>
                        <li><a href="/en/knowledge-center/ser-user-group.html" title="SmartIDP User Group">SmartIDP User
                                Group</a></li>
                        <li><a href="/en/knowledge-center/glossary.html" title="Glossary">Glossary</a></li>
                        <li><a href="/en/knowledge-center/analyst-reports.html" title="Market analysts">Analyst
                                reports</a></li>
                        <li><a href="/en/knowledge-center/blog.html" title="Blog">Blog</a></li>
                        <li><a href="/en/knowledge-center/media-library.html" title="Resources">Resources</a>
                        </li>
                        <li><a href="/en/references.html" title="Customer References / Best Practices">Customer
                                References</a></li>
                    </ul>
                </li>
                <li class="submenu sibling"><a href="/en/service-delivery.html"
                        title="Services – We are here for you!" class="submenu sibling"
                        aria-haspopup="true">Service & Delivery</a><button
                        class="main-navigation-mobile-expand">expand</button>
                    <ul class="level_2">
                        <li><a href="/en/service-delivery/consulting-implementation.html"
                                title="Professional Service">Consulting & implementation</a></li>
                        <li><a href="/en/service-delivery/managed-services.html"
                                title="Managed service &amp; support packages">Managed services</a></li>
                        <li><a href="/en/service-delivery/partners.html" title="Partner Program">Partners</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu sibling"><a href="/en/about-us.html" title="About the SmartIDP Group"
                        class="submenu sibling" aria-haspopup="true">About Us</a><button
                        class="main-navigation-mobile-expand">expand</button>
                    <ul class="level_2">
                        <li><a href="/en/about-us/management.html"
                                title="The SmartIDP Group Management Team">Management</a></li>
                        <li><a href="/en/about-us/social-responsibility.html"
                                title="Social responsibility">Social responsibility</a></li>
                        <li><a href="/en/about-us/locations.html" title="SmartIDP Locations">Locations</a></li>
                        <li><a href="/en/about-us/news-press.html" title="News/press releases">News/press</a>
                        </li>
                        <li><a href="/en/about-us/careers.html" title="A career with SmartIDP">Careers</a></li>
                    </ul>
                </li>
                <li class="demo-buchen-main-menu sibling"><a
                        href="https://www.SmartIDPgroup.com/en/live-demo.html?itm_campaign=main_menu&itm_medium=website&itm_source=menu_en"
                        title="Live demo" class="demo-buchen-main-menu sibling">Live demo</a></li>
                <li class="sibling"><a href="https://marketplace.SmartIDPgroup.com/en/" title="Marketplace"
                        class="sibling" target="_blank" rel="noreferrer noopener">Marketplace</a></li>
                <li class="sibling"><a href="/en/contact.html" title="Contact" class="sibling">Contact</a></li>
                <li class="sibling"><a href="/en/legal-information.html" title="Legal Information"
                        class="sibling">Legal Information</a></li>
                <li class="sibling"><a href="/en/data-protection-policy.html" title="Data Protection Policy"
                        class="sibling">Data Protection Policy</a></li>
                <li class="sibling"><a href="/en/marketplace.html" title="Marketplace"
                        class="sibling">Marketplace</a></li>
            </ul>
            <span id="skipNavigation439" class="invisible"></span>
        </nav>
        <!-- indexer::continue -->
        <div class="SmartIDP-languages">
            <p>
                <a href="en/#"><img loading="lazy"
                        src="https://cdn.sergroup.com/assets/images/2/en-us-hrkmdtwxe83qbgn.png" alt="English"
                        width="20" height="13">English</a>
            </p>
        </div>
    </div>
</header>