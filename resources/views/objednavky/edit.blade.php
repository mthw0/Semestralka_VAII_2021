@section('title', 'Edit Post')
@section('action', route('objednavky.create'))
@include('menu')
@php
    use App\Models\OckovacieMiesto;
@endphp

<div class="container">
    <h1 class="title">Úprava registrácie na očkovanie</h1>

    <form method="post" action="{{ route('objednavky.update',[$objednavka->id]) }}">
        @csrf
        @method('patch')
        @include('chyby')

        <label class="label">Meno</label>
        <input type="text" name="meno" pattern="[A-ZĽŠČŤĎŽÝÁÍÉ]{1}[a-zľščťúžýáďíé]{1,100}"
               value="{{ $objednavka->meno }}" class="form-control" required/>

        <label class="label">Priezvisko</label>
        <input type="text" name="priezvisko" pattern="[A-ZĽŠČŤŽÝĎÁÍÉ]{1}[a-zľščťžďúýáíé]{1,100}"
               value="{{ $objednavka->priezvisko }}" class=" form-control" required/>

        <label class="label">Tel. číslo</label>
        <input type="text" name="telCislo" pattern="[0-9]{10}" value="{{ $objednavka->telCislo }}" class=" form-control"
               required/>

        <label class="label">Rodné číslo</label>
        <input type="text" name="rodneCislo" pattern="[0-9]{6}\/[0-9]{4}" value="{{ $objednavka->rodneCislo }}"
               class=" form-control"
               placeholder="000000/0000" required/>

        <label class="label">Poradové číslo</label>
        <input type="text" name="poradoveCislo" value="{{$objednavka->poradoveCislo}}" class=" form-control"
               required/>

        <label for="exampleFormControlSelect2">Miesto</label>
        <select class="form-control" id="exampleFormControlSelect2" name="miesto" >
            @foreach($nazvy as $nazov)
                @php
                    $miesto = OckovacieMiesto::where('id', $objednavka->miesto)->pluck('nazov');
                    $miesto = $miesto[0];
                @endphp

                @if ($miesto == $nazov)
                    <option selected>{{ $nazov }}</option>
                @else
                    <option>{{ $nazov }}</option>
                @endif
            @endforeach
        </select>

        <div class="control">
            <button type="submit" class="btn btn-primary">Odoslať</button>
        </div>

    </form>
</div>
@include('footer')
