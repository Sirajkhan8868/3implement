

@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    {{-- <p>By: {{ $post->user->name }}</p> --}}
    <p>{{ $post->content }}</p>

    <h4>Comments:</h4>
    @foreach($post->comments as $comment)
        <p>{{ $comment->user->name }}: {{ $comment->content }}</p>
    @endforeach

    <form action="/posts/{{ $post->id }}/comments" method="POST">
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">Add Comment</button>
    </form>

@endforeach

<div>
    <h1>Hello world</h1>
</div>
