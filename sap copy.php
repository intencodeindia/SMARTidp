<?php include_once("includes/header.php"); ?>

<link
      rel="stylesheet"
      href=""
    />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/sap.css">
    <style>
    .icon-boxes {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
}

.icon-boxes-item {
    flex: 1 1 32%; /* Adjust for 4 items per row */
    max-width: 22%;
    min-width: 200px; /* Ensures a minimum size for responsive scaling */
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    text-align: left;
    padding: 20px;
    transition: transform 0.3s;
}
.icon-boxes-a {
    display: flex;
    flex-wrap: wrap;
    /* gap: 20px; */
    justify-content: center;
    /* padding: 20px; */
}
.icon-boxes-item-a {
    /* flex: 1 1 32%; */
    /* max-width: 22%; */
    min-width: 200px; /* Ensures a minimum size for responsive scaling */
    background-color: #ffffff;
    /* border: 1px solid #e0e0e0; */
    /* border-radius: 8px; */
    /* text-align: left; */
    /* padding: 20px; */
    transition: transform 0.3s;
}
.icon-boxes-item:hover {
    transform: translateY(-5px);
}

.icon-boxes-item-icon-image img {
    width: 70px;
    height: 68px;
}

.icon-boxes-item h3 {
    font-size: 1.25rem;
    margin-top: 10px;
}

.icon-boxes-item p {
    margin-top: 5px;
    color: #333;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
    .icon-boxes-item {
        flex: 1 1 45%; /* 2 items per row on medium screens */
        max-width: 45%;
    }
}

@media (max-width: 768px) {
    .icon-boxes-item {
        flex: 1 1 100%; /* 1 item per row on small screens */
        max-width: 100%;
    }
}

