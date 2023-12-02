    $(document).ready(function () {
        $(".partners-slick").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            arrows: !1,
            dots: !1,
            Infinity: !1,
	    	variableWidth: true,
            responsive: [
                { breakpoint: 1199, settings: { arrows: !1, slidesToShow: 4, Infinity: !1 } },
                { breakpoint: 768, settings: { arrows: !1, Infinity: !1, slidesToShow: 3 } },
                { breakpoint: 576, settings: { arrows: !1, Infinity: !1, slidesToShow: 2 } },
            ],
        })
         
    });

$(function () {
    var e = window.location.href.split("/").pop();
    $(".top-header a")
        .filter(function () {
            return $(this).attr("href") == e;
        })
        .parent()
        .addClass("active");
});

const overlay = document.querySelector(".overlay"),
    sidebar = document.querySelector(".sidebar"),
    menuButton = document.querySelector(".menu-button"),
    closeButton = document.querySelector(".close-button");
menuButton.addEventListener("click", () => {
    overlay.classList.add("active"), sidebar.classList.add("sidebar-active");
}),
    closeButton.addEventListener("click", () => {
        overlay.classList.remove("active"), sidebar.classList.remove("sidebar-active");
    });
const menuItems = document.querySelectorAll(".sidebar a");
menuItems.forEach((e) => {
    e.addEventListener("click", () => {
        overlay.classList.remove("active"), sidebar.classList.remove("sidebar-active");
    });
}),
    overlay.addEventListener("click", () => {
        overlay.classList.remove("active"), sidebar.classList.remove("sidebar-active");
    }),
    sidebar.addEventListener("click", (e) => {
        e.stopPropagation();
    }),
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".menu-link .menu-arrow").forEach(function (e) {
            e.addEventListener("click", function (e) {
                e.preventDefault();
                var t = this.closest(".menu-link").querySelector(".submenu"),
                    s = this.querySelector("svg");
                document.querySelectorAll(".submenu").forEach(function (e) {
                    e !== t && (e.style.display = "none");
                }),
                    "block" === t.style.display ? ((t.style.display = "none"), (s.style.transform = "rotate(0deg)")) : ((t.style.display = "block"), (s.style.transform = "rotate(180deg)"));
            });
        });
    }),

    $(document).ready(function () {
        
            $(".home-banner").slick({ infinite: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, dots: !0, arrows: !0, autoplay: !1, fade: !0, autoplaySpeed: 2e3 });
    });
