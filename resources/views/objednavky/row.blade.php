@php
    use App\Models\OckovacieMiesto;
    $dennaKapcita = OckovacieMiesto::where('nazov', $objednavka->miesto)->pluck('dennaKapacita');
    $dennaKapcita=$dennaKapcita[0];
    $minutes_to_add = 10 * ($objednavka->poradoveCislo%$dennaKapcita);
    $time = new DateTime('2022-03-01 07:00');
    $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
    $time->add(new DateInterval('P'.$objednavka->den.'D'));
@endphp

<tr>
    <th scope="row">{{ $objednavka->miesto }}</th>
    <td>{{ $objednavka->poradoveCislo }}.</td>
    <td>{{ $time->format('d.m.Y H:i') }}</td>
    <td>{{ $objednavka->meno }}</td>
    <td>{{ $objednavka->priezvisko }}</td>
    <td>{{ $objednavka->telCislo }}</td>
    <td>{{ $objednavka->rodneCislo }}</td>
    <td>
        <a href="" class="btn btn-sm btn-outline-danger deleteObjednavka" data-id="{{ $objednavka->id }}">🗑 Vymazať</a>
        <a href="{{ route('objednavky.edit', [$objednavka->id]) }}" class="btn btn-sm btn-outline-info">✎ Upraviť</a>
    </td>
</tr>
