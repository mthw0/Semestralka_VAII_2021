@include('menu')

<script>
    document.title=document.title+" - "+"Objednávky"
</script>
<div class="container" id="obj">
    <h1>Objednávky</h1>
    <hr>
    <button href="{{ route('objednavky.create') }}" class="btn btn-success">
        Nova objednavka
    </button>

    <div id="grid">
    @foreach ($objednavky as $objednavka)
        <div class="karta">
            @include('objednavky.show')
            <a class="btn btn-danger" id="vymazat">Vymazať</a>
            <a class="btn btn-primary" id="vymazat">Upravit</a>

        </div>
    @endforeach
    </div>
</div>

@include('footer')
