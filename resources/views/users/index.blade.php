@extends('layouts.app')
<title>Existujuci pouzivatelia</title>
@section('content')
    <div class="container">
        <h1>Existujuci pouzivatelia</h1>
        @foreach($users as $user)
            @include('users.show')
        @endforeach

    </div>
@endsection
@include('footer')
