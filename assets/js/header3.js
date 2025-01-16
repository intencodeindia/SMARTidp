/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function($, Drupal, once, drupalSettings) {
    'use strict';
    Drupal.behaviors.CohesionRowForColumns = {
        attach: function(context, settings) {
            const isMatchHeightEnabled = drupalSettings.cohesion.front_end_settings.global_js.matchHeight;
            if (isMatchHeightEnabled) $.each(once('coh-row-match-heights-init', '[data-coh-row-match-heights]', context), function() {
                var targets = $(this).data('cohRowMatchHeights');
                $('> .coh-row-inner', this).cohesionContainerMatchHeights({
                    'targets': targets,
                    'context': context
                });
            });
        }
    };
})(jQuery, Drupal, once, drupalSettings);;;
(function(factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) define(['jquery'], factory);
    else if (typeof module !== 'undefined' && module.exports) module.exports = factory(require('jquery'));
    else factory(jQuery);
})(function($) {
    'use strict';
    var $scrollTo = $.scrollTo = function(target, duration, settings) {
        return $(window).scrollTo(target, duration, settings);
    };
    $scrollTo.defaults = {
        axis: 'xy',
        duration: 0,
        limit: true
    };

    function isWin(elem) {
        return !elem.nodeName || $.inArray(elem.nodeName.toLowerCase(), ['iframe', '#document', 'html', 'body']) !== -1;
    }
    $.fn.scrollTo = function(target, duration, settings) {
        if (typeof duration === 'object') {
            settings = duration;
            duration = 0;
        }
        if (typeof settings === 'function') settings = {
            onAfter: settings
        };
        if (target === 'max') target = 9e9;
        settings = $.extend({}, $scrollTo.defaults, settings);
        duration = duration || settings.duration;
        var queue = settings.queue && settings.axis.length > 1;
        if (queue) duration /= 2;
        settings.offset = both(settings.offset);
        settings.over = both(settings.over);
        return this.each(function() {
            if (target === null) return;
            var win = isWin(this),
                elem = win ? this.contentWindow || window : this,
                $elem = $(elem),
                targ = target,
                attr = {},
                toff;
            switch (typeof targ) {
                case 'number':
                case 'string':
                    if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(targ)) {
                        targ = both(targ);
                        break;
                    }
                    targ = win ? $(targ) : $(targ, elem);
                case 'object':
                    if (targ.length === 0) return;
                    if (targ.is || targ.style) toff = (targ = $(targ)).offset();
            }
            var offset = $.isFunction(settings.offset) && settings.offset(elem, targ) || settings.offset;
            $.each(settings.axis.split(''), function(i, axis) {
                var Pos = axis === 'x' ? 'Left' : 'Top',
                    pos = Pos.toLowerCase(),
                    key = 'scroll' + Pos,
                    prev = $elem[key](),
                    max = $scrollTo.max(elem, axis);
                if (toff) {
                    attr[key] = toff[pos] + (win ? 0 : prev - $elem.offset()[pos]);
                    if (settings.margin) {
                        attr[key] -= parseInt(targ.css('margin' + Pos), 10) || 0;
                        attr[key] -= parseInt(targ.css('border' + Pos + 'Width'), 10) || 0;
                    }
                    attr[key] += offset[pos] || 0;
                    if (settings.over[pos]) attr[key] += targ[axis === 'x' ? 'width' : 'height']() * settings.over[pos];
                } else {
                    var val = targ[pos];
                    attr[key] = val.slice && val.slice(-1) === '%' ? parseFloat(val) / 100 * max : val;
                }
                if (settings.limit && /^\d+$/.test(attr[key])) attr[key] = attr[key] <= 0 ? 0 : Math.min(attr[key], max);
                if (!i && settings.axis.length > 1)
                    if (prev === attr[key]) attr = {};
                    else {
                        if (queue) {
                            animate(settings.onAfterFirst);
                            attr = {};
                        }
                    }
            });
            animate(settings.onAfter);

            function animate(callback) {
                var opts = $.extend({}, settings, {
                    queue: true,
                    duration,
                    complete: callback && function() {
                        callback.call(elem, targ, settings);
                    }
                });
                $elem.animate(attr, opts);
            }
        });
    };
    $scrollTo.max = function(elem, axis) {
        var Dim = axis === 'x' ? 'Width' : 'Height',
            scroll = 'scroll' + Dim;
        if (!isWin(elem)) return elem[scroll] - $(elem)[Dim.toLowerCase()]();
        var size = 'client' + Dim,
            doc = elem.ownerDocument || elem.document,
            html = doc.documentElement,
            body = doc.body;
        return Math.max(html[scroll], body[scroll]) - Math.min(html[size], body[size]);
    };

    function both(val) {
        return $.isFunction(val) || $.isPlainObject(val) ? val : {
            top: val,
            left: val
        };
    }
    $.Tween.propHooks.scrollLeft = $.Tween.propHooks.scrollTop = {
        get: function(t) {
            return $(t.elem)[t.prop]();
        },
        set: function(t) {
            var curr = this.get(t);
            if (t.options.interrupt && t._last && t._last !== curr) return $(t.elem).stop();
            var next = Math.round(t.now);
            if (curr !== next) {
                $(t.elem)[t.prop](next);
                t._last = this.get(t);
            }
        }
    };
    return $scrollTo;
});;
if (!Array.prototype.find) Object.defineProperty(Array.prototype, "find", {
    value: function(predicate) {
        if (this == null) throw new TypeError('"this" is null or not defined');
        var o = Object(this);
        var len = o.length >>> 0;
        if (typeof predicate !== "function") throw new TypeError("predicate must be a function");
        var thisArg = arguments[1];
        var k = 0;
        while (k < len) {
            var kValue = o[k];
            if (predicate.call(thisArg, kValue, k, o)) return kValue;
            k++;
        }
        return undefined;
    },
    configurable: true,
    writable: true
});
(function($, once) {
    "use strict";
    Drupal.behaviors.CohesionLink = {
        attach: function(context) {
            var cmm = new Drupal.CohesionResponsiveBreakpoints();
            $.each(once("coh-js-scroll-to-init", ".coh-js-scroll-to", context), bindScrollTo);
            $.each(once("coh-js-scroll-top-init", ".coh-js-scroll-top", context), bindScrollTop);
            $.each(once("coh-toggle-modifier-init", ".coh-interaction", context), bindModifier);
            $.each(once("coh-animation-init", ".coh-interaction", context), bindAnimation);

            function whichTransitionEvent() {
                var t, el = document.createElement("fakeelement");
                var transitions = {
                    transition: "transitionend",
                    OTransition: "oTransitionEnd",
                    MozTransition: "transitionend",
                    WebkitTransition: "webkitTransitionEnd"
                };
                for (t in transitions)
                    if (el.style[t] !== undefined) return transitions[t];
            }

            function getComponentClass($el) {
                if (!$el || !$el.length) return undefined;
                for (var i = 0; i < $el.prop("classList").length; i++)
                    if ($el.prop("classList")[i].match(/coh-component-instance-[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/)) return $el.prop("classList")[i];
            }

            function bindScrollTo() {
                var $this = $(this);
                $this.on("click", function(e) {
                    e.preventDefault();
                    var defaultSettings = {
                        duration: 450,
                        offset: 0
                    };
                    var scrollTarget = $this.data("cohScrollTo");
                    var scrollDuration = $this.data("cohScrollDuration");
                    var scrollOffset = function() {
                        var offset = $this.data("cohScrollOffset");
                        if (typeof offset === "string") {
                            var $el = $(offset);
                            if ($el.length) return 0 - $el.height();
                            return 0;
                        }
                        return offset * -1;
                    };
                    var scrollSettings = {
                        duration: scrollDuration,
                        offset: scrollOffset()
                    };
                    var settings = $.extend(defaultSettings, scrollSettings);
                    $("html, body").scrollTo(scrollTarget, settings);
                });
            }

            function bindScrollTop() {
                $(this).on("click", function(e) {
                    e.preventDefault();
                    $("html, body").scrollTo(0, 450);
                });
            }

            function bindModifier() {
                var settings = $(this).data("interactionModifiers");
                if (!settings || settings[0].modifierType === "") return;
                $(this).on("click.coh.modifier", function(e) {
                    var $this = $(this);
                    e.preventDefault();
                    var modifier_types = {
                        "add-modifier": "addClass",
                        "remove-modifier": "removeClass",
                        "toggle-modifier": "toggleClass",
                        "toggle-modifier-accessible-collapsed": "toggleClass",
                        "toggle-modifier-accessible-expanded": "toggleClass"
                    };
                    for (var i = 0; i < settings.length; i++) {
                        if (!settings[i].modifierName) {
                            console.warn('Link element is set to toggle a modifier class on a target element but no "Modifier class name" was specified. You must specify a "Modifier class name".');
                            return;
                        }
                        var modifier_name = settings[i].modifierName.replace(/^\./, "");
                        var interaction_target = settings[i].interactionTarget;
                        var modifier_type = settings[i].modifierType;
                        var transitionEvent = whichTransitionEvent();
                        var $interaction_scope;
                        var $target;
                        if (settings[i].interactionScope !== "this" && !interaction_target) {
                            console.warn('Link element is set to "' + modifier_type + '" but does not have a "Target (jQuery selector)" specified. You must specify a "Target (jQuery selector)" or set "Scope to" to "This element"');
                            return;
                        }
                        $interaction_scope = getScope($this, settings[i].interactionScope, settings[i].interactionParent);
                        $target = getTarget($this, interaction_target, $interaction_scope, settings[i].interaction_scope);
                        if ($target.length) {
                            $this.data("clickedModifier", !$this.data.clickedModifier);
                            $target[modifier_types[modifier_type]](modifier_name).addClass("coh-transition");
                            $target.on(transitionEvent, function() {
                                $(this).removeClass("coh-transition").off(transitionEvent);
                            });
                            if (modifier_type.indexOf("toggle-modifier-accessible-") === 0) $(this).attr("aria-expanded", $(this).attr("aria-expanded") === "true" ? "false" : "true");
                            Drupal.attachBehaviors($target[0]);
                        }
                    }
                });
            }

            function cohCheckDisplayResize(mm) {
                var currentSettings = mm.cohesion.settings.breakpoints[mm.cohesion.key] || {};
                var animSettings = currentSettings.linkAnimation || currentSettings.buttonAnimation || [];
                mm.cohesion.settings.element.data("previousBreakPointAnimSettings").forEach(function(prevSetting) {
                    var matchedSetting = animSettings.find(function(setting) {
                        return prevSetting.animationTarget === setting.animationTarget;
                    });
                    if (!matchedSetting && prevSetting.displayReset !== false)
                        if (mm.cohesion.settings.element.data("clickedAnimation")) {
                            runAnimation(mm.cohesion.settings.element, prevSetting, true);
                            if (mm.cohesion.settings.element.data("clickedModifier")) mm.cohesion.settings.element.trigger("click.coh.modifier");
                        } else {
                            if (prevSetting.animationTarget) {
                                var $interaction_scope = getScope(mm.cohesion.settings.element, prevSetting.animationScope, prevSetting.animationParent);
                                var $target = getTarget(mm.cohesion.settings.element, prevSetting.animationTarget, $interaction_scope, prevSetting.animationScope);
                                $target.css("display", "");
                            }
                        }
                });
                mm.cohesion.settings.element.data("previousBreakPointAnimSettings", animSettings || []);
            }

            function bindAnimation() {
                var $this = $(this),
                    data = $this.data("cohSettings"),
                    settings = {
                        element: $this,
                        breakpoints: {}
                    },
                    key;
                $this.data("previousBreakPointAnimSettings", []);
                for (var i = 0; i < cmm.breakpoints.length; i++) {
                    key = cmm.breakpoints[i].key;
                    settings.breakpoints[key] = {};
                    if (typeof data[key] !== "undefined" && !$.isEmptyObject(data[key])) {
                        settings.breakpoints[key] = data[key];
                        var previous = data[key];
                    } else {
                        if (typeof cmm.breakpoints[i - 1] !== "undefined" && typeof previous !== "undefined") settings.breakpoints[key] = previous;
                    }
                }
                cmm.addListeners(settings, cohCheckDisplayResize);
                $this.on("click.coh.animation", function(e) {
                    e.preventDefault();
                    var currentSettings = settings.breakpoints[cmm.getCurrentBreakpoint().key];
                    currentSettings = currentSettings.linkAnimation || currentSettings.buttonAnimation;
                    if (currentSettings)
                        for (var i = 0; i < currentSettings.length; i++) {
                            var currentSetting = currentSettings[i];
                            if (currentSetting.animationType !== "none") runAnimation($this, currentSetting);
                        }
                });
            }

            function runAnimation($this, settings, removeDisplay) {
                var $interaction_scope;
                var $target, origin;
                $interaction_scope = getScope($this, settings.animationScope, settings.animationParent);
                $target = getTarget($this, settings.animationTarget, $interaction_scope, settings.animationScope);
                if ($target.length) {
                    $this.data("clickedAnimation", !$this.data("clickedAnimation"));
                    if (settings.animationOrigin) origin = settings.animationOrigin.split(",");
                    $.each($($target), function() {
                        var $that = $(this);
                        $that.toggle({
                            effect: settings.animationType,
                            direction: settings.animationDirection,
                            distance: settings.animationDistance,
                            pieces: settings.animationPieces,
                            percent: settings.animationScale,
                            origin,
                            size: settings.animationFoldHeight,
                            horizFirst: settings.animationHorizontalFirst,
                            times: settings.animationIterations,
                            easing: settings.animationEasing,
                            duration: removeDisplay ? 0 : settings.animationDuration,
                            complete: function() {
                                Drupal.attachBehaviors($(this)[0]);
                                if (removeDisplay) $that.css("display", "");
                            }
                        });
                    });
                }
            }

            function getScope($this, scope, parent) {
                var $interaction_scope;
                switch (scope) {
                    case "this":
                        $interaction_scope = $this;
                        break;
                    case "parent":
                        $interaction_scope = $this.closest(parent);
                        break;
                    case "component":
                        var componentClass = getComponentClass($this.closest(".coh-component"));
                        if (componentClass) $interaction_scope = $("." + componentClass);
                        else $interaction_scope = $(document);
                        break;
                    default:
                        $interaction_scope = $(document);
                        break;
                }
                return $interaction_scope;
            }

            function getTarget($this, interaction_target, $interaction_scope, interaction_scope) {
                var $target = $();
                if (interaction_scope === "this" && !interaction_target) $target = $this;
                else {
                    if (!interaction_target) {
                        console.warn('Element does not have a "Target (jQuery selector)" specified. You must specify a "Target (jQuery selector)" or set "Scope to" to "This element".');
                        return $target;
                    }
                }
                if (!$target.length) $target = $(interaction_target, $interaction_scope);
                if (!$target.length) $target = $interaction_scope.filter(interaction_target);
                if (!$target.length) $target = $interaction_scope.find($(interaction_target));
                if (interaction_target.indexOf(".") !== 0) {
                    if (!$target.length) $target = $interaction_scope.filter("." + interaction_target);
                    if (!$target.length) $target = $interaction_scope.find($("." + interaction_target));
                }
                if (!$target.length) console.warn('Element has "Target (jQuery selector)" set to "' + interaction_target + '", but no matching element was found on the page.');
                return $target;
            }
        }
    };
})(jQuery, once);;
(function($, Drupal, once) {
    Drupal.behaviors.CohesionScroll = {
        attach: function(context) {
            if (drupalSettings.cohesion.add_animation_classes === 'ENABLED') {
                function getWindowOffset() {
                    return window.pageYOffset || document.documentElement.scrollTop;
                }
                var previous = getWindowOffset();
                $(once('cohWindowScroll', 'body', context)).each(function() {
                    var $body = $(this);
                    var timeout, flag = false;
                    if (getWindowOffset() > 0) $body.addClass('is-scrolled');
                    $(window).scroll(function() {
                        var current = getWindowOffset();
                        var state = current > previous;
                        if (!flag) {
                            flag = true;
                            $body.addClass('is-scrolling');
                        }
                        if (current !== previous) $body.addClass('is-scrolled').toggleClass('is-scrolled-down', state).toggleClass('is-scrolled-up', !state);
                        previous = current <= 0 ? 0 : current;
                        clearTimeout(timeout);
                        timeout = setTimeout(function() {
                            $body.removeClass('is-scrolling');
                            flag = false;
                        }, 200);
                        if (previous === 0) $body.removeClass('is-scrolled');
                    });
                });
            }
        }
    };
})(jQuery, Drupal, once, drupalSettings);;
(function($, Drupal, drupalSettings) {
    "use strict";
    Drupal.CohesionResponsiveBreakpoints = function(settings) {
        this.constants = {
            'desktop': 'desktop-first',
            'mobile': 'mobile-first',
            'widthType': {
                'fluid': 'fluid',
                'fixed': 'fixed'
            },
            'mediaQuery': {
                'all': 'all',
                'max': 'max-width',
                'min': 'min-width'
            }
        };
        this.settings = settings || drupalSettings.cohesion.responsive_grid_settings;
        this.breakpoints = [];
        this.listeners = {};
        this.init = function() {
            this.sortBreakpoints();
        };
        this.getBreakpointMediaQuery = function(breakpoint) {
            if (this.getGridType() === this.constants.mobile)
                if (breakpoint === this.getFirstBreakpoint()) return this.constants.mediaQuery.all;
                else if (typeof this.getBreakpoints()[breakpoint] !== 'undefined') return '(min-width: ' + this.getBreakpointWidth(breakpoint) + 'px)';
            else return '(min-width: ' + breakpoint + 'px)';
            if (this.getGridType() === this.constants.desktop) {
                var breakpointIndex = this.getBreakpointIndex(breakpoint);
                var minWidth = 0;
                var breakpointMaxWidth = false;
                if (breakpoint !== this.getLastBreakpoint()) minWidth = this.getBreakpointWidth(this.breakpoints[breakpointIndex].key);
                if (breakpoint !== this.getFirstBreakpoint()) breakpointMaxWidth = this.getBreakpointWidth(this.breakpoints[breakpointIndex - 1].key) - 1;
                var mediaQuery = '(min-width: ' + minWidth + 'px)';
                if (breakpointMaxWidth) mediaQuery = mediaQuery + ' and (max-width: ' + breakpointMaxWidth + 'px)';
                return mediaQuery;
            }
        };
        this.getFirstBreakpoint = function() {
            return this.breakpoints[0].key;
        };
        this.getLastBreakpoint = function() {
            return this.breakpoints[this.breakpoints.length - 1].key;
        };
        this.getGridType = function() {
            return this.settings.gridType;
        };
        this.isMobileFirst = function() {
            return this.settings.gridType === this.constants.mobile;
        };
        this.isDesktopFirst = function() {
            return this.settings.gridType === this.constants.desktop;
        };
        this.getBreakpointType = function(breakpoint) {
            return this.settings.breakpoints[breakpoint].widthType;
        };
        this.getBreakpointWidth = function(breakpoint) {
            return this.settings.breakpoints[breakpoint].width;
        };
        this.getBreakpointMediaWidth = function(breakpoint) {
            if (this.getGridType() === this.constants.mobile)
                if (breakpoint === this.getFirstBreakpoint()) return 0;
                else if (typeof this.getBreakpoints()[breakpoint] !== 'undefined') return this.getBreakpointWidth(breakpoint);
            else return breakpoint;
            if (this.getGridType() === this.constants.desktop) {
                var breakpointIndex = this.getBreakpointIndex(breakpoint);
                var minWidth = 0;
                var breakpointMaxWidth = false;
                if (typeof this.breakpoints[breakpointIndex - 1] !== 'undefined') minWidth = this.getBreakpointWidth(this.breakpoints[breakpointIndex].key);
                if (breakpoint !== this.getFirstBreakpoint()) breakpointMaxWidth = this.getBreakpointWidth(this.breakpoints[breakpointIndex - 1].key) - 1;
                var mediaQuery = '(min-width: ' + minWidth + 'px)';
                if (breakpointMaxWidth) mediaQuery = mediaQuery + ' and (max-width: ' + breakpointMaxWidth + 'px)';
                return breakpointMaxWidth;
            }
        };
        this.getBreakpointOuterGutter = function(breakpoint) {
            return this.settings.breakpoints[breakpoint].outerGutter;
        };
        this.getBreakpointIndex = function(breakpoint) {
            for (var i = 0; i < this.breakpoints.length; i++)
                if (this.breakpoints[i].key === breakpoint) return i;
        };
        this.getBreakpoints = function() {
            return this.settings.breakpoints;
        };
        this.getBreakpointSettings = function(breakpoint) {
            return this.settings.breakpoints[breakpoint];
        };
        this.getCurrentBreakpoint = function() {
            var match = false;
            for (var i = 0; i < this.breakpoints.length; i++) {
                if (i === 0) match = this.breakpoints[i];
                var m = window.matchMedia(this.getBreakpointMediaQuery(this.breakpoints[i].key));
                if (m.matches) match = this.breakpoints[i];
            }
            return match;
        };
        this.getMediaQueryListEventObject = function(mql) {
            return typeof mql.target !== 'undefined' ? mql.target : mql;
        };
        this.getMql = function(mql) {
            return this.getMediaQueryListEventObject(mql);
        };
        this.addListener = function(breakpoint, cb) {};
        this.handleListener = function(mql, key, callback, callbackSettings) {
            var _this = this;
            if (!mql.matches && this.isDesktopFirst()) return;
            if (!mql.matches && this.isMobileFirst()) {
                key = _this.getCurrentBreakpoint().key;
                mql = _this.listeners[key];
            }
            mql = _this.getMql(mql);
            mql.cohesion = {
                'key': key,
                'settings': callbackSettings
            };
            return callback(mql);
        };
        this.addListeners = function(settings, callback) {
            var _this = this;
            var i, breakpointKey, mq, match;
            for (i = 0; i < _this.breakpoints.length; i++) {
                breakpointKey = _this.breakpoints[i].key;
                mq = _this.getBreakpointMediaQuery(breakpointKey);
                var listener;
                listener = window.matchMedia(mq);
                _this.listeners[breakpointKey] = listener;
                listener.addListener(this.handleListener.bind(this, listener, breakpointKey, callback, settings));
                if (listener.matches) {
                    match = listener;
                    match.key = breakpointKey;
                }
            }
            if (match) this.handleListener(match, match.key, callback, settings);
        };
        this.sortBreakpoints = function() {
            var _this = this;
            var i = 0;
            for (var k in _this.settings.breakpoints)
                if (_this.settings.breakpoints.hasOwnProperty(k)) {
                    _this.breakpoints.push(_this.settings.breakpoints[k]);
                    _this.breakpoints[i].key = k;
                    i++;
                }
            if (_this.getGridType() === _this.constants.mobile) _this.breakpoints.sort(function(a, b) {
                return a.width - b.width;
            });
            else if (_this.getGridType() === _this.constants.desktop) _this.breakpoints.sort(function(a, b) {
                return b.width - a.width;
            });
            else throw 'Mobile or Desktop first must be set in Website settings > Responsive grid settings';
        };
        this.init();
    };
})(jQuery, Drupal, drupalSettings);;
(function(global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() : typeof define === 'function' && define.amd ? define(factory) : (global.PointerEventsPolyfill = factory());
}(this, function() {
    'use strict';
    var MOUSE_PROPS = ['bubbles', 'cancelable', 'view', 'detail', 'screenX', 'screenY', 'clientX', 'clientY', 'ctrlKey', 'altKey', 'shiftKey', 'metaKey', 'button', 'relatedTarget', 'pageX', 'pageY'];
    var MOUSE_DEFAULTS = [false, false, null, null, 0, 0, 0, 0, false, false, false, false, 0, null, 0, 0];

    function PointerEvent(inType, inDict) {
        inDict = inDict || Object.create(null);
        var e = document.createEvent('Event');
        e.initEvent(inType, inDict.bubbles || false, inDict.cancelable || false);
        for (var i = 2, p; i < MOUSE_PROPS.length; i++) {
            p = MOUSE_PROPS[i];
            e[p] = inDict[p] || MOUSE_DEFAULTS[i];
        }
        e.buttons = inDict.buttons || 0;
        var pressure = 0;
        if (inDict.pressure && e.buttons) pressure = inDict.pressure;
        else pressure = e.buttons ? 0.5 : 0;
        e.x = e.clientX;
        e.y = e.clientY;
        e.pointerId = inDict.pointerId || 0;
        e.width = inDict.width || 0;
        e.height = inDict.height || 0;
        e.pressure = pressure;
        e.tiltX = inDict.tiltX || 0;
        e.tiltY = inDict.tiltY || 0;
        e.twist = inDict.twist || 0;
        e.tangentialPressure = inDict.tangentialPressure || 0;
        e.pointerType = inDict.pointerType || '';
        e.hwTimestamp = inDict.hwTimestamp || 0;
        e.isPrimary = inDict.isPrimary || false;
        return e;
    }
    var USE_MAP = window.Map && window.Map.prototype.forEach;
    var PointerMap = USE_MAP ? Map : SparseArrayMap;

    function SparseArrayMap() {
        this.array = [];
        this.size = 0;
    }
    SparseArrayMap.prototype = {
        set: function(k, v) {
            if (v === undefined) return this.delete(k);
            if (!this.has(k)) this.size++;
            this.array[k] = v;
        },
        has: function(k) {
            return this.array[k] !== undefined;
        },
        delete: function(k) {
            if (this.has(k)) {
                delete this.array[k];
                this.size--;
            }
        },
        get: function(k) {
            return this.array[k];
        },
        clear: function() {
            this.array.length = 0;
            this.size = 0;
        },
        forEach: function(callback, thisArg) {
            return this.array.forEach(function(v, k) {
                callback.call(thisArg, v, k, this);
            }, this);
        }
    };
    var CLONE_PROPS = ['bubbles', 'cancelable', 'view', 'detail', 'screenX', 'screenY', 'clientX', 'clientY', 'ctrlKey', 'altKey', 'shiftKey', 'metaKey', 'button', 'relatedTarget', 'buttons', 'pointerId', 'width', 'height', 'pressure', 'tiltX', 'tiltY', 'pointerType', 'hwTimestamp', 'isPrimary', 'type', 'target', 'currentTarget', 'which', 'pageX', 'pageY', 'timeStamp'];
    var CLONE_DEFAULTS = [false, false, null, null, 0, 0, 0, 0, false, false, false, false, 0, null, 0, 0, 0, 0, 0, 0, 0, '', 0, false, '', null, null, 0, 0, 0, 0];
    var BOUNDARY_EVENTS = {
        'pointerover': 1,
        'pointerout': 1,
        'pointerenter': 1,
        'pointerleave': 1
    };
    var HAS_SVG_INSTANCE = (typeof SVGElementInstance !== 'undefined');
    var dispatcher = {
        pointermap: new PointerMap(),
        eventMap: Object.create(null),
        captureInfo: Object.create(null),
        eventSources: Object.create(null),
        eventSourceList: [],
        registerSource: function(name, source) {
            var s = source;
            var newEvents = s.events;
            if (newEvents) {
                newEvents.forEach(function(e) {
                    if (s[e]) this.eventMap[e] = s[e].bind(s);
                }, this);
                this.eventSources[name] = s;
                this.eventSourceList.push(s);
            }
        },
        register: function(element) {
            var l = this.eventSourceList.length;
            for (var i = 0, es;
                (i < l) && (es = this.eventSourceList[i]); i++) es.register.call(es, element);
        },
        unregister: function(element) {
            var l = this.eventSourceList.length;
            for (var i = 0, es;
                (i < l) && (es = this.eventSourceList[i]); i++) es.unregister.call(es, element);
        },
        contains: function(container, contained) {
            try {
                return container.contains(contained);
            } catch (ex) {
                return false;
            }
        },
        down: function(inEvent) {
            inEvent.bubbles = true;
            this.fireEvent('pointerdown', inEvent);
        },
        move: function(inEvent) {
            inEvent.bubbles = true;
            this.fireEvent('pointermove', inEvent);
        },
        up: function(inEvent) {
            inEvent.bubbles = true;
            this.fireEvent('pointerup', inEvent);
        },
        enter: function(inEvent) {
            inEvent.bubbles = false;
            this.fireEvent('pointerenter', inEvent);
        },
        leave: function(inEvent) {
            inEvent.bubbles = false;
            this.fireEvent('pointerleave', inEvent);
        },
        over: function(inEvent) {
            inEvent.bubbles = true;
            this.fireEvent('pointerover', inEvent);
        },
        out: function(inEvent) {
            inEvent.bubbles = true;
            this.fireEvent('pointerout', inEvent);
        },
        cancel: function(inEvent) {
            inEvent.bubbles = true;
            this.fireEvent('pointercancel', inEvent);
        },
        leaveOut: function(event) {
            this.out(event);
            this.propagate(event, this.leave, false);
        },
        enterOver: function(event) {
            this.over(event);
            this.propagate(event, this.enter, true);
        },
        eventHandler: function(inEvent) {
            if (inEvent._handledByPE) return;
            var type = inEvent.type;
            var fn = this.eventMap && this.eventMap[type];
            if (fn) fn(inEvent);
            inEvent._handledByPE = true;
        },
        listen: function(target, events) {
            events.forEach(function(e) {
                this.addEvent(target, e);
            }, this);
        },
        unlisten: function(target, events) {
            events.forEach(function(e) {
                this.removeEvent(target, e);
            }, this);
        },
        addEvent: function(target, eventName) {
            target.addEventListener(eventName, this.boundHandler);
        },
        removeEvent: function(target, eventName) {
            target.removeEventListener(eventName, this.boundHandler);
        },
        makeEvent: function(inType, inEvent) {
            if (this.captureInfo[inEvent.pointerId]) inEvent.relatedTarget = null;
            var e = new PointerEvent(inType, inEvent);
            if (inEvent.preventDefault) e.preventDefault = inEvent.preventDefault;
            e._target = e._target || inEvent.target;
            return e;
        },
        fireEvent: function(inType, inEvent) {
            var e = this.makeEvent(inType, inEvent);
            return this.dispatchEvent(e);
        },
        cloneEvent: function(inEvent) {
            var eventCopy = Object.create(null);
            var p;
            for (var i = 0; i < CLONE_PROPS.length; i++) {
                p = CLONE_PROPS[i];
                eventCopy[p] = inEvent[p] || CLONE_DEFAULTS[i];
                if (HAS_SVG_INSTANCE && (p === 'target' || p === 'relatedTarget'))
                    if (eventCopy[p] instanceof SVGElementInstance) eventCopy[p] = eventCopy[p].correspondingUseElement;
            }
            if (inEvent.preventDefault) eventCopy.preventDefault = function() {
                inEvent.preventDefault();
            };
            return eventCopy;
        },
        getTarget: function(inEvent) {
            var capture = this.captureInfo[inEvent.pointerId];
            if (!capture) return inEvent._target;
            if (inEvent._target === capture || !(inEvent.type in BOUNDARY_EVENTS)) return capture;
        },
        propagate: function(event, fn, propagateDown) {
            var target = event.target;
            var targets = [];
            while (target !== document && !target.contains(event.relatedTarget)) {
                targets.push(target);
                target = target.parentNode;
                if (!target) return;
            }
            if (propagateDown) targets.reverse();
            targets.forEach(function(target) {
                event.target = target;
                fn.call(this, event);
            }, this);
        },
        setCapture: function(inPointerId, inTarget, skipDispatch) {
            if (this.captureInfo[inPointerId]) this.releaseCapture(inPointerId, skipDispatch);
            this.captureInfo[inPointerId] = inTarget;
            this.implicitRelease = this.releaseCapture.bind(this, inPointerId, skipDispatch);
            document.addEventListener('pointerup', this.implicitRelease);
            document.addEventListener('pointercancel', this.implicitRelease);
            var e = new PointerEvent('gotpointercapture');
            e.pointerId = inPointerId;
            e._target = inTarget;
            if (!skipDispatch) this.asyncDispatchEvent(e);
        },
        releaseCapture: function(inPointerId, skipDispatch) {
            var t = this.captureInfo[inPointerId];
            if (!t) return;
            this.captureInfo[inPointerId] = undefined;
            document.removeEventListener('pointerup', this.implicitRelease);
            document.removeEventListener('pointercancel', this.implicitRelease);
            var e = new PointerEvent('lostpointercapture');
            e.pointerId = inPointerId;
            e._target = t;
            if (!skipDispatch) this.asyncDispatchEvent(e);
        },
        dispatchEvent: function(inEvent) {
            var t = this.getTarget(inEvent);
            if (t) return t.dispatchEvent(inEvent);
        },
        asyncDispatchEvent: function(inEvent) {
            requestAnimationFrame(this.dispatchEvent.bind(this, inEvent));
        }
    };
    dispatcher.boundHandler = dispatcher.eventHandler.bind(dispatcher);
    var targeting = {
        shadow: function(inEl) {
            if (inEl) return inEl.shadowRoot || inEl.webkitShadowRoot;
        },
        canTarget: function(shadow) {
            return shadow && Boolean(shadow.elementFromPoint);
        },
        targetingShadow: function(inEl) {
            var s = this.shadow(inEl);
            if (this.canTarget(s)) return s;
        },
        olderShadow: function(shadow) {
            var os = shadow.olderShadowRoot;
            if (!os) {
                var se = shadow.querySelector('shadow');
                if (se) os = se.olderShadowRoot;
            }
            return os;
        },
        allShadows: function(element) {
            var shadows = [];
            var s = this.shadow(element);
            while (s) {
                shadows.push(s);
                s = this.olderShadow(s);
            }
            return shadows;
        },
        searchRoot: function(inRoot, x, y) {
            if (inRoot) {
                var t = inRoot.elementFromPoint(x, y);
                var st, sr;
                sr = this.targetingShadow(t);
                while (sr) {
                    st = sr.elementFromPoint(x, y);
                    if (!st) sr = this.olderShadow(sr);
                    else {
                        var ssr = this.targetingShadow(st);
                        return this.searchRoot(ssr, x, y) || st;
                    }
                }
                return t;
            }
        },
        owner: function(element) {
            var s = element;
            while (s.parentNode) s = s.parentNode;
            if (s.nodeType !== Node.DOCUMENT_NODE && s.nodeType !== Node.DOCUMENT_FRAGMENT_NODE) s = document;
            return s;
        },
        findTarget: function(inEvent) {
            var x = inEvent.clientX;
            var y = inEvent.clientY;
            var s = this.owner(inEvent.target);
            if (!s.elementFromPoint(x, y)) s = document;
            return this.searchRoot(s, x, y);
        }
    };
    var forEach = Array.prototype.forEach.call.bind(Array.prototype.forEach);
    var map = Array.prototype.map.call.bind(Array.prototype.map);
    var toArray = Array.prototype.slice.call.bind(Array.prototype.slice);
    var filter = Array.prototype.filter.call.bind(Array.prototype.filter);
    var MO = window.MutationObserver || window.WebKitMutationObserver;
    var SELECTOR = '[touch-action]';
    var OBSERVER_INIT = {
        subtree: true,
        childList: true,
        attributes: true,
        attributeOldValue: true,
        attributeFilter: ['touch-action']
    };

    function Installer(add, remove, changed, binder) {
        this.addCallback = add.bind(binder);
        this.removeCallback = remove.bind(binder);
        this.changedCallback = changed.bind(binder);
        if (MO) this.observer = new MO(this.mutationWatcher.bind(this));
    }
    Installer.prototype = {
        watchSubtree: function(target) {
            if (this.observer && targeting.canTarget(target)) this.observer.observe(target, OBSERVER_INIT);
        },
        enableOnSubtree: function(target) {
            this.watchSubtree(target);
            if (target === document && document.readyState !== 'complete') this.installOnLoad();
            else this.installNewSubtree(target);
        },
        installNewSubtree: function(target) {
            forEach(this.findElements(target), this.addElement, this);
        },
        findElements: function(target) {
            if (target.querySelectorAll) return target.querySelectorAll(SELECTOR);
            return [];
        },
        removeElement: function(el) {
            this.removeCallback(el);
        },
        addElement: function(el) {
            this.addCallback(el);
        },
        elementChanged: function(el, oldValue) {
            this.changedCallback(el, oldValue);
        },
        concatLists: function(accum, list) {
            return accum.concat(toArray(list));
        },
        installOnLoad: function() {
            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') this.installNewSubtree(document);
            }.bind(this));
        },
        isElement: function(n) {
            return n.nodeType === Node.ELEMENT_NODE;
        },
        flattenMutationTree: function(inNodes) {
            var tree = map(inNodes, this.findElements, this);
            tree.push(filter(inNodes, this.isElement));
            return tree.reduce(this.concatLists, []);
        },
        mutationWatcher: function(mutations) {
            mutations.forEach(this.mutationHandler, this);
        },
        mutationHandler: function(m) {
            if (m.type === 'childList') {
                var added = this.flattenMutationTree(m.addedNodes);
                added.forEach(this.addElement, this);
                var removed = this.flattenMutationTree(m.removedNodes);
                removed.forEach(this.removeElement, this);
            } else {
                if (m.type === 'attributes') this.elementChanged(m.target, m.oldValue);
            }
        }
    };

    function shadowSelector(v) {
        return 'body /shadow-deep/ ' + selector(v);
    }

    function selector(v) {
        return '[touch-action="' + v + '"]';
    }

    function rule(v) {
        return '{ -ms-touch-action: ' + v + '; touch-action: ' + v + '; }';
    }
    var attrib2css = ['none', 'auto', 'pan-x', 'pan-y', {
        rule: 'pan-x pan-y',
        selectors: ['pan-x pan-y', 'pan-y pan-x']
    }];
    var styles = '';
    var hasNativePE = window.PointerEvent || window.MSPointerEvent;
    var hasShadowRoot = !window.ShadowDOMPolyfill && document.head.createShadowRoot;

    function applyAttributeStyles() {
        if (hasNativePE) {
            attrib2css.forEach(function(r) {
                if (String(r) === r) {
                    styles += selector(r) + rule(r) + '\n';
                    if (hasShadowRoot) styles += shadowSelector(r) + rule(r) + '\n';
                } else {
                    styles += r.selectors.map(selector) + rule(r.rule) + '\n';
                    if (hasShadowRoot) styles += r.selectors.map(shadowSelector) + rule(r.rule) + '\n';
                }
            });
            var el = document.createElement('style');
            el.textContent = styles;
            document.head.appendChild(el);
        }
    }
    var pointermap = dispatcher.pointermap;
    var DEDUP_DIST = 25;
    var BUTTON_TO_BUTTONS = [1, 4, 2, 8, 16];
    var HAS_BUTTONS = false;
    try {
        HAS_BUTTONS = new MouseEvent('test', {
            buttons: 1
        }).buttons === 1;
    } catch (e) {}
    var mouseEvents = {
        POINTER_ID: 1,
        POINTER_TYPE: 'mouse',
        events: ['mousedown', 'mousemove', 'mouseup', 'mouseover', 'mouseout'],
        register: function(target) {
            dispatcher.listen(target, this.events);
        },
        unregister: function(target) {
            dispatcher.unlisten(target, this.events);
        },
        lastTouches: [],
        isEventSimulatedFromTouch: function(inEvent) {
            var lts = this.lastTouches;
            var x = inEvent.clientX;
            var y = inEvent.clientY;
            for (var i = 0, l = lts.length, t; i < l && (t = lts[i]); i++) {
                var dx = Math.abs(x - t.x);
                var dy = Math.abs(y - t.y);
                if (dx <= DEDUP_DIST && dy <= DEDUP_DIST) return true;
            }
        },
        prepareEvent: function(inEvent) {
            var e = dispatcher.cloneEvent(inEvent);
            var pd = e.preventDefault;
            e.preventDefault = function() {
                inEvent.preventDefault();
                pd();
            };
            e.pointerId = this.POINTER_ID;
            e.isPrimary = true;
            e.pointerType = this.POINTER_TYPE;
            return e;
        },
        prepareButtonsForMove: function(e, inEvent) {
            var p = pointermap.get(this.POINTER_ID);
            if (inEvent.which === 0 || !p) e.buttons = 0;
            else e.buttons = p.buttons;
            inEvent.buttons = e.buttons;
        },
        mousedown: function(inEvent) {
            if (!this.isEventSimulatedFromTouch(inEvent)) {
                var p = pointermap.get(this.POINTER_ID);
                var e = this.prepareEvent(inEvent);
                if (!HAS_BUTTONS) {
                    e.buttons = BUTTON_TO_BUTTONS[e.button];
                    if (p) e.buttons |= p.buttons;
                    inEvent.buttons = e.buttons;
                }
                pointermap.set(this.POINTER_ID, inEvent);
                if (!p || p.buttons === 0) dispatcher.down(e);
                else dispatcher.move(e);
            }
        },
        mousemove: function(inEvent) {
            if (!this.isEventSimulatedFromTouch(inEvent)) {
                var e = this.prepareEvent(inEvent);
                if (!HAS_BUTTONS) this.prepareButtonsForMove(e, inEvent);
                e.button = -1;
                pointermap.set(this.POINTER_ID, inEvent);
                dispatcher.move(e);
            }
        },
        mouseup: function(inEvent) {
            if (!this.isEventSimulatedFromTouch(inEvent)) {
                var p = pointermap.get(this.POINTER_ID);
                var e = this.prepareEvent(inEvent);
                if (!HAS_BUTTONS) {
                    var up = BUTTON_TO_BUTTONS[e.button];
                    e.buttons = p ? p.buttons & ~up : 0;
                    inEvent.buttons = e.buttons;
                }
                pointermap.set(this.POINTER_ID, inEvent);
                e.buttons &= ~BUTTON_TO_BUTTONS[e.button];
                if (e.buttons === 0) dispatcher.up(e);
                else dispatcher.move(e);
            }
        },
        mouseover: function(inEvent) {
            if (!this.isEventSimulatedFromTouch(inEvent)) {
                var e = this.prepareEvent(inEvent);
                if (!HAS_BUTTONS) this.prepareButtonsForMove(e, inEvent);
                e.button = -1;
                pointermap.set(this.POINTER_ID, inEvent);
                dispatcher.enterOver(e);
            }
        },
        mouseout: function(inEvent) {
            if (!this.isEventSimulatedFromTouch(inEvent)) {
                var e = this.prepareEvent(inEvent);
                if (!HAS_BUTTONS) this.prepareButtonsForMove(e, inEvent);
                e.button = -1;
                dispatcher.leaveOut(e);
            }
        },
        cancel: function(inEvent) {
            var e = this.prepareEvent(inEvent);
            dispatcher.cancel(e);
            this.deactivateMouse();
        },
        deactivateMouse: function() {
            pointermap.delete(this.POINTER_ID);
        }
    };
    var captureInfo = dispatcher.captureInfo;
    var findTarget = targeting.findTarget.bind(targeting);
    var allShadows = targeting.allShadows.bind(targeting);
    var pointermap$1 = dispatcher.pointermap;
    var DEDUP_TIMEOUT = 2500;
    var CLICK_COUNT_TIMEOUT = 200;
    var ATTRIB = 'touch-action';
    var INSTALLER;
    var touchEvents = {
        events: ['touchstart', 'touchmove', 'touchend', 'touchcancel'],
        register: function(target) {
            INSTALLER.enableOnSubtree(target);
        },
        unregister: function() {},
        elementAdded: function(el) {
            var a = el.getAttribute(ATTRIB);
            var st = this.touchActionToScrollType(a);
            if (st) {
                el._scrollType = st;
                dispatcher.listen(el, this.events);
                allShadows(el).forEach(function(s) {
                    s._scrollType = st;
                    dispatcher.listen(s, this.events);
                }, this);
            }
        },
        elementRemoved: function(el) {
            el._scrollType = undefined;
            dispatcher.unlisten(el, this.events);
            allShadows(el).forEach(function(s) {
                s._scrollType = undefined;
                dispatcher.unlisten(s, this.events);
            }, this);
        },
        elementChanged: function(el, oldValue) {
            var a = el.getAttribute(ATTRIB);
            var st = this.touchActionToScrollType(a);
            var oldSt = this.touchActionToScrollType(oldValue);
            if (st && oldSt) {
                el._scrollType = st;
                allShadows(el).forEach(function(s) {
                    s._scrollType = st;
                }, this);
            } else if (oldSt) this.elementRemoved(el);
            else {
                if (st) this.elementAdded(el);
            }
        },
        scrollTypes: {
            EMITTER: 'none',
            XSCROLLER: 'pan-x',
            YSCROLLER: 'pan-y',
            SCROLLER: /^(?:pan-x pan-y)|(?:pan-y pan-x)|auto$/
        },
        touchActionToScrollType: function(touchAction) {
            var t = touchAction;
            var st = this.scrollTypes;
            if (t === 'none') return 'none';
            else if (t === st.XSCROLLER) return 'X';
            else if (t === st.YSCROLLER) return 'Y';
            else {
                if (st.SCROLLER.exec(t)) return 'XY';
            }
        },
        POINTER_TYPE: 'touch',
        firstTouch: null,
        isPrimaryTouch: function(inTouch) {
            return this.firstTouch === inTouch.identifier;
        },
        setPrimaryTouch: function(inTouch) {
            if (pointermap$1.size === 0 || (pointermap$1.size === 1 && pointermap$1.has(1))) {
                this.firstTouch = inTouch.identifier;
                this.firstXY = {
                    X: inTouch.clientX,
                    Y: inTouch.clientY
                };
                this.scrolling = false;
                this.cancelResetClickCount();
            }
        },
        removePrimaryPointer: function(inPointer) {
            if (inPointer.isPrimary) {
                this.firstTouch = null;
                this.firstXY = null;
                this.resetClickCount();
            }
        },
        clickCount: 0,
        resetId: null,
        resetClickCount: function() {
            var fn = function() {
                this.clickCount = 0;
                this.resetId = null;
            }.bind(this);
            this.resetId = setTimeout(fn, CLICK_COUNT_TIMEOUT);
        },
        cancelResetClickCount: function() {
            if (this.resetId) clearTimeout(this.resetId);
        },
        typeToButtons: function(type) {
            var ret = 0;
            if (type === 'touchstart' || type === 'touchmove') ret = 1;
            return ret;
        },
        touchToPointer: function(inTouch) {
            var cte = this.currentTouchEvent;
            var e = dispatcher.cloneEvent(inTouch);
            var id = e.pointerId = inTouch.identifier + 2;
            e.target = captureInfo[id] || findTarget(e);
            e.bubbles = true;
            e.cancelable = true;
            e.detail = this.clickCount;
            e.button = 0;
            e.buttons = this.typeToButtons(cte.type);
            e.width = (inTouch.radiusX || inTouch.webkitRadiusX || 0) * 2;
            e.height = (inTouch.radiusY || inTouch.webkitRadiusY || 0) * 2;
            e.pressure = inTouch.force || inTouch.webkitForce || 0.5;
            e.isPrimary = this.isPrimaryTouch(inTouch);
            e.pointerType = this.POINTER_TYPE;
            e.altKey = cte.altKey;
            e.ctrlKey = cte.ctrlKey;
            e.metaKey = cte.metaKey;
            e.shiftKey = cte.shiftKey;
            var self = this;
            e.preventDefault = function() {
                self.scrolling = false;
                self.firstXY = null;
                cte.preventDefault();
            };
            return e;
        },
        processTouches: function(inEvent, inFunction) {
            var tl = inEvent.changedTouches;
            this.currentTouchEvent = inEvent;
            for (var i = 0, t; i < tl.length; i++) {
                t = tl[i];
                inFunction.call(this, this.touchToPointer(t));
            }
        },
        shouldScroll: function(inEvent) {
            if (this.firstXY) {
                var ret;
                var scrollAxis = inEvent.currentTarget._scrollType;
                if (scrollAxis === 'none') ret = false;
                else if (scrollAxis === 'XY') ret = true;
                else {
                    var t = inEvent.changedTouches[0];
                    var a = scrollAxis;
                    var oa = scrollAxis === 'Y' ? 'X' : 'Y';
                    var da = Math.abs(t['client' + a] - this.firstXY[a]);
                    var doa = Math.abs(t['client' + oa] - this.firstXY[oa]);
                    ret = da >= doa;
                }
                this.firstXY = null;
                return ret;
            }
        },
        findTouch: function(inTL, inId) {
            for (var i = 0, l = inTL.length, t; i < l && (t = inTL[i]); i++)
                if (t.identifier === inId) return true;
        },
        vacuumTouches: function(inEvent) {
            var tl = inEvent.touches;
            if (pointermap$1.size >= tl.length) {
                var d = [];
                pointermap$1.forEach(function(value, key) {
                    if (key !== 1 && !this.findTouch(tl, key - 2)) {
                        var p = value.out;
                        d.push(p);
                    }
                }, this);
                d.forEach(this.cancelOut, this);
            }
        },
        touchstart: function(inEvent) {
            this.vacuumTouches(inEvent);
            this.setPrimaryTouch(inEvent.changedTouches[0]);
            this.dedupSynthMouse(inEvent);
            if (!this.scrolling) {
                this.clickCount++;
                this.processTouches(inEvent, this.overDown);
            }
        },
        overDown: function(inPointer) {
            pointermap$1.set(inPointer.pointerId, {
                target: inPointer.target,
                out: inPointer,
                outTarget: inPointer.target
            });
            dispatcher.enterOver(inPointer);
            dispatcher.down(inPointer);
        },
        touchmove: function(inEvent) {
            if (!this.scrolling)
                if (this.shouldScroll(inEvent)) {
                    this.scrolling = true;
                    this.touchcancel(inEvent);
                } else {
                    inEvent.preventDefault();
                    this.processTouches(inEvent, this.moveOverOut);
                }
        },
        moveOverOut: function(inPointer) {
            var event = inPointer;
            var pointer = pointermap$1.get(event.pointerId);
            if (!pointer) return;
            var outEvent = pointer.out;
            var outTarget = pointer.outTarget;
            dispatcher.move(event);
            if (outEvent && outTarget !== event.target) {
                outEvent.relatedTarget = event.target;
                event.relatedTarget = outTarget;
                outEvent.target = outTarget;
                if (event.target) {
                    dispatcher.leaveOut(outEvent);
                    dispatcher.enterOver(event);
                } else {
                    event.target = outTarget;
                    event.relatedTarget = null;
                    this.cancelOut(event);
                }
            }
            pointer.out = event;
            pointer.outTarget = event.target;
        },
        touchend: function(inEvent) {
            this.dedupSynthMouse(inEvent);
            this.processTouches(inEvent, this.upOut);
        },
        upOut: function(inPointer) {
            if (!this.scrolling) {
                dispatcher.up(inPointer);
                dispatcher.leaveOut(inPointer);
            }
            this.cleanUpPointer(inPointer);
        },
        touchcancel: function(inEvent) {
            this.processTouches(inEvent, this.cancelOut);
        },
        cancelOut: function(inPointer) {
            dispatcher.cancel(inPointer);
            dispatcher.leaveOut(inPointer);
            this.cleanUpPointer(inPointer);
        },
        cleanUpPointer: function(inPointer) {
            pointermap$1.delete(inPointer.pointerId);
            this.removePrimaryPointer(inPointer);
        },
        dedupSynthMouse: function(inEvent) {
            var lts = mouseEvents.lastTouches;
            var t = inEvent.changedTouches[0];
            if (this.isPrimaryTouch(t)) {
                var lt = {
                    x: t.clientX,
                    y: t.clientY
                };
                lts.push(lt);
                var fn = (function(lts, lt) {
                    var i = lts.indexOf(lt);
                    if (i > -1) lts.splice(i, 1);
                }).bind(null, lts, lt);
                setTimeout(fn, DEDUP_TIMEOUT);
            }
        }
    };
    INSTALLER = new Installer(touchEvents.elementAdded, touchEvents.elementRemoved, touchEvents.elementChanged, touchEvents);
    var pointermap$2 = dispatcher.pointermap;
    var HAS_BITMAP_TYPE = window.MSPointerEvent && typeof window.MSPointerEvent.MSPOINTER_TYPE_MOUSE === 'number';
    var msEvents = {
        events: ['MSPointerDown', 'MSPointerMove', 'MSPointerUp', 'MSPointerOut', 'MSPointerOver', 'MSPointerCancel', 'MSGotPointerCapture', 'MSLostPointerCapture'],
        register: function(target) {
            dispatcher.listen(target, this.events);
        },
        unregister: function(target) {
            dispatcher.unlisten(target, this.events);
        },
        POINTER_TYPES: ['', 'unavailable', 'touch', 'pen', 'mouse'],
        prepareEvent: function(inEvent) {
            var e = inEvent;
            if (HAS_BITMAP_TYPE) {
                e = dispatcher.cloneEvent(inEvent);
                e.pointerType = this.POINTER_TYPES[inEvent.pointerType];
            }
            return e;
        },
        cleanup: function(id) {
            pointermap$2.delete(id);
        },
        MSPointerDown: function(inEvent) {
            pointermap$2.set(inEvent.pointerId, inEvent);
            var e = this.prepareEvent(inEvent);
            dispatcher.down(e);
        },
        MSPointerMove: function(inEvent) {
            var e = this.prepareEvent(inEvent);
            dispatcher.move(e);
        },
        MSPointerUp: function(inEvent) {
            var e = this.prepareEvent(inEvent);
            dispatcher.up(e);
            this.cleanup(inEvent.pointerId);
        },
        MSPointerOut: function(inEvent) {
            var e = this.prepareEvent(inEvent);
            dispatcher.leaveOut(e);
        },
        MSPointerOver: function(inEvent) {
            var e = this.prepareEvent(inEvent);
            dispatcher.enterOver(e);
        },
        MSPointerCancel: function(inEvent) {
            var e = this.prepareEvent(inEvent);
            dispatcher.cancel(e);
            this.cleanup(inEvent.pointerId);
        },
        MSLostPointerCapture: function(inEvent) {
            var e = dispatcher.makeEvent('lostpointercapture', inEvent);
            dispatcher.dispatchEvent(e);
        },
        MSGotPointerCapture: function(inEvent) {
            var e = dispatcher.makeEvent('gotpointercapture', inEvent);
            dispatcher.dispatchEvent(e);
        }
    };

    function applyPolyfill() {
        if (!window.PointerEvent) {
            window.PointerEvent = PointerEvent;
            if (window.navigator.msPointerEnabled) {
                var tp = window.navigator.msMaxTouchPoints;
                Object.defineProperty(window.navigator, 'maxTouchPoints', {
                    value: tp,
                    enumerable: true
                });
                dispatcher.registerSource('ms', msEvents);
            } else {
                Object.defineProperty(window.navigator, 'maxTouchPoints', {
                    value: 0,
                    enumerable: true
                });
                dispatcher.registerSource('mouse', mouseEvents);
                if (window.ontouchstart !== undefined) dispatcher.registerSource('touch', touchEvents);
            }
            dispatcher.register(document);
        }
    }
    var n = window.navigator;
    var s;
    var r;
    var h;

    function assertActive(id) {
        if (!dispatcher.pointermap.has(id)) {
            var error = new Error('InvalidPointerId');
            error.name = 'InvalidPointerId';
            throw error;
        }
    }

    function assertConnected(elem) {
        var parent = elem.parentNode;
        while (parent && parent !== elem.ownerDocument) parent = parent.parentNode;
        if (!parent) {
            var error = new Error('InvalidStateError');
            error.name = 'InvalidStateError';
            throw error;
        }
    }

    function inActiveButtonState(id) {
        var p = dispatcher.pointermap.get(id);
        return p.buttons !== 0;
    }
    if (n.msPointerEnabled) {
        s = function(pointerId) {
            assertActive(pointerId);
            assertConnected(this);
            if (inActiveButtonState(pointerId)) {
                dispatcher.setCapture(pointerId, this, true);
                this.msSetPointerCapture(pointerId);
            }
        };
        r = function(pointerId) {
            assertActive(pointerId);
            dispatcher.releaseCapture(pointerId, true);
            this.msReleasePointerCapture(pointerId);
        };
    } else {
        s = function setPointerCapture(pointerId) {
            assertActive(pointerId);
            assertConnected(this);
            if (inActiveButtonState(pointerId)) dispatcher.setCapture(pointerId, this);
        };
        r = function releasePointerCapture(pointerId) {
            assertActive(pointerId);
            dispatcher.releaseCapture(pointerId);
        };
    }
    h = function hasPointerCapture(pointerId) {
        return !!dispatcher.captureInfo[pointerId];
    };

    function applyPolyfill$1() {
        if (window.Element && !Element.prototype.setPointerCapture) Object.defineProperties(Element.prototype, {
            'setPointerCapture': {
                value: s
            },
            'releasePointerCapture': {
                value: r
            },
            'hasPointerCapture': {
                value: h
            }
        });
    }
    applyAttributeStyles();
    applyPolyfill();
    applyPolyfill$1();
    var pointerevents = {
        dispatcher,
        Installer,
        PointerEvent,
        PointerMap,
        targetFinding: targeting
    };
    return pointerevents;
}));;
(function($, Drupal, once) {
    'use strict';
    Drupal.behaviors.DX8Menus = {
        attach: function(context, settings) {
            var menuItemLinks = [];
            var menuItemLinkCounter;
            var cmm = new Drupal.CohesionResponsiveBreakpoints();
            var over = false;
            var $lastAnimatedSubmenu = $();
            var hasEntered = false;
            var onceMenuItem = 'js-coh-menu-item-init';
            var onceMenuItemLink = 'js-coh-menu-item-link-init';
            var nameSpace = '.coh-menu-item-link';
            var cls = {
                isCollapsed: 'is-collapsed',
                isExpanded: 'is-expanded',
                both: 'is-collapsed is-expanded',
                hasChildren: 'has-children',
                menuListContainer: 'coh-menu-list-container',
                menuListItem: 'coh-menu-list-item',
                menuListLink: 'js-coh-menu-item-link'
            };
            var aria = {
                expanded: 'aria-expanded',
                popup: 'aria-haspopup'
            };
            var onEnter = ['pointerenter'];
            var onLeave = ['mouseleave'];
            var onClick = ['click'];
            var onFocus = ['focus'];
            var onFocusOut = ['focusout'];
            var onKeyDown = ['keydown'];

            function initDrupalMenuItemLink(settings) {
                var bOnClick = true;
                settings = settings.cohesion;
                var $a = settings.settings.$a;
                var $li = settings.settings.$li;
                var isParent = settings.settings.isParent;
                var thisNameSpace = nameSpace + $a[0].nodeName;
                $li.off(thisNameSpace);
                $a.off(thisNameSpace);
                var setting = settings.settings.breakpoints[settings.key];
                if (typeof setting.animationTarget !== 'undefined') $a.data('currentAnimationTarget', $(setting.animationTarget, $li));
                if ($a.data('currentAnimationTarget')) $($a.data('currentAnimationTarget')).css('display', '');
                var toggleSiblings = setting.link_interaction === 'toggle-on-click-hide-siblings' || setting.button_interaction === 'toggle-on-click-hide-siblings';
                if ((setting.link_interaction === 'toggle-on-hover' || toggleSiblings || setting.link_interaction === 'toggle-on-click' || setting.button_interaction === 'toggle-on-click' || settings.button_interaction === 'toggle-parent-on-click') && $li.hasClass(cls.hasChildren)) $a.attr(aria.popup, true);
                else {
                    $a.removeAttr(aria.popup);
                    $a.removeAttr(aria.expanded);
                }
                if (setting.link_interaction === 'toggle-on-hover') {
                    over = false;
                    if ($li.hasClass(cls.hasChildren)) {
                        $li.on(onLeave.join(thisNameSpace + ' ') + thisNameSpace, function(event) {
                            if (!hasEntered) return;
                            window.setTimeout(function() {
                                over = false;
                            }, 200);
                            event.preventDefault();
                            if ($li.hasClass(cls.isCollapsed)) return;
                            toggleSubMenu($li, $a, setting, true, event);
                        });
                        $li.on(onEnter.join(thisNameSpace + ' ') + thisNameSpace, function(event) {
                            window.setTimeout(function() {
                                over = true;
                            }, 200);
                            event.preventDefault();
                            setTimeout(function() {
                                toggleSubMenu($li, $a, setting);
                                hasEntered = true;
                            }, 1);
                        });
                        $a.on(onClick.join(thisNameSpace + ' ') + thisNameSpace, function(event) {
                            if (!over) event.preventDefault();
                        });
                    }
                    bOnClick = false;
                }
                if (bOnClick) $a.on(onClick.join(thisNameSpace + ' ') + thisNameSpace, function(e) {
                    if (setting.link_interaction === 'click-through-to-link') return;
                    if (setting.link_interaction === 'no-interaction') {
                        e.preventDefault();
                        return;
                    }
                    if ($li.hasClass(cls.hasChildren)) {
                        e.preventDefault();
                        toggleSubMenu($li, $(this), setting, toggleSiblings);
                        if (setting.link_interaction === 'toggle-parent-on-click') return;
                    }
                });
                $a.on(onFocus.join(thisNameSpace + ' ') + thisNameSpace, function(e) {
                    over = true;
                    for (var i = 0; i < menuItemLinks.length; i++)
                        if ($(this).is(menuItemLinks[i]['$a'])) {
                            menuItemLinkCounter = i;
                            break;
                        }
                    $a.on(onKeyDown.join(thisNameSpace + ' ') + thisNameSpace, function(e) {
                        switch (e.key) {
                            case ' ':
                            case 'Spacebar':
                                e.preventDefault();
                                e.stopPropagation();
                                if (!$li.hasClass(cls.hasChildren)) window.location = $a.attr('href');
                                if ($li.hasClass(cls.hasChildren)) toggleSubMenu($li, $a, setting, toggleSiblings);
                                break;
                            case 'ArrowDown':
                            case 'ArrowRight':
                            case 'Down':
                            case 'Right':
                                e.preventDefault();
                                e.stopPropagation();
                                if (isParent && (e.key === 'ArrowRight' || e.key === 'Right') && $li.next('.' + cls.menuListItem) && !$li.hasClass(cls.isExpanded)) {
                                    $('.' + cls.menuListLink, $li.next('.' + cls.menuListItem)).eq(0).focus();
                                    break;
                                }
                                if ($li.hasClass(cls.isExpanded) && $li.hasClass(cls.hasChildren)) focusNextMenuItem($li);
                                if (!$li.hasClass(cls.isExpanded) && $li.hasClass(cls.hasChildren)) toggleSubMenu($li, $a, setting, toggleSiblings);
                                if (!$li.hasClass(cls.hasChildren)) focusNextMenuItem($li);
                                break;
                            case 'Escape':
                            case 'Esc':
                                e.preventDefault();
                                e.stopPropagation();
                                if ($li.parent().closest('.' + cls.menuListItem)) {
                                    toggleSubMenu($li.parent().closest('.' + cls.menuListItem), $li.parent().closest('.' + cls.menuListItem).children('.' + cls.menuListLink), setting, toggleSiblings);
                                    $li.parent().closest('.' + cls.menuListItem).children('.' + cls.menuListLink).focus();
                                }
                                break;
                            case 'ArrowUp':
                            case 'ArrowLeft':
                            case 'Up':
                            case 'Left':
                                e.preventDefault();
                                e.stopPropagation();
                                if (isParent && (e.key === 'ArrowLeft' || e.key === 'Left') && $li.prev('.' + cls.menuListItem) && !$li.hasClass(cls.isExpanded)) {
                                    $('.' + cls.menuListLink, $li.prev('.' + cls.menuListItem)).eq(0).focus();
                                    break;
                                }
                                if (!$li.hasClass(cls.hasChildren) || $li.hasClass(cls.isCollapsed)) focusPreviousMenuItem();
                                if (!$li.hasClass(cls.isCollapsed) && $li.hasClass(cls.hasChildren)) toggleSubMenu($li, $a, setting, toggleSiblings);
                                break;
                            case 'Enter':
                                e.preventDefault();
                                e.stopPropagation();
                                window.location = $a.attr('href');
                                break;
                            default:
                                return;
                        }
                    });
                });
                $a.on(onFocusOut.join(thisNameSpace + ' ') + thisNameSpace, function(e) {
                    $a.off(onKeyDown.join(thisNameSpace + ' ') + thisNameSpace);
                    over = false;
                });
            }

            function initDrupalMenuItem(settings) {
                settings = settings.cohesion;
                var $a = settings.settings.$a;
                var $li = settings.settings.$li;
                var bInteracted = false;
                var $interactees = $a.add($a.siblings('a, button, span'));
                var setting = settings.settings.breakpoints[settings.key];
                if (typeof $li.data('interacted') !== 'undefined' && $li.data('interacted') === true) bInteracted = true;
                if (!bInteracted) {
                    $li.toggleClass(cls.isCollapsed, setting === 'hidden' || (setting === 'trail' && !$li.hasClass('in-active-trail')));
                    $li.toggleClass(cls.isExpanded, setting === 'visible' || (setting === 'trail' && $li.hasClass('in-active-trail')));
                    if ($li.hasClass(cls.hasChildren)) $interactees.each(function() {
                        var $interactee = $(this);
                        if ($interactee.attr(aria.popup) === "true") {
                            if ($li.hasClass(cls.isCollapsed)) $interactee.attr(aria.expanded, false);
                            if ($li.hasClass(cls.isExpanded)) $interactee.attr(aria.expanded, true);
                        }
                    });
                }
            }

            function toggleSiblingsFn($li, $a, setting) {
                var $siblings = $li.siblings('li.has-children');
                $siblings.children('a, button, span').each(function() {
                    var $this = $(this);
                    if ($this.attr(aria.expanded) === "true") toggleSubMenu($this.parent('li'), $this, setting, false);
                });
            }

            function toggleSubMenu($li, $a, setting, toggleSiblings) {
                var $interactees = $a.add($a.siblings('a, button, span'));
                var $submenu;
                if (setting.animationTarget && setting.animationType) {
                    $submenu = $('~' + setting.animationTarget, $a);
                    if (setting.button_interaction === 'toggle-parent-on-click') {
                        $submenu = $('> ' + setting.animationTarget, $li);
                        $interactees = $interactees.add($('> a, > button, > span', $li));
                    }
                    var animationOriginArray;
                    if (setting.animationOrigin) animationOriginArray = setting.animationOrigin.split(',');
                    if ((setting.link_interaction !== 'toggle-on-click-hide-siblings' || setting.button_interaction !== 'toggle-on-click-hide-siblings') && $lastAnimatedSubmenu.length && !$lastAnimatedSubmenu.is($submenu)) $lastAnimatedSubmenu.stop(true, true);
                    $submenu.stop(true, true).toggle({
                        effect: setting.animationType,
                        direction: setting.animationDirection,
                        distance: setting.animationDistance,
                        percent: setting.animationScale,
                        origin: animationOriginArray,
                        size: setting.animationFoldHeight,
                        horizFirst: setting.animationHorizontalFirst,
                        times: setting.animationIterations,
                        easing: setting.animationEasing,
                        duration: setting.animationDuration
                    });
                    $lastAnimatedSubmenu = $submenu;
                }
                $li.toggleClass(cls.both);
                $interactees.each(function() {
                    var $interactee = $(this);
                    if ($interactee.attr(aria.popup) === "true") {
                        if ($li.hasClass(cls.isCollapsed)) $interactee.attr(aria.expanded, false);
                        if ($li.hasClass(cls.isExpanded)) $interactee.attr(aria.expanded, true);
                    }
                });
                $li.data('interacted', true);
                if (toggleSiblings) toggleSiblingsFn($li, $a, setting);
            }

            function focusPreviousMenuItem() {
                if (menuItemLinkCounter > 0) {
                    menuItemLinkCounter--;
                    menuItemLinks[menuItemLinkCounter]['$a'].focus();
                }
            }

            function focusNextMenuItem() {
                if (menuItemLinkCounter + 1 < menuItemLinks.length) {
                    menuItemLinkCounter++;
                    menuItemLinks[menuItemLinkCounter]['$a'].focus();
                }
            }

            function focusMenuItem() {
                menuItemLinks[menuItemLinkCounter]['$a'].focus();
            }
            var menuItems = $(once(onceMenuItemLink, '.js-coh-menu-item-link, .js-coh-menu-item-button'));
            menuItems.each(function(i, e) {
                var $this = $(this),
                    $li = $(this).closest('.coh-menu-list-item'),
                    responsiveSettings = $this.data('cohSettings'),
                    key, settings = {
                        $a: $this,
                        $li,
                        isParent: !$li.parent().closest('.' + cls.menuListItem).length,
                        breakpoints: {}
                    };
                menuItemLinks.push({
                    $a: $this,
                    $li,
                    tabindex: $this.attr('tabindex') || i
                });
                if (i + 1 === menuItems.length) menuItemLinks.sort(function(a, b) {
                    return a.tabindex - b.tabindex;
                });
                for (var i = 0; i < cmm.breakpoints.length; i++) {
                    key = cmm.breakpoints[i].key;
                    settings.breakpoints[key] = {};
                    if (responsiveSettings && typeof responsiveSettings[key] !== 'undefined') {
                        settings.breakpoints[key] = responsiveSettings[key];
                        var previous = responsiveSettings[key];
                    } else {
                        if (typeof cmm.breakpoints[i - 1] !== 'undefined' && typeof previous !== 'undefined') settings.breakpoints[key] = previous;
                    }
                }
                cmm.addListeners(settings, initDrupalMenuItemLink);
            });
            $(once(onceMenuItem, '.js-coh-menu-item')).each(function() {
                var $this = $(this),
                    responsiveSettings = $this.data('cohSettings'),
                    key, settings = {
                        $li: $this,
                        $a: $('> a, > button, > span', $this),
                        breakpoints: {}
                    };
                if ($this.hasClass(cls.hasChildren)) {
                    for (var i = 0; i < cmm.breakpoints.length; i++) {
                        key = cmm.breakpoints[i].key;
                        settings.breakpoints[key] = {};
                        if (typeof responsiveSettings[key] !== 'undefined') {
                            settings.breakpoints[key] = responsiveSettings[key];
                            var previous = responsiveSettings[key];
                        } else {
                            if (typeof cmm.breakpoints[i - 1] !== 'undefined' && typeof previous !== 'undefined') settings.breakpoints[key] = previous;
                        }
                    }
                    cmm.addListeners(settings, initDrupalMenuItem);
                }
            });
        }
    };
})(jQuery, Drupal, once);;
(function(window, document) {
    'use strict';
    if ('IntersectionObserver' in window && 'IntersectionObserverEntry' in window && 'intersectionRatio' in window.IntersectionObserverEntry.prototype) {
        if (!('isIntersecting' in window.IntersectionObserverEntry.prototype)) Object.defineProperty(window.IntersectionObserverEntry.prototype, 'isIntersecting', {
            get: function() {
                return this.intersectionRatio > 0;
            }
        });
        return;
    }
    var registry = [];

    function IntersectionObserverEntry(entry) {
        this.time = entry.time;
        this.target = entry.target;
        this.rootBounds = entry.rootBounds;
        this.boundingClientRect = entry.boundingClientRect;
        this.intersectionRect = entry.intersectionRect || getEmptyRect();
        this.isIntersecting = !!entry.intersectionRect;
        var targetRect = this.boundingClientRect;
        var targetArea = targetRect.width * targetRect.height;
        var intersectionRect = this.intersectionRect;
        var intersectionArea = intersectionRect.width * intersectionRect.height;
        if (targetArea) this.intersectionRatio = Number((intersectionArea / targetArea).toFixed(4));
        else this.intersectionRatio = this.isIntersecting ? 1 : 0;
    }

    function IntersectionObserver(callback, opt_options) {
        var options = opt_options || {};
        if (typeof callback != 'function') throw new Error('callback must be a function');
        if (options.root && options.root.nodeType != 1) throw new Error('root must be an Element');
        this._checkForIntersections = throttle(this._checkForIntersections.bind(this), this.THROTTLE_TIMEOUT);
        this._callback = callback;
        this._observationTargets = [];
        this._queuedEntries = [];
        this._rootMarginValues = this._parseRootMargin(options.rootMargin);
        this.thresholds = this._initThresholds(options.threshold);
        this.root = options.root || null;
        this.rootMargin = this._rootMarginValues.map(function(margin) {
            return margin.value + margin.unit;
        }).join(' ');
    }
    IntersectionObserver.prototype.THROTTLE_TIMEOUT = 100;
    IntersectionObserver.prototype.POLL_INTERVAL = null;
    IntersectionObserver.prototype.USE_MUTATION_OBSERVER = true;
    IntersectionObserver.prototype.observe = function(target) {
        var isTargetAlreadyObserved = this._observationTargets.some(function(item) {
            return item.element == target;
        });
        if (isTargetAlreadyObserved) return;
        if (!(target && target.nodeType == 1)) throw new Error('target must be an Element');
        this._registerInstance();
        this._observationTargets.push({
            element: target,
            entry: null
        });
        this._monitorIntersections();
        this._checkForIntersections();
    };
    IntersectionObserver.prototype.unobserve = function(target) {
        this._observationTargets = this._observationTargets.filter(function(item) {
            return item.element != target;
        });
        if (!this._observationTargets.length) {
            this._unmonitorIntersections();
            this._unregisterInstance();
        }
    };
    IntersectionObserver.prototype.disconnect = function() {
        this._observationTargets = [];
        this._unmonitorIntersections();
        this._unregisterInstance();
    };
    IntersectionObserver.prototype.takeRecords = function() {
        var records = this._queuedEntries.slice();
        this._queuedEntries = [];
        return records;
    };
    IntersectionObserver.prototype._initThresholds = function(opt_threshold) {
        var threshold = opt_threshold || [0];
        if (!Array.isArray(threshold)) threshold = [threshold];
        return threshold.sort().filter(function(t, i, a) {
            if (typeof t != 'number' || isNaN(t) || t < 0 || t > 1) throw new Error('threshold must be a number between 0 and 1 inclusively');
            return t !== a[i - 1];
        });
    };
    IntersectionObserver.prototype._parseRootMargin = function(opt_rootMargin) {
        var marginString = opt_rootMargin || '0px';
        var margins = marginString.split(/\s+/).map(function(margin) {
            var parts = /^(-?\d*\.?\d+)(px|%)$/.exec(margin);
            if (!parts) throw new Error('rootMargin must be specified in pixels or percent');
            return {
                value: parseFloat(parts[1]),
                unit: parts[2]
            };
        });
        margins[1] = margins[1] || margins[0];
        margins[2] = margins[2] || margins[0];
        margins[3] = margins[3] || margins[1];
        return margins;
    };
    IntersectionObserver.prototype._monitorIntersections = function() {
        if (!this._monitoringIntersections) {
            this._monitoringIntersections = true;
            if (this.POLL_INTERVAL) this._monitoringInterval = setInterval(this._checkForIntersections, this.POLL_INTERVAL);
            else {
                addEvent(window, 'resize', this._checkForIntersections, true);
                addEvent(document, 'scroll', this._checkForIntersections, true);
                if (this.USE_MUTATION_OBSERVER && 'MutationObserver' in window) {
                    this._domObserver = new MutationObserver(this._checkForIntersections);
                    this._domObserver.observe(document, {
                        attributes: true,
                        childList: true,
                        characterData: true,
                        subtree: true
                    });
                }
            }
        }
    };
    IntersectionObserver.prototype._unmonitorIntersections = function() {
        if (this._monitoringIntersections) {
            this._monitoringIntersections = false;
            clearInterval(this._monitoringInterval);
            this._monitoringInterval = null;
            removeEvent(window, 'resize', this._checkForIntersections, true);
            removeEvent(document, 'scroll', this._checkForIntersections, true);
            if (this._domObserver) {
                this._domObserver.disconnect();
                this._domObserver = null;
            }
        }
    };
    IntersectionObserver.prototype._checkForIntersections = function() {
        var rootIsInDom = this._rootIsInDom();
        var rootRect = rootIsInDom ? this._getRootRect() : getEmptyRect();
        this._observationTargets.forEach(function(item) {
            var target = item.element;
            var targetRect = getBoundingClientRect(target);
            var rootContainsTarget = this._rootContainsTarget(target);
            var oldEntry = item.entry;
            var intersectionRect = rootIsInDom && rootContainsTarget && this._computeTargetAndRootIntersection(target, rootRect);
            var newEntry = item.entry = new IntersectionObserverEntry({
                time: now(),
                target,
                boundingClientRect: targetRect,
                rootBounds: rootRect,
                intersectionRect
            });
            if (!oldEntry) this._queuedEntries.push(newEntry);
            else if (rootIsInDom && rootContainsTarget) {
                if (this._hasCrossedThreshold(oldEntry, newEntry)) this._queuedEntries.push(newEntry);
            } else {
                if (oldEntry && oldEntry.isIntersecting) this._queuedEntries.push(newEntry);
            }
        }, this);
        if (this._queuedEntries.length) this._callback(this.takeRecords(), this);
    };
    IntersectionObserver.prototype._computeTargetAndRootIntersection = function(target, rootRect) {
        if (window.getComputedStyle(target).display == 'none') return;
        var targetRect = getBoundingClientRect(target);
        var intersectionRect = targetRect;
        var parent = getParentNode(target);
        var atRoot = false;
        while (!atRoot) {
            var parentRect = null;
            var parentComputedStyle = parent.nodeType == 1 ? window.getComputedStyle(parent) : {};
            if (parentComputedStyle.display == 'none') return;
            if (parent == this.root || parent == document) {
                atRoot = true;
                parentRect = rootRect;
            } else {
                if (parent != document.body && parent != document.documentElement && parentComputedStyle.overflow != 'visible') parentRect = getBoundingClientRect(parent);
            }
            if (parentRect) {
                intersectionRect = computeRectIntersection(parentRect, intersectionRect);
                if (!intersectionRect) break;
            }
            parent = getParentNode(parent);
        }
        return intersectionRect;
    };
    IntersectionObserver.prototype._getRootRect = function() {
        var rootRect;
        if (this.root) rootRect = getBoundingClientRect(this.root);
        else {
            var html = document.documentElement;
            var body = document.body;
            rootRect = {
                top: 0,
                left: 0,
                right: html.clientWidth || body.clientWidth,
                width: html.clientWidth || body.clientWidth,
                bottom: html.clientHeight || body.clientHeight,
                height: html.clientHeight || body.clientHeight
            };
        }
        return this._expandRectByRootMargin(rootRect);
    };
    IntersectionObserver.prototype._expandRectByRootMargin = function(rect) {
        var margins = this._rootMarginValues.map(function(margin, i) {
            return margin.unit == 'px' ? margin.value : margin.value * (i % 2 ? rect.width : rect.height) / 100;
        });
        var newRect = {
            top: rect.top - margins[0],
            right: rect.right + margins[1],
            bottom: rect.bottom + margins[2],
            left: rect.left - margins[3]
        };
        newRect.width = newRect.right - newRect.left;
        newRect.height = newRect.bottom - newRect.top;
        return newRect;
    };
    IntersectionObserver.prototype._hasCrossedThreshold = function(oldEntry, newEntry) {
        var oldRatio = oldEntry && oldEntry.isIntersecting ? oldEntry.intersectionRatio || 0 : -1;
        var newRatio = newEntry.isIntersecting ? newEntry.intersectionRatio || 0 : -1;
        if (oldRatio === newRatio) return;
        for (var i = 0; i < this.thresholds.length; i++) {
            var threshold = this.thresholds[i];
            if (threshold == oldRatio || threshold == newRatio || threshold < oldRatio !== threshold < newRatio) return true;
        }
    };
    IntersectionObserver.prototype._rootIsInDom = function() {
        return !this.root || containsDeep(document, this.root);
    };
    IntersectionObserver.prototype._rootContainsTarget = function(target) {
        return containsDeep(this.root || document, target);
    };
    IntersectionObserver.prototype._registerInstance = function() {
        if (registry.indexOf(this) < 0) registry.push(this);
    };
    IntersectionObserver.prototype._unregisterInstance = function() {
        var index = registry.indexOf(this);
        if (index != -1) registry.splice(index, 1);
    };

    function now() {
        return window.performance && performance.now && performance.now();
    }

    function throttle(fn, timeout) {
        var timer = null;
        return function() {
            if (!timer) timer = setTimeout(function() {
                fn();
                timer = null;
            }, timeout);
        };
    }

    function addEvent(node, event, fn, opt_useCapture) {
        if (typeof node.addEventListener == 'function') node.addEventListener(event, fn, opt_useCapture || false);
        else {
            if (typeof node.attachEvent == 'function') node.attachEvent('on' + event, fn);
        }
    }

    function removeEvent(node, event, fn, opt_useCapture) {
        if (typeof node.removeEventListener == 'function') node.removeEventListener(event, fn, opt_useCapture || false);
        else {
            if (typeof node.detatchEvent == 'function') node.detatchEvent('on' + event, fn);
        }
    }

    function computeRectIntersection(rect1, rect2) {
        var top = Math.max(rect1.top, rect2.top);
        var bottom = Math.min(rect1.bottom, rect2.bottom);
        var left = Math.max(rect1.left, rect2.left);
        var right = Math.min(rect1.right, rect2.right);
        var width = right - left;
        var height = bottom - top;
        return (width >= 0 && height >= 0) && {
            top,
            bottom,
            left,
            right,
            width,
            height
        };
    }

    function getBoundingClientRect(el) {
        var rect;
        try {
            rect = el.getBoundingClientRect();
        } catch (err) {}
        if (!rect) return getEmptyRect();
        if (!(rect.width && rect.height)) rect = {
            top: rect.top,
            right: rect.right,
            bottom: rect.bottom,
            left: rect.left,
            width: rect.right - rect.left,
            height: rect.bottom - rect.top
        };
        return rect;
    }

    function getEmptyRect() {
        return {
            top: 0,
            bottom: 0,
            left: 0,
            right: 0,
            width: 0,
            height: 0
        };
    }

    function containsDeep(parent, child) {
        var node = child;
        while (node) {
            if (node == parent) return true;
            node = getParentNode(node);
        }
        return false;
    }

    function getParentNode(node) {
        var parent = node.parentNode;
        if (parent && parent.nodeType == 11 && parent.host) return parent.host;
        return parent;
    }
    window.IntersectionObserver = IntersectionObserver;
    window.IntersectionObserverEntry = IntersectionObserverEntry;
}(window, document));;

