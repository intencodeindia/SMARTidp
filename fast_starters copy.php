
<?php include_once("includes/header.php"); ?>
<!-- <link rel="stylesheet" href="https://cdn.sergroup.com/assets/css/hamburger-menu.min.css,language-switcher-overlay.min.css,colorbo...-9391b8b0.css" /> -->
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/second.css">

<script src="https://cdn.sergroup.com/assets/js/jquery.min.js-c31f118d.js"></script>
<script>
    document.ready = (f) => {
        "loading" !== document.readyState ?
            f() :
            document.addEventListener("DOMContentLoaded", f);
    };
</script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    window.gtag =
        window.gtag ||
        function() {
            dataLayer.push(arguments);
        };
    gtag("consent", "default", {
        functionality_storage: "granted",
        personalization_storage: "granted",
        ad_user_data: "denied",
        ad_personalization: "denied",
        ad_storage: "denied",
        analytics_storage: "denied",
        wait_for_update: 2000,
    });
    let consentUpdate = localStorage.getItem("uc_gcm");
    if (consentUpdate !== null) {
        consentUpdate = JSON.parse(consentUpdate);
        gtag("consent", "update", {
            ad_user_data: consentUpdate.adUserData || "denied",
            ad_personalization: consentUpdate.adPersonalization || "denied",
            ad_storage: consentUpdate.adStorage || "denied",
            analytics_storage: consentUpdate.analyticsStorage || "denied",
        });
    }
    let consentStatus = localStorage.getItem("consent_status");
    if (consentStatus !== null) {
        consentStatus = JSON.parse(consentStatus);
        dataLayer.push(consentStatus);
    }
    window.addEventListener("load", () => {
        window.setTimeout(createUcScriptTag, 10000);
    });

    function createUcScriptTag() {
        window.addEventListener("consent_status", function(e) {
            localStorage.setItem("consent_status", JSON.stringify(e.detail));
            localStorage.setItem("consent_status_update", Date.now());
        });
        let firstScript = document.getElementsByTagName("script")[0],
            ucScriptTag = document.createElement("script");
        ucScriptTag.id = "usercentrics-cmp";
        ucScriptTag.async = !0;
        ucScriptTag.src = "https://web.cmp.usercentrics.eu/ui/loader.js";
        ucScriptTag.setAttribute("data-ruleset-id", "0PGfewRSuVh14b");
        firstScript.parentNode.insertBefore(ucScriptTag, firstScript);
    }
