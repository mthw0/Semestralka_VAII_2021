@include('menu')

<title>Vytvorit nove miesto</title>
<div class="container">

<h1 class="title">Vytvorit nove miesto</h1>


    <form method="post" action="{{ route('miesta.store') }}">
        @csrf
        <div>
            <label class="label">Nazov</label>
            <input type="text" name="nazov" value="{{ old('nazov') }}" class="form-control" placeholder="Nazov" required />
            <label class="label">Adresa</label>
            <input type="text" name="adresa" value="{{ old('adresa') }}" class="form-control" placeholder="Adresa" required />
            <label class="label">Popis</label>
            <input type="text" name="popis" value="{{ old('popis') }}" class="form-control" placeholder="Popis" required />

            <label class="label">Denna kapacita</label>
            <input type="text" name="dennaKapacita" value="{{ old('dennaKapacita') }}" class="form-control" placeholder="Denna kapacita" required />

            <button type="submit" class="btn btn-outline-primary">Odoslat</button>

        </div>



    </form>

</div>

@include('footer')
