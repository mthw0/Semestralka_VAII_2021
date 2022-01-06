@include('menu')
<title>Kontrola</title>
<div class="container">
    <h1>Kontrola</h1>
    <p>Táto stránka slúžu na kontrolu či je niekto obiednaný.</p>
    <form method="post" action="{{ route('kontrola.store') }}">
        @csrf
        <div class="form-group">
            <label for="rodneCislo">Zadajte rodné číslo:</label><input name="rodneCislo" pattern="[0-9]{6}\/[0-9]{4}"
                                                                       required class="form-control" id="rodneCislo"
                                                                       placeholder="Zadajte rodne cislo">
            <small id="numberHelp" class="form-text text-muted">V tvare: 000000/0000</small>
        </div>
        <button type="submit" class="btn btn-primary">Odoslať</button>
    </form>

</div>
@include('footer')
