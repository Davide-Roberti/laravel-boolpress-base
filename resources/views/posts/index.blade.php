@foreach ($postsPublished as $post)
    <h2>{{$post->title}}</h2>
    <small>{{$post->author}}</small>
@endforeach
