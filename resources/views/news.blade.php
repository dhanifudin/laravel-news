@foreach ($data->articles as $article)
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>
@endforeach
