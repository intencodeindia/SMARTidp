<?php include_once 'head.php'; ?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ECM | Enterprise Content Management - SmartIDP Group</title>
    <base href="https://www.SmartIDPgroup.com/">
    <meta name="robots" content="index,follow">
    <meta name="description" content="SmartIDP develops, markets and implements enterprise content management software (ECM). Our SmartIDP Intelligent Content Automation makes DMS and business processes easier, more efficient and more effective.">
    <meta name="generator" content="Contao Open Source CMS">
    <link rel="canonical" href="https://www.serPgroup.com/en/">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.sergroup.com/files/frontend/css/carousel.min.css?v=72defdce">
    <link rel="stylesheet" href="https://cdn.sergroup.com/assets/css/hamburger-menu.min.css,customer-logo-list.min.css,quote.min.css,...-7e2d6201.css"> -->
<!-- <script>
        document.ready = f => {
            "loading" !== document.readyState ? f() : document.addEventListener("DOMContentLoaded", f)
        }
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        window.gtag = window.gtag || function() {
            dataLayer.push(arguments)
        }
        gtag("consent", "default", {
            functionality_storage: "granted",
            personalization_storage: "granted",
            ad_user_data: "denied",
            ad_personalization: "denied",
            ad_storage: "denied",
            analytics_storage: "denied",
            wait_for_update: 2000
        });
        let consentUpdate = localStorage.getItem("uc_gcm");
        if (consentUpdate !== null) {
            consentUpdate = JSON.parse(consentUpdate);
            gtag("consent", "update", {
                ad_user_data: consentUpdate.adUserData || 'denied',
                ad_personalization: consentUpdate.adPersonalization || 'denied',
                ad_storage: consentUpdate.adStorage || 'denied',
                analytics_storage: consentUpdate.analyticsStorage || 'denied',
            })
        }
        let consentStatus = localStorage.getItem("consent_status");
        if (consentStatus !== null) {
            consentStatus = JSON.parse(consentStatus);
            dataLayer.push(consentStatus)
        }
        window.addEventListener("load", () => {
            window.setTimeout(createUcScriptTag, 10000)
        });

        function createUcScriptTag() {
            window.addEventListener("consent_status", function(e) {
                localStorage.setItem("consent_status", JSON.stringify(e.detail));
                localStorage.setItem("consent_status_update", Date.now())
            });
            let firstScript = document.getElementsByTagName('script')[0],
                ucScriptTag = document.createElement('script');
            ucScriptTag.id = 'usercentrics-cmp';
            ucScriptTag.async = !0;
            ucScriptTag.src = 'https://web.cmp.usercentrics.eu/ui/loader.js';
            ucScriptTag.setAttribute('data-ruleset-id', '0PGfewRSuVh14b');
            firstScript.parentNode.insertBefore(ucScriptTag, firstScript)
        }
    </script>
    <script type="text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = !0;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-MR5QNLN')
    </script> Start VWO Async SmartCode -->
<!-- <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
    <script type='text/javascript' id='vwoCode'>
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
<!-- End VWO Async SmartCode -->
<!-- <meta name="twitter:site" content="@SmartIDPgroup">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="ECM | Enterprise Content Management" />
    <meta property="og:description" content="SmartIDP develops, markets and implements enterprise content management software (ECM). Our SmartIDP Intelligent Content Automation makes DMS and business processes easier, more efficient and more effective." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.SmartIDPgroup.com/en/" />
    <meta property="og:image" content="https://cdn.SmartIDPgroup.com/files/content/rebranding/images/logos/RS453_SmartIDP-Doxi-Logo.png" />
    <link rel="alternate" hreflang="x-default" href="https://www.SmartIDPgroup.com/en/" />
    <link rel="alternate" hreflang="en" href="https://www.SmartIDPgroup.com/en/" />
    <link rel="alternate" hreflang="de" href="https://www.SmartIDPgroup.com/de/" />
    <link rel="alternate" hreflang="fr" href="https://www.SmartIDPgroup.com/fr/" />
    <link rel="alternate" hreflang="pl" href="https://www.SmartIDPgroup.com/pl/" />
    <link rel="alternate" hreflang="es" href="https://www.SmartIDPgroup.com/es/" />
    <link rel="alternate" hreflang="pt" href="https://www.SmartIDPgroup.com/pt/" />
    <link rel="alternate" hreflang="tr" href="https://www.SmartIDPgroup.com/tr/" />
    <script>
        window.addEventListener("consent_status", function(e) {
            window.dataLayer = window.dataLayer || [];
            dataLayer.push(e.detail)
        })
    </script>
    <link rel="Shortcut Icon" type="image/ico" href="https://www.SmartIDPgroup.com/files/design/images/main/meta/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="https://www.SmartIDPgroup.com/files/design/images/main/meta/apple-touch-icon.png" />
