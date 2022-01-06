<tr>
    <th scope="row">{{ $objednavka->poradoveCislo }}</th>
    <td>{{ $objednavka->miesto }}</td>
    <td>{{ $objednavka->meno }}</td>
    <td>{{ $objednavka->priezvisko }}</td>
    <td>{{ $objednavka->telCislo }}</td>
    <td>{{ $objednavka->rodneCislo }}</td>
    <td>
        <a href="" class="btn btn-sm btn-outline-danger deleteObjednavka" data-id="{{ $objednavka->id }}">🗑 Vymazať</a>
        <a href="{{ route('objednavky.edit', [$objednavka->id]) }}" class="btn btn-sm btn-outline-info">✎ Upraviť</a>
    </td>
</tr>
