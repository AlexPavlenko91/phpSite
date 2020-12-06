<!DOCTYPE html>
<!-- saved from url=(0054)https://ncte.org/resources/journals/english-education/ -->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script type="text/javascript" src="./English Education - NCTE_files/be676bb9a4"></script>
    <script src="./English Education - NCTE_files/nr-1184.min.js.download"></script>
    <script type="text/javascript" async="" src="./English Education - NCTE_files/ec.js.download"></script>
    <script src="./English Education - NCTE_files/1830847637154248" async=""></script>
    <script async="" src="./English Education - NCTE_files/fbevents.js.download"></script>
    <script src="./English Education - NCTE_files/events.js.download"></script>
    <script type="text/javascript" async="" src="./English Education - NCTE_files/analytics.js.download"></script>
    <script type="text/javascript" async="" src="./English Education - NCTE_files/uwt.js.download"></script>
    <script type="text/javascript" async="" src="./English Education - NCTE_files/js"></script>
    <script type="text/javascript" id="www-widgetapi-script"
            src="./English Education - NCTE_files/www-widgetapi.js.download" async=""></script>
    <script async="" src="./English Education - NCTE_files/gtm.js.download"></script>
    <script src="./English Education - NCTE_files/iframe_api"></script>
    <script type="text/javascript">(window.NREUM || (NREUM = {})).loader_config = {
            licenseKey: "be676bb9a4",
            applicationID: "241842458"
        };
        window.NREUM || (NREUM = {}), __nr_require = function (e, t, n) {
            function r(n) {
                if (!t[n]) {
                    var i = t[n] = {exports: {}};
                    e[n][0].call(i.exports, function (t) {
                        var i = e[n][1][t];
                        return r(i || t)
                    }, i, i.exports)
                }
                return t[n].exports
            }

            if ("function" == typeof __nr_require) return __nr_require;
            for (var i = 0; i < n.length; i++) r(n[i]);
            return r
        }({
            1: [function (e, t, n) {
                function r() {
                }

                function i(e, t, n) {
                    return function () {
                        return o(e, [u.now()].concat(c(arguments)), t ? null : this, n), t ? void 0 : this
                    }
                }

                var o = e("handle"), a = e(6), c = e(7), f = e("ee").get("tracer"), u = e("loader"), s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    p = "api-", l = p + "ixn-";
                a(d, function (e, t) {
                    s[t] = i(p + t, !0, "api")
                }), s.addPageAction = i(p + "addPageAction", !0), s.setCurrentRouteName = i(p + "routeName", !0), t.exports = newrelic, s.interaction = function () {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function (e, t) {
                        var n = {}, r = this, i = "function" == typeof t;
                        return o(l + "tracer", [u.now(), e, n], r), function () {
                            if (f.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], n), i) try {
                                return t.apply(this, arguments)
                            } catch (e) {
                                throw f.emit("fn-err", [arguments, this, e], n), e
                            } finally {
                                f.emit("fn-end", [u.now()], n)
                            }
                        }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, t) {
                    m[t] = i(l + t)
                }), newrelic.noticeError = function (e, t) {
                    "string" == typeof e && (e = new Error(e)), o("err", [e, u.now(), !1, t])
                }
            }, {}], 2: [function (e, t, n) {
                function r() {
                    return c.exists && performance.now ? Math.round(performance.now()) : (o = Math.max((new Date).getTime(), o)) - a
                }

                function i() {
                    return o
                }

                var o = (new Date).getTime(), a = o, c = e(8);
                t.exports = r, t.exports.offset = a, t.exports.getLastTimestamp = i
            }, {}], 3: [function (e, t, n) {
                function r(e, t) {
                    var n = e.getEntries();
                    n.forEach(function (e) {
                        "first-paint" === e.name ? d("timing", ["fp", Math.floor(e.startTime)]) : "first-contentful-paint" === e.name && d("timing", ["fcp", Math.floor(e.startTime)])
                    })
                }

                function i(e, t) {
                    var n = e.getEntries();
                    n.length > 0 && d("lcp", [n[n.length - 1]])
                }

                function o(e) {
                    e.getEntries().forEach(function (e) {
                        e.hadRecentInput || d("cls", [e])
                    })
                }

                function a(e) {
                    if (e instanceof m && !g) {
                        var t = Math.round(e.timeStamp), n = {type: e.type};
                        t <= p.now() ? n.fid = p.now() - t : t > p.offset && t <= Date.now() ? (t -= p.offset, n.fid = p.now() - t) : t = p.now(), g = !0, d("timing", ["fi", t, n])
                    }
                }

                function c(e) {
                    d("pageHide", [p.now(), e])
                }

                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var f, u, s, d = e("handle"), p = e("loader"), l = e(5), m = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        f = new PerformanceObserver(r);
                        try {
                            f.observe({entryTypes: ["paint"]})
                        } catch (v) {
                        }
                        u = new PerformanceObserver(i);
                        try {
                            u.observe({entryTypes: ["largest-contentful-paint"]})
                        } catch (v) {
                        }
                        s = new PerformanceObserver(o);
                        try {
                            s.observe({type: "layout-shift", buffered: !0})
                        } catch (v) {
                        }
                    }
                    if ("addEventListener" in document) {
                        var g = !1, y = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        y.forEach(function (e) {
                            document.addEventListener(e, a, !1)
                        })
                    }
                    l(c)
                }
            }, {}], 4: [function (e, t, n) {
                function r(e, t) {
                    if (!i) return !1;
                    if (e !== i) return !1;
                    if (!t) return !0;
                    if (!o) return !1;
                    for (var n = o.split("."), r = t.split("."), a = 0; a < r.length; a++) if (r[a] !== n[a]) return !1;
                    return !0
                }

                var i = null, o = null, a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var c = navigator.userAgent, f = c.match(a);
                    f && c.indexOf("Chrome") === -1 && c.indexOf("Chromium") === -1 && (i = "Safari", o = f[1])
                }
                t.exports = {agent: i, version: o, match: r}
            }, {}], 5: [function (e, t, n) {
                function r(e) {
                    function t() {
                        e(a && document[a] ? document[a] : document[i] ? "hidden" : "visible")
                    }

                    "addEventListener" in document && o && document.addEventListener(o, t, !1)
                }

                t.exports = r;
                var i, o, a;
                "undefined" != typeof document.hidden ? (i = "hidden", o = "visibilitychange", a = "visibilityState") : "undefined" != typeof document.msHidden ? (i = "msHidden", o = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (i = "webkitHidden", o = "webkitvisibilitychange", a = "webkitVisibilityState")
            }, {}], 6: [function (e, t, n) {
                function r(e, t) {
                    var n = [], r = "", o = 0;
                    for (r in e) i.call(e, r) && (n[o] = t(r, e[r]), o += 1);
                    return n
                }

                var i = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], 7: [function (e, t, n) {
                function r(e, t, n) {
                    t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0);
                    for (var r = -1, i = n - t || 0, o = Array(i < 0 ? 0 : i); ++r < i;) o[r] = e[t + r];
                    return o
                }

                t.exports = r
            }, {}], 8: [function (e, t, n) {
                t.exports = {exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart}
            }, {}], ee: [function (e, t, n) {
                function r() {
                }

                function i(e) {
                    function t(e) {
                        return e && e instanceof r ? e : e ? f(e, c, o) : o()
                    }

                    function n(n, r, i, o) {
                        if (!p.aborted || o) {
                            e && e(n, r, i);
                            for (var a = t(i), c = v(n), f = c.length, u = 0; u < f; u++) c[u].apply(a, r);
                            var d = s[w[n]];
                            return d && d.push([b, n, r, a]), a
                        }
                    }

                    function l(e, t) {
                        h[e] = v(e).concat(t)
                    }

                    function m(e, t) {
                        var n = h[e];
                        if (n) for (var r = 0; r < n.length; r++) n[r] === t && n.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return d[e] = d[e] || i(n)
                    }

                    function y(e, t) {
                        u(e, function (e, n) {
                            t = t || "feature", w[n] = t, t in s || (s[t] = [])
                        })
                    }

                    var h = {}, w = {}, b = {
                        on: l,
                        addEventListener: l,
                        removeEventListener: m,
                        emit: n,
                        get: g,
                        listeners: v,
                        context: t,
                        buffer: y,
                        abort: a,
                        aborted: !1
                    };
                    return b
                }

                function o() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (p.aborted = !0, s = p.backlog = {})
                }

                var c = "nr@context", f = e("gos"), u = e(6), s = {}, d = {}, p = t.exports = i();
                p.backlog = s
            }, {}], gos: [function (e, t, n) {
                function r(e, t, n) {
                    if (i.call(e, t)) return e[t];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, t, {value: r, writable: !0, enumerable: !1}), r
                    } catch (o) {
                    }
                    return e[t] = r, r
                }

                var i = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], handle: [function (e, t, n) {
                function r(e, t, n, r) {
                    i.buffer([e], r), i.emit(e, t, n)
                }

                var i = e("ee").get("handle");
                t.exports = r, r.ee = i
            }, {}], id: [function (e, t, n) {
                function r(e) {
                    var t = typeof e;
                    return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, o, function () {
                        return i++
                    })
                }

                var i = 1, o = "nr@id", a = e("gos");
                t.exports = r
            }, {}], loader: [function (e, t, n) {
                function r() {
                    if (!E++) {
                        var e = b.info = NREUM.info, t = p.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(e && e.licenseKey && e.applicationID && t)) return u.abort();
                        f(h, function (t, n) {
                            e[t] || (e[t] = n)
                        });
                        var n = a();
                        c("mark", ["onload", n + b.offset], null, "api"), c("timing", ["load", n]);
                        var r = p.createElement("script");
                        r.src = "https://" + e.agent, t.parentNode.insertBefore(r, t)
                    }
                }

                function i() {
                    "complete" === p.readyState && o()
                }

                function o() {
                    c("mark", ["domContent", a() + b.offset], null, "api")
                }

                var a = e(2), c = e("handle"), f = e(6), u = e("ee"), s = e(4), d = window, p = d.document,
                    l = "addEventListener", m = "attachEvent", v = d.XMLHttpRequest, g = v && v.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: v,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var y = "" + location, h = {
                    beacon: "bam.nr-data.net",
                    errorBeacon: "bam.nr-data.net",
                    agent: "js-agent.newrelic.com/nr-1184.min.js"
                }, w = v && g && g[l] && !/CriOS/.test(navigator.userAgent), b = t.exports = {
                    offset: a.getLastTimestamp(),
                    now: a,
                    origin: y,
                    features: {},
                    xhrWrappable: w,
                    userAgent: s
                };
                e(1), e(3), p[l] ? (p[l]("DOMContentLoaded", o, !1), d[l]("load", r, !1)) : (p[m]("onreadystatechange", i), d[m]("onload", r)), c("mark", ["firstbyte", a.getLastTimestamp()], null, "api");
                var E = 0
            }, {}], "wrap-function": [function (e, t, n) {
                function r(e) {
                    return !(e && e instanceof Function && e.apply && !e[a])
                }

                var i = e("ee"), o = e(7), a = "nr@original", c = Object.prototype.hasOwnProperty, f = !1;
                t.exports = function (e, t) {
                    function n(e, t, n, i) {
                        function nrWrapper() {
                            var r, a, c, f;
                            try {
                                a = this, r = o(arguments), c = "function" == typeof n ? n(r, a) : n || {}
                            } catch (u) {
                                p([u, "", [r, a, i], c])
                            }
                            s(t + "start", [r, a, i], c);
                            try {
                                return f = e.apply(a, r)
                            } catch (d) {
                                throw s(t + "err", [r, a, d], c), d
                            } finally {
                                s(t + "end", [r, a, f], c)
                            }
                        }

                        return r(e) ? e : (t || (t = ""), nrWrapper[a] = e, d(e, nrWrapper), nrWrapper)
                    }

                    function u(e, t, i, o) {
                        i || (i = "");
                        var a, c, f, u = "-" === i.charAt(0);
                        for (f = 0; f < t.length; f++) c = t[f], a = e[c], r(a) || (e[c] = n(a, u ? c + i : i, o, c))
                    }

                    function s(n, r, i) {
                        if (!f || t) {
                            var o = f;
                            f = !0;
                            try {
                                e.emit(n, r, i, t)
                            } catch (a) {
                                p([a, n, r, i])
                            }
                            f = o
                        }
                    }

                    function d(e, t) {
                        if (Object.defineProperty && Object.keys) try {
                            var n = Object.keys(e);
                            return n.forEach(function (n) {
                                Object.defineProperty(t, n, {
                                    get: function () {
                                        return e[n]
                                    }, set: function (t) {
                                        return e[n] = t, t
                                    }
                                })
                            }), t
                        } catch (r) {
                            p([r])
                        }
                        for (var i in e) c.call(e, i) && (t[i] = e[i]);
                        return t
                    }

                    function p(t) {
                        try {
                            e.emit("internal-error", t)
                        } catch (n) {
                        }
                    }

                    return e || (e = i), n.inPlace = u, n.flag = a, n
                }
            }, {}]
        }, {}, ["loader"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Hotjar Tracking Code for ncte.org -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 1651513, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script async="" src="./English Education - NCTE_files/hotjar-1651513.js.download"></script>
    <title>English Education - NCTE</title>

    <!-- This site is optimized with the Yoast SEO plugin v5.4.2 - https://yoast.com/wordpress/plugins/seo/ -->
    <link rel="canonical" href="https://ncte.org/resources/journals/english-education/">
    <!-- / Yoast SEO plugin. -->

    <link rel="dns-prefetch" href="https://code.jquery.com/">
    <link rel="dns-prefetch" href="https://assets.juicer.io/">
    <link rel="dns-prefetch" href="https://ncte.org/">
    <link rel="dns-prefetch" href="https://cloud.typography.com/">
    <link rel="stylesheet" href="../../css/embed.css">
    <link rel="stylesheet" href="../../css/style.min.css">
    <link rel="stylesheet" href="../../css/pagenavi-css.css">
    <link rel="stylesheet" href="../../css/acf-global.css">
    <link rel="stylesheet" href="../../css/acf-input.css">
    <link rel="stylesheet" href="../../css/acf-pro-input.css">
    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../css/jquery-ui-timepicker-addon.min.css">
    <link rel="stylesheet" href="../../css/color-picker.min.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../css/main-75d99d51fc.css">
    <script src="../../English Education - NCTE_files/jquery-1.12.4.min.js.download"></script>
    <script>(window.jQuery && jQuery.noConflict()) || document.write('<script src="/wp-includes/js/jquery/jquery.js"><\/script>')</script>
    <script src="../../English Education - NCTE_files/embed-no-jquery.js.download"></script>
    <script src="../../English Education - NCTE_files/gtm4wp-outbound-click-tracker.js.download"></script>
    <script src="../../English Education - NCTE_files/gtm4wp-download-tracker.js.download"></script>
    <script src="../../English Education - NCTE_files/gtm4wp-form-move-tracker.js.download"></script>
    <script src="../../English Education - NCTE_files/gtm4wp-youtube.js.download"></script>
    <script src="../../English Education - NCTE_files/analytics-talk-content-tracking.js.download"></script>
    <script src="../../English Education - NCTE_files/core.min.js.download"></script>
    <script src="../../English Education - NCTE_files/widget.min.js.download"></script>
    <script src="../../English Education - NCTE_files/mouse.min.js.download"></script>
    <script src="../../English Education - NCTE_files/sortable.min.js.download"></script>
    <script src="../../English Education - NCTE_files/resizable.min.js.download"></script>
    <script src="../../English Education - NCTE_files/acf-input.min.js.download"></script>
    <script src="../../English Education - NCTE_files/acf-pro-input.min.js.download"></script>
    <script src="../../English Education - NCTE_files/select2.full.min.js.download"></script>
    <script src="../../English Education - NCTE_files/datepicker.min.js.download"></script>
    <script type="text/javascript">
        jQuery(document).ready(function (jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script src="./English Education - NCTE_files/jquery-ui-timepicker-addon.min.js.download"></script>
    <meta name="tec-api-version" content="v1">
    <meta name="tec-api-origin" content="https://ncte.org">
    <link rel="https://theeventscalendar.com/" href="https://ncte.org/wp-json/tribe/events/v1/">
    <!-- Google Tag Manager for WordPress by DuracellTomi - http://duracelltomi.com -->
    <script data-cfasync="false" type="text/javascript">
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];

        var gtm4wp_scrollerscript_debugmode = false;
        var gtm4wp_scrollerscript_callbacktime = 100;
        var gtm4wp_scrollerscript_readerlocation = 150;
        var gtm4wp_scrollerscript_contentelementid = "content";
        var gtm4wp_scrollerscript_scannertime = 60;
        jQuery(function () {
            gtm4wp_track_downloads("pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar,gz,tar");
        });
        dataLayer.push({"pagePostType": "page", "pagePostType2": "single-page", "pagePostAuthor": "admin"});
    </script>
    <script data-cfasync="false">(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WGWN3KZ');</script>
    <!-- End Google Tag Manager -->
    <!-- End Google Tag Manager for WordPress by DuracellTomi -->
    <link rel="icon" href="https://ncte.org/wp-content/uploads/2017/04/cropped-NCTE_Favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://ncte.org/wp-content/uploads/2017/04/cropped-NCTE_Favicon-192x192.png"
          sizes="192x192">
    <link rel="apple-touch-icon-precomposed"
          href="https://ncte.org/wp-content/uploads/2017/04/cropped-NCTE_Favicon-180x180.png">
    <meta name="msapplication-TileImage" content="/wp-content/uploads/2017/04/cropped-NCTE_Favicon-270x270.png">
    <style id="iris-css">.iris-picker {
            display: block;
            position: relative
        }

        .iris-picker, .iris-picker * {
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        input + .iris-picker {
            margin-top: 4px
        }

        .iris-error {
            background-color: #ffafaf
        }

        .iris-border {
            border-radius: 3px;
            border: 1px solid #aaa;
            width: 200px;
            background-color: #fff
        }

        .iris-picker-inner {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0
        }

        .iris-border .iris-picker-inner {
            top: 10px;
            right: 10px;
            left: 10px;
            bottom: 10px
        }

        .iris-picker .iris-square-inner {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0
        }

        .iris-picker .iris-square, .iris-picker .iris-slider, .iris-picker .iris-square-inner, .iris-picker .iris-palette {
            border-radius: 3px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, .4);
            height: 100%;
            width: 12.5%;
            float: left;
            margin-right: 5%
        }

        .iris-only-strip .iris-slider {
            width: 100%
        }

        .iris-picker .iris-square {
            width: 76%;
            margin-right: 10%;
            position: relative
        }

        .iris-only-strip .iris-square {
            display: none
        }

        .iris-picker .iris-square-inner {
            width: auto;
            margin: 0
        }

        .iris-ie-9 .iris-square, .iris-ie-9 .iris-slider, .iris-ie-9 .iris-square-inner, .iris-ie-9 .iris-palette {
            box-shadow: none;
            border-radius: 0
        }

        .iris-ie-9 .iris-square, .iris-ie-9 .iris-slider, .iris-ie-9 .iris-palette {
            outline: 1px solid rgba(0, 0, 0, .1)
        }

        .iris-ie-lt9 .iris-square, .iris-ie-lt9 .iris-slider, .iris-ie-lt9 .iris-square-inner, .iris-ie-lt9 .iris-palette {
            outline: 1px solid #aaa
        }

        .iris-ie-lt9 .iris-square .ui-slider-handle {
            outline: 1px solid #aaa;
            background-color: #fff;
            -ms-filter: "alpha(Opacity=30)"
        }

        .iris-ie-lt9 .iris-square .iris-square-handle {
            background: 0 0;
            border: 3px solid #fff;
            -ms-filter: "alpha(Opacity=50)"
        }

        .iris-picker .iris-strip {
            margin-right: 0;
            position: relative
        }

        .iris-picker .iris-strip .ui-slider-handle {
            position: absolute;
            background: 0 0;
            margin: 0;
            right: -3px;
            left: -3px;
            border: 4px solid #aaa;
            border-width: 4px 3px;
            width: auto;
            height: 6px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            opacity: .9;
            z-index: 5;
            cursor: ns-resize
        }

        .iris-strip-horiz .iris-strip .ui-slider-handle {
            right: auto;
            left: auto;
            bottom: -3px;
            top: -3px;
            height: auto;
            width: 6px;
            cursor: ew-resize
        }

        .iris-strip .ui-slider-handle:before {
            content: " ";
            position: absolute;
            left: -2px;
            right: -2px;
            top: -3px;
            bottom: -3px;
            border: 2px solid #fff;
            border-radius: 3px
        }

        .iris-picker .iris-slider-offset {
            position: absolute;
            top: 11px;
            left: 0;
            right: 0;
            bottom: -3px;
            width: auto;
            height: auto;
            background: transparent;
            border: 0;
            border-radius: 0
        }

        .iris-strip-horiz .iris-slider-offset {
            top: 0;
            bottom: 0;
            right: 11px;
            left: -3px
        }

        .iris-picker .iris-square-handle {
            background: transparent;
            border: 5px solid #aaa;
            border-radius: 50%;
            border-color: rgba(128, 128, 128, .5);
            box-shadow: none;
            width: 12px;
            height: 12px;
            position: absolute;
            left: -10px;
            top: -10px;
            cursor: move;
            opacity: 1;
            z-index: 10
        }

        .iris-picker .ui-state-focus .iris-square-handle {
            opacity: .8
        }

        .iris-picker .iris-square-handle:hover {
            border-color: #999
        }

        .iris-picker .iris-square-value:focus .iris-square-handle {
            box-shadow: 0 0 2px rgba(0, 0, 0, .75);
            opacity: .8
        }

        .iris-picker .iris-square-handle:hover::after {
            border-color: #fff
        }

        .iris-picker .iris-square-handle::after {
            position: absolute;
            bottom: -4px;
            right: -4px;
            left: -4px;
            top: -4px;
            border: 3px solid #f9f9f9;
            border-color: rgba(255, 255, 255, .8);
            border-radius: 50%;
            content: " "
        }

        .iris-picker .iris-square-value {
            width: 8px;
            height: 8px;
            position: absolute
        }

        .iris-ie-lt9 .iris-square-value, .iris-mozilla .iris-square-value {
            width: 1px;
            height: 1px
        }

        .iris-palette-container {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0
        }

        .iris-border .iris-palette-container {
            left: 10px;
            bottom: 10px
        }

        .iris-picker .iris-palette {
            margin: 0;
            cursor: pointer
        }

        .iris-square-handle, .ui-slider-handle {
            border: 0;
            outline: 0
        }</style>
    <script async="" src="./English Education - NCTE_files/modules.0f24278b81b8d3764551.js.download"
            charset="utf-8"></script>
    <style type="text/css">iframe#_hjRemoteVarsFrame {
            display: none !important;
            width: 1px !important;
            height: 1px !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }</style>
</head>

<style>
    main {
        display: flex;
        flex-direction: row;
    }

    ul {
        list-style-type: none;
    }

    .category {
        background: transparent;
        border: none;
        color: darkslategray;
        cursor: pointer;
    }

    .Products {
        width: 100%;
    }

    .pagination ul {
        list-style-type: none;
        margin: 0 auto;
    }

    .pagination ul li {
        display: inline;
        padding: 10px;
    }

    .basket {

    }
</style>
<body class="page page-id-4621 page-parent page-child parent-pageid-1140 tribe-js tribe-theme-ncte english-education content ">
<audio class="audio-for-speech" src=""></audio>
<div class="translate-tooltip-mtz hidden">
    <div class="header">
        <div class="header-controls">
            <span class="sound-translate"></span>
            <span class="settings"></span>
        </div>
    </div>
    <div class="translated-text">
        <div class="words"></div>
        <div class="sentences"></div>
    </div>
</div>
<span class="translate-button-mtz hidden"></span>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WGWN3KZ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) --><br style="display:none;">
<!--[if IE]>
<div class="alert alert-warning">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.
</div>
<![endif]-->
<header class="banner navbar-toggleable-md flex-column navbar navbar-default navbar-static-top" role="banner">
    <div class="container-fluid">
        <div class="basket">
            <span id="basket">BASKET</span>
            <span id="basket-count">0</span>
        </div>
        <div class="navbar-header">
            <button class="hamburger hamburger--slider nav-expander fixed" id="nav-expander" type="button">
    	  <span class="hamburger-box">
    	    <span class="hamburger-inner"></span>
    	  </span>
            </button>
            <a class="navbar-brand" href="https://ncte.org/">
                <img src="../../English Education - NCTE_files/logo1.jpg" width="200" height="50" alt="NCTE"
                     class="img-responsive main-logo-img">
            </a>
            <div class="aux-navigation hidden-md-down">
                <div class="secondary-navigation-wrap">
                    <ul id="menu-secondary-navigation" class="secondary-nav clearfix">
                        <li class="menu-item menu-item-search">
                            <form method="get" class="menu-search-form" action="https://ncte.org/"><p><input
                                            class="text_input" type="text" value="" name="s" id="s"
                                            placeholder="Type to Search..."><input type="submit" class="my-wp-search"
                                                                                   id="searchsubmit" value="🔎"></p>
                            </form>
                        </li>
                        <li class="menu-item menu-search"><a href="http://search.ncte.org/">Search</a></li>
                        <li class="hidden-xs menu-item menu-blog"><a href="https://ncte.org/blog/">Blog</a></li>
                        <li class="menu-item menu-shop"><a href="https://store.ncte.org/">Shop</a></li>
                        <li class="menu-item menu-my-account"><a href="https://account.ncte.org/">My Account</a></li>
                    </ul>
                </div>
                <div class="social-navigation-wrap">
                    <ul id="menu-social-navigation" class="social social-circle header-social-menu clearfix">
                        <li class="menu-item menu-facebook"><a target="_blank" href="https://www.facebook.com/ncte.org"><span
                                        class="screen-reader-text">Facebook</span></a></li>
                        <li class="menu-item menu-twitter"><a target="_blank" href="https://twitter.com/ncte"><span
                                        class="screen-reader-text">Twitter</span></a></li>
                        <li class="menu-item menu-instagram"><a href="https://www.instagram.com/nctegram/"
                                                                target="_blank"><span class="screen-reader-text">Instagram</span></a>
                        </li>
                        <li class="menu-item menu-linkedin"><a target="_blank"
                                                               href="https://www.linkedin.com/company/national-council-of-teachers-of-english-ncte-"><span
                                        class="screen-reader-text">LinkedIn</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="collapse navbar-collapse sidemenu" role="navigation">
        <div class="secondary-navigation-wrap hidden-lg-up">
            <ul id="menu-secondary-navigation-1" class="secondary-nav clearfix">
                <li class="menu-item menu-item-search">
                    <form method="get" class="menu-search-form" action="https://ncte.org/"><p><input class="text_input"
                                                                                                     type="text"
                                                                                                     value="" name="s"
                                                                                                     id="s"
                                                                                                     placeholder="Type to Search..."><input
                                    type="submit" class="my-wp-search" id="searchsubmit" value="🔎"></p></form>
                </li>
                <li class="menu-item menu-search"><a href="http://search.ncte.org/">Search</a></li>
                <li class="hidden-xs menu-item menu-blog"><a href="https://ncte.org/blog/">Blog</a></li>
                <li class="menu-item menu-shop"><a href="https://store.ncte.org/">Shop</a></li>
                <li class="menu-item menu-my-account"><a href="https://account.ncte.org/">My Account</a></li>
            </ul>
        </div>
        <ul id="menu-primary-navigation" class="nav navbar-nav">
            <li class="menu-item menu-membership"><a href="https://ncte.org/membership/">Membership</a></li>
            <li class="menu-item menu-events"><a href="https://ncte.org/events/">Events</a></li>
            <li class="active menu-item menu-resources"><a href="https://ncte.org/resources/">Resources</a></li>
            <li class="menu-item menu-research"><a href="https://ncte.org/research/">Research</a></li>
            <li class="menu-item menu-products"><a href="<?= Url::local('Products'); ?>">Products</a></li>
            <li class="menu-item menu-about"><a href="https://ncte.org/about/">About</a></li>
            <li class="menu-item menu-get-involved"><a href="https://ncte.org/get-involved/">Get Involved</a></li>
            <li class="menu-item menu-renew"><a href="https://renew.ncte.org/">Renew!</a></li>
            <li class="menu-item menu-join"><a href="https://checkout.ncte.org/join">Join!</a></li>
        </ul>
        <div class="social-navigation-wrap hidden-lg-up">
            <ul id="menu-social-navigation-1" class="social social-circle header-social-menu clearfix">
                <li class="menu-item menu-facebook"><a target="_blank" href="https://www.facebook.com/ncte.org"><span
                                class="screen-reader-text">Facebook</span></a></li>
                <li class="menu-item menu-twitter"><a target="_blank" href="https://twitter.com/ncte"><span
                                class="screen-reader-text">Twitter</span></a></li>
                <li class="menu-item menu-instagram"><a href="https://www.instagram.com/nctegram/" target="_blank"><span
                                class="screen-reader-text">Instagram</span></a></li>
                <li class="menu-item menu-linkedin"><a target="_blank"
                                                       href="https://www.linkedin.com/company/national-council-of-teachers-of-english-ncte-"><span
                                class="screen-reader-text">LinkedIn</span></a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrap" role="document">
    <?= $content ?>
</div><!-- /.wrap -->
<footer class="content-info">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="hidden-xs-down col-sm-4 col-md-3">
                    <img width="175" height="173" src="../../English Education - NCTE_files/footer-logo.png"
                         class="img-responsive" alt=""></div>
                <div class="col-xs-5 col-sm-4 col-md-2">
                    <ul id="menu-footer-first" class="footer-menu">
                        <li class="menu-item menu-about"><a href="https://ncte.org/about/">About</a></li>
                        <li class="menu-item menu-get-involved"><a href="https://ncte.org/get-involved/">Get
                                Involved</a></li>
                        <li class="menu-item menu-events"><a href="https://ncte.org/events/">Events</a></li>
                        <li class="active menu-item menu-resources"><a href="https://ncte.org/resources/">Resources</a>
                        </li>
                        <li class="menu-item menu-products"><a href="https://ncte.org/products/">Products</a></li>
                        <li class="menu-item menu-membership"><a href="https://ncte.org/membership/">Membership</a></li>
                        <li class="menu-item menu-faqs"><a href="https://ncte.org/faqs/">FAQs</a></li>
                        <li class="menu-item menu-donations"><a href="https://store.ncte.org/donate">Donations</a></li>
                    </ul>
                </div>
                <div class="col-xs-7 col-sm-4 col-md-2 px-md-0">
                    <ul id="menu-footer-second" class="footer-menu">
                        <li class="menu-item menu-blog"><a href="https://ncte.org/blog/">Blog</a></li>
                        <li class="menu-item menu-shop"><a href="https://secure.ncte.org/store/">Shop</a></li>
                        <li class="menu-item menu-contact-us"><a href="https://ncte.org/contact-us/">Contact Us</a></li>
                        <li class="menu-item menu-press"><a href="https://ncte.org/press/">Press</a></li>
                        <li class="menu-item menu-advertisers"><a href="https://ncte.org/advertisers/">Advertisers</a>
                        </li>
                        <li class="menu-item menu-career-opportunities"><a
                                    href="https://ncte.org/career-opportunities/">Career Opportunities</a></li>
                        <li class="menu-item menu-ncte-connects"><a href="https://connects.ncte.org/">NCTE Connects</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5 col-md-4 offset-sm-1 newsletter-signup-wrap px-sm-0">
                    <div class="newsletter-signup">
                        <h3>Subscribe to INBOX</h3>
                        <p>INBOX is a biweekly email wrap-up of the most important stories in English language arts
                            education, ideas for your classroom, and news from NCTE.</p>

                        <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                            <div id="gf_2" class="gform_anchor" tabindex="-1"></div>
                            <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2"
                                  action="https://ncte.org/resources/journals/english-education/#gf_2">
                                <div class="gform_body">
                                    <ul id="gform_fields_2"
                                        class="gform_fields top_label form_sublabel_below description_below">
                                        <li id="field_2_1"
                                            class="gfield field_sublabel_below field_description_below gfield_visibility_visible col-sm-12  form-group">
                                            <label class="hidden gfield_label" for="input_2_1">Email</label>
                                            <div class="ginput_container ginput_container_email">
                                                <input name="input_1" id="input_2_1" type="text" value=""
                                                       class="form-control" placeholder="Email Address..."
                                                       aria-invalid="false">
                                            </div>
                                        </li>
                                        <li id="field_2_2"
                                            class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible gform_validation_container  form-group">
                                            <label class="hidden gfield_label" for="input_2_2">Phone</label>
                                            <div class="ginput_container"><input name="input_2" id="input_2_2"
                                                                                 type="text" value=""></div>
                                            <div class="gfield_description" id="gfield_description__2">This field is for
                                                validation purposes and should be left unchanged.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gform_footer top_label">
                                    <button class="newsletter-signup-submit" id="gform_submit_button_2">✉</button>
                                    <input type="hidden" name="gform_ajax"
                                           value="form_id=2&amp;title=&amp;description=&amp;tabindex=0">
                                    <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
                                    <input type="hidden" class="gform_hidden" name="gform_submit" value="2">

                                    <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                    <input type="hidden" class="gform_hidden" name="state_2"
                                           value="WyJbXSIsImE5NTZiOTZmMzcyM2I0YzM5YjA4NzkyNDY0ZGJjZWJiIl0=">
                                    <input type="hidden" class="gform_hidden" name="gform_target_page_number_2"
                                           id="gform_target_page_number_2" value="0">
                                    <input type="hidden" class="gform_hidden" name="gform_source_page_number_2"
                                           id="gform_source_page_number_2" value="1">
                                    <input type="hidden" name="gform_field_values" value="">

                                </div>
                            </form>
                        </div>
                        <iframe style="display:none;width:0px;height:0px;"
                                src="../../English Education - NCTE_files/saved_resource.html" name="gform_ajax_frame_2"
                                id="gform_ajax_frame_2" data-gtm-yt-inspected-1_25="true">This iframe contains the logic
                            required to handle Ajax powered Gravity Forms.
                        </iframe>
                        <script type="text/javascript">jQuery(document).ready(function ($) {
                                gformInitSpinner(2, 'https://ncte.org/wp-content/plugins/gravityforms/images/spinner.gif');
                                jQuery('#gform_ajax_frame_2').on('load', function () {
                                    var contents = jQuery(this).contents().find('*').html();
                                    var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                                    if (!is_postback) {
                                        return;
                                    }
                                    var form_content = jQuery(this).contents().find('#gform_wrapper_2');
                                    var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0;
                                    var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                                    var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                                    if (is_form) {
                                        jQuery('#gform_wrapper_2').html(form_content.html());
                                        if (form_content.hasClass('gform_validation_error')) {
                                            jQuery('#gform_wrapper_2').addClass('gform_validation_error');
                                        } else {
                                            jQuery('#gform_wrapper_2').removeClass('gform_validation_error');
                                        }
                                        setTimeout(function () { /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                                            jQuery(document).scrollTop(jQuery('#gform_wrapper_2').offset().top);
                                        }, 50);
                                        if (window['gformInitDatepicker']) {
                                            gformInitDatepicker();
                                        }
                                        if (window['gformInitPriceFields']) {
                                            gformInitPriceFields();
                                        }
                                        var current_page = jQuery('#gform_source_page_number_2').val();
                                        gformInitSpinner(2, 'https://ncte.org/wp-content/plugins/gravityforms/images/spinner.gif');
                                        jQuery(document).trigger('gform_page_loaded', [2, current_page]);
                                        window['gf_submitting_2'] = false;
                                    } else if (!is_redirect) {
                                        var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                                        if (!confirmation_content) {
                                            confirmation_content = contents;
                                        }
                                        setTimeout(function () {
                                            jQuery('#gform_wrapper_2').replaceWith(confirmation_content);
                                            jQuery(document).scrollTop(jQuery('#gf_2').offset().top);
                                            jQuery(document).trigger('gform_confirmation_loaded', [2]);
                                            window['gf_submitting_2'] = false;
                                        }, 50);
                                    } else {
                                        jQuery('#gform_2').append(contents);
                                        if (window['gformRedirect']) {
                                            gformRedirect();
                                        }
                                    }
                                    jQuery(document).trigger('gform_post_render', [2, current_page]);
                                });
                            });</script>
                        <script type="text/javascript"> if (typeof gf_global == 'undefined') var gf_global = {
                                "gf_currency_config": {
                                    "name": "U.S. Dollar",
                                    "symbol_left": "$",
                                    "symbol_right": "",
                                    "symbol_padding": "",
                                    "thousand_separator": ",",
                                    "decimal_separator": ".",
                                    "decimals": 2
                                },
                                "base_url": "https:\/\/ncte.org\/wp-content\/plugins\/gravityforms",
                                "number_formats": [],
                                "spinnerUrl": "https:\/\/ncte.org\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"
                            };
                            jQuery(document).bind('gform_post_render', function (event, formId, currentPage) {
                                if (formId == 2) {
                                    if (typeof Placeholders != 'undefined') {
                                        Placeholders.enable();
                                    }
                                }
                            });
                            jQuery(document).bind('gform_post_conditional_logic', function (event, formId, fields, isInit) {
                            });</script>
                        <script type="text/javascript"> jQuery(document).ready(function () {
                                jQuery(document).trigger('gform_post_render', [2, 1])
                            }); </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom">
            <div class="footer-social-menu">
                <ul id="menu-social-footer" class="social social-regular clearfix">
                    <li class="menu-item menu-facebook"><a href="http://www.facebook.com/ncte.org"><span
                                    class="screen-reader-text">Facebook</span></a></li>
                    <li class="menu-item menu-twitter"><a href="http://www.twitter.com/ncte" target="_blank"><span
                                    class="screen-reader-text">Twitter</span></a></li>
                    <li class="menu-item menu-instagram"><a href="https://www.instagram.com/nctegram/"
                                                            target="_blank"><span
                                    class="screen-reader-text">Instagram</span></a></li>
                    <li class="menu-item menu-linkedin"><a
                                href="https://www.linkedin.com/company/national-council-of-teachers-of-english-ncte-/"
                                target="_blank"><span class="screen-reader-text">LinkedIn</span></a></li>
                    <li class="menu-item menu-pinterest"><a href="http://www.pinterest.com/nctedotorg"
                                                            target="_blank"><span
                                    class="screen-reader-text">Pinterest</span></a></li>
                    <li class="menu-item menu-youtube"><a href="https://www.youtube.com/user/NCTEEnglish"
                                                          target="_blank"><span
                                    class="screen-reader-text">YouTube</span></a></li>
                </ul>
            </div>
            <div class="copy">
                <p>
                    © 1998-2020 NCTE. All rights reserved. </p>
            </div>
            <div class="footer-toc">
                <ul id="menu-footer-bottom" class="footer-bottom-menu clearfix">
                    <li class="menu-item menu-privacy-policy"><a href="https://ncte.org/privacy-policy/">Privacy
                            Policy</a></li>
                    <li class="menu-item menu-links-policy"><a href="https://ncte.org/links-policy/">Links Policy</a>
                    </li>
                    <li class="menu-item menu-terms-of-use"><a href="https://ncte.org/terms-of-use/">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    (function (body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    })(document.body);
</script>
<script> /* <![CDATA[ */
    var tribe_l10n_datatables = {
        "aria": {
            "sort_ascending": ": activate to sort column ascending",
            "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {"all": "All", "next": "Next", "previous": "Previous"},
        "select": {"rows": {"0": "", "_": ": Selected %d rows", "1": ": Selected 1 row"}},
        "datepicker": {
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Prev",
            "currentText": "Today",
            "closeText": "Done",
            "today": "Today",
            "clear": "Clear"
        }
    };
    var tribe_system_info = {
        "sysinfo_optin_nonce": "2785eaf3b3",
        "clipboard_btn_text": "Copy to clipboard",
        "clipboard_copied_text": "System info copied",
        "clipboard_fail_text": "Press \"Cmd + C\" to copy"
    };/* ]]> */ </script>
<link rel="stylesheet" href="./English Education - NCTE_files/formreset.min.css">
<link rel="stylesheet" href="../../English Education - NCTE_files/formsmain.min.css">
<link rel="stylesheet" href="../../English Education - NCTE_files/readyclass.min.css">
<link rel="stylesheet" href="../../English Education - NCTE_files/browsers.min.css">
<script src="../../English Education - NCTE_files/draggable.min.js.download"></script>
<script src="../../English Education - NCTE_files/slider.min.js.download"></script>
<script src="../../English Education - NCTE_files/jquery.ui.touch-punch.js.download"></script>
<script src="../../English Education - NCTE_files/iris.min.js.download"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wpColorPickerL10n = {
        "clear": "Clear",
        "defaultString": "Default",
        "pick": "Select Color",
        "current": "Current Color"
    };
    /* ]]> */
</script>
<script src="../../English Education - NCTE_files/color-picker.min.js.download"></script>
<script src="../../English Education - NCTE_files/main-3987b3c1a4.js.download"></script>
<script src="../../English Education - NCTE_files/jquery.json.min.js.download"></script>
<script src="../../English Education - NCTE_files/gravityforms.min.js.download"></script>
<script src="../../English Education - NCTE_files/placeholders.jquery.min.js.download"></script>
<script type="text/javascript">
    acf.data = {
        "screen": null,
        "post_id": null,
        "nonce": "4872c06e45",
        "admin_url": "https:\/\/ncte.org\/wp-admin\/",
        "ajaxurl": "https:\/\/ncte.org\/wp-admin\/admin-ajax.php",
        "validation": null,
        "wp_version": "5.0.3",
        "acf_version": "5.7.10",
        "browser": "chrome",
        "locale": "en_US",
        "rtl": false,
        "mimeTypeIcon": "https:\/\/ncte.org\/wp-includes\/images\/media\/default.png",
        "mimeTypes": {
            "jpg|jpeg|jpe": "image\/jpeg",
            "gif": "image\/gif",
            "png": "image\/png",
            "bmp": "image\/bmp",
            "tiff|tif": "image\/tiff",
            "ico": "image\/x-icon",
            "asf|asx": "video\/x-ms-asf",
            "wmv": "video\/x-ms-wmv",
            "wmx": "video\/x-ms-wmx",
            "wm": "video\/x-ms-wm",
            "avi": "video\/avi",
            "divx": "video\/divx",
            "flv": "video\/x-flv",
            "mov|qt": "video\/quicktime",
            "mpeg|mpg|mpe": "video\/mpeg",
            "mp4|m4v": "video\/mp4",
            "ogv": "video\/ogg",
            "webm": "video\/webm",
            "mkv": "video\/x-matroska",
            "3gp|3gpp": "video\/3gpp",
            "3g2|3gp2": "video\/3gpp2",
            "txt|asc|c|cc|h|srt": "text\/plain",
            "csv": "text\/csv",
            "tsv": "text\/tab-separated-values",
            "ics": "text\/calendar",
            "rtx": "text\/richtext",
            "css": "text\/css",
            "vtt": "text\/vtt",
            "dfxp": "application\/ttaf+xml",
            "mp3|m4a|m4b": "audio\/mpeg",
            "aac": "audio\/aac",
            "ra|ram": "audio\/x-realaudio",
            "wav": "audio\/wav",
            "ogg|oga": "audio\/ogg",
            "flac": "audio\/flac",
            "mid|midi": "audio\/midi",
            "wma": "audio\/x-ms-wma",
            "wax": "audio\/x-ms-wax",
            "mka": "audio\/x-matroska",
            "rtf": "application\/rtf",
            "pdf": "application\/pdf",
            "class": "application\/java",
            "tar": "application\/x-tar",
            "zip": "application\/zip",
            "gz|gzip": "application\/x-gzip",
            "rar": "application\/rar",
            "7z": "application\/x-7z-compressed",
            "psd": "application\/octet-stream",
            "xcf": "application\/octet-stream",
            "doc": "application\/msword",
            "pot|pps|ppt": "application\/vnd.ms-powerpoint",
            "wri": "application\/vnd.ms-write",
            "xla|xls|xlt|xlw": "application\/vnd.ms-excel",
            "mdb": "application\/vnd.ms-access",
            "mpp": "application\/vnd.ms-project",
            "docx": "application\/vnd.openxmlformats-officedocument.wordprocessingml.document",
            "docm": "application\/vnd.ms-word.document.macroEnabled.12",
            "dotx": "application\/vnd.openxmlformats-officedocument.wordprocessingml.template",
            "dotm": "application\/vnd.ms-word.template.macroEnabled.12",
            "xlsx": "application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
            "xlsm": "application\/vnd.ms-excel.sheet.macroEnabled.12",
            "xlsb": "application\/vnd.ms-excel.sheet.binary.macroEnabled.12",
            "xltx": "application\/vnd.openxmlformats-officedocument.spreadsheetml.template",
            "xltm": "application\/vnd.ms-excel.template.macroEnabled.12",
            "xlam": "application\/vnd.ms-excel.addin.macroEnabled.12",
            "pptx": "application\/vnd.openxmlformats-officedocument.presentationml.presentation",
            "pptm": "application\/vnd.ms-powerpoint.presentation.macroEnabled.12",
            "ppsx": "application\/vnd.openxmlformats-officedocument.presentationml.slideshow",
            "ppsm": "application\/vnd.ms-powerpoint.slideshow.macroEnabled.12",
            "potx": "application\/vnd.openxmlformats-officedocument.presentationml.template",
            "potm": "application\/vnd.ms-powerpoint.template.macroEnabled.12",
            "ppam": "application\/vnd.ms-powerpoint.addin.macroEnabled.12",
            "sldx": "application\/vnd.openxmlformats-officedocument.presentationml.slide",
            "sldm": "application\/vnd.ms-powerpoint.slide.macroEnabled.12",
            "onetoc|onetoc2|onetmp|onepkg": "application\/onenote",
            "oxps": "application\/oxps",
            "xps": "application\/vnd.ms-xpsdocument",
            "odt": "application\/vnd.oasis.opendocument.text",
            "odp": "application\/vnd.oasis.opendocument.presentation",
            "ods": "application\/vnd.oasis.opendocument.spreadsheet",
            "odg": "application\/vnd.oasis.opendocument.graphics",
            "odc": "application\/vnd.oasis.opendocument.chart",
            "odb": "application\/vnd.oasis.opendocument.database",
            "odf": "application\/vnd.oasis.opendocument.formula",
            "wp|wpd": "application\/wordperfect",
            "key": "application\/vnd.apple.keynote",
            "numbers": "application\/vnd.apple.numbers",
            "pages": "application\/vnd.apple.pages",
            "svg": "image\/svg+xml",
            "svgz": "image\/svg+xml"
        },
        "select2L10n": {
            "matches_1": "One result is available, press enter to select it.",
            "matches_n": "%d results are available, use up and down arrow keys to navigate.",
            "matches_0": "No matches found",
            "input_too_short_1": "Please enter 1 or more characters",
            "input_too_short_n": "Please enter %d or more characters",
            "input_too_long_1": "Please delete 1 character",
            "input_too_long_n": "Please delete %d characters",
            "selection_too_long_1": "You can only select 1 item",
            "selection_too_long_n": "You can only select %d items",
            "load_more": "Loading more results&hellip;",
            "searching": "Searching&hellip;",
            "load_fail": "Loading failed"
        },
        "google_map_api": "https:\/\/maps.googleapis.com\/maps\/api\/js?libraries=places&ver=3&callback&language=en_US",
        "datePickerL10n": {
            "closeText": "Done",
            "currentText": "Today",
            "nextText": "Next",
            "prevText": "Prev",
            "weekHeader": "Wk",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
        },
        "dateTimePickerL10n": {
            "timeOnlyTitle": "Choose Time",
            "timeText": "Time",
            "hourText": "Hour",
            "minuteText": "Minute",
            "secondText": "Second",
            "millisecText": "Millisecond",
            "microsecText": "Microsecond",
            "timezoneText": "Time Zone",
            "currentText": "Now",
            "closeText": "Done",
            "selectText": "Select",
            "amNames": ["AM", "A"],
            "pmNames": ["PM", "P"]
        }
    };
    acf.l10n = [];
</script>
<script type="text/javascript">
    acf.doAction('prepare');
</script>
<script type="text/javascript">window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "licenseKey": "be676bb9a4",
        "applicationID": "241842458",
        "transactionName": "NFAAbBYDXxJUABYIXw0aN0oNTR4IWwcHGR4TXRI=",
        "queueTime": 0,
        "applicationTime": 2378,
        "atts": "GBcDGl4ZTBw=",
        "errorBeacon": "bam.nr-data.net",
        "agent": ""
    }</script>

<script type="text/javascript" id="">!function (b, e, f, g, a, c, d) {
        b.saq || (a = b.saq = function () {
            a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
        }, b._saq || (b._saq = a), a.push = a, a.loaded = !0, a.version = "1.0", a.queue = [], c = e.createElement(f), c.async = 0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://tags.srv.stackadapt.com/events.js");
    saq("rt", "iN1fsE80lshc3R1aDECw4A");</script>
<noscript><img src="https://srv.stackadapt.com/rt?sid=iN1fsE80lshc3R1aDECw4A" width="1" height="1"></noscript>
<script type="text/javascript" id="">!function (b, e, f, g, a, c, d) {
        b.fbq || (a = b.fbq = function () {
            a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
        }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "1830847637154248");
    fbq("track", "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1830847637154248&amp;ev=PageView&amp;noscript=1"></noscript>
<script type="text/javascript" id="">fbq("track", "ViewContent", {content_type: "ncte"});</script>
<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="../../English Education - NCTE_files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
        data-gtm-yt-inspected-1_25="true"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
<script src="../../English Education - NCTE_files/adsct" type="text/javascript"></script>
</body>
</html>