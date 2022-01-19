@include('menu')
@section('action', route('miesta.create'))

<div class="container">

    <h1 class="title">Úprava očkovacieho miesta</h1>

    <form method="post" action="{{ route('miesta.update',[$miesto->id]) }}">
        @csrf
        @method('patch')
        @include('chyby')
        <div>
            <div class="form-group">
            <label class="label">Názov</label>
            <input type="text" name="nazov" value="{{ $miesto->nazov }}" class="form-control" placeholder="Názov očkovacieho miesta"
                   required/>
            </div>
            <div class="form-group">
                <label class="label">Adresa</label>
            <input type="text" name="adresa" value="{{ $miesto->adresa }}" class="form-control" placeholder="Adresa očkovacieho miesta"
                   required/>
            </div>
            <div class="form-group">
                <label class="label">Popis</label>
            <input type="text" name="popis" value="{{ $miesto->popis }}" class="form-control" placeholder="Popis očkovacieho miesta"
                   required/>
            </div>
            <div class="form-group">
            <label class="label">Denná kapacita</label>
            <input type="text" name="dennaKapacita" value="{{ $miesto->dennaKapacita }}" class="form-control"
                   placeholder="Denna kapacita" required pattern="[1-9]+" title="Kapacita musí byť číslo väčšie ako 0"/>
            </div>
            <button type="submit" class="btn btn-outline-primary">Odoslať</button>
        </div>
    </form>
</div>

@include('footer')
