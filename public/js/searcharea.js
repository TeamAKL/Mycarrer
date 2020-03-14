$(document).ready(function() {
    $(".jumbotron").bind('click', function() {
        console.log("hi");
        $(".search-close").toggleClass("icon-active");
    });
});
