<div class="card" style="width: 18rem;">
    <div class="card-header">
        <strong> Názov: </strong>{{ $miesto->nazov }}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Adresa: </strong> {{ $miesto->adresa }}</li>
        <li class="list-group-item"><strong>Popis: </strong>{{ $miesto->popis }}</li>
        <li class="list-group-item"><strong>Kapacita: </strong>{{ $miesto->dennaKapacita }}</li>
    </ul>
</div>
@auth
    <form method="post" action="{{ route('miesta.destroy', $miesto->id) }}">
        @csrf @method('delete')
        <a href="{{ route('miesta.edit', [$miesto->id])}}" class="btn btn-sm btn-outline-primary">✎
            Upraviť</a>
        <button type="submit" class="btn btn-sm btn-outline-danger">🗑 Vymazať</button>
    </form>
@endauth
