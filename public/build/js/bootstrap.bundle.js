!(function (t, e) {
  "object" == typeof exports && "undefined" != typeof module
    ? e(exports, require("jquery"))
    : "function" == typeof define && define.amd
    ? define(["exports", "jquery"], e)
    : e(((t = t || self).bootstrap = {}), t.jQuery);
})(this, function (t, e) {
  "use strict";
  function n(t, e) {
    for (var n = 0; n < e.length; n++) {
      var i = e[n];
      (i.enumerable = i.enumerable || !1),
        (i.configurable = !0),
        "value" in i && (i.writable = !0),
        Object.defineProperty(t, i.key, i);
    }
  }
  function i(t, e, i) {
    return e && n(t.prototype, e), i && n(t, i), t;
  }
  function o(t, e, n) {
    return (
      e in t
        ? Object.defineProperty(t, e, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0,
          })
        : (t[e] = n),
      t
    );
  }
  function r(t, e) {
    var n = Object.keys(t);
    if (Object.getOwnPropertySymbols) {
      var i = Object.getOwnPropertySymbols(t);
      e &&
        (i = i.filter(function (e) {
          return Object.getOwnPropertyDescriptor(t, e).enumerable;
        })),
        n.push.apply(n, i);
    }
    return n;
  }
  function s(t) {
    for (var e = 1; e < arguments.length; e++) {
      var n = null != arguments[e] ? arguments[e] : {};
      e % 2
        ? r(Object(n), !0).forEach(function (e) {
            o(t, e, n[e]);
          })
        : Object.getOwnPropertyDescriptors
        ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n))
        : r(Object(n)).forEach(function (e) {
            Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e));
          });
    }
    return t;
  }
  e = e && e.hasOwnProperty("default") ? e.default : e;
  var a = "transitionend";
  function l(t) {
    var n = this,
      i = !1;
    return (
      e(this).one(c.TRANSITION_END, function () {
        i = !0;
      }),
      setTimeout(function () {
        i || c.triggerTransitionEnd(n);
      }, t),
      this
    );
  }
  var c = {
    TRANSITION_END: "bsTransitionEnd",
    getUID: function (t) {
      do {
        t += ~~(1e6 * Math.random());
      } while (document.getElementById(t));
      return t;
    },
    getSelectorFromElement: function (t) {
      var e = t.getAttribute("data-target");
      if (!e || "#" === e) {
        var n = t.getAttribute("href");
        e = n && "#" !== n ? n.trim() : "";
      }
      try {
        return document.querySelector(e) ? e : null;
      } catch (t) {
        return null;
      }
    },
    getTransitionDurationFromElement: function (t) {
      if (!t) return 0;
      var n = e(t).css("transition-duration"),
        i = e(t).css("transition-delay"),
        o = parseFloat(n),
        r = parseFloat(i);
      return o || r
        ? ((n = n.split(",")[0]),
          (i = i.split(",")[0]),
          1e3 * (parseFloat(n) + parseFloat(i)))
        : 0;
    },
    reflow: function (t) {
      return t.offsetHeight;
    },
    triggerTransitionEnd: function (t) {
      e(t).trigger(a);
    },
    supportsTransitionEnd: function () {
      return Boolean(a);
    },
    isElement: function (t) {
      return (t[0] || t).nodeType;
    },
    typeCheckConfig: function (t, e, n) {
      for (var i in n)
        if (Object.prototype.hasOwnProperty.call(n, i)) {
          var o = n[i],
            r = e[i],
            s =
              r && c.isElement(r)
                ? "element"
                : ((a = r),
                  {}.toString
                    .call(a)
                    .match(/\s([a-z]+)/i)[1]
                    .toLowerCase());
          if (!new RegExp(o).test(s))
            throw new Error(
              t.toUpperCase() +
                ': Option "' +
                i +
                '" provided type "' +
                s +
                '" but expected type "' +
                o +
                '".'
            );
        }
      var a;
    },
    findShadowRoot: function (t) {
      if (!document.documentElement.attachShadow) return null;
      if ("function" == typeof t.getRootNode) {
        var e = t.getRootNode();
        return e instanceof ShadowRoot ? e : null;
      }
      return t instanceof ShadowRoot
        ? t
        : t.parentNode
        ? c.findShadowRoot(t.parentNode)
        : null;
    },
    jQueryDetection: function () {
      if (void 0 === e)
        throw new TypeError(
          "Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript."
        );
      var t = e.fn.jquery.split(" ")[0].split(".");
      if (
        (t[0] < 2 && t[1] < 9) ||
        (1 === t[0] && 9 === t[1] && t[2] < 1) ||
        t[0] >= 4
      )
        throw new Error(
          "Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0"
        );
    },
  };
  c.jQueryDetection(),
    (e.fn.emulateTransitionEnd = l),
    (e.event.special[c.TRANSITION_END] = {
      bindType: a,
      delegateType: a,
      handle: function (t) {
        if (e(t.target).is(this))
          return t.handleObj.handler.apply(this, arguments);
      },
    });
  var u = e.fn.alert,
    h = {
      CLOSE: "close.bs.alert",
      CLOSED: "closed.bs.alert",
      CLICK_DATA_API: "click.bs.alert.data-api",
    },
    f = "alert",
    d = "fade",
    p = "show",
    m = (function () {
      function t(t) {
        this._element = t;
      }
      var n = t.prototype;
      return (
        (n.close = function (t) {
          var e = this._element;
          t && (e = this._getRootElement(t)),
            this._triggerCloseEvent(e).isDefaultPrevented() ||
              this._removeElement(e);
        }),
        (n.dispose = function () {
          e.removeData(this._element, "bs.alert"), (this._element = null);
        }),
        (n._getRootElement = function (t) {
          var n = c.getSelectorFromElement(t),
            i = !1;
          return (
            n && (i = document.querySelector(n)),
            i || (i = e(t).closest("." + f)[0]),
            i
          );
        }),
        (n._triggerCloseEvent = function (t) {
          var n = e.Event(h.CLOSE);
          return e(t).trigger(n), n;
        }),
        (n._removeElement = function (t) {
          var n = this;
          if ((e(t).removeClass(p), e(t).hasClass(d))) {
            var i = c.getTransitionDurationFromElement(t);
            e(t)
              .one(c.TRANSITION_END, function (e) {
                return n._destroyElement(t, e);
              })
              .emulateTransitionEnd(i);
          } else this._destroyElement(t);
        }),
        (n._destroyElement = function (t) {
          e(t).detach().trigger(h.CLOSED).remove();
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this),
              o = i.data("bs.alert");
            o || ((o = new t(this)), i.data("bs.alert", o)),
              "close" === n && o[n](this);
          });
        }),
        (t._handleDismiss = function (t) {
          return function (e) {
            e && e.preventDefault(), t.close(this);
          };
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
        ]),
        t
      );
    })();
  e(document).on(
    h.CLICK_DATA_API,
    '[data-dismiss="alert"]',
    m._handleDismiss(new m())
  ),
    (e.fn.alert = m._jQueryInterface),
    (e.fn.alert.Constructor = m),
    (e.fn.alert.noConflict = function () {
      return (e.fn.alert = u), m._jQueryInterface;
    });
  var g = e.fn.button,
    _ = "active",
    v = "btn",
    b = "focus",
    E = '[data-toggle^="button"]',
    y = '[data-toggle="buttons"]',
    T = '[data-toggle="button"]',
    w = '[data-toggle="buttons"] .btn',
    C = 'input:not([type="hidden"])',
    S = ".active",
    D = ".btn",
    I = {
      CLICK_DATA_API: "click.bs.button.data-api",
      FOCUS_BLUR_DATA_API: "focus.bs.button.data-api blur.bs.button.data-api",
      LOAD_DATA_API: "load.bs.button.data-api",
    },
    A = (function () {
      function t(t) {
        this._element = t;
      }
      var n = t.prototype;
      return (
        (n.toggle = function () {
          var t = !0,
            n = !0,
            i = e(this._element).closest(y)[0];
          if (i) {
            var o = this._element.querySelector(C);
            if (o) {
              if ("radio" === o.type)
                if (o.checked && this._element.classList.contains(_)) t = !1;
                else {
                  var r = i.querySelector(S);
                  r && e(r).removeClass(_);
                }
              else
                "checkbox" === o.type
                  ? "LABEL" === this._element.tagName &&
                    o.checked === this._element.classList.contains(_) &&
                    (t = !1)
                  : (t = !1);
              t &&
                ((o.checked = !this._element.classList.contains(_)),
                e(o).trigger("change")),
                o.focus(),
                (n = !1);
            }
          }
          this._element.hasAttribute("disabled") ||
            this._element.classList.contains("disabled") ||
            (n &&
              this._element.setAttribute(
                "aria-pressed",
                !this._element.classList.contains(_)
              ),
            t && e(this._element).toggleClass(_));
        }),
        (n.dispose = function () {
          e.removeData(this._element, "bs.button"), (this._element = null);
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this).data("bs.button");
            i || ((i = new t(this)), e(this).data("bs.button", i)),
              "toggle" === n && i[n]();
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
        ]),
        t
      );
    })();
  e(document)
    .on(I.CLICK_DATA_API, E, function (t) {
      var n = t.target;
      if (
        (e(n).hasClass(v) || (n = e(n).closest(D)[0]),
        !n || n.hasAttribute("disabled") || n.classList.contains("disabled"))
      )
        t.preventDefault();
      else {
        var i = n.querySelector(C);
        if (
          i &&
          (i.hasAttribute("disabled") || i.classList.contains("disabled"))
        )
          return void t.preventDefault();
        A._jQueryInterface.call(e(n), "toggle");
      }
    })
    .on(I.FOCUS_BLUR_DATA_API, E, function (t) {
      var n = e(t.target).closest(D)[0];
      e(n).toggleClass(b, /^focus(in)?$/.test(t.type));
    }),
    e(window).on(I.LOAD_DATA_API, function () {
      for (
        var t = [].slice.call(document.querySelectorAll(w)),
          e = 0,
          n = t.length;
        e < n;
        e++
      ) {
        var i = t[e],
          o = i.querySelector(C);
        o.checked || o.hasAttribute("checked")
          ? i.classList.add(_)
          : i.classList.remove(_);
      }
      for (
        var r = 0, s = (t = [].slice.call(document.querySelectorAll(T))).length;
        r < s;
        r++
      ) {
        var a = t[r];
        "true" === a.getAttribute("aria-pressed")
          ? a.classList.add(_)
          : a.classList.remove(_);
      }
    }),
    (e.fn.button = A._jQueryInterface),
    (e.fn.button.Constructor = A),
    (e.fn.button.noConflict = function () {
      return (e.fn.button = g), A._jQueryInterface;
    });
  var O = "carousel",
    N = ".bs.carousel",
    L = e.fn[O],
    k = {
      interval: 5e3,
      keyboard: !0,
      slide: !1,
      pause: "hover",
      wrap: !0,
      touch: !0,
    },
    P = {
      interval: "(number|boolean)",
      keyboard: "boolean",
      slide: "(boolean|string)",
      pause: "(string|boolean)",
      wrap: "boolean",
      touch: "boolean",
    },
    x = "next",
    j = "prev",
    H = "left",
    R = "right",
    M = {
      SLIDE: "slide.bs.carousel",
      SLID: "slid.bs.carousel",
      KEYDOWN: "keydown.bs.carousel",
      MOUSEENTER: "mouseenter.bs.carousel",
      MOUSELEAVE: "mouseleave.bs.carousel",
      TOUCHSTART: "touchstart.bs.carousel",
      TOUCHMOVE: "touchmove.bs.carousel",
      TOUCHEND: "touchend.bs.carousel",
      POINTERDOWN: "pointerdown.bs.carousel",
      POINTERUP: "pointerup.bs.carousel",
      DRAG_START: "dragstart.bs.carousel",
      LOAD_DATA_API: "load.bs.carousel.data-api",
      CLICK_DATA_API: "click.bs.carousel.data-api",
    },
    F = "carousel",
    W = "active",
    U = "slide",
    B = "carousel-item-right",
    q = "carousel-item-left",
    K = "carousel-item-next",
    V = "carousel-item-prev",
    Q = "pointer-event",
    Y = {
      ACTIVE: ".active",
      ACTIVE_ITEM: ".active.carousel-item",
      ITEM: ".carousel-item",
      ITEM_IMG: ".carousel-item img",
      NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
      INDICATORS: ".carousel-indicators",
      DATA_SLIDE: "[data-slide], [data-slide-to]",
      DATA_RIDE: '[data-ride="carousel"]',
    },
    G = { TOUCH: "touch", PEN: "pen" },
    X = (function () {
      function t(t, e) {
        (this._items = null),
          (this._interval = null),
          (this._activeElement = null),
          (this._isPaused = !1),
          (this._isSliding = !1),
          (this.touchTimeout = null),
          (this.touchStartX = 0),
          (this.touchDeltaX = 0),
          (this._config = this._getConfig(e)),
          (this._element = t),
          (this._indicatorsElement = this._element.querySelector(Y.INDICATORS)),
          (this._touchSupported =
            "ontouchstart" in document.documentElement ||
            navigator.maxTouchPoints > 0),
          (this._pointerEvent = Boolean(
            window.PointerEvent || window.MSPointerEvent
          )),
          this._addEventListeners();
      }
      var n = t.prototype;
      return (
        (n.next = function () {
          this._isSliding || this._slide(x);
        }),
        (n.nextWhenVisible = function () {
          !document.hidden &&
            e(this._element).is(":visible") &&
            "hidden" !== e(this._element).css("visibility") &&
            this.next();
        }),
        (n.prev = function () {
          this._isSliding || this._slide(j);
        }),
        (n.pause = function (t) {
          t || (this._isPaused = !0),
            this._element.querySelector(Y.NEXT_PREV) &&
              (c.triggerTransitionEnd(this._element), this.cycle(!0)),
            clearInterval(this._interval),
            (this._interval = null);
        }),
        (n.cycle = function (t) {
          t || (this._isPaused = !1),
            this._interval &&
              (clearInterval(this._interval), (this._interval = null)),
            this._config.interval &&
              !this._isPaused &&
              (this._interval = setInterval(
                (document.visibilityState
                  ? this.nextWhenVisible
                  : this.next
                ).bind(this),
                this._config.interval
              ));
        }),
        (n.to = function (t) {
          var n = this;
          this._activeElement = this._element.querySelector(Y.ACTIVE_ITEM);
          var i = this._getItemIndex(this._activeElement);
          if (!(t > this._items.length - 1 || t < 0))
            if (this._isSliding)
              e(this._element).one(M.SLID, function () {
                return n.to(t);
              });
            else {
              if (i === t) return this.pause(), void this.cycle();
              var o = t > i ? x : j;
              this._slide(o, this._items[t]);
            }
        }),
        (n.dispose = function () {
          e(this._element).off(N),
            e.removeData(this._element, "bs.carousel"),
            (this._items = null),
            (this._config = null),
            (this._element = null),
            (this._interval = null),
            (this._isPaused = null),
            (this._isSliding = null),
            (this._activeElement = null),
            (this._indicatorsElement = null);
        }),
        (n._getConfig = function (t) {
          return (t = s({}, k, {}, t)), c.typeCheckConfig(O, t, P), t;
        }),
        (n._handleSwipe = function () {
          var t = Math.abs(this.touchDeltaX);
          if (!(t <= 40)) {
            var e = t / this.touchDeltaX;
            (this.touchDeltaX = 0), e > 0 && this.prev(), e < 0 && this.next();
          }
        }),
        (n._addEventListeners = function () {
          var t = this;
          this._config.keyboard &&
            e(this._element).on(M.KEYDOWN, function (e) {
              return t._keydown(e);
            }),
            "hover" === this._config.pause &&
              e(this._element)
                .on(M.MOUSEENTER, function (e) {
                  return t.pause(e);
                })
                .on(M.MOUSELEAVE, function (e) {
                  return t.cycle(e);
                }),
            this._config.touch && this._addTouchEventListeners();
        }),
        (n._addTouchEventListeners = function () {
          var t = this;
          if (this._touchSupported) {
            var n = function (e) {
                t._pointerEvent && G[e.originalEvent.pointerType.toUpperCase()]
                  ? (t.touchStartX = e.originalEvent.clientX)
                  : t._pointerEvent ||
                    (t.touchStartX = e.originalEvent.touches[0].clientX);
              },
              i = function (e) {
                t._pointerEvent &&
                  G[e.originalEvent.pointerType.toUpperCase()] &&
                  (t.touchDeltaX = e.originalEvent.clientX - t.touchStartX),
                  t._handleSwipe(),
                  "hover" === t._config.pause &&
                    (t.pause(),
                    t.touchTimeout && clearTimeout(t.touchTimeout),
                    (t.touchTimeout = setTimeout(function (e) {
                      return t.cycle(e);
                    }, 500 + t._config.interval)));
              };
            e(this._element.querySelectorAll(Y.ITEM_IMG)).on(
              M.DRAG_START,
              function (t) {
                return t.preventDefault();
              }
            ),
              this._pointerEvent
                ? (e(this._element).on(M.POINTERDOWN, function (t) {
                    return n(t);
                  }),
                  e(this._element).on(M.POINTERUP, function (t) {
                    return i(t);
                  }),
                  this._element.classList.add(Q))
                : (e(this._element).on(M.TOUCHSTART, function (t) {
                    return n(t);
                  }),
                  e(this._element).on(M.TOUCHMOVE, function (e) {
                    return (function (e) {
                      e.originalEvent.touches &&
                      e.originalEvent.touches.length > 1
                        ? (t.touchDeltaX = 0)
                        : (t.touchDeltaX =
                            e.originalEvent.touches[0].clientX - t.touchStartX);
                    })(e);
                  }),
                  e(this._element).on(M.TOUCHEND, function (t) {
                    return i(t);
                  }));
          }
        }),
        (n._keydown = function (t) {
          if (!/input|textarea/i.test(t.target.tagName))
            switch (t.which) {
              case 37:
                t.preventDefault(), this.prev();
                break;
              case 39:
                t.preventDefault(), this.next();
            }
        }),
        (n._getItemIndex = function (t) {
          return (
            (this._items =
              t && t.parentNode
                ? [].slice.call(t.parentNode.querySelectorAll(Y.ITEM))
                : []),
            this._items.indexOf(t)
          );
        }),
        (n._getItemByDirection = function (t, e) {
          var n = t === x,
            i = t === j,
            o = this._getItemIndex(e),
            r = this._items.length - 1;
          if (((i && 0 === o) || (n && o === r)) && !this._config.wrap)
            return e;
          var s = (o + (t === j ? -1 : 1)) % this._items.length;
          return -1 === s
            ? this._items[this._items.length - 1]
            : this._items[s];
        }),
        (n._triggerSlideEvent = function (t, n) {
          var i = this._getItemIndex(t),
            o = this._getItemIndex(this._element.querySelector(Y.ACTIVE_ITEM)),
            r = e.Event(M.SLIDE, {
              relatedTarget: t,
              direction: n,
              from: o,
              to: i,
            });
          return e(this._element).trigger(r), r;
        }),
        (n._setActiveIndicatorElement = function (t) {
          if (this._indicatorsElement) {
            var n = [].slice.call(
              this._indicatorsElement.querySelectorAll(Y.ACTIVE)
            );
            e(n).removeClass(W);
            var i = this._indicatorsElement.children[this._getItemIndex(t)];
            i && e(i).addClass(W);
          }
        }),
        (n._slide = function (t, n) {
          var i,
            o,
            r,
            s = this,
            a = this._element.querySelector(Y.ACTIVE_ITEM),
            l = this._getItemIndex(a),
            u = n || (a && this._getItemByDirection(t, a)),
            h = this._getItemIndex(u),
            f = Boolean(this._interval);
          if (
            (t === x
              ? ((i = q), (o = K), (r = H))
              : ((i = B), (o = V), (r = R)),
            u && e(u).hasClass(W))
          )
            this._isSliding = !1;
          else if (
            !this._triggerSlideEvent(u, r).isDefaultPrevented() &&
            a &&
            u
          ) {
            (this._isSliding = !0),
              f && this.pause(),
              this._setActiveIndicatorElement(u);
            var d = e.Event(M.SLID, {
              relatedTarget: u,
              direction: r,
              from: l,
              to: h,
            });
            if (e(this._element).hasClass(U)) {
              e(u).addClass(o), c.reflow(u), e(a).addClass(i), e(u).addClass(i);
              var p = parseInt(u.getAttribute("data-interval"), 10);
              p
                ? ((this._config.defaultInterval =
                    this._config.defaultInterval || this._config.interval),
                  (this._config.interval = p))
                : (this._config.interval =
                    this._config.defaultInterval || this._config.interval);
              var m = c.getTransitionDurationFromElement(a);
              e(a)
                .one(c.TRANSITION_END, function () {
                  e(u)
                    .removeClass(i + " " + o)
                    .addClass(W),
                    e(a).removeClass(W + " " + o + " " + i),
                    (s._isSliding = !1),
                    setTimeout(function () {
                      return e(s._element).trigger(d);
                    }, 0);
                })
                .emulateTransitionEnd(m);
            } else
              e(a).removeClass(W),
                e(u).addClass(W),
                (this._isSliding = !1),
                e(this._element).trigger(d);
            f && this.cycle();
          }
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this).data("bs.carousel"),
              o = s({}, k, {}, e(this).data());
            "object" == typeof n && (o = s({}, o, {}, n));
            var r = "string" == typeof n ? n : o.slide;
            if (
              (i || ((i = new t(this, o)), e(this).data("bs.carousel", i)),
              "number" == typeof n)
            )
              i.to(n);
            else if ("string" == typeof r) {
              if (void 0 === i[r])
                throw new TypeError('No method named "' + r + '"');
              i[r]();
            } else o.interval && o.ride && (i.pause(), i.cycle());
          });
        }),
        (t._dataApiClickHandler = function (n) {
          var i = c.getSelectorFromElement(this);
          if (i) {
            var o = e(i)[0];
            if (o && e(o).hasClass(F)) {
              var r = s({}, e(o).data(), {}, e(this).data()),
                a = this.getAttribute("data-slide-to");
              a && (r.interval = !1),
                t._jQueryInterface.call(e(o), r),
                a && e(o).data("bs.carousel").to(a),
                n.preventDefault();
            }
          }
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return k;
            },
          },
        ]),
        t
      );
    })();
  e(document).on(M.CLICK_DATA_API, Y.DATA_SLIDE, X._dataApiClickHandler),
    e(window).on(M.LOAD_DATA_API, function () {
      for (
        var t = [].slice.call(document.querySelectorAll(Y.DATA_RIDE)),
          n = 0,
          i = t.length;
        n < i;
        n++
      ) {
        var o = e(t[n]);
        X._jQueryInterface.call(o, o.data());
      }
    }),
    (e.fn[O] = X._jQueryInterface),
    (e.fn[O].Constructor = X),
    (e.fn[O].noConflict = function () {
      return (e.fn[O] = L), X._jQueryInterface;
    });
  var z = "collapse",
    $ = e.fn[z],
    J = { toggle: !0, parent: "" },
    Z = { toggle: "boolean", parent: "(string|element)" },
    tt = {
      SHOW: "show.bs.collapse",
      SHOWN: "shown.bs.collapse",
      HIDE: "hide.bs.collapse",
      HIDDEN: "hidden.bs.collapse",
      CLICK_DATA_API: "click.bs.collapse.data-api",
    },
    et = "show",
    nt = "collapse",
    it = "collapsing",
    ot = "collapsed",
    rt = "width",
    st = "height",
    at = {
      ACTIVES: ".show, .collapsing",
      DATA_TOGGLE: '[data-toggle="collapse"]',
    },
    lt = (function () {
      function t(t, e) {
        (this._isTransitioning = !1),
          (this._element = t),
          (this._config = this._getConfig(e)),
          (this._triggerArray = [].slice.call(
            document.querySelectorAll(
              '[data-toggle="collapse"][href="#' +
                t.id +
                '"],[data-toggle="collapse"][data-target="#' +
                t.id +
                '"]'
            )
          ));
        for (
          var n = [].slice.call(document.querySelectorAll(at.DATA_TOGGLE)),
            i = 0,
            o = n.length;
          i < o;
          i++
        ) {
          var r = n[i],
            s = c.getSelectorFromElement(r),
            a = [].slice
              .call(document.querySelectorAll(s))
              .filter(function (e) {
                return e === t;
              });
          null !== s &&
            a.length > 0 &&
            ((this._selector = s), this._triggerArray.push(r));
        }
        (this._parent = this._config.parent ? this._getParent() : null),
          this._config.parent ||
            this._addAriaAndCollapsedClass(this._element, this._triggerArray),
          this._config.toggle && this.toggle();
      }
      var n = t.prototype;
      return (
        (n.toggle = function () {
          e(this._element).hasClass(et) ? this.hide() : this.show();
        }),
        (n.show = function () {
          var n,
            i,
            o = this;
          if (
            !this._isTransitioning &&
            !e(this._element).hasClass(et) &&
            (this._parent &&
              0 ===
                (n = [].slice
                  .call(this._parent.querySelectorAll(at.ACTIVES))
                  .filter(function (t) {
                    return "string" == typeof o._config.parent
                      ? t.getAttribute("data-parent") === o._config.parent
                      : t.classList.contains(nt);
                  })).length &&
              (n = null),
            !(
              n &&
              (i = e(n).not(this._selector).data("bs.collapse")) &&
              i._isTransitioning
            ))
          ) {
            var r = e.Event(tt.SHOW);
            if ((e(this._element).trigger(r), !r.isDefaultPrevented())) {
              n &&
                (t._jQueryInterface.call(e(n).not(this._selector), "hide"),
                i || e(n).data("bs.collapse", null));
              var s = this._getDimension();
              e(this._element).removeClass(nt).addClass(it),
                (this._element.style[s] = 0),
                this._triggerArray.length &&
                  e(this._triggerArray)
                    .removeClass(ot)
                    .attr("aria-expanded", !0),
                this.setTransitioning(!0);
              var a = "scroll" + (s[0].toUpperCase() + s.slice(1)),
                l = c.getTransitionDurationFromElement(this._element);
              e(this._element)
                .one(c.TRANSITION_END, function () {
                  e(o._element).removeClass(it).addClass(nt).addClass(et),
                    (o._element.style[s] = ""),
                    o.setTransitioning(!1),
                    e(o._element).trigger(tt.SHOWN);
                })
                .emulateTransitionEnd(l),
                (this._element.style[s] = this._element[a] + "px");
            }
          }
        }),
        (n.hide = function () {
          var t = this;
          if (!this._isTransitioning && e(this._element).hasClass(et)) {
            var n = e.Event(tt.HIDE);
            if ((e(this._element).trigger(n), !n.isDefaultPrevented())) {
              var i = this._getDimension();
              (this._element.style[i] =
                this._element.getBoundingClientRect()[i] + "px"),
                c.reflow(this._element),
                e(this._element).addClass(it).removeClass(nt).removeClass(et);
              var o = this._triggerArray.length;
              if (o > 0)
                for (var r = 0; r < o; r++) {
                  var s = this._triggerArray[r],
                    a = c.getSelectorFromElement(s);
                  if (null !== a)
                    e([].slice.call(document.querySelectorAll(a))).hasClass(
                      et
                    ) || e(s).addClass(ot).attr("aria-expanded", !1);
                }
              this.setTransitioning(!0);
              this._element.style[i] = "";
              var l = c.getTransitionDurationFromElement(this._element);
              e(this._element)
                .one(c.TRANSITION_END, function () {
                  t.setTransitioning(!1),
                    e(t._element)
                      .removeClass(it)
                      .addClass(nt)
                      .trigger(tt.HIDDEN);
                })
                .emulateTransitionEnd(l);
            }
          }
        }),
        (n.setTransitioning = function (t) {
          this._isTransitioning = t;
        }),
        (n.dispose = function () {
          e.removeData(this._element, "bs.collapse"),
            (this._config = null),
            (this._parent = null),
            (this._element = null),
            (this._triggerArray = null),
            (this._isTransitioning = null);
        }),
        (n._getConfig = function (t) {
          return (
            ((t = s({}, J, {}, t)).toggle = Boolean(t.toggle)),
            c.typeCheckConfig(z, t, Z),
            t
          );
        }),
        (n._getDimension = function () {
          return e(this._element).hasClass(rt) ? rt : st;
        }),
        (n._getParent = function () {
          var n,
            i = this;
          c.isElement(this._config.parent)
            ? ((n = this._config.parent),
              void 0 !== this._config.parent.jquery &&
                (n = this._config.parent[0]))
            : (n = document.querySelector(this._config.parent));
          var o =
              '[data-toggle="collapse"][data-parent="' +
              this._config.parent +
              '"]',
            r = [].slice.call(n.querySelectorAll(o));
          return (
            e(r).each(function (e, n) {
              i._addAriaAndCollapsedClass(t._getTargetFromElement(n), [n]);
            }),
            n
          );
        }),
        (n._addAriaAndCollapsedClass = function (t, n) {
          var i = e(t).hasClass(et);
          n.length && e(n).toggleClass(ot, !i).attr("aria-expanded", i);
        }),
        (t._getTargetFromElement = function (t) {
          var e = c.getSelectorFromElement(t);
          return e ? document.querySelector(e) : null;
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this),
              o = i.data("bs.collapse"),
              r = s(
                {},
                J,
                {},
                i.data(),
                {},
                "object" == typeof n && n ? n : {}
              );
            if (
              (!o && r.toggle && /show|hide/.test(n) && (r.toggle = !1),
              o || ((o = new t(this, r)), i.data("bs.collapse", o)),
              "string" == typeof n)
            ) {
              if (void 0 === o[n])
                throw new TypeError('No method named "' + n + '"');
              o[n]();
            }
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return J;
            },
          },
        ]),
        t
      );
    })();
  e(document).on(tt.CLICK_DATA_API, at.DATA_TOGGLE, function (t) {
    "A" === t.currentTarget.tagName && t.preventDefault();
    var n = e(this),
      i = c.getSelectorFromElement(this),
      o = [].slice.call(document.querySelectorAll(i));
    e(o).each(function () {
      var t = e(this),
        i = t.data("bs.collapse") ? "toggle" : n.data();
      lt._jQueryInterface.call(t, i);
    });
  }),
    (e.fn[z] = lt._jQueryInterface),
    (e.fn[z].Constructor = lt),
    (e.fn[z].noConflict = function () {
      return (e.fn[z] = $), lt._jQueryInterface;
    });
  var ct =
      "undefined" != typeof window &&
      "undefined" != typeof document &&
      "undefined" != typeof navigator,
    ut = (function () {
      for (var t = ["Edge", "Trident", "Firefox"], e = 0; e < t.length; e += 1)
        if (ct && navigator.userAgent.indexOf(t[e]) >= 0) return 1;
      return 0;
    })();
  var ht =
    ct && window.Promise
      ? function (t) {
          var e = !1;
          return function () {
            e ||
              ((e = !0),
              window.Promise.resolve().then(function () {
                (e = !1), t();
              }));
          };
        }
      : function (t) {
          var e = !1;
          return function () {
            e ||
              ((e = !0),
              setTimeout(function () {
                (e = !1), t();
              }, ut));
          };
        };
  function ft(t) {
    return t && "[object Function]" === {}.toString.call(t);
  }
  function dt(t, e) {
    if (1 !== t.nodeType) return [];
    var n = t.ownerDocument.defaultView.getComputedStyle(t, null);
    return e ? n[e] : n;
  }
  function pt(t) {
    return "HTML" === t.nodeName ? t : t.parentNode || t.host;
  }
  function mt(t) {
    if (!t) return document.body;
    switch (t.nodeName) {
      case "HTML":
      case "BODY":
        return t.ownerDocument.body;
      case "#document":
        return t.body;
    }
    var e = dt(t),
      n = e.overflow,
      i = e.overflowX,
      o = e.overflowY;
    return /(auto|scroll|overlay)/.test(n + o + i) ? t : mt(pt(t));
  }
  function gt(t) {
    return t && t.referenceNode ? t.referenceNode : t;
  }
  var _t = ct && !(!window.MSInputMethodContext || !document.documentMode),
    vt = ct && /MSIE 10/.test(navigator.userAgent);
  function bt(t) {
    return 11 === t ? _t : 10 === t ? vt : _t || vt;
  }
  function Et(t) {
    if (!t) return document.documentElement;
    for (
      var e = bt(10) ? document.body : null, n = t.offsetParent || null;
      n === e && t.nextElementSibling;

    )
      n = (t = t.nextElementSibling).offsetParent;
    var i = n && n.nodeName;
    return i && "BODY" !== i && "HTML" !== i
      ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) &&
        "static" === dt(n, "position")
        ? Et(n)
        : n
      : t
      ? t.ownerDocument.documentElement
      : document.documentElement;
  }
  function yt(t) {
    return null !== t.parentNode ? yt(t.parentNode) : t;
  }
  function Tt(t, e) {
    if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement;
    var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING,
      i = n ? t : e,
      o = n ? e : t,
      r = document.createRange();
    r.setStart(i, 0), r.setEnd(o, 0);
    var s,
      a,
      l = r.commonAncestorContainer;
    if ((t !== l && e !== l) || i.contains(o))
      return "BODY" === (a = (s = l).nodeName) ||
        ("HTML" !== a && Et(s.firstElementChild) !== s)
        ? Et(l)
        : l;
    var c = yt(t);
    return c.host ? Tt(c.host, e) : Tt(t, yt(e).host);
  }
  function wt(t) {
    var e =
        "top" ===
        (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top")
          ? "scrollTop"
          : "scrollLeft",
      n = t.nodeName;
    if ("BODY" === n || "HTML" === n) {
      var i = t.ownerDocument.documentElement;
      return (t.ownerDocument.scrollingElement || i)[e];
    }
    return t[e];
  }
  function Ct(t, e) {
    var n = "x" === e ? "Left" : "Top",
      i = "Left" === n ? "Right" : "Bottom";
    return (
      parseFloat(t["border" + n + "Width"], 10) +
      parseFloat(t["border" + i + "Width"], 10)
    );
  }
  function St(t, e, n, i) {
    return Math.max(
      e["offset" + t],
      e["scroll" + t],
      n["client" + t],
      n["offset" + t],
      n["scroll" + t],
      bt(10)
        ? parseInt(n["offset" + t]) +
            parseInt(i["margin" + ("Height" === t ? "Top" : "Left")]) +
            parseInt(i["margin" + ("Height" === t ? "Bottom" : "Right")])
        : 0
    );
  }
  function Dt(t) {
    var e = t.body,
      n = t.documentElement,
      i = bt(10) && getComputedStyle(n);
    return { height: St("Height", e, n, i), width: St("Width", e, n, i) };
  }
  var It = function (t, e) {
      if (!(t instanceof e))
        throw new TypeError("Cannot call a class as a function");
    },
    At = (function () {
      function t(t, e) {
        for (var n = 0; n < e.length; n++) {
          var i = e[n];
          (i.enumerable = i.enumerable || !1),
            (i.configurable = !0),
            "value" in i && (i.writable = !0),
            Object.defineProperty(t, i.key, i);
        }
      }
      return function (e, n, i) {
        return n && t(e.prototype, n), i && t(e, i), e;
      };
    })(),
    Ot = function (t, e, n) {
      return (
        e in t
          ? Object.defineProperty(t, e, {
              value: n,
              enumerable: !0,
              configurable: !0,
              writable: !0,
            })
          : (t[e] = n),
        t
      );
    },
    Nt =
      Object.assign ||
      function (t) {
        for (var e = 1; e < arguments.length; e++) {
          var n = arguments[e];
          for (var i in n)
            Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]);
        }
        return t;
      };
  function Lt(t) {
    return Nt({}, t, { right: t.left + t.width, bottom: t.top + t.height });
  }
  function kt(t) {
    var e = {};
    try {
      if (bt(10)) {
        e = t.getBoundingClientRect();
        var n = wt(t, "top"),
          i = wt(t, "left");
        (e.top += n), (e.left += i), (e.bottom += n), (e.right += i);
      } else e = t.getBoundingClientRect();
    } catch (t) {}
    var o = {
        left: e.left,
        top: e.top,
        width: e.right - e.left,
        height: e.bottom - e.top,
      },
      r = "HTML" === t.nodeName ? Dt(t.ownerDocument) : {},
      s = r.width || t.clientWidth || o.width,
      a = r.height || t.clientHeight || o.height,
      l = t.offsetWidth - s,
      c = t.offsetHeight - a;
    if (l || c) {
      var u = dt(t);
      (l -= Ct(u, "x")), (c -= Ct(u, "y")), (o.width -= l), (o.height -= c);
    }
    return Lt(o);
  }
  function Pt(t, e) {
    var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
      i = bt(10),
      o = "HTML" === e.nodeName,
      r = kt(t),
      s = kt(e),
      a = mt(t),
      l = dt(e),
      c = parseFloat(l.borderTopWidth, 10),
      u = parseFloat(l.borderLeftWidth, 10);
    n && o && ((s.top = Math.max(s.top, 0)), (s.left = Math.max(s.left, 0)));
    var h = Lt({
      top: r.top - s.top - c,
      left: r.left - s.left - u,
      width: r.width,
      height: r.height,
    });
    if (((h.marginTop = 0), (h.marginLeft = 0), !i && o)) {
      var f = parseFloat(l.marginTop, 10),
        d = parseFloat(l.marginLeft, 10);
      (h.top -= c - f),
        (h.bottom -= c - f),
        (h.left -= u - d),
        (h.right -= u - d),
        (h.marginTop = f),
        (h.marginLeft = d);
    }
    return (
      (i && !n ? e.contains(a) : e === a && "BODY" !== a.nodeName) &&
        (h = (function (t, e) {
          var n =
              arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
            i = wt(e, "top"),
            o = wt(e, "left"),
            r = n ? -1 : 1;
          return (
            (t.top += i * r),
            (t.bottom += i * r),
            (t.left += o * r),
            (t.right += o * r),
            t
          );
        })(h, e)),
      h
    );
  }
  function xt(t) {
    if (!t || !t.parentElement || bt()) return document.documentElement;
    for (var e = t.parentElement; e && "none" === dt(e, "transform"); )
      e = e.parentElement;
    return e || document.documentElement;
  }
  function jt(t, e, n, i) {
    var o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
      r = { top: 0, left: 0 },
      s = o ? xt(t) : Tt(t, gt(e));
    if ("viewport" === i)
      r = (function (t) {
        var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
          n = t.ownerDocument.documentElement,
          i = Pt(t, n),
          o = Math.max(n.clientWidth, window.innerWidth || 0),
          r = Math.max(n.clientHeight, window.innerHeight || 0),
          s = e ? 0 : wt(n),
          a = e ? 0 : wt(n, "left");
        return Lt({
          top: s - i.top + i.marginTop,
          left: a - i.left + i.marginLeft,
          width: o,
          height: r,
        });
      })(s, o);
    else {
      var a = void 0;
      "scrollParent" === i
        ? "BODY" === (a = mt(pt(e))).nodeName &&
          (a = t.ownerDocument.documentElement)
        : (a = "window" === i ? t.ownerDocument.documentElement : i);
      var l = Pt(a, s, o);
      if (
        "HTML" !== a.nodeName ||
        (function t(e) {
          var n = e.nodeName;
          if ("BODY" === n || "HTML" === n) return !1;
          if ("fixed" === dt(e, "position")) return !0;
          var i = pt(e);
          return !!i && t(i);
        })(s)
      )
        r = l;
      else {
        var c = Dt(t.ownerDocument),
          u = c.height,
          h = c.width;
        (r.top += l.top - l.marginTop),
          (r.bottom = u + l.top),
          (r.left += l.left - l.marginLeft),
          (r.right = h + l.left);
      }
    }
    var f = "number" == typeof (n = n || 0);
    return (
      (r.left += f ? n : n.left || 0),
      (r.top += f ? n : n.top || 0),
      (r.right -= f ? n : n.right || 0),
      (r.bottom -= f ? n : n.bottom || 0),
      r
    );
  }
  function Ht(t, e, n, i, o) {
    var r = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
    if (-1 === t.indexOf("auto")) return t;
    var s = jt(n, i, r, o),
      a = {
        top: { width: s.width, height: e.top - s.top },
        right: { width: s.right - e.right, height: s.height },
        bottom: { width: s.width, height: s.bottom - e.bottom },
        left: { width: e.left - s.left, height: s.height },
      },
      l = Object.keys(a)
        .map(function (t) {
          return Nt({ key: t }, a[t], {
            area: ((e = a[t]), e.width * e.height),
          });
          var e;
        })
        .sort(function (t, e) {
          return e.area - t.area;
        }),
      c = l.filter(function (t) {
        var e = t.width,
          i = t.height;
        return e >= n.clientWidth && i >= n.clientHeight;
      }),
      u = c.length > 0 ? c[0].key : l[0].key,
      h = t.split("-")[1];
    return u + (h ? "-" + h : "");
  }
  function Rt(t, e, n) {
    var i =
      arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null;
    return Pt(n, i ? xt(e) : Tt(e, gt(n)), i);
  }
  function Mt(t) {
    var e = t.ownerDocument.defaultView.getComputedStyle(t),
      n = parseFloat(e.marginTop || 0) + parseFloat(e.marginBottom || 0),
      i = parseFloat(e.marginLeft || 0) + parseFloat(e.marginRight || 0);
    return { width: t.offsetWidth + i, height: t.offsetHeight + n };
  }
  function Ft(t) {
    var e = { left: "right", right: "left", bottom: "top", top: "bottom" };
    return t.replace(/left|right|bottom|top/g, function (t) {
      return e[t];
    });
  }
  function Wt(t, e, n) {
    n = n.split("-")[0];
    var i = Mt(t),
      o = { width: i.width, height: i.height },
      r = -1 !== ["right", "left"].indexOf(n),
      s = r ? "top" : "left",
      a = r ? "left" : "top",
      l = r ? "height" : "width",
      c = r ? "width" : "height";
    return (
      (o[s] = e[s] + e[l] / 2 - i[l] / 2),
      (o[a] = n === a ? e[a] - i[c] : e[Ft(a)]),
      o
    );
  }
  function Ut(t, e) {
    return Array.prototype.find ? t.find(e) : t.filter(e)[0];
  }
  function Bt(t, e, n) {
    return (
      (void 0 === n
        ? t
        : t.slice(
            0,
            (function (t, e, n) {
              if (Array.prototype.findIndex)
                return t.findIndex(function (t) {
                  return t[e] === n;
                });
              var i = Ut(t, function (t) {
                return t[e] === n;
              });
              return t.indexOf(i);
            })(t, "name", n)
          )
      ).forEach(function (t) {
        t.function &&
          console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
        var n = t.function || t.fn;
        t.enabled &&
          ft(n) &&
          ((e.offsets.popper = Lt(e.offsets.popper)),
          (e.offsets.reference = Lt(e.offsets.reference)),
          (e = n(e, t)));
      }),
      e
    );
  }
  function qt(t, e) {
    return t.some(function (t) {
      var n = t.name;
      return t.enabled && n === e;
    });
  }
  function Kt(t) {
    for (
      var e = [!1, "ms", "Webkit", "Moz", "O"],
        n = t.charAt(0).toUpperCase() + t.slice(1),
        i = 0;
      i < e.length;
      i++
    ) {
      var o = e[i],
        r = o ? "" + o + n : t;
      if (void 0 !== document.body.style[r]) return r;
    }
    return null;
  }
  function Vt(t) {
    var e = t.ownerDocument;
    return e ? e.defaultView : window;
  }
  function Qt(t, e, n, i) {
    (n.updateBound = i),
      Vt(t).addEventListener("resize", n.updateBound, { passive: !0 });
    var o = mt(t);
    return (
      (function t(e, n, i, o) {
        var r = "BODY" === e.nodeName,
          s = r ? e.ownerDocument.defaultView : e;
        s.addEventListener(n, i, { passive: !0 }),
          r || t(mt(s.parentNode), n, i, o),
          o.push(s);
      })(o, "scroll", n.updateBound, n.scrollParents),
      (n.scrollElement = o),
      (n.eventsEnabled = !0),
      n
    );
  }
  function Yt() {
    var t, e;
    this.state.eventsEnabled &&
      (cancelAnimationFrame(this.scheduleUpdate),
      (this.state =
        ((t = this.reference),
        (e = this.state),
        Vt(t).removeEventListener("resize", e.updateBound),
        e.scrollParents.forEach(function (t) {
          t.removeEventListener("scroll", e.updateBound);
        }),
        (e.updateBound = null),
        (e.scrollParents = []),
        (e.scrollElement = null),
        (e.eventsEnabled = !1),
        e)));
  }
  function Gt(t) {
    return "" !== t && !isNaN(parseFloat(t)) && isFinite(t);
  }
  function Xt(t, e) {
    Object.keys(e).forEach(function (n) {
      var i = "";
      -1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(n) &&
        Gt(e[n]) &&
        (i = "px"),
        (t.style[n] = e[n] + i);
    });
  }
  var zt = ct && /Firefox/i.test(navigator.userAgent);
  function $t(t, e, n) {
    var i = Ut(t, function (t) {
        return t.name === e;
      }),
      o =
        !!i &&
        t.some(function (t) {
          return t.name === n && t.enabled && t.order < i.order;
        });
    if (!o) {
      var r = "`" + e + "`",
        s = "`" + n + "`";
      console.warn(
        s +
          " modifier is required by " +
          r +
          " modifier in order to work, be sure to include it before " +
          r +
          "!"
      );
    }
    return o;
  }
  var Jt = [
      "auto-start",
      "auto",
      "auto-end",
      "top-start",
      "top",
      "top-end",
      "right-start",
      "right",
      "right-end",
      "bottom-end",
      "bottom",
      "bottom-start",
      "left-end",
      "left",
      "left-start",
    ],
    Zt = Jt.slice(3);
  function te(t) {
    var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
      n = Zt.indexOf(t),
      i = Zt.slice(n + 1).concat(Zt.slice(0, n));
    return e ? i.reverse() : i;
  }
  var ee = {
    FLIP: "flip",
    CLOCKWISE: "clockwise",
    COUNTERCLOCKWISE: "counterclockwise",
  };
  function ne(t, e, n, i) {
    var o = [0, 0],
      r = -1 !== ["right", "left"].indexOf(i),
      s = t.split(/(\+|\-)/).map(function (t) {
        return t.trim();
      }),
      a = s.indexOf(
        Ut(s, function (t) {
          return -1 !== t.search(/,|\s/);
        })
      );
    s[a] &&
      -1 === s[a].indexOf(",") &&
      console.warn(
        "Offsets separated by white space(s) are deprecated, use a comma (,) instead."
      );
    var l = /\s*,\s*|\s+/,
      c =
        -1 !== a
          ? [
              s.slice(0, a).concat([s[a].split(l)[0]]),
              [s[a].split(l)[1]].concat(s.slice(a + 1)),
            ]
          : [s];
    return (
      (c = c.map(function (t, i) {
        var o = (1 === i ? !r : r) ? "height" : "width",
          s = !1;
        return t
          .reduce(function (t, e) {
            return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e)
              ? ((t[t.length - 1] = e), (s = !0), t)
              : s
              ? ((t[t.length - 1] += e), (s = !1), t)
              : t.concat(e);
          }, [])
          .map(function (t) {
            return (function (t, e, n, i) {
              var o = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                r = +o[1],
                s = o[2];
              if (!r) return t;
              if (0 === s.indexOf("%")) {
                var a = void 0;
                switch (s) {
                  case "%p":
                    a = n;
                    break;
                  case "%":
                  case "%r":
                  default:
                    a = i;
                }
                return (Lt(a)[e] / 100) * r;
              }
              if ("vh" === s || "vw" === s)
                return (
                  (("vh" === s
                    ? Math.max(
                        document.documentElement.clientHeight,
                        window.innerHeight || 0
                      )
                    : Math.max(
                        document.documentElement.clientWidth,
                        window.innerWidth || 0
                      )) /
                    100) *
                  r
                );
              return r;
            })(t, o, e, n);
          });
      })).forEach(function (t, e) {
        t.forEach(function (n, i) {
          Gt(n) && (o[e] += n * ("-" === t[i - 1] ? -1 : 1));
        });
      }),
      o
    );
  }
  var ie = {
      placement: "bottom",
      positionFixed: !1,
      eventsEnabled: !0,
      removeOnDestroy: !1,
      onCreate: function () {},
      onUpdate: function () {},
      modifiers: {
        shift: {
          order: 100,
          enabled: !0,
          fn: function (t) {
            var e = t.placement,
              n = e.split("-")[0],
              i = e.split("-")[1];
            if (i) {
              var o = t.offsets,
                r = o.reference,
                s = o.popper,
                a = -1 !== ["bottom", "top"].indexOf(n),
                l = a ? "left" : "top",
                c = a ? "width" : "height",
                u = {
                  start: Ot({}, l, r[l]),
                  end: Ot({}, l, r[l] + r[c] - s[c]),
                };
              t.offsets.popper = Nt({}, s, u[i]);
            }
            return t;
          },
        },
        offset: {
          order: 200,
          enabled: !0,
          fn: function (t, e) {
            var n = e.offset,
              i = t.placement,
              o = t.offsets,
              r = o.popper,
              s = o.reference,
              a = i.split("-")[0],
              l = void 0;
            return (
              (l = Gt(+n) ? [+n, 0] : ne(n, r, s, a)),
              "left" === a
                ? ((r.top += l[0]), (r.left -= l[1]))
                : "right" === a
                ? ((r.top += l[0]), (r.left += l[1]))
                : "top" === a
                ? ((r.left += l[0]), (r.top -= l[1]))
                : "bottom" === a && ((r.left += l[0]), (r.top += l[1])),
              (t.popper = r),
              t
            );
          },
          offset: 0,
        },
        preventOverflow: {
          order: 300,
          enabled: !0,
          fn: function (t, e) {
            var n = e.boundariesElement || Et(t.instance.popper);
            t.instance.reference === n && (n = Et(n));
            var i = Kt("transform"),
              o = t.instance.popper.style,
              r = o.top,
              s = o.left,
              a = o[i];
            (o.top = ""), (o.left = ""), (o[i] = "");
            var l = jt(
              t.instance.popper,
              t.instance.reference,
              e.padding,
              n,
              t.positionFixed
            );
            (o.top = r), (o.left = s), (o[i] = a), (e.boundaries = l);
            var c = e.priority,
              u = t.offsets.popper,
              h = {
                primary: function (t) {
                  var n = u[t];
                  return (
                    u[t] < l[t] &&
                      !e.escapeWithReference &&
                      (n = Math.max(u[t], l[t])),
                    Ot({}, t, n)
                  );
                },
                secondary: function (t) {
                  var n = "right" === t ? "left" : "top",
                    i = u[n];
                  return (
                    u[t] > l[t] &&
                      !e.escapeWithReference &&
                      (i = Math.min(
                        u[n],
                        l[t] - ("right" === t ? u.width : u.height)
                      )),
                    Ot({}, n, i)
                  );
                },
              };
            return (
              c.forEach(function (t) {
                var e =
                  -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
                u = Nt({}, u, h[e](t));
              }),
              (t.offsets.popper = u),
              t
            );
          },
          priority: ["left", "right", "top", "bottom"],
          padding: 5,
          boundariesElement: "scrollParent",
        },
        keepTogether: {
          order: 400,
          enabled: !0,
          fn: function (t) {
            var e = t.offsets,
              n = e.popper,
              i = e.reference,
              o = t.placement.split("-")[0],
              r = Math.floor,
              s = -1 !== ["top", "bottom"].indexOf(o),
              a = s ? "right" : "bottom",
              l = s ? "left" : "top",
              c = s ? "width" : "height";
            return (
              n[a] < r(i[l]) && (t.offsets.popper[l] = r(i[l]) - n[c]),
              n[l] > r(i[a]) && (t.offsets.popper[l] = r(i[a])),
              t
            );
          },
        },
        arrow: {
          order: 500,
          enabled: !0,
          fn: function (t, e) {
            var n;
            if (!$t(t.instance.modifiers, "arrow", "keepTogether")) return t;
            var i = e.element;
            if ("string" == typeof i) {
              if (!(i = t.instance.popper.querySelector(i))) return t;
            } else if (!t.instance.popper.contains(i))
              return (
                console.warn(
                  "WARNING: `arrow.element` must be child of its popper element!"
                ),
                t
              );
            var o = t.placement.split("-")[0],
              r = t.offsets,
              s = r.popper,
              a = r.reference,
              l = -1 !== ["left", "right"].indexOf(o),
              c = l ? "height" : "width",
              u = l ? "Top" : "Left",
              h = u.toLowerCase(),
              f = l ? "left" : "top",
              d = l ? "bottom" : "right",
              p = Mt(i)[c];
            a[d] - p < s[h] && (t.offsets.popper[h] -= s[h] - (a[d] - p)),
              a[h] + p > s[d] && (t.offsets.popper[h] += a[h] + p - s[d]),
              (t.offsets.popper = Lt(t.offsets.popper));
            var m = a[h] + a[c] / 2 - p / 2,
              g = dt(t.instance.popper),
              _ = parseFloat(g["margin" + u], 10),
              v = parseFloat(g["border" + u + "Width"], 10),
              b = m - t.offsets.popper[h] - _ - v;
            return (
              (b = Math.max(Math.min(s[c] - p, b), 0)),
              (t.arrowElement = i),
              (t.offsets.arrow =
                (Ot((n = {}), h, Math.round(b)), Ot(n, f, ""), n)),
              t
            );
          },
          element: "[x-arrow]",
        },
        flip: {
          order: 600,
          enabled: !0,
          fn: function (t, e) {
            if (qt(t.instance.modifiers, "inner")) return t;
            if (t.flipped && t.placement === t.originalPlacement) return t;
            var n = jt(
                t.instance.popper,
                t.instance.reference,
                e.padding,
                e.boundariesElement,
                t.positionFixed
              ),
              i = t.placement.split("-")[0],
              o = Ft(i),
              r = t.placement.split("-")[1] || "",
              s = [];
            switch (e.behavior) {
              case ee.FLIP:
                s = [i, o];
                break;
              case ee.CLOCKWISE:
                s = te(i);
                break;
              case ee.COUNTERCLOCKWISE:
                s = te(i, !0);
                break;
              default:
                s = e.behavior;
            }
            return (
              s.forEach(function (a, l) {
                if (i !== a || s.length === l + 1) return t;
                (i = t.placement.split("-")[0]), (o = Ft(i));
                var c = t.offsets.popper,
                  u = t.offsets.reference,
                  h = Math.floor,
                  f =
                    ("left" === i && h(c.right) > h(u.left)) ||
                    ("right" === i && h(c.left) < h(u.right)) ||
                    ("top" === i && h(c.bottom) > h(u.top)) ||
                    ("bottom" === i && h(c.top) < h(u.bottom)),
                  d = h(c.left) < h(n.left),
                  p = h(c.right) > h(n.right),
                  m = h(c.top) < h(n.top),
                  g = h(c.bottom) > h(n.bottom),
                  _ =
                    ("left" === i && d) ||
                    ("right" === i && p) ||
                    ("top" === i && m) ||
                    ("bottom" === i && g),
                  v = -1 !== ["top", "bottom"].indexOf(i),
                  b =
                    !!e.flipVariations &&
                    ((v && "start" === r && d) ||
                      (v && "end" === r && p) ||
                      (!v && "start" === r && m) ||
                      (!v && "end" === r && g)),
                  E =
                    !!e.flipVariationsByContent &&
                    ((v && "start" === r && p) ||
                      (v && "end" === r && d) ||
                      (!v && "start" === r && g) ||
                      (!v && "end" === r && m)),
                  y = b || E;
                (f || _ || y) &&
                  ((t.flipped = !0),
                  (f || _) && (i = s[l + 1]),
                  y &&
                    (r = (function (t) {
                      return "end" === t ? "start" : "start" === t ? "end" : t;
                    })(r)),
                  (t.placement = i + (r ? "-" + r : "")),
                  (t.offsets.popper = Nt(
                    {},
                    t.offsets.popper,
                    Wt(t.instance.popper, t.offsets.reference, t.placement)
                  )),
                  (t = Bt(t.instance.modifiers, t, "flip")));
              }),
              t
            );
          },
          behavior: "flip",
          padding: 5,
          boundariesElement: "viewport",
          flipVariations: !1,
          flipVariationsByContent: !1,
        },
        inner: {
          order: 700,
          enabled: !1,
          fn: function (t) {
            var e = t.placement,
              n = e.split("-")[0],
              i = t.offsets,
              o = i.popper,
              r = i.reference,
              s = -1 !== ["left", "right"].indexOf(n),
              a = -1 === ["top", "left"].indexOf(n);
            return (
              (o[s ? "left" : "top"] =
                r[n] - (a ? o[s ? "width" : "height"] : 0)),
              (t.placement = Ft(e)),
              (t.offsets.popper = Lt(o)),
              t
            );
          },
        },
        hide: {
          order: 800,
          enabled: !0,
          fn: function (t) {
            if (!$t(t.instance.modifiers, "hide", "preventOverflow")) return t;
            var e = t.offsets.reference,
              n = Ut(t.instance.modifiers, function (t) {
                return "preventOverflow" === t.name;
              }).boundaries;
            if (
              e.bottom < n.top ||
              e.left > n.right ||
              e.top > n.bottom ||
              e.right < n.left
            ) {
              if (!0 === t.hide) return t;
              (t.hide = !0), (t.attributes["x-out-of-boundaries"] = "");
            } else {
              if (!1 === t.hide) return t;
              (t.hide = !1), (t.attributes["x-out-of-boundaries"] = !1);
            }
            return t;
          },
        },
        computeStyle: {
          order: 850,
          enabled: !0,
          fn: function (t, e) {
            var n = e.x,
              i = e.y,
              o = t.offsets.popper,
              r = Ut(t.instance.modifiers, function (t) {
                return "applyStyle" === t.name;
              }).gpuAcceleration;
            void 0 !== r &&
              console.warn(
                "WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!"
              );
            var s = void 0 !== r ? r : e.gpuAcceleration,
              a = Et(t.instance.popper),
              l = kt(a),
              c = { position: o.position },
              u = (function (t, e) {
                var n = t.offsets,
                  i = n.popper,
                  o = n.reference,
                  r = Math.round,
                  s = Math.floor,
                  a = function (t) {
                    return t;
                  },
                  l = r(o.width),
                  c = r(i.width),
                  u = -1 !== ["left", "right"].indexOf(t.placement),
                  h = -1 !== t.placement.indexOf("-"),
                  f = e ? (u || h || l % 2 == c % 2 ? r : s) : a,
                  d = e ? r : a;
                return {
                  left: f(
                    l % 2 == 1 && c % 2 == 1 && !h && e ? i.left - 1 : i.left
                  ),
                  top: d(i.top),
                  bottom: d(i.bottom),
                  right: f(i.right),
                };
              })(t, window.devicePixelRatio < 2 || !zt),
              h = "bottom" === n ? "top" : "bottom",
              f = "right" === i ? "left" : "right",
              d = Kt("transform"),
              p = void 0,
              m = void 0;
            if (
              ((m =
                "bottom" === h
                  ? "HTML" === a.nodeName
                    ? -a.clientHeight + u.bottom
                    : -l.height + u.bottom
                  : u.top),
              (p =
                "right" === f
                  ? "HTML" === a.nodeName
                    ? -a.clientWidth + u.right
                    : -l.width + u.right
                  : u.left),
              s && d)
            )
              (c[d] = "translate3d(" + p + "px, " + m + "px, 0)"),
                (c[h] = 0),
                (c[f] = 0),
                (c.willChange = "transform");
            else {
              var g = "bottom" === h ? -1 : 1,
                _ = "right" === f ? -1 : 1;
              (c[h] = m * g), (c[f] = p * _), (c.willChange = h + ", " + f);
            }
            var v = { "x-placement": t.placement };
            return (
              (t.attributes = Nt({}, v, t.attributes)),
              (t.styles = Nt({}, c, t.styles)),
              (t.arrowStyles = Nt({}, t.offsets.arrow, t.arrowStyles)),
              t
            );
          },
          gpuAcceleration: !0,
          x: "bottom",
          y: "right",
        },
        applyStyle: {
          order: 900,
          enabled: !0,
          fn: function (t) {
            var e, n;
            return (
              Xt(t.instance.popper, t.styles),
              (e = t.instance.popper),
              (n = t.attributes),
              Object.keys(n).forEach(function (t) {
                !1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t);
              }),
              t.arrowElement &&
                Object.keys(t.arrowStyles).length &&
                Xt(t.arrowElement, t.arrowStyles),
              t
            );
          },
          onLoad: function (t, e, n, i, o) {
            var r = Rt(o, e, t, n.positionFixed),
              s = Ht(
                n.placement,
                r,
                e,
                t,
                n.modifiers.flip.boundariesElement,
                n.modifiers.flip.padding
              );
            return (
              e.setAttribute("x-placement", s),
              Xt(e, { position: n.positionFixed ? "fixed" : "absolute" }),
              n
            );
          },
          gpuAcceleration: void 0,
        },
      },
    },
    oe = (function () {
      function t(e, n) {
        var i = this,
          o =
            arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
        It(this, t),
          (this.scheduleUpdate = function () {
            return requestAnimationFrame(i.update);
          }),
          (this.update = ht(this.update.bind(this))),
          (this.options = Nt({}, t.Defaults, o)),
          (this.state = { isDestroyed: !1, isCreated: !1, scrollParents: [] }),
          (this.reference = e && e.jquery ? e[0] : e),
          (this.popper = n && n.jquery ? n[0] : n),
          (this.options.modifiers = {}),
          Object.keys(Nt({}, t.Defaults.modifiers, o.modifiers)).forEach(
            function (e) {
              i.options.modifiers[e] = Nt(
                {},
                t.Defaults.modifiers[e] || {},
                o.modifiers ? o.modifiers[e] : {}
              );
            }
          ),
          (this.modifiers = Object.keys(this.options.modifiers)
            .map(function (t) {
              return Nt({ name: t }, i.options.modifiers[t]);
            })
            .sort(function (t, e) {
              return t.order - e.order;
            })),
          this.modifiers.forEach(function (t) {
            t.enabled &&
              ft(t.onLoad) &&
              t.onLoad(i.reference, i.popper, i.options, t, i.state);
          }),
          this.update();
        var r = this.options.eventsEnabled;
        r && this.enableEventListeners(), (this.state.eventsEnabled = r);
      }
      return (
        At(t, [
          {
            key: "update",
            value: function () {
              return function () {
                if (!this.state.isDestroyed) {
                  var t = {
                    instance: this,
                    styles: {},
                    arrowStyles: {},
                    attributes: {},
                    flipped: !1,
                    offsets: {},
                  };
                  (t.offsets.reference = Rt(
                    this.state,
                    this.popper,
                    this.reference,
                    this.options.positionFixed
                  )),
                    (t.placement = Ht(
                      this.options.placement,
                      t.offsets.reference,
                      this.popper,
                      this.reference,
                      this.options.modifiers.flip.boundariesElement,
                      this.options.modifiers.flip.padding
                    )),
                    (t.originalPlacement = t.placement),
                    (t.positionFixed = this.options.positionFixed),
                    (t.offsets.popper = Wt(
                      this.popper,
                      t.offsets.reference,
                      t.placement
                    )),
                    (t.offsets.popper.position = this.options.positionFixed
                      ? "fixed"
                      : "absolute"),
                    (t = Bt(this.modifiers, t)),
                    this.state.isCreated
                      ? this.options.onUpdate(t)
                      : ((this.state.isCreated = !0), this.options.onCreate(t));
                }
              }.call(this);
            },
          },
          {
            key: "destroy",
            value: function () {
              return function () {
                return (
                  (this.state.isDestroyed = !0),
                  qt(this.modifiers, "applyStyle") &&
                    (this.popper.removeAttribute("x-placement"),
                    (this.popper.style.position = ""),
                    (this.popper.style.top = ""),
                    (this.popper.style.left = ""),
                    (this.popper.style.right = ""),
                    (this.popper.style.bottom = ""),
                    (this.popper.style.willChange = ""),
                    (this.popper.style[Kt("transform")] = "")),
                  this.disableEventListeners(),
                  this.options.removeOnDestroy &&
                    this.popper.parentNode.removeChild(this.popper),
                  this
                );
              }.call(this);
            },
          },
          {
            key: "enableEventListeners",
            value: function () {
              return function () {
                this.state.eventsEnabled ||
                  (this.state = Qt(
                    this.reference,
                    this.options,
                    this.state,
                    this.scheduleUpdate
                  ));
              }.call(this);
            },
          },
          {
            key: "disableEventListeners",
            value: function () {
              return Yt.call(this);
            },
          },
        ]),
        t
      );
    })();
  (oe.Utils = ("undefined" != typeof window ? window : global).PopperUtils),
    (oe.placements = Jt),
    (oe.Defaults = ie);
  var re = "dropdown",
    se = e.fn[re],
    ae = new RegExp("38|40|27"),
    le = {
      HIDE: "hide.bs.dropdown",
      HIDDEN: "hidden.bs.dropdown",
      SHOW: "show.bs.dropdown",
      SHOWN: "shown.bs.dropdown",
      CLICK: "click.bs.dropdown",
      CLICK_DATA_API: "click.bs.dropdown.data-api",
      KEYDOWN_DATA_API: "keydown.bs.dropdown.data-api",
      KEYUP_DATA_API: "keyup.bs.dropdown.data-api",
    },
    ce = "disabled",
    ue = "show",
    he = "dropup",
    fe = "dropright",
    de = "dropleft",
    pe = "dropdown-menu-right",
    me = "position-static",
    ge = '[data-toggle="dropdown"]',
    _e = ".dropdown form",
    ve = ".dropdown-menu",
    be = ".navbar-nav",
    Ee = ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",
    ye = "top-start",
    Te = "top-end",
    we = "bottom-start",
    Ce = "bottom-end",
    Se = "right-start",
    De = "left-start",
    Ie = {
      offset: 0,
      flip: !0,
      boundary: "scrollParent",
      reference: "toggle",
      display: "dynamic",
      popperConfig: null,
    },
    Ae = {
      offset: "(number|string|function)",
      flip: "boolean",
      boundary: "(string|element)",
      reference: "(string|element)",
      display: "string",
      popperConfig: "(null|object)",
    },
    Oe = (function () {
      function t(t, e) {
        (this._element = t),
          (this._popper = null),
          (this._config = this._getConfig(e)),
          (this._menu = this._getMenuElement()),
          (this._inNavbar = this._detectNavbar()),
          this._addEventListeners();
      }
      var n = t.prototype;
      return (
        (n.toggle = function () {
          if (!this._element.disabled && !e(this._element).hasClass(ce)) {
            var n = e(this._menu).hasClass(ue);
            t._clearMenus(), n || this.show(!0);
          }
        }),
        (n.show = function (n) {
          if (
            (void 0 === n && (n = !1),
            !(
              this._element.disabled ||
              e(this._element).hasClass(ce) ||
              e(this._menu).hasClass(ue)
            ))
          ) {
            var i = { relatedTarget: this._element },
              o = e.Event(le.SHOW, i),
              r = t._getParentFromElement(this._element);
            if ((e(r).trigger(o), !o.isDefaultPrevented())) {
              if (!this._inNavbar && n) {
                if (void 0 === oe)
                  throw new TypeError(
                    "Bootstrap's dropdowns require Popper.js (https://popper.js.org/)"
                  );
                var s = this._element;
                "parent" === this._config.reference
                  ? (s = r)
                  : c.isElement(this._config.reference) &&
                    ((s = this._config.reference),
                    void 0 !== this._config.reference.jquery &&
                      (s = this._config.reference[0])),
                  "scrollParent" !== this._config.boundary && e(r).addClass(me),
                  (this._popper = new oe(
                    s,
                    this._menu,
                    this._getPopperConfig()
                  ));
              }
              "ontouchstart" in document.documentElement &&
                0 === e(r).closest(be).length &&
                e(document.body).children().on("mouseover", null, e.noop),
                this._element.focus(),
                this._element.setAttribute("aria-expanded", !0),
                e(this._menu).toggleClass(ue),
                e(r).toggleClass(ue).trigger(e.Event(le.SHOWN, i));
            }
          }
        }),
        (n.hide = function () {
          if (
            !this._element.disabled &&
            !e(this._element).hasClass(ce) &&
            e(this._menu).hasClass(ue)
          ) {
            var n = { relatedTarget: this._element },
              i = e.Event(le.HIDE, n),
              o = t._getParentFromElement(this._element);
            e(o).trigger(i),
              i.isDefaultPrevented() ||
                (this._popper && this._popper.destroy(),
                e(this._menu).toggleClass(ue),
                e(o).toggleClass(ue).trigger(e.Event(le.HIDDEN, n)));
          }
        }),
        (n.dispose = function () {
          e.removeData(this._element, "bs.dropdown"),
            e(this._element).off(".bs.dropdown"),
            (this._element = null),
            (this._menu = null),
            null !== this._popper &&
              (this._popper.destroy(), (this._popper = null));
        }),
        (n.update = function () {
          (this._inNavbar = this._detectNavbar()),
            null !== this._popper && this._popper.scheduleUpdate();
        }),
        (n._addEventListeners = function () {
          var t = this;
          e(this._element).on(le.CLICK, function (e) {
            e.preventDefault(), e.stopPropagation(), t.toggle();
          });
        }),
        (n._getConfig = function (t) {
          return (
            (t = s(
              {},
              this.constructor.Default,
              {},
              e(this._element).data(),
              {},
              t
            )),
            c.typeCheckConfig(re, t, this.constructor.DefaultType),
            t
          );
        }),
        (n._getMenuElement = function () {
          if (!this._menu) {
            var e = t._getParentFromElement(this._element);
            e && (this._menu = e.querySelector(ve));
          }
          return this._menu;
        }),
        (n._getPlacement = function () {
          var t = e(this._element.parentNode),
            n = we;
          return (
            t.hasClass(he)
              ? ((n = ye), e(this._menu).hasClass(pe) && (n = Te))
              : t.hasClass(fe)
              ? (n = Se)
              : t.hasClass(de)
              ? (n = De)
              : e(this._menu).hasClass(pe) && (n = Ce),
            n
          );
        }),
        (n._detectNavbar = function () {
          return e(this._element).closest(".navbar").length > 0;
        }),
        (n._getOffset = function () {
          var t = this,
            e = {};
          return (
            "function" == typeof this._config.offset
              ? (e.fn = function (e) {
                  return (
                    (e.offsets = s(
                      {},
                      e.offsets,
                      {},
                      t._config.offset(e.offsets, t._element) || {}
                    )),
                    e
                  );
                })
              : (e.offset = this._config.offset),
            e
          );
        }),
        (n._getPopperConfig = function () {
          var t = {
            placement: this._getPlacement(),
            modifiers: {
              offset: this._getOffset(),
              flip: { enabled: this._config.flip },
              preventOverflow: { boundariesElement: this._config.boundary },
            },
          };
          return (
            "static" === this._config.display &&
              (t.modifiers.applyStyle = { enabled: !1 }),
            s({}, t, {}, this._config.popperConfig)
          );
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this).data("bs.dropdown");
            if (
              (i ||
                ((i = new t(this, "object" == typeof n ? n : null)),
                e(this).data("bs.dropdown", i)),
              "string" == typeof n)
            ) {
              if (void 0 === i[n])
                throw new TypeError('No method named "' + n + '"');
              i[n]();
            }
          });
        }),
        (t._clearMenus = function (n) {
          if (!n || (3 !== n.which && ("keyup" !== n.type || 9 === n.which)))
            for (
              var i = [].slice.call(document.querySelectorAll(ge)),
                o = 0,
                r = i.length;
              o < r;
              o++
            ) {
              var s = t._getParentFromElement(i[o]),
                a = e(i[o]).data("bs.dropdown"),
                l = { relatedTarget: i[o] };
              if ((n && "click" === n.type && (l.clickEvent = n), a)) {
                var c = a._menu;
                if (
                  e(s).hasClass(ue) &&
                  !(
                    n &&
                    (("click" === n.type &&
                      /input|textarea/i.test(n.target.tagName)) ||
                      ("keyup" === n.type && 9 === n.which)) &&
                    e.contains(s, n.target)
                  )
                ) {
                  var u = e.Event(le.HIDE, l);
                  e(s).trigger(u),
                    u.isDefaultPrevented() ||
                      ("ontouchstart" in document.documentElement &&
                        e(document.body)
                          .children()
                          .off("mouseover", null, e.noop),
                      i[o].setAttribute("aria-expanded", "false"),
                      a._popper && a._popper.destroy(),
                      e(c).removeClass(ue),
                      e(s).removeClass(ue).trigger(e.Event(le.HIDDEN, l)));
                }
              }
            }
        }),
        (t._getParentFromElement = function (t) {
          var e,
            n = c.getSelectorFromElement(t);
          return n && (e = document.querySelector(n)), e || t.parentNode;
        }),
        (t._dataApiKeydownHandler = function (n) {
          if (
            (/input|textarea/i.test(n.target.tagName)
              ? !(
                  32 === n.which ||
                  (27 !== n.which &&
                    ((40 !== n.which && 38 !== n.which) ||
                      e(n.target).closest(ve).length))
                )
              : ae.test(n.which)) &&
            (n.preventDefault(),
            n.stopPropagation(),
            !this.disabled && !e(this).hasClass(ce))
          ) {
            var i = t._getParentFromElement(this),
              o = e(i).hasClass(ue);
            if (o || 27 !== n.which)
              if (o && (!o || (27 !== n.which && 32 !== n.which))) {
                var r = [].slice
                  .call(i.querySelectorAll(Ee))
                  .filter(function (t) {
                    return e(t).is(":visible");
                  });
                if (0 !== r.length) {
                  var s = r.indexOf(n.target);
                  38 === n.which && s > 0 && s--,
                    40 === n.which && s < r.length - 1 && s++,
                    s < 0 && (s = 0),
                    r[s].focus();
                }
              } else {
                if (27 === n.which) {
                  var a = i.querySelector(ge);
                  e(a).trigger("focus");
                }
                e(this).trigger("click");
              }
          }
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return Ie;
            },
          },
          {
            key: "DefaultType",
            get: function () {
              return Ae;
            },
          },
        ]),
        t
      );
    })();
  e(document)
    .on(le.KEYDOWN_DATA_API, ge, Oe._dataApiKeydownHandler)
    .on(le.KEYDOWN_DATA_API, ve, Oe._dataApiKeydownHandler)
    .on(le.CLICK_DATA_API + " " + le.KEYUP_DATA_API, Oe._clearMenus)
    .on(le.CLICK_DATA_API, ge, function (t) {
      t.preventDefault(),
        t.stopPropagation(),
        Oe._jQueryInterface.call(e(this), "toggle");
    })
    .on(le.CLICK_DATA_API, _e, function (t) {
      t.stopPropagation();
    }),
    (e.fn[re] = Oe._jQueryInterface),
    (e.fn[re].Constructor = Oe),
    (e.fn[re].noConflict = function () {
      return (e.fn[re] = se), Oe._jQueryInterface;
    });
  var Ne = e.fn.modal,
    Le = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
    ke = {
      backdrop: "(boolean|string)",
      keyboard: "boolean",
      focus: "boolean",
      show: "boolean",
    },
    Pe = {
      HIDE: "hide.bs.modal",
      HIDE_PREVENTED: "hidePrevented.bs.modal",
      HIDDEN: "hidden.bs.modal",
      SHOW: "show.bs.modal",
      SHOWN: "shown.bs.modal",
      FOCUSIN: "focusin.bs.modal",
      RESIZE: "resize.bs.modal",
      CLICK_DISMISS: "click.dismiss.bs.modal",
      KEYDOWN_DISMISS: "keydown.dismiss.bs.modal",
      MOUSEUP_DISMISS: "mouseup.dismiss.bs.modal",
      MOUSEDOWN_DISMISS: "mousedown.dismiss.bs.modal",
      CLICK_DATA_API: "click.bs.modal.data-api",
    },
    xe = "modal-dialog-scrollable",
    je = "modal-scrollbar-measure",
    He = "modal-backdrop",
    Re = "modal-open",
    Me = "fade",
    Fe = "show",
    We = "modal-static",
    Ue = {
      DIALOG: ".modal-dialog",
      MODAL_BODY: ".modal-body",
      DATA_TOGGLE: '[data-toggle="modal"]',
      DATA_DISMISS: '[data-dismiss="modal"]',
      FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
      STICKY_CONTENT: ".sticky-top",
    },
    Be = (function () {
      function t(t, e) {
        (this._config = this._getConfig(e)),
          (this._element = t),
          (this._dialog = t.querySelector(Ue.DIALOG)),
          (this._backdrop = null),
          (this._isShown = !1),
          (this._isBodyOverflowing = !1),
          (this._ignoreBackdropClick = !1),
          (this._isTransitioning = !1),
          (this._scrollbarWidth = 0);
      }
      var n = t.prototype;
      return (
        (n.toggle = function (t) {
          return this._isShown ? this.hide() : this.show(t);
        }),
        (n.show = function (t) {
          var n = this;
          if (!this._isShown && !this._isTransitioning) {
            e(this._element).hasClass(Me) && (this._isTransitioning = !0);
            var i = e.Event(Pe.SHOW, { relatedTarget: t });
            e(this._element).trigger(i),
              this._isShown ||
                i.isDefaultPrevented() ||
                ((this._isShown = !0),
                this._checkScrollbar(),
                this._setScrollbar(),
                this._adjustDialog(),
                this._setEscapeEvent(),
                this._setResizeEvent(),
                e(this._element).on(
                  Pe.CLICK_DISMISS,
                  Ue.DATA_DISMISS,
                  function (t) {
                    return n.hide(t);
                  }
                ),
                e(this._dialog).on(Pe.MOUSEDOWN_DISMISS, function () {
                  e(n._element).one(Pe.MOUSEUP_DISMISS, function (t) {
                    e(t.target).is(n._element) && (n._ignoreBackdropClick = !0);
                  });
                }),
                this._showBackdrop(function () {
                  return n._showElement(t);
                }));
          }
        }),
        (n.hide = function (t) {
          var n = this;
          if (
            (t && t.preventDefault(), this._isShown && !this._isTransitioning)
          ) {
            var i = e.Event(Pe.HIDE);
            if (
              (e(this._element).trigger(i),
              this._isShown && !i.isDefaultPrevented())
            ) {
              this._isShown = !1;
              var o = e(this._element).hasClass(Me);
              if (
                (o && (this._isTransitioning = !0),
                this._setEscapeEvent(),
                this._setResizeEvent(),
                e(document).off(Pe.FOCUSIN),
                e(this._element).removeClass(Fe),
                e(this._element).off(Pe.CLICK_DISMISS),
                e(this._dialog).off(Pe.MOUSEDOWN_DISMISS),
                o)
              ) {
                var r = c.getTransitionDurationFromElement(this._element);
                e(this._element)
                  .one(c.TRANSITION_END, function (t) {
                    return n._hideModal(t);
                  })
                  .emulateTransitionEnd(r);
              } else this._hideModal();
            }
          }
        }),
        (n.dispose = function () {
          [window, this._element, this._dialog].forEach(function (t) {
            return e(t).off(".bs.modal");
          }),
            e(document).off(Pe.FOCUSIN),
            e.removeData(this._element, "bs.modal"),
            (this._config = null),
            (this._element = null),
            (this._dialog = null),
            (this._backdrop = null),
            (this._isShown = null),
            (this._isBodyOverflowing = null),
            (this._ignoreBackdropClick = null),
            (this._isTransitioning = null),
            (this._scrollbarWidth = null);
        }),
        (n.handleUpdate = function () {
          this._adjustDialog();
        }),
        (n._getConfig = function (t) {
          return (t = s({}, Le, {}, t)), c.typeCheckConfig("modal", t, ke), t;
        }),
        (n._triggerBackdropTransition = function () {
          var t = this;
          if ("static" === this._config.backdrop) {
            var n = e.Event(Pe.HIDE_PREVENTED);
            if ((e(this._element).trigger(n), n.defaultPrevented)) return;
            this._element.classList.add(We);
            var i = c.getTransitionDurationFromElement(this._element);
            e(this._element)
              .one(c.TRANSITION_END, function () {
                t._element.classList.remove(We);
              })
              .emulateTransitionEnd(i),
              this._element.focus();
          } else this.hide();
        }),
        (n._showElement = function (t) {
          var n = this,
            i = e(this._element).hasClass(Me),
            o = this._dialog ? this._dialog.querySelector(Ue.MODAL_BODY) : null;
          (this._element.parentNode &&
            this._element.parentNode.nodeType === Node.ELEMENT_NODE) ||
            document.body.appendChild(this._element),
            (this._element.style.display = "block"),
            this._element.removeAttribute("aria-hidden"),
            this._element.setAttribute("aria-modal", !0),
            e(this._dialog).hasClass(xe) && o
              ? (o.scrollTop = 0)
              : (this._element.scrollTop = 0),
            i && c.reflow(this._element),
            e(this._element).addClass(Fe),
            this._config.focus && this._enforceFocus();
          var r = e.Event(Pe.SHOWN, { relatedTarget: t }),
            s = function () {
              n._config.focus && n._element.focus(),
                (n._isTransitioning = !1),
                e(n._element).trigger(r);
            };
          if (i) {
            var a = c.getTransitionDurationFromElement(this._dialog);
            e(this._dialog).one(c.TRANSITION_END, s).emulateTransitionEnd(a);
          } else s();
        }),
        (n._enforceFocus = function () {
          var t = this;
          e(document)
            .off(Pe.FOCUSIN)
            .on(Pe.FOCUSIN, function (n) {
              document !== n.target &&
                t._element !== n.target &&
                0 === e(t._element).has(n.target).length &&
                t._element.focus();
            });
        }),
        (n._setEscapeEvent = function () {
          var t = this;
          this._isShown && this._config.keyboard
            ? e(this._element).on(Pe.KEYDOWN_DISMISS, function (e) {
                27 === e.which && t._triggerBackdropTransition();
              })
            : this._isShown || e(this._element).off(Pe.KEYDOWN_DISMISS);
        }),
        (n._setResizeEvent = function () {
          var t = this;
          this._isShown
            ? e(window).on(Pe.RESIZE, function (e) {
                return t.handleUpdate(e);
              })
            : e(window).off(Pe.RESIZE);
        }),
        (n._hideModal = function () {
          var t = this;
          (this._element.style.display = "none"),
            this._element.setAttribute("aria-hidden", !0),
            this._element.removeAttribute("aria-modal"),
            (this._isTransitioning = !1),
            this._showBackdrop(function () {
              e(document.body).removeClass(Re),
                t._resetAdjustments(),
                t._resetScrollbar(),
                e(t._element).trigger(Pe.HIDDEN);
            });
        }),
        (n._removeBackdrop = function () {
          this._backdrop &&
            (e(this._backdrop).remove(), (this._backdrop = null));
        }),
        (n._showBackdrop = function (t) {
          var n = this,
            i = e(this._element).hasClass(Me) ? Me : "";
          if (this._isShown && this._config.backdrop) {
            if (
              ((this._backdrop = document.createElement("div")),
              (this._backdrop.className = He),
              i && this._backdrop.classList.add(i),
              e(this._backdrop).appendTo(document.body),
              e(this._element).on(Pe.CLICK_DISMISS, function (t) {
                n._ignoreBackdropClick
                  ? (n._ignoreBackdropClick = !1)
                  : t.target === t.currentTarget &&
                    n._triggerBackdropTransition();
              }),
              i && c.reflow(this._backdrop),
              e(this._backdrop).addClass(Fe),
              !t)
            )
              return;
            if (!i) return void t();
            var o = c.getTransitionDurationFromElement(this._backdrop);
            e(this._backdrop).one(c.TRANSITION_END, t).emulateTransitionEnd(o);
          } else if (!this._isShown && this._backdrop) {
            e(this._backdrop).removeClass(Fe);
            var r = function () {
              n._removeBackdrop(), t && t();
            };
            if (e(this._element).hasClass(Me)) {
              var s = c.getTransitionDurationFromElement(this._backdrop);
              e(this._backdrop)
                .one(c.TRANSITION_END, r)
                .emulateTransitionEnd(s);
            } else r();
          } else t && t();
        }),
        (n._adjustDialog = function () {
          var t =
            this._element.scrollHeight > document.documentElement.clientHeight;
          !this._isBodyOverflowing &&
            t &&
            (this._element.style.paddingLeft = this._scrollbarWidth + "px"),
            this._isBodyOverflowing &&
              !t &&
              (this._element.style.paddingRight = this._scrollbarWidth + "px");
        }),
        (n._resetAdjustments = function () {
          (this._element.style.paddingLeft = ""),
            (this._element.style.paddingRight = "");
        }),
        (n._checkScrollbar = function () {
          var t = document.body.getBoundingClientRect();
          (this._isBodyOverflowing = t.left + t.right < window.innerWidth),
            (this._scrollbarWidth = this._getScrollbarWidth());
        }),
        (n._setScrollbar = function () {
          var t = this;
          if (this._isBodyOverflowing) {
            var n = [].slice.call(document.querySelectorAll(Ue.FIXED_CONTENT)),
              i = [].slice.call(document.querySelectorAll(Ue.STICKY_CONTENT));
            e(n).each(function (n, i) {
              var o = i.style.paddingRight,
                r = e(i).css("padding-right");
              e(i)
                .data("padding-right", o)
                .css("padding-right", parseFloat(r) + t._scrollbarWidth + "px");
            }),
              e(i).each(function (n, i) {
                var o = i.style.marginRight,
                  r = e(i).css("margin-right");
                e(i)
                  .data("margin-right", o)
                  .css(
                    "margin-right",
                    parseFloat(r) - t._scrollbarWidth + "px"
                  );
              });
            var o = document.body.style.paddingRight,
              r = e(document.body).css("padding-right");
            e(document.body)
              .data("padding-right", o)
              .css(
                "padding-right",
                parseFloat(r) + this._scrollbarWidth + "px"
              );
          }
          e(document.body).addClass(Re);
        }),
        (n._resetScrollbar = function () {
          var t = [].slice.call(document.querySelectorAll(Ue.FIXED_CONTENT));
          e(t).each(function (t, n) {
            var i = e(n).data("padding-right");
            e(n).removeData("padding-right"), (n.style.paddingRight = i || "");
          });
          var n = [].slice.call(
            document.querySelectorAll("" + Ue.STICKY_CONTENT)
          );
          e(n).each(function (t, n) {
            var i = e(n).data("margin-right");
            void 0 !== i &&
              e(n).css("margin-right", i).removeData("margin-right");
          });
          var i = e(document.body).data("padding-right");
          e(document.body).removeData("padding-right"),
            (document.body.style.paddingRight = i || "");
        }),
        (n._getScrollbarWidth = function () {
          var t = document.createElement("div");
          (t.className = je), document.body.appendChild(t);
          var e = t.getBoundingClientRect().width - t.clientWidth;
          return document.body.removeChild(t), e;
        }),
        (t._jQueryInterface = function (n, i) {
          return this.each(function () {
            var o = e(this).data("bs.modal"),
              r = s(
                {},
                Le,
                {},
                e(this).data(),
                {},
                "object" == typeof n && n ? n : {}
              );
            if (
              (o || ((o = new t(this, r)), e(this).data("bs.modal", o)),
              "string" == typeof n)
            ) {
              if (void 0 === o[n])
                throw new TypeError('No method named "' + n + '"');
              o[n](i);
            } else r.show && o.show(i);
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return Le;
            },
          },
        ]),
        t
      );
    })();
  e(document).on(Pe.CLICK_DATA_API, Ue.DATA_TOGGLE, function (t) {
    var n,
      i = this,
      o = c.getSelectorFromElement(this);
    o && (n = document.querySelector(o));
    var r = e(n).data("bs.modal")
      ? "toggle"
      : s({}, e(n).data(), {}, e(this).data());
    ("A" !== this.tagName && "AREA" !== this.tagName) || t.preventDefault();
    var a = e(n).one(Pe.SHOW, function (t) {
      t.isDefaultPrevented() ||
        a.one(Pe.HIDDEN, function () {
          e(i).is(":visible") && i.focus();
        });
    });
    Be._jQueryInterface.call(e(n), r, this);
  }),
    (e.fn.modal = Be._jQueryInterface),
    (e.fn.modal.Constructor = Be),
    (e.fn.modal.noConflict = function () {
      return (e.fn.modal = Ne), Be._jQueryInterface;
    });
  var qe = [
      "background",
      "cite",
      "href",
      "itemtype",
      "longdesc",
      "poster",
      "src",
      "xlink:href",
    ],
    Ke = {
      "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
      a: ["target", "href", "title", "rel"],
      area: [],
      b: [],
      br: [],
      col: [],
      code: [],
      div: [],
      em: [],
      hr: [],
      h1: [],
      h2: [],
      h3: [],
      h4: [],
      h5: [],
      h6: [],
      i: [],
      img: ["src", "alt", "title", "width", "height"],
      li: [],
      ol: [],
      p: [],
      pre: [],
      s: [],
      small: [],
      span: [],
      sub: [],
      sup: [],
      strong: [],
      u: [],
      ul: [],
    },
    Ve = /^(?:(?:https?|mailto|ftp|tel|file):|[^&:\/?#]*(?:[\/?#]|$))/gi,
    Qe = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[a-z0-9+\/]+=*$/i;
  function Ye(t, e, n) {
    if (0 === t.length) return t;
    if (n && "function" == typeof n) return n(t);
    for (
      var i = new window.DOMParser().parseFromString(t, "text/html"),
        o = Object.keys(e),
        r = [].slice.call(i.body.querySelectorAll("*")),
        s = function (t, n) {
          var i = r[t],
            s = i.nodeName.toLowerCase();
          if (-1 === o.indexOf(i.nodeName.toLowerCase()))
            return i.parentNode.removeChild(i), "continue";
          var a = [].slice.call(i.attributes),
            l = [].concat(e["*"] || [], e[s] || []);
          a.forEach(function (t) {
            (function (t, e) {
              var n = t.nodeName.toLowerCase();
              if (-1 !== e.indexOf(n))
                return (
                  -1 === qe.indexOf(n) ||
                  Boolean(t.nodeValue.match(Ve) || t.nodeValue.match(Qe))
                );
              for (
                var i = e.filter(function (t) {
                    return t instanceof RegExp;
                  }),
                  o = 0,
                  r = i.length;
                o < r;
                o++
              )
                if (n.match(i[o])) return !0;
              return !1;
            })(t, l) || i.removeAttribute(t.nodeName);
          });
        },
        a = 0,
        l = r.length;
      a < l;
      a++
    )
      s(a);
    return i.body.innerHTML;
  }
  var Ge = "tooltip",
    Xe = e.fn.tooltip,
    ze = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
    $e = ["sanitize", "whiteList", "sanitizeFn"],
    Je = {
      animation: "boolean",
      template: "string",
      title: "(string|element|function)",
      trigger: "string",
      delay: "(number|object)",
      html: "boolean",
      selector: "(string|boolean)",
      placement: "(string|function)",
      offset: "(number|string|function)",
      container: "(string|element|boolean)",
      fallbackPlacement: "(string|array)",
      boundary: "(string|element)",
      sanitize: "boolean",
      sanitizeFn: "(null|function)",
      whiteList: "object",
      popperConfig: "(null|object)",
    },
    Ze = {
      AUTO: "auto",
      TOP: "top",
      RIGHT: "right",
      BOTTOM: "bottom",
      LEFT: "left",
    },
    tn = {
      animation: !0,
      template:
        '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
      trigger: "hover focus",
      title: "",
      delay: 0,
      html: !1,
      selector: !1,
      placement: "top",
      offset: 0,
      container: !1,
      fallbackPlacement: "flip",
      boundary: "scrollParent",
      sanitize: !0,
      sanitizeFn: null,
      whiteList: Ke,
      popperConfig: null,
    },
    en = "show",
    nn = "out",
    on = {
      HIDE: "hide.bs.tooltip",
      HIDDEN: "hidden.bs.tooltip",
      SHOW: "show.bs.tooltip",
      SHOWN: "shown.bs.tooltip",
      INSERTED: "inserted.bs.tooltip",
      CLICK: "click.bs.tooltip",
      FOCUSIN: "focusin.bs.tooltip",
      FOCUSOUT: "focusout.bs.tooltip",
      MOUSEENTER: "mouseenter.bs.tooltip",
      MOUSELEAVE: "mouseleave.bs.tooltip",
    },
    rn = "fade",
    sn = "show",
    an = ".tooltip-inner",
    ln = ".arrow",
    cn = "hover",
    un = "focus",
    hn = "click",
    fn = "manual",
    dn = (function () {
      function t(t, e) {
        if (void 0 === oe)
          throw new TypeError(
            "Bootstrap's tooltips require Popper.js (https://popper.js.org/)"
          );
        (this._isEnabled = !0),
          (this._timeout = 0),
          (this._hoverState = ""),
          (this._activeTrigger = {}),
          (this._popper = null),
          (this.element = t),
          (this.config = this._getConfig(e)),
          (this.tip = null),
          this._setListeners();
      }
      var n = t.prototype;
      return (
        (n.enable = function () {
          this._isEnabled = !0;
        }),
        (n.disable = function () {
          this._isEnabled = !1;
        }),
        (n.toggleEnabled = function () {
          this._isEnabled = !this._isEnabled;
        }),
        (n.toggle = function (t) {
          if (this._isEnabled)
            if (t) {
              var n = this.constructor.DATA_KEY,
                i = e(t.currentTarget).data(n);
              i ||
                ((i = new this.constructor(
                  t.currentTarget,
                  this._getDelegateConfig()
                )),
                e(t.currentTarget).data(n, i)),
                (i._activeTrigger.click = !i._activeTrigger.click),
                i._isWithActiveTrigger()
                  ? i._enter(null, i)
                  : i._leave(null, i);
            } else {
              if (e(this.getTipElement()).hasClass(sn))
                return void this._leave(null, this);
              this._enter(null, this);
            }
        }),
        (n.dispose = function () {
          clearTimeout(this._timeout),
            e.removeData(this.element, this.constructor.DATA_KEY),
            e(this.element).off(this.constructor.EVENT_KEY),
            e(this.element)
              .closest(".modal")
              .off("hide.bs.modal", this._hideModalHandler),
            this.tip && e(this.tip).remove(),
            (this._isEnabled = null),
            (this._timeout = null),
            (this._hoverState = null),
            (this._activeTrigger = null),
            this._popper && this._popper.destroy(),
            (this._popper = null),
            (this.element = null),
            (this.config = null),
            (this.tip = null);
        }),
        (n.show = function () {
          var t = this;
          if ("none" === e(this.element).css("display"))
            throw new Error("Please use show on visible elements");
          var n = e.Event(this.constructor.Event.SHOW);
          if (this.isWithContent() && this._isEnabled) {
            e(this.element).trigger(n);
            var i = c.findShadowRoot(this.element),
              o = e.contains(
                null !== i ? i : this.element.ownerDocument.documentElement,
                this.element
              );
            if (n.isDefaultPrevented() || !o) return;
            var r = this.getTipElement(),
              s = c.getUID(this.constructor.NAME);
            r.setAttribute("id", s),
              this.element.setAttribute("aria-describedby", s),
              this.setContent(),
              this.config.animation && e(r).addClass(rn);
            var a =
                "function" == typeof this.config.placement
                  ? this.config.placement.call(this, r, this.element)
                  : this.config.placement,
              l = this._getAttachment(a);
            this.addAttachmentClass(l);
            var u = this._getContainer();
            e(r).data(this.constructor.DATA_KEY, this),
              e.contains(
                this.element.ownerDocument.documentElement,
                this.tip
              ) || e(r).appendTo(u),
              e(this.element).trigger(this.constructor.Event.INSERTED),
              (this._popper = new oe(
                this.element,
                r,
                this._getPopperConfig(l)
              )),
              e(r).addClass(sn),
              "ontouchstart" in document.documentElement &&
                e(document.body).children().on("mouseover", null, e.noop);
            var h = function () {
              t.config.animation && t._fixTransition();
              var n = t._hoverState;
              (t._hoverState = null),
                e(t.element).trigger(t.constructor.Event.SHOWN),
                n === nn && t._leave(null, t);
            };
            if (e(this.tip).hasClass(rn)) {
              var f = c.getTransitionDurationFromElement(this.tip);
              e(this.tip).one(c.TRANSITION_END, h).emulateTransitionEnd(f);
            } else h();
          }
        }),
        (n.hide = function (t) {
          var n = this,
            i = this.getTipElement(),
            o = e.Event(this.constructor.Event.HIDE),
            r = function () {
              n._hoverState !== en &&
                i.parentNode &&
                i.parentNode.removeChild(i),
                n._cleanTipClass(),
                n.element.removeAttribute("aria-describedby"),
                e(n.element).trigger(n.constructor.Event.HIDDEN),
                null !== n._popper && n._popper.destroy(),
                t && t();
            };
          if ((e(this.element).trigger(o), !o.isDefaultPrevented())) {
            if (
              (e(i).removeClass(sn),
              "ontouchstart" in document.documentElement &&
                e(document.body).children().off("mouseover", null, e.noop),
              (this._activeTrigger[hn] = !1),
              (this._activeTrigger[un] = !1),
              (this._activeTrigger[cn] = !1),
              e(this.tip).hasClass(rn))
            ) {
              var s = c.getTransitionDurationFromElement(i);
              e(i).one(c.TRANSITION_END, r).emulateTransitionEnd(s);
            } else r();
            this._hoverState = "";
          }
        }),
        (n.update = function () {
          null !== this._popper && this._popper.scheduleUpdate();
        }),
        (n.isWithContent = function () {
          return Boolean(this.getTitle());
        }),
        (n.addAttachmentClass = function (t) {
          e(this.getTipElement()).addClass("bs-tooltip-" + t);
        }),
        (n.getTipElement = function () {
          return (this.tip = this.tip || e(this.config.template)[0]), this.tip;
        }),
        (n.setContent = function () {
          var t = this.getTipElement();
          this.setElementContent(e(t.querySelectorAll(an)), this.getTitle()),
            e(t).removeClass(rn + " " + sn);
        }),
        (n.setElementContent = function (t, n) {
          "object" != typeof n || (!n.nodeType && !n.jquery)
            ? this.config.html
              ? (this.config.sanitize &&
                  (n = Ye(n, this.config.whiteList, this.config.sanitizeFn)),
                t.html(n))
              : t.text(n)
            : this.config.html
            ? e(n).parent().is(t) || t.empty().append(n)
            : t.text(e(n).text());
        }),
        (n.getTitle = function () {
          var t = this.element.getAttribute("data-original-title");
          return (
            t ||
              (t =
                "function" == typeof this.config.title
                  ? this.config.title.call(this.element)
                  : this.config.title),
            t
          );
        }),
        (n._getPopperConfig = function (t) {
          var e = this;
          return s(
            {},
            {
              placement: t,
              modifiers: {
                offset: this._getOffset(),
                flip: { behavior: this.config.fallbackPlacement },
                arrow: { element: ln },
                preventOverflow: { boundariesElement: this.config.boundary },
              },
              onCreate: function (t) {
                t.originalPlacement !== t.placement &&
                  e._handlePopperPlacementChange(t);
              },
              onUpdate: function (t) {
                return e._handlePopperPlacementChange(t);
              },
            },
            {},
            this.config.popperConfig
          );
        }),
        (n._getOffset = function () {
          var t = this,
            e = {};
          return (
            "function" == typeof this.config.offset
              ? (e.fn = function (e) {
                  return (
                    (e.offsets = s(
                      {},
                      e.offsets,
                      {},
                      t.config.offset(e.offsets, t.element) || {}
                    )),
                    e
                  );
                })
              : (e.offset = this.config.offset),
            e
          );
        }),
        (n._getContainer = function () {
          return !1 === this.config.container
            ? document.body
            : c.isElement(this.config.container)
            ? e(this.config.container)
            : e(document).find(this.config.container);
        }),
        (n._getAttachment = function (t) {
          return Ze[t.toUpperCase()];
        }),
        (n._setListeners = function () {
          var t = this;
          this.config.trigger.split(" ").forEach(function (n) {
            if ("click" === n)
              e(t.element).on(
                t.constructor.Event.CLICK,
                t.config.selector,
                function (e) {
                  return t.toggle(e);
                }
              );
            else if (n !== fn) {
              var i =
                  n === cn
                    ? t.constructor.Event.MOUSEENTER
                    : t.constructor.Event.FOCUSIN,
                o =
                  n === cn
                    ? t.constructor.Event.MOUSELEAVE
                    : t.constructor.Event.FOCUSOUT;
              e(t.element)
                .on(i, t.config.selector, function (e) {
                  return t._enter(e);
                })
                .on(o, t.config.selector, function (e) {
                  return t._leave(e);
                });
            }
          }),
            (this._hideModalHandler = function () {
              t.element && t.hide();
            }),
            e(this.element)
              .closest(".modal")
              .on("hide.bs.modal", this._hideModalHandler),
            this.config.selector
              ? (this.config = s({}, this.config, {
                  trigger: "manual",
                  selector: "",
                }))
              : this._fixTitle();
        }),
        (n._fixTitle = function () {
          var t = typeof this.element.getAttribute("data-original-title");
          (this.element.getAttribute("title") || "string" !== t) &&
            (this.element.setAttribute(
              "data-original-title",
              this.element.getAttribute("title") || ""
            ),
            this.element.setAttribute("title", ""));
        }),
        (n._enter = function (t, n) {
          var i = this.constructor.DATA_KEY;
          (n = n || e(t.currentTarget).data(i)) ||
            ((n = new this.constructor(
              t.currentTarget,
              this._getDelegateConfig()
            )),
            e(t.currentTarget).data(i, n)),
            t && (n._activeTrigger["focusin" === t.type ? un : cn] = !0),
            e(n.getTipElement()).hasClass(sn) || n._hoverState === en
              ? (n._hoverState = en)
              : (clearTimeout(n._timeout),
                (n._hoverState = en),
                n.config.delay && n.config.delay.show
                  ? (n._timeout = setTimeout(function () {
                      n._hoverState === en && n.show();
                    }, n.config.delay.show))
                  : n.show());
        }),
        (n._leave = function (t, n) {
          var i = this.constructor.DATA_KEY;
          (n = n || e(t.currentTarget).data(i)) ||
            ((n = new this.constructor(
              t.currentTarget,
              this._getDelegateConfig()
            )),
            e(t.currentTarget).data(i, n)),
            t && (n._activeTrigger["focusout" === t.type ? un : cn] = !1),
            n._isWithActiveTrigger() ||
              (clearTimeout(n._timeout),
              (n._hoverState = nn),
              n.config.delay && n.config.delay.hide
                ? (n._timeout = setTimeout(function () {
                    n._hoverState === nn && n.hide();
                  }, n.config.delay.hide))
                : n.hide());
        }),
        (n._isWithActiveTrigger = function () {
          for (var t in this._activeTrigger)
            if (this._activeTrigger[t]) return !0;
          return !1;
        }),
        (n._getConfig = function (t) {
          var n = e(this.element).data();
          return (
            Object.keys(n).forEach(function (t) {
              -1 !== $e.indexOf(t) && delete n[t];
            }),
            "number" ==
              typeof (t = s(
                {},
                this.constructor.Default,
                {},
                n,
                {},
                "object" == typeof t && t ? t : {}
              )).delay && (t.delay = { show: t.delay, hide: t.delay }),
            "number" == typeof t.title && (t.title = t.title.toString()),
            "number" == typeof t.content && (t.content = t.content.toString()),
            c.typeCheckConfig(Ge, t, this.constructor.DefaultType),
            t.sanitize &&
              (t.template = Ye(t.template, t.whiteList, t.sanitizeFn)),
            t
          );
        }),
        (n._getDelegateConfig = function () {
          var t = {};
          if (this.config)
            for (var e in this.config)
              this.constructor.Default[e] !== this.config[e] &&
                (t[e] = this.config[e]);
          return t;
        }),
        (n._cleanTipClass = function () {
          var t = e(this.getTipElement()),
            n = t.attr("class").match(ze);
          null !== n && n.length && t.removeClass(n.join(""));
        }),
        (n._handlePopperPlacementChange = function (t) {
          var e = t.instance;
          (this.tip = e.popper),
            this._cleanTipClass(),
            this.addAttachmentClass(this._getAttachment(t.placement));
        }),
        (n._fixTransition = function () {
          var t = this.getTipElement(),
            n = this.config.animation;
          null === t.getAttribute("x-placement") &&
            (e(t).removeClass(rn),
            (this.config.animation = !1),
            this.hide(),
            this.show(),
            (this.config.animation = n));
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this).data("bs.tooltip"),
              o = "object" == typeof n && n;
            if (
              (i || !/dispose|hide/.test(n)) &&
              (i || ((i = new t(this, o)), e(this).data("bs.tooltip", i)),
              "string" == typeof n)
            ) {
              if (void 0 === i[n])
                throw new TypeError('No method named "' + n + '"');
              i[n]();
            }
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return tn;
            },
          },
          {
            key: "NAME",
            get: function () {
              return Ge;
            },
          },
          {
            key: "DATA_KEY",
            get: function () {
              return "bs.tooltip";
            },
          },
          {
            key: "Event",
            get: function () {
              return on;
            },
          },
          {
            key: "EVENT_KEY",
            get: function () {
              return ".bs.tooltip";
            },
          },
          {
            key: "DefaultType",
            get: function () {
              return Je;
            },
          },
        ]),
        t
      );
    })();
  (e.fn.tooltip = dn._jQueryInterface),
    (e.fn.tooltip.Constructor = dn),
    (e.fn.tooltip.noConflict = function () {
      return (e.fn.tooltip = Xe), dn._jQueryInterface;
    });
  var pn = "popover",
    mn = e.fn.popover,
    gn = new RegExp("(^|\\s)bs-popover\\S+", "g"),
    _n = s({}, dn.Default, {
      placement: "right",
      trigger: "click",
      content: "",
      template:
        '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
    }),
    vn = s({}, dn.DefaultType, { content: "(string|element|function)" }),
    bn = "fade",
    En = "show",
    yn = ".popover-header",
    Tn = ".popover-body",
    wn = {
      HIDE: "hide.bs.popover",
      HIDDEN: "hidden.bs.popover",
      SHOW: "show.bs.popover",
      SHOWN: "shown.bs.popover",
      INSERTED: "inserted.bs.popover",
      CLICK: "click.bs.popover",
      FOCUSIN: "focusin.bs.popover",
      FOCUSOUT: "focusout.bs.popover",
      MOUSEENTER: "mouseenter.bs.popover",
      MOUSELEAVE: "mouseleave.bs.popover",
    },
    Cn = (function (t) {
      var n, o;
      function r() {
        return t.apply(this, arguments) || this;
      }
      (o = t),
        ((n = r).prototype = Object.create(o.prototype)),
        (n.prototype.constructor = n),
        (n.__proto__ = o);
      var s = r.prototype;
      return (
        (s.isWithContent = function () {
          return this.getTitle() || this._getContent();
        }),
        (s.addAttachmentClass = function (t) {
          e(this.getTipElement()).addClass("bs-popover-" + t);
        }),
        (s.getTipElement = function () {
          return (this.tip = this.tip || e(this.config.template)[0]), this.tip;
        }),
        (s.setContent = function () {
          var t = e(this.getTipElement());
          this.setElementContent(t.find(yn), this.getTitle());
          var n = this._getContent();
          "function" == typeof n && (n = n.call(this.element)),
            this.setElementContent(t.find(Tn), n),
            t.removeClass(bn + " " + En);
        }),
        (s._getContent = function () {
          return (
            this.element.getAttribute("data-content") || this.config.content
          );
        }),
        (s._cleanTipClass = function () {
          var t = e(this.getTipElement()),
            n = t.attr("class").match(gn);
          null !== n && n.length > 0 && t.removeClass(n.join(""));
        }),
        (r._jQueryInterface = function (t) {
          return this.each(function () {
            var n = e(this).data("bs.popover"),
              i = "object" == typeof t ? t : null;
            if (
              (n || !/dispose|hide/.test(t)) &&
              (n || ((n = new r(this, i)), e(this).data("bs.popover", n)),
              "string" == typeof t)
            ) {
              if (void 0 === n[t])
                throw new TypeError('No method named "' + t + '"');
              n[t]();
            }
          });
        }),
        i(r, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return _n;
            },
          },
          {
            key: "NAME",
            get: function () {
              return pn;
            },
          },
          {
            key: "DATA_KEY",
            get: function () {
              return "bs.popover";
            },
          },
          {
            key: "Event",
            get: function () {
              return wn;
            },
          },
          {
            key: "EVENT_KEY",
            get: function () {
              return ".bs.popover";
            },
          },
          {
            key: "DefaultType",
            get: function () {
              return vn;
            },
          },
        ]),
        r
      );
    })(dn);
  (e.fn.popover = Cn._jQueryInterface),
    (e.fn.popover.Constructor = Cn),
    (e.fn.popover.noConflict = function () {
      return (e.fn.popover = mn), Cn._jQueryInterface;
    });
  var Sn = "scrollspy",
    Dn = e.fn[Sn],
    In = { offset: 10, method: "auto", target: "" },
    An = { offset: "number", method: "string", target: "(string|element)" },
    On = {
      ACTIVATE: "activate.bs.scrollspy",
      SCROLL: "scroll.bs.scrollspy",
      LOAD_DATA_API: "load.bs.scrollspy.data-api",
    },
    Nn = "dropdown-item",
    Ln = "active",
    kn = {
      DATA_SPY: '[data-spy="scroll"]',
      ACTIVE: ".active",
      NAV_LIST_GROUP: ".nav, .list-group",
      NAV_LINKS: ".nav-link",
      NAV_ITEMS: ".nav-item",
      LIST_ITEMS: ".list-group-item",
      DROPDOWN: ".dropdown",
      DROPDOWN_ITEMS: ".dropdown-item",
      DROPDOWN_TOGGLE: ".dropdown-toggle",
    },
    Pn = "offset",
    xn = "position",
    jn = (function () {
      function t(t, n) {
        var i = this;
        (this._element = t),
          (this._scrollElement = "BODY" === t.tagName ? window : t),
          (this._config = this._getConfig(n)),
          (this._selector =
            this._config.target +
            " " +
            kn.NAV_LINKS +
            "," +
            this._config.target +
            " " +
            kn.LIST_ITEMS +
            "," +
            this._config.target +
            " " +
            kn.DROPDOWN_ITEMS),
          (this._offsets = []),
          (this._targets = []),
          (this._activeTarget = null),
          (this._scrollHeight = 0),
          e(this._scrollElement).on(On.SCROLL, function (t) {
            return i._process(t);
          }),
          this.refresh(),
          this._process();
      }
      var n = t.prototype;
      return (
        (n.refresh = function () {
          var t = this,
            n = this._scrollElement === this._scrollElement.window ? Pn : xn,
            i = "auto" === this._config.method ? n : this._config.method,
            o = i === xn ? this._getScrollTop() : 0;
          (this._offsets = []),
            (this._targets = []),
            (this._scrollHeight = this._getScrollHeight()),
            [].slice
              .call(document.querySelectorAll(this._selector))
              .map(function (t) {
                var n,
                  r = c.getSelectorFromElement(t);
                if ((r && (n = document.querySelector(r)), n)) {
                  var s = n.getBoundingClientRect();
                  if (s.width || s.height) return [e(n)[i]().top + o, r];
                }
                return null;
              })
              .filter(function (t) {
                return t;
              })
              .sort(function (t, e) {
                return t[0] - e[0];
              })
              .forEach(function (e) {
                t._offsets.push(e[0]), t._targets.push(e[1]);
              });
        }),
        (n.dispose = function () {
          e.removeData(this._element, "bs.scrollspy"),
            e(this._scrollElement).off(".bs.scrollspy"),
            (this._element = null),
            (this._scrollElement = null),
            (this._config = null),
            (this._selector = null),
            (this._offsets = null),
            (this._targets = null),
            (this._activeTarget = null),
            (this._scrollHeight = null);
        }),
        (n._getConfig = function (t) {
          if (
            "string" !=
            typeof (t = s({}, In, {}, "object" == typeof t && t ? t : {}))
              .target
          ) {
            var n = e(t.target).attr("id");
            n || ((n = c.getUID(Sn)), e(t.target).attr("id", n)),
              (t.target = "#" + n);
          }
          return c.typeCheckConfig(Sn, t, An), t;
        }),
        (n._getScrollTop = function () {
          return this._scrollElement === window
            ? this._scrollElement.pageYOffset
            : this._scrollElement.scrollTop;
        }),
        (n._getScrollHeight = function () {
          return (
            this._scrollElement.scrollHeight ||
            Math.max(
              document.body.scrollHeight,
              document.documentElement.scrollHeight
            )
          );
        }),
        (n._getOffsetHeight = function () {
          return this._scrollElement === window
            ? window.innerHeight
            : this._scrollElement.getBoundingClientRect().height;
        }),
        (n._process = function () {
          var t = this._getScrollTop() + this._config.offset,
            e = this._getScrollHeight(),
            n = this._config.offset + e - this._getOffsetHeight();
          if ((this._scrollHeight !== e && this.refresh(), t >= n)) {
            var i = this._targets[this._targets.length - 1];
            this._activeTarget !== i && this._activate(i);
          } else {
            if (
              this._activeTarget &&
              t < this._offsets[0] &&
              this._offsets[0] > 0
            )
              return (this._activeTarget = null), void this._clear();
            for (var o = this._offsets.length; o--; ) {
              this._activeTarget !== this._targets[o] &&
                t >= this._offsets[o] &&
                (void 0 === this._offsets[o + 1] || t < this._offsets[o + 1]) &&
                this._activate(this._targets[o]);
            }
          }
        }),
        (n._activate = function (t) {
          (this._activeTarget = t), this._clear();
          var n = this._selector.split(",").map(function (e) {
              return (
                e + '[data-target="' + t + '"],' + e + '[href="' + t + '"]'
              );
            }),
            i = e([].slice.call(document.querySelectorAll(n.join(","))));
          i.hasClass(Nn)
            ? (i.closest(kn.DROPDOWN).find(kn.DROPDOWN_TOGGLE).addClass(Ln),
              i.addClass(Ln))
            : (i.addClass(Ln),
              i
                .parents(kn.NAV_LIST_GROUP)
                .prev(kn.NAV_LINKS + ", " + kn.LIST_ITEMS)
                .addClass(Ln),
              i
                .parents(kn.NAV_LIST_GROUP)
                .prev(kn.NAV_ITEMS)
                .children(kn.NAV_LINKS)
                .addClass(Ln)),
            e(this._scrollElement).trigger(On.ACTIVATE, { relatedTarget: t });
        }),
        (n._clear = function () {
          [].slice
            .call(document.querySelectorAll(this._selector))
            .filter(function (t) {
              return t.classList.contains(Ln);
            })
            .forEach(function (t) {
              return t.classList.remove(Ln);
            });
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this).data("bs.scrollspy");
            if (
              (i ||
                ((i = new t(this, "object" == typeof n && n)),
                e(this).data("bs.scrollspy", i)),
              "string" == typeof n)
            ) {
              if (void 0 === i[n])
                throw new TypeError('No method named "' + n + '"');
              i[n]();
            }
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "Default",
            get: function () {
              return In;
            },
          },
        ]),
        t
      );
    })();
  e(window).on(On.LOAD_DATA_API, function () {
    for (
      var t = [].slice.call(document.querySelectorAll(kn.DATA_SPY)),
        n = t.length;
      n--;

    ) {
      var i = e(t[n]);
      jn._jQueryInterface.call(i, i.data());
    }
  }),
    (e.fn[Sn] = jn._jQueryInterface),
    (e.fn[Sn].Constructor = jn),
    (e.fn[Sn].noConflict = function () {
      return (e.fn[Sn] = Dn), jn._jQueryInterface;
    });
  var Hn = e.fn.tab,
    Rn = {
      HIDE: "hide.bs.tab",
      HIDDEN: "hidden.bs.tab",
      SHOW: "show.bs.tab",
      SHOWN: "shown.bs.tab",
      CLICK_DATA_API: "click.bs.tab.data-api",
    },
    Mn = "dropdown-menu",
    Fn = "active",
    Wn = "disabled",
    Un = "fade",
    Bn = "show",
    qn = ".dropdown",
    Kn = ".nav, .list-group",
    Vn = ".active",
    Qn = "> li > .active",
    Yn = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',
    Gn = ".dropdown-toggle",
    Xn = "> .dropdown-menu .active",
    zn = (function () {
      function t(t) {
        this._element = t;
      }
      var n = t.prototype;
      return (
        (n.show = function () {
          var t = this;
          if (
            !(
              (this._element.parentNode &&
                this._element.parentNode.nodeType === Node.ELEMENT_NODE &&
                e(this._element).hasClass(Fn)) ||
              e(this._element).hasClass(Wn)
            )
          ) {
            var n,
              i,
              o = e(this._element).closest(Kn)[0],
              r = c.getSelectorFromElement(this._element);
            if (o) {
              var s = "UL" === o.nodeName || "OL" === o.nodeName ? Qn : Vn;
              i = (i = e.makeArray(e(o).find(s)))[i.length - 1];
            }
            var a = e.Event(Rn.HIDE, { relatedTarget: this._element }),
              l = e.Event(Rn.SHOW, { relatedTarget: i });
            if (
              (i && e(i).trigger(a),
              e(this._element).trigger(l),
              !l.isDefaultPrevented() && !a.isDefaultPrevented())
            ) {
              r && (n = document.querySelector(r)),
                this._activate(this._element, o);
              var u = function () {
                var n = e.Event(Rn.HIDDEN, { relatedTarget: t._element }),
                  o = e.Event(Rn.SHOWN, { relatedTarget: i });
                e(i).trigger(n), e(t._element).trigger(o);
              };
              n ? this._activate(n, n.parentNode, u) : u();
            }
          }
        }),
        (n.dispose = function () {
          e.removeData(this._element, "bs.tab"), (this._element = null);
        }),
        (n._activate = function (t, n, i) {
          var o = this,
            r = (!n || ("UL" !== n.nodeName && "OL" !== n.nodeName)
              ? e(n).children(Vn)
              : e(n).find(Qn))[0],
            s = i && r && e(r).hasClass(Un),
            a = function () {
              return o._transitionComplete(t, r, i);
            };
          if (r && s) {
            var l = c.getTransitionDurationFromElement(r);
            e(r)
              .removeClass(Bn)
              .one(c.TRANSITION_END, a)
              .emulateTransitionEnd(l);
          } else a();
        }),
        (n._transitionComplete = function (t, n, i) {
          if (n) {
            e(n).removeClass(Fn);
            var o = e(n.parentNode).find(Xn)[0];
            o && e(o).removeClass(Fn),
              "tab" === n.getAttribute("role") &&
                n.setAttribute("aria-selected", !1);
          }
          if (
            (e(t).addClass(Fn),
            "tab" === t.getAttribute("role") &&
              t.setAttribute("aria-selected", !0),
            c.reflow(t),
            t.classList.contains(Un) && t.classList.add(Bn),
            t.parentNode && e(t.parentNode).hasClass(Mn))
          ) {
            var r = e(t).closest(qn)[0];
            if (r) {
              var s = [].slice.call(r.querySelectorAll(Gn));
              e(s).addClass(Fn);
            }
            t.setAttribute("aria-expanded", !0);
          }
          i && i();
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this),
              o = i.data("bs.tab");
            if (
              (o || ((o = new t(this)), i.data("bs.tab", o)),
              "string" == typeof n)
            ) {
              if (void 0 === o[n])
                throw new TypeError('No method named "' + n + '"');
              o[n]();
            }
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
        ]),
        t
      );
    })();
  e(document).on(Rn.CLICK_DATA_API, Yn, function (t) {
    t.preventDefault(), zn._jQueryInterface.call(e(this), "show");
  }),
    (e.fn.tab = zn._jQueryInterface),
    (e.fn.tab.Constructor = zn),
    (e.fn.tab.noConflict = function () {
      return (e.fn.tab = Hn), zn._jQueryInterface;
    });
  var $n = e.fn.toast,
    Jn = {
      CLICK_DISMISS: "click.dismiss.bs.toast",
      HIDE: "hide.bs.toast",
      HIDDEN: "hidden.bs.toast",
      SHOW: "show.bs.toast",
      SHOWN: "shown.bs.toast",
    },
    Zn = "fade",
    ti = "hide",
    ei = "show",
    ni = "showing",
    ii = { animation: "boolean", autohide: "boolean", delay: "number" },
    oi = { animation: !0, autohide: !0, delay: 500 },
    ri = '[data-dismiss="toast"]',
    si = (function () {
      function t(t, e) {
        (this._element = t),
          (this._config = this._getConfig(e)),
          (this._timeout = null),
          this._setListeners();
      }
      var n = t.prototype;
      return (
        (n.show = function () {
          var t = this,
            n = e.Event(Jn.SHOW);
          if ((e(this._element).trigger(n), !n.isDefaultPrevented())) {
            this._config.animation && this._element.classList.add(Zn);
            var i = function () {
              t._element.classList.remove(ni),
                t._element.classList.add(ei),
                e(t._element).trigger(Jn.SHOWN),
                t._config.autohide &&
                  (t._timeout = setTimeout(function () {
                    t.hide();
                  }, t._config.delay));
            };
            if (
              (this._element.classList.remove(ti),
              c.reflow(this._element),
              this._element.classList.add(ni),
              this._config.animation)
            ) {
              var o = c.getTransitionDurationFromElement(this._element);
              e(this._element).one(c.TRANSITION_END, i).emulateTransitionEnd(o);
            } else i();
          }
        }),
        (n.hide = function () {
          if (this._element.classList.contains(ei)) {
            var t = e.Event(Jn.HIDE);
            e(this._element).trigger(t),
              t.isDefaultPrevented() || this._close();
          }
        }),
        (n.dispose = function () {
          clearTimeout(this._timeout),
            (this._timeout = null),
            this._element.classList.contains(ei) &&
              this._element.classList.remove(ei),
            e(this._element).off(Jn.CLICK_DISMISS),
            e.removeData(this._element, "bs.toast"),
            (this._element = null),
            (this._config = null);
        }),
        (n._getConfig = function (t) {
          return (
            (t = s(
              {},
              oi,
              {},
              e(this._element).data(),
              {},
              "object" == typeof t && t ? t : {}
            )),
            c.typeCheckConfig("toast", t, this.constructor.DefaultType),
            t
          );
        }),
        (n._setListeners = function () {
          var t = this;
          e(this._element).on(Jn.CLICK_DISMISS, ri, function () {
            return t.hide();
          });
        }),
        (n._close = function () {
          var t = this,
            n = function () {
              t._element.classList.add(ti), e(t._element).trigger(Jn.HIDDEN);
            };
          if ((this._element.classList.remove(ei), this._config.animation)) {
            var i = c.getTransitionDurationFromElement(this._element);
            e(this._element).one(c.TRANSITION_END, n).emulateTransitionEnd(i);
          } else n();
        }),
        (t._jQueryInterface = function (n) {
          return this.each(function () {
            var i = e(this),
              o = i.data("bs.toast");
            if (
              (o ||
                ((o = new t(this, "object" == typeof n && n)),
                i.data("bs.toast", o)),
              "string" == typeof n)
            ) {
              if (void 0 === o[n])
                throw new TypeError('No method named "' + n + '"');
              o[n](this);
            }
          });
        }),
        i(t, null, [
          {
            key: "VERSION",
            get: function () {
              return "4.4.1";
            },
          },
          {
            key: "DefaultType",
            get: function () {
              return ii;
            },
          },
          {
            key: "Default",
            get: function () {
              return oi;
            },
          },
        ]),
        t
      );
    })();
  (e.fn.toast = si._jQueryInterface),
    (e.fn.toast.Constructor = si),
    (e.fn.toast.noConflict = function () {
      return (e.fn.toast = $n), si._jQueryInterface;
    }),
    (t.Alert = m),
    (t.Button = A),
    (t.Carousel = X),
    (t.Collapse = lt),
    (t.Dropdown = Oe),
    (t.Modal = Be),
    (t.Popover = Cn),
    (t.Scrollspy = jn),
    (t.Tab = zn),
    (t.Toast = si),
    (t.Tooltip = dn),
    (t.Util = c),
    Object.defineProperty(t, "__esModule", { value: !0 });
});
