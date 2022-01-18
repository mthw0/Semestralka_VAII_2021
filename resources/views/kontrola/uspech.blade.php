@include('menu')
<script>
    document.title += " - Očkovanie";
    $(document).ready(function () {
        $("#faza1").load("faza1.php");
    });
    $('#polozkyMenu1').removeClass('active');
    $('#polozkyMenu2').removeClass('active');
    $('#polozkyMenu3').removeClass('active');
    $('#polozkyMenu4').removeClass('active');
    $('#polozkyMenu5').removeClass('active');
    $('#polozkyMenu6').addClass('active');
    $('#polozkyMenu7').removeClass('active');
</script>
<div class="container">
    <div class="alert alert-success" role="alert">
        Objednavka existuje!
    </div>
    <h2>Informácie o registrácií</h2>
    <hr>
    <h4>Dátum a čas vašej vakcinácie je: <strong>{{$datum->format('d.m.Y H:i')}}</strong><br> Na očkovacom mieste:
        <strong>{{$miesto}}</strong>
    </h4>

</div>
@include('footer')
