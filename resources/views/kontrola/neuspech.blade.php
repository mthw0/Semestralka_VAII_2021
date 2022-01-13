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
<title>Stav objednavky</title>
<script type="text/javascript" src="{{ URL::asset('js/redirect.js') }}"></script>
<div class="container">
    <div class="alert alert-danger" role="alert">
        Objednavka neexistuje!
    </div>
    <p>Budete automaticky presmerovaný o <span id="seconds">20</span> sekund.
    </p>

</div>
@include('footer')
