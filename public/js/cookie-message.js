$('document').ready(function () {start()})
    function createCookie(name,value) {
        document.cookie = name+"="+value+"; expires=Fri, 31 Dec 9999 23:59:59 GMT; SameSite=None; Secure";
    }

    function readCookie(name) {
        const cookieValue = document.cookie
            .split('; ')
            .find(row => row.startsWith(name))
            .split('=')[1];
        return cookieValue;
    }
    function checkCookie(name) {
        if (document.cookie.split(';').some((item) => item.trim().startsWith(name))) {
            return true;
        }
    }

    function start() {
        var cookieMessage = $('#cookie-message');
        if (cookieMessage == null) {
            return;
        }
        if (checkCookie('suhlas')&&readCookie('suhlas')=='yes')
        {
            $('#cookie-message').css('display','none');
        }
        else {
            $('#cookie-message').css('display','block');
        }

    }

    function OK()
    {
        createCookie('suhlas','yes');
        $('#cookie-message').css('display','none')
    }