function _extends() {
    return (_extends = Object.assign || function(t) {
        for (var e = 1; e < arguments.length; e++) {
            var n = arguments[e];
            for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o])
        }
        return t
    }).apply(this, arguments)
}

function _typeof(t) {
    return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
        return typeof t
    } : function(t) {
        return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    })(t)
}! function(t, e) {
    "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.LazyLoad = e()
}(this, function() {
    "use strict";
    var t = "undefined" != typeof window,
        e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),
        n = t && "IntersectionObserver" in window,
        o = t && "classList" in document.createElement("p"),
        r = {
            elements_selector: "img",
            container: e || t ? document : null,
            threshold: 300,
            thresholds: null,
            data_src: "src",
            data_srcset: "srcset",
            data_sizes: "sizes",
            data_bg: "bg",
            class_loading: "loading",
            class_loaded: "loaded",
            class_error: "error",
            load_delay: 0,
            auto_unobserve: !0,
            callback_enter: null,
            callback_exit: null,
            callback_reveal: null,
            callback_loaded: null,
            callback_error: null,
            callback_finish: null,
            use_native: !1
        },
        a = function(t, e) {
            var n, o = new t(e);
            try {
                n = new CustomEvent("LazyLoad::Initialized", {
                    detail: {
                        instance: o
                    }
                })
            } catch (t) {
                (n = document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized", !1, !1, {
                    instance: o
                })
            }
            window.dispatchEvent(n)
        };
    var i = function(t, e) {
            return t.getAttribute("data-" + e)
        },
        s = function(t, e, n) {
            var o = "data-" + e;
            null !== n ? t.setAttribute(o, n) : t.removeAttribute(o)
        },
        c = function(t) {
            return "true" === i(t, "was-processed")
        },
        l = function(t, e) {
            return s(t, "ll-timeout", e)
        },
        u = function(t) {
            return i(t, "ll-timeout")
        },
        d = function(t, e) {
            t && t(e)
        },
        f = function(t, e) {
            t._loadingCount += e, 0 === t._elements.length && 0 === t._loadingCount && d(t._settings.callback_finish)
        },
        _ = function(t) {
            for (var e, n = [], o = 0; e = t.children[o]; o += 1) "SOURCE" === e.tagName && n.push(e);
            return n
        },
        v = function(t, e, n) {
            n && t.setAttribute(e, n)
        },
        g = function(t, e) {
            v(t, "sizes", i(t, e.data_sizes)), v(t, "srcset", i(t, e.data_srcset)), v(t, "src", i(t, e.data_src))
        },
        m = {
            IMG: function(t, e) {
                var n = t.parentNode;
                n && "PICTURE" === n.tagName && _(n).forEach(function(t) {
                    g(t, e)
                });
                g(t, e)
            },
            IFRAME: function(t, e) {
                v(t, "src", i(t, e.data_src))
            },
            VIDEO: function(t, e) {
                _(t).forEach(function(t) {
                    v(t, "src", i(t, e.data_src))
                }), v(t, "src", i(t, e.data_src)), t.load()
            }
        },
        b = function(t, e) {
            var n, o, r = e._settings,
                a = t.tagName,
                s = m[a];
            if (s) return s(t, r), f(e, 1), void(e._elements = (n = e._elements, o = t, n.filter(function(t) {
                return t !== o
            })));
            ! function(t, e) {
                var n = i(t, e.data_src),
                    o = i(t, e.data_bg);
                n && (t.style.backgroundImage = 'url("'.concat(n, '")')), o && (t.style.backgroundImage = o)
            }(t, r)
        },
        h = function(t, e) {
            o ? t.classList.add(e) : t.className += (t.className ? " " : "") + e
        },
        p = function(t, e, n) {
            t.addEventListener(e, n)
        },
        y = function(t, e, n) {
            t.removeEventListener(e, n)
        },
        E = function(t, e, n) {
            y(t, "load", e), y(t, "loadeddata", e), y(t, "error", n)
        },
        w = function(t, e, n) {
            var r = n._settings,
                a = e ? r.class_loaded : r.class_error,
                i = e ? r.callback_loaded : r.callback_error,
                s = t.target;
            ! function(t, e) {
                o ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "")
            }(s, r.class_loading), h(s, a), d(i, s), f(n, -1)
        },
        I = function(t, e) {
            var n = function n(r) {
                    w(r, !0, e), E(t, n, o)
                },
                o = function o(r) {
                    w(r, !1, e), E(t, n, o)
                };
            ! function(t, e, n) {
                p(t, "load", e), p(t, "loadeddata", e), p(t, "error", n)
            }(t, n, o)
        },
        k = ["IMG", "IFRAME", "VIDEO"],
        A = function(t, e) {
            var n = e._observer;
            z(t, e), n && e._settings.auto_unobserve && n.unobserve(t)
        },
        L = function(t) {
            var e = u(t);
            e && (clearTimeout(e), l(t, null))
        },
        x = function(t, e) {
            var n = e._settings.load_delay,
                o = u(t);
            o || (o = setTimeout(function() {
                A(t, e), L(t)
            }, n), l(t, o))
        },
        z = function(t, e, n) {
            var o = e._settings;
            !n && c(t) || (k.indexOf(t.tagName) > -1 && (I(t, e), h(t, o.class_loading)), b(t, e), function(t) {
                s(t, "was-processed", "true")
            }(t), d(o.callback_reveal, t), d(o.callback_set, t))
        },
        O = function(t) {
            return !!n && (t._observer = new IntersectionObserver(function(e) {
                e.forEach(function(e) {
                    return function(t) {
                        return t.isIntersecting || t.intersectionRatio > 0
                    }(e) ? function(t, e) {
                        var n = e._settings;
                        d(n.callback_enter, t), n.load_delay ? x(t, e) : A(t, e)
                    }(e.target, t) : function(t, e) {
                        var n = e._settings;
                        d(n.callback_exit, t), n.load_delay && L(t)
                    }(e.target, t)
                })
            }, {
                root: (e = t._settings).container === document ? null : e.container,
                rootMargin: e.thresholds || e.threshold + "px"
            }), !0);
            var e
        },
        N = ["IMG", "IFRAME"],
        C = function(t, e) {
            return function(t) {
                return t.filter(function(t) {
                    return !c(t)
                })
            }((n = t || function(t) {
                return t.container.querySelectorAll(t.elements_selector)
            }(e), Array.prototype.slice.call(n)));
            var n
        },
        M = function(t, e) {
            this._settings = function(t) {
                return _extends({}, r, t)
            }(t), this._loadingCount = 0, O(this), this.update(e)
        };
    return M.prototype = {
        update: function(t) {
            var n, o = this,
                r = this._settings;
            (this._elements = C(t, r), !e && this._observer) ? (function(t) {
                return t.use_native && "loading" in HTMLImageElement.prototype
            }(r) && ((n = this)._elements.forEach(function(t) {
                -1 !== N.indexOf(t.tagName) && (t.setAttribute("loading", "lazy"), z(t, n))
            }), this._elements = C(t, r)), this._elements.forEach(function(t) {
                o._observer.observe(t)
            })) : this.loadAll()
        },
        destroy: function() {
            var t = this;
            this._observer && (this._elements.forEach(function(e) {
                t._observer.unobserve(e)
            }), this._observer = null), this._elements = null, this._settings = null
        },
        load: function(t, e) {
            z(t, this, e)
        },
        loadAll: function() {
            var t = this;
            this._elements.forEach(function(e) {
                A(e, t)
            })
        }
    }, t && function(t, e) {
        if (e)
            if (e.length)
                for (var n, o = 0; n = e[o]; o += 1) a(t, n);
            else a(t, e)
    }(M, window.lazyLoadOptions), M
});

