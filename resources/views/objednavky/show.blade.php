<div class="card" style="width: 18rem;">
    <div class="card-header">
       <b>Miesto:</b> {{ $objednavka->miesto }}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Meno:</b> {{ $objednavka->meno }}</li>
        <li class="list-group-item"><b>Priezvisko:</b> {{ $objednavka->priezvisko }}</li>
        <li class="list-group-item"><b>Tel. cislo:</b> {{ $objednavka->telCislo }}</li>
        <li class="list-group-item"><b>Rodne cislo:</b> {{ $objednavka->rodneCislo }}</li>
        <li class="list-group-item"><b>Poradove cislo:</b> {{ $objednavka->poradoveCislo }}</li>
    </ul>

</div>

<form action="{{ route('objednavky.destroy', [$objednavka->slug]) }}" method="post">
    @csrf @method('delete')
    <a href="{{ route('objednavky.edit', [$objednavka->slug]) }}" id="vymazat" class="btn btn-info"> Upraviť </a>
    <button type="submit" value="Delete" id="vymazat" class="btn btn-danger">Vymazať</button>
</form>
