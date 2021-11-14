@include('menu')

<title>Vytvorit novu objednavku</title>
<div class="container">
    <h1 class="title">Vytvorit novu objednavku</h1>
    @include('chyby')

    <form method="post" action="{{ route('objednavky.store') }}">
        @csrf
        <div class="field form-group">
            <label class="label">Meno</label>
            <div class="control">
                <input type="text" name="meno" value="{{ old('meno') }}" class="input" placeholder="Meno" required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Priezvisko</label>
            <div class="control">
                <input type="text" name="priezvisko" value="{{ old('priezvisko') }}" class="input"
                       placeholder="Priezvisko" required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Tel. cislo</label>
            <div class="control">
                <input type="text" name="telCislo" value="{{ old('telCislo') }}" class="input" placeholder="0000000000"
                       required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Rodne cislo</label>
            <div class="control">
                <input type="text" name="rodneCislo" value="{{ old('rodneCislo') }}" class="input"
                       placeholder="000000/0000" required/>
            </div>
        </div>
        <div class="field form-group" style="display: none">
            <label class="label">Poradové císlo</label>
            <div class="control">
                <input type="text" name="poradoveCislo" value="{{$cislo}}" class="input" placeholder="{{$cislo}}"
                      required readonly="readonly"/>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Miesto</label>
            <select class="form-control" id="exampleFormControlSelect2" name="miesto">
                @foreach($nazvy as $nazov)
                    <option>{{str_replace(['{"nazov":"','"}'],"",$nazov)}}</option>
                @endforeach
            </select>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-primary">Odoslat</button>
            </div>
        </div>

    </form>

</div>
