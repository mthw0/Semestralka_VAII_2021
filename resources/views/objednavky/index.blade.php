@include('menu')

<script>
    document.title=document.title+" - "+"Objednávky"
</script>
<div class="container">
    <h1>Objednávky</h1>

    <a href="{{ route('objednavky.create') }}" class="button is-info">
        <strong>Nova objednavka</strong>
    </a>

    @foreach ($objednavky as $objednavka)
        @include('objednavky.show')
    @endforeach
</div>
@include('footer')
