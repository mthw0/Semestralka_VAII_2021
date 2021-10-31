@include('menu')
<title>Stav objednavky</title>
<script type="text/javascript" src="{{ URL::asset('js/redirect.js') }}"></script>
<div class="container">
    <div class="alert alert-success" role="alert">
        Objednavka existuje!
    </div>
    <p>Vase poradove cislo je: {{str_replace(['[{"poradoveCislo":','}]'],"",$cislo)}}</p>
    <p>Budete automaticky presmerovaný o <span id="seconds">20</span> sekund.
    </p>

</div>
@include('footer')
