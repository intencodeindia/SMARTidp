<?php include_once("includes/header.php"); ?>
<style>
    /* Default margin for larger screens */
    #smartidp-img {
        margin-bottom: 17%;
    }

    /* Remove margin on smaller screens */
    @media (max-width: 767px) {
        #smartidp-img {
            margin-bottom: 0 !important;
        }
    }
</style>

<!-- <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/second.css"> -->
<!-- <script type='text/javascript' id='vwoCode'>
    window._vwo_code || (function() {
        var account_id = 880714,
            version = 2.1,
            settings_tolerance = 2000,
            hide_element = 'body',
            hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
            f = !1,
            w = window,
            d = document,
            v = d.querySelector('#vwoCode'),
            cK = '_vwo_' + account_id + '_settings',
            cc = {};
        try {
            var c = JSON.parse(localStorage.getItem('_vwo_' + account_id + '_config'));
            cc = c && typeof c === 'object' ? c : {}
        } catch (e) {}
        var stT = cc.stT === 'session' ? w.sessionStorage : w.localStorage;
        code = {
            use_existing_jquery: function() {
                return typeof use_existing_jquery !== 'undefined' ? use_existing_jquery : undefined
            },
            library_tolerance: function() {
                return typeof library_tolerance !== 'undefined' ? library_tolerance : undefined
            },
            settings_tolerance: function() {
                return cc.sT || settings_tolerance
            },
            hide_element_style: function() {
                return '{' + (cc.hES || hide_element_style) + '}'
            },
            hide_element: function() {
                if (performance.getEntriesByName('first-contentful-paint')[0]) {
                    return ''
                }
                return typeof cc.hE === 'string' ? cc.hE : hide_element
            },
            getVersion: function() {
                return version
            },
            finish: function(e) {
                if (!f) {
                    f = !0;
                    var t = d.getElementById('_vis_opt_path_hides');
                    if (t) t.parentNode.removeChild(t);
                    if (e)(new Image).src = 'https://dev.visualwebsiteoptimizer.com/ee.gif?a=' + account_id + e
                }
            },
            finished: function() {
                return f
            },
            addScript: function(e) {
                var t = d.createElement('script');
                t.type = 'text/javascript';
                if (e.src) {
                    t.src = e.src
                } else {
                    t.text = e.text
                }
                d.getElementsByTagName('head')[0].appendChild(t)
            },
            load: function(e, t) {
                var i = this.getSettings(),
                    n = d.createElement('script'),
                    r = this;
                t = t || {};
                if (i) {
                    n.textContent = i;
                    d.getElementsByTagName('head')[0].appendChild(n);
                    if (!w.VWO || VWO.caE) {
                        stT.removeItem(cK);
                        r.load(e)
                    }
                } else {
                    var o = new XMLHttpRequest;
                    o.open('GET', e, !0);
                    o.withCredentials = !t.dSC;
                    o.responseType = t.responseType || 'text';
                    o.onload = function() {
                        if (t.onloadCb) {
                            return t.onloadCb(o, e)
                        }
                        if (o.status === 200) {
                            _vwo_code.addScript({
                                text: o.responseText
                            })
                        } else {
                            _vwo_code.finish('&e=loading_failure:' + e)
                        }
                    };
                    o.onerror = function() {
                        if (t.onerrorCb) {
                            return t.onerrorCb(e)
                        }
                        _vwo_code.finish('&e=loading_failure:' + e)
                    };
                    o.send()
                }
            },
            getSettings: function() {
                try {
                    var e = stT.getItem(cK);
                    if (!e) {
                        return
                    }
                    e = JSON.parse(e);
                    if (Date.now() > e.e) {
                        stT.removeItem(cK);
                        return
                    }
                    return e.s
                } catch (e) {
                    return
                }
            },
            init: function() {
                if (d.URL.indexOf('__vwo_disable__') > -1) return;
                var e = this.settings_tolerance();
                w._vwo_settings_timer = setTimeout(function() {
                    _vwo_code.finish();
                    stT.removeItem(cK)
                }, e);
                var t;
                if (this.hide_element() !== 'body') {
                    t = d.createElement('style');
                    var i = this.hide_element(),
                        n = i ? i + this.hide_element_style() : '',
                        r = d.getElementsByTagName('head')[0];
                    t.setAttribute('id', '_vis_opt_path_hides');
                    v && t.setAttribute('nonce', v.nonce);
                    t.setAttribute('type', 'text/css');
                    if (t.styleSheet) t.styleSheet.cssText = n;
                    else t.appendChild(d.createTextNode(n));
                    r.appendChild(t)
                } else {
                    t = d.getElementsByTagName('head')[0];
                    var n = d.createElement('div');
                    n.style.cssText = 'z-index: 2147483647 !important;position: fixed !important;left: 0 !important;top: 0 !important;width: 100% !important;height: 100% !important;background: white !important;';
                    n.setAttribute('id', '_vis_opt_path_hides');
                    n.classList.add('_vis_hide_layer');
                    t.parentNode.insertBefore(n, t.nextSibling)
                }
                var o = 'https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&vn=' + version;
                if (w.location.search.indexOf('_vwo_xhr') !== -1) {
                    this.addScript({
                        src: o
                    })
                } else {
                    this.load(o + '&x=true')
                }
            }
        };
        w._vwo_code = code;
        code.init()
    })()