;
(function($, Drupal, once) {
    "use strict";
    Drupal.behaviors.CohesionLazyLoad = {
        attach: function(context, settings) {
            function isScrollable(el) {
                return (el.scrollWidth > el.clientWidth && (getComputedStyle(el).overflowY === 'auto' || getComputedStyle(el).overflowY === 'scroll')) || (el.scrollHeight > el.clientHeight && (getComputedStyle(el).overflowX === 'auto' || getComputedStyle(el).overflowX === 'scroll')) || el.tagName === 'HTML';
            }
            once('lazyload-once', '[loading=lazy]', context).forEach(function(item) {
                var $this = $(item);
                $this.parents().each(function() {
                    var $parent = $(this);
                    if ($parent.data('lazyContainerFound') === true) {
                        if ($parent.data('llContainer')) $parent.data('llContainer').update();
                        return false;
                    } else {
                        if (isScrollable(this)) {
                            $parent.data('lazyContainerFound', true);
                            var llContainer = new LazyLoad({
                                container: this.tagName === 'HTML' ? document : this,
                                elements_selector: "[loading=lazy]",
                                class_loading: 'coh-lazy-loading',
                                class_loaded: 'coh-lazy-loaded',
                                class_error: 'coh-lazy-error',
                                use_native: true
                            });
                            $parent.data('llContainer', llContainer);
                            return false;
                        }
                    }
                });
                if ($.fn.matchHeight) $this.on('load', function() {
                    if ($(this).length) $.fn.matchHeight._update();
                });
            });
        }
    };
})(jQuery, Drupal, once);;
(function($, Drupal) {
    'use strict';
    switch (document.getElementsByTagName('html')[0].lang) {
        case "ja":
            localStorage.setItem("language", "ja");
            localStorage.setItem("i18nextLng", "ja");
            break;
        case "zh-tw":
            localStorage.setItem("language", "zh");
            localStorage.setItem("i18nextLng", "zh");
            break;
        case "fr":
            localStorage.setItem("language", "fr");
            localStorage.setItem("i18nextLng", "fr");
            break;
        case "de":
            localStorage.setItem("language", "de");
            localStorage.setItem("i18nextLng", "de");
            break;
        case "ko":
            localStorage.setItem("language", "ko");
            localStorage.setItem("i18nextLng", "ko");
            break;
        case "pt-br":
            localStorage.setItem("language", "pt");
            localStorage.setItem("i18nextLng", "pt");
            break;
        case "ar":
            localStorage.setItem("language", "ar");
            localStorage.setItem("i18nextLng", "ar");
            break;
        case "es":
            localStorage.setItem("language", "es");
            localStorage.setItem("i18nextLng", "es");
            break;
        default:
            localStorage.setItem("language", "en");
            localStorage.setItem("i18nextLng", "en");
            break;
    }
    if (document.getElementsByTagName('html')[0].lang == "en" || document.getElementsByTagName('html')[0].lang == "zh-tw" || document.getElementsByTagName('html')[0].lang == "ja" || document.getElementsByTagName('html')[0].lang == "pt-br" || document.getElementsByTagName('html')[0].lang == "es" || document.getElementsByTagName('html')[0].lang == "fr" || document.getElementsByTagName('html')[0].lang == "de" || document.getElementsByTagName('html')[0].lang == "ko" || document.getElementsByTagName('html')[0].lang == "ar") document.addEventListener('DOMContentLoaded', () => {
        var search_anchors = document.querySelectorAll("a.search");
        for (var i = 0; i < search_anchors.length; i++) search_anchors[i].addEventListener("click", function disable_search_anchors(event) {
            search_clicked = true;
            event.preventDefault();
        });
    });
    if (document.getElementsByTagName('html')[0].lang == "en" || document.getElementsByTagName('html')[0].lang == "zh-tw" || document.getElementsByTagName('html')[0].lang == "ja" || document.getElementsByTagName('html')[0].lang == "pt-br" || document.getElementsByTagName('html')[0].lang == "es" || document.getElementsByTagName('html')[0].lang == "fr" || document.getElementsByTagName('html')[0].lang == "de" || document.getElementsByTagName('html')[0].lang == "ko" || document.getElementsByTagName('html')[0].lang == "ar") {
        $("#auto").hide();
        $(document).on('click', '#topNavbar a.search', function(e) {
            e.preventDefault();
            var searc_anchor_interval = setInterval(function() {
                if (jQuery("script[src*='searchbox.js']").length > 0) {
                    clearInterval(searc_anchor_interval);
                    $(".primary-menu").parent().addClass("search-show").addClass("top-menu-main");
                    $("#auto").show();
                    $("#search-box-autocomplete").attr("placeholder", Drupal.t("Search"));
                    if (document.getElementById("autoCompleteId") != null) document.getElementById("autoCompleteId").focus();
                    else var searc_autofocus_interval = setInterval(function() {
                        if (document.getElementById("autoCompleteId") != null) {
                            clearInterval(searc_autofocus_interval);
                            document.getElementById("autoCompleteId").focus();
                        }
                    }, 50);
                    $("#menu-primary li.getbtn").show();
                }
            }, 100);
        });
        $(document).on('click', function(e) {
            var container = $("#auto");
            if (!$(e.target).closest(container).length) {
                container.hide();
                $(".primary-menu").parent().removeClass("search-show");
                if (window.innerWidth <= 767) $(".navbar-nav li.utitlies-footer, .navbar-nav li.utilities-footer-in").show();
            }
        });
        $(document).on('click', '#auto .close-Button', function() {
            var container = $("#auto");
            container.hide();
            $(".primary-menu").parent().removeClass("search-show");
            document.getElementById('search-box-autocomplete').value = '';
            if (window.innerWidth <= 767) $(".navbar-nav li.utitlies-footer, .navbar-nav li.utilities-footer-in").show();
        });
    }
})(jQuery, Drupal);
var searchiunifyfiles = {};
searchiunifyfiles["js"] = [];
searchiunifyfiles["css"] = [];

