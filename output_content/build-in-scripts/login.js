(window.webpackJsonp = window.webpackJsonp || []).push([[92], {
    0: function(e, t, n) {
        "use strict";
        function r(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter(function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                })),
                n.push.apply(n, r)
            }
            return n
        }
        function i(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? r(Object(n), !0).forEach(function(t) {
                    d()(e, t, n[t])
                }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : r(Object(n)).forEach(function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                })
            }
            return e
        }
        function a(e) {
            "loading" !== document.readyState ? e() : document.addEventListener("DOMContentLoaded", e)
        }
        function o() {
            var e, t = navigator, n = t.userAgent;
            return n.match(/chrome|chromium|crios/i) ? e = "chrome" : n.match(/firefox|fxios/i) ? e = "firefox" : n.match(/safari/i) ? e = "safari" : n.match(/opr\//i) ? e = "opera" : n.match(/edg/i) && (e = "edge"),
            e
        }
        function s(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "/support/"
              , n = new URL(window.location.href).pathname
              , r = n.split(t)[0];
            return r ? "".concat(r).concat(e) : e
        }
        function c(e, t, n) {
            var r = e.hasAttribute("disabled")
              , i = JSON.stringify(t) !== JSON.stringify(n);
            i ? r && e.removeAttribute("disabled") : !r && e.setAttribute("disabled", !0)
        }
        n.d(t, "i", function() {
            return a
        }),
        n.d(t, "d", function() {
            return y
        }),
        n.d(t, "p", function() {
            return g
        }),
        n.d(t, "v", function() {
            return w
        }),
        n.d(t, "r", function() {
            return k
        }),
        n.d(t, "K", function() {
            return x
        }),
        n.d(t, "I", function() {
            return _
        }),
        n.d(t, "t", function() {
            return S
        }),
        n.d(t, "G", function() {
            return E
        }),
        n.d(t, "E", function() {
            return T
        }),
        n.d(t, "b", function() {
            return O
        }),
        n.d(t, "k", function() {
            return j
        }),
        n.d(t, "f", function() {
            return L
        }),
        n.d(t, "M", function() {
            return C
        }),
        n.d(t, "z", function() {
            return q
        }),
        n.d(t, "o", function() {
            return A
        }),
        n.d(t, "w", function() {
            return I
        }),
        n.d(t, "C", function() {
            return m
        }),
        n.d(t, "B", function() {
            return v
        }),
        n.d(t, "m", function() {
            return N
        }),
        n.d(t, "H", function() {
            return P
        }),
        n.d(t, "A", function() {
            return D
        }),
        n.d(t, "n", function() {
            return M
        }),
        n.d(t, "e", function() {
            return R
        }),
        n.d(t, "l", function() {
            return F
        }),
        n.d(t, "j", function() {
            return B
        }),
        n.d(t, "c", function() {
            return H
        }),
        n.d(t, "y", function() {
            return z
        }),
        n.d(t, "h", function() {
            return V
        }),
        n.d(t, "L", function() {
            return W
        }),
        n.d(t, "J", function() {
            return c
        }),
        n.d(t, "q", function() {
            return U
        }),
        n.d(t, "s", function() {
            return J
        }),
        n.d(t, "D", function() {
            return $
        }),
        n.d(t, "a", function() {
            return o
        }),
        n.d(t, "x", function() {
            return s
        }),
        n.d(t, "u", function() {
            return X
        }),
        n.d(t, "g", function() {
            return Y
        }),
        n.d(t, "F", function() {
            return G
        });
        var u = n(1)
          , l = n.n(u)
          , f = n(8)
          , d = n.n(f)
          , p = n(16)
          , h = n(3)
          , m = function(e) {
            var t = document.createElement("div");
            return t.textContent = e,
            t.innerHTML.replace(/"/g, "&quot;")
        }
          , v = function(e) {
            try {
                return encodeURIComponent(e)
            } catch (t) {
                return e
            }
        }
          , g = function() {
            return window.localStorage.getItem("recentSearches") ? JSON.parse(window.localStorage.getItem("recentSearches")) : []
        }
          , y = function() {
            localStorage.setItem("recentSearches", "")
        }
          , b = function() {
            return window.store.currentLocale || window.store.defaultLocale
        }
          , w = function() {
            var e = document.querySelector(".fw-recent-searches")
              , t = g();
            e.innerHTML = t.map(function(e) {
                return '<li><a class="ps-32 line-clamp-2" href="/'.concat(b(), "/support/search?term=").concat(v(e), '">').concat(m(e), "</a></li>")
            }).join("")
        }
          , k = function(e, t) {
            return e && e.classList.contains(t)
        }
          , x = function(e) {
            var t = [].concat(e);
            t.forEach(function(e) {
                e && e.classList.toggle("d-none")
            })
        }
          , _ = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "primary"
              , n = [].concat(e);
            n.forEach(function(e) {
                k(e, "btn-".concat(t)) ? e.classList.replace("btn-".concat(t), "btn-outline-".concat(t)) : e.classList.replace("btn-outline-".concat(t), "btn-".concat(t))
            })
        }
          , S = function(e) {
            var t = [].concat(e);
            t.forEach(function(e) {
                e && !e.classList.contains("d-none") && e.classList.add("d-none")
            })
        }
          , E = function(e) {
            var t = [].concat(e);
            t.forEach(function(e) {
                e && e.classList.contains("d-none") && e.classList.remove("d-none")
            })
        }
          , T = function(e, t) {
            Object.keys(t).forEach(function(n) {
                e.setAttribute(n, t[n])
            })
        }
          , O = function(e) {
            var t = document.createElement("input");
            T(t, {
                type: "hidden",
                name: "authenticity_token",
                value: window.csrfToken
            }),
            e.appendChild(t)
        }
          , j = function(e, t) {
            return fetch(e, i(i({}, t), {}, {
                headers: {
                    "X-CSRF-Token": window.csrfToken
                }
            }))
        }
          , L = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 300
              , n = null;
            return function() {
                for (var r = arguments.length, i = new Array(r), a = 0; r > a; a++)
                    i[a] = arguments[a];
                clearTimeout(n),
                n = setTimeout(function() {
                    e.apply(void 0, i)
                }, t)
            }
        }
          , C = function(e, t) {
            e && e.addEventListener("change", function(e) {
                var t = {};
                t[e.target.id] = e.target.value,
                Object(h.d)(e.target, Object(h.a)(e.target), t)
            }),
            t && EventManager.on("click", t, function() {
                return e.dataset.formChanged = !1,
                Object(h.c)(e, Object(h.b)(e)) ? Promise.resolve() : Promise.reject()
            })
        }
          , q = function(e) {
            [].concat(l()(e.querySelectorAll(".form-group .form-control")), l()(e.querySelectorAll(".form-group .form-check-input"))).forEach(function(e) {
                k(e, "invalid") && (e.classList.remove("invalid"),
                "checkbox" === e.type ? (e.nextElementSibling.nextElementSibling.classList.remove("d-block"),
                e.nextElementSibling.nextElementSibling.classList.add("d-none")) : (e.nextElementSibling.classList.remove("d-block"),
                e.nextElementSibling.classList.add("d-none")))
            })
        }
          , A = function(e) {
            return e.charCode ? e.charCode : e.keyCode ? e.keyCode : e.which ? e.which : 0
        }
          , I = function(e) {
            var t = A(e);
            return t >= 48 && 57 >= t || t >= 65 && 90 >= t || t >= 96 && 105 >= t || 8 === t || 32 === t ? !0 : !1
        }
          , P = function(e, t) {
            return sessionStorage.setItem(e, JSON.stringify(t))
        }
          , N = function(e) {
            return sessionStorage.getItem(e) ? JSON.parse(sessionStorage.getItem(e)) : void 0
        }
          , D = function(e) {
            return sessionStorage.removeItem(e)
        }
          , M = function(e) {
            var t = ["Bytes", "KB", "MB", "GB", "TB"];
            if (!e)
                return "0 Byte";
            var n = parseInt(Math.floor(Math.log(e) / Math.log(1024)));
            return "".concat(Math.round(e / Math.pow(1024, n), 2), " ").concat(t[n])
        }
          , R = function(e) {
            return e.replace(/[A-Z]/g, function(e, t) {
                return (0 !== t ? "-" : "") + e.toLowerCase()
            })
        }
          , F = function(e, t) {
            for (var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null; e && e.tagName !== t.toUpperCase(); ) {
                if (n && e.tagName === n)
                    return null;
                e = e.parentElement
            }
            return e
        }
          , B = {
            email: {
                presence: !0,
                email: !0
            }
        }
          , H = 50
          , z = function() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : []
              , t = {}
              , n = new URLSearchParams(document.location.search);
            return n.forEach(function(n, r) {
                var i = decodeURIComponent(n);
                e.includes(r) || (r in t ? t[r].push(i) : t[r] = [i])
            }),
            t
        }
          , V = function(e) {
            return JSON.parse(JSON.stringify(e))
        }
          , W = function(e) {
            if (window.history.replaceState) {
                var t = "".concat(window.location.protocol, "//").concat(window.location.host).concat(window.location.pathname, "?").concat(e);
                window.history.replaceState({
                    path: t
                }, "", t)
            }
        }
          , U = function(e) {
            return "choicesInstance"in e
        }
          , J = function(e) {
            return "_flatpickr"in e
        }
          , $ = function(e) {
            return e.offsetHeight + e.scrollTop >= e.scrollHeight
        }
          , X = function(e) {
            var t = {
                altInput: !0,
                altInputClass: "form-control alt-flatpickr-input",
                altFormat: "j M, Y",
                dateFormat: "Y-m-d"
            };
            e.querySelectorAll('input[type="date"]').forEach(function(e) {
                Object(p.a)(e, t)
            })
        }
          , Y = function(e) {
            try {
                var t = e ? String(e) : "";
                return t.replace(/&lt;?/g, "<").replace(/&gt;?/g, ">")
            } catch (n) {
                return e
            }
        }
          , G = function(e) {
            var t, n, r, i;
            null !== e && void 0 !== e && null !== (t = e.defaults) && void 0 !== t && t.options && null !== (n = window) && void 0 !== n && null !== (r = n.store) && void 0 !== r && null !== (i = r.portalLaunchParty) && void 0 !== i && i.enableStrictSearch && (e.defaults.options.searchFields = ["label"],
            e.defaults.options.fuseOptions = {
                threshold: .1,
                ignoreLocation: !0,
                distance: 1e3
            })
        }
    },
    185: function(e, t, n) {
        "use strict";
        n.r(t);
        var r = (n(33),
        n(79))
          , i = (n.n(r),
        n(0))
          , a = n(7);
        Object(i.i)(function() {
            var e = document.getElementById("new_user_session")
              , t = document.getElementById("password_reset")
              , n = document.querySelector(".login-button")
              , r = document.querySelector(".password-forgot-button")
              , o = document.getElementById("loginForm")
              , s = document.getElementById("forgetPassForm")
              , c = document.getElementById("forgetPassLink")
              , u = document.getElementById("loginFormLink");
            document.getElementById("emailInput").focus(),
            Object(i.M)(e, n),
            Object(i.M)(t, r),
            ["click", "keypress"].forEach(function(t) {
                c.addEventListener(t, function(e) {
                    e.preventDefault(),
                    Object(a.a)(e) === !0 && (o.classList.add("d-none"),
                    s.classList.remove("d-none"))
                }),
                u.addEventListener(t, function(e) {
                    e.preventDefault(),
                    Object(a.a)(e) === !0 && (s.classList.add("d-none"),
                    o.classList.remove("d-none"))
                }),
                n.addEventListener(t, function(t) {
                    if ("true" === n.dataset.recaptchaEnterprise) {
                        var r = document.getElementById("recaptcha-frame");
                        r ? (t.preventDefault(),
                        r.contentWindow.recaptchaV3(),
                        setTimeout(function() {
                            "true" !== e.dataset.errors && e.submit()
                        }, 700)) : "true" !== e.dataset.errors && e.submit()
                    } else
                        "true" !== e.dataset.errors && e.submit()
                })
            })
        })
    },
    24: function(e, t, n) {
        "use strict";
        function r(e, t) {
            function n(e) {
                var t = e.search.records.map(function(e) {
                    return {
                        label: e.data[e.metadata.primary_field_name],
                        value: e.display_id
                    }
                })
                  , n = i.config.choices.find(function(e) {
                    return e.placeholder
                });
                if (n.selected = !1,
                i.clearChoices(),
                i.setChoices([n].concat(t)),
                r && !t.length) {
                    var a = "function" == typeof i.config.noResultsText ? i.config.noResultsText() : i.config.noResultsText
                      , o = i._getTemplate("notice", a, "no-results");
                    i.choiceList.element.append(o)
                }
                i.containerInner.element.querySelector(".choices__item--selectable").classList.remove("loading")
            }
            var r = t.detail.value
              , i = e.choicesInstance
              , a = e.id.split("helpdesk_ticket_custom_field_")[1]
              , o = e.dataset.primaryContactAssoc
              , c = "/api/_/support/ticket/custom_objects/search?term=".concat(encodeURIComponent(r), "&field_name=").concat(encodeURIComponent(a));
            o && (c += "&primary_contact_assoc=".concat(encodeURIComponent(o))),
            i.containerInner.element.querySelector(".choices__item--selectable").classList.add("loading"),
            Object(s.k)(c, {
                method: "GET"
            }).then(function(e) {
                return e.json()
            }).then(n)
        }
        function i(e) {
            e.querySelectorAll(c).forEach(u)
        }
        var a = n(9)
          , o = n.n(a)
          , s = n(0)
          , c = '[data-lookup-field="true"]'
          , u = function(e) {
            var t = {
                searchEnabled: !0,
                searchPlaceholderValue: window.I18n.t("portal_js_translations.please_enter_one_or_more"),
                shouldSort: !1,
                removeItemButton: !0,
                classNames: {
                    containerOuter: "choices form-select hide-default-option"
                },
                noResultsText: window.I18n.t("portal_js_translations.search.sr_no_result_msg"),
                callbackOnInit: function() {
                    var e, t = this.containerInner.element.querySelector("select"), n = t.dataset, r = n.selectedRecordId, i = n.selectedRecordText;
                    if (i)
                        e = {
                            label: i,
                            value: r
                        };
                    else {
                        var a = t.querySelector("option").textContent;
                        e = {
                            label: a,
                            value: ""
                        }
                    }
                    this.setValue([e])
                }
            };
            e.choicesInstance = new o.a(e,t);
            var n;
            e.addEventListener("search", function(t) {
                var i;
                null === (i = e.choicesInstance.choiceList.getChild(".has-no-results")) || void 0 === i ? void 0 : i.remove(),
                clearTimeout(n),
                n = setTimeout(function() {
                    r(e, t)
                }, 250)
            })
        };
        t.a = i
    },
    3: function(e, t, n) {
        "use strict";
        n.d(t, "b", function() {
            return p
        }),
        n.d(t, "a", function() {
            return d
        }),
        n.d(t, "c", function() {
            return m
        }),
        n.d(t, "d", function() {
            return h
        });
        var r = n(2)
          , i = n.n(r)
          , a = n(1)
          , o = n.n(a)
          , s = n(10)
          , c = n.n(s)
          , u = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
              , n = t;
            switch (e.type) {
            case "email":
                "" !== e.value && (n.email = {
                    message: window.I18n.translate("portal_validation.email")
                });
                break;
            case "url":
                "" !== e.value && (n.url = {
                    message: window.I18n.translate("portal_validation.url")
                });
                break;
            case "text":
                "" !== e.value && (e.dataset.decimal || e.dataset.number) && (e.dataset.decimal && (n.format = {
                    pattern: /^-?\d+(\.\d{0,2})?$/i,
                    message: window.I18n.translate("portal_validation.decimal")
                }),
                e.dataset.number && (n.format = {
                    pattern: /^-?\d+$/i,
                    message: window.I18n.translate("portal_validation.number")
                }))
            }
            return n
        }
          , l = function(e, t) {
            if (e) {
                var n = document.getElementById(e)
                  , r = document.querySelector(".invalid-feedback.".concat(e));
                n && n.classList.add("invalid"),
                r && (r.innerHTML = t,
                r.classList.add("d-block"))
            }
        }
          , f = function(e) {
            if (e) {
                var t = document.getElementById(e)
                  , n = document.querySelector(".invalid-feedback.".concat(e));
                t && t.classList.remove("invalid"),
                n && (n.classList.remove("d-block"),
                n.innerHTML = "")
            }
        }
          , d = function(e) {
            var t = {}
              , n = u(e);
            return Object.keys(n).length && (t[e.id] = n),
            t
        }
          , p = function(e) {
            var t = {};
            return [].concat(o()(e.querySelectorAll(":not(.d-none).form-group .form-control")), o()(e.querySelectorAll(":not(.d-none).form-check .form-check-input")), o()(e.querySelectorAll(".nested_field :not(.d-none).form-check .form-check-input"))).forEach(function(e) {
                var n = u(e);
                e.required && "" !== e.id && (n.presence = {
                    message: window.I18n.translate("portal_validation.required"),
                    allowEmpty: !1
                }),
                Object.keys(n).length && (t[e.id] = n)
            }),
            t
        }
          , h = function(e, t, n) {
            f(e.id);
            var r = c()(n, t, {
                fullMessages: !1
            });
            if (r) {
                var a = i()(r[e.id], 1)
                  , o = a[0];
                l(e.id, o)
            }
        }
          , m = function(e, t) {
            var n = {};
            [].concat(o()(e.querySelectorAll(":not(.d-none).form-group .form-control")), o()(e.querySelectorAll(":not(.d-none).form-check .form-check-input")), o()(e.querySelectorAll(".nested_field :not(.d-none).form-check .form-check-input"))).forEach(function(e) {
                f(e.id),
                "checkbox" === e.type ? n[e.id] = e.checked ? "true" : "" : "textarea" === e.type && e.classList.contains("rich-editor") ? n[e.id] = e.previousElementSibling.querySelector(".fr-element").innerText : n[e.id] = e.value
            });
            var r = c()(n, t, {
                fullMessages: !1
            });
            return r ? (e.dataset.errors = !0,
            Object.entries(r).forEach(function(e) {
                var t = i()(e, 2)
                  , n = t[0]
                  , r = t[1]
                  , a = i()(r, 1)
                  , o = a[0];
                l(n, o)
            }),
            document.querySelector(".invalid").focus(),
            !1) : (e.dataset.errors = !1,
            !0)
        }
    },
    33: function(e, t, n) {
        "use strict";
        var r = n(9)
          , i = n.n(r)
          , a = n(0)
          , o = n(24);
        Object(a.i)(function() {
            document.querySelectorAll(".choices").forEach(function(e) {
                var t = {
                    searchEnabled: e.options && e.options.length > 3,
                    shouldSort: !1,
                    classNames: {
                        containerOuter: "choices form-select"
                    },
                    searchResultLimit: 25,
                    noResultsText: window.I18n.t("portal_js_translations.search.sr_no_result_msg"),
                    callbackOnInit: function() {
                        var e = document.querySelector(".choices.form-select")
                          , t = e.parentElement.querySelector("label") && e.parentElement.querySelector("label").textContent;
                        t && e.setAttribute("aria-label", t)
                    }
                };
                e.choicesInstance = new i.a(e,t)
            }),
            Object(o.a)(document)
        })
    },
    7: function(e, t, n) {
        "use strict";
        function r(e) {
            var t;
            if ("click" === e.type)
                t = !0;
            else if ("keypress" === e.type) {
                var n = e.charCode || e.keyCode;
                (32 === n || 13 === n) && (t = !0)
            } else
                t = !1;
            return t
        }
        t.a = r
    },
    79: function(e, t) {
        var n = function(e, t) {
            function n(n) {
                var r = n.data;
                switch (r.type) {
                case "token":
                    if (t)
                        t(r.token);
                    else {
                        var o = "g-recaptcha-response"
                          , s = document.getElementById(o);
                        if (!s) {
                            var c = jQuery("#recaptcha-frame").closest("form");
                            s = document.createElement("input"),
                            s.type = "hidden",
                            s.name = o,
                            s.id = o,
                            c.append(s)
                        }
                        s.value = r.token
                    }
                    break;
                case "expand":
                    if (e.height = i.expand.height,
                    e.width = i.expand.width,
                    e.scrollIntoView(),
                    r.recaptchaFixEnabled) {
                        var u = document.querySelector(".recaptcha-frame").contentWindow
                          , l = u.document.querySelector("div:last-child div:last-child");
                        l && (l.style.height = a)
                    }
                    break;
                case "minimize":
                    e.height = i.minimize.height,
                    e.width = i.minimize.width
                }
            }
            var r = {};
            r.channel = new MessageChannel,
            r.channel.port1.onmessage = n,
            e.contentWindow.postMessage("init", window.location.origin, [r.channel.port2]),
            "MutationObserver"in window || (e.style.resize = "both");
            var i = {
                minimize: {
                    height: "100px",
                    width: "320px"
                },
                expand: {
                    height: "500px",
                    width: "350px"
                }
            }
              , a = "490px"
        };
        window.onload = function() {
            var e = document.getElementById("recaptcha-frame");
            return e && "false" !== e.dataset.selfinvoke ? void n(e) : !0
        }
    }
}, [[185, 0]]]);
