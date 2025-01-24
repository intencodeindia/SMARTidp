<?php require 'config.php'; ?>
<?php require 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SmartIDP - Automate Document Processing and Cut Costs at Scale</title>
    <!-- <base href="https://www.smartidp.ai/"> -->
    <meta name="robots" content="index,follow">
    <meta name="description" content="SmartIDP automates and centralizes enterprise document management with intelligent content extraction and classification. Streamline business processes, reduce costs, and ensure compliance at scale with our powerful document automation solutions.">
    <meta name="generator" content="Contao Open Source CMS">
    <!-- <link rel="canonical" href="https://www.smartidp.ai/en/"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/third.css">

    <!-- <link rel="stylesheet" href="https://cdn.smartidp.ai/assets/css/hamburger-menu.min.css,customer-logo-list.min.css,quote.min.css,...-d89e1742.css"> -->
    <script>
        document.ready = f => {
            "loading" !== document.readyState ? f() : document.addEventListener("DOMContentLoaded", f)
        }
    </script>
    <!-- <script type="text/javascript">
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
    </script> -->
    <!-- <script type="text/javascript">
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
            j.src = 'https://www.googletagmanager.ai/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-MR5QNLN')
    </script> -->
    <!-- Start VWO Async SmartCode -->
    <!-- <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.ai" /> -->
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
                        if (e)(new Image).src = 'https://dev.visualwebsiteoptimizer.ai/ee.gif?a=' + account_id + e
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
                    var o = 'https://dev.visualwebsiteoptimizer.ai/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&vn=' + version;
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
    <meta name="twitter:site" content="@smartidp">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="SmartIDP | Intelligent Document Automation and Management" />
    <meta property="og:description" content="SmartIDP automates and centralizes enterprise document management with intelligent content extraction, classification, and compliance. Streamline business processes, reduce costs, and improve efficiency at scale with our powerful document automation solutions." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.smartidp.ai" />
    <!-- <meta property="og:image" content="https://cdn.smartidp.ai/files/content/rebranding/images/logos/RS453_SER-Doxi-Logo.png" /> -->
    <link rel="alternate" hreflang="x-default" href="https://www.smartidp.ai" />
    <link rel="alternate" hreflang="en" href="https://www.smartidp.ai" />
    <!-- <link rel="stylesheet" href="<?= BASE_PATH ?>/assets/css/hamberger.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script>
        window.addEventListener("consent_status", function(e) {
            window.dataLayer = window.dataLayer || [];
            dataLayer.push(e.detail)
        })
    </script> -->
    <link rel="Shortcut Icon" type="image/ico" href="<?= BASE_PATH ?>/assets/images/favicon/favicon_io/favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    

    <!-- <link rel="apple-touch-icon-precomposed" href="https://www.smartidp.com/files/design/images/main/meta/apple-touch-icon.png" /> -->
</head>