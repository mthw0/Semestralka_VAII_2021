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
    <h1>Kontrola</h1>
    <p>Na tejto stránke si môžete overiť dátum a čas registrovanej vakcinácie.</p>
    <form method="post" action="{{ route('kontrola.store') }}">
        @csrf
        <div class="form-group">
            <label for="rodneCislo">Zadajte rodné číslo:</label><input name="rodneCislo" pattern="[0-9]{6}\/[0-9]{4}"
                                                                       required class="form-control" id="rodneCislo"
                                                                       placeholder="Zadajte rodne cislo">
            <small id="numberHelp" class="form-text text-muted">V tvare: 000000/0000</small>
        </div>
        <button type="submit" class="btn btn-primary">Odoslať</button>
        <a href="{{route('ockovanie.index')}}" class="btn btn-danger">Späť</a>
    </form>

</div>
@include('footer')