</script> -->
<div class="content-wrapper">
    <main role="main" class="main-content">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Left Column (Text and Button) -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-start">
                        <h1 class="display-2 fw-bold responsive-heading" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent; font-size: 3em; margin-bottom: 0.5rem;">
                            Content automation supercharged with <br><span>Artificial intelligence</span>
                        </h1>
                        <p class="lead mb-4 responsive-paragraph" style="font-size: 1.25rem; color: #333; font-weight: bold; text-align: justify;">
                            Empower your employees' daily work, improve document understanding, and supercharge business processes with SmartIDP Intelligent Content Automation's next-generation ECM capabilities.
                        </p>
                        <a class="btn" href="contact.php" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); color: white; padding: 10px 30px; text-decoration: none; border-radius: 50px;">
                            Experience Advice
                        </a>
                    </div>
                </div>
                <!-- Right Column (Image) -->
                <div class="col-lg-6 text-center">
                    <img src="assets/images/SmartIDP/intelligent-document-processing1.png" alt="SmartIDP" class="img-fluid" id="smartidp-img" loading="lazy">
                </div>
            </div>
        </div>


        <div class="mod_article  max-width-viewport ser-hide-mobile block" id="article-43655">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start  -vertical-centered" style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                            <h2 class="headline -extra-large ">Faster, better and stronger work<span
                                    class="gradient"> with AI</span></h2>
                        </div>
                        <section class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes">
                            <div class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row  -inverted-icon   "
                                style="">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon1.svg"
                                        width="69" height="68" alt="">
                                </div>
                                <p class="-medium">Increased efficiency</p>
                                <div class="icon-boxes-item-text">
                                    <p>Automated processes&nbsp;and intelligent assistance empowers employees to
                                        work smarter, not harder –&nbsp;achieving more with the same resources.
                                    </p>
                                </div>
                            </div>
                            <div class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last  -inverted-icon   "
                                style="">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon3.svg"
                                        width="69" height="68" alt="" loading="lazy">
                                </div>
                                <p class="-medium">Apply AI wherever it's needed</p>
                                <div class="icon-boxes-item-text">
                                    <p>Seamless integration of cutting-edge AI capabilities work&nbsp;in tandem
                                        with your current systems, transforming&nbsp;and improving your
                                        processes.&nbsp;</p>
                                </div>
                            </div>
                            <div class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last  -inverted-icon   "
                                style="">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon2.svg"
                                        width="69" height="68"loading="lazy">
                                </div>
                                <p class="-medium">Make better decisions</p>
                                <div class="icon-boxes-item-text">
                                    <p>Increased transparency and intelligent insights from AI ensure
                                        you&nbsp;get the best insights from your data, optimizing business
                                        decisions and minimizing risks.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_article fade-out-background max-width-viewport block" id="article-43656">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start">
                    <div class="centered-wrapper-inner ">
                        <div class="headline-box ser-headline-box  ce_rsce_ser_headline_box">
                            <h2 class="headline -extra-large "><span class="gradient">AI</span> is here to help
                            </h2>
                        </div>
                        <section
                            class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes homepage-icon-boxes">
                            <div class="icon-boxes-item rs-column -large-col-6-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left   -boxes-border -icon-align-left -background-color"
                                style="background-color: #ffffff;">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon1.svg"
                                        width="69" height="68" loading="lazy" alt="">
                                </div>
                                <h3 class="-medium" style="text-align: center;">Intelligent Digital Workplace</h3>
                                <div class="icon-boxes-item-text" style="text-align: center;">
                                    <p>Empower your workforce with AI for enhanced productivity, streamlined workspaces, smarter decision-making, better collaboration, and a trusty assistant at your side.</p>
                                </div>


                            </div>
                            <a class="icon-boxes-item rs-column -large-col-6-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last -align-left   -boxes-border -icon-align-left -background-color"
                                style="background-color: #ffffff;"
                                href="/en/business-platform/artificial-intelligence/intelligent-document-processing.html">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon2.svg"
                                        width="69" height="68" loading="lazy" alt="">
                                </div>
                                <h3 class="-medium" style="text-align: center;">Intelligent Document Processing</h3>
                                <div class="icon-boxes-item-text" style="text-align: center;">
                                    <p>Supercharge and simplify your processes with the helping hand of AI –
                                        empowering employees through automation and improving document-driven
                                        processes end-to-end.</p>
                                </div>
                                <!-- <p class="icon-boxes-item-link -link">Learn more →</p> -->
                            </a>
                            <a class="icon-boxes-item rs-column -large-col-6-1 -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left   -boxes-border -icon-align-left -background-color"
                                style="background-color: #ffffff;"
                                href="/en/business-platform/process-automation.html">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon4.svg"
                                        width="70" height="68" loading="lazy" alt="">
                                </div>
                                <h3 class="-medium" style="text-align: center;">Intelligent Process Automation</h3>
                                <div class="icon-boxes-item-text" style="text-align: center;">
                                    <p>Experience unparalleled efficiency across your workforce through the
                                        automation of workflows and cross-system processes, powered by AI.</p>
                                </div>
                                <!-- <p class="icon-boxes-item-link -link">Learn more →</p> -->
                            </a>
                            <div class="icon-boxes-item rs-column -large-col-6-1 -large-first-row -medium-col-3-1 -medium-first -small-col-1-1 -small-first -small-last -align-left   -boxes-border -icon-align-left -background-color"
                                style="background-color: #ffffff;">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon3.svg"
                                        width="70" height="68"loading="lazy" alt="">
                                </div>
                                <h3 class="-medium" style="text-align: center;">Intelligent Content Assistant</h3>
                                <div class="icon-boxes-item-text" style="text-align: center;">
                                    <p>The right information, at the right time, whatever app you're working
                                        with. Work smarter with Doxi, your Intelligent Content Assistant.</p>
                                </div>
                            </div>
                            <div class="icon-boxes-item rs-column -large-col-6-1 -large-first-row -medium-col-3-1 -small-col-1-1 -small-first -small-last -align-left   -boxes-border -icon-align-left -background-color"
                                style="background-color: #ffffff;">
                                <div class="icon-boxes-item-icon-image">
                                    <img src="assets/images/icons/icon5.svg"
                                        width="70" height="68" loading="lazy"alt="">
                                </div>
                                <h3 class="-medium" style="text-align: center;">AI assistance for <br>citizen developers</h3>
                                <div class="icon-boxes-item-text" style="text-align: center;">
                                    <p>Achieve a faster time to value and reduce IT costs and personnel
                                        bottlenecks with our no-code app builder. AI assists citizen developers
                                        in configuring the perfect content apps for their needs.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox " style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="content-text text-justify">
                            <h3>Hi! I&apos;m SmartIDP - your Intelligent Content Assistant</h3>
                            <div class="rte">
                                <p>Think of me as your speedy, smart assistant that&nbsp;gets you the right
                                    information, at the right time, whatever app you're working with.</p>
                                <p>Got a question? Just ask me. I can help you with manual tasks that take up
                                    time such as adding metadata, so you can focus on the things you should be
                                    prioritizing.</p>
                                <p>Want to learn more about me? &nbsp;</p>
                            </div>
                        </div>
                        <div class="button-box ce_rsce_oneo_button   -left">
                            <a class="button ce_rsce_oneo_button   -left" href="/en/live-demo.html">
                                Get Demo </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <!-- Main Heading with Gradient and Styling -->
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent; font-size: 2.5rem; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                    AI is there for <span class="text-gradient">your people</span>
                </h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Column (Video/Image) -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-center">
                        <div class="position-relative">
                            <button class="btn btn-link p-0" data-splash-screen>
                                <img src="assets/images/SmartIDP/intelligent-document-processing.png" loading="lazy" alt="SmartIDP Video" class="img-fluid" style="max-width: 100%; height: 420px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); transition: transform 0.3s;">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Text and Headings) -->
                <div class="col-lg-6">
                    <div class="mb-1">
                        <h2 class="h2 fw-bold" style="font-size: 1.75rem; color: #333; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);-webkit-background-clip: text; color: transparent; text-transform: uppercase; letter-spacing: 1px;">
                            AI-powered automation
                        </h2>

                        <h3 class="h4 mt-2" style="font-size: 1.5rem; color: #555;">Instantly automating routine tasks</h3>
                        <p style="font-size: 1rem; color: #444; line-height: 1.6; text-align: justify;">
                            Want to produce more results with the same resources? AI-powered content automation vastly improves your ability to overcome growing complexity and fast-paced work demands. SmartIDP AI empowers workers through the automation of routine tasks so that they can focus on the work that fulfills them and generates value for your company.
                        </p>
                    </div>
                    <div>
                        <h1 class="h2 fw-bold" style="font-size: 1.75rem; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent; text-transform: uppercase; letter-spacing: 1px; margin: 0;">
                            AI-powered assistance
                        </h1>

                        <h3 class="h4" style="font-size: 1.5rem; color: #555;">Find and understand the information you need</h3>
                        <p style="font-size: 1rem; color: #444; line-height: 1.6; text-align: justify;">
                            A little helping hand can really lighten your workload. Work intelligently, creatively, and productively – all while staying connected with the information and people in your company. SmartIDP AI enriches your daily work with helpful context and content related to your task at hand, and even automatically creates workflows to progress the next steps.
                        </p>
                    </div>

                </div>
            </div>
        </div>



        <div class="container py-1">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <!-- Card with Linear Gradient Background -->
                    <div class="card shadow-lg rounded-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border: none;">
                        <div class="card-body text-center">
                            <!-- Quotation marks and Quote text -->
                            <div class="quote position-relative">
                                <blockquote class="blockquote text-white mb-0" style="font-size: 1.25rem; font-style: italic;">
                                    <i class="bi bi-quote mt-2" style="font-size: 3rem; position: absolute; top: -20px; left: -20px; color: rgba(255, 255, 255, 0.3);"></i>
                                    We are processing much more than we used to with the same amount of people. We can do more without hiring people and follow up many more quotations.
                                </blockquote>
                            </div>
                            <!-- Author or attribution (optional) -->
                            <footer class="blockquote-footer text-white mt-3" style="font-size: 1rem;">SmartIDP</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">
                    Manual work? <span class="text-gradient">Transformed</span> with AI
                </h2>
            </div>

            <!-- Bootstrap Tabs -->
            <ul class="nav" id="myTab" role="tablist" style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: space-evenly;">
                <li class="nav-item p-1" role="presentation">
                    <a class="nav-link active" id="manufacturing-tab" data-bs-toggle="tab" href="#manufacturing" role="tab" aria-controls="manufacturing" aria-selected="true"
                        style="font-size: 1rem; font-weight: bold; padding: 12px 25px; color: white; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 25px; text-decoration: none; transition: all 0.3s ease; display: inline-block; text-align: center;"
                        onmouseover="this.style.background='linear-gradient(331deg, #007ac9 0%, #00b09c 100%)'; this.style.color='white';"
                        onmouseout="this.style.background='linear-gradient(331deg, #0090f9 0%, #00b09c 100%)'; this.style.color='white';">
                        Magic Extraction
                    </a>
                </li>
                <li class="nav-item p-1" role="presentation">
                    <a class="nav-link" id="bank-tab" data-bs-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false"
                        style="font-size: 1rem; font-weight: bold; padding: 12px 25px; color: white; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 25px; text-decoration: none; transition: all 0.3s ease; display: inline-block; text-align: center;"
                        onmouseover="this.style.background='linear-gradient(331deg, #007ac9 0%, #00b09c 100%)'; this.style.color='white';"
                        onmouseout="this.style.background='linear-gradient(331deg, #0090f9 0%, #00b09c 100%)'; this.style.color='white';">
                        Purchase-to-Pay
                    </a>
                </li>
                <li class="nav-item p-1" role="presentation">
                    <a class="nav-link" id="insurance-tab" data-bs-toggle="tab" href="#insurance" role="tab" aria-controls="insurance" aria-selected="false"
                        style="font-size: 1rem; font-weight: bold; padding: 12px 25px; color: white; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 25px; text-decoration: none; transition: all 0.3s ease; display: inline-block; text-align: center;"
                        onmouseover="this.style.background='linear-gradient(331deg, #007ac9 0%, #00b09c 100%)'; this.style.color='white';"
                        onmouseout="this.style.background='linear-gradient(331deg, #0090f9 0%, #00b09c 100%)'; this.style.color='white';">
                        Document Insights
                    </a>
                </li>
                <li class="nav-item p-1" role="presentation">
                    <a class="nav-link" id="logistic-tab" data-bs-toggle="tab" href="#logistic" role="tab" aria-controls="logistic" aria-selected="false"
                        style="font-size: 1rem; font-weight: bold; padding: 12px 25px; color: white; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); border-radius: 25px; text-decoration: none; transition: all 0.3s ease; display: inline-block; text-align: center;"
                        onmouseover="this.style.background='linear-gradient(331deg, #007ac9 0%, #00b09c 100%)'; this.style.color='white';"
                        onmouseout="this.style.background='linear-gradient(331deg, #0090f9 0%, #00b09c 100%)'; this.style.color='white';">
                        AI in Business Studio
                    </a>
                </li>
            </ul>


            <div class="tab-content mt-4" id="myTabContent">
                <!-- Manufacturing Tab Content -->
                <div class="tab-pane fade show active" id="manufacturing" role="tabpanel" aria-labelledby="manufacturing-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold">Instant data extraction with one click</h3>
                            <p>How long does it take to index documents for search later down the line? SmartIDP AI does this in just one click:</p>
                            <ul>
                                <li>Instantly analyze content – no training required</li>
                                <li>Extract the correct terms and summarize the content</li>
                                <li>Assign metadata to documents immediately to improve search</li>
                                <li>Enables employees to quickly validate information</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <a href="javascript:void(0)" rel="noreferrer noopener" data-lightbox="lb260454">
                                    <img src="assets/images/artificial_intelligence/extract.png" alt="Magic Extraction" class="img-fluid" loading="lazy">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Purchase-to-Pay Tab Content -->
                <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold">Streamlined processes, ensured compliance</h3>
                            <p>Gain a competitive advantage through agile, automated, and accurate purchase-to-pay processes.</p>
                            <ul>
                                <li>Instantly detect and respond to market changes, bottlenecks, and deviations</li>
                                <li>Increase customer satisfaction through reliable and punctual delivery</li>
                                <li>Reduce <a href="javascript:void(0)">invoice processing</a> costs by as much as 80%</li>
                            </ul>
                            <!-- <div class="mt-3">
                                <a href="contact.php" class="btn btn-primary">Find out more →</a>
                            </div> -->
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <a href="javascript:void(0)" rel="noreferrer noopener" data-lightbox="lb260468">
                                    <img src="assets/images/artificial_intelligence/diocalap.jpg" alt="Purchase-to-Pay" class="img-fluid" loading="lazy">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Document Insights Tab Content -->
                <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold">Painting an immediate picture of data</h3>
                            <p>Easily understand documents and improve organizational understanding and efficiency.</p>
                            <ul>
                                <li>Ask a question, SmartIDP gives you context-based answers</li>
                                <li>Receive document summaries in seconds</li>
                                <li>Engage with automatically generated Q&As</li>
                                <li>Experience improved decision-making</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <a href="javascript:void(0)" rel="noreferrer noopener" data-lightbox="lb260481">
                                    <img src="assets/images/artificial_intelligence/graph3.png" alt="Document Insights" class="img-fluid" loading="lazy">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- AI in Business Studio Tab Content -->
                <div class="tab-pane fade" id="logistic" role="tabpanel" aria-labelledby="logistic-tab">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold">Fast, flexible, for everyone</h3>
                            <p>The SmartIDP Business Studio provides you a user-friendly, no-code content app builder that, with the power of AI, accelerates time to value and cuts costs and personnel.</p>
                            <ul>
                                <li>Undergo digital transformation in weeks – driven by business experts</li>
                                <li>Interact with intuitive UX and AI-assisted configuration</li>
                                <li>Select and easily customize your content app with a preconfigured Fast Starter template</li>
                                <li>Utilize natural language-based prompt Fast Starters for custom metadata extraction</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-youtube">
                                <figure class="aspect-ratio aspect--16:9">
                                    <img src="assets/images/artificial_intelligence/dashboard.png" alt="Document Insights" class="img-fluid" loading="lazy">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include FontAwesome CDN -->

        <div class="container py-3" id="article-43660">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Headline Box -->
                    <div class="headline-box text-center mb-4">
                        <h2 class="headline -extra-large fw-bold" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">
                            Unlock <span class="gradient">your organization's potential</span> with AI
                        </h2>
                    </div>

                    <!-- Icon Boxes Section -->
                    <section class="row">
                        <!-- Icon Box 1 -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-cogs fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>

                                    <div>
                                        <h3 class="card-title">Transform processes through automation</h3>
                                        <p class="card-text text-justify">Streamline your operations by seamlessly integrating cutting-edge ML methods into document management and processes. Experience a surge in your workflow efficiency and elevate the quality of your outcomes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 2 -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-brain fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Empower users with AI support</h3>
                                        <p class="card-text text-justify">Unleash the potential of SmartIDP AI to effortlessly classify documents, generate dynamic metadata and empower the search experience. Free teams and departments from mundane tasks so they can focus on what truly matters.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 3 -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-chart-line fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Informed decision-making, simplified</h3>
                                        <p class="card-text text-justify">Elevate decision-making with SmartIDP. Our intelligent assistance function has the power to guide employees, global teams, and departments through tasks, suggest similar documents, expert help, and optimal workflow steps. Stay two steps ahead.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 4 -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-smile fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Delight customers and partners, every time</h3>
                                        <p class="card-text text-justify">Not only can everyone in your organization access the information they need, but so can your partners and suppliers through self-service portals. Everyone is united around data and your customers can easily keep coming back for more.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 5 -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-lock fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Unleash information potential, mitigate risks</h3>
                                        <p class="card-text text-justify">Don’t just store unstructured data – unlock its hidden value. With our machine learning technologies, you can unearth patterns, discover relevant content, and extract crucial metadata to shine light on potential risks, and stop them in their tracks. Standardized data and automation of workflows means you're always in line with compliance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Box 6 -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card" style="height: 100%; border-radius: 10px; box-shadow: 1px 5px 7px 0px rgb(82 169 255 / 48%);">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fas fa-robot fa-3x me-3" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;"></i>
                                    <div>
                                        <h3 class="card-title">Revolutionize operations with Auto ML</h3>
                                        <p class="card-text text-justify">We always use an existing large language model but adapt that for your own use case. What we are doing is we try to optimize and automate that for use with Auto ML. No need for manual effort and data labelling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>


        <!-- <div class="mod_article  max-width-viewport block" id="article-43661">
            <div class="mod_article_inner">
                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800  -vertical-centered"
                    style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="rs-columns ce_rs_columns_start">
                            <div
                                class="ce_rs_column_start  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                <div class="content-text">
                                    <h3>Want to achieve 336% ROI with AI?</h3>
                                    <div class="rte">
                                        <p>Discover how our customer SEW-EURODRIVE achieved:</p>
                                        <ul>
                                            <li>336% ROI over 3 years</li>
                                            <li>90%-time savings by year 3</li>
                                            <li>Richer insights into sales processes</li>
                                            <li>Streamlined collaboration across 430 global sites</li>
                                        </ul>
                                        <p>Using&nbsp;AI-powered SmartIDP Intelligent Content Automation.</p>
                                    </div>
                                </div>
                                <div class="button-box ce_rsce_oneo_button   -left">
                                    <a class="button ce_rsce_oneo_button   -left"
                                        href="/en/knowledge-center/analyst-reports/forrester-tei.html">
                                        Read study now </a>
                                </div>
                            </div>
                            <div
                                class="ce_rs_column_start  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last">
                                <div class="ser-hide-mobile">
                                    <div class="content-image">
                                        <figure>
                                            <a href="/en/knowledge-center/analyst-reports/forrester-tei.html">
                                                <img src="https://cdn.sergroup.com/files/content/images/mediathek/3d/whitepaper/EN/tei-study-background.png"
                                                    alt width="722" height="690">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container py-5" id="article-43662">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Headline Box -->
                    <div class="text-center mb-4">
                        <h2 class="display-4" style="font-weight: 700; background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); -webkit-background-clip: text; color: transparent;">
                            Our AI strategy: Intelligent to the core
                        </h2>
                    </div>

                    <!-- Content Section -->
                    <div class="row align-items-stretch">
                        <!-- Text Column -->
                        <div class="col-12 col-md-6 mb-4 text-justify" style="font-size: 1rem; line-height: 1.6; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <p><strong>SmartIDP</strong> Intelligent Content Automation stands as a pioneer and <strong>leader</strong> among content services platforms with AI embedded into the core. Our goal is to empower our customers to get maximum value from their information.</p>
                                <p>SmartIDP enables them to make the right decisions, enhance employee and customer experiences and ultimately manage content in ways that are smarter, more connected and context-aware.</p>
                                <p>We are fully committed to providing our customers with the best AI technology. Our AI strategy focuses on 7 core areas:</p>
                                <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                    <li>Composable AI</li>
                                    <li>Responsible AI</li>
                                    <li>Generative AI</li>
                                    <li>Prompt Engineering</li>
                                    <li>General purpose and custom ML</li>
                                    <li>Multimodal recognition for documents</li>
                                    <li>Combining composable and contextual AI</li>
                                </ul>
                                <p><strong>Read more about our AI strategy <span style="color: #007bff;">here</span>.</strong></p>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img src="assets/images/SmartIDP/Intelligent_doc.png" alt="meets AI" class="img-fluid rounded shadow-lg" style="max-width: 100%; height: 100%; object-fit: cover; border-radius: 15px" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5" id="article-44138">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Card with content -->
                    <div class="card shadow-lg rounded-3" style="border: none; overflow: hidden;">

                        <!-- Card Header with Linear Gradient -->
                        <div class="card-header d-flex justify-content-center align-items-center text-center" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);">
                            <div>
                                <h2 class="display-4 fw-bold text-white" style="margin: 0;">Harnessing AI to Solve Humanity's Biggest Problems</h2>
                            </div>
                        </div>


                        <!-- Card Body with content -->
                        <div class="card-body">
                            <p class="lead fw-bold" style="font-size: 1.25rem; line-height: 1.7; color: #333;">AI is transforming industries, and SmartIDP is at the forefront of this revolution. Organizations are now leveraging AI to manage and analyze vast amounts of content, revolutionizing workflows and enhancing decision-making.</p>

                            <p style="font-size: 1.1rem; color: #555; line-height: 1.7;">SmartIDP seamlessly integrates with existing business processes to unlock the full potential of your data. By utilizing cutting-edge AI, SmartIDP empowers teams to manage content innovatively. This results in faster decision-making, more efficient collaboration, and the ability to stay ahead of challenges that might arise.</p>

                            <h4 style="font-size: 1.5rem; font-weight: 600; color: #222;">How SmartIDP Drives Innovation with AI</h4>
                            <ul style="list-style-type:none; font-size: 1.1rem; color: #555; line-height: 1.7;">
                                <li><strong style="color: #007bff;">- Automating Document Processing:</strong> SmartIDP can classify documents, extract valuable data, and enhance your content workflows.</li>
                                <li><strong style="color: #007bff;">- Intelligent Insights:</strong> Leverage AI-driven analytics to identify patterns, improve decision-making, and provide personalized content recommendations.</li>
                                <li><strong style="color: #007bff;">- AI-Powered Search:</strong> Unlock powerful search capabilities using natural language processing, enabling users to find relevant content faster and more accurately.</li>
                                <li><strong style="color: #007bff;">- Future-Ready Automation:</strong> The SmartIDP platform evolves with your organization, adapting to new challenges and technologies without needing manual intervention.</li>
                            </ul>

                            <p style="font-size: 1.1rem; color: #555; line-height: 1.7;">By adopting AI-powered solutions like SmartIDP, businesses can optimize processes, reduce operational costs, and improve overall efficiency. SmartIDP is reshaping the future of content management by empowering organizations to make data-driven decisions faster and more effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container py-5" id="article-43664">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Card with content -->
                    <div class="card shadow-lg rounded-3" style="border: none; overflow: hidden;">

                        <!-- Card Header with Linear Gradient -->
                        <div class="card-header text-center" style="background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%); color: white;">
                            <h2 class="display-4 fw-bold mb-0 text-white" style="margin: 0;">Dive into the World of AI</h2>
                        </div>

                        <!-- Card Body with content -->
                        <div class="card-body">
                            <div class="row">
                                <!-- First Article Section -->
                                <div class="col-12 col-md-4 mb-4 text-justify">
                                    <div>
                                        <figure>
                                            <picture>
                                                <source srcset="assets/images/SmartIDP/intelligent-document-processing.png" type="image/webp" width="580" height="304">
                                                <img src="assets/images/SmartIDP/intelligent-document-processing.png" width="580" height="304" alt="" loading="lazy" class="img-fluid rounded-3" loading="lazy">
                                            </picture>
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="mt-2" style="font-size: 1.25rem; font-weight: bold;">7 AI Trends Shaping the Future of Content Management and the Digital Workplace</h3>
                                        <p class="text-muted mt-2" style="font-size: 1rem;">Explore the latest trends in AI and how they are transforming content management in the digital era. Discover the key insights that will shape the future.</p>
                                    </div>
                                </div>

                                <!-- Second Article Section -->
                                <div class="col-12 col-md-4 mb-4 text-justify">
                                    <div>
                                        <figure>
                                            <picture>
                                                <source srcset="assets/images/artificial_intelligence/3_ways.webp" type="image/webp" width="580" height="304" loading="lazy">
                                                <img src="assets/images/artificial_intelligence/3_ways.webp" width="580" height="304" alt="" loading="lazy" class="img-fluid rounded-3">
                                            </picture>
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="mt-2" style="font-size: 1.25rem; font-weight: bold;">3 Ways AI is Revolutionizing Banking and Financial Services</h3>
                                        <p class="text-muted mt-2" style="font-size: 1rem;">Learn how AI is reshaping banking and financial services. The future of the sector relies heavily on automation, machine learning, and AI-driven innovations.</p>
                                    </div>
                                </div>

                                <!-- Third Article Section -->
                                <div class="col-12 col-md-4 mb-4 text-justify">
                                    <div>
                                        <figure>
                                            <picture>
                                                <source srcset="assets/images/artificial_intelligence/management.webp" type="image/webp" width="580" height="304" loading="lazy">
                                                <img src="assets/images/artificial_intelligence/management.webp" width="580" height="304" alt="" loading="lazy" class="img-fluid rounded-3">
                                            </picture>
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="mt-2" style="font-size: 1.25rem; font-weight: bold;">Input Management at Its Best</h3>
                                        <p class="text-muted mt-2" style="font-size: 1rem;">Discover how AI-powered input management is transforming data capture, automating processes, and improving overall operational efficiency for organizations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<?php include_once("includes/footer.php"); ?>