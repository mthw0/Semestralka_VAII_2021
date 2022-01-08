<div class="card-header">
    <strong> Názov: </strong>{{ $miesto->nazov }}
</div>
<ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Adresa: </strong> {{ $miesto->adresa }}</li>
    <li class="list-group-item"><strong>Popis: </strong>{{ $miesto->popis }}</li>
    <li class="list-group-item"><strong>Kapacita: </strong>{{ $miesto->dennaKapacita }}</li>
    @auth
        <li class="list-group-item">
            <form method="post" action="{{ route('miesta.destroy', $miesto->id) }}">
                @csrf @method('delete')
                <a href="{{ route('miesta.edit', [$miesto->id])}}" class="vymazat btn btn-sm btn-outline-info">✎
                    Upraviť</a>
                <button type="submit" class="vymazat btn btn-sm btn-outline-danger">🗑 Vymazať</button>
            </form>
        </li>
    @endauth
</ul>
