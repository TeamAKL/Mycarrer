$("#ph-show-modal, #mail-modal").on('click', function() {
    $(".cmodal-overly").addClass('show-modal');
    $('.global-modal').addClass('slide-modal');
});

$(".close-modal").on('click', function() {
     $(".cmodal-overly").removeClass('show-modal');
     $('.global-modal').removeClass('slide-modal');
});
