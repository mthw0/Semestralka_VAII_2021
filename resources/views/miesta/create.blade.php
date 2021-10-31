<title>Vytvorit nove miesto</title>
<div class="container">

<h1 class="title">Vytvorit nove miesto</h1>


    <form method="post" action="{{ route('miesta.store') }}">
        @csrf
        <div class="field">
            <label class="label">Nazov</label>
            <div class="control">
                <input type="text" name="nazov" value="{{ old('nazov') }}" class="input" placeholder="Nazov" required />
            </div>
        </div>

        <div class="field">
            <label class="label">Adresa</label>
            <div class="control">
                <input type="text" name="adresa" value="{{ old('adresa') }}" class="input" placeholder="Adresa" required />
            </div>
        </div>
        <div class="field">
            <label class="label">Popis</label>
            <div class="control">
                <input type="text" name="popis" value="{{ old('popis') }}" class="input" placeholder="Popis" required />
            </div>
        </div>
        <div class="field">
            <label class="label">Denna kapacita</label>
            <div class="control">
                <input type="text" name="dennaKapacita" value="{{ old('dennaKapacita') }}" class="input" placeholder="Denna kapacita" required />
            </div>
        </div>



        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link is-outlined">Odoslat</button>
            </div>
        </div>

    </form>

</div>
