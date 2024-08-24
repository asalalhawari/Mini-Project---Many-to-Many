<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>All Posts</h1>
        @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            @if($post->image)
            <img src="{{ asset('storage/images/986cdd9e5278369892f59e16cf7b3030.jpg') }}" alt="Image description">
            @endif
            <p>Tags:
                @foreach($post->tags as $tag)
                <span class="tag">{{ $tag->name }}</span>
                @endforeach
            </p>
        </div>
        @endforeach
    </div>
</body>
</html>
