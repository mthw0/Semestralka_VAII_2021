@include('menu')
<title>Existujuci pouzivatelia</title>

<div class="container">
        <h1>Existujuci pouzivatelia</h1>
        <hr>
    <div id="grid">
    @foreach($users as $user)
        <div class="karta">
            @include('users.show')
        </div>
        @endforeach
    </div>
</div>
@include('footer')
