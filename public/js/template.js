$(document).ready(function() {

    let $width = $(".nav-wapper").css("width");

    $("#spinner-form3").on("click", function() {
        $(".nav-wapper").toggleClass("active");
        if($(".nav-wapper").is(".active")) {
            $(".nav-wapper").animate({
                opacity: "1"
            }, 300, function() {
                $(".nav-wapper").css({height: "100vh", display: "block"});
            });
            $(this).parent().css("left", $width);
        } else {
            $(".nav-wapper").animate({
                // display: "none",
                opacity: "0"
            }, 500, function() {
                $(".nav-wapper").css({display: "none"})
            });
            $(this).parent().css("left", "");
        }
    });
});

let $browserWidth = $(window).width();
if($browserWidth <= 425) {
    $(".footer-social, .footer-section").addClass("text-center");
    // $(".nth-selector:nth-child(3)").removeClass("text-right");
}
