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
        </div>
    @endforeach
    </div>
</div>

@include('footer')
