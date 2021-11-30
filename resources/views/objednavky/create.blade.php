@include('menu')

<title>Vytvorit novu objednavku</title>
<div class="container">
    <h1 class="title">Vytvorit novu objednavku</h1>
    @include('chyby')

    <form method="post" action="{{ route('objednavky.store') }}">
        @csrf
        <div class="field form-group">
            <label class="label">Meno</label>
            <input type="text" name="meno" pattern="[A-ZĽŠČĎŤŽÝÁÍÉ]{1}[a-zľščťúžďýáíé]{1,100}" value="{{ old('meno') }}" class="form-control"
                   placeholder="Meno" required/>
        </div>
        <div class="field form-group">
            <label class="label">Priezvisko</label>
            <input type="text" name="priezvisko" pattern="[A-ZĽŠČŤŽÝÁĎÍÉ]{1}[a-zľščťďúžýáíé]{1,100}" value="{{ old('priezvisko') }}"
                   class="form-control"
                   placeholder="Priezvisko" required/>
        </div>
        <div class="field form-group">
            <label class="label">Tel. cislo</label>
            <input type="text" name="telCislo" pattern="[0-9]{10}" value="{{ old('telCislo') }}" class="form-control"
                   placeholder="0000000000"
                   required/>
        </div>
        <div class="field form-group">
            <label class="label">Rodne cislo</label>
            <input type="text" name="rodneCislo" pattern="[0-9]{6}\/[0-9]{4}" value="{{ old('rodneCislo') }}"
                   class="form-control"
                   placeholder="000000/0000" required/>
        </div>
        <div class="field form-group" style="display: none">
            <label class="label">Poradové císlo</label>
            <input type="text" name="poradoveCislo" value="{{$cislo}}" class="" placeholder="{{$cislo}}"
                   required readonly="readonly"/>
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
