@include('menu')
<div class="container">

    <h1 class="title">Vytvorenie nového očkovacieho miesta</h1>
    @include('chyby')
    <form method="post" action="{{ route('miesta.store') }}">
        @csrf
        <div class="form-group">
            <label class="label">Názov</label>
            <input type="text" name="nazov" value="{{ old('nazov') }}" class="form-control"
                   placeholder="Názov očkovacieho miesta"
                   required/>
        </div>
        <div class="form-group">
            <label class="label">Adresa</label>
            <input type="text" name="adresa" value="{{ old('adresa') }}" class="form-control"
                   placeholder="Adresa očkovacieho miesta"
                   required/>
        </div>
        <div class="form-group">
            <label class="label">Popis</label>
            <input type="text" name="popis" value="{{ old('popis') }}" class="form-control"
                   placeholder="Popis očkovacieho miesta"
                   required/>
        </div>
        <div class="form-group">
            <label class="label">Denná kapacita</label>
            <input type="text" name="dennaKapacita" value="{{ old('dennaKapacita') }}" class="form-control"
                   placeholder="Denná kapacita" required pattern="[1-9]+" title="Kapacita musí byť číslo väčšie ako 0"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Odoslať</button>
            <a href="{{route('miesta.index')}}" class="btn btn-outline-danger">Späť</a>
        </div>

    </form>
</div>

@include('footer')
