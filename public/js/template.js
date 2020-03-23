$(document).ready(function() {

    let $width = $(".nav-wapper").css("width");

    $("#spinner-form3").on("click", function() {
        $(".nav-wapper").toggleClass("active");
        if($(".nav-wapper").is(".active")) {
            $(".nav-wapper").animate({
                opacity: "1"
            }, 500, function() {
                $(".nav-wapper").css("height", "100vh");
            });
            $(this).parent().css("left", $width);
        } else {
            $(".nav-wapper").animate({
                opacity: "0"
            }, 500);
            $(this).parent().css("left", "");
        }
    });
});

