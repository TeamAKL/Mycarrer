$("#ph-show-modal, #mail-modal").on('click', function() {
    $(".cmodal-overly").addClass('show-modal');
    $('.global-modal').addClass('slide-modal');
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
});
