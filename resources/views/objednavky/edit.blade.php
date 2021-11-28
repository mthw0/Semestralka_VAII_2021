@section('title', 'Edit Post')
@section('action', route('objednavky.create'))
@include('menu')

<title>Upravit objednavku</title>
<div class="container">
    <h1 class="title">Upravit objednavku</h1>

    <form method="post" action="{{ route('objednavky.update',[$objednavka->slug]) }}">
        @csrf
        @method('patch')
        @include('chyby')

        <label class="label">Meno</label>

        <input type="text" name="meno" pattern="[A-Ž]{1}[a-ž]" value="{{ $objednavka->meno }}" class="form-control" required/>

        <label class="label">Priezvisko</label>

        <input type="text" name="priezvisko" pattern="[A-Ž]{1}[a-ž]" value="{{ $objednavka->priezvisko }}" class=" form-control" required/>

        <label class="label">Tel. cislo</label>

        <input type="text" name="telCislo" pattern="[0-9]{10}" value="{{ $objednavka->telCislo }}" class=" form-control"
               required/>

        <label class="label">Rodne cislo</label>

        <input type="text" name="rodneCislo" pattern="[0-9]{6}\/[0-9]{4}" value="{{ $objednavka->rodneCislo }}" class=" form-control"
               placeholder="000000/0000" required/>

        <label class="label">Poradové císlo</label>

        <input type="text" name="poradoveCislo" value="{{$objednavka->poradoveCislo}}" class=" form-control"
               required/>

        <label for="exampleFormControlSelect2">Miesto</label>
        <select class="form-control" id="exampleFormControlSelect2" name="miesto" value="{{$objednavka->miesto}}">
            @foreach($nazvy as $nazov)
                <option>{{str_replace(['{"nazov":"','"}'],"",$nazov)}}</option>
            @endforeach
        </select>


        <div class="control">
            <button type="submit" class="btn btn-primary">Odoslat</button>
        </div>


    </form>
</div>
@include('footer')
