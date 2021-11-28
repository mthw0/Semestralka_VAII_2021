<tr>
    <th scope="row">{{ $objednavka->poradoveCislo }}</th>
    <td>{{ $objednavka->miesto }}</td>
    <td>{{ $objednavka->meno }}</td>
    <td>{{ $objednavka->priezvisko }}</td>
    <td>{{ $objednavka->telCislo }}</td>
    <td>{{ $objednavka->rodneCislo }}</td>
    <td>
        <form action="{{ route('objednavky.destroy', [$objednavka->id]) }}" method="post">
            @csrf @method('delete')
            <a href="{{ route('objednavky.edit', [$objednavka->id]) }}" class="btn btn-sm btn-info">✎ Upraviť</a>
            <button type="submit" value="Delete" class="btn btn-sm btn-danger">🗑 Vymazať</button>
        </form>
    </td>
</tr>
