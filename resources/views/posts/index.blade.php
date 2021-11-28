@include('menu')
<script>
    document.title += " - Novinky";
</script>

<div class="container">
    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert" style="display: none">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp</span>
    </div>


    <h1>Novinky
        @auth
        <span>
            <a href="{{ route('posts.create') }}" class="btn btn-success">
                +
            </a>
        </span>
        @endauth
    </h1>
    <hr>

    @foreach ($posts  as $post)
        @include('posts.show')
    @endforeach


</div>
