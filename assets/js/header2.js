/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */ ! function(a, b) {
    if ("function" == typeof define && define.amd) define(["module", "exports"], b);
    else if ("undefined" != typeof exports) b(module, exports);
    else {
        var c = {
            exports: {}
        };
        b(c, c.exports), a.WOW = c.exports;
    }
}(this, function(a, b) {
    "use strict";

    function c(a, b) {
        if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function");
    }

    function d(a, b) {
        return b.indexOf(a) >= 0;
    }

    function e(a, b) {
        for (var c in b)
            if (null == a[c]) {
                var d = b[c];
                a[c] = d;
            }
        return a;
    }

    function f(a) {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a);
    }

    function g(a) {
        var b = arguments.length <= 1 || void 0 === arguments[1] ? !1 : arguments[1],
            c = arguments.length <= 2 || void 0 === arguments[2] ? !1 : arguments[2],
            d = arguments.length <= 3 || void 0 === arguments[3] ? null : arguments[3],
            e = void 0;
        return null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e;
    }

    function h(a, b) {
        null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) && a["on" + b]();
    }

    function i(a, b, c) {
        null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c;
    }

    function j(a, b, c) {
        null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b];
    }

    function k() {
        return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight;
    }
    Object.defineProperty(b, "__esModule", {
        value: !0
    });
    var l, m, n = function() {
            function a(a, b) {
                for (var c = 0; c < b.length; c++) {
                    var d = b[c];
                    d.enumerable = d.enumerable || !1, d.configurable = !0, "value" in d && (d.writable = !0), Object.defineProperty(a, d.key, d);
                }
            }
            return function(b, c, d) {
                return c && a(b.prototype, c), d && a(b, d), b;
            };
        }(),
        o = window.WeakMap || window.MozWeakMap || function() {
            function a() {
                c(this, a), this.keys = [], this.values = [];
            }
            return n(a, [{
                key: "get",
                value: function(a) {
                    for (var b = 0; b < this.keys.length; b++) {
                        var c = this.keys[b];
                        if (c === a) return this.values[b];
                    }
                }
            }, {
                key: "set",
                value: function(a, b) {
                    for (var c = 0; c < this.keys.length; c++) {
                        var d = this.keys[c];
                        if (d === a) return this.values[c] = b, this;
                    }
                    return this.keys.push(a), this.values.push(b), this;
                }
            }]), a;
        }(),
        p = window.MutationObserver || window.WebkitMutationObserver || window.MozMutationObserver || (m = l = function() {
            function a() {
                c(this, a), "undefined" != typeof console && null !== console && (console.warn("MutationObserver is not supported by your browser."), console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content."));
            }
            return n(a, [{
                key: "observe",
                value: function() {}
            }]), a;
        }(), l.notSupported = !0, m),
        q = window.getComputedStyle || function(a) {
            var b = /(\-([a-z]){1})/g;
            return {
                getPropertyValue: function(c) {
                    "float" === c && (c = "styleFloat"), b.test(c) && c.replace(b, function(a, b) {
                        return b.toUpperCase();
                    });
                    var d = a.currentStyle;
                    return (null != d ? d[c] : void 0) || null;
                }
            };
        },
        r = function() {
            function a() {
                var b = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0];
                c(this, a), this.defaults = {
                    boxClass: "wow",
                    animateClass: "animated",
                    offset: 0,
                    mobile: !0,
                    live: !0,
                    callback: null,
                    scrollContainer: null,
                    resetAnimation: !0
                }, this.animate = function() {
                    return "requestAnimationFrame" in window ? function(a) {
                        return window.requestAnimationFrame(a);
                    } : function(a) {
                        return a();
                    };
                }(), this.vendors = ["moz", "webkit"], this.start = this.start.bind(this), this.resetAnimation = this.resetAnimation.bind(this), this.scrollHandler = this.scrollHandler.bind(this), this.scrollCallback = this.scrollCallback.bind(this), this.scrolled = !0, this.config = e(b, this.defaults), null != b.scrollContainer && (this.config.scrollContainer = document.querySelector(b.scrollContainer)), this.animationNameCache = new o(), this.wowEvent = g(this.config.boxClass);
            }
            return n(a, [{
                key: "init",
                value: function() {
                    this.element = window.document.documentElement, d(document.readyState, ["interactive", "complete"]) ? this.start() : i(document, "DOMContentLoaded", this.start), this.finished = [];
                }
            }, {
                key: "start",
                value: function() {
                    var a = this;
                    if (this.stopped = !1, this.boxes = [].slice.call(this.element.querySelectorAll("." + this.config.boxClass)), this.all = this.boxes.slice(0), this.boxes.length)
                        if (this.disabled()) this.resetStyle();
                        else
                            for (var b = 0; b < this.boxes.length; b++) {
                                var c = this.boxes[b];
                                this.applyStyle(c, !0);
                            }
                    if (this.disabled() || (i(this.config.scrollContainer || window, "scroll", this.scrollHandler), i(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live) {
                        var d = new p(function(b) {
                            for (var c = 0; c < b.length; c++)
                                for (var d = b[c], e = 0; e < d.addedNodes.length; e++) {
                                    var f = d.addedNodes[e];
                                    a.doSync(f);
                                }
                        });
                        d.observe(document.body, {
                            childList: !0,
                            subtree: !0
                        });
                    }
                }
            }, {
                key: "stop",
                value: function() {
                    this.stopped = !0, j(this.config.scrollContainer || window, "scroll", this.scrollHandler), j(window, "resize", this.scrollHandler), null != this.interval && clearInterval(this.interval);
                }
            }, {
                key: "sync",
                value: function() {
                    p.notSupported && this.doSync(this.element);
                }
            }, {
                key: "doSync",
                value: function(a) {
                    if ("undefined" != typeof a && null !== a || (a = this.element), 1 === a.nodeType) {
                        a = a.parentNode || a;
                        for (var b = a.querySelectorAll("." + this.config.boxClass), c = 0; c < b.length; c++) {
                            var e = b[c];
                            d(e, this.all) || (this.boxes.push(e), this.all.push(e), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(e, !0), this.scrolled = !0);
                        }
                    }
                }
            }, {
                key: "show",
                value: function(a) {
                    return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), h(a, this.wowEvent), this.config.resetAnimation && (i(a, "animationend", this.resetAnimation), i(a, "oanimationend", this.resetAnimation), i(a, "webkitAnimationEnd", this.resetAnimation), i(a, "MSAnimationEnd", this.resetAnimation)), a;
                }
            }, {
                key: "applyStyle",
                value: function(a, b) {
                    var c = this,
                        d = a.getAttribute("data-wow-duration"),
                        e = a.getAttribute("data-wow-delay"),
                        f = a.getAttribute("data-wow-iteration");
                    return this.animate(function() {
                        return c.customStyle(a, b, d, e, f);
                    });
                }
            }, {
                key: "resetStyle",
                value: function() {
                    for (var a = 0; a < this.boxes.length; a++) {
                        var b = this.boxes[a];
                        b.style.visibility = "visible";
                    }
                }
            }, {
                key: "resetAnimation",
                value: function(a) {
                    if (a.type.toLowerCase().indexOf("animationend") >= 0) {
                        var b = a.target || a.srcElement;
                        b.className = b.className.replace(this.config.animateClass, "").trim();
                    }
                }
            }, {
                key: "customStyle",
                value: function(a, b, c, d, e) {
                    return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {
                        animationDuration: c
                    }), d && this.vendorSet(a.style, {
                        animationDelay: d
                    }), e && this.vendorSet(a.style, {
                        animationIterationCount: e
                    }), this.vendorSet(a.style, {
                        animationName: b ? "none" : this.cachedAnimationName(a)
                    }), a;
                }
            }, {
                key: "vendorSet",
                value: function(a, b) {
                    for (var c in b)
                        if (b.hasOwnProperty(c)) {
                            var d = b[c];
                            a["" + c] = d;
                            for (var e = 0; e < this.vendors.length; e++) {
                                var f = this.vendors[e];
                                a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = d;
                            }
                        }
                }
            }, {
                key: "vendorCSS",
                value: function(a, b) {
                    for (var c = q(a), d = c.getPropertyCSSValue(b), e = 0; e < this.vendors.length; e++) {
                        var f = this.vendors[e];
                        d = d || c.getPropertyCSSValue("-" + f + "-" + b);
                    }
                    return d;
                }
            }, {
                key: "animationName",
                value: function(a) {
                    var b = void 0;
                    try {
                        b = this.vendorCSS(a, "animation-name").cssText;
                    } catch (c) {
                        b = q(a).getPropertyValue("animation-name");
                    }
                    return "none" === b ? "" : b;
                }
            }, {
                key: "cacheAnimationName",
                value: function(a) {
                    return this.animationNameCache.set(a, this.animationName(a));
                }
            }, {
                key: "cachedAnimationName",
                value: function(a) {
                    return this.animationNameCache.get(a);
                }
            }, {
                key: "scrollHandler",
                value: function() {
                    this.scrolled = !0;
                }
            }, {
                key: "scrollCallback",
                value: function() {
                    if (this.scrolled) {
                        this.scrolled = !1;
                        for (var a = [], b = 0; b < this.boxes.length; b++) {
                            var c = this.boxes[b];
                            if (c) {
                                if (this.isVisible(c)) {
                                    this.show(c);
                                    continue;
                                }
                                a.push(c);
                            }
                        }
                        this.boxes = a, this.boxes.length || this.config.live || this.stop();
                    }
                }
            }, {
                key: "offsetTop",
                value: function(a) {
                    for (; void 0 === a.offsetTop;) a = a.parentNode;
                    for (var b = a.offsetTop; a.offsetParent;) a = a.offsetParent, b += a.offsetTop;
                    return b;
                }
            }, {
                key: "isVisible",
                value: function(a) {
                    var b = a.getAttribute("data-wow-offset") || this.config.offset,
                        c = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset,
                        d = c + Math.min(this.element.clientHeight, k()) - b,
                        e = this.offsetTop(a),
                        f = e + a.clientHeight;
                    return d >= e && f >= c;
                }
            }, {
                key: "disabled",
                value: function() {
                    return !this.config.mobile && f(navigator.userAgent);
                }
            }]), a;
        }();
    b["default"] = r, a.exports = b["default"];
});;
jQuery(document).ready(function() {
    jQuery(document).on('click', '.yt-video-btn', function() {
        var ytVideoId = jQuery(this).attr("data-yt-video");
        var ytVideoUrl = "https://www.youtube.com/embed/" + ytVideoId + "?rel=0&autoplay=1";
        jQuery(".video-modal iframe").attr("src", ytVideoUrl);
        jQuery(".video-modal").fadeIn();
    });
    jQuery(document).on('click', '.vmodal-close span', function() {
        jQuery(this).parents(".video-modal").fadeOut();
        var ytVideoUrlClose = jQuery(this).parent('.vmodal-close').next('.vmodal-video-box').children('iframe').attr("src");
        ytVideoUrlClose = ytVideoUrlClose.split("&autoplay=1");
        ytVideoUrlClose = ytVideoUrlClose[0];
        jQuery(this).parent('.vmodal-close').next('.vmodal-video-box').children('iframe').attr("src", ytVideoUrlClose);
        jQuery('.vmodal-video-box iframe').each(function(index) {
            jQuery(this).attr('src', jQuery(this).attr('src'));
            return false;
        });
    });
});;
(function() {
    Drupal.behaviors.dataLayer = {
        langPrefixes: function langPrefixes() {
            var languages = Drupal.settings.dataLayer.languages,
                langList = [];
            for (var lang in languages)
                if (languages[lang].prefix !== '') langList.push(languages[lang].prefix);
            return langList;
        },
        attach: function() {
            return;
        }
    };
})();;
var Drupal = Drupal || {};
(function($, Drupal, window, document, undefined) {
    $("#nav-toggle").on('click', function() {
        $("#topNavbar").slideToggle(500);
        $("#topNavbar").toggleClass("menu-open");
    });
    $(".nav-close").on('click', function() {
        $("#topNavbar").slideToggle(500);
        $("#topNavbar").toggleClass("menu-open");
    });
    setTimeout(function() {
        if ($(window).width() > 767)
            if ($("body").hasClass("user-logged-in")) $(".main-navbar .menu-level-2-wrapper").css("max-height", window.innerHeight - $(".site-header").outerHeight() - 125);
            else $(".main-navbar .menu-level-2-wrapper").css("max-height", window.innerHeight - $(".site-header").outerHeight() - 30);
        else $(".main-navbar .menu-level-2-wrapper").removeAttr("style");
    }, 400);
    $(window).resize(function() {
        if ($(window).width() > 767) {
            $("#topNavbar").removeAttr("style");
            if ($("body").hasClass("user-logged-in")) $(".main-navbar .menu-level-2-wrapper").css("max-height", window.innerHeight - $(".site-header").outerHeight() - 125);
            else $(".main-navbar .menu-level-2-wrapper").css("max-height", window.innerHeight - $(".site-header").outerHeight() - 30);
        } else {
            if (!$("#topNavbar").hasClass("menu-open")) {
                $(".main-navbar .menu-level-2-wrapper").removeAttr("style");
                $("li.nav-head").removeClass("is-expanded").addClass("is-collapsed");
            }
        }
    });
    if ($(window).scrollTop() >= 25) $("body").addClass("short-header");
    let currentPath = window.location.pathname;
    let langCodesExceptEn = ['ae', 'de', 'br', 'jp', 'la', 'kr', 'tw', 'fr'];
    if (currentPath.length > 2) {
        let currentPathStrSplit;
        currentPathStrSplit = currentPath.split('/');
        if ($.inArray(currentPathStrSplit[1], langCodesExceptEn) !== -1) $(".utility-nav, .primary-menu").find('img').removeAttr('title');
    }
    $(window).on("scroll", function() {
        if ($(window).scrollTop() >= 25) $("body").addClass("short-header");
        else $("body").removeClass("short-header");
    });
    var rqst_demo_btn_link = $(".utility-navbtn").find("a").attr('href');
    if (typeof rqst_demo_btn_link !== "undefined")
        if (rqst_demo_btn_link.indexOf('//request-live-demo') != -1) {
            rqst_demo_btn_link = rqst_demo_btn_link.replace('//request-live-demo', '/request-live-demo');
            $(".utility-navbtn").find("a").attr('href', rqst_demo_btn_link);
        }
    var base_url = window.location.origin;
    $(".primary-menu").find("a[href='" + window.location.pathname + "']").not("a.nav-no-highlight").addClass('active').parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
    $(".utility-nav").find("a[href='" + window.location.pathname + "']").addClass('active').parent().addClass("current").closest(".utility-nav > ul > li").find("a.utility-nav-link").addClass("active");
    $(".primary-menu").find("a[href='" + base_url + window.location.pathname + "']").addClass('active').parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
    $(".utility-nav").find("a[href='" + base_url + window.location.pathname + "']").addClass('active').parent().addClass("current").closest(".utility-nav > ul > li").find("a.utility-nav-link").addClass("active");
    $(document).on("click", "a.contactconLink", function() {
        localStorage.setItem("contactusNavSel", "contactLink");
    });
    $(document).on("click", "a.companyconLink", function() {
        localStorage.setItem("contactusNavSel", "companyLink");
    });
    let currentPathContactUs = window.location.pathname;
    const pathContactUsStrSplit = currentPathContactUs.split('/');
    if (pathContactUsStrSplit.length > 2) {
        pathContactUsStrSplit.splice(1, 1);
        currentPathContactUs = pathContactUsStrSplit.join('/');
    }
    let contactusNavSelVal = localStorage.getItem("contactusNavSel");
    if (contactusNavSelVal == null && currentPathContactUs == "/contact-us") {
        $("a.contactconLink").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find("a.nav-head-link").addClass("active");
        $("a.companyconLink").removeClass("active");
    } else if (contactusNavSelVal == "contactLink" && currentPathContactUs == "/contact-us") {
        $("a.contactconLink").addClass("active").parent().addClass("current").closest(".utility-nav > ul > li").find("a.nav-head-link").addClass("active");
        $("a.companyconLink").removeClass("active");
    } else {
        if (contactusNavSelVal == "companyLink" && currentPathContactUs == "/contact-us") {
            $("a.companyconLink").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find("a.nav-head-link").addClass("active");
            $("a.contactconLink").removeClass("active").closest(".utility-nav > ul > li").find("a.utility-nav-link").removeClass("active");
        }
    }
    if ($("a.contactconLink").hasClass("active")) {
        $("a.companyconLink").parent().removeClass("current");
        $("a.companyconLink").parent().closest(".primary-menu > ul > li").find("a.nav-head-link").removeClass("active");
    }
    if ($("a.companyconLink").hasClass("active")) {
        $("a.contactconLink").parent().removeClass("current");
        $("a.contactconLink").parent().closest(".primary-menu > ul > li").find("a.nav-head-link").removeClass("active");
    }
    $(document).on("click", "a.apf-prd-link", function() {
        localStorage.setItem("pathfinderNavSel", "apfPrdLink");
    });
    $(document).on("click", "a.apf-res-link", function() {
        localStorage.setItem("pathfinderNavSel", "apfResLink");
    });
    let currentPathFinder = window.location.pathname;
    const pathFinderStrSplit = currentPathFinder.split('/');
    if (pathFinderStrSplit.length > 1) {
        pathContactUsStrSplit.splice(1, 0);
        currentPathFinder = pathContactUsStrSplit.join('/');
    }
    let pathfinderNavSelVal = localStorage.getItem("pathfinderNavSel");
    if (pathfinderNavSelVal == null && currentPathFinder == "/automation-pathfinder") {
        $("a.apf-prd-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
        $("a.apf-res-link").removeClass("active");
    } else if (pathfinderNavSelVal == "apfPrdLink" && currentPathFinder == "/automation-pathfinder") {
        $("a.apf-prd-link").addClass("active").parent().addClass("current").closest(".utility-nav > ul > li").find(".nav-head-link").addClass("active");
        $("a.apf-res-link").removeClass("active");
    } else {
        if (pathfinderNavSelVal == "apfResLink" && currentPathFinder == "/automation-pathfinder") {
            $("a.apf-res-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
            $("a.apf-prd-link").removeClass("active").closest(".utility-nav > ul > li").find("a.utility-nav-link").removeClass("active");
        }
    }
    if ($("a.apf-prd-link").hasClass("active")) {
        $("a.apf-res-link").parent().removeClass("current");
        $("a.apf-res-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
    }
    if ($("a.apf-res-link").hasClass("active")) {
        $("a.apf-prd-link").parent().removeClass("current");
        $("a.apf-prd-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
    }
    $(document).on("click", "a.bst-prd-link", function() {
        localStorage.setItem("botstoreNavSel", "bstPrdLink");
    });
    $(document).on("click", "a.bst-res-link", function() {
        localStorage.setItem("botstoreNavSel", "bstResLink");
    });
    let currentPathBotStore = window.location.pathname;
    const pathBotStoreStrSplit = currentPathBotStore.split('/');
    if (pathBotStoreStrSplit.length > 3) {
        pathBotStoreStrSplit.splice(1, 1);
        currentPathBotStore = pathBotStoreStrSplit.join('/');
    }
    let botstoreNavSelVal = localStorage.getItem("botstoreNavSel");
    if (botstoreNavSelVal == null && currentPathBotStore == "/products/botstore") {
        $("a.bst-prd-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
        $("a.bst-res-link").removeClass("active");
    } else if (botstoreNavSelVal == "bstPrdLink" && currentPathBotStore == "/products/botstore") {
        $("a.bst-prd-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
        $("a.bst-res-link").removeClass("active");
    } else {
        if (botstoreNavSelVal == "bstResLink" && currentPathBotStore == "/products/botstore") {
            $("a.bst-res-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
            $("a.bst-prd-link").removeClass("active");
        }
    }
    if ($("a.bst-prd-link").hasClass("active")) {
        $("a.bst-res-link").parent().removeClass("current");
        $("a.bst-res-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
    }
    if ($("a.bst-res-link").hasClass("active")) {
        $("a.bst-prd-link").parent().removeClass("current");
        $("a.bst-prd-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
    }
    $(document).on("click", "a.bb-rpa-link", function() {
        localStorage.setItem("buildBotNavSel", "bbRpaLink");
    });
    $(document).on("click", "a.bb-res-link", function() {
        localStorage.setItem("buildBotNavSel", "bbResLink");
    });
    let currentPathBuildBot = window.location.pathname;
    const pathBuildBotStrSplit = currentPathBuildBot.split('/');
    if (pathBuildBotStrSplit.length > 3) {
        pathBuildBotStrSplit.splice(1, 1);
        currentPathBuildBot = pathBuildBotStrSplit.join('/');
    }
    let buildBotNavSelVal = localStorage.getItem("buildBotNavSel");
    if (buildBotNavSelVal == null && currentPathBuildBot == "/resources/build-a-bot") {
        $("a.bb-res-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find("a.nav-head-link").addClass("active");
        $("a.bb-rpa-link").removeClass("active");
    } else if (buildBotNavSelVal == "bbRpaLink" && currentPathBuildBot == "/resources/build-a-bot") {
        $("a.bb-rpa-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find("a.nav-head-link").addClass("active");
        $("a.bb-res-link").removeClass("active");
    } else {
        if (buildBotNavSelVal == "bbResLink" && currentPathBuildBot == "/resources/build-a-bot") {
            $("a.bb-res-link").addClass("active").parent().addClass("current").closest(".primary-menu > ul > li").find("a.nav-head-link").addClass("active");
            $("a.bb-rpa-link").removeClass("active");
        }
    }
    if ($("a.bb-rpa-link").hasClass("active")) {
        $("a.bb-res-link").parent().removeClass("current");
        $("a.bb-res-link").parent().closest(".primary-menu > ul > li").find("a.nav-head-link").removeClass("active");
    }
    if ($("a.bb-res-link").hasClass("active")) {
        $("a.bb-rpa-link").parent().removeClass("current");
        $("a.bb-rpa-link").parent().closest(".primary-menu > ul > li").find("a.nav-head-link").removeClass("active");
    }

    function menuShow() {
        let showDelay = 300,
            hideDelay = 100;
        let menuEnterTimer, menuLeaveTimer;
        let allMenuItems = document.querySelectorAll('.menu-level-1 li.nav-head, .menu-level-1 li.utility-nav-item, .langselector');
        for (let i = 0; i < allMenuItems.length; i++) {
            allMenuItems[i].addEventListener('mouseenter', function() {
                let thisItem = this;
                clearTimeout(menuLeaveTimer);
                for (let j = 0; j < allMenuItems.length; j++) {
                    allMenuItems[j].classList.remove('is-expanded');
                    allMenuItems[j].classList.add('is-collapsed');
                }
                menuEnterTimer = setTimeout(function() {
                    thisItem.classList.add('is-expanded');
                    thisItem.classList.remove('is-collapsed');
                }, showDelay);
            });
            allMenuItems[i].addEventListener('mouseleave', function() {
                let thisItem = this;
                clearTimeout(menuEnterTimer);
                menuLeaveTimer = setTimeout(function() {
                    thisItem.classList.remove('is-expanded');
                    thisItem.classList.add('is-collapsed');
                }, hideDelay);
            });
        }
    }
    if (window.innerWidth > 992) menuShow();
    $(document).on("click", ".go-back-link", function(e) {
        e.preventDefault();
        history.back();
    });
    $(".scroll-link").click(function() {
        if ($("body").hasClass("user-logged-in")) $('html, body').animate({
            scrollTop: $(".scroll-link").offset().top
        }, 1000);
        else $('html, body').animate({
            scrollTop: $(".form-section").offset().top
        }, 1000);
    });
    var current_page = new URL(window.location.href);
    if (current_page.search != '' && current_page.pathname == '/company/awards') $("#item-region").removeAttr('open');
})(jQuery, Drupal, this, this.document);
(function($) {
    Drupal.behaviors.aai_cohesion = {
        attach: function(context, settings) {
            if (window.innerWidth < 993) $('.langselector').click(function() {
                $(this).toggleClass("is-collapsed is-expanded");
            });
            $(window).resize(function() {
                if (window.innerWidth < 993) $('.langselector').click(function() {
                    $(this).toggleClass("is-collapsed is-expanded");
                });
            });
            $(document).find("input:checked[type='radio'][name=industry]").addClass('bounce');
            $("input[type='radio'][name=industry]").click(function() {
                $(this).toggleClass('bounce');
                if ($(this).hasClass('bounce')) $(document).find("input:not(:checked)[type='radio'][name=industry]").removeClass('bounce');
                else $("input:radio[name=industry][value=All]").trigger('click');
            });
            $(document).find("input:checked[type='radio'][name=region]").addClass('bounce');
            $("input[type='radio'][name=region]").click(function() {
                $(this).toggleClass('bounce');
                if ($(this).hasClass('bounce')) $(document).find("input:not(:checked)[type='radio'][name=region]").removeClass('bounce');
                else $("input:radio[name=region][value=All]").trigger('click');
            });
        }
    };
}(jQuery));
(function($, Drupal, Bootstrap) {})(window.jQuery, window.Drupal, window.Drupal.bootstrap);;
! function(t, e) {
    "use strict";

    function r(r, a, i, u, l) {
        function f() {
            L = t.devicePixelRatio > 1, i = c(i), a.delay >= 0 && setTimeout(function() {
                s(!0);
            }, a.delay), (a.delay < 0 || a.combined) && (u.e = v(a.throttle, function(t) {
                "resize" === t.type && (w = B = -1), s(t.all);
            }), u.a = function(t) {
                t = c(t), i.push.apply(i, t);
            }, u.g = function() {
                return i = n(i).filter(function() {
                    return !n(this).data(a.loadedName);
                });
            }, u.f = function(t) {
                for (var e = 0; e < t.length; e++) {
                    var r = i.filter(function() {
                        return this === t[e];
                    });
                    r.length && s(!1, r);
                }
            }, s(), n(a.appendScroll).on("scroll." + l + " resize." + l, u.e));
        }

        function c(t) {
            var i = a.defaultImage,
                o = a.placeholder,
                u = a.imageBase,
                l = a.srcsetAttribute,
                f = a.loaderAttribute,
                c = a._f || {};
            t = n(t).filter(function() {
                var t = n(this),
                    r = m(this);
                return !t.data(a.handledName) && (t.attr(a.attribute) || t.attr(l) || t.attr(f) || c[r] !== e);
            }).data("plugin_" + a.name, r);
            for (var s = 0, d = t.length; s < d; s++) {
                var A = n(t[s]),
                    g = m(t[s]),
                    h = A.attr(a.imageBaseAttribute) || u;
                g === N && h && A.attr(l) && A.attr(l, b(A.attr(l), h)), c[g] === e || A.attr(f) || A.attr(f, c[g]), g === N && i && !A.attr(E) ? A.attr(E, i) : g === N || !o || A.css(O) && "none" !== A.css(O) || A.css(O, "url('" + o + "')");
            }
            return t;
        }

        function s(t, e) {
            if (!i.length) return void(a.autoDestroy && r.destroy());
            for (var o = e || i, u = !1, l = a.imageBase || "", f = a.srcsetAttribute, c = a.handledName, s = 0; s < o.length; s++)
                if (t || e || A(o[s])) {
                    var g = n(o[s]),
                        h = m(o[s]),
                        b = g.attr(a.attribute),
                        v = g.attr(a.imageBaseAttribute) || l,
                        p = g.attr(a.loaderAttribute);
                    g.data(c) || a.visibleOnly && !g.is(":visible") || !((b || g.attr(f)) && (h === N && (v + b !== g.attr(E) || g.attr(f) !== g.attr(F)) || h !== N && v + b !== g.css(O)) || p) || (u = !0, g.data(c, !0), d(g, h, v, p));
                }
            u && (i = n(i).filter(function() {
                return !n(this).data(c);
            }));
        }

        function d(t, e, r, i) {
            ++z;
            var o = function() {
                y("onError", t), p(), o = n.noop;
            };
            y("beforeLoad", t);
            var u = a.attribute,
                l = a.srcsetAttribute,
                f = a.sizesAttribute,
                c = a.retinaAttribute,
                s = a.removeAttribute,
                d = a.loadedName,
                A = t.attr(c);
            if (i) {
                var g = function() {
                    s && t.removeAttr(a.loaderAttribute), t.data(d, !0), y(T, t), setTimeout(p, 1), g = n.noop;
                };
                t.off(I).one(I, o).one(D, g), y(i, t, function(e) {
                    e ? (t.off(D), g()) : (t.off(I), o());
                }) || t.trigger(I);
            } else {
                var h = n(new Image());
                h.one(I, o).one(D, function() {
                    t.hide(), e === N ? t.attr(C, h.attr(C)).attr(F, h.attr(F)).attr(E, h.attr(E)) : t.css(O, "url('" + h.attr(E) + "')"), t[a.effect](a.effectTime), s && (t.removeAttr(u + " " + l + " " + c + " " + a.imageBaseAttribute), f !== C && t.removeAttr(f)), t.data(d, !0), y(T, t), h.remove(), p();
                });
                var m = (L && A ? A : t.attr(u)) || "";
                h.attr(C, t.attr(f)).attr(F, t.attr(l)).attr(E, m ? r + m : null), h.complete && h.trigger(D);
            }
        }

        function A(t) {
            var e = t.getBoundingClientRect(),
                r = a.scrollDirection,
                n = a.threshold,
                i = h() + n > e.top && -n < e.bottom,
                o = g() + n > e.left && -n < e.right;
            return "vertical" === r ? i : "horizontal" === r ? o : i && o;
        }

        function g() {
            return w >= 0 ? w : w = n(t).width();
        }

        function h() {
            return B >= 0 ? B : B = n(t).height();
        }

        function m(t) {
            return t.tagName.toLowerCase();
        }

        function b(t, e) {
            if (e) {
                var r = t.split(",");
                t = "";
                for (var a = 0, n = r.length; a < n; a++) t += e + r[a].trim() + (a !== n - 1 ? "," : "");
            }
            return t;
        }

        function v(t, e) {
            var n, i = 0;
            return function(o, u) {
                function l() {
                    i = +new Date(), e.call(r, o);
                }
                var f = +new Date() - i;
                n && clearTimeout(n), f > t || !a.enableThrottle || u ? l() : n = setTimeout(l, t - f);
            };
        }

        function p() {
            --z, i.length || z || y("onFinishedAll");
        }

        function y(t, e, n) {
            return !!(t = a[t]) && (t.apply(r, [].slice.call(arguments, 1)), !0);
        }
        var z = 0,
            w = -1,
            B = -1,
            L = !1,
            T = "afterLoad",
            D = "load",
            I = "error",
            N = "img",
            E = "src",
            F = "srcset",
            C = "sizes",
            O = "background-image";
        "event" === a.bind || o ? f() : n(t).on(D + "." + l, f);
    }

    function a(a, o) {
        var u = this,
            l = n.extend({}, u.config, o),
            f = {},
            c = l.name + "-" + ++i;
        return u.config = function(t, r) {
            return r === e ? l[t] : (l[t] = r, u);
        }, u.addItems = function(t) {
            return f.a && f.a("string" === n.type(t) ? n(t) : t), u;
        }, u.getItems = function() {
            return f.g ? f.g() : {};
        }, u.update = function(t) {
            return f.e && f.e({}, !t), u;
        }, u.force = function(t) {
            return f.f && f.f("string" === n.type(t) ? n(t) : t), u;
        }, u.loadAll = function() {
            return f.e && f.e({
                all: !0
            }, !0), u;
        }, u.destroy = function() {
            return n(l.appendScroll).off("." + c, f.e), n(t).off("." + c), f = {}, e;
        }, r(u, l, a, f, c), l.chainable ? a : u;
    }
    var n = t.jQuery || t.Zepto,
        i = 0,
        o = !1;
    n.fn.Lazy = n.fn.lazy = function(t) {
        return new a(this, t);
    }, n.Lazy = n.lazy = function(t, r, i) {
        if (n.isFunction(r) && (i = r, r = []), n.isFunction(i)) {
            t = n.isArray(t) ? t : [t], r = n.isArray(r) ? r : [r];
            for (var o = a.prototype.config, u = o._f || (o._f = {}), l = 0, f = t.length; l < f; l++)(o[t[l]] === e || n.isFunction(o[t[l]])) && (o[t[l]] = i);
            for (var c = 0, s = r.length; c < s; c++) u[r[c]] = t[0];
        }
    }, a.prototype.config = {
        name: "lazy",
        chainable: !0,
        autoDestroy: !0,
        bind: "load",
        threshold: 500,
        visibleOnly: !1,
        appendScroll: t,
        scrollDirection: "both",
        imageBase: null,
        defaultImage: "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",
        placeholder: null,
        delay: -1,
        combined: !1,
        attribute: "data-src",
        srcsetAttribute: "data-srcset",
        sizesAttribute: "data-sizes",
        retinaAttribute: "data-retina",
        loaderAttribute: "data-loader",
        imageBaseAttribute: "data-imagebase",
        removeAttribute: !0,
        handledName: "handled",
        loadedName: "loaded",
        effect: "show",
        effectTime: 0,
        enableThrottle: !0,
        throttle: 250,
        beforeLoad: e,
        afterLoad: e,
        onError: e,
        onFinishedAll: e
    }, n(t).on("load", function() {
        o = !0;
    });
}(window);;