<div id="tabulka">
<table class="table table-hover table-responsive" style="display: inline-table">
    <thead>
    <tr>
        <th scope="col">Miesto</th>
        <th scope="col">Poradové číslo</th>
        <th scope="col">Datum a čas</th>
        <th scope="col">Meno</th>
        <th scope="col">Priezvisko</th>
        <th scope="col">Tel. cislo</th>
        <th scope="col">Rodne cislo</th>
        <th scope="col">Akcie</th>
    </tr>
    </thead>
    <tbody id="tabulka_body">
    @foreach ($objednavky as $objednavka)
        @include('objednavky.row')
    @endforeach

    </tbody>
</table>
{{ $objednavky->links() }}
</div>
