@include('menu')

<link href="/css/style.css" rel="stylesheet">
<script>
    document.title=document.title+" - "+"Očkovacie miesta";
</script>

<div class="container">
    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert" style="display: none">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp</span>
    </div>

    <h1>Existujuce miesta</h1>

    @auth
    <a href="{{ route('miesta.create') }}" class="button is-info">
        <strong>Nove miesto</strong>
    </a>
    @endauth

    @foreach ($miesta as $miesto)
        @include('miesta.show')
    @endforeach
</div>

@include('footer')
