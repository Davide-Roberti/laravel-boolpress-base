<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Azioni</th>
                </thead>
                <tbody>
                    @foreach ($postsPublished as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->author}}</td>
                            <td><a href="{{route('posts.edit', $post->id)}}">Modifica</a></td>
                            <td><a href="{{route('posts.show', $post->slug)}}">Visualizza</a></td>
                            <td>
                                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>
