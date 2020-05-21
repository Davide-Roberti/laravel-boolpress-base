<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edit</title>
    </head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Titolo</label>
                <input type="text" placeholder="Inserisci i titolo" name="title" value="{{ (!empty(old('title') )) ?  old('title') : $post->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="body">Testo</label>
                <textarea name="body" cols="30" rows="10">{{$post->body}}</textarea>
            </div>
            <div>
                <label for="title">Autore</label>
                <input type="text" placeholder="Inserisci il nome dell'autore" name="author" value="{{$post->author}}">
            </div>
            <div>
                <label for="title">Immagine</label>
                <input type="text" placeholder="Inserisci il percorso" name="img" value="{{ $post->img }}">
            </div>
            <div>
                <label for="not-published">Non Pubblicato</label>
                <input type="radio" id="not-published" name="published" value="0" {{($post->published == 0) ? 'checked' : ''}}>
                <label for="published">Pubblicato</label>
                <input type="radio" id="published" name="published" value="1" {{($post->published == 1) ? 'checked' : ''}}>
            </div>
            <div>
                <input type="submit" value="Salva">
            </div>
        </form>
    </body>
</html>
