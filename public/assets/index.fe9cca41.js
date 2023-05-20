(function () {
    const r = document.createElement("link").relList;
    if (r && r.supports && r.supports("modulepreload")) return;
    for (const e of document.querySelectorAll('link[rel="modulepreload"]')) s(e);
    new MutationObserver(e => {
        for (const o of e) if (o.type === "childList") for (const t of o.addedNodes) t.tagName === "LINK" && t.rel === "modulepreload" && s(t)
    }).observe(document, {childList: !0, subtree: !0});

    function n(e) {
        const o = {};
        return e.integrity && (o.integrity = e.integrity), e.referrerpolicy && (o.referrerPolicy = e.referrerpolicy), e.crossorigin === "use-credentials" ? o.credentials = "include" : e.crossorigin === "anonymous" ? o.credentials = "omit" : o.credentials = "same-origin", o
    }

    function s(e) {
        if (e.ep) return;
        e.ep = !0;
        const o = n(e);
        fetch(e.href, o)
    }
})();

$(".tires-images").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    prevArrow: '<div class="arrow-prev arrow"></div>',
    nextArrow: '<div class="arrow-next arrow"></div>',
})
$(".report__title").on("click", function () {
    $(this).attr("id") == "photo-report" ? ($("#video-report").addClass("not-active"), $(".report__video").addClass("not-active"), $(".report__photo").removeClass("not-active")) : ($("#photo-report").addClass("not-active"), $(".report__photo").addClass("not-active"), $(".report__video").removeClass("not-active")), $(this).removeClass("not-active")
});
$(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // arrows: !1,
    dots: !1,
    asNavFor: ".slider-nav",
    arrows: !0,
    //
    prevArrow: '<div class="arrow-prev arrow"></div>',
    nextArrow: '<div class="arrow-next arrow"></div>',
    infinite: !1,
    initialSlide: 1,
    responsive: [{
        breakpoint: 768,
        settings: {
            // arrows: !1,
            // centerMode: !0,
            centerPadding: "15px",
            // slidesToShow: 1.3,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true

        }
    }]
});
$(".slider-nav").slick({
    slidesToShow: 3,
    arrows: !1,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: !1,
    centerMode: !0,
    centerPadding: "0px",
    infinite: !1,
    initialSlide: 1
});
Fancybox.bind("[data-fancybox]", {
    infinite: !1,
    Toolbar: 1,
    closeButton: "top",
    Image: {zoom: true},
    Thumbs: !1
});


$(".video-wrapper").on("click", function () {
    var i = $("video").get(0);
    i.play(), $(this).addClass("after-hidden")
});
//
// $('.footer__btn').on('click', function(){
//     alert('Сейчас начнется загрузка PDF отчета! \n' +
//         '\n' +
//         'Файл содержит фото в высоком разрешении, загрузка может занять до 30 секунд! ⏱')
// })
