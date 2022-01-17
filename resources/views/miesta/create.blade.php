@include('menu')
<div class="container">

    <h1 class="title">Vytvorenie nového očkovacieho miesta</h1>
    @include('chyby')
    <form method="post" action="{{ route('miesta.store') }}">
        @csrf
        <div>
            <label class="label">Názov</label>
            <input type="text" name="nazov" value="{{ old('nazov') }}" class="form-control" placeholder="Názov"
                   required/>
            <label class="label">Adresa</label>
            <input type="text" name="adresa" value="{{ old('adresa') }}" class="form-control" placeholder="Adresa"
                   required/>
            <label class="label">Popis</label>
            <input type="text" name="popis" value="{{ old('popis') }}" class="form-control" placeholder="Popis"
                   required/>

            <label class="label">Denná kapacita</label>
            <input type="text" name="dennaKapacita" value="{{ old('dennaKapacita') }}" class="form-control"
                   placeholder="Denná kapacita" required/>

            <button type="submit" class="btn btn-outline-primary">Odoslať</button>

        </div>
    </form>
</div>

@include('footer')