</style>
<div class="content-wrapper">
        <main role="main" class="main-content">
          <div class="mod_article max-width-viewport block" id="article-29429">
            <div class="mod_article_inner">
              <div class="ce_ser_head_2 block">
                <style>
                  #serhead2-146243 .slide-1 {
                    background-image: url(https://cdn.sergroup.com/files/content/images/bannerbilder/ser_eissmann_banner.jpg);
                    background-position-x: 50%;
                  }

                  @media screen and (max-width: 599px) {
                    #serhead2-146243 .slide-1 {
                      background-image: url(https://cdn.sergroup.com/assets/images/2/ser_eissmann_banner-b0rr1xtwn8dvdsn.jpg);
                    }
                  }

                  #serhead2-146243 .slide-1::before {
                    background-color: rgb(10 6 2 / 0.55);
                  }
                </style>
                <div
                  id="serhead2-146243"
                  class="serhead2"
                  data-delay="8"
                  data-parallax=""
                >
                  <div data-id="1" class="slide slide-1 active">
                    <div class="slide-content">
                      <div class="slide-text">
                        <blockquote>
                          The parallel launch of ECM and SAP was a huge success
                          for the whole company.
                          <p>
                            Jens Michel, Head of Finance, Eissmann Group
                            Automotive
                          </p>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                  <svg
                    class="triangle-bottom"
                    viewBox="0 0 2000 125"
                    preserveAspectRatio="xMinYMin meet"
                  >
                    <polygon points="0,100 0,125 2000,125 2000,0"></polygon>
                  </svg>
                </div>
                <div class="serhead-main-headline">
                  <h1>SAP integration with SmartIDP</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29430">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <section
                    class="icon-boxes is-animated does-repeat ce_rsce_ser_icon_boxes"
                  >
                    <div
                      class="icon-boxes-item rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -inverted-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe105;"
                      ></span>
                      <p class="-medium">Full process transparency</p>
                      <div class="icon-boxes-item-text">
                        <p>
                          Bring together emails, contracts, invoices and much
                          more with SAP transactions and ensure a complete
                          overview of your processes
                        </p>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-3-1 -large-first-row -medium-col-3-1 -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe044;"
                      ></span>
                      <p class="-medium">Save time & prevent mistakes</p>
                      <div class="icon-boxes-item-text">
                        <p>
                          Automate the capture and verification of inbound
                          invoices and benefit from vendor accounting &amp;
                          liquidity planning updated daily
                        </p>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-3-1 -large-last -large-first-row -medium-col-3-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -inverted-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe107;"
                      ></span>
                      <p class="-medium">Minimize risks</p>
                      <div class="icon-boxes-item-text">
                        <p>
                          Automatically comply with retention periods for
                          documents &amp; SAP data and fulfill data protection
                          regulations, e.g.&nbsp;EU GDPR
                        </p>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-44383">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start infobox max-width-800"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="content-text">
                    <h3>Content Bridge SAP</h3>
                    <div class="rte">
                      <p>
                        Make sure employees have access to a clear picture of
                        data across your ERP and CRM systems. Say goodbye to
                        information silos with SmartIDP and close the information
                        gaps between your ERP and CRM systems. With a full
                        overview of customers, opportunities and deals you can
                        make informed decisions, speed up processes and create a
                        shared basis of information.
                      </p>
                      <p>Want to learn more about SmartIDP?</p>
                    </div>
                  </div>
                  <div class="button-box ce_rsce_oneo_button -left">
                    <a
                      class="button ce_rsce_oneo_button -left"
                      href="/en/live-demo.html"
                    >
                      Experience SmartIDP
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29431">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div class="content-image">
                        <figure>
                          <picture>
                            <source
                              srcset="
                                https://cdn.sergroup.com/assets/images/2/DEVK-logo-m7ms3g81xtkd9a9.webp
                              "
                              type="image/webp"
                              width="208"
                              height="117"
                            />
                            <img
                              src="https://cdn.sergroup.com/assets/images/0/DEVK-logo-fbs2vbv3jxptwdp.png"
                              alt
                              title="Company logo"
                              width="208"
                              height="117"
                              loading="lazy"
                            />
                          </picture>
                        </figure>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last"
                    >
                      <div class="vorspann content-text">
                        <div class="rte">
                          <blockquote>
                            <p>
                              The big advantage of SmartIDP is that it can do two
                              things: one, be integrated into leading systems
                              such as SAP as a pure archive, and two, take over
                              the leadership position in other projects, just
                              depending on the department’s requirements. At
                              DEVK, we take advantage of both variants."
                            </p>
                            <p style="font-size: 0.6em; text-align: left">
                              Markus Schiffer, Project Manager, Department of
                              Project and Portfolio Management, DEVK
                            </p>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29441">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <!-- rsce_my_element.html5 -->
                  <div class="ce_rsce_text ce_text block">
                    <hr />
                    <p
                      style="
                        text-align: center;
                        font-size: 35px;
                        color: #241ac7;
                        font-weight: 600;
                        margin-bottom: 0.3em;
                      "
                    >
                      Get to know SmartIDP live!
                    </p>
                    <p style="text-align: center">
                      In a live demo or at your place of business.<br />&nbsp;
                    </p>
                    <p style="text-align: center">
                      <a id="demo-cta" class="button" href="/en/live-demo.html"
                        >Arrange a Live Demo</a
                      >
                    </p>
                    <hr />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29432">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    ></div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last"
                    >
                      <section
                        class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller"
                      >
                        <div
                          class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon"
                          style=""
                        >
                          <span
                            class="icon-boxes-item-icon"
                            style=""
                            data-icon="&#xe095;"
                          ></span>
                          <h3>
                            360° view of your projects & business partners
                          </h3>
                          <div class="icon-boxes-item-text">
                            <p>
                              Systematically combine information from SAP,
                              Office &amp; business applications and benefit
                              from a complete overview to expedite
                              decision-making and the provision of information.
                            </p>
                          </div>
                        </div>
                        <div
                          class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                          style=""
                        >
                          <span
                            class="icon-boxes-item-icon"
                            style=""
                            data-icon="&#xe107;"
                          ></span>
                          <h3>Mitigate legal risks</h3>
                          <div class="icon-boxes-item-text">
                            <p>
                              Automate your SAP data archiving, automatically
                              comply with retention periods &amp; fulfill the
                              requirements of the EU GDPR.
                            </p>
                          </div>
                        </div>
                        <div
                          class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                          style=""
                        >
                          <span
                            class="icon-boxes-item-icon"
                            style=""
                            data-icon="&#xe111;"
                          ></span>
                          <h3>Familiar work environment</h3>
                          <div class="icon-boxes-item-text">
                            <p>
                              Continue working as normal in your&nbsp;SAP
                              applications and access documents and additional
                              information from other systems directly from SAP.
                            </p>
                          </div>
                        </div>
                        <div
                          class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-1-1 -medium-first -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                          style=""
                        >
                          <span
                            class="icon-boxes-item-icon"
                            style=""
                            data-icon="&#xe044;"
                          ></span>
                          <h3>Flexible & transparent processes</h3>
                          <div class="icon-boxes-item-text">
                            <p>
                              Use the flexible SmartIDP workflows to integrate SAP
                              transactions automatically into end-to-end
                              business processes and maintain seamless
                              documentation across department boundaries.
                            </p>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29435">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <h2 class="headline-hr ce_rsce_oneo_separator">
                    These companies are already working with SmartIDP integrated
                    into their SAP systems
                  </h2>
                  <div class="ce_customer_logo_list block">
                    <div
                      class="sercustomer_logolist sercustomer_logolist_slide"
                      style="--logos: 15"
                    >
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/august-storck-kg-kopie.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/z/storck-logo-gtggsk9wpa8c8qf.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/bernard-krone-holding-se-co-kg-1853.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/x/krone_logo-yx04mwttx356hte.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/bofrost-1725.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/z/bofrost-Logo_Referenz_web_300x169-j7c3xvadvahggwm.png"
                            width="300"
                            height="169"
                            alt="Logo bofrost*"
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/deges-deutsche-einheit-fernstrassenplanungs-und-bau-gmbh-1424.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/h/deges-logo-yjgx1sqpj31phn2.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/der-touristik-265.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/p/der-tourisitk-logo-vdy74v7fk9q9f3x.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/db-systel-310.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/2/db-logo-57bx8szg0bcn4xs.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/devk-insurance-policies.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/2/DEVK-logo-gz4w5pdph7a8k8f.png"
                            width="300"
                            height="169"
                            alt="DEVK"
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/dogewo21-292.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/e/dogewo-logo-xqrebgxgncpsqt9.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <div>
                          <img
                            src="https://cdn.sergroup.com/assets/images/z/Eissmann_Logo_Positive_RGB-5h6k0wv1tc5h0e3.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </div>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/fca-bank-deutschland-gmbh-305.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/y/fca-bank-deutschland-logo-2bvx5r893q0qc5z.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/fraport-ag-339.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/f/fraport-logo-bwfcjppvpkk03xg.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/phoenix-contact.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/e/phoenix-contact-logo-vzc7a0p7z4sdvqp.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/raffinerie-heide-gmbh-dms1.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/n/raffinerie-heide-logo-0ns1eqvzxkwt9zp.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <div>
                          <img
                            src="https://cdn.sergroup.com/assets/images/5/sew-eurodrive-logo-4y1rp3b1w3nc3na.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </div>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/steag-fernwaerme-gmbh.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/2/steag_fernwaerme_300x169-5j5zkdfjv9jgea5.png"
                            width="300"
                            height="169"
                            alt="Logo: STEAG Fernwärme GmbH"
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/august-storck-kg-kopie.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/z/storck-logo-gtggsk9wpa8c8qf.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/bernard-krone-holding-se-co-kg-1853.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/x/krone_logo-yx04mwttx356hte.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/bofrost-1725.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/z/bofrost-Logo_Referenz_web_300x169-j7c3xvadvahggwm.png"
                            width="300"
                            height="169"
                            alt="Logo bofrost*"
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/deges-deutsche-einheit-fernstrassenplanungs-und-bau-gmbh-1424.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/h/deges-logo-yjgx1sqpj31phn2.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                      <div
                        class="sercustomer_logo sercustomer_logo-2 sercustomer_logo-m-4 sercustomer_logo-l-5"
                      >
                        <a
                          href="https://www.sergroup.com/en/references/detail/der-touristik-265.html"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/p/der-tourisitk-logo-vdy74v7fk9q9f3x.png"
                            width="300"
                            height="169"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29436">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h2 class="headline -large">
                          Add more information to your business processes
                        </h2>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last"
                    >
                      <div class="content-text">
                        <div class="rte">
                          <p>
                            SAP is indispensable whenever you process structured
                            data on customers, suppliers, contracts and orders.
                            But you can only work on a business process
                            completely when you have the related documents. SAP
                            &amp; SmartIDP provide them to you: You’ll find emails,
                            contracts, invoices, etc.&nbsp;in the context of
                            your SAP transactions for a complete
                            overview&nbsp;of your processes.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-31300">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-1-1 -large-first -large-last -large-first-row -medium-col-1-1 -medium-first -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <h1 class="headline-hr ce_rsce_oneo_separator">
                        Product video
                      </h1>
                      <section
                        class="feature-box is-animated ce_rsce_ser_feature_box -image-right -vertical-centered -image-after-text"
                      >
                        <div class="feature-box-text not-animated">
                          <h4 class="feature-box-headline -large">
                            Tapping the full potential of SAP and ERP systems
                            with ECM
                          </h4>
                          <p>
                            See firsthand how SmartIDP and SAP interact to give you
                            a 360-edgree view of all information on a vendor,
                            connecting all
                            <a
                              href="/en/knowledge-center/blog/procurement-process.html"
                              >procurement processes</a
                            >
                            to enhance vendor relations and business efficiency.
                          </p>
                          <a
                            class="feature-box-link"
                            href="https://www.sergroup.com/en/knowledge-center/media-library/procurement-management-of-a-new-vendor-in-sap-integrated-with-doxis4.html"
                            target="_blank"
                          >
                            Watch now
                          </a>
                        </div>
                        <a
                          class="feature-box-image not-animated"
                          href="https://www.sergroup.com/en/knowledge-center/media-library/procurement-management-of-a-new-vendor-in-sap-integrated-with-doxis4.html"
                          target="_blank"
                        >
                          <img
                            src="https://cdn.sergroup.com/assets/images/6/ser_product_video_document_management-ag82a9vc1h8faqa.png"
                            width="400"
                            height="318"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                      </section>
                      <hr class="ce_rsce_oneo_separator" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mod_article max-width-viewport ser-hide-mobile block"
            id="article-29438"
          >
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div
                    class="headline-box -align-left ce_rsce_oneo_headline_box"
                  >
                    <h2 class=" ">
                      SAP integration with SmartIDP combines information &
                      processes
                    </h2>
                  </div>
                  <section
                    class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller"
                  >
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe06d;"
                      ></span>
                      <h3>Inbound invoices & SAP</h3>
                      <div class="icon-boxes-item-text">
                        <p>
                          Integrated inbound invoice processing and approval
                          processes directly in SAP: SmartIDP automates the entire
                          inbound invoice process, from capture and release to
                          fully automated posting in SAP.
                        </p>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe089;"
                      ></span>
                      <h3>Combine SAP data & documents</h3>
                      <div class="icon-boxes-item-text">
                        <p>
                          Contracts, delivery notes, invoices, emails: You no
                          longer need to search for documents relating to SAP
                          transactions in attachment lists, file systems and
                          mailboxes: SmartIDP provides these directly from SAP.
                        </p>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe083;"
                      ></span>
                      <h3>Provide context with eFiles</h3>
                      <div class="icon-boxes-item-text">
                        <p>
                          With electronic files, you can bundle data, documents
                          and workflows in SmartIDP, e.g. in the context of
                          your&nbsp;vendors. The SmartIDP Folder Cockpit or
                          <a
                            href="/en/solutions/electronic-files.html"
                            target="_blank"
                            >SmartIDP eFiles</a
                          >
                          turn your attachments list directly in SAP into a
                          complete file
                        </p>
                      </div>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe06b;"
                      ></span>
                      <h3>Enhance SAP with DMS functions</h3>
                      <div class="icon-boxes-item-text">
                        <p>
                          Versioning, annotations, filing and searches: SmartIDP
                          adds missing&nbsp;<a
                            href="/en/solutions/document-management.html"
                            target="_blank"
                            >DMS</a
                          >
                          functions to SAP. This enables you to work on
                          documents conveniently and traceably — and manage
                          documents in an audit-proof manner. For all SAP filing
                          and capture scenarios.
                        </p>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mod_article max-width-viewport ser-show-mobile block"
            id="article-29439"
          >
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div
                    class="headline-box -align-left ce_rsce_oneo_headline_box"
                  >
                    <h2 class=" ">
                      SAP integration with SmartIDP combines everything
                    </h2>
                  </div>
                  <div style="margin-bottom: 20px" class="content-text">
                    <div class="rte">
                      <p>
                        With SmartIDP, you can find
                        <strong>all information</strong> relating your business
                        processes — and with all the SmartIDP
                        <strong>DMS &amp; BPM functions</strong> at your
                        fingertips.
                      </p>
                    </div>
                  </div>
                  <section
                    class="icon-boxes is-animated does-repeat ce_rsce_oneo_icon_boxes icons-smaller"
                  >
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe06d;"
                      ></span>
                      <h3>Inbound invoices & SAP</h3>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe089;"
                      ></span>
                      <h3>Combine data & documents</h3>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-first -medium-col-2-1 -medium-first -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe083;"
                      ></span>
                      <h3>Provide context with eFiles</h3>
                    </div>
                    <div
                      class="icon-boxes-item rs-column -large-col-2-1 -large-last -medium-col-2-1 -medium-last -small-col-1-1 -small-first -small-last -align-left -headline-icon"
                      style=""
                    >
                      <span
                        class="icon-boxes-item-icon"
                        style=""
                        data-icon="&#xe06b;"
                      ></span>
                      <h3>DMS functions for SAP</h3>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29442">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <h2 class="headline-hr ce_rsce_oneo_separator">
                    Best practice
                  </h2>
                  <section
                    class="feature-box is-animated ce_rsce_oneo_feature_box -image-right -vertical-centered -image-after-text"
                  >
                    <div class="feature-box-text not-animated">
                      <blockquote>
                        <p>
                          Our interconnected eFiles act as central access points
                          to documents from a range of sources, including SAP
                          documents, emails, MS Office, etc. and help us to make
                          ongoing improvements in many areas, such as customer
                          service."
                        </p>
                        <p style="font-size: 0.6em; text-align: left">
                          Dr. Goy-Hinrich Korn, Authorized Representative and
                          CIO, Bernard Krone Holding SE &amp; Co. KG
                        </p>
                      </blockquote>
                      <a
                        class="feature-box-link"
                        href="https://www.sergroup.com/en/knowledge-center/media-library/bernard-krone-holding-end-to-end-information-logistics-with-ecm.html"
                      >
                        Read now
                      </a>
                    </div>
                    <a
                      class="feature-box-image not-animated"
                      href="https://www.sergroup.com/en/knowledge-center/media-library/bernard-krone-holding-end-to-end-information-logistics-with-ecm.html"
                    >
                      <img
                        src="https://cdn.sergroup.com/assets/images/j/best_practice_krone_information_logistics_en-jyesmg0cw002m1s.png"
                        width="300"
                        height="406"
                        alt=""
                      />
                    </a>
                  </section>
                  <hr class="ce_rsce_oneo_separator" />
                </div>
              </div>
            </div>
          </div>
          <div
            class="mod_article max-width-viewport ser-hide-mobile block"
            id="article-29443"
          >
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div class="content-image">
                        <figure>
                          <img
                            src="https://cdn.sergroup.com/assets/images/g/handy_mockup_vorlage-7kk686j7n0ckrxy.png"
                            alt="Doxis4 offers standout usability"
                            title="Doxis4 is all about usability"
                            width="250"
                            height="412"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h3 class="headline -large">
                          Added flexibility for your processes
                        </h3>
                      </div>
                      <div class="content-text">
                        <div class="rte">
                          <p>
                            SAP workflows are practical, but sometimes a bit
                            rigid. With SmartIDP, you design&nbsp;flexible standard
                            and ad hoc processes customized exactly to your
                            needs and incorporate information from a range of
                            integrated business applications. SmartIDP responds to
                            events in SAP and initiates many processes
                            automatically:
                          </p>
                          <ul>
                            <li class="icon-arrow-5-right">
                              Create new eFiles &amp; processes — without ABAP
                              programming
                            </li>
                            <li class="icon-arrow-5-right">
                              Automatic indexing &amp; assignment of new SAP
                              information
                            </li>
                            <li class="icon-arrow-5-right">
                              SmartIDP
                              <a href="/en/business-platform/archiving.html"
                                >archives </a
                              >all SAP data &amp; related documents in line with
                              audit requirements
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mod_article max-width-viewport ser-hide-mobile block"
            id="article-29444"
          >
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-2 -large-first -large-first-row -medium-col-2-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div
                        class="headline-box ser-headline-box -align-left ce_rsce_ser_headline_box"
                      >
                        <h3 class="headline -large">Certified interfaces</h3>
                      </div>
                      <div class="content-text">
                        <div class="rte">
                          <p>
                            As a long-standing certified partner of SAP, SER
                            ensures a deep integration of SAP and SmartIDP. With
                            the certified interfaces and add-ons, as well as its
                            own namespace in SAP, SmartIDP is fully integrated —
                            also for SAP S/4HANA.
                          </p>
                          <ul>
                            <li class="icon-arrow-5-right">
                              SAP add-on for automated invoice verification
                            </li>
                            <li class="icon-arrow-5-right">
                              SAP interface for archiving via ArchiveLink
                            </li>
                            <li class="icon-arrow-5-right">
                              SmartIDP WebDAV Connector for ILM
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="button-box ce_rsce_oneo_button -left">
                        <a
                          class="button ce_rsce_oneo_button -left"
                          href="/en/business-platform/certification/sap-certification.html"
                        >
                          Learn more
                        </a>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-1 -large-last -large-first-row -medium-col-2-1 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last"
                    >
                      <div class="ser-hide-mobile">
                        <div class="content-image">
                          <figure>
                            <img
                              src="https://cdn.sergroup.com/assets/images/x/ser-sap-partner-logo3-z748nzpy6sgzz22.jpg"
                              alt
                              width="267"
                              height="300"
                            />
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29445">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -vertical-centered"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <div class="rs-columns ce_rs_columns_start">
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-1 -large-first -large-first-row -medium-col-3-1 -medium-first -medium-first-row -small-col-1-1 -small-first -small-last -small-first-row"
                    >
                      <div class="content-image">
                        <figure>
                          <picture>
                            <source
                              srcset="
                                https://cdn.sergroup.com/assets/images/j/westfalen-logo-j48e9pvsnttveh7.webp
                              "
                              type="image/webp"
                              width="208"
                              height="117"
                            />
                            <img
                              src="https://cdn.sergroup.com/assets/images/j/westfalen-logo-rxf6gmveqazw14p.png"
                              alt="Company logo"
                              title="Company logo"
                              width="208"
                              height="117"
                              loading="lazy"
                            />
                          </picture>
                        </figure>
                      </div>
                    </div>
                    <div
                      class="ce_rs_column_start rs-column -large-col-3-2 -large-last -large-first-row -medium-col-3-2 -medium-last -medium-first-row -small-col-1-1 -small-first -small-last"
                    >
                      <div class="vorspann content-text">
                        <div class="rte">
                          <blockquote>
                            <p>
                              It's a huge help not having to run to the filing
                              cabinet every time we need an HR document. Now, we
                              access them digitally, direct from our
                              workstations. Our data is stored in the SAP system
                              and all the additional documentation we need is
                              filed in the attached SmartIDP archive."
                            </p>
                            <p style="font-size: 0.6em; text-align: left">
                              Ralf Hilgenberg, Human Resources, Westfalen Gruppe
                            </p>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mod_article max-width-viewport block" id="article-29446">
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start"
                style=""
              >
                <div class="centered-wrapper-inner">
                  <h2 class="headline-hr ce_rsce_oneo_separator">
                    White paper
                  </h2>
                  <section
                    class="feature-box is-animated ce_rsce_oneo_feature_box -image-right -vertical-centered -image-after-text"
                  >
                    <div class="feature-box-text not-animated">
                      <h2 class="-small">
                        EU GDPR-compliant archiving for SAP
                      </h2>
                      <p>
                        What can companies do to ensure their SAP systems comply
                        with the EU GDPR? And what happens with unstructured,
                        transaction-related documents stored in electronic
                        archives? Find out here.
                      </p>
                      <p>&nbsp;</p>
                      <a
                        class="feature-box-link"
                        href="https://www.sergroup.com/en/knowledge-center/media-library/eu-gdpr-compliant-information-life-cycle-management-for-sap.html"
                      >
                        Read now
                      </a>
                    </div>
                    <a
                      class="feature-box-image not-animated"
                      href="https://www.sergroup.com/en/knowledge-center/media-library/eu-gdpr-compliant-information-life-cycle-management-for-sap.html"
                    >
                      <img
                        src="https://cdn.sergroup.com/assets/images/3/SER-White-Paper-EU-GDPR-EN-hzxfspv8t65qf7v.png"
                        width="300"
                        height="406"
                        alt=""
                      />
                    </a>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mod_article max-width-viewport ser-hide-mobile block"
            id="article-42734"
          >
            <div class="mod_article_inner">
              <div
                class="centered-wrapper ce_rsce_oneo_centered_wrapper_start -no-background-mobile"
                style="background-color: #f3f5fd"
              >
                <div class="centered-wrapper-inner">
                  <div
                    class="headline-box ser-headline-box ce_rsce_ser_headline_box"
                  >
                    <h2 class="headline -extra-large">How can we help?</h2>
                  </div>
                  <div class="content-text">
                    <div class="rte">
                      <p style="text-align: center">
                        Discover with us how SmartIDP can help you meet your goals.
                      </p>
                      <p style="text-align: center">
                        Would you like to learn more about document management
                        with SmartIDP? Schedule your personal live demo of SmartIDP or
                        arrange for us to visit your company to show you its
                        potential live and up close. We look forward to hearing
                        from you!
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
                                >&#80;&#x6C;&#101;&#x61;&#115;&#x65;&#32;&#x63;&#97;&#x6C;&#99;&#x75;&#108;&#x61;&#116;&#x65;&#32;&#x32;&#32;&#x70;&#108;&#x75;&#115;&#x20;&#52;&#x2E;</span
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

<!-- <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/five.css"> -->