</head> -->

<body id="top" class="oneo-no-sidebar oneo-fullwidth">
    <div class="page">
        <?php include_once 'head.php'; ?>

        <header class="page-header">
            <div class="header-navigation is-fixed is-enabled" dir="ltr">

                <div class="centered-wrapper ce_rsce_oneo_centered_wrapper_start container-fullhd " style=" ">
                    <div class="centered-wrapper-inner ">
                        <div class="main-navigation-wrapper">
                            <a href="javascript:void(0)" class="main-navigation-mobile-open">navigation</a>
                            <div class="ce_rsce_oneo_logo logo doxi mr-lg-3">
                                <a href="<?= BASE_PATH ?>index">
                                    <img src="<?php echo BASE_PATH; ?>assets/images/logo/logo3.png" width="176" height="150" alt="">
                                </a>
                            </div>
                            <nav class="mod_rocksolid_mega_menu_custom main-navigation block">
                                <a href="javascript:void(0)" class="invisible">Skip navigation</a>
                                <ul class="level_1">
                                    <li class="sibling first -mega">
                                        <a href="javascript:void(0)" title="SmartIDP Content Services Platform for ECM, BPM &amp; Collaboration" class="sibling first -mega" aria-haspopup="true" itemprop="url"><span itemprop="name">Products & Services</span>
                                        </a>
                                        <div class="mega-dropdown level_2 ">
                                            <div class="mega-dropdown-inner">
                                                <section class="mega-dropdown-column  rs-column -large-col-4-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row" style="width: 30%;">
                                                    <p class="mega-dropdown-heading">
                                                        Products </p>
                                                    <ul>
                                                        <li class="menu-doxi">
                                                            <a href="<?php echo BASE_PATH; ?>intelligent_content_automation" class="menu-doxi">
                                                                SmartIDP Intelligent Content Automation </a>
                                                        </li>
                                                        <li class="menu-headline">
                                                            <a href="javascript:void(0)" class="menu-headline">
                                                                Hot Topics </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>artificial_intelligence" class="">
                                                                Artificial intelligence in SmartIDP </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>process_automation" class="">
                                                                Process automation </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>document_management" class="">
                                                                Document management </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>fast_starters" class="">
                                                                Fast Starters </a>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section class="mega-dropdown-column  rs-column -large-col-4-1 -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last" style="width: 20%;">
                                                    <p class="mega-dropdown-heading">
                                                        Integrations </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>microsoft" class="">
                                                                Microsoft </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>sap" class="">
                                                                SAP </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>sap_sucess_factor" class="">
                                                                SAP SuccessFactors </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>salesforce" class="">
                                                                Salesforce </a>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section class="mega-dropdown-column  rs-column -large-col-4-1 -large-first-row -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last">
                                                    <p class="mega-dropdown-heading">
                                                        Services </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>consulting_implementation" class="">
                                                                Consulting & implementation </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>managed_services" class="">
                                                                Managed services </a>
                                                        </li>

                                                    </ul>
                                                </section>
                                                <section
                                                    class="mega-dropdown-column  rs-column -large-col-4-1 -large-last -large-first-row -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last" style="width: 20%;">
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
                                        <a href="javascript:void(0)" title="Solutions &amp; Use Cases" class="menu-overview-page sibling -mega" aria-haspopup="true" itemprop="url"><span itemprop="name">Solutions</span>
                                        </a>
                                        <div class="mega-dropdown level_2 max-width-1200">
                                            <div class="mega-dropdown-inner">
                                                <section class="mega-dropdown-column  rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                                    <p class="mega-dropdown-heading">
                                                        Use Cases </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="javascript:void(0)" class="">
                                                                Document management </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>invoice_automation" class="">
                                                                Invoice automation </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>contract_management" class="">
                                                                Contract management </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>archiving" class="">
                                                                Archiving </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>inbound_mail_automation"
                                                                class="">
                                                                Inbound mail automation </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>case_management" class="">
                                                                Case management </a>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section class="mega-dropdown-column  rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last">
                                                    <p class="mega-dropdown-heading">
                                                        Industries </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="javascript:void(0)" class="">
                                                                Manufacturing </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>banking_financial" class="">
                                                                Banking & financial services </a>
                                                        </li>

                                                    </ul>
                                                </section>
                                                <section class="mega-dropdown-column  rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                                    <p class="mega-dropdown-heading">
                                                        Departments </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="javascript:void(0)" class="">
                                                                Purchasing & procurement </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="javascript:void(0)" class="">
                                                                Human resources </a>
                                                        </li>

                                                    </ul>
                                                </section>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sibling -mega">
                                        <a href="javascript:void(0)" title="Customers &amp; Partner" class="sibling -mega" aria-haspopup="true" itemprop="url"><span itemprop="name">Customers & Partners</span>
                                        </a>
                                        <div class="mega-dropdown level_2 max-width-1200">
                                            <div class="mega-dropdown-inner">
                                                <section class="mega-dropdown-column  rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                                    <p class="mega-dropdown-heading">
                                                        Customers </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>user_group" class="">
                                                                SmartIDP Group </a>
                                                        </li>
                                                        <!-- <li class="">
                                                            <a href="https://ser.ideas.aha.io/" class="" target="_blank">
                                                                Idea portal </a>
                                                        </li> -->

                                                    </ul>
                                                </section>
                                                <section class="mega-dropdown-column  rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                                    <p class="mega-dropdown-heading">
                                                        Partner </p>
                                                    <ul>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>becomming_partner" class="">
                                                                Becoming a partner </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>finding_partner" class="">
                                                                Finding a partner </a>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sibling -mega">
                                        <a href="javascript:void(0)" title="About the SER Group" class="sibling -mega" aria-haspopup="true" itemprop="url"><span itemprop="name">About Us</span>
                                        </a>
                                        <div class="mega-dropdown level_2 max-width-1200">
                                            <div class="mega-dropdown-inner">
                                                <!-- <section class="mega-dropdown-column mega-menu-image-only rs-column -large-col-4-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row">
                                                </section> -->
                                                <section class="mega-dropdown-column  rs-column -large-col-4-1 -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last">
                                                    <ul>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>social_responsibility" class="">
                                                                Social responsibility </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>locations" class="">
                                                                Locations </a>
                                                        </li>
                                                        <!-- <li class="">
                                                            <a href="<?php echo BASE_PATH; ?>locations" class="">
                                                                Locations </a>
                                                        </li> -->
                                                    </ul>
                                                </section>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sibling -mega">
                                        <a href="<?php echo BASE_PATH; ?>contact">Contact Us</a>
                                    </li>
                                </ul>
                                <span id="skipNavigation820" class="invisible"></span>
                            </nav>
                            <div class="ce_rsce_oneo_nav_search main-navigation-search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navigation-mobile">
                <nav class="mod_navigation block">
                    <a href="javascript:void(0)" class="invisible">Skip navigation</a>
                    <ul class="level_1">
                        <!-- <li class="submenu menu-overview-page sibling is-collapsed">
                            <a href="javascript:void(0)" title="Solutions &amp; Use Cases" class="submenu menu-overview-page sibling" aria-haspopup="true">Solutions</a>
                            <button class="main-navigation-mobile-expand">expand</button>
                            <ul class="level_2" style="display: none;">
                                <li><a href="javascript:void(0)" title="SmartIDP DMS — Your document management system">Document management</a></li>
                                <li><a href="javascript:void(0)" title="Automated Invoice Processing Software">Invoice automation</a></li>
                                <li><a href="javascript:void(0)" title="Contract management software |electronic contract files with SmartIDP">Contract management</a></li>
                                <li class="menu-overview-page"><a href="javascript:void(0)" title="Integration with SmartIDP" class="menu-overview-page">Business integrators</a></li>
                            </ul>
                        </li> -->
                        <li class="submenu sibling is-collapsed">
                            <a href="javascript:void(0)" title="SmartIDP Content Services Platform for ECM, BPM &amp; Collaboration" class="submenu sibling" aria-haspopup="true">Products & Services</a>
                            <button class="main-navigation-mobile-expand">expand</button>
                            <ul class="level_2" style="display: none;">
                                <li class="menu-doxi"><a href="<?php echo BASE_PATH; ?>intelligent_content_automation" title="SmartIDP Intelligent Content Automation" class="menu-doxi">SmartIDP Intelligent Content Automation</a></li>
                                <li><a href="<?php echo BASE_PATH; ?>artificial_intelligence" title="Artificial Intelligence">Artificial intelligence in SmartIDP</a></li>
                                <li><a href="<?php echo BASE_PATH; ?>process_automation" title="SmartIDP Fast Starters - Your quick &amp; easy content apps">Process Automation</a></li>
                                <li><a href="<?php echo BASE_PATH; ?>sap_sucess_factor" title="SAP Solution">SAP</a></li>
                            </ul>
                        </li>
                        <li class="submenu sibling is-collapsed">
                            <a href="javascript:void(0)" title="Services – We are here for you!" class="submenu sibling" aria-haspopup="true">Customers & Partners</a>
                            <button class="main-navigation-mobile-expand">expand</button>
                            <ul class="level_2" style="display: none;">
                                <li><a href="<?php echo BASE_PATH; ?>user_group" title="Professional Service SmartIDP">SmartIDP Group</a></li>
                                <li><a href="<?php echo BASE_PATH; ?>becomming_partner" title="Becoming a Partner">Becoming a Partner</a></li>
                            </ul>
                        </li>
                        <li class="submenu sibling is-collapsed">
                            <a href="javascript:void(0)" title="About the SER Group" class="submenu sibling" aria-haspopup="true">About Us</a>
                            <button class="main-navigation-mobile-expand">expand</button>
                            <ul class="level_2" style="display: none;">
                                <li><a href="javascript:void(0)" title="The SmartIDP Group Management Team">Management</a></li>
                                <li><a href="javascript:void(0)" title="Social responsibility">Social responsibility</a></li>
                            </ul>
                        </li>
                        <li class="sibling"><a href="<?php echo BASE_PATH; ?>contact" title="Contact" class="sibling">Contact Us</a></li>
                    </ul>
                    <span id="skipNavigation439" class="invisible"></span>
                </nav>


            </div>

            <script>
                // Get references to the button and the div
                const navToggleButton = document.querySelector('.main-navigation-mobile-open');
                const navMenu = document.querySelector('.main-navigation-mobile');

                // Add click event listener to the navigation button
                navToggleButton.addEventListener('click', function(event) {
                    // Prevent the default link behavior
                    event.preventDefault();

                    // Toggle the 'is-active' class on the navMenu
                    navMenu.classList.toggle('is-active');
                });

                // Get all buttons with the class "main-navigation-mobile-expand" within submenu <li> elements
                const expandButtons = document.querySelectorAll('.submenu .main-navigation-mobile-expand');

                // Loop through each button and add event listeners
                expandButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        // Find the parent <li> element (which contains the submenu)
                        const parentLi = button.closest('li');

                        // Toggle the collapsed/expanded class on the parent <li>
                        parentLi.classList.toggle('is-collapsed');
                        parentLi.classList.toggle('is-expanded');

                        // Optionally, also toggle the visibility of the submenu
                        const submenu = parentLi.querySelector('.level_2');
                        if (submenu) {
                            submenu.style.display = submenu.style.display === 'none' ? '' : 'none';
                        }
                    });
                });
            </script>
        </header>