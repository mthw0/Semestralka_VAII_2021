<div class="card" style="width: 18rem;">
    <div class="card-header">
        <strong>Miesto:</strong> {{ $objednavka->miesto }}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Meno:</b> {{ $objednavka->meno }}</li>
        <li class="list-group-item"><b>Priezvisko:</b> {{ $objednavka->priezvisko }}</li>
        <li class="list-group-item"><b>Tel. cislo:</b> {{ $objednavka->telCislo }}</li>
        <li class="list-group-item"><b>Rodne cislo:</b> {{ $objednavka->rodneCislo }}</li>
        <li class="list-group-item"><b>Poradove cislo:</b> {{ $objednavka->poradoveCislo }}</li>
    </ul>
</div>

<a href="" class="btn btn-sm btn-outline-danger deleteObjednavka vymazat" data-id="{{ $objednavka->id }}">🗑 Vymazať</a>
<a href="{{ route('objednavky.edit', [$objednavka->id]) }}" class="vymazat btn btn-sm btn-outline-info">✎ Upraviť</a>

