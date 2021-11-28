@include('menu')

<script>
    document.title = document.title + " - " + "Objednávky"
</script>
<div class="container" id="obj">
    <h1>Objednávky
        <span>
            <a href="{{ route('objednavky.create') }}" target="_blank" class="btn btn-success">
                +
            </a>
        </span>
    </h1>


    <hr>
    <div id="grid">
        @foreach ($objednavky as $objednavka)
            <div class="karta">
                @include('objednavky.show')
            </div>
        @endforeach
    </div>



    <table class="table">
        <thead>
        <tr>
            <th scope="col">Poradove cislo</th>
            <th scope="col">Miesto</th>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Tel. cislo</th>
            <th scope="col">Rodne cislo</th>
            <th scope="col">Akcie</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($objednavky as $objednavka)
            <tr class="karta">
                @include('objednavky.row')
            </tr>
        @endforeach

        </tbody>
    </table>



</div>

@include('footer')
