(function($) {
    "use strict";

    /*--------------------------
                offcanvas-menu
         ---------------------------- */

    const $offcanvasToggle = $(".offcanvas-toggle");
    const $offcanvasMobileMenu = $("#offcanvas-mobile-menu");
    const $offcanvasOverlay = $(".offcanvas-overlay");

    $offcanvasToggle.on("click", function() {
        $(this).addClass("close");
        $offcanvasMobileMenu.addClass("offcanvas-open");
        $($offcanvasOverlay).fadeIn(500);
    });

    $offcanvasOverlay.on("click", function() {
        $(this).fadeOut(500);
        $offcanvasMobileMenu.removeClass("offcanvas-open");
        $offcanvasToggle.removeClass("close");
    });

    const $offcanvasMenu = $("#offcanvas-menu li a");
    $offcanvasMenu.on("click", function(e) {
        // e.preventDefault();
        $(this).closest("li").toggleClass("active");
        $(this).closest("li").siblings().removeClass("active");
        $(this).closest("li").siblings().children(".sub-menu").slideUp();
        $(this)
            .closest("li")
            .siblings()
            .children(".sub-menu")
            .children("li")
            .toggleClass("active");
        $(this)
            .closest("li")
            .siblings()
            .children(".sub-menu")
            .children("li")
            .removeClass("active");
        $(this).parent().children(".sub-menu").slideToggle();
    });

    const $offcanvasMenu2 = $("#offcanvas-menu2 li a");
    $offcanvasMenu2.on('click', (function(e) {
        // e.preventDefault();
        $(this).closest("li").toggleClass("active");
        $(this).closest("li").siblings().removeClass("active");
        $(this).closest("li").siblings().children(".sub-menu").slideUp();
        $(this)
            .closest("li")
            .siblings()
            .children(".sub-menu")
            .children("li")
            .toggleClass("active");
        $(this)
            .closest("li")
            .siblings()
            .children(".sub-menu")
            .children("li")
            .removeClass("active");
        $(this).parent().children(".sub-menu").slideToggle();
    }))

    const $offcanvasClose = $(".offcanvas-close");
    $offcanvasClose.on("click", function() {
        $offcanvasMobileMenu.removeClass("offcanvas-open");
        $offcanvasToggle.removeClass("close");
        $($offcanvasOverlay).fadeOut(500);
    });

    /*--------------------------
          Sticky Menu
      ---------------------------- */

    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();
        if (scroll < 150) {
            $(".site-menu-section").removeClass("is-isticky");
        } else {
            $(".site-menu-section").addClass("is-isticky");
        }
    });

    /*--------------------------
      main slider active
      ---------------------------- */

    const timer = 5000;
    const $mainSlider = $(".main-slider");

    $mainSlider.slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: true,
        prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        responsive: [{ breakpoint: 767, settings: { dots: false, arrows: false } }],
    });

    function progressBar() {
        $(".slick-progress").find("span").removeAttr("style");
        $(".slick-progress").find("span").removeClass("active");
        setTimeout(function() {
            $(".slick-progress")
                .find("span")
                .css("transition-duration", timer / 1000 + "s")
                .addClass("active");
        }, 100);
    }

    progressBar();
    $mainSlider.on("beforeChange", function(e, slick) {
        progressBar();
    });

    /*--------------------------
       product slider active
      ---------------------------- */

    const $productSlider = $(".product-slider");
    $productSlider.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                },
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /*--------------------------
        product slider2 active
      ---------------------------- */

    const $productSlider2 = $(".product-slider2");
    $productSlider2.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                },
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /*--------------------------
          product slider3 active
      ---------------------------- */

    const $productSlider3 = $(".product-slider3");
    $productSlider3.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                },
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /*----------------------------------------
      fixed issue in bootstrap tabs problem
      ----------------------------------------- */

    $('a[data-toggle="pill"]').on("shown.bs.tab", function(e) {
        e.target;
        e.relatedTarget;
        $(".product-slider,.product-slider2,.product-slider3").slick("setPosition");
    });

    /*--------------------------
        category slider active
      ---------------------------- */

    const $category = $(".category");
    $category.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /*--------------------------
      brand-slider slider 
      ---------------------------- */

    const $brand = $(".brand-slider");
    $brand.slick({
        autoplay: false,
        autoplaySpeed: 10000,
        dots: false,
        infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /*--------------------------
           product-syncing
      ---------------------------- */
    $(".product-syncing").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        draggable: false,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: ".product-nav",
    });
    $(".product-nav").slick({
        dots: false,
        infinite: false,
        prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".product-syncing",
        // centerMode: true,
        focusOnSelect: true,
    });

    /*--------------------------
             tooltip
         ---------------------------- */

    $('[data-toggle="tooltip"]').tooltip();

    /*--------------------------
                bs modal
       ---------------------------- */

    $(".modal").on("shown.bs.modal", function(e) {
        $(".product-syncing,.product-nav").slick("setPosition");
    });

    /*-------------------------------
       Searching & Expand Menu Popup
      --------------------------------- */

    var searchToggle = $(".search-toggle"),
        closeA = $(".scale"),
        closeB = $(".searching button"),
        cBody = $("body"),
        closeScale = closeA.add(closeB);
    if (searchToggle.length > 0) {
        searchToggle.on("click", function() {
            cBody.toggleClass("open");
            return false;
        });
    }
    if (closeScale.length > 0) {
        closeScale.on("click", function() {
            cBody.removeClass("open");
            return false;
        });
    }

    $(".close").on("click", function() {
        $("body").removeClass("open");
    });

    /*--------------------------
          SscrollUp
    ---------------------------- */

    const $scrollUp = $("#scrollUp");
    // Show or hide the scrollUp
    $(window).on("scroll", function(event) {
        if ($(this).scrollTop() > 500) {
            $($scrollUp).fadeIn(200);
        } else {
            $($scrollUp).fadeOut(200);
        }
    });

    //Animate the scrollUp
    $scrollUp.on("click", function(event) {
        event.preventDefault();
        $("html, body").animate({
                scrollTop: 0,
            },
            1500
        );
    });

    /*--------------------------
          comment  scroll down 
      ---------------------------- */

    $(function() {
        $("#write-comment").on("click", function(e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: $(".review-btn").offset().top - 260 },
                500,
                "linear"
            );
        });
    });

    /*--------------------------
          counter 
      ---------------------------- */

    $(
        '<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fas fa-chevron-up"></i></div><div class="quantity-button quantity-down"><i class="fas fa-chevron-down"></i></div></div>'
    ).insertAfter(".quantity input");

    $(".quantity").each(function() {
        var spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find(".quantity-up"),
            btnDown = spinner.find(".quantity-down"),
            min = input.attr("min"),
            max = input.attr("max");

        btnUp.on("click", function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.on("click", function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });
})(jQuery);