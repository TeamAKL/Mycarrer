$("#ph-show-modal, #mail-modal").on('click', function() {
    $(".cmodal-overly").addClass('show-modal');
    $('.global-modal').addClass('slide-modal');
});

$("button.custom-btn").on('click', function() {
    $(".search-container").css({"transform": "translate(0)", "visibility": "visible"});
});

$(".search-container .close-modal").on('click', function() {
    $(".search-container").css({
        "transform": "translate(100%)",
        "visibility": "hidden"
    });
});

$(".close-modal").on('click', function() {
    $(".cmodal-overly").removeClass('show-modal');
    $('.global-modal').removeClass('slide-modal');
});

$(".share-hover").hover(function() {
    $(this).children('.pop-share').css("display", "block");
}, function() {
    $(this).children('.pop-share').css("display", "none");
});


$(window).on('scroll', function() {
    const $offset = $(window).scrollTop();

    if($offset >= 40) {
        $(".sticky-apply").addClass('sticky');
    } else {
        $(".sticky-apply").removeClass('sticky');
    }
    if($(window).width() <= 425) {
        // For Reconmmented
        if($offset >= 400) {
            $("#rm-id").css({
                "position": "fixed",
                "z-index": "80",
                "width": "100%",
                "background": "#fff",
                "left": "0",
                "right": "0",
                "top": "73px"
            });
        } else {
            $("#rm-id").css({
                "position": "relative"
            });
        }
    }

});

if($(window).width() <= 425) {

    $(".dp-inline").removeClass("col-md-12");
    $("#rm-id").removeClass("row").css({
        "display": "block",
        "white-space": "nowrap",
        "overflow-x": "auto"
    });
}
