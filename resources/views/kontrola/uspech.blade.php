@include('menu')
<title>Stav objednavky</title>
{{--<script type="text/javascript" src="{{ URL::asset('js/redirect.js') }}"></script>--}}
<div class="container">
    <div class="alert alert-success" role="alert">
        Objednavka existuje!
    </div>
    <h2>Informácie o registrácií</h2>
    <hr>
    <h4>Dátum a čas vašej vakcinácie je: <strong>{{$datum->format('d.m.Y H:i')}}</strong><br> Na očkovacom mieste: <strong>{{$miesto}}</strong></h4>
    {{--<p>Budete automaticky presmerovaný o <span id="seconds">20</span> sekund.</p>--}}

</div>
@include('footer')
