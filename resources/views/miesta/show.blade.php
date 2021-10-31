<div class="card" style="width: 18rem;">
    <div class="card-header">
        {{ $miesto->nazov }}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $miesto->adresa }}</li>
        <li class="list-group-item">{{ $miesto->popis }}</li>
        <li class="list-group-item">{{ $miesto->dennaKapacita }}</li>
    </ul>
</div>
