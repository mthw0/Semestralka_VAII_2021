@include('menu')

<script>
    document.title += " - Objednávky";
    $('#polozkyMenu1').removeClass('active');
    $('#polozkyMenu2').removeClass('active');
    $('#polozkyMenu3').removeClass('active');
    $('#polozkyMenu4').removeClass('active');
    $('#polozkyMenu5').addClass('active');
    $('#polozkyMenu6').removeClass('active');
    $('#polozkyMenu7').removeClass('active');
</script>
<script src="{{URL::asset('js/prepinac.js')}}"></script>
<script src="{{URL::asset('js/delete.js')}}"></script>

<div class="container" id="obj">
    <h1>Objednávky
        <span>
        <a href="{{ route('objednavky.create') }}" target="_blank" class="btn btn-outline-success"
           style="border-radius: 20%">
        +
        </a>
    </span>
    </h1>
    <hr>
    <p>
        <a id="prepinac" class="btn btn-outline-secondary" style="border-radius: 20%">
            o/-
        </a>

    </p>
    <div id="grid" style="display: none">
        @foreach ($objednavky as $objednavka)
            <div class="karta">
                @include('objednavky.show')
            </div>
        @endforeach
    </div>

    <table class="table table-hover table-responsive" id="tabulka" style="display: inline-table">
        <thead>
        <tr>
            <th scope="col">Miesto</th>
            <th scope="col">Poradové číslo</th>
            <th scope="col">Datum a čas</th>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Tel. cislo</th>
            <th scope="col">Rodne cislo</th>
            <th scope="col">Akcie</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($objednavky as $objednavka)
            @include('objednavky.row')
        @endforeach

        </tbody>
    </table>
    {{ $objednavky->links() }}

</div>

@include('footer')
