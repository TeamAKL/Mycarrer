// $(document).ready(function() {
//     $("#search").bind('click', function() {
//         $(".search-close").addClass("icon-active");
//         $(".user-search-form").css("padding-top", "30px");
//         $(".expend-search-form").css("display", "flex");
//         $(".search-model").css("right", "91px");
//         $(".search-engin").css("width", "100%");
//         $(".right-side").addClass("right-side-close");
//         $("#change-md").removeClass("col-md-10");
//         $("#change-md").addClass("col-md-4");
//         $(".unexpend-nav-bar").css("display", "none");
//         $(".custom-btn").attr("disabled", false);
//     });

//     $("#close-icon").bind('click', function() {
//         $(".user-search-form").css("padding-top", "65px");
//         $(".expend-search-form").css("display", "none");
//         $(".search-model").css("right", "20px");
//         $(".search-engin").css("width", "60%");
//         $(".right-side").removeClass("right-side-close");
//         $("#change-md").removeClass("col-md-4");
//         $("#change-md").addClass("col-md-10");
//         $(".unexpend-nav-bar").css("display", "block");
//         $(".search-close").removeClass("icon-active");
//         $(".custom-btn").attr("disabled", true);
//     });

// });


let $width = $(window).width();
if($width <= 768) {
    $("#search").bind('click', function() {
        $(".search-close").addClass("icon-active");
        $(".user-search-form").css("padding-top", "30px");
        $(".expend-search-form").css("display", "flex");
        $(".search-model").css("right", "91px");
        $(".search-engin").css("width", "100%");
        $(".right-side").addClass("right-side-close");
        $("#change-md").removeClass("col-md-10");
        $("#change-md").addClass("col-md-4");
        $(".unexpend-nav-bar").css("display", "none");
        $(".custom-btn").attr("disabled", false);
    });

    $("#close-icon").bind('click', function() {
        $(".user-search-form").css("padding-top", "65px");
        $(".expend-search-form").css("display", "none");
        $(".search-model").css("right", "20px");
        $(".search-engin").css("width", "100%");
        $(".right-side").removeClass("right-side-close");
        $("#change-md").removeClass("col-md-4");
        $("#change-md").addClass("col-md-10");
        $(".unexpend-nav-bar").css("display", "block");
        $(".search-close").removeClass("icon-active");
        $(".custom-btn").attr("disabled", true);
    });
} else {
    $("#search").bind('click', function() {
        $(".search-close").addClass("icon-active");
        $(".user-search-form").css("padding-top", "30px");
        $(".expend-search-form").css("display", "flex");
        $(".search-model").css("right", "91px");
        $(".search-engin").css("width", "100%");
        $(".right-side").addClass("right-side-close");
        $("#change-md").removeClass("col-md-10");
        $("#change-md").addClass("col-md-4");
        $(".unexpend-nav-bar").css("display", "none");
        $(".custom-btn").attr("disabled", false);
    });

    $("#close-icon").bind('click', function() {
        $(".user-search-form").css("padding-top", "65px");
        $(".expend-search-form").css("display", "none");
        $(".search-model").css("right", "20px");
        $(".search-engin").css("width", "60%");
        $(".right-side").removeClass("right-side-close");
        $("#change-md").removeClass("col-md-4");
        $("#change-md").addClass("col-md-10");
        $(".unexpend-nav-bar").css("display", "block");
        $(".search-close").removeClass("icon-active");
        $(".custom-btn").attr("disabled", true);
    });
}
