/*-----------------------------------------------------------
* Template Name    : Busion | Responsive Bootstrap 4 Landing Template
* Author           : SRBThemes
* Version          : 1.0.0
* Created          : February 2018
* File Description : Main Js file of the template
*------------------------------------------------------------
*/

! function(t) {
    "use strict";
    var o;
    t(window).on("scroll", function() {
        t(window).scrollTop() >= 50 ? t(".sticky").addClass("stickyadd") : t(".sticky").removeClass("stickyadd")
    }), 

    t(".navbar-nav a").on("click", function(o) {
        var n = t(this);
        t("html, body").stop().animate({
            scrollTop: t(n.attr("href")).offset().top - 0
        }, 1500, "easeInOutExpo"), o.preventDefault()
    }), 

    t("#navbarCollapse").scrollspy({
        offset: 20
    }), o = 0, 

    t(window).on("scroll", function() {
        var n = t("#counter").offset().top - window.innerHeight;
        0 == o && t(window).scrollTop() > n && (t(".lan_fun_value").each(function() {
            var o = t(this),
                n = o.attr("data-count");
            t({
                countNum: o.text()
            }).animate({
                countNum: n
            }, {
                duration: 2e3,
                easing: "swing",
                step: function() {
                    o.text(Math.floor(this.countNum))
                },
                complete: function() {
                    o.text(this.countNum)
                }
            })
        }), o = 1)
    }), 

    t(".watch-video").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1
    })
}(jQuery);