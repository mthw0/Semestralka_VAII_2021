@include('menu')
<title>Upravit objednavku</title>
<div class="container">
    <h1 class="title">Upravit objednavku</h1>

    <form method="post" action="{{ route('objednavky.update',$objednavka) }}">
        @csrf
        @method('patch')
        @include('chyby')
        <div class="field form-group">
            <label class="label">Meno</label>
            <div class="control">
                <input type="text" name="meno" value="{{ $objednavka->meno }}" class="input" required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Priezvisko</label>
            <div class="control">
                <input type="text" name="priezvisko" value="{{ $objednavka->priezvisko }}" class="input"
                       required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Tel. cislo</label>
            <div class="control">
                <input type="text" name="telCislo" value="{{ $objednavka->telCislo }}" class="input"
                       required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Rodne cislo</label>
            <div class="control">
                <input type="text" name="rodneCislo" value="{{ $objednavka->rodneCislo }}" class="input"
                       placeholder="000000/0000" required/>
            </div>
        </div>
        <div class="field form-group">
            <label class="label">Poradové císlo</label>
            <div class="control">
                <input type="text" name="poradoveCislo" value="{{$objednavka->cislo}}" class="input"
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
@include('footer')
