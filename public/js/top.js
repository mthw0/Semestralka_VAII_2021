window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if ($(document).scrollTop() > 400) {
        $("#myBtn").css("display", "block");
    } else {
        $("#myBtn").css("display", "none");
    }
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    $("#myBar").css("width", scrolled + "%");
}

function topFunction() {
    $('html').animate({scrollTop: '0px'}, 500);
}
