@include('menu')

<script>
    document.title += " - Objednávky";
    $('#polozkyMenu1').removeClass('active');
    $('#polozkyMenu2').removeClass('active');
    $('#polozkyMenu3').removeClass('active');
    $('#polozkyMenu4').removeClass('active');
    $('#polozkyMenu5').addClass('active');
    $('#polozkyMenu6').removeClass('active');
    $('#polozkyMenu7').removeClass('active');
</script>
<script src="{{URL::asset('js/prepinac.js')}}"></script>
<script src="{{URL::asset('js/delete.js')}}"></script>
<script src="{{URL::asset('js/pages.js')}}"></script>

<div class="container" id="obj">
    <h1>Objednávky
        <span>
        <a href="{{ route('objednavky.create') }}" target="_blank" class="btn btn-outline-success"
           style="border-radius: 20%">
        +
        </a>
    </span>
    </h1>
    <hr>

    @include('objednavky.tabulka')

</div>

@include('footer')
