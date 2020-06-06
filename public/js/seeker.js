$("#ph-show-modal").on('click', function() {
    $(".phone-overly").addClass('show-modal');
    $('.phone-modal').addClass('slide-modal');
});


$(".show-modal").on('click', function() {
    $('body').css('overflow-y', 'hidden');
    let $index = $(this).attr('id');
    let $dataid = $(this).attr('dataid');
    $("."+$index+"-overly").addClass('show-modal');
    $("."+$index+"-modal").addClass("slide-modal");

});

$(".close-modal").on('click', function() {
    $('body').css('overflow-y', 'auto');
    $(".cmodal-overly").removeClass('show-modal');
    $('.global-modal').removeClass('slide-modal');
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


// $(".share-hover").hover(function() {
//     $(this).children('.pop-share').css("display", "block");
// }, function() {
//     $(this).children('.pop-share').css("display", "none");
// });


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

// FOR PROJECT
$('.pj-status').bind('click', function() {
    var $pjstatus = $(this).val().toLowerCase();
    checkPjStatus($pjstatus);
});

$('.currcompany').bind('click', function() {
    var $value = $(this).val().toLowerCase();
    checkCurrentCompany($value);
});

function checkCurrentCompany($value)
{
    if($value == 'no') {
        $("#ccno").attr('checked', 'true');
        $("#ccyes").removeAttr('checked');
        return $("#worktill").val('').removeAttr('disabled');
    } else if($value == 'yes') {
        $("#ccyes").attr('checked', 'true');
        $("#ccno").removeAttr('checked');
        return $("#worktill").val('Present').attr('disabled', 'disabled');
    }
}

function checkPjStatus($state) {
    if($state == 'inprogress') {
        $("#f").removeAttr("checked");
        $("#inpro").attr("checked", "true");
        return $('.end').css("display", "none");
    } else if($state == 'finished') {
        $("#inpro").removeAttr("checked");
        $("#f").attr("checked", "true");
        return $('.end').css("display", "block");
    }
}
