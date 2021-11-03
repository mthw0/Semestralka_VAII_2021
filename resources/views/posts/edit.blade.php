@section('title', 'Edit Post')
@section('action', route('posts.create'))
@include('menu')

<div class="container">
    <script src="{{ URL::asset('js/showHint.js') }}"></script>
    <h1 class="title">Upraviť: {{ $post->title }}</h1>

    <form method="post" class="pridat" action="{{ route('posts.update', [$post->slug]) }}">

        @csrf
        @method('patch')
        @include('partials.errors')

        <div class="form-group">
            <label class="label">Názov</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Názov" minlength="5" maxlength="100" required/>
        </div>

        <div class="form-group">
            <label class="label">Obsah</label>
            <textarea name="content" class="form-control" placeholder="Obsah" minlength="5" maxlength="2000" required rows="10">{{ $post->content }}</textarea>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kategória: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fname" name="category" required onkeyup="showHint(this.value)">
            </div>
            <p>Dostupné kategórie: <span id="txtHint"></span></p>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Aktualizovať</button>
        </div>

    </form>

</div>
