/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
function aai_dependencies(params) {
    var start = Date.now();
    var timeout = 20000;

    function waitFor(resolve, reject) {
        var declared = params.filter(function(param) {
            let depth = param.split(".");
            var def = window;
            for (i = 0; i < depth.length; i++) {
                def = def[depth[i]];
                if (typeof def == "undefined") return false;
            }
            return true;
        });
        if (declared.length == params.length) resolve(params);
        else if (timeout && (Date.now() - start) >= timeout) reject(new Error("timeout"));
        else setTimeout(waitFor.bind(this, resolve, reject), 20);
    }
    return new Promise(waitFor);
};
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui = e.ui || {}, e.ui.version = "1.13.3"
}));

/*!
 * jQuery UI :data 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.extend(e.expr.pseudos, {
        data: e.expr.createPseudo ? e.expr.createPseudo((function(n) {
            return function(t) {
                return !!e.data(t, n)
            }
        })) : function(n, t, r) {
            return !!e.data(n, r[3])
        }
    })
}));

/*!
 * jQuery UI Disable Selection 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.fn.extend({
        disableSelection: (n = "onselectstart" in document.createElement("div") ? "selectstart" : "mousedown", function() {
            return this.on(n + ".ui-disableSelection", (function(e) {
                e.preventDefault()
            }))
        }),
        enableSelection: function() {
            return this.off(".ui-disableSelection")
        }
    });
    var n
}));

! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], t) : t(jQuery)
}((function(t) {
    "use strict";
    return t.fn._form = function() {
        return "string" == typeof this[0].form ? this.closest("form") : t(this[0].form)
    }
}));

/*!
 * jQuery UI Support for jQuery core 1.8.x and newer 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 *
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    if (e.expr.pseudos || (e.expr.pseudos = e.expr[":"]), e.uniqueSort || (e.uniqueSort = e.unique), !e.escapeSelector) {
        var n = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,
            t = function(e, n) {
                return n ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
            };
        e.escapeSelector = function(e) {
            return (e + "").replace(n, t)
        }
    }
    e.fn.even && e.fn.odd || e.fn.extend({
        even: function() {
            return this.filter((function(e) {
                return e % 2 == 0
            }))
        },
        odd: function() {
            return this.filter((function(e) {
                return e % 2 == 1
            }))
        }
    })
}));

/*!
 * jQuery UI Scroll Parent 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], t) : t(jQuery)
}((function(t) {
    "use strict";
    return t.fn.scrollParent = function(e) {
        var s = this.css("position"),
            n = "absolute" === s,
            o = e ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
            i = this.parents().filter((function() {
                var e = t(this);
                return (!n || "static" !== e.css("position")) && o.test(e.css("overflow") + e.css("overflow-y") + e.css("overflow-x"))
            })).eq(0);
        return "fixed" !== s && i.length ? i : t(this[0].ownerDocument || document)
    }
}));

/*!
 * jQuery UI Unique ID 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(i) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], i) : i(jQuery)
}((function(i) {
    "use strict";
    return i.fn.extend({
        uniqueId: (e = 0, function() {
            return this.each((function() {
                this.id || (this.id = "ui-id-" + ++e)
            }))
        }),
        removeUniqueId: function() {
            return this.each((function() {
                /^ui-id-\d+$/.test(this.id) && i(this).removeAttr("id")
            }))
        }
    });
    var e
}));

/*!
 * jQuery UI Focusable 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.focusable = function(i, t) {
        var n, s, r, u, a, o = i.nodeName.toLowerCase();
        return "area" === o ? (s = (n = i.parentNode).name, !(!i.href || !s || "map" !== n.nodeName.toLowerCase()) && ((r = e("img[usemap='#" + s + "']")).length > 0 && r.is(":visible"))) : (/^(input|select|textarea|button|object)$/.test(o) ? (u = !i.disabled) && (a = e(i).closest("fieldset")[0]) && (u = !a.disabled) : u = "a" === o && i.href || t, u && e(i).is(":visible") && function(e) {
            var i = e.css("visibility");
            for (;
                "inherit" === i;) i = (e = e.parent()).css("visibility");
            return "visible" === i
        }(e(i)))
    }, e.extend(e.expr.pseudos, {
        focusable: function(i) {
            return e.ui.focusable(i, null != e.attr(i, "tabindex"))
        }
    }), e.ui.focusable
}));

! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase())
}));

/*!
 * jQuery UI Keycode 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.keyCode = {
        BACKSPACE: 8,
        COMMA: 188,
        DELETE: 46,
        DOWN: 40,
        END: 35,
        ENTER: 13,
        ESCAPE: 27,
        HOME: 36,
        LEFT: 37,
        PAGE_DOWN: 34,
        PAGE_UP: 33,
        PERIOD: 190,
        RIGHT: 39,
        SPACE: 32,
        TAB: 9,
        UP: 38
    }
}));

! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.plugin = {
        add: function(n, i, t) {
            var u, o = e.ui[n].prototype;
            for (u in t) o.plugins[u] = o.plugins[u] || [], o.plugins[u].push([i, t[u]])
        },
        call: function(e, n, i, t) {
            var u, o = e.plugins[n];
            if (o && (t || e.element[0].parentNode && 11 !== e.element[0].parentNode.nodeType))
                for (u = 0; u < o.length; u++) e.options[o[u][0]] && o[u][1].apply(e.element, i)
        }
    }
}));

! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.safeActiveElement = function(e) {
        var n;
        try {
            n = e.activeElement
        } catch (t) {
            n = e.body
        }
        return n || (n = e.body), n.nodeName || (n = e.body), n
    }
}));

! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.safeBlur = function(n) {
        n && "body" !== n.nodeName.toLowerCase() && e(n).trigger("blur")
    }
}));

/*!
 * jQuery UI Widget 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], t) : t(jQuery)
}((function(t) {
    "use strict";
    var e, i = 0,
        s = Array.prototype.hasOwnProperty,
        n = Array.prototype.slice;
    return t.cleanData = (e = t.cleanData, function(i) {
        var s, n, o;
        for (o = 0; null != (n = i[o]); o++)(s = t._data(n, "events")) && s.remove && t(n).triggerHandler("remove");
        e(i)
    }), t.widget = function(e, i, s) {
        var n, o, a, r = {},
            l = e.split(".")[0],
            u = l + "-" + (e = e.split(".")[1]);
        return s || (s = i, i = t.Widget), Array.isArray(s) && (s = t.extend.apply(null, [{}].concat(s))), t.expr.pseudos[u.toLowerCase()] = function(e) {
            return !!t.data(e, u)
        }, t[l] = t[l] || {}, n = t[l][e], o = t[l][e] = function(t, e) {
            if (!this || !this._createWidget) return new o(t, e);
            arguments.length && this._createWidget(t, e)
        }, t.extend(o, n, {
            version: s.version,
            _proto: t.extend({}, s),
            _childConstructors: []
        }), (a = new i).options = t.widget.extend({}, a.options), t.each(s, (function(t, e) {
            r[t] = "function" == typeof e ? function() {
                function s() {
                    return i.prototype[t].apply(this, arguments)
                }

                function n(e) {
                    return i.prototype[t].apply(this, e)
                }
                return function() {
                    var t, i = this._super,
                        o = this._superApply;
                    return this._super = s, this._superApply = n, t = e.apply(this, arguments), this._super = i, this._superApply = o, t
                }
            }() : e
        })), o.prototype = t.widget.extend(a, {
            widgetEventPrefix: n && a.widgetEventPrefix || e
        }, r, {
            constructor: o,
            namespace: l,
            widgetName: e,
            widgetFullName: u
        }), n ? (t.each(n._childConstructors, (function(e, i) {
            var s = i.prototype;
            t.widget(s.namespace + "." + s.widgetName, o, i._proto)
        })), delete n._childConstructors) : i._childConstructors.push(o), t.widget.bridge(e, o), o
    }, t.widget.extend = function(e) {
        for (var i, o, a = n.call(arguments, 1), r = 0, l = a.length; r < l; r++)
            for (i in a[r]) o = a[r][i], s.call(a[r], i) && void 0 !== o && (t.isPlainObject(o) ? e[i] = t.isPlainObject(e[i]) ? t.widget.extend({}, e[i], o) : t.widget.extend({}, o) : e[i] = o);
        return e
    }, t.widget.bridge = function(e, i) {
        var s = i.prototype.widgetFullName || e;
        t.fn[e] = function(o) {
            var a = "string" == typeof o,
                r = n.call(arguments, 1),
                l = this;
            return a ? this.length || "instance" !== o ? this.each((function() {
                var i, n = t.data(this, s);
                return "instance" === o ? (l = n, !1) : n ? "function" != typeof n[o] || "_" === o.charAt(0) ? t.error("no such method '" + o + "' for " + e + " widget instance") : (i = n[o].apply(n, r)) !== n && void 0 !== i ? (l = i && i.jquery ? l.pushStack(i.get()) : i, !1) : void 0 : t.error("cannot call methods on " + e + " prior to initialization; attempted to call method '" + o + "'")
            })) : l = void 0 : (r.length && (o = t.widget.extend.apply(null, [o].concat(r))), this.each((function() {
                var e = t.data(this, s);
                e ? (e.option(o || {}), e._init && e._init()) : t.data(this, s, new i(o, this))
            }))), l
        }
    }, t.Widget = function() {}, t.Widget._childConstructors = [], t.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        defaultElement: "<div>",
        options: {
            classes: {},
            disabled: !1,
            create: null
        },
        _createWidget: function(e, s) {
            s = t(s || this.defaultElement || this)[0], this.element = t(s), this.uuid = i++, this.eventNamespace = "." + this.widgetName + this.uuid, this.bindings = t(), this.hoverable = t(), this.focusable = t(), this.classesElementLookup = {}, s !== this && (t.data(s, this.widgetFullName, this), this._on(!0, this.element, {
                remove: function(t) {
                    t.target === s && this.destroy()
                }
            }), this.document = t(s.style ? s.ownerDocument : s.document || s), this.window = t(this.document[0].defaultView || this.document[0].parentWindow)), this.options = t.widget.extend({}, this.options, this._getCreateOptions(), e), this._create(), this.options.disabled && this._setOptionDisabled(this.options.disabled), this._trigger("create", null, this._getCreateEventData()), this._init()
        },
        _getCreateOptions: function() {
            return {}
        },
        _getCreateEventData: t.noop,
        _create: t.noop,
        _init: t.noop,
        destroy: function() {
            var e = this;
            this._destroy(), t.each(this.classesElementLookup, (function(t, i) {
                e._removeClass(i, t)
            })), this.element.off(this.eventNamespace).removeData(this.widgetFullName), this.widget().off(this.eventNamespace).removeAttr("aria-disabled"), this.bindings.off(this.eventNamespace)
        },
        _destroy: t.noop,
        widget: function() {
            return this.element
        },
        option: function(e, i) {
            var s, n, o, a = e;
            if (0 === arguments.length) return t.widget.extend({}, this.options);
            if ("string" == typeof e)
                if (a = {}, s = e.split("."), e = s.shift(), s.length) {
                    for (n = a[e] = t.widget.extend({}, this.options[e]), o = 0; o < s.length - 1; o++) n[s[o]] = n[s[o]] || {}, n = n[s[o]];
                    if (e = s.pop(), 1 === arguments.length) return void 0 === n[e] ? null : n[e];
                    n[e] = i
                } else {
                    if (1 === arguments.length) return void 0 === this.options[e] ? null : this.options[e];
                    a[e] = i
                }
            return this._setOptions(a), this
        },
        _setOptions: function(t) {
            var e;
            for (e in t) this._setOption(e, t[e]);
            return this
        },
        _setOption: function(t, e) {
            return "classes" === t && this._setOptionClasses(e), this.options[t] = e, "disabled" === t && this._setOptionDisabled(e), this
        },
        _setOptionClasses: function(e) {
            var i, s, n;
            for (i in e) n = this.classesElementLookup[i], e[i] !== this.options.classes[i] && n && n.length && (s = t(n.get()), this._removeClass(n, i), s.addClass(this._classes({
                element: s,
                keys: i,
                classes: e,
                add: !0
            })))
        },
        _setOptionDisabled: function(t) {
            this._toggleClass(this.widget(), this.widgetFullName + "-disabled", null, !!t), t && (this._removeClass(this.hoverable, null, "ui-state-hover"), this._removeClass(this.focusable, null, "ui-state-focus"))
        },
        enable: function() {
            return this._setOptions({
                disabled: !1
            })
        },
        disable: function() {
            return this._setOptions({
                disabled: !0
            })
        },
        _classes: function(e) {
            var i = [],
                s = this;

            function n() {
                var i = [];
                e.element.each((function(e, n) {
                    t.map(s.classesElementLookup, (function(t) {
                        return t
                    })).some((function(t) {
                        return t.is(n)
                    })) || i.push(n)
                })), s._on(t(i), {
                    remove: "_untrackClassesElement"
                })
            }

            function o(o, a) {
                var r, l;
                for (l = 0; l < o.length; l++) r = s.classesElementLookup[o[l]] || t(), e.add ? (n(), r = t(t.uniqueSort(r.get().concat(e.element.get())))) : r = t(r.not(e.element).get()), s.classesElementLookup[o[l]] = r, i.push(o[l]), a && e.classes[o[l]] && i.push(e.classes[o[l]])
            }
            return (e = t.extend({
                element: this.element,
                classes: this.options.classes || {}
            }, e)).keys && o(e.keys.match(/\S+/g) || [], !0), e.extra && o(e.extra.match(/\S+/g) || []), i.join(" ")
        },
        _untrackClassesElement: function(e) {
            var i = this;
            t.each(i.classesElementLookup, (function(s, n) {
                -1 !== t.inArray(e.target, n) && (i.classesElementLookup[s] = t(n.not(e.target).get()))
            })), this._off(t(e.target))
        },
        _removeClass: function(t, e, i) {
            return this._toggleClass(t, e, i, !1)
        },
        _addClass: function(t, e, i) {
            return this._toggleClass(t, e, i, !0)
        },
        _toggleClass: function(t, e, i, s) {
            s = "boolean" == typeof s ? s : i;
            var n = "string" == typeof t || null === t,
                o = {
                    extra: n ? e : i,
                    keys: n ? t : e,
                    element: n ? this.element : t,
                    add: s
                };
            return o.element.toggleClass(this._classes(o), s), this
        },
        _on: function(e, i, s) {
            var n, o = this;
            "boolean" != typeof e && (s = i, i = e, e = !1), s ? (i = n = t(i), this.bindings = this.bindings.add(i)) : (s = i, i = this.element, n = this.widget()), t.each(s, (function(s, a) {
                function r() {
                    if (e || !0 !== o.options.disabled && !t(this).hasClass("ui-state-disabled")) return ("string" == typeof a ? o[a] : a).apply(o, arguments)
                }
                "string" != typeof a && (r.guid = a.guid = a.guid || r.guid || t.guid++);
                var l = s.match(/^([\w:-]*)\s*(.*)$/),
                    u = l[1] + o.eventNamespace,
                    h = l[2];
                h ? n.on(u, h, r) : i.on(u, r)
            }))
        },
        _off: function(e, i) {
            i = (i || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, e.off(i), this.bindings = t(this.bindings.not(e).get()), this.focusable = t(this.focusable.not(e).get()), this.hoverable = t(this.hoverable.not(e).get())
        },
        _delay: function(t, e) {
            var i = this;
            return setTimeout((function() {
                return ("string" == typeof t ? i[t] : t).apply(i, arguments)
            }), e || 0)
        },
        _hoverable: function(e) {
            this.hoverable = this.hoverable.add(e), this._on(e, {
                mouseenter: function(e) {
                    this._addClass(t(e.currentTarget), null, "ui-state-hover")
                },
                mouseleave: function(e) {
                    this._removeClass(t(e.currentTarget), null, "ui-state-hover")
                }
            })
        },
        _focusable: function(e) {
            this.focusable = this.focusable.add(e), this._on(e, {
                focusin: function(e) {
                    this._addClass(t(e.currentTarget), null, "ui-state-focus")
                },
                focusout: function(e) {
                    this._removeClass(t(e.currentTarget), null, "ui-state-focus")
                }
            })
        },
        _trigger: function(e, i, s) {
            var n, o, a = this.options[e];
            if (s = s || {}, (i = t.Event(i)).type = (e === this.widgetEventPrefix ? e : this.widgetEventPrefix + e).toLowerCase(), i.target = this.element[0], o = i.originalEvent)
                for (n in o) n in i || (i[n] = o[n]);
            return this.element.trigger(i, s), !("function" == typeof a && !1 === a.apply(this.element[0], [i].concat(s)) || i.isDefaultPrevented())
        }
    }, t.each({
        show: "fadeIn",
        hide: "fadeOut"
    }, (function(e, i) {
        t.Widget.prototype["_" + e] = function(s, n, o) {
            var a;
            "string" == typeof n && (n = {
                effect: n
            });
            var r = n ? !0 === n || "number" == typeof n ? i : n.effect || i : e;
            "number" == typeof(n = n || {}) ? n = {
                duration: n
            }: !0 === n && (n = {}), a = !t.isEmptyObject(n), n.complete = o, n.delay && s.delay(n.delay), a && t.effects && t.effects.effect[r] ? s[e](n) : r !== e && s[r] ? s[r](n.duration, n.easing, o) : s.queue((function(i) {
                t(this)[e](), o && o.call(s[0]), i()
            }))
        }
    })), t.widget
}));

/*!
 * jQuery UI Labels 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./version"], t) : t(jQuery)
}((function(t) {
    "use strict";
    return t.fn.labels = function() {
        var e, s, i, n, a;
        return this.length ? this[0].labels && this[0].labels.length ? this.pushStack(this[0].labels) : (n = this.eq(0).parents("label"), (i = this.attr("id")) && (a = (e = this.eq(0).parents().last()).add(e.length ? e.siblings() : this.siblings()), s = "label[for='" + t.escapeSelector(i) + "']", n = n.add(a.find(s).addBack(s))), this.pushStack(n)) : this.pushStack([])
    }
}));

/*!
 * jQuery UI Controlgroup 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "../widget"], t) : t(jQuery)
}((function(t) {
    "use strict";
    var e = /ui-corner-([a-z]){2,6}/g;
    return t.widget("ui.controlgroup", {
        version: "1.13.3",
        defaultElement: "<div>",
        options: {
            direction: "horizontal",
            disabled: null,
            onlyVisible: !0,
            items: {
                button: "input[type=button], input[type=submit], input[type=reset], button, a",
                controlgroupLabel: ".ui-controlgroup-label",
                checkboxradio: "input[type='checkbox'], input[type='radio']",
                selectmenu: "select",
                spinner: ".ui-spinner-input"
            }
        },
        _create: function() {
            this._enhance()
        },
        _enhance: function() {
            this.element.attr("role", "toolbar"), this.refresh()
        },
        _destroy: function() {
            this._callChildMethod("destroy"), this.childWidgets.removeData("ui-controlgroup-data"), this.element.removeAttr("role"), this.options.items.controlgroupLabel && this.element.find(this.options.items.controlgroupLabel).find(".ui-controlgroup-label-contents").contents().unwrap()
        },
        _initWidgets: function() {
            var e = this,
                i = [];
            t.each(this.options.items, (function(n, o) {
                var s, l = {};
                if (o) return "controlgroupLabel" === n ? ((s = e.element.find(o)).each((function() {
                    var e = t(this);
                    e.children(".ui-controlgroup-label-contents").length || e.contents().wrapAll("<span class='ui-controlgroup-label-contents'></span>")
                })), e._addClass(s, null, "ui-widget ui-widget-content ui-state-default"), void(i = i.concat(s.get()))) : void(t.fn[n] && (l = e["_" + n + "Options"] ? e["_" + n + "Options"]("middle") : {
                    classes: {}
                }, e.element.find(o).each((function() {
                    var o = t(this),
                        s = o[n]("instance"),
                        r = t.widget.extend({}, l);
                    if ("button" !== n || !o.parent(".ui-spinner").length) {
                        s || (s = o[n]()[n]("instance")), s && (r.classes = e._resolveClassesValues(r.classes, s)), o[n](r);
                        var u = o[n]("widget");
                        t.data(u[0], "ui-controlgroup-data", s || o[n]("instance")), i.push(u[0])
                    }
                }))))
            })), this.childWidgets = t(t.uniqueSort(i)), this._addClass(this.childWidgets, "ui-controlgroup-item")
        },
        _callChildMethod: function(e) {
            this.childWidgets.each((function() {
                var i = t(this).data("ui-controlgroup-data");
                i && i[e] && i[e]()
            }))
        },
        _updateCornerClass: function(t, e) {
            var i = this._buildSimpleOptions(e, "label").classes.label;
            this._removeClass(t, null, "ui-corner-top ui-corner-bottom ui-corner-left ui-corner-right ui-corner-all"), this._addClass(t, null, i)
        },
        _buildSimpleOptions: function(t, e) {
            var i = "vertical" === this.options.direction,
                n = {
                    classes: {}
                };
            return n.classes[e] = {
                middle: "",
                first: "ui-corner-" + (i ? "top" : "left"),
                last: "ui-corner-" + (i ? "bottom" : "right"),
                only: "ui-corner-all"
            }[t], n
        },
        _spinnerOptions: function(t) {
            var e = this._buildSimpleOptions(t, "ui-spinner");
            return e.classes["ui-spinner-up"] = "", e.classes["ui-spinner-down"] = "", e
        },
        _buttonOptions: function(t) {
            return this._buildSimpleOptions(t, "ui-button")
        },
        _checkboxradioOptions: function(t) {
            return this._buildSimpleOptions(t, "ui-checkboxradio-label")
        },
        _selectmenuOptions: function(t) {
            var e = "vertical" === this.options.direction;
            return {
                width: !!e && "auto",
                classes: {
                    middle: {
                        "ui-selectmenu-button-open": "",
                        "ui-selectmenu-button-closed": ""
                    },
                    first: {
                        "ui-selectmenu-button-open": "ui-corner-" + (e ? "top" : "tl"),
                        "ui-selectmenu-button-closed": "ui-corner-" + (e ? "top" : "left")
                    },
                    last: {
                        "ui-selectmenu-button-open": e ? "" : "ui-corner-tr",
                        "ui-selectmenu-button-closed": "ui-corner-" + (e ? "bottom" : "right")
                    },
                    only: {
                        "ui-selectmenu-button-open": "ui-corner-top",
                        "ui-selectmenu-button-closed": "ui-corner-all"
                    }
                }[t]
            }
        },
        _resolveClassesValues: function(i, n) {
            var o = {};
            return t.each(i, (function(t) {
                var s = n.options.classes[t] || "";
                s = String.prototype.trim.call(s.replace(e, "")), o[t] = (s + " " + i[t]).replace(/\s+/g, " ")
            })), o
        },
        _setOption: function(t, e) {
            "direction" === t && this._removeClass("ui-controlgroup-" + this.options.direction), this._super(t, e), "disabled" !== t ? this.refresh() : this._callChildMethod(e ? "disable" : "enable")
        },
        refresh: function() {
            var e, i = this;
            this._addClass("ui-controlgroup ui-controlgroup-" + this.options.direction), "horizontal" === this.options.direction && this._addClass(null, "ui-helper-clearfix"), this._initWidgets(), e = this.childWidgets, this.options.onlyVisible && (e = e.filter(":visible")), e.length && (t.each(["first", "last"], (function(t, n) {
                var o = e[n]().data("ui-controlgroup-data");
                if (o && i["_" + o.widgetName + "Options"]) {
                    var s = i["_" + o.widgetName + "Options"](1 === e.length ? "only" : n);
                    s.classes = i._resolveClassesValues(s.classes, o), o.element[o.widgetName](s)
                } else i._updateCornerClass(e[n](), n)
            })), this._callChildMethod("refresh"))
        }
    })
}));

/*!
 * jQuery UI Form Reset Mixin 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./form", "./version"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.ui.formResetMixin = {
        _formResetHandler: function() {
            var t = e(this);
            setTimeout((function() {
                var r = t.data("ui-form-reset-instances");
                e.each(r, (function() {
                    this.refresh()
                }))
            }))
        },
        _bindFormResetHandler: function() {
            if (this.form = this.element._form(), this.form.length) {
                var e = this.form.data("ui-form-reset-instances") || [];
                e.length || this.form.on("reset.ui-form-reset", this._formResetHandler), e.push(this), this.form.data("ui-form-reset-instances", e)
            }
        },
        _unbindFormResetHandler: function() {
            if (this.form.length) {
                var t = this.form.data("ui-form-reset-instances");
                t.splice(e.inArray(this, t), 1), t.length ? this.form.data("ui-form-reset-instances", t) : this.form.removeData("ui-form-reset-instances").off("reset.ui-form-reset")
            }
        }
    }
}));

/*!
 * jQuery UI Mouse 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "../ie", "../version", "../widget"], e) : e(jQuery)
}((function(e) {
    "use strict";
    var t = !1;
    return e(document).on("mouseup", (function() {
        t = !1
    })), e.widget("ui.mouse", {
        version: "1.13.3",
        options: {
            cancel: "input, textarea, button, select, option",
            distance: 1,
            delay: 0
        },
        _mouseInit: function() {
            var t = this;
            this.element.on("mousedown." + this.widgetName, (function(e) {
                return t._mouseDown(e)
            })).on("click." + this.widgetName, (function(i) {
                if (!0 === e.data(i.target, t.widgetName + ".preventClickEvent")) return e.removeData(i.target, t.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1
            })), this.started = !1
        },
        _mouseDestroy: function() {
            this.element.off("." + this.widgetName), this._mouseMoveDelegate && this.document.off("mousemove." + this.widgetName, this._mouseMoveDelegate).off("mouseup." + this.widgetName, this._mouseUpDelegate)
        },
        _mouseDown: function(i) {
            if (!t) {
                this._mouseMoved = !1, this._mouseStarted && this._mouseUp(i), this._mouseDownEvent = i;
                var s = this,
                    o = 1 === i.which,
                    n = !("string" != typeof this.options.cancel || !i.target.nodeName) && e(i.target).closest(this.options.cancel).length;
                return !(o && !n && this._mouseCapture(i)) || (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout((function() {
                    s.mouseDelayMet = !0
                }), this.options.delay)), this._mouseDistanceMet(i) && this._mouseDelayMet(i) && (this._mouseStarted = !1 !== this._mouseStart(i), !this._mouseStarted) ? (i.preventDefault(), !0) : (!0 === e.data(i.target, this.widgetName + ".preventClickEvent") && e.removeData(i.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(e) {
                    return s._mouseMove(e)
                }, this._mouseUpDelegate = function(e) {
                    return s._mouseUp(e)
                }, this.document.on("mousemove." + this.widgetName, this._mouseMoveDelegate).on("mouseup." + this.widgetName, this._mouseUpDelegate), i.preventDefault(), t = !0, !0))
            }
        },
        _mouseMove: function(t) {
            if (this._mouseMoved) {
                if (e.ui.ie && (!document.documentMode || document.documentMode < 9) && !t.button) return this._mouseUp(t);
                if (!t.which)
                    if (t.originalEvent.altKey || t.originalEvent.ctrlKey || t.originalEvent.metaKey || t.originalEvent.shiftKey) this.ignoreMissingWhich = !0;
                    else if (!this.ignoreMissingWhich) return this._mouseUp(t)
            }
            return (t.which || t.button) && (this._mouseMoved = !0), this._mouseStarted ? (this._mouseDrag(t), t.preventDefault()) : (this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = !1 !== this._mouseStart(this._mouseDownEvent, t), this._mouseStarted ? this._mouseDrag(t) : this._mouseUp(t)), !this._mouseStarted)
        },
        _mouseUp: function(i) {
            this.document.off("mousemove." + this.widgetName, this._mouseMoveDelegate).off("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, i.target === this._mouseDownEvent.target && e.data(i.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(i)), this._mouseDelayTimer && (clearTimeout(this._mouseDelayTimer), delete this._mouseDelayTimer), this.ignoreMissingWhich = !1, t = !1, i.preventDefault()
        },
        _mouseDistanceMet: function(e) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - e.pageX), Math.abs(this._mouseDownEvent.pageY - e.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function() {
            return this.mouseDelayMet
        },
        _mouseStart: function() {},
        _mouseDrag: function() {},
        _mouseStop: function() {},
        _mouseCapture: function() {
            return !0
        }
    })
}));

/*!
 * jQuery UI Checkboxradio 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "../form-reset-mixin", "../labels", "../widget"], e) : e(jQuery)
}((function(e) {
    "use strict";
    return e.widget("ui.checkboxradio", [e.ui.formResetMixin, {
        version: "1.13.3",
        options: {
            disabled: null,
            label: null,
            icon: !0,
            classes: {
                "ui-checkboxradio-label": "ui-corner-all",
                "ui-checkboxradio-icon": "ui-corner-all"
            }
        },
        _getCreateOptions: function() {
            var i, t, s, n = this._super() || {};
            return this._readType(), t = this.element.labels(), this.label = e(t[t.length - 1]), this.label.length || e.error("No label found for checkboxradio widget"), this.originalLabel = "", (s = this.label.contents().not(this.element[0])).length && (this.originalLabel += s.clone().wrapAll("<div></div>").parent().html()), this.originalLabel && (n.label = this.originalLabel), null != (i = this.element[0].disabled) && (n.disabled = i), n
        },
        _create: function() {
            var e = this.element[0].checked;
            this._bindFormResetHandler(), null == this.options.disabled && (this.options.disabled = this.element[0].disabled), this._setOption("disabled", this.options.disabled), this._addClass("ui-checkboxradio", "ui-helper-hidden-accessible"), this._addClass(this.label, "ui-checkboxradio-label", "ui-button ui-widget"), "radio" === this.type && this._addClass(this.label, "ui-checkboxradio-radio-label"), this.options.label && this.options.label !== this.originalLabel ? this._updateLabel() : this.originalLabel && (this.options.label = this.originalLabel), this._enhance(), e && this._addClass(this.label, "ui-checkboxradio-checked", "ui-state-active"), this._on({
                change: "_toggleClasses",
                focus: function() {
                    this._addClass(this.label, null, "ui-state-focus ui-visual-focus")
                },
                blur: function() {
                    this._removeClass(this.label, null, "ui-state-focus ui-visual-focus")
                }
            })
        },
        _readType: function() {
            var i = this.element[0].nodeName.toLowerCase();
            this.type = this.element[0].type, "input" === i && /radio|checkbox/.test(this.type) || e.error("Can't create checkboxradio on element.nodeName=" + i + " and element.type=" + this.type)
        },
        _enhance: function() {
            this._updateIcon(this.element[0].checked)
        },
        widget: function() {
            return this.label
        },
        _getRadioGroup: function() {
            var i = this.element[0].name,
                t = "input[name='" + e.escapeSelector(i) + "']";
            return i ? (this.form.length ? e(this.form[0].elements).filter(t) : e(t).filter((function() {
                return 0 === e(this)._form().length
            }))).not(this.element) : e([])
        },
        _toggleClasses: function() {
            var i = this.element[0].checked;
            this._toggleClass(this.label, "ui-checkboxradio-checked", "ui-state-active", i), this.options.icon && "checkbox" === this.type && this._toggleClass(this.icon, null, "ui-icon-check ui-state-checked", i)._toggleClass(this.icon, null, "ui-icon-blank", !i), "radio" === this.type && this._getRadioGroup().each((function() {
                var i = e(this).checkboxradio("instance");
                i && i._removeClass(i.label, "ui-checkboxradio-checked", "ui-state-active")
            }))
        },
        _destroy: function() {
            this._unbindFormResetHandler(), this.icon && (this.icon.remove(), this.iconSpace.remove())
        },
        _setOption: function(e, i) {
            if ("label" !== e || i) {
                if (this._super(e, i), "disabled" === e) return this._toggleClass(this.label, null, "ui-state-disabled", i), void(this.element[0].disabled = i);
                this.refresh()
            }
        },
        _updateIcon: function(i) {
            var t = "ui-icon ui-icon-background ";
            this.options.icon ? (this.icon || (this.icon = e("<span>"), this.iconSpace = e("<span> </span>"), this._addClass(this.iconSpace, "ui-checkboxradio-icon-space")), "checkbox" === this.type ? (t += i ? "ui-icon-check ui-state-checked" : "ui-icon-blank", this._removeClass(this.icon, null, i ? "ui-icon-blank" : "ui-icon-check")) : t += "ui-icon-blank", this._addClass(this.icon, "ui-checkboxradio-icon", t), i || this._removeClass(this.icon, null, "ui-icon-check ui-state-checked"), this.icon.prependTo(this.label).after(this.iconSpace)) : void 0 !== this.icon && (this.icon.remove(), this.iconSpace.remove(), delete this.icon)
        },
        _updateLabel: function() {
            var e = this.label.contents().not(this.element[0]);
            this.icon && (e = e.not(this.icon[0])), this.iconSpace && (e = e.not(this.iconSpace[0])), e.remove(), this.label.append(this.options.label)
        },
        refresh: function() {
            var e = this.element[0].checked,
                i = this.element[0].disabled;
            this._updateIcon(e), this._toggleClass(this.label, "ui-checkboxradio-checked", "ui-state-active", e), null !== this.options.label && this._updateLabel(), i !== this.options.disabled && this._setOptions({
                disabled: i
            })
        }
    }]), e.ui.checkboxradio
}));

/*!
 * jQuery UI Draggable 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./mouse", "../data", "../plugin", "../safe-active-element", "../safe-blur", "../scroll-parent", "../version", "../widget"], t) : t(jQuery)
}((function(t) {
    "use strict";
    return t.widget("ui.draggable", t.ui.mouse, {
        version: "1.13.3",
        widgetEventPrefix: "drag",
        options: {
            addClasses: !0,
            appendTo: "parent",
            axis: !1,
            connectToSortable: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            iframeFix: !1,
            opacity: !1,
            refreshPositions: !1,
            revert: !1,
            revertDuration: 500,
            scope: "default",
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            snap: !1,
            snapMode: "both",
            snapTolerance: 20,
            stack: !1,
            zIndex: !1,
            drag: null,
            start: null,
            stop: null
        },
        _create: function() {
            "original" === this.options.helper && this._setPositionRelative(), this.options.addClasses && this._addClass("ui-draggable"), this._setHandleClassName(), this._mouseInit()
        },
        _setOption: function(t, e) {
            this._super(t, e), "handle" === t && (this._removeHandleClassName(), this._setHandleClassName())
        },
        _destroy: function() {
            (this.helper || this.element).is(".ui-draggable-dragging") ? this.destroyOnClear = !0 : (this._removeHandleClassName(), this._mouseDestroy())
        },
        _mouseCapture: function(e) {
            var s = this.options;
            return !(this.helper || s.disabled || t(e.target).closest(".ui-resizable-handle").length > 0) && (this.handle = this._getHandle(e), !!this.handle && (this._blurActiveElement(e), this._blockFrames(!0 === s.iframeFix ? "iframe" : s.iframeFix), !0))
        },
        _blockFrames: function(e) {
            this.iframeBlocks = this.document.find(e).map((function() {
                var e = t(this);
                return t("<div>").css("position", "absolute").appendTo(e.parent()).outerWidth(e.outerWidth()).outerHeight(e.outerHeight()).offset(e.offset())[0]
            }))
        },
        _unblockFrames: function() {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _blurActiveElement: function(e) {
            var s = t.ui.safeActiveElement(this.document[0]);
            t(e.target).closest(s).length || t.ui.safeBlur(s)
        },
        _mouseStart: function(e) {
            var s = this.options;
            return this.helper = this._createHelper(e), this._addClass(this.helper, "ui-draggable-dragging"), this._cacheHelperProportions(), t.ui.ddmanager && (t.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(!0), this.offsetParent = this.helper.offsetParent(), this.hasFixedAncestor = this.helper.parents().filter((function() {
                return "fixed" === t(this).css("position")
            })).length > 0, this.positionAbs = this.element.offset(), this._refreshOffsets(e), this.originalPosition = this.position = this._generatePosition(e, !1), this.originalPageX = e.pageX, this.originalPageY = e.pageY, s.cursorAt && this._adjustOffsetFromHelper(s.cursorAt), this._setContainment(), !1 === this._trigger("start", e) ? (this._clear(), !1) : (this._cacheHelperProportions(), t.ui.ddmanager && !s.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this._mouseDrag(e, !0), t.ui.ddmanager && t.ui.ddmanager.dragStart(this, e), !0)
        },
        _refreshOffsets: function(t) {
            this.offset = {
                top: this.positionAbs.top - this.margins.top,
                left: this.positionAbs.left - this.margins.left,
                scroll: !1,
                parent: this._getParentOffset(),
                relative: this._getRelativeOffset()
            }, this.offset.click = {
                left: t.pageX - this.offset.left,
                top: t.pageY - this.offset.top
            }
        },
        _mouseDrag: function(e, s) {
            if (this.hasFixedAncestor && (this.offset.parent = this._getParentOffset()), this.position = this._generatePosition(e, !0), this.positionAbs = this._convertPositionTo("absolute"), !s) {
                var i = this._uiHash();
                if (!1 === this._trigger("drag", e, i)) return this._mouseUp(new t.Event("mouseup", e)), !1;
                this.position = i.position
            }
            return this.helper[0].style.left = this.position.left + "px", this.helper[0].style.top = this.position.top + "px", t.ui.ddmanager && t.ui.ddmanager.drag(this, e), !1
        },
        _mouseStop: function(e) {
            var s = this,
                i = !1;
            return t.ui.ddmanager && !this.options.dropBehaviour && (i = t.ui.ddmanager.drop(this, e)), this.dropped && (i = this.dropped, this.dropped = !1), "invalid" === this.options.revert && !i || "valid" === this.options.revert && i || !0 === this.options.revert || "function" == typeof this.options.revert && this.options.revert.call(this.element, i) ? t(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), (function() {
                !1 !== s._trigger("stop", e) && s._clear()
            })) : !1 !== this._trigger("stop", e) && this._clear(), !1
        },
        _mouseUp: function(e) {
            return this._unblockFrames(), t.ui.ddmanager && t.ui.ddmanager.dragStop(this, e), this.handleElement.is(e.target) && this.element.trigger("focus"), t.ui.mouse.prototype._mouseUp.call(this, e)
        },
        cancel: function() {
            return this.helper.is(".ui-draggable-dragging") ? this._mouseUp(new t.Event("mouseup", {
                target: this.element[0]
            })) : this._clear(), this
        },
        _getHandle: function(e) {
            return !this.options.handle || !!t(e.target).closest(this.element.find(this.options.handle)).length
        },
        _setHandleClassName: function() {
            this.handleElement = this.options.handle ? this.element.find(this.options.handle) : this.element, this._addClass(this.handleElement, "ui-draggable-handle")
        },
        _removeHandleClassName: function() {
            this._removeClass(this.handleElement, "ui-draggable-handle")
        },
        _createHelper: function(e) {
            var s = this.options,
                i = "function" == typeof s.helper,
                o = i ? t(s.helper.apply(this.element[0], [e])) : "clone" === s.helper ? this.element.clone().removeAttr("id") : this.element;
            return o.parents("body").length || o.appendTo("parent" === s.appendTo ? this.element[0].parentNode : s.appendTo), i && o[0] === this.element[0] && this._setPositionRelative(), o[0] === this.element[0] || /(fixed|absolute)/.test(o.css("position")) || o.css("position", "absolute"), o
        },
        _setPositionRelative: function() {
            /^(?:r|a|f)/.test(this.element.css("position")) || (this.element[0].style.position = "relative")
        },
        _adjustOffsetFromHelper: function(t) {
            "string" == typeof t && (t = t.split(" ")), Array.isArray(t) && (t = {
                left: +t[0],
                top: +t[1] || 0
            }), "left" in t && (this.offset.click.left = t.left + this.margins.left), "right" in t && (this.offset.click.left = this.helperProportions.width - t.right + this.margins.left), "top" in t && (this.offset.click.top = t.top + this.margins.top), "bottom" in t && (this.offset.click.top = this.helperProportions.height - t.bottom + this.margins.top)
        },
        _isRootNode: function(t) {
            return /(html|body)/i.test(t.tagName) || t === this.document[0]
        },
        _getParentOffset: function() {
            var e = this.offsetParent.offset(),
                s = this.document[0];
            return "absolute" === this.cssPosition && this.scrollParent[0] !== s && t.contains(this.scrollParent[0], this.offsetParent[0]) && (e.left += this.scrollParent.scrollLeft(), e.top += this.scrollParent.scrollTop()), this._isRootNode(this.offsetParent[0]) && (e = {
                top: 0,
                left: 0
            }), {
                top: e.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: e.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function() {
            if ("relative" !== this.cssPosition) return {
                top: 0,
                left: 0
            };
            var t = this.element.position(),
                e = this._isRootNode(this.scrollParent[0]);
            return {
                top: t.top - (parseInt(this.helper.css("top"), 10) || 0) + (e ? 0 : this.scrollParent.scrollTop()),
                left: t.left - (parseInt(this.helper.css("left"), 10) || 0) + (e ? 0 : this.scrollParent.scrollLeft())
            }
        },
        _cacheMargins: function() {
            this.margins = {
                left: parseInt(this.element.css("marginLeft"), 10) || 0,
                top: parseInt(this.element.css("marginTop"), 10) || 0,
                right: parseInt(this.element.css("marginRight"), 10) || 0,
                bottom: parseInt(this.element.css("marginBottom"), 10) || 0
            }
        },
        _cacheHelperProportions: function() {
            this.helperProportions = {
                width: this.helper.outerWidth(),
                height: this.helper.outerHeight()
            }
        },
        _setContainment: function() {
            var e, s, i, o = this.options,
                n = this.document[0];
            this.relativeContainer = null, o.containment ? "window" !== o.containment ? "document" !== o.containment ? o.containment.constructor !== Array ? ("parent" === o.containment && (o.containment = this.helper[0].parentNode), (i = (s = t(o.containment))[0]) && (e = /(scroll|auto)/.test(s.css("overflow")), this.containment = [(parseInt(s.css("borderLeftWidth"), 10) || 0) + (parseInt(s.css("paddingLeft"), 10) || 0), (parseInt(s.css("borderTopWidth"), 10) || 0) + (parseInt(s.css("paddingTop"), 10) || 0), (e ? Math.max(i.scrollWidth, i.offsetWidth) : i.offsetWidth) - (parseInt(s.css("borderRightWidth"), 10) || 0) - (parseInt(s.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (e ? Math.max(i.scrollHeight, i.offsetHeight) : i.offsetHeight) - (parseInt(s.css("borderBottomWidth"), 10) || 0) - (parseInt(s.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relativeContainer = s)) : this.containment = o.containment : this.containment = [0, 0, t(n).width() - this.helperProportions.width - this.margins.left, (t(n).height() || n.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top] : this.containment = [t(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, t(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, t(window).scrollLeft() + t(window).width() - this.helperProportions.width - this.margins.left, t(window).scrollTop() + (t(window).height() || n.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top] : this.containment = null
        },
        _convertPositionTo: function(t, e) {
            e || (e = this.position);
            var s = "absolute" === t ? 1 : -1,
                i = this._isRootNode(this.scrollParent[0]);
            return {
                top: e.top + this.offset.relative.top * s + this.offset.parent.top * s - ("fixed" === this.cssPosition ? -this.offset.scroll.top : i ? 0 : this.offset.scroll.top) * s,
                left: e.left + this.offset.relative.left * s + this.offset.parent.left * s - ("fixed" === this.cssPosition ? -this.offset.scroll.left : i ? 0 : this.offset.scroll.left) * s
            }
        },
        _generatePosition: function(t, e) {
            var s, i, o, n, r = this.options,
                l = this._isRootNode(this.scrollParent[0]),
                a = t.pageX,
                h = t.pageY;
            return l && this.offset.scroll || (this.offset.scroll = {
                top: this.scrollParent.scrollTop(),
                left: this.scrollParent.scrollLeft()
            }), e && (this.containment && (this.relativeContainer ? (i = this.relativeContainer.offset(), s = [this.containment[0] + i.left, this.containment[1] + i.top, this.containment[2] + i.left, this.containment[3] + i.top]) : s = this.containment, t.pageX - this.offset.click.left < s[0] && (a = s[0] + this.offset.click.left), t.pageY - this.offset.click.top < s[1] && (h = s[1] + this.offset.click.top), t.pageX - this.offset.click.left > s[2] && (a = s[2] + this.offset.click.left), t.pageY - this.offset.click.top > s[3] && (h = s[3] + this.offset.click.top)), r.grid && (o = r.grid[1] ? this.originalPageY + Math.round((h - this.originalPageY) / r.grid[1]) * r.grid[1] : this.originalPageY, h = s ? o - this.offset.click.top >= s[1] || o - this.offset.click.top > s[3] ? o : o - this.offset.click.top >= s[1] ? o - r.grid[1] : o + r.grid[1] : o, n = r.grid[0] ? this.originalPageX + Math.round((a - this.originalPageX) / r.grid[0]) * r.grid[0] : this.originalPageX, a = s ? n - this.offset.click.left >= s[0] || n - this.offset.click.left > s[2] ? n : n - this.offset.click.left >= s[0] ? n - r.grid[0] : n + r.grid[0] : n), "y" === r.axis && (a = this.originalPageX), "x" === r.axis && (h = this.originalPageY)), {
                top: h - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.offset.scroll.top : l ? 0 : this.offset.scroll.top),
                left: a - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.offset.scroll.left : l ? 0 : this.offset.scroll.left)
            }
        },
        _clear: function() {
            this._removeClass(this.helper, "ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1, this.destroyOnClear && this.destroy()
        },
        _trigger: function(e, s, i) {
            return i = i || this._uiHash(), t.ui.plugin.call(this, e, [s, i, this], !0), /^(drag|start|stop)/.test(e) && (this.positionAbs = this._convertPositionTo("absolute"), i.offset = this.positionAbs), t.Widget.prototype._trigger.call(this, e, s, i)
        },
        plugins: {},
        _uiHash: function() {
            return {
                helper: this.helper,
                position: this.position,
                originalPosition: this.originalPosition,
                offset: this.positionAbs
            }
        }
    }), t.ui.plugin.add("draggable", "connectToSortable", {
        start: function(e, s, i) {
            var o = t.extend({}, s, {
                item: i.element
            });
            i.sortables = [], t(i.options.connectToSortable).each((function() {
                var s = t(this).sortable("instance");
                s && !s.options.disabled && (i.sortables.push(s), s.refreshPositions(), s._trigger("activate", e, o))
            }))
        },
        stop: function(e, s, i) {
            var o = t.extend({}, s, {
                item: i.element
            });
            i.cancelHelperRemoval = !1, t.each(i.sortables, (function() {
                var t = this;
                t.isOver ? (t.isOver = 0, i.cancelHelperRemoval = !0, t.cancelHelperRemoval = !1, t._storedCSS = {
                    position: t.placeholder.css("position"),
                    top: t.placeholder.css("top"),
                    left: t.placeholder.css("left")
                }, t._mouseStop(e), t.options.helper = t.options._helper) : (t.cancelHelperRemoval = !0, t._trigger("deactivate", e, o))
            }))
        },
        drag: function(e, s, i) {
            t.each(i.sortables, (function() {
                var o = !1,
                    n = this;
                n.positionAbs = i.positionAbs, n.helperProportions = i.helperProportions, n.offset.click = i.offset.click, n._intersectsWith(n.containerCache) && (o = !0, t.each(i.sortables, (function() {
                    return this.positionAbs = i.positionAbs, this.helperProportions = i.helperProportions, this.offset.click = i.offset.click, this !== n && this._intersectsWith(this.containerCache) && t.contains(n.element[0], this.element[0]) && (o = !1), o
                }))), o ? (n.isOver || (n.isOver = 1, i._parent = s.helper.parent(), n.currentItem = s.helper.appendTo(n.element).data("ui-sortable-item", !0), n.options._helper = n.options.helper, n.options.helper = function() {
                    return s.helper[0]
                }, e.target = n.currentItem[0], n._mouseCapture(e, !0), n._mouseStart(e, !0, !0), n.offset.click.top = i.offset.click.top, n.offset.click.left = i.offset.click.left, n.offset.parent.left -= i.offset.parent.left - n.offset.parent.left, n.offset.parent.top -= i.offset.parent.top - n.offset.parent.top, i._trigger("toSortable", e), i.dropped = n.element, t.each(i.sortables, (function() {
                    this.refreshPositions()
                })), i.currentItem = i.element, n.fromOutside = i), n.currentItem && (n._mouseDrag(e), s.position = n.position)) : n.isOver && (n.isOver = 0, n.cancelHelperRemoval = !0, n.options._revert = n.options.revert, n.options.revert = !1, n._trigger("out", e, n._uiHash(n)), n._mouseStop(e, !0), n.options.revert = n.options._revert, n.options.helper = n.options._helper, n.placeholder && n.placeholder.remove(), s.helper.appendTo(i._parent), i._refreshOffsets(e), s.position = i._generatePosition(e, !0), i._trigger("fromSortable", e), i.dropped = !1, t.each(i.sortables, (function() {
                    this.refreshPositions()
                })))
            }))
        }
    }), t.ui.plugin.add("draggable", "cursor", {
        start: function(e, s, i) {
            var o = t("body"),
                n = i.options;
            o.css("cursor") && (n._cursor = o.css("cursor")), o.css("cursor", n.cursor)
        },
        stop: function(e, s, i) {
            var o = i.options;
            o._cursor && t("body").css("cursor", o._cursor)
        }
    }), t.ui.plugin.add("draggable", "opacity", {
        start: function(e, s, i) {
            var o = t(s.helper),
                n = i.options;
            o.css("opacity") && (n._opacity = o.css("opacity")), o.css("opacity", n.opacity)
        },
        stop: function(e, s, i) {
            var o = i.options;
            o._opacity && t(s.helper).css("opacity", o._opacity)
        }
    }), t.ui.plugin.add("draggable", "scroll", {
        start: function(t, e, s) {
            s.scrollParentNotHidden || (s.scrollParentNotHidden = s.helper.scrollParent(!1)), s.scrollParentNotHidden[0] !== s.document[0] && "HTML" !== s.scrollParentNotHidden[0].tagName && (s.overflowOffset = s.scrollParentNotHidden.offset())
        },
        drag: function(e, s, i) {
            var o = i.options,
                n = !1,
                r = i.scrollParentNotHidden[0],
                l = i.document[0];
            r !== l && "HTML" !== r.tagName ? (o.axis && "x" === o.axis || (i.overflowOffset.top + r.offsetHeight - e.pageY < o.scrollSensitivity ? r.scrollTop = n = r.scrollTop + o.scrollSpeed : e.pageY - i.overflowOffset.top < o.scrollSensitivity && (r.scrollTop = n = r.scrollTop - o.scrollSpeed)), o.axis && "y" === o.axis || (i.overflowOffset.left + r.offsetWidth - e.pageX < o.scrollSensitivity ? r.scrollLeft = n = r.scrollLeft + o.scrollSpeed : e.pageX - i.overflowOffset.left < o.scrollSensitivity && (r.scrollLeft = n = r.scrollLeft - o.scrollSpeed))) : (o.axis && "x" === o.axis || (e.pageY - t(l).scrollTop() < o.scrollSensitivity ? n = t(l).scrollTop(t(l).scrollTop() - o.scrollSpeed) : t(window).height() - (e.pageY - t(l).scrollTop()) < o.scrollSensitivity && (n = t(l).scrollTop(t(l).scrollTop() + o.scrollSpeed))), o.axis && "y" === o.axis || (e.pageX - t(l).scrollLeft() < o.scrollSensitivity ? n = t(l).scrollLeft(t(l).scrollLeft() - o.scrollSpeed) : t(window).width() - (e.pageX - t(l).scrollLeft()) < o.scrollSensitivity && (n = t(l).scrollLeft(t(l).scrollLeft() + o.scrollSpeed)))), !1 !== n && t.ui.ddmanager && !o.dropBehaviour && t.ui.ddmanager.prepareOffsets(i, e)
        }
    }), t.ui.plugin.add("draggable", "snap", {
        start: function(e, s, i) {
            var o = i.options;
            i.snapElements = [], t(o.snap.constructor !== String ? o.snap.items || ":data(ui-draggable)" : o.snap).each((function() {
                var e = t(this),
                    s = e.offset();
                this !== i.element[0] && i.snapElements.push({
                    item: this,
                    width: e.outerWidth(),
                    height: e.outerHeight(),
                    top: s.top,
                    left: s.left
                })
            }))
        },
        drag: function(e, s, i) {
            var o, n, r, l, a, h, p, c, f, d, g = i.options,
                u = g.snapTolerance,
                m = s.offset.left,
                v = m + i.helperProportions.width,
                _ = s.offset.top,
                P = _ + i.helperProportions.height;
            for (f = i.snapElements.length - 1; f >= 0; f--) h = (a = i.snapElements[f].left - i.margins.left) + i.snapElements[f].width, c = (p = i.snapElements[f].top - i.margins.top) + i.snapElements[f].height, v < a - u || m > h + u || P < p - u || _ > c + u || !t.contains(i.snapElements[f].item.ownerDocument, i.snapElements[f].item) ? (i.snapElements[f].snapping && i.options.snap.release && i.options.snap.release.call(i.element, e, t.extend(i._uiHash(), {
                snapItem: i.snapElements[f].item
            })), i.snapElements[f].snapping = !1) : ("inner" !== g.snapMode && (o = Math.abs(p - P) <= u, n = Math.abs(c - _) <= u, r = Math.abs(a - v) <= u, l = Math.abs(h - m) <= u, o && (s.position.top = i._convertPositionTo("relative", {
                top: p - i.helperProportions.height,
                left: 0
            }).top), n && (s.position.top = i._convertPositionTo("relative", {
                top: c,
                left: 0
            }).top), r && (s.position.left = i._convertPositionTo("relative", {
                top: 0,
                left: a - i.helperProportions.width
            }).left), l && (s.position.left = i._convertPositionTo("relative", {
                top: 0,
                left: h
            }).left)), d = o || n || r || l, "outer" !== g.snapMode && (o = Math.abs(p - _) <= u, n = Math.abs(c - P) <= u, r = Math.abs(a - m) <= u, l = Math.abs(h - v) <= u, o && (s.position.top = i._convertPositionTo("relative", {
                top: p,
                left: 0
            }).top), n && (s.position.top = i._convertPositionTo("relative", {
                top: c - i.helperProportions.height,
                left: 0
            }).top), r && (s.position.left = i._convertPositionTo("relative", {
                top: 0,
                left: a
            }).left), l && (s.position.left = i._convertPositionTo("relative", {
                top: 0,
                left: h - i.helperProportions.width
            }).left)), !i.snapElements[f].snapping && (o || n || r || l || d) && i.options.snap.snap && i.options.snap.snap.call(i.element, e, t.extend(i._uiHash(), {
                snapItem: i.snapElements[f].item
            })), i.snapElements[f].snapping = o || n || r || l || d)
        }
    }), t.ui.plugin.add("draggable", "stack", {
        start: function(e, s, i) {
            var o, n = i.options,
                r = t.makeArray(t(n.stack)).sort((function(e, s) {
                    return (parseInt(t(e).css("zIndex"), 10) || 0) - (parseInt(t(s).css("zIndex"), 10) || 0)
                }));
            r.length && (o = parseInt(t(r[0]).css("zIndex"), 10) || 0, t(r).each((function(e) {
                t(this).css("zIndex", o + e)
            })), this.css("zIndex", o + r.length))
        }
    }), t.ui.plugin.add("draggable", "zIndex", {
        start: function(e, s, i) {
            var o = t(s.helper),
                n = i.options;
            o.css("zIndex") && (n._zIndex = o.css("zIndex")), o.css("zIndex", n.zIndex)
        },
        stop: function(e, s, i) {
            var o = i.options;
            o._zIndex && t(s.helper).css("zIndex", o._zIndex)
        }
    }), t.ui.draggable
}));

/*!
 * jQuery UI Resizable 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./mouse", "../disable-selection", "../plugin", "../version", "../widget"], t) : t(jQuery)
}((function(t) {
    "use strict";
    return t.widget("ui.resizable", t.ui.mouse, {
        version: "1.13.3",
        widgetEventPrefix: "resize",
        options: {
            alsoResize: !1,
            animate: !1,
            animateDuration: "slow",
            animateEasing: "swing",
            aspectRatio: !1,
            autoHide: !1,
            classes: {
                "ui-resizable-se": "ui-icon ui-icon-gripsmall-diagonal-se"
            },
            containment: !1,
            ghost: !1,
            grid: !1,
            handles: "e,s,se",
            helper: !1,
            maxHeight: null,
            maxWidth: null,
            minHeight: 10,
            minWidth: 10,
            zIndex: 90,
            resize: null,
            start: null,
            stop: null
        },
        _num: function(t) {
            return parseFloat(t) || 0
        },
        _isNumber: function(t) {
            return !isNaN(parseFloat(t))
        },
        _hasScroll: function(i, e) {
            if ("hidden" === t(i).css("overflow")) return !1;
            var s = e && "left" === e ? "scrollLeft" : "scrollTop",
                h = !1;
            if (i[s] > 0) return !0;
            try {
                i[s] = 1, h = i[s] > 0, i[s] = 0
            } catch (t) {}
            return h
        },
        _create: function() {
            var i, e = this.options,
                s = this;
            this._addClass("ui-resizable"), t.extend(this, {
                _aspectRatio: !!e.aspectRatio,
                aspectRatio: e.aspectRatio,
                originalElement: this.element,
                _proportionallyResizeElements: [],
                _helper: e.helper || e.ghost || e.animate ? e.helper || "ui-resizable-helper" : null
            }), this.element[0].nodeName.match(/^(canvas|textarea|input|select|button|img)$/i) && (this.element.wrap(t("<div class='ui-wrapper'></div>").css({
                overflow: "hidden",
                position: this.element.css("position"),
                width: this.element.outerWidth(),
                height: this.element.outerHeight(),
                top: this.element.css("top"),
                left: this.element.css("left")
            })), this.element = this.element.parent().data("ui-resizable", this.element.resizable("instance")), this.elementIsWrapper = !0, i = {
                marginTop: this.originalElement.css("marginTop"),
                marginRight: this.originalElement.css("marginRight"),
                marginBottom: this.originalElement.css("marginBottom"),
                marginLeft: this.originalElement.css("marginLeft")
            }, this.element.css(i), this.originalElement.css("margin", 0), this.originalResizeStyle = this.originalElement.css("resize"), this.originalElement.css("resize", "none"), this._proportionallyResizeElements.push(this.originalElement.css({
                position: "static",
                zoom: 1,
                display: "block"
            })), this.originalElement.css(i), this._proportionallyResize()), this._setupHandles(), e.autoHide && t(this.element).on("mouseenter", (function() {
                e.disabled || (s._removeClass("ui-resizable-autohide"), s._handles.show())
            })).on("mouseleave", (function() {
                e.disabled || s.resizing || (s._addClass("ui-resizable-autohide"), s._handles.hide())
            })), this._mouseInit()
        },
        _destroy: function() {
            this._mouseDestroy(), this._addedHandles.remove();
            var i, e = function(i) {
                t(i).removeData("resizable").removeData("ui-resizable").off(".resizable")
            };
            return this.elementIsWrapper && (e(this.element), i = this.element, this.originalElement.css({
                position: i.css("position"),
                width: i.outerWidth(),
                height: i.outerHeight(),
                top: i.css("top"),
                left: i.css("left")
            }).insertAfter(i), i.remove()), this.originalElement.css("resize", this.originalResizeStyle), e(this.originalElement), this
        },
        _setOption: function(t, i) {
            switch (this._super(t, i), t) {
                case "handles":
                    this._removeHandles(), this._setupHandles();
                    break;
                case "aspectRatio":
                    this._aspectRatio = !!i
            }
        },
        _setupHandles: function() {
            var i, e, s, h, n, o = this.options,
                a = this;
            if (this.handles = o.handles || (t(".ui-resizable-handle", this.element).length ? {
                    n: ".ui-resizable-n",
                    e: ".ui-resizable-e",
                    s: ".ui-resizable-s",
                    w: ".ui-resizable-w",
                    se: ".ui-resizable-se",
                    sw: ".ui-resizable-sw",
                    ne: ".ui-resizable-ne",
                    nw: ".ui-resizable-nw"
                } : "e,s,se"), this._handles = t(), this._addedHandles = t(), this.handles.constructor === String)
                for ("all" === this.handles && (this.handles = "n,e,s,w,se,sw,ne,nw"), s = this.handles.split(","), this.handles = {}, e = 0; e < s.length; e++) h = "ui-resizable-" + (i = String.prototype.trim.call(s[e])), n = t("<div>"), this._addClass(n, "ui-resizable-handle " + h), n.css({
                    zIndex: o.zIndex
                }), this.handles[i] = ".ui-resizable-" + i, this.element.children(this.handles[i]).length || (this.element.append(n), this._addedHandles = this._addedHandles.add(n));
            this._renderAxis = function(i) {
                var e, s, h, n;
                for (e in i = i || this.element, this.handles) this.handles[e].constructor === String ? this.handles[e] = this.element.children(this.handles[e]).first().show() : (this.handles[e].jquery || this.handles[e].nodeType) && (this.handles[e] = t(this.handles[e]), this._on(this.handles[e], {
                    mousedown: a._mouseDown
                })), this.elementIsWrapper && this.originalElement[0].nodeName.match(/^(textarea|input|select|button)$/i) && (s = t(this.handles[e], this.element), n = /sw|ne|nw|se|n|s/.test(e) ? s.outerHeight() : s.outerWidth(), h = ["padding", /ne|nw|n/.test(e) ? "Top" : /se|sw|s/.test(e) ? "Bottom" : /^e$/.test(e) ? "Right" : "Left"].join(""), i.css(h, n), this._proportionallyResize()), this._handles = this._handles.add(this.handles[e])
            }, this._renderAxis(this.element), this._handles = this._handles.add(this.element.find(".ui-resizable-handle")), this._handles.disableSelection(), this._handles.on("mouseover", (function() {
                a.resizing || (this.className && (n = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)), a.axis = n && n[1] ? n[1] : "se")
            })), o.autoHide && (this._handles.hide(), this._addClass("ui-resizable-autohide"))
        },
        _removeHandles: function() {
            this._addedHandles.remove()
        },
        _mouseCapture: function(i) {
            var e, s, h = !1;
            for (e in this.handles)((s = t(this.handles[e])[0]) === i.target || t.contains(s, i.target)) && (h = !0);
            return !this.options.disabled && h
        },
        _mouseStart: function(i) {
            var e, s, h, n = this.options,
                o = this.element;
            return this.resizing = !0, this._renderProxy(), e = this._num(this.helper.css("left")), s = this._num(this.helper.css("top")), n.containment && (e += t(n.containment).scrollLeft() || 0, s += t(n.containment).scrollTop() || 0), this.offset = this.helper.offset(), this.position = {
                left: e,
                top: s
            }, this.size = this._helper ? {
                width: this.helper.width(),
                height: this.helper.height()
            } : {
                width: o.width(),
                height: o.height()
            }, this.originalSize = this._helper ? {
                width: o.outerWidth(),
                height: o.outerHeight()
            } : {
                width: o.width(),
                height: o.height()
            }, this.sizeDiff = {
                width: o.outerWidth() - o.width(),
                height: o.outerHeight() - o.height()
            }, this.originalPosition = {
                left: e,
                top: s
            }, this.originalMousePosition = {
                left: i.pageX,
                top: i.pageY
            }, this.aspectRatio = "number" == typeof n.aspectRatio ? n.aspectRatio : this.originalSize.width / this.originalSize.height || 1, h = t(".ui-resizable-" + this.axis).css("cursor"), t("body").css("cursor", "auto" === h ? this.axis + "-resize" : h), this._addClass("ui-resizable-resizing"), this._propagate("start", i), !0
        },
        _mouseDrag: function(i) {
            var e, s, h = this.originalMousePosition,
                n = this.axis,
                o = i.pageX - h.left || 0,
                a = i.pageY - h.top || 0,
                l = this._change[n];
            return this._updatePrevProperties(), !!l && (e = l.apply(this, [i, o, a]), this._updateVirtualBoundaries(i.shiftKey), (this._aspectRatio || i.shiftKey) && (e = this._updateRatio(e, i)), e = this._respectSize(e, i), this._updateCache(e), this._propagate("resize", i), s = this._applyChanges(), !this._helper && this._proportionallyResizeElements.length && this._proportionallyResize(), t.isEmptyObject(s) || (this._updatePrevProperties(), this._trigger("resize", i, this.ui()), this._applyChanges()), !1)
        },
        _mouseStop: function(i) {
            this.resizing = !1;
            var e, s, h, n, o, a, l, r = this.options,
                p = this;
            return this._helper && (h = (s = (e = this._proportionallyResizeElements).length && /textarea/i.test(e[0].nodeName)) && this._hasScroll(e[0], "left") ? 0 : p.sizeDiff.height, n = s ? 0 : p.sizeDiff.width, o = {
                width: p.helper.width() - n,
                height: p.helper.height() - h
            }, a = parseFloat(p.element.css("left")) + (p.position.left - p.originalPosition.left) || null, l = parseFloat(p.element.css("top")) + (p.position.top - p.originalPosition.top) || null, r.animate || this.element.css(t.extend(o, {
                top: l,
                left: a
            })), p.helper.height(p.size.height), p.helper.width(p.size.width), this._helper && !r.animate && this._proportionallyResize()), t("body").css("cursor", "auto"), this._removeClass("ui-resizable-resizing"), this._propagate("stop", i), this._helper && this.helper.remove(), !1
        },
        _updatePrevProperties: function() {
            this.prevPosition = {
                top: this.position.top,
                left: this.position.left
            }, this.prevSize = {
                width: this.size.width,
                height: this.size.height
            }
        },
        _applyChanges: function() {
            var t = {};
            return this.position.top !== this.prevPosition.top && (t.top = this.position.top + "px"), this.position.left !== this.prevPosition.left && (t.left = this.position.left + "px"), this.helper.css(t), this.size.width !== this.prevSize.width && (t.width = this.size.width + "px", this.helper.width(t.width)), this.size.height !== this.prevSize.height && (t.height = this.size.height + "px", this.helper.height(t.height)), t
        },
        _updateVirtualBoundaries: function(t) {
            var i, e, s, h, n, o = this.options;
            n = {
                minWidth: this._isNumber(o.minWidth) ? o.minWidth : 0,
                maxWidth: this._isNumber(o.maxWidth) ? o.maxWidth : 1 / 0,
                minHeight: this._isNumber(o.minHeight) ? o.minHeight : 0,
                maxHeight: this._isNumber(o.maxHeight) ? o.maxHeight : 1 / 0
            }, (this._aspectRatio || t) && (i = n.minHeight * this.aspectRatio, s = n.minWidth / this.aspectRatio, e = n.maxHeight * this.aspectRatio, h = n.maxWidth / this.aspectRatio, i > n.minWidth && (n.minWidth = i), s > n.minHeight && (n.minHeight = s), e < n.maxWidth && (n.maxWidth = e), h < n.maxHeight && (n.maxHeight = h)), this._vBoundaries = n
        },
        _updateCache: function(t) {
            this.offset = this.helper.offset(), this._isNumber(t.left) && (this.position.left = t.left), this._isNumber(t.top) && (this.position.top = t.top), this._isNumber(t.height) && (this.size.height = t.height), this._isNumber(t.width) && (this.size.width = t.width)
        },
        _updateRatio: function(t) {
            var i = this.position,
                e = this.size,
                s = this.axis;
            return this._isNumber(t.height) ? t.width = t.height * this.aspectRatio : this._isNumber(t.width) && (t.height = t.width / this.aspectRatio), "sw" === s && (t.left = i.left + (e.width - t.width), t.top = null), "nw" === s && (t.top = i.top + (e.height - t.height), t.left = i.left + (e.width - t.width)), t
        },
        _respectSize: function(t) {
            var i = this._vBoundaries,
                e = this.axis,
                s = this._isNumber(t.width) && i.maxWidth && i.maxWidth < t.width,
                h = this._isNumber(t.height) && i.maxHeight && i.maxHeight < t.height,
                n = this._isNumber(t.width) && i.minWidth && i.minWidth > t.width,
                o = this._isNumber(t.height) && i.minHeight && i.minHeight > t.height,
                a = this.originalPosition.left + this.originalSize.width,
                l = this.originalPosition.top + this.originalSize.height,
                r = /sw|nw|w/.test(e),
                p = /nw|ne|n/.test(e);
            return n && (t.width = i.minWidth), o && (t.height = i.minHeight), s && (t.width = i.maxWidth), h && (t.height = i.maxHeight), n && r && (t.left = a - i.minWidth), s && r && (t.left = a - i.maxWidth), o && p && (t.top = l - i.minHeight), h && p && (t.top = l - i.maxHeight), t.width || t.height || t.left || !t.top ? t.width || t.height || t.top || !t.left || (t.left = null) : t.top = null, t
        },
        _getPaddingPlusBorderDimensions: function(t) {
            for (var i = 0, e = [], s = [t.css("borderTopWidth"), t.css("borderRightWidth"), t.css("borderBottomWidth"), t.css("borderLeftWidth")], h = [t.css("paddingTop"), t.css("paddingRight"), t.css("paddingBottom"), t.css("paddingLeft")]; i < 4; i++) e[i] = parseFloat(s[i]) || 0, e[i] += parseFloat(h[i]) || 0;
            return {
                height: e[0] + e[2],
                width: e[1] + e[3]
            }
        },
        _proportionallyResize: function() {
            if (this._proportionallyResizeElements.length)
                for (var t, i = 0, e = this.helper || this.element; i < this._proportionallyResizeElements.length; i++) t = this._proportionallyResizeElements[i], this.outerDimensions || (this.outerDimensions = this._getPaddingPlusBorderDimensions(t)), t.css({
                    height: e.height() - this.outerDimensions.height || 0,
                    width: e.width() - this.outerDimensions.width || 0
                })
        },
        _renderProxy: function() {
            var i = this.element,
                e = this.options;
            this.elementOffset = i.offset(), this._helper ? (this.helper = this.helper || t("<div></div>").css({
                overflow: "hidden"
            }), this._addClass(this.helper, this._helper), this.helper.css({
                width: this.element.outerWidth(),
                height: this.element.outerHeight(),
                position: "absolute",
                left: this.elementOffset.left + "px",
                top: this.elementOffset.top + "px",
                zIndex: ++e.zIndex
            }), this.helper.appendTo("body").disableSelection()) : this.helper = this.element
        },
        _change: {
            e: function(t, i) {
                return {
                    width: this.originalSize.width + i
                }
            },
            w: function(t, i) {
                var e = this.originalSize;
                return {
                    left: this.originalPosition.left + i,
                    width: e.width - i
                }
            },
            n: function(t, i, e) {
                var s = this.originalSize;
                return {
                    top: this.originalPosition.top + e,
                    height: s.height - e
                }
            },
            s: function(t, i, e) {
                return {
                    height: this.originalSize.height + e
                }
            },
            se: function(i, e, s) {
                return t.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [i, e, s]))
            },
            sw: function(i, e, s) {
                return t.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [i, e, s]))
            },
            ne: function(i, e, s) {
                return t.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [i, e, s]))
            },
            nw: function(i, e, s) {
                return t.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [i, e, s]))
            }
        },
        _propagate: function(i, e) {
            t.ui.plugin.call(this, i, [e, this.ui()]), "resize" !== i && this._trigger(i, e, this.ui())
        },
        plugins: {},
        ui: function() {
            return {
                originalElement: this.originalElement,
                element: this.element,
                helper: this.helper,
                position: this.position,
                size: this.size,
                originalSize: this.originalSize,
                originalPosition: this.originalPosition
            }
        }
    }), t.ui.plugin.add("resizable", "animate", {
        stop: function(i) {
            var e = t(this).resizable("instance"),
                s = e.options,
                h = e._proportionallyResizeElements,
                n = h.length && /textarea/i.test(h[0].nodeName),
                o = n && e._hasScroll(h[0], "left") ? 0 : e.sizeDiff.height,
                a = n ? 0 : e.sizeDiff.width,
                l = {
                    width: e.size.width - a,
                    height: e.size.height - o
                },
                r = parseFloat(e.element.css("left")) + (e.position.left - e.originalPosition.left) || null,
                p = parseFloat(e.element.css("top")) + (e.position.top - e.originalPosition.top) || null;
            e.element.animate(t.extend(l, p && r ? {
                top: p,
                left: r
            } : {}), {
                duration: s.animateDuration,
                easing: s.animateEasing,
                step: function() {
                    var s = {
                        width: parseFloat(e.element.css("width")),
                        height: parseFloat(e.element.css("height")),
                        top: parseFloat(e.element.css("top")),
                        left: parseFloat(e.element.css("left"))
                    };
                    h && h.length && t(h[0]).css({
                        width: s.width,
                        height: s.height
                    }), e._updateCache(s), e._propagate("resize", i)
                }
            })
        }
    }), t.ui.plugin.add("resizable", "containment", {
        start: function() {
            var i, e, s, h, n, o, a, l = t(this).resizable("instance"),
                r = l.options,
                p = l.element,
                d = r.containment,
                g = d instanceof t ? d.get(0) : /parent/.test(d) ? p.parent().get(0) : d;
            g && (l.containerElement = t(g), /document/.test(d) || d === document ? (l.containerOffset = {
                left: 0,
                top: 0
            }, l.containerPosition = {
                left: 0,
                top: 0
            }, l.parentData = {
                element: t(document),
                left: 0,
                top: 0,
                width: t(document).width(),
                height: t(document).height() || document.body.parentNode.scrollHeight
            }) : (i = t(g), e = [], t(["Top", "Right", "Left", "Bottom"]).each((function(t, s) {
                e[t] = l._num(i.css("padding" + s))
            })), l.containerOffset = i.offset(), l.containerPosition = i.position(), l.containerSize = {
                height: i.innerHeight() - e[3],
                width: i.innerWidth() - e[1]
            }, s = l.containerOffset, h = l.containerSize.height, n = l.containerSize.width, o = l._hasScroll(g, "left") ? g.scrollWidth : n, a = l._hasScroll(g) ? g.scrollHeight : h, l.parentData = {
                element: g,
                left: s.left,
                top: s.top,
                width: o,
                height: a
            }))
        },
        resize: function(i) {
            var e, s, h, n, o = t(this).resizable("instance"),
                a = o.options,
                l = o.containerOffset,
                r = o.position,
                p = o._aspectRatio || i.shiftKey,
                d = {
                    top: 0,
                    left: 0
                },
                g = o.containerElement,
                u = !0;
            g[0] !== document && /static/.test(g.css("position")) && (d = l), r.left < (o._helper ? l.left : 0) && (o.size.width = o.size.width + (o._helper ? o.position.left - l.left : o.position.left - d.left), p && (o.size.height = o.size.width / o.aspectRatio, u = !1), o.position.left = a.helper ? l.left : 0), r.top < (o._helper ? l.top : 0) && (o.size.height = o.size.height + (o._helper ? o.position.top - l.top : o.position.top), p && (o.size.width = o.size.height * o.aspectRatio, u = !1), o.position.top = o._helper ? l.top : 0), h = o.containerElement.get(0) === o.element.parent().get(0), n = /relative|absolute/.test(o.containerElement.css("position")), h && n ? (o.offset.left = o.parentData.left + o.position.left, o.offset.top = o.parentData.top + o.position.top) : (o.offset.left = o.element.offset().left, o.offset.top = o.element.offset().top), e = Math.abs(o.sizeDiff.width + (o._helper ? o.offset.left - d.left : o.offset.left - l.left)), s = Math.abs(o.sizeDiff.height + (o._helper ? o.offset.top - d.top : o.offset.top - l.top)), e + o.size.width >= o.parentData.width && (o.size.width = o.parentData.width - e, p && (o.size.height = o.size.width / o.aspectRatio, u = !1)), s + o.size.height >= o.parentData.height && (o.size.height = o.parentData.height - s, p && (o.size.width = o.size.height * o.aspectRatio, u = !1)), u || (o.position.left = o.prevPosition.left, o.position.top = o.prevPosition.top, o.size.width = o.prevSize.width, o.size.height = o.prevSize.height)
        },
        stop: function() {
            var i = t(this).resizable("instance"),
                e = i.options,
                s = i.containerOffset,
                h = i.containerPosition,
                n = i.containerElement,
                o = t(i.helper),
                a = o.offset(),
                l = o.outerWidth() - i.sizeDiff.width,
                r = o.outerHeight() - i.sizeDiff.height;
            i._helper && !e.animate && /relative/.test(n.css("position")) && t(this).css({
                left: a.left - h.left - s.left,
                width: l,
                height: r
            }), i._helper && !e.animate && /static/.test(n.css("position")) && t(this).css({
                left: a.left - h.left - s.left,
                width: l,
                height: r
            })
        }
    }), t.ui.plugin.add("resizable", "alsoResize", {
        start: function() {
            var i = t(this).resizable("instance").options;
            t(i.alsoResize).each((function() {
                var i = t(this);
                i.data("ui-resizable-alsoresize", {
                    width: parseFloat(i.css("width")),
                    height: parseFloat(i.css("height")),
                    left: parseFloat(i.css("left")),
                    top: parseFloat(i.css("top"))
                })
            }))
        },
        resize: function(i, e) {
            var s = t(this).resizable("instance"),
                h = s.options,
                n = s.originalSize,
                o = s.originalPosition,
                a = {
                    height: s.size.height - n.height || 0,
                    width: s.size.width - n.width || 0,
                    top: s.position.top - o.top || 0,
                    left: s.position.left - o.left || 0
                };
            t(h.alsoResize).each((function() {
                var i = t(this),
                    s = t(this).data("ui-resizable-alsoresize"),
                    h = {},
                    n = i.parents(e.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];
                t.each(n, (function(t, i) {
                    var e = (s[i] || 0) + (a[i] || 0);
                    e && e >= 0 && (h[i] = e || null)
                })), i.css(h)
            }))
        },
        stop: function() {
            t(this).removeData("ui-resizable-alsoresize")
        }
    }), t.ui.plugin.add("resizable", "ghost", {
        start: function() {
            var i = t(this).resizable("instance"),
                e = i.size;
            i.ghost = i.originalElement.clone(), i.ghost.css({
                opacity: .25,
                display: "block",
                position: "relative",
                height: e.height,
                width: e.width,
                margin: 0,
                left: 0,
                top: 0
            }), i._addClass(i.ghost, "ui-resizable-ghost"), !1 !== t.uiBackCompat && "string" == typeof i.options.ghost && i.ghost.addClass(this.options.ghost), i.ghost.appendTo(i.helper)
        },
        resize: function() {
            var i = t(this).resizable("instance");
            i.ghost && i.ghost.css({
                position: "relative",
                height: i.size.height,
                width: i.size.width
            })
        },
        stop: function() {
            var i = t(this).resizable("instance");
            i.ghost && i.helper && i.helper.get(0).removeChild(i.ghost.get(0))
        }
    }), t.ui.plugin.add("resizable", "grid", {
        resize: function() {
            var i, e = t(this).resizable("instance"),
                s = e.options,
                h = e.size,
                n = e.originalSize,
                o = e.originalPosition,
                a = e.axis,
                l = "number" == typeof s.grid ? [s.grid, s.grid] : s.grid,
                r = l[0] || 1,
                p = l[1] || 1,
                d = Math.round((h.width - n.width) / r) * r,
                g = Math.round((h.height - n.height) / p) * p,
                u = n.width + d,
                c = n.height + g,
                f = s.maxWidth && s.maxWidth < u,
                m = s.maxHeight && s.maxHeight < c,
                z = s.minWidth && s.minWidth > u,
                w = s.minHeight && s.minHeight > c;
            s.grid = l, z && (u += r), w && (c += p), f && (u -= r), m && (c -= p), /^(se|s|e)$/.test(a) ? (e.size.width = u, e.size.height = c) : /^(ne)$/.test(a) ? (e.size.width = u, e.size.height = c, e.position.top = o.top - g) : /^(sw)$/.test(a) ? (e.size.width = u, e.size.height = c, e.position.left = o.left - d) : ((c - p <= 0 || u - r <= 0) && (i = e._getPaddingPlusBorderDimensions(this)), c - p > 0 ? (e.size.height = c, e.position.top = o.top - g) : (c = p - i.height, e.size.height = c, e.position.top = o.top + n.height - c), u - r > 0 ? (e.size.width = u, e.position.left = o.left - d) : (u = r - i.width, e.size.width = u, e.position.left = o.left + n.width - u))
        }
    }), t.ui.resizable
}));

/*!
 * jQuery UI Button 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./controlgroup", "./checkboxradio", "../keycode", "../widget"], t) : t(jQuery)
}((function(t) {
    "use strict";
    var i;
    return t.widget("ui.button", {
        version: "1.13.3",
        defaultElement: "<button>",
        options: {
            classes: {
                "ui-button": "ui-corner-all"
            },
            disabled: null,
            icon: null,
            iconPosition: "beginning",
            label: null,
            showLabel: !0
        },
        _getCreateOptions: function() {
            var t, i = this._super() || {};
            return this.isInput = this.element.is("input"), null != (t = this.element[0].disabled) && (i.disabled = t), this.originalLabel = this.isInput ? this.element.val() : this.element.html(), this.originalLabel && (i.label = this.originalLabel), i
        },
        _create: function() {
            !this.option.showLabel & !this.options.icon && (this.options.showLabel = !0), null == this.options.disabled && (this.options.disabled = this.element[0].disabled || !1), this.hasTitle = !!this.element.attr("title"), this.options.label && this.options.label !== this.originalLabel && (this.isInput ? this.element.val(this.options.label) : this.element.html(this.options.label)), this._addClass("ui-button", "ui-widget"), this._setOption("disabled", this.options.disabled), this._enhance(), this.element.is("a") && this._on({
                keyup: function(i) {
                    i.keyCode === t.ui.keyCode.SPACE && (i.preventDefault(), this.element[0].click ? this.element[0].click() : this.element.trigger("click"))
                }
            })
        },
        _enhance: function() {
            this.element.is("button") || this.element.attr("role", "button"), this.options.icon && (this._updateIcon("icon", this.options.icon), this._updateTooltip())
        },
        _updateTooltip: function() {
            this.title = this.element.attr("title"), this.options.showLabel || this.title || this.element.attr("title", this.options.label)
        },
        _updateIcon: function(i, o) {
            var s = "iconPosition" !== i,
                n = s ? this.options.iconPosition : o,
                e = "top" === n || "bottom" === n;
            this.icon ? s && this._removeClass(this.icon, null, this.options.icon) : (this.icon = t("<span>"), this._addClass(this.icon, "ui-button-icon", "ui-icon"), this.options.showLabel || this._addClass("ui-button-icon-only")), s && this._addClass(this.icon, null, o), this._attachIcon(n), e ? (this._addClass(this.icon, null, "ui-widget-icon-block"), this.iconSpace && this.iconSpace.remove()) : (this.iconSpace || (this.iconSpace = t("<span> </span>"), this._addClass(this.iconSpace, "ui-button-icon-space")), this._removeClass(this.icon, null, "ui-wiget-icon-block"), this._attachIconSpace(n))
        },
        _destroy: function() {
            this.element.removeAttr("role"), this.icon && this.icon.remove(), this.iconSpace && this.iconSpace.remove(), this.hasTitle || this.element.removeAttr("title")
        },
        _attachIconSpace: function(t) {
            this.icon[/^(?:end|bottom)/.test(t) ? "before" : "after"](this.iconSpace)
        },
        _attachIcon: function(t) {
            this.element[/^(?:end|bottom)/.test(t) ? "append" : "prepend"](this.icon)
        },
        _setOptions: function(t) {
            var i = void 0 === t.showLabel ? this.options.showLabel : t.showLabel,
                o = void 0 === t.icon ? this.options.icon : t.icon;
            i || o || (t.showLabel = !0), this._super(t)
        },
        _setOption: function(t, i) {
            "icon" === t && (i ? this._updateIcon(t, i) : this.icon && (this.icon.remove(), this.iconSpace && this.iconSpace.remove())), "iconPosition" === t && this._updateIcon(t, i), "showLabel" === t && (this._toggleClass("ui-button-icon-only", null, !i), this._updateTooltip()), "label" === t && (this.isInput ? this.element.val(i) : (this.element.html(i), this.icon && (this._attachIcon(this.options.iconPosition), this._attachIconSpace(this.options.iconPosition)))), this._super(t, i), "disabled" === t && (this._toggleClass(null, "ui-state-disabled", i), this.element[0].disabled = i, i && this.element.trigger("blur"))
        },
        refresh: function() {
            var t = this.element.is("input, button") ? this.element[0].disabled : this.element.hasClass("ui-button-disabled");
            t !== this.options.disabled && this._setOptions({
                disabled: t
            }), this._updateTooltip()
        }
    }), !1 !== t.uiBackCompat && (t.widget("ui.button", t.ui.button, {
        options: {
            text: !0,
            icons: {
                primary: null,
                secondary: null
            }
        },
        _create: function() {
            this.options.showLabel && !this.options.text && (this.options.showLabel = this.options.text), !this.options.showLabel && this.options.text && (this.options.text = this.options.showLabel), this.options.icon || !this.options.icons.primary && !this.options.icons.secondary ? this.options.icon && (this.options.icons.primary = this.options.icon) : this.options.icons.primary ? this.options.icon = this.options.icons.primary : (this.options.icon = this.options.icons.secondary, this.options.iconPosition = "end"), this._super()
        },
        _setOption: function(t, i) {
            "text" !== t ? ("showLabel" === t && (this.options.text = i), "icon" === t && (this.options.icons.primary = i), "icons" === t && (i.primary ? (this._super("icon", i.primary), this._super("iconPosition", "beginning")) : i.secondary && (this._super("icon", i.secondary), this._super("iconPosition", "end"))), this._superApply(arguments)) : this._super("showLabel", i)
        }
    }), t.fn.button = (i = t.fn.button, function(o) {
        var s = "string" == typeof o,
            n = Array.prototype.slice.call(arguments, 1),
            e = this;
        return s ? this.length || "instance" !== o ? this.each((function() {
            var i, s = t(this).attr("type"),
                h = "checkbox" !== s && "radio" !== s ? "button" : "checkboxradio",
                a = t.data(this, "ui-" + h);
            return "instance" === o ? (e = a, !1) : a ? "function" != typeof a[o] || "_" === o.charAt(0) ? t.error("no such method '" + o + "' for button widget instance") : (i = a[o].apply(a, n)) !== a && void 0 !== i ? (e = i && i.jquery ? e.pushStack(i.get()) : i, !1) : void 0 : t.error("cannot call methods on button prior to initialization; attempted to call method '" + o + "'")
        })) : e = void 0 : (n.length && (o = t.widget.extend.apply(null, [o].concat(n))), this.each((function() {
            var s = t(this).attr("type"),
                n = "checkbox" !== s && "radio" !== s ? "button" : "checkboxradio",
                e = t.data(this, "ui-" + n);
            if (e) e.option(o || {}), e._init && e._init();
            else {
                if ("button" === n) return void i.call(t(this), o);
                t(this).checkboxradio(t.extend({
                    icon: !1
                }, o))
            }
        }))), e
    }), t.fn.buttonset = function() {
        return t.ui.controlgroup || t.error("Controlgroup widget missing"), "option" === arguments[0] && "items" === arguments[1] && arguments[2] ? this.controlgroup.apply(this, [arguments[0], "items.button", arguments[2]]) : "option" === arguments[0] && "items" === arguments[1] ? this.controlgroup.apply(this, [arguments[0], "items.button"]) : ("object" == typeof arguments[0] && arguments[0].items && (arguments[0].items = {
            button: arguments[0].items
        }), this.controlgroup.apply(this, arguments))
    }), t.ui.button
}));

/*!
 * jQuery UI Dialog 1.13.3
 * https://jqueryui.com
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */
! function(i) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./button", "./draggable", "./mouse", "./resizable", "../focusable", "../keycode", "../position", "../safe-active-element", "../safe-blur", "../tabbable", "../unique-id", "../version", "../widget"], i) : i(jQuery)
}((function(i) {
    "use strict";
    return i.widget("ui.dialog", {
        version: "1.13.3",
        options: {
            appendTo: "body",
            autoOpen: !0,
            buttons: [],
            classes: {
                "ui-dialog": "ui-corner-all",
                "ui-dialog-titlebar": "ui-corner-all"
            },
            closeOnEscape: !0,
            closeText: "Close",
            draggable: !0,
            hide: null,
            height: "auto",
            maxHeight: null,
            maxWidth: null,
            minHeight: 150,
            minWidth: 150,
            modal: !1,
            position: {
                my: "center",
                at: "center",
                of: window,
                collision: "fit",
                using: function(t) {
                    var e = i(this).css(t).offset().top;
                    e < 0 && i(this).css("top", t.top - e)
                }
            },
            resizable: !0,
            show: null,
            title: null,
            width: 300,
            beforeClose: null,
            close: null,
            drag: null,
            dragStart: null,
            dragStop: null,
            focus: null,
            open: null,
            resize: null,
            resizeStart: null,
            resizeStop: null
        },
        sizeRelatedOptions: {
            buttons: !0,
            height: !0,
            maxHeight: !0,
            maxWidth: !0,
            minHeight: !0,
            minWidth: !0,
            width: !0
        },
        resizableRelatedOptions: {
            maxHeight: !0,
            maxWidth: !0,
            minHeight: !0,
            minWidth: !0
        },
        _create: function() {
            this.originalCss = {
                display: this.element[0].style.display,
                width: this.element[0].style.width,
                minHeight: this.element[0].style.minHeight,
                maxHeight: this.element[0].style.maxHeight,
                height: this.element[0].style.height
            }, this.originalPosition = {
                parent: this.element.parent(),
                index: this.element.parent().children().index(this.element)
            }, this.originalTitle = this.element.attr("title"), null == this.options.title && null != this.originalTitle && (this.options.title = this.originalTitle), this.options.disabled && (this.options.disabled = !1), this._createWrapper(), this.element.show().removeAttr("title").appendTo(this.uiDialog), this._addClass("ui-dialog-content", "ui-widget-content"), this._createTitlebar(), this._createButtonPane(), this.options.draggable && i.fn.draggable && this._makeDraggable(), this.options.resizable && i.fn.resizable && this._makeResizable(), this._isOpen = !1, this._trackFocus()
        },
        _init: function() {
            this.options.autoOpen && this.open()
        },
        _appendTo: function() {
            var t = this.options.appendTo;
            return t && (t.jquery || t.nodeType) ? i(t) : this.document.find(t || "body").eq(0)
        },
        _destroy: function() {
            var i, t = this.originalPosition;
            this._untrackInstance(), this._destroyOverlay(), this.element.removeUniqueId().css(this.originalCss).detach(), this.uiDialog.remove(), this.originalTitle && this.element.attr("title", this.originalTitle), (i = t.parent.children().eq(t.index)).length && i[0] !== this.element[0] ? i.before(this.element) : t.parent.append(this.element)
        },
        widget: function() {
            return this.uiDialog
        },
        disable: i.noop,
        enable: i.noop,
        close: function(t) {
            var e = this;
            this._isOpen && !1 !== this._trigger("beforeClose", t) && (this._isOpen = !1, this._focusedElement = null, this._destroyOverlay(), this._untrackInstance(), this.opener.filter(":focusable").trigger("focus").length || i.ui.safeBlur(i.ui.safeActiveElement(this.document[0])), this._hide(this.uiDialog, this.options.hide, (function() {
                e._trigger("close", t)
            })))
        },
        isOpen: function() {
            return this._isOpen
        },
        moveToTop: function() {
            this._moveToTop()
        },
        _moveToTop: function(t, e) {
            var o = !1,
                s = this.uiDialog.siblings(".ui-front:visible").map((function() {
                    return +i(this).css("z-index")
                })).get(),
                n = Math.max.apply(null, s);
            return n >= +this.uiDialog.css("z-index") && (this.uiDialog.css("z-index", n + 1), o = !0), o && !e && this._trigger("focus", t), o
        },
        open: function() {
            var t = this;
            this._isOpen ? this._moveToTop() && this._focusTabbable() : (this._isOpen = !0, this.opener = i(i.ui.safeActiveElement(this.document[0])), this._size(), this._position(), this._createOverlay(), this._moveToTop(null, !0), this.overlay && this.overlay.css("z-index", this.uiDialog.css("z-index") - 1), this._show(this.uiDialog, this.options.show, (function() {
                t._focusTabbable(), t._trigger("focus")
            })), this._makeFocusTarget(), this._trigger("open"))
        },
        _focusTabbable: function() {
            var i = this._focusedElement;
            i || (i = this.element.find("[autofocus]")), i.length || (i = this.element.find(":tabbable")), i.length || (i = this.uiDialogButtonPane.find(":tabbable")), i.length || (i = this.uiDialogTitlebarClose.filter(":tabbable")), i.length || (i = this.uiDialog), i.eq(0).trigger("focus")
        },
        _restoreTabbableFocus: function() {
            var t = i.ui.safeActiveElement(this.document[0]);
            this.uiDialog[0] === t || i.contains(this.uiDialog[0], t) || this._focusTabbable()
        },
        _keepFocus: function(i) {
            i.preventDefault(), this._restoreTabbableFocus(), this._delay(this._restoreTabbableFocus)
        },
        _createWrapper: function() {
            this.uiDialog = i("<div>").hide().attr({
                tabIndex: -1,
                role: "dialog"
            }).appendTo(this._appendTo()), this._addClass(this.uiDialog, "ui-dialog", "ui-widget ui-widget-content ui-front"), this._on(this.uiDialog, {
                keydown: function(t) {
                    if (this.options.closeOnEscape && !t.isDefaultPrevented() && t.keyCode && t.keyCode === i.ui.keyCode.ESCAPE) return t.preventDefault(), void this.close(t);
                    if (t.keyCode === i.ui.keyCode.TAB && !t.isDefaultPrevented()) {
                        var e = this.uiDialog.find(":tabbable"),
                            o = e.first(),
                            s = e.last();
                        t.target !== s[0] && t.target !== this.uiDialog[0] || t.shiftKey ? t.target !== o[0] && t.target !== this.uiDialog[0] || !t.shiftKey || (this._delay((function() {
                            s.trigger("focus")
                        })), t.preventDefault()) : (this._delay((function() {
                            o.trigger("focus")
                        })), t.preventDefault())
                    }
                },
                mousedown: function(i) {
                    this._moveToTop(i) && this._focusTabbable()
                }
            }), this.element.find("[aria-describedby]").length || this.uiDialog.attr({
                "aria-describedby": this.element.uniqueId().attr("id")
            })
        },
        _createTitlebar: function() {
            var t;
            this.uiDialogTitlebar = i("<div>"), this._addClass(this.uiDialogTitlebar, "ui-dialog-titlebar", "ui-widget-header ui-helper-clearfix"), this._on(this.uiDialogTitlebar, {
                mousedown: function(t) {
                    i(t.target).closest(".ui-dialog-titlebar-close") || this.uiDialog.trigger("focus")
                }
            }), this.uiDialogTitlebarClose = i("<button type='button'></button>").button({
                label: i("<a>").text(this.options.closeText).html(),
                icon: "ui-icon-closethick",
                showLabel: !1
            }).appendTo(this.uiDialogTitlebar), this._addClass(this.uiDialogTitlebarClose, "ui-dialog-titlebar-close"), this._on(this.uiDialogTitlebarClose, {
                click: function(i) {
                    i.preventDefault(), this.close(i)
                }
            }), t = i("<span>").uniqueId().prependTo(this.uiDialogTitlebar), this._addClass(t, "ui-dialog-title"), this._title(t), this.uiDialogTitlebar.prependTo(this.uiDialog), this.uiDialog.attr({
                "aria-labelledby": t.attr("id")
            })
        },
        _title: function(i) {
            this.options.title ? i.text(this.options.title) : i.html("&#160;")
        },
        _createButtonPane: function() {
            this.uiDialogButtonPane = i("<div>"), this._addClass(this.uiDialogButtonPane, "ui-dialog-buttonpane", "ui-widget-content ui-helper-clearfix"), this.uiButtonSet = i("<div>").appendTo(this.uiDialogButtonPane), this._addClass(this.uiButtonSet, "ui-dialog-buttonset"), this._createButtons()
        },
        _createButtons: function() {
            var t = this,
                e = this.options.buttons;
            this.uiDialogButtonPane.remove(), this.uiButtonSet.empty(), i.isEmptyObject(e) || Array.isArray(e) && !e.length ? this._removeClass(this.uiDialog, "ui-dialog-buttons") : (i.each(e, (function(e, o) {
                var s, n;
                o = "function" == typeof o ? {
                    click: o,
                    text: e
                } : o, o = i.extend({
                    type: "button"
                }, o), s = o.click, n = {
                    icon: o.icon,
                    iconPosition: o.iconPosition,
                    showLabel: o.showLabel,
                    icons: o.icons,
                    text: o.text
                }, delete o.click, delete o.icon, delete o.iconPosition, delete o.showLabel, delete o.icons, "boolean" == typeof o.text && delete o.text, i("<button></button>", o).button(n).appendTo(t.uiButtonSet).on("click", (function() {
                    s.apply(t.element[0], arguments)
                }))
            })), this._addClass(this.uiDialog, "ui-dialog-buttons"), this.uiDialogButtonPane.appendTo(this.uiDialog))
        },
        _makeDraggable: function() {
            var t = this,
                e = this.options;

            function o(i) {
                return {
                    position: i.position,
                    offset: i.offset
                }
            }
            this.uiDialog.draggable({
                cancel: ".ui-dialog-content, .ui-dialog-titlebar-close",
                handle: ".ui-dialog-titlebar",
                containment: "document",
                start: function(e, s) {
                    t._addClass(i(this), "ui-dialog-dragging"), t._blockFrames(), t._trigger("dragStart", e, o(s))
                },
                drag: function(i, e) {
                    t._trigger("drag", i, o(e))
                },
                stop: function(s, n) {
                    var a = n.offset.left - t.document.scrollLeft(),
                        l = n.offset.top - t.document.scrollTop();
                    e.position = {
                        my: "left top",
                        at: "left" + (a >= 0 ? "+" : "") + a + " top" + (l >= 0 ? "+" : "") + l,
                        of: t.window
                    }, t._removeClass(i(this), "ui-dialog-dragging"), t._unblockFrames(), t._trigger("dragStop", s, o(n))
                }
            })
        },
        _makeResizable: function() {
            var t = this,
                e = this.options,
                o = e.resizable,
                s = this.uiDialog.css("position"),
                n = "string" == typeof o ? o : "n,e,s,w,se,sw,ne,nw";

            function a(i) {
                return {
                    originalPosition: i.originalPosition,
                    originalSize: i.originalSize,
                    position: i.position,
                    size: i.size
                }
            }
            this.uiDialog.resizable({
                cancel: ".ui-dialog-content",
                containment: "document",
                alsoResize: this.element,
                maxWidth: e.maxWidth,
                maxHeight: e.maxHeight,
                minWidth: e.minWidth,
                minHeight: this._minHeight(),
                handles: n,
                start: function(e, o) {
                    t._addClass(i(this), "ui-dialog-resizing"), t._blockFrames(), t._trigger("resizeStart", e, a(o))
                },
                resize: function(i, e) {
                    t._trigger("resize", i, a(e))
                },
                stop: function(o, s) {
                    var n = t.uiDialog.offset(),
                        l = n.left - t.document.scrollLeft(),
                        h = n.top - t.document.scrollTop();
                    e.height = t.uiDialog.height(), e.width = t.uiDialog.width(), e.position = {
                        my: "left top",
                        at: "left" + (l >= 0 ? "+" : "") + l + " top" + (h >= 0 ? "+" : "") + h,
                        of: t.window
                    }, t._removeClass(i(this), "ui-dialog-resizing"), t._unblockFrames(), t._trigger("resizeStop", o, a(s))
                }
            }).css("position", s)
        },
        _trackFocus: function() {
            this._on(this.widget(), {
                focusin: function(t) {
                    this._makeFocusTarget(), this._focusedElement = i(t.target)
                }
            })
        },
        _makeFocusTarget: function() {
            this._untrackInstance(), this._trackingInstances().unshift(this)
        },
        _untrackInstance: function() {
            var t = this._trackingInstances(),
                e = i.inArray(this, t); - 1 !== e && t.splice(e, 1)
        },
        _trackingInstances: function() {
            var i = this.document.data("ui-dialog-instances");
            return i || (i = [], this.document.data("ui-dialog-instances", i)), i
        },
        _minHeight: function() {
            var i = this.options;
            return "auto" === i.height ? i.minHeight : Math.min(i.minHeight, i.height)
        },
        _position: function() {
            var i = this.uiDialog.is(":visible");
            i || this.uiDialog.show(), this.uiDialog.position(this.options.position), i || this.uiDialog.hide()
        },
        _setOptions: function(t) {
            var e = this,
                o = !1,
                s = {};
            i.each(t, (function(i, t) {
                e._setOption(i, t), i in e.sizeRelatedOptions && (o = !0), i in e.resizableRelatedOptions && (s[i] = t)
            })), o && (this._size(), this._position()), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", s)
        },
        _setOption: function(t, e) {
            var o, s, n = this.uiDialog;
            "disabled" !== t && (this._super(t, e), "appendTo" === t && this.uiDialog.appendTo(this._appendTo()), "buttons" === t && this._createButtons(), "closeText" === t && this.uiDialogTitlebarClose.button({
                label: i("<a>").text("" + this.options.closeText).html()
            }), "draggable" === t && ((o = n.is(":data(ui-draggable)")) && !e && n.draggable("destroy"), !o && e && this._makeDraggable()), "position" === t && this._position(), "resizable" === t && ((s = n.is(":data(ui-resizable)")) && !e && n.resizable("destroy"), s && "string" == typeof e && n.resizable("option", "handles", e), s || !1 === e || this._makeResizable()), "title" === t && this._title(this.uiDialogTitlebar.find(".ui-dialog-title")))
        },
        _size: function() {
            var i, t, e, o = this.options;
            this.element.show().css({
                width: "auto",
                minHeight: 0,
                maxHeight: "none",
                height: 0
            }), o.minWidth > o.width && (o.width = o.minWidth), i = this.uiDialog.css({
                height: "auto",
                width: o.width
            }).outerHeight(), t = Math.max(0, o.minHeight - i), e = "number" == typeof o.maxHeight ? Math.max(0, o.maxHeight - i) : "none", "auto" === o.height ? this.element.css({
                minHeight: t,
                maxHeight: e,
                height: "auto"
            }) : this.element.height(Math.max(0, o.height - i)), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", "minHeight", this._minHeight())
        },
        _blockFrames: function() {
            this.iframeBlocks = this.document.find("iframe").map((function() {
                var t = i(this);
                return i("<div>").css({
                    position: "absolute",
                    width: t.outerWidth(),
                    height: t.outerHeight()
                }).appendTo(t.parent()).offset(t.offset())[0]
            }))
        },
        _unblockFrames: function() {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _allowInteraction: function(t) {
            return !!i(t.target).closest(".ui-dialog").length || !!i(t.target).closest(".ui-datepicker").length
        },
        _createOverlay: function() {
            if (this.options.modal) {
                var t = i.fn.jquery.substring(0, 4),
                    e = !0;
                this._delay((function() {
                    e = !1
                })), this.document.data("ui-dialog-overlays") || this.document.on("focusin.ui-dialog", function(i) {
                    if (!e) {
                        var o = this._trackingInstances()[0];
                        o._allowInteraction(i) || (i.preventDefault(), o._focusTabbable(), "3.4." !== t && "3.5." !== t && "3.6." !== t || o._delay(o._restoreTabbableFocus))
                    }
                }.bind(this)), this.overlay = i("<div>").appendTo(this._appendTo()), this._addClass(this.overlay, null, "ui-widget-overlay ui-front"), this._on(this.overlay, {
                    mousedown: "_keepFocus"
                }), this.document.data("ui-dialog-overlays", (this.document.data("ui-dialog-overlays") || 0) + 1)
            }
        },
        _destroyOverlay: function() {
            if (this.options.modal && this.overlay) {
                var i = this.document.data("ui-dialog-overlays") - 1;
                i ? this.document.data("ui-dialog-overlays", i) : (this.document.off("focusin.ui-dialog"), this.document.removeData("ui-dialog-overlays")), this.overlay.remove(), this.overlay = null
            }
        }
    }), !1 !== i.uiBackCompat && i.widget("ui.dialog", i.ui.dialog, {
        options: {
            dialogClass: ""
        },
        _createWrapper: function() {
            this._super(), this.uiDialog.addClass(this.options.dialogClass)
        },
        _setOption: function(i, t) {
            "dialogClass" === i && this.uiDialog.removeClass(this.options.dialogClass).addClass(t), this._superApply(arguments)
        }
    }), i.ui.dialog
}));

/**
 * tua-body-scroll-lock v1.5.0
 * (c) 2024 Evinma, BuptStEve
 * @license MIT
 */
! function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? t(exports) : "function" == typeof define && define.amd ? define(["exports"], t) : t((e = "undefined" != typeof globalThis ? globalThis : e || self).bodyScrollLock = {})
}(this, (function(e) {
    "use strict";
    var t = function() {
            return "undefined" == typeof window
        },
        n = function(e) {
            e = e || navigator.userAgent;
            var t = /(iPad).*OS\s([\d_]+)/.test(e);
            return {
                ios: !t && /(iPhone\sOS)\s([\d_]+)/.test(e) || t,
                android: /(Android);?[\s/]+([\d.]+)?/.test(e)
            }
        };

    function o() {
        return "__BSL_PREVENT_DEFAULT__" in window || (window.__BSL_PREVENT_DEFAULT__ = function(e) {
            e.cancelable && e.preventDefault()
        }), window.__BSL_PREVENT_DEFAULT__
    }
    var i = {
        lockedNum: 0,
        lockedElements: [],
        unLockCallback: null,
        documentListenerAdded: !1,
        initialClientPos: {
            clientX: 0,
            clientY: 0
        }
    };

    function l(e) {
        if (t()) return i;
        if (!(null == e ? void 0 : e.useGlobalLockState)) return l.lockState;
        var n = "__BSL_LOCK_STATE__" in window ? Object.assign(Object.assign({}, i), window.__BSL_LOCK_STATE__) : i;
        return window.__BSL_LOCK_STATE__ = n, n
    }
    l.lockState = i;
    var c = function(e) {
        if (t()) return !1;
        if (!e) throw new Error("options must be provided");
        var n = !1,
            o = {
                get passive() {
                    n = !0
                }
            },
            i = function() {},
            l = "__TUA_BSL_TEST_PASSIVE__";
        window.addEventListener(l, i, o), window.removeEventListener(l, i, o);
        var c = e.capture;
        return n ? e : void 0 !== c && c
    }({
        passive: !1
    });
    e.clearBodyLocks = function(e) {
        if (!t()) {
            var i = l(e);
            if (i.lockedNum = 0, n().ios || "function" != typeof i.unLockCallback) {
                if (i.lockedElements.length)
                    for (var d = i.lockedElements.pop(); d;) d.ontouchmove = null, d.ontouchstart = null, d = i.lockedElements.pop();
                i.documentListenerAdded && (document.removeEventListener("touchmove", o(), c), i.documentListenerAdded = !1)
            } else i.unLockCallback()
        }
    }, e.lock = function(e, i) {
        if (!t()) {
            var d, r, s, u, a = l(i);
            if (n().ios) {
                if (e)(Array.isArray(e) ? e : [e]).forEach((function(e) {
                    e && -1 === a.lockedElements.indexOf(e) && (e.ontouchstart = function(e) {
                        var t = e.targetTouches[0],
                            n = t.clientX,
                            o = t.clientY;
                        a.initialClientPos = {
                            clientX: n,
                            clientY: o
                        }
                    }, e.ontouchmove = function(t) {
                        1 === t.targetTouches.length && function(e, t, n) {
                            if (t) {
                                var i = t.scrollTop,
                                    l = t.scrollLeft,
                                    c = t.scrollWidth,
                                    d = t.scrollHeight,
                                    r = t.clientWidth,
                                    s = t.clientHeight,
                                    u = e.targetTouches[0].clientX - n.clientX,
                                    a = e.targetTouches[0].clientY - n.clientY,
                                    f = Math.abs(a) > Math.abs(u);
                                if (f && (a > 0 && 0 === i || a < 0 && i + s + 1 >= d) || !f && (u > 0 && 0 === l || u < 0 && l + r + 1 >= c)) return o()(e)
                            }
                            e.stopPropagation()
                        }(t, e, a.initialClientPos)
                    }, a.lockedElements.push(e))
                }));
                a.documentListenerAdded || (document.addEventListener("touchmove", o(), c), a.documentListenerAdded = !0)
            } else a.lockedNum <= 0 && (a.unLockCallback = n().android ? function(e) {
                var t = document.documentElement,
                    n = document.body,
                    o = t.scrollTop || n.scrollTop,
                    i = Object.assign({}, t.style),
                    l = Object.assign({}, n.style);
                return t.style.height = "100%", t.style.overflow = "hidden", n.style.top = "-".concat(o, "px"), n.style.width = "100%", n.style.height = "auto", n.style.position = "fixed", n.style.overflow = (null == e ? void 0 : e.overflowType) || "hidden",
                    function() {
                        t.style.height = i.height || "", t.style.overflow = i.overflow || "", ["top", "width", "height", "overflow", "position"].forEach((function(e) {
                            n.style[e] = l[e] || ""
                        })), "scrollBehavior" in document.documentElement.style ? window.scrollTo({
                            top: o,
                            behavior: "instant"
                        }) : window.scrollTo(0, o)
                    }
            }(i) : (d = document.documentElement, r = Object.assign({}, d.style), s = window.innerWidth - d.clientWidth, u = parseInt(window.getComputedStyle(d).paddingRight, 10), d.style.overflow = "hidden", d.style.boxSizing = "border-box", d.style.paddingRight = "".concat(s + u, "px"), function() {
                ["overflow", "boxSizing", "paddingRight"].forEach((function(e) {
                    d.style[e] = r[e] || ""
                }))
            }));
            a.lockedNum += 1
        }
    }, e.unlock = function(e, i) {
        if (!t()) {
            var d = l(i);
            if (d.lockedNum -= 1, !(d.lockedNum > 0))
                if (n().ios || "function" != typeof d.unLockCallback) {
                    if (e)(Array.isArray(e) ? e : [e]).forEach((function(e) {
                        var t = d.lockedElements.indexOf(e); - 1 !== t && (e.ontouchmove = null, e.ontouchstart = null, d.lockedElements.splice(t, 1))
                    }));
                    d.documentListenerAdded && (document.removeEventListener("touchmove", o(), c), d.documentListenerAdded = !1)
                } else d.unLockCallback()
        }
    }
}));;
(function($, Drupal, debounce) {
    const cache = {
        right: 0,
        left: 0,
        bottom: 0,
        top: 0
    };
    const cssVarPrefix = '--drupal-displace-offset';
    const documentStyle = document.documentElement.style;
    const offsetKeys = Object.keys(cache);
    const offsetProps = {};
    offsetKeys.forEach((edge) => {
        offsetProps[edge] = {
            enumerable: true,
            get() {
                return cache[edge];
            },
            set(value) {
                if (value !== cache[edge]) documentStyle.setProperty(`${cssVarPrefix}-${edge}`, `${value}px`);
                cache[edge] = value;
            }
        };
    });
    const offsets = Object.seal(Object.defineProperties({}, offsetProps));

    function getRawOffset(el, edge) {
        const $el = $(el);
        const documentElement = document.documentElement;
        let displacement = 0;
        const horizontal = edge === 'left' || edge === 'right';
        let placement = $el.offset()[horizontal ? 'left' : 'top'];
        placement -= window[`scroll${horizontal?'X':'Y'}`] || document.documentElement[`scroll${horizontal?'Left':'Top'}`] || 0;
        switch (edge) {
            case 'top':
                displacement = placement + $el.outerHeight();
                break;
            case 'left':
                displacement = placement + $el.outerWidth();
                break;
            case 'bottom':
                displacement = documentElement.clientHeight - placement;
                break;
            case 'right':
                displacement = documentElement.clientWidth - placement;
                break;
            default:
                displacement = 0;
        }
        return displacement;
    }

    function calculateOffset(edge) {
        let edgeOffset = 0;
        const displacingElements = document.querySelectorAll(`[data-offset-${edge}]`);
        const n = displacingElements.length;
        for (let i = 0; i < n; i++) {
            const el = displacingElements[i];
            if (el.style.display === 'none') continue;
            let displacement = parseInt(el.getAttribute(`data-offset-${edge}`), 10);
            if (isNaN(displacement)) displacement = getRawOffset(el, edge);
            edgeOffset = Math.max(edgeOffset, displacement);
        }
        return edgeOffset;
    }

    function displace(broadcast = true) {
        const newOffsets = {};
        offsetKeys.forEach((edge) => {
            newOffsets[edge] = calculateOffset(edge);
        });
        offsetKeys.forEach((edge) => {
            offsets[edge] = newOffsets[edge];
        });
        if (broadcast) $(document).trigger('drupalViewportOffsetChange', offsets);
        return offsets;
    }
    Drupal.behaviors.drupalDisplace = {
        attach() {
            if (this.displaceProcessed) return;
            this.displaceProcessed = true;
            $(window).on('resize.drupalDisplace', debounce(displace, 200));
        }
    };
    Drupal.displace = displace;
    Object.defineProperty(Drupal.displace, 'offsets', {
        value: offsets,
        writable: false
    });
    Drupal.displace.calculateOffset = calculateOffset;
})(jQuery, Drupal, Drupal.debounce);;
(($, Drupal, {
    isTabbable
}) => {
    $.extend($.expr[':'], {
        tabbable(element) {
            Drupal.deprecationError({
                message: 'The :tabbable selector is deprecated in Drupal 9.2.0 and will be removed in Drupal 11.0.0. Use the core/tabbable library instead. See https://www.drupal.org/node/3183730'
            });
            return isTabbable(element);
        }
    });
})(jQuery, Drupal, window.tabbable);;
(($) => {
    let cachedScrollbarWidth = null;
    const {
        max,
        abs
    } = Math;
    const regexHorizontal = /left|center|right/;
    const regexVertical = /top|center|bottom/;
    const regexOffset = /[+-]\d+(\.[\d]+)?%?/;
    const regexPosition = /^\w+/;
    const _position = $.fn.position;

    function getOffsets(offsets, width, height) {
        return [parseFloat(offsets[0]) * (typeof offsets[0] === 'string' && offsets[0].endsWith('%') ? width / 100 : 1), parseFloat(offsets[1]) * (typeof offsets[1] === 'string' && offsets[1].endsWith('%') ? height / 100 : 1)];
    }

    function parseCss(element, property) {
        return parseInt(window.getComputedStyle(element)[property], 10) || 0;
    }

    function getDimensions(elem) {
        const raw = elem[0];
        if (raw.nodeType === 9) return {
            width: elem.width(),
            height: elem.height(),
            offset: {
                top: 0,
                left: 0
            }
        };
        if (!!raw && raw === raw.window) return {
            width: elem.width(),
            height: elem.height(),
            offset: {
                top: elem.scrollTop(),
                left: elem.scrollLeft()
            }
        };
        if (raw.preventDefault) return {
            width: 0,
            height: 0,
            offset: {
                top: raw.pageY,
                left: raw.pageX
            }
        };
        return {
            width: elem.outerWidth(),
            height: elem.outerHeight(),
            offset: elem.offset()
        };
    }
    const collisions = {
        fit: {
            left(position, data) {
                const {
                    within
                } = data;
                const withinOffset = within.isWindow ? within.scrollLeft : within.offset.left;
                const outerWidth = within.width;
                const collisionPosLeft = position.left - data.collisionPosition.marginLeft;
                const overLeft = withinOffset - collisionPosLeft;
                const overRight = collisionPosLeft + data.collisionWidth - outerWidth - withinOffset;
                let newOverRight;
                if (data.collisionWidth > outerWidth)
                    if (overLeft > 0 && overRight <= 0) {
                        newOverRight = position.left + overLeft + data.collisionWidth - outerWidth - withinOffset;
                        position.left += overLeft - newOverRight;
                    } else if (overRight > 0 && overLeft <= 0) position.left = withinOffset;
                else if (overLeft > overRight) position.left = withinOffset + outerWidth - data.collisionWidth;
                else position.left = withinOffset;
                else if (overLeft > 0) position.left += overLeft;
                else if (overRight > 0) position.left -= overRight;
                else position.left = max(position.left - collisionPosLeft, position.left);
            },
            top(position, data) {
                const {
                    within
                } = data;
                const withinOffset = within.isWindow ? within.scrollTop : within.offset.top;
                const outerHeight = data.within.height;
                const collisionPosTop = position.top - data.collisionPosition.marginTop;
                const overTop = withinOffset - collisionPosTop;
                const overBottom = collisionPosTop + data.collisionHeight - outerHeight - withinOffset;
                let newOverBottom;
                if (data.collisionHeight > outerHeight)
                    if (overTop > 0 && overBottom <= 0) {
                        newOverBottom = position.top + overTop + data.collisionHeight - outerHeight - withinOffset;
                        position.top += overTop - newOverBottom;
                    } else if (overBottom > 0 && overTop <= 0) position.top = withinOffset;
                else if (overTop > overBottom) position.top = withinOffset + outerHeight - data.collisionHeight;
                else position.top = withinOffset;
                else if (overTop > 0) position.top += overTop;
                else if (overBottom > 0) position.top -= overBottom;
                else position.top = max(position.top - collisionPosTop, position.top);
            }
        },
        flip: {
            left(position, data) {
                const {
                    within
                } = data;
                const withinOffset = within.offset.left + within.scrollLeft;
                const outerWidth = within.width;
                const offsetLeft = within.isWindow ? within.scrollLeft : within.offset.left;
                const collisionPosLeft = position.left - data.collisionPosition.marginLeft;
                const overLeft = collisionPosLeft - offsetLeft;
                const overRight = collisionPosLeft + data.collisionWidth - outerWidth - offsetLeft;
                const myOffset = data.my[0] === 'left' ? -data.elemWidth : data.my[0] === 'right' ? data.elemWidth : 0;
                const atOffset = data.at[0] === 'left' ? data.targetWidth : data.at[0] === 'right' ? -data.targetWidth : 0;
                const offset = -2 * data.offset[0];
                let newOverRight;
                let newOverLeft;
                if (overLeft < 0) {
                    newOverRight = position.left + myOffset + atOffset + offset + data.collisionWidth - outerWidth - withinOffset;
                    if (newOverRight < 0 || newOverRight < abs(overLeft)) position.left += myOffset + atOffset + offset;
                } else {
                    if (overRight > 0) {
                        newOverLeft = position.left - data.collisionPosition.marginLeft + myOffset + atOffset + offset - offsetLeft;
                        if (newOverLeft > 0 || abs(newOverLeft) < overRight) position.left += myOffset + atOffset + offset;
                    }
                }
            },
            top(position, data) {
                const {
                    within
                } = data;
                const withinOffset = within.offset.top + within.scrollTop;
                const outerHeight = within.height;
                const offsetTop = within.isWindow ? within.scrollTop : within.offset.top;
                const collisionPosTop = position.top - data.collisionPosition.marginTop;
                const overTop = collisionPosTop - offsetTop;
                const overBottom = collisionPosTop + data.collisionHeight - outerHeight - offsetTop;
                const top = data.my[1] === 'top';
                const myOffset = top ? -data.elemHeight : data.my[1] === 'bottom' ? data.elemHeight : 0;
                const atOffset = data.at[1] === 'top' ? data.targetHeight : data.at[1] === 'bottom' ? -data.targetHeight : 0;
                const offset = -2 * data.offset[1];
                let newOverTop;
                let newOverBottom;
                if (overTop < 0) {
                    newOverBottom = position.top + myOffset + atOffset + offset + data.collisionHeight - outerHeight - withinOffset;
                    if (newOverBottom < 0 || newOverBottom < abs(overTop)) position.top += myOffset + atOffset + offset;
                } else {
                    if (overBottom > 0) {
                        newOverTop = position.top - data.collisionPosition.marginTop + myOffset + atOffset + offset - offsetTop;
                        if (newOverTop > 0 || abs(newOverTop) < overBottom) position.top += myOffset + atOffset + offset;
                    }
                }
            }
        },
        flipfit: {
            left(...args) {
                collisions.flip.left.apply(this, args);
                collisions.fit.left.apply(this, args);
            },
            top(...args) {
                collisions.flip.top.apply(this, args);
                collisions.fit.top.apply(this, args);
            }
        }
    };
    $.position = {
        scrollbarWidth() {
            if (cachedScrollbarWidth !== undefined) return cachedScrollbarWidth;
            const div = $('<div ' + "style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'>" + "<div style='height:100px;width:auto;'></div></div>");
            const innerDiv = div.children()[0];
            $('body').append(div);
            const w1 = innerDiv.offsetWidth;
            div[0].style.overflow = 'scroll';
            let w2 = innerDiv.offsetWidth;
            if (w1 === w2) w2 = div[0].clientWidth;
            div.remove();
            cachedScrollbarWidth = w1 - w2;
            return cachedScrollbarWidth;
        },
        getScrollInfo(within) {
            const overflowX = within.isWindow || within.isDocument ? '' : window.getComputedStyle(within.element[0])['overflow-x'];
            const overflowY = within.isWindow || within.isDocument ? '' : window.getComputedStyle(within.element[0])['overflow-y'];
            const hasOverflowX = overflowX === 'scroll' || (overflowX === 'auto' && within.width < within.element[0].scrollWidth);
            const hasOverflowY = overflowY === 'scroll' || (overflowY === 'auto' && within.height < within.element[0].scrollHeight);
            return {
                width: hasOverflowY ? $.position.scrollbarWidth() : 0,
                height: hasOverflowX ? $.position.scrollbarWidth() : 0
            };
        },
        getWithinInfo(element) {
            const withinElement = $(element || window);
            const isWindow = !!withinElement[0] && withinElement[0] === withinElement[0].window;
            const isDocument = !!withinElement[0] && withinElement[0].nodeType === 9;
            const hasOffset = !isWindow && !isDocument;
            return {
                element: withinElement,
                isWindow,
                isDocument,
                offset: hasOffset ? $(element).offset() : {
                    left: 0,
                    top: 0
                },
                scrollLeft: withinElement.scrollLeft(),
                scrollTop: withinElement.scrollTop(),
                width: withinElement.outerWidth(),
                height: withinElement.outerHeight()
            };
        }
    };
    $.fn.position = function(options) {
        if (!options || !options.of) return _position.apply(this, arguments);
        options = $.extend({}, options);
        const within = $.position.getWithinInfo(options.within);
        const scrollInfo = $.position.getScrollInfo(within);
        const collision = (options.collision || 'flip').split(' ');
        const offsets = {};
        const target = typeof options.of === 'string' ? $(document).find(options.of) : $(options.of);
        const dimensions = getDimensions(target);
        const targetWidth = dimensions.width;
        const targetHeight = dimensions.height;
        const targetOffset = dimensions.offset;
        if (target[0].preventDefault) options.at = 'left top';
        const basePosition = $.extend({}, targetOffset);
        $.each(['my', 'at'], function() {
            let pos = (options[this] || '').split(' ');
            if (pos.length === 1) pos = regexHorizontal.test(pos[0]) ? pos.concat(['center']) : regexVertical.test(pos[0]) ? ['center'].concat(pos) : ['center', 'center'];
            pos[0] = regexHorizontal.test(pos[0]) ? pos[0] : 'center';
            pos[1] = regexVertical.test(pos[1]) ? pos[1] : 'center';
            const horizontalOffset = regexOffset.exec(pos[0]);
            const verticalOffset = regexOffset.exec(pos[1]);
            offsets[this] = [horizontalOffset ? horizontalOffset[0] : 0, verticalOffset ? verticalOffset[0] : 0];
            options[this] = [regexPosition.exec(pos[0])[0], regexPosition.exec(pos[1])[0]];
        });
        if (collision.length === 1) collision[1] = collision[0];
        if (options.at[0] === 'right') basePosition.left += targetWidth;
        else {
            if (options.at[0] === 'center') basePosition.left += targetWidth / 2;
        }
        if (options.at[1] === 'bottom') basePosition.top += targetHeight;
        else {
            if (options.at[1] === 'center') basePosition.top += targetHeight / 2;
        }
        const atOffset = getOffsets(offsets.at, targetWidth, targetHeight);
        basePosition.left += atOffset[0];
        basePosition.top += atOffset[1];
        return this.each(function() {
            let using;
            const elem = $(this);
            const elemWidth = elem.outerWidth();
            const elemHeight = elem.outerHeight();
            const marginLeft = parseCss(this, 'marginLeft');
            const marginTop = parseCss(this, 'marginTop');
            const collisionWidth = elemWidth + marginLeft + parseCss(this, 'marginRight') + scrollInfo.width;
            const collisionHeight = elemHeight + marginTop + parseCss(this, 'marginBottom') + scrollInfo.height;
            const position = $.extend({}, basePosition);
            const myOffset = getOffsets(offsets.my, elem.outerWidth(), elem.outerHeight());
            if (options.my[0] === 'right') position.left -= elemWidth;
            else {
                if (options.my[0] === 'center') position.left -= elemWidth / 2;
            }
            if (options.my[1] === 'bottom') position.top -= elemHeight;
            else {
                if (options.my[1] === 'center') position.top -= elemHeight / 2;
            }
            position.left += myOffset[0];
            position.top += myOffset[1];
            const collisionPosition = {
                marginLeft,
                marginTop
            };
            $.each(['left', 'top'], function(i, dir) {
                if (collisions[collision[i]]) collisions[collision[i]][dir](position, {
                    targetWidth,
                    targetHeight,
                    elemWidth,
                    elemHeight,
                    collisionPosition,
                    collisionWidth,
                    collisionHeight,
                    offset: [atOffset[0] + myOffset[0], atOffset[1] + myOffset[1]],
                    my: options.my,
                    at: options.at,
                    within,
                    elem
                });
            });
            if (options.using) using = function(props) {
                const left = targetOffset.left - position.left;
                const right = left + targetWidth - elemWidth;
                const top = targetOffset.top - position.top;
                const bottom = top + targetHeight - elemHeight;
                const feedback = {
                    target: {
                        element: target,
                        left: targetOffset.left,
                        top: targetOffset.top,
                        width: targetWidth,
                        height: targetHeight
                    },
                    element: {
                        element: elem,
                        left: position.left,
                        top: position.top,
                        width: elemWidth,
                        height: elemHeight
                    },
                    horizontal: right < 0 ? 'left' : left > 0 ? 'right' : 'center',
                    vertical: bottom < 0 ? 'top' : top > 0 ? 'bottom' : 'middle'
                };
                if (targetWidth < elemWidth && abs(left + right) < targetWidth) feedback.horizontal = 'center';
                if (targetHeight < elemHeight && abs(top + bottom) < targetHeight) feedback.vertical = 'middle';
                if (max(abs(left), abs(right)) > max(abs(top), abs(bottom))) feedback.important = 'horizontal';
                else feedback.important = 'vertical';
                options.using.call(this, props, feedback);
            };
            elem.offset($.extend(position, {
                using
            }));
        });
    };
    if (!$.hasOwnProperty('ui')) $.ui = {};
    $.ui.position = collisions;
})(jQuery);;
(function($, Drupal, once) {
    if (once('drupal-dialog-deprecation-listener', 'html').length) {
        const eventSpecial = {
            handle($event) {
                const $element = $($event.target);
                const event = $event.originalEvent;
                const dialog = event.dialog;
                const dialogArguments = [$event, dialog, $element, event ? .settings];
                $event.handleObj.handler.apply(this, dialogArguments);
            }
        };
        $.event.special['dialog:beforecreate'] = eventSpecial;
        $.event.special['dialog:aftercreate'] = eventSpecial;
        $.event.special['dialog:beforeclose'] = eventSpecial;
        $.event.special['dialog:afterclose'] = eventSpecial;
        const listenDialogEvent = (event) => {
            const windowEvents = $._data(window, 'events');
            const isWindowHasDialogListener = windowEvents[event.type];
            if (isWindowHasDialogListener) Drupal.deprecationError({
                message: `jQuery event ${event.type} is deprecated in 10.3.0 and is removed from Drupal:12.0.0. See https://www.drupal.org/node/3422670`
            });
        };
        ['dialog:beforecreate', 'dialog:aftercreate', 'dialog:beforeclose', 'dialog:afterclose'].forEach((e) => window.addEventListener(e, listenDialogEvent));
    }
})(jQuery, Drupal, once);;
class DrupalDialogEvent extends Event {
    constructor(type, dialog, settings = null) {
        super(`dialog:${type}`, {
            bubbles: true
        });
        this.dialog = dialog;
        this.settings = settings;
    }
}(function($, Drupal, drupalSettings, bodyScrollLock) {
    drupalSettings.dialog = {
        autoOpen: true,
        dialogClass: '',
        buttonClass: 'button',
        buttonPrimaryClass: 'button--primary',
        close(event) {
            Drupal.dialog(event.target).close();
            Drupal.detachBehaviors(event.target, null, 'unload');
        }
    };
    Drupal.dialog = function(element, options) {
        let undef;
        const $element = $(element);
        const domElement = $element.get(0);
        const dialog = {
            open: false,
            returnValue: undef
        };

        function openDialog(settings) {
            settings = $.extend({}, drupalSettings.dialog, options, settings);
            const event = new DrupalDialogEvent('beforecreate', dialog, settings);
            domElement.dispatchEvent(event);
            $element.dialog(event.settings);
            dialog.open = true;
            if (event.settings.modal) bodyScrollLock.lock(domElement);
            domElement.dispatchEvent(new DrupalDialogEvent('aftercreate', dialog, event.settings));
        }

        function closeDialog(value) {
            domElement.dispatchEvent(new DrupalDialogEvent('beforeclose', dialog));
            bodyScrollLock.clearBodyLocks();
            $element.dialog('close');
            dialog.returnValue = value;
            dialog.open = false;
            domElement.dispatchEvent(new DrupalDialogEvent('afterclose', dialog));
        }
        dialog.show = () => {
            openDialog({
                modal: false
            });
        };
        dialog.showModal = () => {
            openDialog({
                modal: true
            });
        };
        dialog.close = closeDialog;
        return dialog;
    };
})(jQuery, Drupal, drupalSettings, bodyScrollLock);;
(function($, Drupal, drupalSettings, debounce, displace) {
    drupalSettings.dialog = $.extend({
        autoResize: true,
        maxHeight: '95%'
    }, drupalSettings.dialog);

    function resetPosition(options) {
        const offsets = displace.offsets;
        const left = offsets.left - offsets.right;
        const top = offsets.top - offsets.bottom;
        const leftString = `${(left>0?'+':'-')+Math.abs(Math.round(left/2))}px`;
        const topString = `${(top>0?'+':'-')+Math.abs(Math.round(top/2))}px`;
        options.position = {
            my: `center${left!==0?leftString:''} center${top!==0?topString:''}`,
            of: window
        };
        return options;
    }

    function resetSize(event) {
        const positionOptions = ['width', 'height', 'minWidth', 'minHeight', 'maxHeight', 'maxWidth', 'position'];
        let adjustedOptions = {};
        let windowHeight = $(window).height();
        let option;
        let optionValue;
        let adjustedValue;
        for (let n = 0; n < positionOptions.length; n++) {
            option = positionOptions[n];
            optionValue = event.data.settings[option];
            if (optionValue)
                if (typeof optionValue === 'string' && optionValue.endsWith('%') && /height/i.test(option)) {
                    windowHeight -= displace.offsets.top + displace.offsets.bottom;
                    adjustedValue = parseInt(0.01 * parseInt(optionValue, 10) * windowHeight, 10);
                    if (option === 'height' && event.data.$element.parent().outerHeight() < adjustedValue) adjustedValue = 'auto';
                    adjustedOptions[option] = adjustedValue;
                }
        }
        if (!event.data.settings.modal) adjustedOptions = resetPosition(adjustedOptions);
        event.data.$element.dialog('option', adjustedOptions);
        event.data.$element ? .get(0) ? .dispatchEvent(new CustomEvent('dialogContentResize', {
            bubbles: true
        }));
    }
    window.addEventListener('dialog:aftercreate', (e) => {
        const autoResize = debounce(resetSize, 20);
        const $element = $(e.target);
        const {
            settings
        } = e;
        const eventData = {
            settings,
            $element
        };
        if (settings.autoResize === true || settings.autoResize === 'true') {
            const uiDialog = $element.dialog('option', {
                resizable: false,
                draggable: false
            }).dialog('widget');
            uiDialog[0].style.position = 'fixed';
            $(window).on('resize.dialogResize scroll.dialogResize', eventData, autoResize).trigger('resize.dialogResize');
            $(document).on('drupalViewportOffsetChange.dialogResize', eventData, autoResize);
        }
    });
    window.addEventListener('dialog:beforeclose', () => {
        $(window).off('.dialogResize');
        $(document).off('.dialogResize');
    });
})(jQuery, Drupal, drupalSettings, Drupal.debounce, Drupal.displace);;
(function($, {
    tabbable,
    isTabbable
}) {
    $.widget('ui.dialog', $.ui.dialog, {
        options: {
            buttonClass: 'button',
            buttonPrimaryClass: 'button--primary'
        },
        _createButtons() {
            const opts = this.options;
            let primaryIndex;
            let index;
            const il = opts.buttons.length;
            for (index = 0; index < il; index++)
                if (opts.buttons[index].primary && opts.buttons[index].primary === true) {
                    primaryIndex = index;
                    delete opts.buttons[index].primary;
                    break;
                }
            this._super();
            const $buttons = this.uiButtonSet.children().addClass(opts.buttonClass);
            if (typeof primaryIndex !== 'undefined') $buttons.eq(index).addClass(opts.buttonPrimaryClass);
        },
        _focusTabbable() {
            let hasFocus = this._focusedElement ? this._focusedElement.get(0) : null;
            if (!hasFocus) hasFocus = this.element.find('[autofocus]').get(0);
            if (!hasFocus) {
                const $elements = [this.element, this.uiDialogButtonPane];
                for (let i = 0; i < $elements.length; i++) {
                    const element = $elements[i].get(0);
                    if (element) {
                        const elementTabbable = tabbable(element);
                        hasFocus = elementTabbable.length ? elementTabbable[0] : null;
                    }
                    if (hasFocus) break;
                }
            }
            if (!hasFocus) {
                const closeBtn = this.uiDialogTitlebarClose.get(0);
                hasFocus = closeBtn && isTabbable(closeBtn) ? closeBtn : null;
            }
            if (!hasFocus) hasFocus = this.uiDialog.get(0);
            $(hasFocus).eq(0).trigger('focus');
        }
    });
})(jQuery, window.tabbable);;
(($) => {
    $.widget('ui.dialog', $.ui.dialog, {
        _allowInteraction(event) {
            if (event.target.classList === undefined) return this._super(event);
            return event.target.classList.contains('ck') || this._super(event);
        }
    });
})(jQuery);;
(function($, Drupal, {
    focusable
}) {
    Drupal.behaviors.dialog = {
        attach(context, settings) {
            const $context = $(context);
            if (!$('#drupal-modal').length) $('<div id="drupal-modal" class="ui-front"></div>').hide().appendTo('body');
            const $dialog = $context.closest('.ui-dialog-content');
            if ($dialog.length) {
                if ($dialog.dialog('option', 'drupalAutoButtons')) $dialog.trigger('dialogButtonsChange');
                setTimeout(function() {
                    if (!$dialog[0].contains(document.activeElement)) {
                        $dialog.dialog('instance')._focusedElement = null;
                        $dialog.dialog('instance')._focusTabbable();
                    }
                }, 0);
            }
            const originalClose = settings.dialog.close;
            settings.dialog.close = function(event, ...args) {
                originalClose.apply(settings.dialog, [event, ...args]);
                const $element = $(event.target);
                const ajaxContainer = $element.data('uiDialog') ? $element.data('uiDialog').opener.closest('[data-drupal-ajax-container]') : [];
                if (ajaxContainer.length && (document.activeElement === document.body || $(document.activeElement).not(':visible'))) {
                    const focusableChildren = focusable(ajaxContainer[0]);
                    if (focusableChildren.length > 0) setTimeout(() => {
                        focusableChildren[0].focus();
                    }, 0);
                }
                $(event.target).remove();
            };
        },
        prepareDialogButtons($dialog) {
            const buttons = [];
            const $buttons = $dialog.find('.form-actions input[type=submit], .form-actions a.button, .form-actions a.action-link');
            $buttons.each(function() {
                const $originalButton = $(this);
                this.style.display = 'none';
                buttons.push({
                    text: $originalButton.html() || $originalButton.attr('value'),
                    class: $originalButton.attr('class'),
                    'data-once': $originalButton.data('once'),
                    click(e) {
                        if ($originalButton[0].tagName === 'A') $originalButton[0].click();
                        else $originalButton.trigger('mousedown').trigger('mouseup').trigger('click');
                        e.preventDefault();
                    }
                });
            });
            return buttons;
        }
    };
    Drupal.AjaxCommands.prototype.openDialog = function(ajax, response, status) {
        if (!response.selector) return false;
        let $dialog = $(response.selector);
        if (!$dialog.length) $dialog = $(`<div id="${response.selector.replace(/^#/,'')}" class="ui-front"></div>`).appendTo('body');
        if (!ajax.wrapper) ajax.wrapper = $dialog.attr('id');
        response.command = 'insert';
        response.method = 'html';
        ajax.commands.insert(ajax, response, status);
        response.dialogOptions = response.dialogOptions || {};
        if (typeof response.dialogOptions.drupalAutoButtons === 'undefined') response.dialogOptions.drupalAutoButtons = true;
        else if (response.dialogOptions.drupalAutoButtons === 'false') response.dialogOptions.drupalAutoButtons = false;
        else response.dialogOptions.drupalAutoButtons = !!response.dialogOptions.drupalAutoButtons;
        if (!response.dialogOptions.buttons && response.dialogOptions.drupalAutoButtons) response.dialogOptions.buttons = Drupal.behaviors.dialog.prepareDialogButtons($dialog);
        $dialog.on('dialogButtonsChange', () => {
            const buttons = Drupal.behaviors.dialog.prepareDialogButtons($dialog);
            $dialog.dialog('option', 'buttons', buttons);
        });
        response.dialogOptions = response.dialogOptions || {};
        const dialog = Drupal.dialog($dialog.get(0), response.dialogOptions);
        if (response.dialogOptions.modal) dialog.showModal();
        else dialog.show();
        $dialog.parent().find('.ui-dialog-buttonset').addClass('form-actions');
    };
    Drupal.AjaxCommands.prototype.closeDialog = function(ajax, response, status) {
        const $dialog = $(response.selector);
        if ($dialog.length) {
            Drupal.dialog($dialog.get(0)).close();
            if (!response.persist) $dialog.remove();
        }
        $dialog.off('dialogButtonsChange');
    };
    Drupal.AjaxCommands.prototype.setDialogOption = function(ajax, response, status) {
        const $dialog = $(response.selector);
        if ($dialog.length) $dialog.dialog('option', response.optionName, response.optionValue);
    };
    window.addEventListener('dialog:aftercreate', (event) => {
        const $element = $(event.target);
        const dialog = event.dialog;
        $element.on('click.dialog', '.dialog-cancel', (e) => {
            dialog.close('cancel');
            e.preventDefault();
            e.stopPropagation();
        });
    });
    window.addEventListener('dialog:beforeclose', (e) => {
        const $element = $(e.target);
        $element.off('.dialog');
    });
    Drupal.AjaxCommands.prototype.openModalDialogWithUrl = function(ajax, response) {
        const dialogOptions = response.dialogOptions || {};
        const elementSettings = {
            progress: {
                type: 'throbber'
            },
            dialogType: 'modal',
            dialog: dialogOptions,
            url: response.url,
            httpMethod: 'GET'
        };
        Drupal.ajax(elementSettings).execute();
    };
})(jQuery, Drupal, window.tabbable);;
(function($) {
    $(document).ready(function() {
        $('#noth').click(function() {
            $('.ui-dialog-titlebar-close').click();
        });
    });
})(jQuery);;
(function($, Drupal) {
    Drupal.behaviors.aai_flyout = {
        attach: function(context, settings) {
            setTimeout(function() {
                $(".transTryHoverBox").css("height", $(".flyoutBox").outerHeight() - $(".flyoutBtnBox").outerHeight() + 10);
            }, 1500);
            $(document).on("mouseover", ".sftFlyoutWidget .foTryBox, .sftFlyoutWidget .transTryHoverBox", function() {
                $(".transTryHoverBox").show();
                $(".flyoutBox").show();
            });
            $(document).on("mouseleave", ".sftFlyoutWidget .foTryBox, .sftFlyoutWidget .transTryHoverBox", function() {
                $(".transTryHoverBox").hide();
                $(".flyoutBox").hide();
            });
            $(document).on("click", ".flyoutBox .flyClose", function() {
                $(".flyoutBox").hide();
            });
            if (window.innerHeight < 700) $("body").addClass("smallScreen");
            else $("body").removeClass("smallScreen");
            $(window).resize(function() {
                if (window.innerHeight < 700) $("body").addClass("smallScreen");
                else $("body").removeClass("smallScreen");
                $(".transTryHoverBox").css("height", $(".flyoutBox").outerHeight() - $(".flyoutBtnBox").outerHeight() + 10);
            });
            $(window).on('load', function() {
                setTimeout(function() {
                    if ($('html').is(':lang(ar)')) $(".sftFlyoutWidget").animate({
                        left: 15
                    }, 500);
                    else $(".sftFlyoutWidget").animate({
                        right: 15
                    }, 500);
                }, 1);
            });
        }
    };
})(jQuery, Drupal);;
jQuery(document).ready(function($) {
    $(".header-logo").removeAttr('title');
    if (($('html').attr('lang')) == "ja") $("li.resourcesNav a:first").attr("href", "https://www.automationanywhere.com/jp/resources");

    function resizeCatContentCard() {
        jQuery('.coh-style-category-listing-style .category-card .card-content').removeAttr("style");
        var list = new Array();
        var resMaxHeight = "";
        var resMaxHeightCatCardBox = "";
        jQuery('.coh-style-category-listing-style .category-card .card-content').each(function() {
            list.push(jQuery(this).outerHeight());
            resMaxHeightCatCardBox = Math.max.apply(Math, list);
        });
        jQuery('.coh-style-category-listing-style .category-card .card-content').css("height", resMaxHeightCatCardBox);
    }
    setTimeout(function() {
        resizeCatContentCard();
    }, 20);
    $(window).resize(function() {
        setTimeout(function() {
            resizeCatContentCard();
        }, 20);
    });
    jQuery(document).on("click", ".coh-style-category-listing-style .bef-links ul li a", function() {
        setTimeout(function() {
            resizeCatContentCard();
        }, 1400);
    });
    $.ajaxSetup({
        converters: {
            'text json': function(data) {
                let phref = window.location.search;
                data = data.replace(/_wrapper_format=drupal_ajax/gm, "");
                const regex = /ajax_page_state\%5B(.(?!((\\u0026amp)|(\\u0022))))*.\\u0026amp;/mg;
                data = data.replace(regex, "");
                return JSON.parse(data);
            }
        }
    });
    $(".banner-tags-data .category-info p").each(function() {
        if ($(this).is(':empty')) $(this).remove();
    });
    $(".primary-menu .menu-level-2-wrapper a").each(function() {
        if ($(this).attr("href") == window.location.href || $(this).attr("href") == window.location.pathname || $(this).attr("href") == (window.location.pathname + window.location.search)) $(this).addClass('active').parent().addClass("current").closest(".primary-menu > ul > li").find(".nav-head-link").addClass("active");
    });
    $(document).on("click", "a.ts-cust-link", function() {
        localStorage.setItem("techSuppNavSel", "tcCustLink");
    });
    $(document).on("click", "li.utility-nav-item .menu-level-2 li a", function() {
        localStorage.removeItem("techSuppNavSel");
    });
    let techSuppNavSelVal = localStorage.getItem("techSuppNavSel");
    if (techSuppNavSelVal == null && window.location.pathname == "/customer-support") {
        $("a.ts-cust-link").removeClass("active");
        $("a.ts-cust-link").parent().removeClass("current");
        $("a.ts-cust-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
    } else {
        if (techSuppNavSelVal == "tcCustLink" && window.location.pathname == "/customer-support") {
            $("li.utility-nav-item a.utility-nav-link").removeClass("active");
            $("li.utility-nav-item .menu-level-2 li a").removeClass("active").parent().removeClass("current");
        }
    }
    $(document).on("click", "a.prt-cust-link", function() {
        localStorage.setItem("findPartNavSel", "fpCustLink");
    });
    $(document).on("click", "li.utility-nav-item .menu-level-2 li a", function() {
        localStorage.removeItem("findPartNavSel");
    });
    let findPartNavSelVal = localStorage.getItem("findPartNavSel");
    if (findPartNavSelVal == null && window.location.pathname == "/partners/find-a-partner") {
        $("a.prt-cust-link").removeClass("active");
        $("a.prt-cust-link").parent().removeClass("current");
        $("a.prt-cust-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
    } else {
        if (findPartNavSelVal == "fpCustLink" && window.location.pathname == "/partners/find-a-partner") {
            $("a.prt-res-link").removeClass("active");
            $("a.prt-res-link").parent().removeClass("current");
            $("a.prt-res-link").parent().closest(".primary-menu > ul > li").find(".nav-head-link").removeClass("active");
        }
    }
    setTimeout(function() {
        $(".onetrust-pc-dark-filter").attr("aria-modal", "true");
        $(".onetrust-pc-dark-filter").attr("role", "dialog");
    }, 1500);
});
(function($) {
    jQuery.fn.once = jQuery.fn.one;
})(jQuery);;
jQuery(document).ready(function() {
    jQuery(".language-block-dropdown ul.links li.zh-hans").remove();
    let planoptions = getParameterByName('planoptions');
    if (planoptions == 'show') {
        jQuery(".planoptions").remove();
        jQuery("header").remove();
        jQuery("footer").remove();
        jQuery('#block-flashbanner').remove();
        jQuery('.page-main').css('margin-top', '70px');
    }
    jQuery(document).on("click", ".go-back-link", function(e) {
        e.preventDefault();
        if (history.length == 1)
            if (["jp", "tw", "ae", "kr", "br", "la", "fr", "de"].includes(location.pathname.split("/")[1])) window.location.href = location.origin + "/" + location.pathname.split("/")[1];
            else window.location.href = location.origin;
        else history.back();
    });
});
var Shopify = false;

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
};
jQuery(document).ready(function() {
    new WOW().init();
    jQuery(document).on('click', '.video-box', function() {
        var videoItem = jQuery(this).children("video").get(0);
        jQuery(videoItem).on('play', function() {
            jQuery(this).next(".play-btn").fadeOut();
        });
        jQuery(videoItem).on('pause', function() {
            jQuery(this).next(".play-btn").fadeIn();
        });
        if (videoItem.paused) {
            videoItem.play();
            jQuery(this).children(".play-btn").fadeOut();
        } else {
            videoItem.pause();
            jQuery(this).children(".play-btn").fadeIn();
        }
        return false;
    });
    jQuery(document).on('click', '.yt-video-btn', function() {
        var ytVidData = jQuery(this).attr("data-yt-video");
        var ytVidURL = jQuery("#" + ytVidData + " iframe").attr("src");
        jQuery("#" + ytVidData + " iframe").attr("src", ytVidURL + "&autoplay=1");
        jQuery("#" + ytVidData).fadeIn();
    });
    jQuery(document).on('click', '.vmodal-close span', function() {
        jQuery(this).parents(".video-modal").fadeOut();
        var ytVidURLClose = jQuery(this).parent('.vmodal-close').next('.vmodal-video-box').children('iframe').attr("src");
        ytVidURLClose = ytVidURLClose.split("&autoplay=1");
        ytVidURLClose = ytVidURLClose[0];
        jQuery(this).parent('.vmodal-close').next('.vmodal-video-box').children('iframe').attr("src", ytVidURLClose);
        jQuery('.vmodal-video-box iframe').each(function(index) {
            jQuery(this).attr('src', jQuery(this).attr('src'));
            return false;
        });
    });
    jQuery(document).on("click", ".vid-btn", function() {
        var modalItem = jQuery(this).attr("data-modalid");
        jQuery("#" + modalItem + ".custom-modal").addClass("show");
        jQuery("#" + modalItem + ".custom-modal .video-box").trigger("click");
        return false;
    });
    jQuery(document).on("click", ".custom-modal .close-wrap", function() {
        var vidId = jQuery(this).next(".modal-content-wrap").children(".video-box").children("video").attr("id");
        var video = document.getElementById(vidId);
        video.pause();
        video.currentTime = 0;
        video.load();
        jQuery(".custom-modal").removeClass("show");
    });

    function industrySliderInit() {
        setTimeout(function() {
            jQuery('.ind-item-module').not('.slick-initialized').slick({
                slidesToShow: 7,
                slidesToScroll: 1,
                focusOnSelect: true,
                variableWidth: true,
                pauseOnFocus: false,
                pauseOnHover: false,
                dots: false,
                arrows: true,
                asNavFor: '.ind-details-module',
                responsive: [{
                    breakpoint: 1140,
                    settings: {
                        slidesToShow: 6
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 5
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 571,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        }, 20);
    }
    industrySliderInit();

    function indDetailsSliderInit() {
        setTimeout(function() {
            jQuery('.ind-details-module').not('.slick-initialized').slick({
                autoplay: true,
                autoplaySpeed: 29000,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnFocus: false,
                pauseOnHover: false,
                dots: false,
                arrows: false,
                fade: true,
                swipe: false,
                asNavFor: '.ind-item-module'
            }).slick('slickPause');
        }, 20);
    }
    indDetailsSliderInit();
    jQuery(document).on("click", ".ind-item-module p", function() {
        jQuery(".ind-details-box").each(function() {
            jQuery(this).children("video").get(0).pause();
            jQuery(this).children("video").get(0).currentTime = 0;
        });
        var industryVal = jQuery(this).attr("data-industry");
        var vidSrcVal = jQuery(".ind-details-box[data-industry='" + industryVal + "'] video source").attr("data-src");
        jQuery(".ind-details-box[data-industry='" + industryVal + "'] video source").attr("src", vidSrcVal);
        jQuery(".ind-details-box[data-industry='" + industryVal + "'] video")[0].defaultPlaybackRate = 0.75;
        jQuery(".ind-details-box[data-industry='" + industryVal + "'] video")[0].load();
    });
    jQuery('.ind-details-module').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        var vidSrc = jQuery(".ind-details-box.slick-active video source").attr("data-src");
        jQuery(".ind-details-box.slick-active video source").attr("src", vidSrc);
        jQuery(".ind-details-box.slick-active video")[0].load();
        if (currentSlide !== 0) jQuery('.ind-details-module').slick('slickSetOption', 'autoplaySpeed', 22000);
        else jQuery('.ind-details-module').slick('slickSetOption', 'autoplaySpeed', 29000);
    });

    function logoBoxSliderInit() {
        setTimeout(function() {
            jQuery('.logo-box-wrap').not('.slick-initialized').slick({
                autoplay: false,
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                pauseOnHover: false,
                dots: true,
                arrows: true,
                appendDots: '.logo-box-slicknav',
                appendArrows: '.logo-box-slicknav',
                responsive: [{
                    breakpoint: 9999,
                    settings: "unslick"
                }, {
                    breakpoint: 1140,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 571,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        }, 20);
    }
    logoBoxSliderInit();

    function custLogoSliderInit() {
        setTimeout(function() {
            jQuery('.cust-logo-wrap').not('.slick-initialized').slick({
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 7,
                initialSlide: 3,
                dots: true,
                arrows: true,
                appendDots: '.cust-logo-slicknav',
                appendArrows: '.cust-logo-slicknav',
                responsive: [{
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 5
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        pauseOnFocus: true,
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 481,
                    settings: {
                        pauseOnFocus: true,
                        centerMode: false,
                        slidesToShow: 1
                    }
                }]
            });
        }, 20);
    }
    custLogoSliderInit();
    if (jQuery(window).width() > 1300) jQuery(document).on('click', '.cust-logo-wrap .logo-box.featured', function() {
        jQuery('.cust-logo-wrap .logo-box').removeClass('large');
        jQuery(this).addClass('large');
    });
    jQuery('.cust-logo-wrap').on('click', '.slick-slide', function(e) {
        e.stopPropagation();
        var index = jQuery(this).data("slick-index");
        if (jQuery('.cust-logo-wrap').slick('slickCurrentSlide') !== index) jQuery('.cust-logo-wrap').slick('slickGoTo', index);
    });

    function resizeTileContentCard() {
        jQuery('.tile-card-upper-box').removeAttr("style");
        var list = new Array();
        var resMaxHeight = "";
        var resMaxHeightTileCardBox = "";
        jQuery('.tile-card-upper-box').each(function() {
            list.push(jQuery(this).outerHeight());
            resMaxHeightTileCardBox = Math.max.apply(Math, list);
        });
        jQuery('.tile-card-upper-box').css("height", resMaxHeightTileCardBox);
    }

    function resizeCompBox() {
        jQuery('.cmp-module .cmp-box').removeAttr("style");
        var list1 = new Array();
        var list2 = new Array();
        var list3 = new Array();
        var list4 = new Array();
        var list5 = new Array();
        var resMaxHeight = "";
        var resMaxHeightCmpBox1 = "";
        var resMaxHeightCmpBox2 = "";
        var resMaxHeightCmpBox3 = "";
        var resMaxHeightCmpBox4 = "";
        var resMaxHeightCmpBox5 = "";
        jQuery('.cmp-module').each(function() {
            jQuery(this).children('.cmp-box:nth-child(1)').each(function() {
                list1.push(jQuery(this).outerHeight());
                resMaxHeightCmpBox1 = Math.max.apply(Math, list1);
            });
            jQuery(this).children('.cmp-box:nth-child(2)').each(function() {
                list2.push(jQuery(this).outerHeight());
                resMaxHeightCmpBox2 = Math.max.apply(Math, list2);
            });
            jQuery(this).children('.cmp-box:nth-child(3)').each(function() {
                list3.push(jQuery(this).outerHeight());
                resMaxHeightCmpBox3 = Math.max.apply(Math, list3);
            });
            jQuery(this).children('.cmp-box:nth-child(4)').each(function() {
                list4.push(jQuery(this).outerHeight());
                resMaxHeightCmpBox4 = Math.max.apply(Math, list4);
            });
            jQuery(this).children('.cmp-box:nth-child(5)').each(function() {
                list5.push(jQuery(this).outerHeight());
                resMaxHeightCmpBox5 = Math.max.apply(Math, list5);
            });
        });
        jQuery('.cmp-module .cmp-box:nth-child(1)').css("height", resMaxHeightCmpBox1);
        jQuery('.cmp-module .cmp-box:nth-child(2)').css("height", resMaxHeightCmpBox2);
        jQuery('.cmp-module .cmp-box:nth-child(3)').css("height", resMaxHeightCmpBox3);
        jQuery('.cmp-module .cmp-box:nth-child(4)').css("height", resMaxHeightCmpBox4);
        jQuery('.cmp-module .cmp-box:nth-child(5)').css("height", resMaxHeightCmpBox5);
    }
    setTimeout(function() {
        resizeTileContentCard();
        resizeCompBox();
    }, 20);
    let hpVideo = document.querySelector('video');
    hpVideo.defaultPlaybackRate = 0.75;
    let options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.60
    };
    let lazyVideos = [...document.querySelectorAll("video.vlazy")];
    if ("IntersectionObserver" in window) {
        let lazyVideoObserver = new IntersectionObserver(callBackFunction, options);

        function callBackFunction(entries) {
            entries.forEach(function(video) {
                if (video.isIntersecting) {
                    for (let source in video.target.children) {
                        let videoSource = video.target.children[source];
                        if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") videoSource.src = videoSource.dataset.src;
                    }
                    setTimeout(function() {
                        jQuery('.ind-details-module').slick('slickPlay');
                    }, 20);
                    video.target.defaultPlaybackRate = 0.75;
                    video.target.load();
                    video.target.classList.remove("vlazy");
                    lazyVideoObserver.unobserve(video.target);
                }
            });
        }
        lazyVideos.forEach(function(lazyVideo) {
            lazyVideoObserver.observe(lazyVideo);
        });
    }
    jQuery(window).resize(function() {
        setTimeout(function() {
            industrySliderInit();
            indDetailsSliderInit();
            logoBoxSliderInit();
            custLogoSliderInit();
            resizeTileContentCard();
            resizeCompBox();
        }, 20);
    });
});
(function($, Drupal) {
    Drupal.behaviors.homepage_data_layer_events = {
        attach: function(context, settings) {
            var homepage_page_title = document.title;
            homepage_page_title = homepage_page_title.substring(0, homepage_page_title.indexOf("|"));
        }
    };
})(jQuery, Drupal);;