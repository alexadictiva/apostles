<?php
include './components/head.php';
include './components/header.php';
?>

<main>
  <section id="intro">
    <div class="video-container">
      <video autoplay="autoplay" loop playsinline muted>
        <source src="./assets/video/bgMain.mp4" type="video/mp4" />
      </video>
    </div>

    <div class="intro-container">
      <div class="intro-content">
        <div class="intro-description-bolder">
          <p>REGIONAL DISTRIBUTOR OF INTERNATIONAL BRANDS</p>
        </div>
        <div class="intro-description-normal">
          <h1>ACHIEVING GROWTH</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="cards-main-view">
    <article class="card-main card1">
      <h2>PORTFOLIO</h2>
      <p>
        The Twelve Apostles Inc. portfolio covers a diverse range of brand
        categories. As the company represents multiple markets, our target
        end-consumer is to combine an excellent product with the best
        competitive price.
      </p>
      <a href="./portfolio.php" class="read-more-btn">Read More</a>
    </article>
    <article class="card-main card2">
      <h2>DISTRIBUTION</h2>
      <p>
        The Twelve Apostles Inc. has established commercial relationships with
        various kind of clients thanks to the requirement of the new
        distribution landscape. This allows brands to maximize the reach on a
        global scale.
      </p>
      <a href="./distribution.php" class="read-more-btn">Read More</a>
    </article>
    <article class="card-main card3">
      <h2>NETWORK</h2>
      <p>
        The Twelve Apostles Inc. has organized the logistic of the company, in
        different strategic locations in order to achieve regional integration
        and create an ideal resource for this kind of business.
      </p>
      <a href="./network.php" class="read-more-btn">Read More</a>
    </article>
  </section>
  <section class="about-main-view">
    <div class="wow animate__animated animate__fadeIn overlay">
      <h2>ABOUT US</h2>
      <p>
        The Twelve Apostles Inc. is a long experience company in distributing
        international brands. We specialized in regional sale of a wide variety
        of products. During the years we have been in the market, we have
        established solid relationships with our distribution brands and with
        our clients. We always encouraged to bring to our customers the best
        product that is on the global market. Currently, we are specialized in
        distributing a variety of watches, jewelry, handbags, travel gear and
        home goods. Our future vision is to grow with new leading brands, market
        channels and product innovation.
      </p>
      <a href="./about.php" class="read-more-btn">Read More</a>
    </div>
  </section>
  <section id="contactus">
    <div class="wow animate__fadeIn contactus-container">
      <h2>CONTACT US</h2>
      <div class="contactus-content">
        <div class="form-description">
          <p>
            Calle 53E World Trade Center <br />
            14th Floor Esc. 1404 <br />
            Panama City, Panama
          </p>
          <p>
            For more information, complete the following form and we will
            contact you shortly.
          </p>
        </div>
        <div class="form-container">
          <form action="POST" id="form">
            <div class="form-control">
              <input
                type="text"
                placeholder="Name"
                id="name"
                name="name"
                required
              />
            </div>
            <div class="form-control">
              <input
                type="mail"
                placeholder="Email"
                id="email"
                name="email"
                required
              />
            </div>
            <div class="form-control">
              <input
                type="text"
                placeholder="Subject"
                id="subject"
                name="subject"
                required
              />
            </div>
            <div class="form-control">
              <textarea
                name="message"
                id="message"
                cols="30"
                placeholder="Type your message here..."
                rows="10"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn-sumbit">Submit</button>
          </form>
          <a id="mailto" href="mailto:nicolewaingarten@nihebal.com.ar">MAIL</a>
        </div>
        <div class="contactus-map">
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.9103833789372!2d-79.52242598569356!3d8.98039379222216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca8e3edc9e20d%3A0x7f7d590dc09caff!2sWorld%20Trade%20Center%20Panama!5e0!3m2!1ses-419!2sar!4v1634491759669!5m2!1ses-419!2sar"
              loading="lazy"
              id="map"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script>
  /*! WOW wow.js - v1.3.0 - 2016-10-04
   * https://wowjs.uk
   * Copyright (c) 2016 Thomas Grainger; Licensed MIT */ !(function (a, b) {
    if ("function" == typeof define && define.amd)
      define(["module", "exports"], b);
    else if ("undefined" != typeof exports) b(module, exports);
    else {
      var c = { exports: {} };
      b(c, c.exports), (a.WOW = c.exports);
    }
  })(this, function (a, b) {
    "use strict";
    function c(a, b) {
      if (!(a instanceof b))
        throw new TypeError("Cannot call a class as a function");
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
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        a
      );
    }
    function g(a) {
      var b =
          arguments.length <= 1 || void 0 === arguments[1] ? !1 : arguments[1],
        c =
          arguments.length <= 2 || void 0 === arguments[2] ? !1 : arguments[2],
        d =
          arguments.length <= 3 || void 0 === arguments[3]
            ? null
            : arguments[3],
        e = void 0;
      return (
        null != document.createEvent
          ? ((e = document.createEvent("CustomEvent")),
            e.initCustomEvent(a, b, c, d))
          : null != document.createEventObject
          ? ((e = document.createEventObject()), (e.eventType = a))
          : (e.eventName = a),
        e
      );
    }
    function h(a, b) {
      null != a.dispatchEvent
        ? a.dispatchEvent(b)
        : b in (null != a)
        ? a[b]()
        : "on" + b in (null != a) && a["on" + b]();
    }
    function i(a, b, c) {
      null != a.addEventListener
        ? a.addEventListener(b, c, !1)
        : null != a.attachEvent
        ? a.attachEvent("on" + b, c)
        : (a[b] = c);
    }
    function j(a, b, c) {
      null != a.removeEventListener
        ? a.removeEventListener(b, c, !1)
        : null != a.detachEvent
        ? a.detachEvent("on" + b, c)
        : delete a[b];
    }
    function k() {
      return "innerHeight" in window
        ? window.innerHeight
        : document.documentElement.clientHeight;
    }
    Object.defineProperty(b, "__esModule", { value: !0 });
    var l,
      m,
      n = (function () {
        function a(a, b) {
          for (var c = 0; c < b.length; c++) {
            var d = b[c];
            (d.enumerable = d.enumerable || !1),
              (d.configurable = !0),
              "value" in d && (d.writable = !0),
              Object.defineProperty(a, d.key, d);
          }
        }
        return function (b, c, d) {
          return c && a(b.prototype, c), d && a(b, d), b;
        };
      })(),
      o =
        window.WeakMap ||
        window.MozWeakMap ||
        (function () {
          function a() {
            c(this, a), (this.keys = []), (this.values = []);
          }
          return (
            n(a, [
              {
                key: "get",
                value: function (a) {
                  for (var b = 0; b < this.keys.length; b++) {
                    var c = this.keys[b];
                    if (c === a) return this.values[b];
                  }
                },
              },
              {
                key: "set",
                value: function (a, b) {
                  for (var c = 0; c < this.keys.length; c++) {
                    var d = this.keys[c];
                    if (d === a) return (this.values[c] = b), this;
                  }
                  return this.keys.push(a), this.values.push(b), this;
                },
              },
            ]),
            a
          );
        })(),
      p =
        window.MutationObserver ||
        window.WebkitMutationObserver ||
        window.MozMutationObserver ||
        ((m = l =
          (function () {
            function a() {
              c(this, a),
                "undefined" != typeof console &&
                  null !== console &&
                  (console.warn(
                    "MutationObserver is not supported by your browser."
                  ),
                  console.warn(
                    "WOW.js cannot detect dom mutations, please call .sync() after loading new content."
                  ));
            }
            return n(a, [{ key: "observe", value: function () {} }]), a;
          })()),
        (l.notSupported = !0),
        m),
      q =
        window.getComputedStyle ||
        function (a) {
          var b = /(\-([a-z]){1})/g;
          return {
            getPropertyValue: function (c) {
              "float" === c && (c = "styleFloat"),
                b.test(c) &&
                  c.replace(b, function (a, b) {
                    return b.toUpperCase();
                  });
              var d = a.currentStyle;
              return (null != d ? d[c] : void 0) || null;
            },
          };
        },
      r = (function () {
        function a() {
          var b =
            arguments.length <= 0 || void 0 === arguments[0]
              ? {}
              : arguments[0];
          c(this, a),
            (this.defaults = {
              boxClass: "wow",
              animateClass: "animated",
              offset: 0,
              mobile: !0,
              live: !0,
              callback: null,
              scrollContainer: null,
              resetAnimation: !0,
            }),
            (this.animate = (function () {
              return "requestAnimationFrame" in window
                ? function (a) {
                    return window.requestAnimationFrame(a);
                  }
                : function (a) {
                    return a();
                  };
            })()),
            (this.vendors = ["moz", "webkit"]),
            (this.start = this.start.bind(this)),
            (this.resetAnimation = this.resetAnimation.bind(this)),
            (this.scrollHandler = this.scrollHandler.bind(this)),
            (this.scrollCallback = this.scrollCallback.bind(this)),
            (this.scrolled = !0),
            (this.config = e(b, this.defaults)),
            null != b.scrollContainer &&
              (this.config.scrollContainer = document.querySelector(
                b.scrollContainer
              )),
            (this.animationNameCache = new o()),
            (this.wowEvent = g(this.config.boxClass));
        }
        return (
          n(a, [
            {
              key: "init",
              value: function () {
                (this.element = window.document.documentElement),
                  d(document.readyState, ["interactive", "complete"])
                    ? this.start()
                    : i(document, "DOMContentLoaded", this.start),
                  (this.finished = []);
              },
            },
            {
              key: "start",
              value: function () {
                var a = this;
                if (
                  ((this.stopped = !1),
                  (this.boxes = [].slice.call(
                    this.element.querySelectorAll("." + this.config.boxClass)
                  )),
                  (this.all = this.boxes.slice(0)),
                  this.boxes.length)
                )
                  if (this.disabled()) this.resetStyle();
                  else
                    for (var b = 0; b < this.boxes.length; b++) {
                      var c = this.boxes[b];
                      this.applyStyle(c, !0);
                    }
                if (
                  (this.disabled() ||
                    (i(
                      this.config.scrollContainer || window,
                      "scroll",
                      this.scrollHandler
                    ),
                    i(window, "resize", this.scrollHandler),
                    (this.interval = setInterval(this.scrollCallback, 50))),
                  this.config.live)
                ) {
                  var d = new p(function (b) {
                    for (var c = 0; c < b.length; c++)
                      for (var d = b[c], e = 0; e < d.addedNodes.length; e++) {
                        var f = d.addedNodes[e];
                        a.doSync(f);
                      }
                  });
                  d.observe(document.body, { childList: !0, subtree: !0 });
                }
              },
            },
            {
              key: "stop",
              value: function () {
                (this.stopped = !0),
                  j(
                    this.config.scrollContainer || window,
                    "scroll",
                    this.scrollHandler
                  ),
                  j(window, "resize", this.scrollHandler),
                  null != this.interval && clearInterval(this.interval);
              },
            },
            {
              key: "sync",
              value: function () {
                p.notSupported && this.doSync(this.element);
              },
            },
            {
              key: "doSync",
              value: function (a) {
                if (
                  (("undefined" != typeof a && null !== a) ||
                    (a = this.element),
                  1 === a.nodeType)
                ) {
                  a = a.parentNode || a;
                  for (
                    var b = a.querySelectorAll("." + this.config.boxClass),
                      c = 0;
                    c < b.length;
                    c++
                  ) {
                    var e = b[c];
                    d(e, this.all) ||
                      (this.boxes.push(e),
                      this.all.push(e),
                      this.stopped || this.disabled()
                        ? this.resetStyle()
                        : this.applyStyle(e, !0),
                      (this.scrolled = !0));
                  }
                }
              },
            },
            {
              key: "show",
              value: function (a) {
                return (
                  this.applyStyle(a),
                  (a.className = a.className + " " + this.config.animateClass),
                  null != this.config.callback && this.config.callback(a),
                  h(a, this.wowEvent),
                  this.config.resetAnimation &&
                    (i(a, "animationend", this.resetAnimation),
                    i(a, "oanimationend", this.resetAnimation),
                    i(a, "webkitAnimationEnd", this.resetAnimation),
                    i(a, "MSAnimationEnd", this.resetAnimation)),
                  a
                );
              },
            },
            {
              key: "applyStyle",
              value: function (a, b) {
                var c = this,
                  d = a.getAttribute("data-wow-duration"),
                  e = a.getAttribute("data-wow-delay"),
                  f = a.getAttribute("data-wow-iteration");
                return this.animate(function () {
                  return c.customStyle(a, b, d, e, f);
                });
              },
            },
            {
              key: "resetStyle",
              value: function () {
                for (var a = 0; a < this.boxes.length; a++) {
                  var b = this.boxes[a];
                  b.style.visibility = "visible";
                }
              },
            },
            {
              key: "resetAnimation",
              value: function (a) {
                if (a.type.toLowerCase().indexOf("animationend") >= 0) {
                  var b = a.target || a.srcElement;
                  b.className = b.className
                    .replace(this.config.animateClass, "")
                    .trim();
                }
              },
            },
            {
              key: "customStyle",
              value: function (a, b, c, d, e) {
                return (
                  b && this.cacheAnimationName(a),
                  (a.style.visibility = b ? "hidden" : "visible"),
                  c && this.vendorSet(a.style, { animationDuration: c }),
                  d && this.vendorSet(a.style, { animationDelay: d }),
                  e && this.vendorSet(a.style, { animationIterationCount: e }),
                  this.vendorSet(a.style, {
                    animationName: b ? "none" : this.cachedAnimationName(a),
                  }),
                  a
                );
              },
            },
            {
              key: "vendorSet",
              value: function (a, b) {
                for (var c in b)
                  if (b.hasOwnProperty(c)) {
                    var d = b[c];
                    a["" + c] = d;
                    for (var e = 0; e < this.vendors.length; e++) {
                      var f = this.vendors[e];
                      a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = d;
                    }
                  }
              },
            },
            {
              key: "vendorCSS",
              value: function (a, b) {
                for (
                  var c = q(a), d = c.getPropertyCSSValue(b), e = 0;
                  e < this.vendors.length;
                  e++
                ) {
                  var f = this.vendors[e];
                  d = d || c.getPropertyCSSValue("-" + f + "-" + b);
                }
                return d;
              },
            },
            {
              key: "animationName",
              value: function (a) {
                var b = void 0;
                try {
                  b = this.vendorCSS(a, "animation-name").cssText;
                } catch (c) {
                  b = q(a).getPropertyValue("animation-name");
                }
                return "none" === b ? "" : b;
              },
            },
            {
              key: "cacheAnimationName",
              value: function (a) {
                return this.animationNameCache.set(a, this.animationName(a));
              },
            },
            {
              key: "cachedAnimationName",
              value: function (a) {
                return this.animationNameCache.get(a);
              },
            },
            {
              key: "scrollHandler",
              value: function () {
                this.scrolled = !0;
              },
            },
            {
              key: "scrollCallback",
              value: function () {
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
                  (this.boxes = a),
                    this.boxes.length || this.config.live || this.stop();
                }
              },
            },
            {
              key: "offsetTop",
              value: function (a) {
                for (; void 0 === a.offsetTop; ) a = a.parentNode;
                for (var b = a.offsetTop; a.offsetParent; )
                  (a = a.offsetParent), (b += a.offsetTop);
                return b;
              },
            },
            {
              key: "isVisible",
              value: function (a) {
                var b = a.getAttribute("data-wow-offset") || this.config.offset,
                  c =
                    (this.config.scrollContainer &&
                      this.config.scrollContainer.scrollTop) ||
                    window.pageYOffset,
                  d = c + Math.min(this.element.clientHeight, k()) - b,
                  e = this.offsetTop(a),
                  f = e + a.clientHeight;
                return d >= e && f >= c;
              },
            },
            {
              key: "disabled",
              value: function () {
                return !this.config.mobile && f(navigator.userAgent);
              },
            },
          ]),
          a
        );
      })();
    (b["default"] = r), (a.exports = b["default"]);
  });
</script>
<script>
  /*Form*/

  const form = document
    .querySelector("#form")
    .addEventListener("submit", handleSubmit);
  const mailto = document.querySelector("#mailto");

  function handleSubmit(event) {
    event.preventDefault();

    const formulario = new FormData(this);
    mailto.setAttribute(
      "href",
      `mailto:academiatrucking@gmail.com?subject=${formulario.get(
        "name"
      )}, ${formulario.get("subject")}&body=${formulario.get(
        "email"
      )}, ${formulario.get("message")}`
    );

    mailto.click();
  }
  /*Wow */
  new WOW().init();
</script>

<?php
include './components/footer.php';
?>
