@include('menu')

<script>
    document.title += " - Očkovacie miesta";
    $('#polozkyMenu1').removeClass('active');
    $('#polozkyMenu2').removeClass('active');
    $('#polozkyMenu3').addClass('active');
    $('#polozkyMenu4').removeClass('active');
    $('#polozkyMenu5').removeClass('active');
    $('#polozkyMenu6').removeClass('active');
    $('#polozkyMenu7').removeClass('active');
</script>

<script src="{{URL::asset('js/deleteMiesto.js')}}"></script>


<div class="container" id="obj">
    <div id="cookie-message" data-cookie-expiry="60" class="alert alert-primary" role="alert" style="display: none">
        Používaním tejto stránky súhlasíte s používaním súborov cookie.
        <span onclick="OK()"><b>OK</b>&nbsp;</span>
    </div>

    <h1>Očkovacie miesta
        @auth
            <span>
            <a href="{{ route('miesta.create') }}" class="btn btn-success">
                +
            </a>
        </span>
        @endauth
    </h1>
    <hr>

    <div id="grid">
        @foreach ($miesta as $miesto)
            <div class="karta">
                @include('miesta.show')
            </div>
        @endforeach
    </div>
</div>

@include('footer')