function loadjscssfile(filename, filetype) {
    if (filetype == "js" && searchiunifyfiles.js.findIndex((item) => item == filename) == -1) {
        var fileref = document.createElement('script');
        fileref.setAttribute("type", "text/javascript");
        fileref.setAttribute("src", filename);
        searchiunifyfiles.js.push(filename);
    } else {
        if (filetype == "css" && searchiunifyfiles.css.findIndex((item) => item == filename) == -1) {
            var fileref = document.createElement("link");
            fileref.setAttribute("rel", "stylesheet");
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", filename);
            searchiunifyfiles.css.push(filename);
        }
    }
    if (typeof fileref != "undefined") document.getElementsByTagName("head")[0].appendChild(fileref);
}
loadsearchunify = function() {
    loadjscssfile(drupalSettings.aai_searchunify.endpoint + 'resources/Allow/an.js?uid=' + drupalSettings.aai_searchunify.uid, 'js');
    loadjscssfile(drupalSettings.aai_searchunify.endpoint + 'resources/search_clients_custom/' + drupalSettings.aai_searchunify.uid + '/searchbox.css', 'css');
    var filename = drupalSettings.aai_searchunify.endpoint + 'resources/search_clients_custom/' + drupalSettings.aai_searchunify.uid + '/searchbox.js';
    loadjscssfile(filename, 'js');
    if (document.getElementsByTagName("su-app").length > 0) {
        var filename = drupalSettings.aai_searchunify.endpoint + 'resources/search_clients_custom/' + drupalSettings.aai_searchunify.uid + '/main.js';
        loadjscssfile(filename, 'js');
        loadjscssfile(drupalSettings.aai_searchunify.endpoint + 'resources/search_clients_custom/' + drupalSettings.aai_searchunify.uid + '/main.css', 'css');
    }
};
var scripts_loaded = false;

