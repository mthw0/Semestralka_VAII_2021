@include('menu')

<title>Objednavka uspesne zaevidovana!</title>
<script type="text/javascript" src="{{ URL::asset('js/redirect.js') }}"></script>
<div class="container">
    <div class="alert alert-success" role="alert">
        Objednávka bolo úspešne zaevidovaná!
    </div>
    <h2>Dátum a čas vašej vakcinácie je: <strong>{{$datum->format('d.m.Y H:i')}}</strong> na mieste: <strong>{{$miesto}}</strong></h2>
    <p>Budete automaticky presmerovaný o <span id="seconds">30</span> sekúnd.
    </p>

</div>
@include('footer')
