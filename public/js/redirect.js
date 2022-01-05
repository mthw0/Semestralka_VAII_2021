$(document).ready(function() {
    var seconds = 5;
    var foo;

    function redirect() {
        document.location.href = '/';
    }

    function updateSecs() {
        $("#seconds").html(seconds);
        seconds--;
        if (seconds == -1) {
            clearInterval(foo);
            redirect();
        }
    }

    function countdownTimer() {
        foo = setInterval(function () {
            updateSecs()
        }, 1000);
    }
    $("#seconds").html(seconds);
    countdownTimer();
});