function searchunifyLoadonce(e) {
    loadsearchunify();
    document.body.removeEventListener("mousedown", searchunifyLoadonce);
    document.body.removeEventListener("mousemove", searchunifyLoadonce);
    scripts_loaded = true;
}
aai_dependencies(["drupalSettings.aai_searchunify", "drupalSettings.aai_searchunify.endpoint", "drupalSettings.aai_searchunify.uid"]).then(function() {
    if (document.getElementsByTagName("su-app").length > 0) searchunifyLoadonce();
    else {
        document.body.addEventListener("mousedown", searchunifyLoadonce);
        document.body.addEventListener("mousemove", searchunifyLoadonce);
    }
});;
(function(factory) {
    if (typeof define === "function" && define.amd) define(["jquery", "./version"], factory);
    else factory(jQuery);
}(function($) {
    if ($.fn.jquery.substring(0, 3) === "1.7") {
        $.each(["Width", "Height"], function(i, name) {
            var side = name === "Width" ? ["Left", "Right"] : ["Top", "Bottom"],
                type = name.toLowerCase(),
                orig = {
                    innerWidth: $.fn.innerWidth,
                    innerHeight: $.fn.innerHeight,
                    outerWidth: $.fn.outerWidth,
                    outerHeight: $.fn.outerHeight
                };

            function reduce(elem, size, border, margin) {
                $.each(side, function() {
                    size -= parseFloat($.css(elem, "padding" + this)) || 0;
                    if (border) size -= parseFloat($.css(elem, "border" + this + "Width")) || 0;
                    if (margin) size -= parseFloat($.css(elem, "margin" + this)) || 0;
                });
                return size;
            }
            $.fn["inner" + name] = function(size) {
                if (size === undefined) return orig["inner" + name].call(this);
                return this.each(function() {
                    $(this).css(type, reduce(this, size) + "px");
                });
            };
            $.fn["outer" + name] = function(size, margin) {
                if (typeof size !== "number") return orig["outer" + name].call(this, size);
                return this.each(function() {
                    $(this).css(type, reduce(this, size, true, margin) + "px");
                });
            };
        });
        $.fn.addBack = function(selector) {
            return this.add(selector == null ? this.prevObject : this.prevObject.filter(selector));
        };
    }
}));;
(function(factory) {
    if (typeof define === "function" && define.amd) define(["jquery", "./version"], factory);
    else factory(jQuery);
}(function($) {
    var dataSpace = "ui-effects-",
        dataSpaceStyle = "ui-effects-style",
        dataSpaceAnimated = "ui-effects-animated",
        jQuery = $;
    $.effects = {
        effect: {}
    };
    (function(jQuery, undefined) {
        var stepHooks = "backgroundColor borderBottomColor borderLeftColor borderRightColor " + "borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor",
            rplusequals = /^([\-+])=\s*(\d+\.?\d*)/,
            stringParsers = [{
                re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                parse: function(execResult) {
                    return [execResult[1], execResult[2], execResult[3], execResult[4]];
                }
            }, {
                re: /rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                parse: function(execResult) {
                    return [execResult[1] * 2.55, execResult[2] * 2.55, execResult[3] * 2.55, execResult[4]];
                }
            }, {
                re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
                parse: function(execResult) {
                    return [parseInt(execResult[1], 16), parseInt(execResult[2], 16), parseInt(execResult[3], 16)];
                }
            }, {
                re: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
                parse: function(execResult) {
                    return [parseInt(execResult[1] + execResult[1], 16), parseInt(execResult[2] + execResult[2], 16), parseInt(execResult[3] + execResult[3], 16)];
                }
            }, {
                re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                space: "hsla",
                parse: function(execResult) {
                    return [execResult[1], execResult[2] / 100, execResult[3] / 100, execResult[4]];
                }
            }],
            color = jQuery.Color = function(color, green, blue, alpha) {
                return new jQuery.Color.fn.parse(color, green, blue, alpha);
            },
            spaces = {
                rgba: {
                    props: {
                        red: {
                            idx: 0,
                            type: "byte"
                        },
                        green: {
                            idx: 1,
                            type: "byte"
                        },
                        blue: {
                            idx: 2,
                            type: "byte"
                        }
                    }
                },
                hsla: {
                    props: {
                        hue: {
                            idx: 0,
                            type: "degrees"
                        },
                        saturation: {
                            idx: 1,
                            type: "percent"
                        },
                        lightness: {
                            idx: 2,
                            type: "percent"
                        }
                    }
                }
            },
            propTypes = {
                "byte": {
                    floor: true,
                    max: 255
                },
                "percent": {
                    max: 1
                },
                "degrees": {
                    mod: 360,
                    floor: true
                }
            },
            support = color.support = {},
            supportElem = jQuery("<p>")[0],
            colors, each = jQuery.each;
        supportElem.style.cssText = "background-color:rgba(1,1,1,.5)";
        support.rgba = supportElem.style.backgroundColor.indexOf("rgba") > -1;
        each(spaces, function(spaceName, space) {
            space.cache = "_" + spaceName;
            space.props.alpha = {
                idx: 3,
                type: "percent",
                def: 1
            };
        });

        function clamp(value, prop, allowEmpty) {
            var type = propTypes[prop.type] || {};
            if (value == null) return (allowEmpty || !prop.def) ? null : prop.def;
            value = type.floor ? ~~value : parseFloat(value);
            if (isNaN(value)) return prop.def;
            if (type.mod) return (value + type.mod) % type.mod;
            return 0 > value ? 0 : type.max < value ? type.max : value;
        }

        function stringParse(string) {
            var inst = color(),
                rgba = inst._rgba = [];
            string = string.toLowerCase();
            each(stringParsers, function(i, parser) {
                var parsed, match = parser.re.exec(string),
                    values = match && parser.parse(match),
                    spaceName = parser.space || "rgba";
                if (values) {
                    parsed = inst[spaceName](values);
                    inst[spaces[spaceName].cache] = parsed[spaces[spaceName].cache];
                    rgba = inst._rgba = parsed._rgba;
                    return false;
                }
            });
            if (rgba.length) {
                if (rgba.join() === "0,0,0,0") jQuery.extend(rgba, colors.transparent);
                return inst;
            }
            return colors[string];
        }
        color.fn = jQuery.extend(color.prototype, {
            parse: function(red, green, blue, alpha) {
                if (red === undefined) {
                    this._rgba = [null, null, null, null];
                    return this;
                }
                if (red.jquery || red.nodeType) {
                    red = jQuery(red).css(green);
                    green = undefined;
                }
                var inst = this,
                    type = jQuery.type(red),
                    rgba = this._rgba = [];
                if (green !== undefined) {
                    red = [red, green, blue, alpha];
                    type = "array";
                }
                if (type === "string") return this.parse(stringParse(red) || colors._default);
                if (type === "array") {
                    each(spaces.rgba.props, function(key, prop) {
                        rgba[prop.idx] = clamp(red[prop.idx], prop);
                    });
                    return this;
                }
                if (type === "object") {
                    if (red instanceof color) each(spaces, function(spaceName, space) {
                        if (red[space.cache]) inst[space.cache] = red[space.cache].slice();
                    });
                    else each(spaces, function(spaceName, space) {
                        var cache = space.cache;
                        each(space.props, function(key, prop) {
                            if (!inst[cache] && space.to) {
                                if (key === "alpha" || red[key] == null) return;
                                inst[cache] = space.to(inst._rgba);
                            }
                            inst[cache][prop.idx] = clamp(red[key], prop, true);
                        });
                        if (inst[cache] && jQuery.inArray(null, inst[cache].slice(0, 3)) < 0) {
                            inst[cache][3] = 1;
                            if (space.from) inst._rgba = space.from(inst[cache]);
                        }
                    });
                    return this;
                }
            },
            is: function(compare) {
                var is = color(compare),
                    same = true,
                    inst = this;
                each(spaces, function(_, space) {
                    var localCache, isCache = is[space.cache];
                    if (isCache) {
                        localCache = inst[space.cache] || space.to && space.to(inst._rgba) || [];
                        each(space.props, function(_, prop) {
                            if (isCache[prop.idx] != null) {
                                same = (isCache[prop.idx] === localCache[prop.idx]);
                                return same;
                            }
                        });
                    }
                    return same;
                });
                return same;
            },
            _space: function() {
                var used = [],
                    inst = this;
                each(spaces, function(spaceName, space) {
                    if (inst[space.cache]) used.push(spaceName);
                });
                return used.pop();
            },
            transition: function(other, distance) {
                var end = color(other),
                    spaceName = end._space(),
                    space = spaces[spaceName],
                    startColor = this.alpha() === 0 ? color("transparent") : this,
                    start = startColor[space.cache] || space.to(startColor._rgba),
                    result = start.slice();
                end = end[space.cache];
                each(space.props, function(key, prop) {
                    var index = prop.idx,
                        startValue = start[index],
                        endValue = end[index],
                        type = propTypes[prop.type] || {};
                    if (endValue === null) return;
                    if (startValue === null) result[index] = endValue;
                    else {
                        if (type.mod)
                            if (endValue - startValue > type.mod / 2) startValue += type.mod;
                            else {
                                if (startValue - endValue > type.mod / 2) startValue -= type.mod;
                            }
                        result[index] = clamp((endValue - startValue) * distance + startValue, prop);
                    }
                });
                return this[spaceName](result);
            },
            blend: function(opaque) {
                if (this._rgba[3] === 1) return this;
                var rgb = this._rgba.slice(),
                    a = rgb.pop(),
                    blend = color(opaque)._rgba;
                return color(jQuery.map(rgb, function(v, i) {
                    return (1 - a) * blend[i] + a * v;
                }));
            },
            toRgbaString: function() {
                var prefix = "rgba(",
                    rgba = jQuery.map(this._rgba, function(v, i) {
                        return v == null ? (i > 2 ? 1 : 0) : v;
                    });
                if (rgba[3] === 1) {
                    rgba.pop();
                    prefix = "rgb(";
                }
                return prefix + rgba.join() + ")";
            },
            toHslaString: function() {
                var prefix = "hsla(",
                    hsla = jQuery.map(this.hsla(), function(v, i) {
                        if (v == null) v = i > 2 ? 1 : 0;
                        if (i && i < 3) v = Math.round(v * 100) + "%";
                        return v;
                    });
                if (hsla[3] === 1) {
                    hsla.pop();
                    prefix = "hsl(";
                }
                return prefix + hsla.join() + ")";
            },
            toHexString: function(includeAlpha) {
                var rgba = this._rgba.slice(),
                    alpha = rgba.pop();
                if (includeAlpha) rgba.push(~~(alpha * 255));
                return "#" + jQuery.map(rgba, function(v) {
                    v = (v || 0).toString(16);
                    return v.length === 1 ? "0" + v : v;
                }).join("");
            },
            toString: function() {
                return this._rgba[3] === 0 ? "transparent" : this.toRgbaString();
            }
        });
        color.fn.parse.prototype = color.fn;

        function hue2rgb(p, q, h) {
            h = (h + 1) % 1;
            if (h * 6 < 1) return p + (q - p) * h * 6;
            if (h * 2 < 1) return q;
            if (h * 3 < 2) return p + (q - p) * ((2 / 3) - h) * 6;
            return p;
        }
        spaces.hsla.to = function(rgba) {
            if (rgba[0] == null || rgba[1] == null || rgba[2] == null) return [null, null, null, rgba[3]];
            var r = rgba[0] / 255,
                g = rgba[1] / 255,
                b = rgba[2] / 255,
                a = rgba[3],
                max = Math.max(r, g, b),
                min = Math.min(r, g, b),
                diff = max - min,
                add = max + min,
                l = add * 0.5,
                h, s;
            if (min === max) h = 0;
            else if (r === max) h = (60 * (g - b) / diff) + 360;
            else if (g === max) h = (60 * (b - r) / diff) + 120;
            else h = (60 * (r - g) / diff) + 240;
            if (diff === 0) s = 0;
            else if (l <= 0.5) s = diff / add;
            else s = diff / (2 - add);
            return [Math.round(h) % 360, s, l, a == null ? 1 : a];
        };
        spaces.hsla.from = function(hsla) {
            if (hsla[0] == null || hsla[1] == null || hsla[2] == null) return [null, null, null, hsla[3]];
            var h = hsla[0] / 360,
                s = hsla[1],
                l = hsla[2],
                a = hsla[3],
                q = l <= 0.5 ? l * (1 + s) : l + s - l * s,
                p = 2 * l - q;
            return [Math.round(hue2rgb(p, q, h + (1 / 3)) * 255), Math.round(hue2rgb(p, q, h) * 255), Math.round(hue2rgb(p, q, h - (1 / 3)) * 255), a];
        };
        each(spaces, function(spaceName, space) {
            var props = space.props,
                cache = space.cache,
                to = space.to,
                from = space.from;
            color.fn[spaceName] = function(value) {
                if (to && !this[cache]) this[cache] = to(this._rgba);
                if (value === undefined) return this[cache].slice();
                var ret, type = jQuery.type(value),
                    arr = (type === "array" || type === "object") ? value : arguments,
                    local = this[cache].slice();
                each(props, function(key, prop) {
                    var val = arr[type === "object" ? key : prop.idx];
                    if (val == null) val = local[prop.idx];
                    local[prop.idx] = clamp(val, prop);
                });
                if (from) {
                    ret = color(from(local));
                    ret[cache] = local;
                    return ret;
                } else return color(local);
            };
            each(props, function(key, prop) {
                if (color.fn[key]) return;
                color.fn[key] = function(value) {
                    var vtype = jQuery.type(value),
                        fn = (key === "alpha" ? (this._hsla ? "hsla" : "rgba") : spaceName),
                        local = this[fn](),
                        cur = local[prop.idx],
                        match;
                    if (vtype === "undefined") return cur;
                    if (vtype === "function") {
                        value = value.call(this, cur);
                        vtype = jQuery.type(value);
                    }
                    if (value == null && prop.empty) return this;
                    if (vtype === "string") {
                        match = rplusequals.exec(value);
                        if (match) value = cur + parseFloat(match[2]) * (match[1] === "+" ? 1 : -1);
                    }
                    local[prop.idx] = value;
                    return this[fn](local);
                };
            });
        });
        color.hook = function(hook) {
            var hooks = hook.split(" ");
            each(hooks, function(i, hook) {
                jQuery.cssHooks[hook] = {
                    set: function(elem, value) {
                        var parsed, curElem, backgroundColor = "";
                        if (value !== "transparent" && (jQuery.type(value) !== "string" || (parsed = stringParse(value)))) {
                            value = color(parsed || value);
                            if (!support.rgba && value._rgba[3] !== 1) {
                                curElem = hook === "backgroundColor" ? elem.parentNode : elem;
                                while ((backgroundColor === "" || backgroundColor === "transparent") && curElem && curElem.style) try {
                                    backgroundColor = jQuery.css(curElem, "backgroundColor");
                                    curElem = curElem.parentNode;
                                } catch (e) {}
                                value = value.blend(backgroundColor && backgroundColor !== "transparent" ? backgroundColor : "_default");
                            }
                            value = value.toRgbaString();
                        }
                        try {
                            elem.style[hook] = value;
                        } catch (e) {}
                    }
                };
                jQuery.fx.step[hook] = function(fx) {
                    if (!fx.colorInit) {
                        fx.start = color(fx.elem, hook);
                        fx.end = color(fx.end);
                        fx.colorInit = true;
                    }
                    jQuery.cssHooks[hook].set(fx.elem, fx.start.transition(fx.end, fx.pos));
                };
            });
        };
        color.hook(stepHooks);
        jQuery.cssHooks.borderColor = {
            expand: function(value) {
                var expanded = {};
                each(["Top", "Right", "Bottom", "Left"], function(i, part) {
                    expanded["border" + part + "Color"] = value;
                });
                return expanded;
            }
        };
        colors = jQuery.Color.names = {
            aqua: "#00ffff",
            black: "#000000",
            blue: "#0000ff",
            fuchsia: "#ff00ff",
            gray: "#808080",
            green: "#008000",
            lime: "#00ff00",
            maroon: "#800000",
            navy: "#000080",
            olive: "#808000",
            purple: "#800080",
            red: "#ff0000",
            silver: "#c0c0c0",
            teal: "#008080",
            white: "#ffffff",
            yellow: "#ffff00",
            transparent: [null, null, null, 0],
            _default: "#ffffff"
        };
    })(jQuery);
    (function() {
        var classAnimationActions = ["add", "remove", "toggle"],
            shorthandStyles = {
                border: 1,
                borderBottom: 1,
                borderColor: 1,
                borderLeft: 1,
                borderRight: 1,
                borderTop: 1,
                borderWidth: 1,
                margin: 1,
                padding: 1
            };
        $.each(["borderLeftStyle", "borderRightStyle", "borderBottomStyle", "borderTopStyle"], function(_, prop) {
            $.fx.step[prop] = function(fx) {
                if (fx.end !== "none" && !fx.setAttr || fx.pos === 1 && !fx.setAttr) {
                    jQuery.style(fx.elem, prop, fx.end);
                    fx.setAttr = true;
                }
            };
        });

        function getElementStyles(elem) {
            var key, len, style = elem.ownerDocument.defaultView ? elem.ownerDocument.defaultView.getComputedStyle(elem, null) : elem.currentStyle,
                styles = {};
            if (style && style.length && style[0] && style[style[0]]) {
                len = style.length;
                while (len--) {
                    key = style[len];
                    if (typeof style[key] === "string") styles[$.camelCase(key)] = style[key];
                }
            } else {
                for (key in style)
                    if (typeof style[key] === "string") styles[key] = style[key];
            }
            return styles;
        }

        function styleDifference(oldStyle, newStyle) {
            var diff = {},
                name, value;
            for (name in newStyle) {
                value = newStyle[name];
                if (oldStyle[name] !== value)
                    if (!shorthandStyles[name])
                        if ($.fx.step[name] || !isNaN(parseFloat(value))) diff[name] = value;
            }
            return diff;
        }
        if (!$.fn.addBack) $.fn.addBack = function(selector) {
            return this.add(selector == null ? this.prevObject : this.prevObject.filter(selector));
        };
        $.effects.animateClass = function(value, duration, easing, callback) {
            var o = $.speed(duration, easing, callback);
            return this.queue(function() {
                var animated = $(this),
                    baseClass = animated.attr("class") || "",
                    applyClassChange, allAnimations = o.children ? animated.find("*").addBack() : animated;
                allAnimations = allAnimations.map(function() {
                    var el = $(this);
                    return {
                        el,
                        start: getElementStyles(this)
                    };
                });
                applyClassChange = function() {
                    $.each(classAnimationActions, function(i, action) {
                        if (value[action]) animated[action + "Class"](value[action]);
                    });
                };
                applyClassChange();
                allAnimations = allAnimations.map(function() {
                    this.end = getElementStyles(this.el[0]);
                    this.diff = styleDifference(this.start, this.end);
                    return this;
                });
                animated.attr("class", baseClass);
                allAnimations = allAnimations.map(function() {
                    var styleInfo = this,
                        dfd = $.Deferred(),
                        opts = $.extend({}, o, {
                            queue: false,
                            complete: function() {
                                dfd.resolve(styleInfo);
                            }
                        });
                    this.el.animate(this.diff, opts);
                    return dfd.promise();
                });
                $.when.apply($, allAnimations.get()).done(function() {
                    applyClassChange();
                    $.each(arguments, function() {
                        var el = this.el;
                        $.each(this.diff, function(key) {
                            el.css(key, "");
                        });
                    });
                    o.complete.call(animated[0]);
                });
            });
        };
        $.fn.extend({
            addClass: (function(orig) {
                return function(classNames, speed, easing, callback) {
                    return speed ? $.effects.animateClass.call(this, {
                        add: classNames
                    }, speed, easing, callback) : orig.apply(this, arguments);
                };
            })($.fn.addClass),
            removeClass: (function(orig) {
                return function(classNames, speed, easing, callback) {
                    return arguments.length > 1 ? $.effects.animateClass.call(this, {
                        remove: classNames
                    }, speed, easing, callback) : orig.apply(this, arguments);
                };
            })($.fn.removeClass),
            toggleClass: (function(orig) {
                return function(classNames, force, speed, easing, callback) {
                    if (typeof force === "boolean" || force === undefined)
                        if (!speed) return orig.apply(this, arguments);
                        else return $.effects.animateClass.call(this, (force ? {
                            add: classNames
                        } : {
                            remove: classNames
                        }), speed, easing, callback);
                    else return $.effects.animateClass.call(this, {
                        toggle: classNames
                    }, force, speed, easing);
                };
            })($.fn.toggleClass),
            switchClass: function(remove, add, speed, easing, callback) {
                return $.effects.animateClass.call(this, {
                    add,
                    remove
                }, speed, easing, callback);
            }
        });
    })();
    (function() {
        if ($.expr && $.expr.filters && $.expr.filters.animated) $.expr.filters.animated = (function(orig) {
            return function(elem) {
                return !!$(elem).data(dataSpaceAnimated) || orig(elem);
            };
        })($.expr.filters.animated);
        if ($.uiBackCompat !== false) $.extend($.effects, {
            save: function(element, set) {
                var i = 0,
                    length = set.length;
                for (; i < length; i++)
                    if (set[i] !== null) element.data(dataSpace + set[i], element[0].style[set[i]]);
            },
            restore: function(element, set) {
                var val, i = 0,
                    length = set.length;
                for (; i < length; i++)
                    if (set[i] !== null) {
                        val = element.data(dataSpace + set[i]);
                        element.css(set[i], val);
                    }
            },
            setMode: function(el, mode) {
                if (mode === "toggle") mode = el.is(":hidden") ? "show" : "hide";
                return mode;
            },
            createWrapper: function(element) {
                if (element.parent().is(".ui-effects-wrapper")) return element.parent();
                var props = {
                        width: element.outerWidth(true),
                        height: element.outerHeight(true),
                        "float": element.css("float")
                    },
                    wrapper = $("<div></div>").addClass("ui-effects-wrapper").css({
                        fontSize: "100%",
                        background: "transparent",
                        border: "none",
                        margin: 0,
                        padding: 0
                    }),
                    size = {
                        width: element.width(),
                        height: element.height()
                    },
                    active = document.activeElement;
                try {
                    active.id;
                } catch (e) {
                    active = document.body;
                }
                element.wrap(wrapper);
                if (element[0] === active || $.contains(element[0], active)) $(active).trigger("focus");
                wrapper = element.parent();
                if (element.css("position") === "static") {
                    wrapper.css({
                        position: "relative"
                    });
                    element.css({
                        position: "relative"
                    });
                } else {
                    $.extend(props, {
                        position: element.css("position"),
                        zIndex: element.css("z-index")
                    });
                    $.each(["top", "left", "bottom", "right"], function(i, pos) {
                        props[pos] = element.css(pos);
                        if (isNaN(parseInt(props[pos], 10))) props[pos] = "auto";
                    });
                    element.css({
                        position: "relative",
                        top: 0,
                        left: 0,
                        right: "auto",
                        bottom: "auto"
                    });
                }
                element.css(size);
                return wrapper.css(props).show();
            },
            removeWrapper: function(element) {
                var active = document.activeElement;
                if (element.parent().is(".ui-effects-wrapper")) {
                    element.parent().replaceWith(element);
                    if (element[0] === active || $.contains(element[0], active)) $(active).trigger("focus");
                }
                return element;
            }
        });
        $.extend($.effects, {
            version: "1.12.1",
            define: function(name, mode, effect) {
                if (!effect) {
                    effect = mode;
                    mode = "effect";
                }
                $.effects.effect[name] = effect;
                $.effects.effect[name].mode = mode;
                return effect;
            },
            scaledDimensions: function(element, percent, direction) {
                if (percent === 0) return {
                    height: 0,
                    width: 0,
                    outerHeight: 0,
                    outerWidth: 0
                };
                var x = direction !== "horizontal" ? ((percent || 100) / 100) : 1,
                    y = direction !== "vertical" ? ((percent || 100) / 100) : 1;
                return {
                    height: element.height() * y,
                    width: element.width() * x,
                    outerHeight: element.outerHeight() * y,
                    outerWidth: element.outerWidth() * x
                };
            },
            clipToBox: function(animation) {
                return {
                    width: animation.clip.right - animation.clip.left,
                    height: animation.clip.bottom - animation.clip.top,
                    left: animation.clip.left,
                    top: animation.clip.top
                };
            },
            unshift: function(element, queueLength, count) {
                var queue = element.queue();
                if (queueLength > 1) queue.splice.apply(queue, [1, 0].concat(queue.splice(queueLength, count)));
                element.dequeue();
            },
            saveStyle: function(element) {
                element.data(dataSpaceStyle, element[0].style.cssText);
            },
            restoreStyle: function(element) {
                element[0].style.cssText = element.data(dataSpaceStyle) || "";
                element.removeData(dataSpaceStyle);
            },
            mode: function(element, mode) {
                var hidden = element.is(":hidden");
                if (mode === "toggle") mode = hidden ? "show" : "hide";
                if (hidden ? mode === "hide" : mode === "show") mode = "none";
                return mode;
            },
            getBaseline: function(origin, original) {
                var y, x;
                switch (origin[0]) {
                    case "top":
                        y = 0;
                        break;
                    case "middle":
                        y = 0.5;
                        break;
                    case "bottom":
                        y = 1;
                        break;
                    default:
                        y = origin[0] / original.height;
                }
                switch (origin[1]) {
                    case "left":
                        x = 0;
                        break;
                    case "center":
                        x = 0.5;
                        break;
                    case "right":
                        x = 1;
                        break;
                    default:
                        x = origin[1] / original.width;
                }
                return {
                    x,
                    y
                };
            },
            createPlaceholder: function(element) {
                var placeholder, cssPosition = element.css("position"),
                    position = element.position();
                element.css({
                    marginTop: element.css("marginTop"),
                    marginBottom: element.css("marginBottom"),
                    marginLeft: element.css("marginLeft"),
                    marginRight: element.css("marginRight")
                }).outerWidth(element.outerWidth()).outerHeight(element.outerHeight());
                if (/^(static|relative)/.test(cssPosition)) {
                    cssPosition = "absolute";
                    placeholder = $("<" + element[0].nodeName + ">").insertAfter(element).css({
                        display: /^(inline|ruby)/.test(element.css("display")) ? "inline-block" : "block",
                        visibility: "hidden",
                        marginTop: element.css("marginTop"),
                        marginBottom: element.css("marginBottom"),
                        marginLeft: element.css("marginLeft"),
                        marginRight: element.css("marginRight"),
                        "float": element.css("float")
                    }).outerWidth(element.outerWidth()).outerHeight(element.outerHeight()).addClass("ui-effects-placeholder");
                    element.data(dataSpace + "placeholder", placeholder);
                }
                element.css({
                    position: cssPosition,
                    left: position.left,
                    top: position.top
                });
                return placeholder;
            },
            removePlaceholder: function(element) {
                var dataKey = dataSpace + "placeholder",
                    placeholder = element.data(dataKey);
                if (placeholder) {
                    placeholder.remove();
                    element.removeData(dataKey);
                }
            },
            cleanUp: function(element) {
                $.effects.restoreStyle(element);
                $.effects.removePlaceholder(element);
            },
            setTransition: function(element, list, factor, value) {
                value = value || {};
                $.each(list, function(i, x) {
                    var unit = element.cssUnit(x);
                    if (unit[0] > 0) value[x] = unit[0] * factor + unit[1];
                });
                return value;
            }
        });

        function _normalizeArguments(effect, options, speed, callback) {
            if ($.isPlainObject(effect)) {
                options = effect;
                effect = effect.effect;
            }
            effect = {
                effect
            };
            if (options == null) options = {};
            if ($.isFunction(options)) {
                callback = options;
                speed = null;
                options = {};
            }
            if (typeof options === "number" || $.fx.speeds[options]) {
                callback = speed;
                speed = options;
                options = {};
            }
            if ($.isFunction(speed)) {
                callback = speed;
                speed = null;
            }
            if (options) $.extend(effect, options);
            speed = speed || options.duration;
            effect.duration = $.fx.off ? 0 : typeof speed === "number" ? speed : speed in $.fx.speeds ? $.fx.speeds[speed] : $.fx.speeds._default;
            effect.complete = callback || options.complete;
            return effect;
        }

        function standardAnimationOption(option) {
            if (!option || typeof option === "number" || $.fx.speeds[option]) return true;
            if (typeof option === "string" && !$.effects.effect[option]) return true;
            if ($.isFunction(option)) return true;
            if (typeof option === "object" && !option.effect) return true;
            return false;
        }
        $.fn.extend({
            effect: function() {
                var args = _normalizeArguments.apply(this, arguments),
                    effectMethod = $.effects.effect[args.effect],
                    defaultMode = effectMethod.mode,
                    queue = args.queue,
                    queueName = queue || "fx",
                    complete = args.complete,
                    mode = args.mode,
                    modes = [],
                    prefilter = function(next) {
                        var el = $(this),
                            normalizedMode = $.effects.mode(el, mode) || defaultMode;
                        el.data(dataSpaceAnimated, true);
                        modes.push(normalizedMode);
                        if (defaultMode && (normalizedMode === "show" || (normalizedMode === defaultMode && normalizedMode === "hide"))) el.show();
                        if (!defaultMode || normalizedMode !== "none") $.effects.saveStyle(el);
                        if ($.isFunction(next)) next();
                    };
                if ($.fx.off || !effectMethod)
                    if (mode) return this[mode](args.duration, complete);
                    else return this.each(function() {
                        if (complete) complete.call(this);
                    });

                function run(next) {
                    var elem = $(this);

                    function cleanup() {
                        elem.removeData(dataSpaceAnimated);
                        $.effects.cleanUp(elem);
                        if (args.mode === "hide") elem.hide();
                        done();
                    }

                    function done() {
                        if ($.isFunction(complete)) complete.call(elem[0]);
                        if ($.isFunction(next)) next();
                    }
                    args.mode = modes.shift();
                    if ($.uiBackCompat !== false && !defaultMode)
                        if (elem.is(":hidden") ? mode === "hide" : mode === "show") {
                            elem[mode]();
                            done();
                        } else effectMethod.call(elem[0], args, done);
                    else if (args.mode === "none") {
                        elem[mode]();
                        done();
                    } else effectMethod.call(elem[0], args, cleanup);
                }
                return queue === false ? this.each(prefilter).each(run) : this.queue(queueName, prefilter).queue(queueName, run);
            },
            show: (function(orig) {
                return function(option) {
                    if (standardAnimationOption(option)) return orig.apply(this, arguments);
                    else {
                        var args = _normalizeArguments.apply(this, arguments);
                        args.mode = "show";
                        return this.effect.call(this, args);
                    }
                };
            })($.fn.show),
            hide: (function(orig) {
                return function(option) {
                    if (standardAnimationOption(option)) return orig.apply(this, arguments);
                    else {
                        var args = _normalizeArguments.apply(this, arguments);
                        args.mode = "hide";
                        return this.effect.call(this, args);
                    }
                };
            })($.fn.hide),
            toggle: (function(orig) {
                return function(option) {
                    if (standardAnimationOption(option) || typeof option === "boolean") return orig.apply(this, arguments);
                    else {
                        var args = _normalizeArguments.apply(this, arguments);
                        args.mode = "toggle";
                        return this.effect.call(this, args);
                    }
                };
            })($.fn.toggle),
            cssUnit: function(key) {
                var style = this.css(key),
                    val = [];
                $.each(["em", "px", "%", "pt"], function(i, unit) {
                    if (style.indexOf(unit) > 0) val = [parseFloat(style), unit];
                });
                return val;
            },
            cssClip: function(clipObj) {
                if (clipObj) return this.css("clip", "rect(" + clipObj.top + "px " + clipObj.right + "px " + clipObj.bottom + "px " + clipObj.left + "px)");
                return parseClip(this.css("clip"), this);
            },
            transfer: function(options, done) {
                var element = $(this),
                    target = $(options.to),
                    targetFixed = target.css("position") === "fixed",
                    body = $("body"),
                    fixTop = targetFixed ? body.scrollTop() : 0,
                    fixLeft = targetFixed ? body.scrollLeft() : 0,
                    endPosition = target.offset(),
                    animation = {
                        top: endPosition.top - fixTop,
                        left: endPosition.left - fixLeft,
                        height: target.innerHeight(),
                        width: target.innerWidth()
                    },
                    startPosition = element.offset(),
                    transfer = $("<div class='ui-effects-transfer'></div>").appendTo("body").addClass(options.className).css({
                        top: startPosition.top - fixTop,
                        left: startPosition.left - fixLeft,
                        height: element.innerHeight(),
                        width: element.innerWidth(),
                        position: targetFixed ? "fixed" : "absolute"
                    }).animate(animation, options.duration, options.easing, function() {
                        transfer.remove();
                        if ($.isFunction(done)) done();
                    });
            }
        });

        function parseClip(str, element) {
            var outerWidth = element.outerWidth(),
                outerHeight = element.outerHeight(),
                clipRegex = /^rect\((-?\d*\.?\d*px|-?\d+%|auto),?\s*(-?\d*\.?\d*px|-?\d+%|auto),?\s*(-?\d*\.?\d*px|-?\d+%|auto),?\s*(-?\d*\.?\d*px|-?\d+%|auto)\)$/,
                values = clipRegex.exec(str) || ["", 0, outerWidth, outerHeight, 0];
            return {
                top: parseFloat(values[1]) || 0,
                right: values[2] === "auto" ? outerWidth : parseFloat(values[2]),
                bottom: values[3] === "auto" ? outerHeight : parseFloat(values[3]),
                left: parseFloat(values[4]) || 0
            };
        }
        $.fx.step.clip = function(fx) {
            if (!fx.clipInit) {
                fx.start = $(fx.elem).cssClip();
                if (typeof fx.end === "string") fx.end = parseClip(fx.end, fx.elem);
                fx.clipInit = true;
            }
            $(fx.elem).cssClip({
                top: fx.pos * (fx.end.top - fx.start.top) + fx.start.top,
                right: fx.pos * (fx.end.right - fx.start.right) + fx.start.right,
                bottom: fx.pos * (fx.end.bottom - fx.start.bottom) + fx.start.bottom,
                left: fx.pos * (fx.end.left - fx.start.left) + fx.start.left
            });
        };
    })();
    (function() {
        var baseEasings = {};
        $.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function(i, name) {
            baseEasings[name] = function(p) {
                return Math.pow(p, i + 2);
            };
        });
        $.extend(baseEasings, {
            Sine: function(p) {
                return 1 - Math.cos(p * Math.PI / 2);
            },
            Circ: function(p) {
                return 1 - Math.sqrt(1 - p * p);
            },
            Elastic: function(p) {
                return p === 0 || p === 1 ? p : -Math.pow(2, 8 * (p - 1)) * Math.sin(((p - 1) * 80 - 7.5) * Math.PI / 15);
            },
            Back: function(p) {
                return p * p * (3 * p - 2);
            },
            Bounce: function(p) {
                var pow2, bounce = 4;
                while (p < ((pow2 = Math.pow(2, --bounce)) - 1) / 11) {}
                return 1 / Math.pow(4, 3 - bounce) - 7.5625 * Math.pow((pow2 * 3 - 2) / 22 - p, 2);
            }
        });
        $.each(baseEasings, function(name, easeIn) {
            $.easing["easeIn" + name] = easeIn;
            $.easing["easeOut" + name] = function(p) {
                return 1 - easeIn(1 - p);
            };
            $.easing["easeInOut" + name] = function(p) {
                return p < 0.5 ? easeIn(p * 2) / 2 : 1 - easeIn(p * -2 + 2) / 2;
            };
        });
    })();
    return $.effects;
}));;
(function(factory) {
    if (typeof define === "function" && define.amd) define(["jquery", "../version", "../effect"], factory);
    else factory(jQuery);
}(function($) {
    return $.effects.define("fade", "toggle", function(options, done) {
        var show = options.mode === "show";
        $(this).css("opacity", show ? 0 : 1).animate({
            opacity: show ? 1 : 0
        }, {
            queue: false,
            duration: options.duration,
            easing: options.easing,
            complete: done
        });
    });
}));;
(function(factory) {
    if (typeof define === "function" && define.amd) define(["jquery", "../version", "../effect"], factory);
    else factory(jQuery);
}(function($) {
    return $.effects.define("blind", "hide", function(options, done) {
        var map = {
                up: ["bottom", "top"],
                vertical: ["bottom", "top"],
                down: ["top", "bottom"],
                left: ["right", "left"],
                horizontal: ["right", "left"],
                right: ["left", "right"]
            },
            element = $(this),
            direction = options.direction || "up",
            start = element.cssClip(),
            animate = {
                clip: $.extend({}, start)
            },
            placeholder = $.effects.createPlaceholder(element);
        animate.clip[map[direction][0]] = animate.clip[map[direction][1]];
        if (options.mode === "show") {
            element.cssClip(animate.clip);
            if (placeholder) placeholder.css($.effects.clipToBox(animate));
            animate.clip = start;
        }
        if (placeholder) placeholder.animate($.effects.clipToBox(animate), options.duration, options.easing);
        element.animate(animate, {
            queue: false,
            duration: options.duration,
            easing: options.easing,
            complete: done
        });
    });
}));;