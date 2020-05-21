<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show</title>
    </head>
    <body>
        <div class="container">
            <h1>{{$post->title}}</h1>
            <small>{{$post->author}}</small>
            <p>{{$post->body}}</p>
            <img src="{{$post->img}}" alt="immagine">

        </div>
    </body>
</html>
