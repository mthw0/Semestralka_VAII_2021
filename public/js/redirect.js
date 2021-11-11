$(document).ready(function() {
    var seconds = 20;
    var foo;

    function redirect() {
        document.location.href = '/covid';
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


