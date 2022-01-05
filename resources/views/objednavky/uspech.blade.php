@include('menu')
<title>Objednavka uspesne zaevidovana!</title>
<script type="text/javascript" src="{{ URL::asset('js/redirect.js') }}"></script>
<div class="container">
    <div class="alert alert-success" role="alert">
        Objednavka uspesne zaevidovana!
    </div>
    <p>Budete automaticky presmerovaný o <span id="seconds">20</span> sekund.
    </p>

</div>
@include('footer')
