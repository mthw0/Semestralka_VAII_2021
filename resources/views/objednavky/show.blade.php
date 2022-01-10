@php
    $minutes_to_add = 10 * ($objednavka->poradoveCislo%50);
    $time = new DateTime('2022-03-01 07:00');
    $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
    $time->add(new DateInterval('P'.$objednavka->den.'D'));
@endphp


<div class="card-header">
    <strong>Miesto:</strong> {{ $objednavka->miesto }}
</div>
<ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Meno:</b> {{ $objednavka->meno }}</li>
    <li class="list-group-item"><b>Priezvisko:</b> {{ $objednavka->priezvisko }}</li>
    <li class="list-group-item"><b>Tel. cislo:</b> {{ $objednavka->telCislo }}</li>
    <li class="list-group-item"><b>Rodne cislo:</b> {{ $objednavka->rodneCislo }}</li>
    <li class="list-group-item"><b>Poradove cislo:</b> {{ $objednavka->poradoveCislo }}</li>
    <li class="list-group-item"><b>Datum a čas:</b> {{ $time->format('d.m.y H:i') }}</li>
    <li class="list-group-item">
        <a href="" class="btn btn-sm btn-outline-danger deleteObjednavka vymazat" data-id="{{ $objednavka->id }}">🗑 Vymazať</a>
        <a href="{{ route('objednavky.edit', [$objednavka->id]) }}" class="vymazat btn btn-sm btn-outline-info">✎ Upraviť</a>
    </li>
</ul>