</script>
<script type="text/javascript">
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js",
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = !0;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-MR5QNLN");
</script>
<!-- Start VWO Async SmartCode -->
<link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
<script type="text/javascript" id="vwoCode">
    window._vwo_code ||
        (function() {
            var account_id = 880714,
                version = 2.1,
                settings_tolerance = 2000,
                hide_element = "body",
                hide_element_style =
                "opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important",
                f = !1,
                w = window,
                d = document,
                v = d.querySelector("#vwoCode"),
                cK = "_vwo_" + account_id + "_settings",
                cc = {};
            try {
                var c = JSON.parse(
                    localStorage.getItem("_vwo_" + account_id + "_config")
                );
                cc = c && typeof c === "object" ? c : {};
            } catch (e) {}
            var stT = cc.stT === "session" ? w.sessionStorage : w.localStorage;
            code = {
                use_existing_jquery: function() {
                    return typeof use_existing_jquery !== "undefined" ?
                        use_existing_jquery :
                        undefined;
                },
                library_tolerance: function() {
                    return typeof library_tolerance !== "undefined" ?
                        library_tolerance :
                        undefined;
                },
                settings_tolerance: function() {
                    return cc.sT || settings_tolerance;
                },
                hide_element_style: function() {
                    return "{" + (cc.hES || hide_element_style) + "}";
                },
                hide_element: function() {
                    if (performance.getEntriesByName("first-contentful-paint")[0]) {
                        return "";
                    }
                    return typeof cc.hE === "string" ? cc.hE : hide_element;
                },
                getVersion: function() {
                    return version;
                },
                finish: function(e) {
                    if (!f) {
                        f = !0;
                        var t = d.getElementById("_vis_opt_path_hides");
                        if (t) t.parentNode.removeChild(t);
                        if (e)
                            new Image().src =
                            "https://dev.visualwebsiteoptimizer.com/ee.gif?a=" +
                            account_id +
                            e;
                    }
                },
                finished: function() {
                    return f;
                },
                addScript: function(e) {
                    var t = d.createElement("script");
                    t.type = "text/javascript";
                    if (e.src) {
                        t.src = e.src;
                    } else {
                        t.text = e.text;
                    }
                    d.getElementsByTagName("head")[0].appendChild(t);
                },
                load: function(e, t) {
                    var i = this.getSettings(),
                        n = d.createElement("script"),
                        r = this;
                    t = t || {};
                    if (i) {
                        n.textContent = i;
                        d.getElementsByTagName("head")[0].appendChild(n);
                        if (!w.VWO || VWO.caE) {
                            stT.removeItem(cK);
                            r.load(e);
                        }
                    } else {
                        var o = new XMLHttpRequest();
                        o.open("GET", e, !0);
                        o.withCredentials = !t.dSC;
                        o.responseType = t.responseType || "text";
                        o.onload = function() {
                            if (t.onloadCb) {
                                return t.onloadCb(o, e);
                            }
                            if (o.status === 200) {
                                _vwo_code.addScript({
                                    text: o.responseText,
                                });
                            } else {
                                _vwo_code.finish("&e=loading_failure:" + e);
                            }
                        };
                        o.onerror = function() {
                            if (t.onerrorCb) {
                                return t.onerrorCb(e);
                            }
                            _vwo_code.finish("&e=loading_failure:" + e);
                        };
                        o.send();
                    }
                },
                getSettings: function() {
                    try {
                        var e = stT.getItem(cK);
                        if (!e) {
                            return;
                        }
                        e = JSON.parse(e);
                        if (Date.now() > e.e) {
                            stT.removeItem(cK);
                            return;
                        }
                        return e.s;
                    } catch (e) {
                        return;
                    }
                },
                init: function() {
                    if (d.URL.indexOf("__vwo_disable__") > -1) return;
                    var e = this.settings_tolerance();
                    w._vwo_settings_timer = setTimeout(function() {
                        _vwo_code.finish();
                        stT.removeItem(cK);
                    }, e);
                    var t;
                    if (this.hide_element() !== "body") {
                        t = d.createElement("style");
                        var i = this.hide_element(),
                            n = i ? i + this.hide_element_style() : "",
                            r = d.getElementsByTagName("head")[0];
                        t.setAttribute("id", "_vis_opt_path_hides");
                        v && t.setAttribute("nonce", v.nonce);
                        t.setAttribute("type", "text/css");
                        if (t.styleSheet) t.styleSheet.cssText = n;
                        else t.appendChild(d.createTextNode(n));
                        r.appendChild(t);
                    } else {
                        t = d.getElementsByTagName("head")[0];
                        var n = d.createElement("div");
                        n.style.cssText =
                            "z-index: 2147483647 !important;position: fixed !important;left: 0 !important;top: 0 !important;width: 100% !important;height: 100% !important;background: white !important;";
                        n.setAttribute("id", "_vis_opt_path_hides");
                        n.classList.add("_vis_hide_layer");
                        t.parentNode.insertBefore(n, t.nextSibling);
                    }
                    var o =
                        "https://dev.visualwebsiteoptimizer.com/j.php?a=" +
                        account_id +
                        "&u=" +
                        encodeURIComponent(d.URL) +
                        "&vn=" +
                        version;
                    if (w.location.search.indexOf("_vwo_xhr") !== -1) {
                        this.addScript({
                            src: o,
                        });
                    } else {
                        this.load(o + "&x=true");
                    }
                },
            };
            w._vwo_code = code;
            code.init();
        })();
