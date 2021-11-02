@include('menu')

<link href="/css/style.css" rel="stylesheet">
<script>
    document.title=document.title+" - "+"Očkovacie miesta";
</script>

<div class="container" id="obj">
    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert" style="display: none">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp</span>
    </div>

    <h1>Existujuce miesta</h1>
    <hr>

    @auth
    <button href="{{ route('miesta.create') }}" class="btn btn-success">
        Nove miesto
    </button>
    @endauth

    <div id="grid">
    @foreach ($miesta as $miesto)
            <div class="karta">
                @include('miesta.show')
                <a class="btn btn-danger" id="vymazat">Vymazať</a>
                <a class="btn btn-primary" id="vymazat">Upravit</a>
            </div>
    @endforeach
    </div>
</div>

@include('footer')
