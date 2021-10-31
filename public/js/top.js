window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if ($(document).scrollTop() > 400) {
        $("#myBtn").css("display","block");
    } else {
        $("#myBtn").css("display","none");
    }
}

function topFunction() {
    $('html').animate({scrollTop: '0px'}, 500);
}
