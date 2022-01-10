@include('menu')
<title>Stav objednavky</title>
<script type="text/javascript" src="{{ URL::asset('js/redirect.js') }}"></script>
<div class="container">
    <div class="alert alert-success" role="alert">
        Objednavka existuje!
    </div>
    <h2>Dátum a čas vašej vakcinácie je: {{$datum->format('d.m.Y H:i')}}</h2>
    <p>Budete automaticky presmerovaný o <span id="seconds">20</span> sekund.
    </p>

</div>
@include('footer')