</script>
<div class="content-wrapper">
        <main role="main" class="main-content">
          <div class="mod_article max-width-viewport block" id="article-40131">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div
                  class="centered-wrapper-background"
                  style="
                    background-image: url('https://cdn.sergroup.com/files/content/images/bannerbilder/background-image-ser-doxis.png');
                  "
                  data-image-url="https://cdn.sergroup.com/files/content/images/bannerbilder/background-image-ser-doxis.png"
                ></div>
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h2 class="subheadline -small" style="color: #ffffff">
                          Doxis Fast Starters
                        </h2>
                        <h1
                          class="headline -extra-large"
                          style="color: #ffffff"
                        >
                          Digital transformation in weeks, not months
                        </h1>
                      </div>
                      <div class="text-white content-text">
                        <div class="rte">
                          <p>
                            Doxis Fast Starters empower business users to
                            quickly and easily customize and roll out content
                            apps honed to their&nbsp;unique
                            needs.&nbsp;This&nbsp;saves on costs, reduces IT
                            bottlenecks and accelerates digital transformation.
                          </p>
                        </div>
                      </div>
                      <div class="button-box ce_rsce_oneo_button -left">
                        <a
                          class="button ce_rsce_oneo_button -left"
                          href="/en/business-platform/doxis-fast-starters.html&#35;demo"
                        >
                          Request a demo
                        </a>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    >
                      <div
                        class="centered-wrapper ce_rsce_oneo_centered_wrapper_start max-width-500"
                        style="background-size: auto auto"
                      >
                        <div class="centered-wrapper-inner">
                          <div class="centered content-image">
                            <figure>
                              <a
                                href="https://cdn.sergroup.com/files/content/images/produkte_loesungen/Fast%20Starters/high_res_fast_starter_launchpad.png"
                                rel="noreferrer noopener"
                                data-lightbox="lb228568"
                                title="The Fast Starter library"
                              >
                                <img
                                  src="https://cdn.sergroup.com/assets/images/a/high_res_fast_starter_launchpad-5fp8t2dtfejn558.png"
                                  alt="Select a Fast Starter from an extensive library"
                                  title="The Fast Starter library"
                                  width="400"
                                  height="284"
                                />
                              </a>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-40132">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div
                    style="margin-bottom: 50px"
                    class="headline-box ser-headline-box ce_rsce_ser_headline_box"
                  >
                    <h2 class="headline -extra-large">
                      Fast-start your ECM projects
                    </h2>
                  </div>
                  <section
                    class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes icons-rounded text-color-inherit align-text-left"
                  >
                    <div
                      class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -icon-color"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style="background-color: #241ac7"
                        data-icon="&#xe965;"
                      ></span>
                      <p class="-medium">Empower citizen developers</p>
                      <div class="icon-boxes-item-text">
                        <ul>
                          <li style="text-align: left">
                            Fast and easy no-code customization
                          </li>
                          <li style="text-align: left">
                            No technical skills required
                          </li>
                          <li style="text-align: left">
                            Honed to&nbsp;stakeholder needs&nbsp;
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last -icon-color"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style="background-color: #241ac7"
                        data-icon="&#xe963;"
                      ></span>
                      <p class="-medium">Save on precious time and costs</p>
                      <div class="icon-boxes-item-text">
                        <ul>
                          <li style="text-align: left">Faster time-to-value</li>
                          <li style="text-align: left">
                            Lower operational costs
                          </li>
                          <li style="text-align: left">
                            Reduced IT bottlenecks
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -icon-color"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style="background-color: #241ac7"
                        data-icon="&#xe936;"
                      ></span>
                      <p class="-medium">Simplify work with a modern UX</p>
                      <div class="icon-boxes-item-text">
                        <ul>
                          <li style="text-align: left">Intuitive interface</li>
                          <li style="text-align: left">
                            Clean, user-friendly design
                          </li>
                          <li style="text-align: left">
                            Helpful features speed up daily work
                          </li>
                        </ul>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-40135">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div
                  class="centered-wrapper-background"
                  style="
                    background-image: url('https://cdn.sergroup.com/files/content/images/bannerbilder/background-image-ser-doxis.png');
                  "
                  data-image-url="https://cdn.sergroup.com/files/content/images/bannerbilder/background-image-ser-doxis.png"
                ></div>
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-5-3 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div class="content-vimeo">
                        <figure class="aspect aspect--16:9">
                          <button data-splash-screen>
                            <img
                              src="https://cdn.sergroup.com/files/content/images/video-thumbnails/fast-starteter-generell-video.png"
                              alt
                              width="1000"
                              height="562"
                            />
                            <span
                              >Please click to load the video. Your IP address
                              will be transmitted to Vimeo.</span
                            >
                            <template>
                              <iframe
                                width
                                height
                                src="https://player.vimeo.com/video/787527514"
                                allowfullscreen
                              ></iframe>
                            </template>
                          </button>
                        </figure>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-5-2 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h2
                          class="headline -extra-large"
                          style="color: #ffffff"
                        >
                          Just select and customize any
                          <span class="accent-light">Fast Starter</span>
                          according to your needs
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-40137">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div
                    style="margin-bottom: 75px"
                    class="headline-box ser-headline-box ce_rsce_ser_headline_box"
                  >
                    <h2 class="headline -extra-large">
                      Launch your next ECM project in 3 steps
                    </h2>
                  </div>
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h3 class="headline -large">
                          Step 1: Choose a Fast Starter
                        </h3>
                      </div>
                      <div class="content-text">
                        <div class="rte">
                          <p>
                            The growing Fast Starter library provides a wide
                            range of&nbsp;pre-configured and easily customizable
                            workspaces for sales, purchasing, service, legal,
                            etc. and for specific&nbsp;sectors like real estate
                            and insurance. Have something&nbsp;different in
                            mind? Simply adapt one of our templates with a few
                            clicks.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    >
                      <div class="centered content-image">
                        <figure>
                          <a
                            href="https://cdn.sergroup.com/files/content/images/produkte_loesungen/Fast%20Starters/high_res_dashboard_with_preview_pane.png"
                            rel="noreferrer noopener"
                            data-lightbox="lb228626"
                            title="The Fast Starter launchpad"
                          >
                            <img
                              src="https://cdn.sergroup.com/assets/images/7/high_res_dashboard_with_preview_pane-184vx6bwd00j6p7.png"
                              alt="Select a Fast Starter from an extensive library"
                              title="The Fast Starter launchpad"
                              width="400"
                              height="284"
                            />
                          </a>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-40139">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start fade-out-background -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div class="centered content-image">
                        <figure>
                          <a
                            href="https://cdn.sergroup.com/files/content/images/produkte_loesungen/Fast%20Starters/MicrosoftTeams-image_11.png"
                            rel="noreferrer noopener"
                            data-lightbox="lb228648"
                            title="Customizing a Fast Starter"
                          >
                            <img
                              src="https://cdn.sergroup.com/assets/images/s/MicrosoftTeams-image_11-9pz3em6h00dysp8.png"
                              alt="Customizing a Fast Starter"
                              title="Customizing a Fast Starter"
                              width="400"
                              height="284"
                            />
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h3 class="headline -large">
                          Step 2: Customize your Fast Starter
                        </h3>
                      </div>
                      <div class="content-text">
                        <div class="rte">
                          <p>
                            Doxis Fast Starters have a highly simplified user
                            interface that enables you to customize the
                            workspace and – thanks to a common metadata
                            layer&nbsp;– plug your Fast Starter&nbsp;into other
                            Doxis solutions for a seamless flow of information.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-40138">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h3 class="headline -large">
                          Step 3: Get your team on board!
                        </h3>
                      </div>
                      <div class="content-text">
                        <div class="rte">
                          <p>
                            Creating user groups and managing users, their
                            access rights and roles is a cinch with Doxis Fast
                            Starters. An intuitive drag-and-drop interface,
                            search function and a clear overview ensure that you
                            can get your&nbsp;team up and running quickly.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    >
                      <div class="centered content-image">
                        <figure>
                          <a
                            href="https://cdn.sergroup.com/files/content/images/produkte_loesungen/Fast%20Starters/MicrosoftTeams-image_7.png"
                            rel="noreferrer noopener"
                            data-lightbox="lb228641"
                            title="User management in Fast Starters"
                          >
                            <img
                              src="https://cdn.sergroup.com/assets/images/4/MicrosoftTeams-image_7-pdw1mpfekx71wc9.png"
                              alt="Select user groups and set up access rights"
                              title="User management in Fast Starters"
                              width="400"
                              height="284"
                            />
                          </a>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mod_article max-width-viewport block"
            id="article-40140"
            style="margin-top: 75px"
          >
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start container-fullhd -vertical-centered"
                style=""
              >
                <div
                  class="centered-wrapper-background"
                  style="
                    background-image: url('https://cdn.sergroup.com/files/content/rebranding/images/backgrounds/blue-green-medium.png');
                  "
                  data-image-url="https://cdn.sergroup.com/files/content/rebranding/images/backgrounds/blue-green-medium.png"
                ></div>
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div
                        class="centered-wrapper ce_rsce_oneo_centered_wrapper_start max-width-500"
                        style=""
                      >
                        <div class="centered-wrapper-inner">
                          <div
                            class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                          >
                            <h2
                              class="headline -extra-large"
                              style="color: #ffffff"
                            >
                              Fast Starters integrate seamlessly with your
                              business ecosystem
                            </h2>
                          </div>
                          <div class="text-white content-text">
                            <div class="rte">
                              <p style="font-size: 1.2em">
                                <strong
                                  >Doxis&nbsp;Business Studio connects
                                  information between the Fast Starters and
                                  best-of-breed applications&nbsp;like
                                  Microsoft, Salesforce, Oracle and
                                  more.</strong
                                >
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="demo">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -no-background-mobile"
                style="margin-top: -50px; background-color: #f3f5fd"
              >
                <div class="centered-wrapper-inner">
                  <div
                    class="headline-box ser-headline-box ce_rsce_ser_headline_box"
                  >
                    <h2 class="headline -extra-large">
                      Ready to fast-start your digitalization?
                    </h2>
                  </div>
                  <div class="content-text">
                    <div class="rte">
                      <p style="text-align: center">
                        Schedule a live demo of Doxis Fast Starters today. We
                        look forward to hearing from you!
                      </p>
                    </div>
                  </div>
                  <div
                    class="centered-wrapper ce_rsce_oneo_centered_wrapper_start max-width-500"
                    style=""
                  >
                    <div class="centered-wrapper-inner">
                      <!-- indexer::stop -->
                      <div class="ce_form block">
                        <form
                          method="post"
                          enctype="application/x-www-form-urlencoded"
                          class="invert demo_form prevent_multiple_submits"
                        >
                          <div class="formbody">
                            <input
                              type="hidden"
                              name="FORM_SUBMIT"
                              value="auto_form_87"
                            />
                            <input
                              type="hidden"
                              name="REQUEST_TOKEN"
                              value=""
                            />
                            <input type="hidden" name="clickid" value="" />
                            <input type="hidden" name="utm_source" value="" />
                            <input type="hidden" name="utm_medium" value="" />
                            <input type="hidden" name="utm_campaign" value="" />
                            <input type="hidden" name="utm_content" value="" />
                            <input type="hidden" name="utm_term" value="" />
                            <input type="hidden" name="referer" value="" />
                            <input type="hidden" name="itm_source" value="" />
                            <input type="hidden" name="itm_medium" value="" />
                            <input type="hidden" name="itm_campaign" value="" />
                            <input type="hidden" name="itm_content" value="" />
                            <div
                              class="widget widget-text half_sized mandatory"
                            >
                              <input
                                type="text"
                                name="firstname"
                                id="ctrl_1176"
                                class="text half_sized mandatory"
                                value=""
                                required
                                placeholder="First name*"
                              />
                            </div>
                            <div
                              class="widget widget-text half_sized mandatory"
                            >
                              <input
                                type="text"
                                name="lastname"
                                id="ctrl_1177"
                                class="text half_sized mandatory"
                                value=""
                                required
                                placeholder="Last name*"
                              />
                            </div>
                            <div class="widget widget-text mandatory">
                              <input
                                type="email"
                                name="email"
                                id="ctrl_1180"
                                class="text mandatory"
                                value=""
                                required
                                placeholder="Email address*"
                              />
                            </div>
                            <div class="widget widget-text mandatory">
                              <input
                                type="text"
                                name="phone"
                                id="ctrl_1181"
                                class="text mandatory"
                                value=""
                                required
                                placeholder="Telephone*"
                              />
                            </div>
                            <div class="widget widget-text mandatory">
                              <input
                                type="text"
                                name="company"
                                id="ctrl_1179"
                                class="text mandatory"
                                value=""
                                required
                                placeholder="Company/Organization*"
                              />
                            </div>
                            <div class="widget widget-select select mandatory">
                              <select
                                name="company_size"
                                id="ctrl_2833"
                                class="select mandatory"
                                required
                              >
                                <option value="">-- Company size* --</option>
                                <option value="100-500">
                                  100-500 employees
                                </option>
                                <option value="501-1000">
                                  501-1000 employees
                                </option>
                                <option value="1001-5000">
                                  1001-5000 employees
                                </option>
                                <option value="5001-10000">
                                  5001-10000 employees
                                </option>
                                <option value=">10000">>10000 employees</option>
                              </select>
                            </div>
                            <div class="widget widget-select select mandatory">
                              <select
                                name="country"
                                id="ctrl_5386"
                                class="select mandatory"
                                required
                              >
                                <option value="" selected>
                                  -- Country* --
                                </option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="">---</option>
                                <option value="KW">Kuwait</option>
                                <option value="QA">Qatar</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="">---</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AO">Angola</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BM">Bermuda</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">
                                  Bosnia and Herzegovina
                                </option>
                                <option value="BR">Brazil</option>
                                <option value="BG">Bulgaria</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CO">Colombia</option>
                                <option value="CG">Congo</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote dIvoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GM">Gambia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GR">Greece</option>
                                <option value="GT">Guatemala</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="IR">Iran</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MY">Malaysia</option>
                                <option value="ML">Mali</option>
                                <option value="MU">Mauritius</option>
                                <option value="MX">Mexico</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MA">Morocco</option>
                                <option value="NA">Namibia</option>
                                <option value="NL">Netherlands</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NG">Nigeria</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PA">Panama</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="ZA">South Africa</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="TH">Thailand</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                              </select>
                            </div>
                            <div class="widget widget-text mandatory">
                              <input
                                type="text"
                                name="how_did_you_hear_about_us"
                                id="ctrl_5354"
                                class="text mandatory"
                                value=""
                                required
                                placeholder="How did you hear about us?*"
                              />
                            </div>
                            <div class="widget widget-textarea">
                              <textarea
                                name="message"
                                id="ctrl_1183"
                                class="textarea"
                                rows="7"
                                cols="40"
                                placeholder="Your message"
                              ></textarea>
                            </div>
                            <div class="widget widget-checkbox mandatory">
                              <fieldset
                                id="ctrl_1745"
                                class="checkbox_container mandatory"
                              >
                                <input
                                  type="hidden"
                                  name="data_protection_policy"
                                  value=""
                                />
                                <span
                                  ><input
                                    type="checkbox"
                                    name="data_protection_policy"
                                    id="opt_1745_0"
                                    class="checkbox"
                                    value="true"
                                    required
                                  />
                                  <label id="lbl_1745_0" for="opt_1745_0"
                                    ><strong>Yes</strong>, I agree with the
                                    <a href="/en/data-protection-policy.html"
                                      >data protection policy</a
                                    >. *</label
                                  ></span
                                >
                              </fieldset>
                            </div>
                            <div class="widget widget-checkbox">
                              <fieldset
                                id="ctrl_1841"
                                class="checkbox_container"
                              >
                                <input type="hidden" name="opt_in" value="" />
                                <span
                                  ><input
                                    type="checkbox"
                                    name="opt_in"
                                    id="opt_1841_0"
                                    class="checkbox"
                                    value="true"
                                  />
                                  <label id="lbl_1841_0" for="opt_1841_0"
                                    >I hereby consent to receiving emails from
                                    the SER Group.</label
                                  ></span
                                >
                              </fieldset>
                            </div>
                            <div class="widget widget-captcha mandatory">
                              <label for="ctrl_1184">
                                <span class="invisible">Mandatory field </span
                                >Security question<span class="mandatory"
                                  >*</span
                                >
                              </label>
                              <input
                                type="text"
                                name="captcha_1184"
                                id="ctrl_1184"
                                class="captcha mandatory"
                                value=""
                                aria-describedby="captcha_text_1184"
                                maxlength="2"
                                required
                              />
                              <span id="captcha_text_1184" class="captcha_text"
                                >&#80;&#x6C;&#101;&#x61;&#115;&#x65;&#32;&#x61;&#100;&#x64;&#32;&#x37;&#32;&#x61;&#110;&#x64;&#32;&#x31;&#46;</span
                              >
                              <input
                                type="hidden"
                                name="captcha_1184_hash"
                                value=""
                              />
                              <div style="display: none">
                                <label for="ctrl_1184_hp"
                                  >Do not fill in this field</label
                                >
                                <input
                                  type="text"
                                  name="captcha_1184_name"
                                  id="ctrl_1184_hp"
                                  value=""
                                />
                              </div>
                              <script
                                src="/_contao/captcha/en"
                                data-id="1184"
                                data-name="captcha_1184"
                                async
                              ></script>
                            </div>
                            <div class="widget widget-submit looks_like_link">
                              <button
                                type="submit"
                                id="ctrl_1185"
                                class="submit looks_like_link"
                              >
                                Send
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- indexer::continue -->
                      <script>
                        document.currentScript.previousElementSibling
                          .querySelector("form")
                          .addEventListener("submit", (e) => {
                            if (e.submitter) {
                              setTimeout(() => (e.submitter.disabled = !0));
                              setTimeout(
                                () => (e.submitter.disabled = !1),
                                30000
                              );
                            }
                          });
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </main>
      </div>

<?php include_once("includes/footer.php"); ?>