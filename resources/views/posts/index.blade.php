@include('menu')
<script>
    document.title += " - Novinky";
    $('#polozkyMenu1').removeClass('active');
    $('#polozkyMenu2').removeClass('active');
    $('#polozkyMenu3').removeClass('active');
    $('#polozkyMenu4').addClass('active');
    $('#polozkyMenu5').removeClass('active');
    $('#polozkyMenu6').removeClass('active');
    $('#polozkyMenu7').removeClass('active');

</script>

<div class="container">
    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert" style="display: none">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp;</span>
    </div>

    <h1 style="margin-bottom: 150px">Novinky
        @auth
            <span>
            <a href="{{ route('posts.create') }}" class="btn btn-outline-success" style="border-radius: 20%">+</a>
        </span>
        @endauth
        <hr>
    </h1>

    @foreach ($posts  as $post)
        @include('posts.show')
    @endforeach


</div>
