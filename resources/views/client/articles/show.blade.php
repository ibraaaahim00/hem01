@extends('client.layouts')

@section('content')

    <div class="show-box">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
    </div>

    <hr>

    <h3 class="comments-title">Comments</h3>

    @foreach($article->comments as $comment)
        <div class="comment">
            <strong>{{ $comment->name }}</strong>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach

    <hr>

    <div class="comment-form">
        <h3>Add Comment</h3>

        <form method="POST" action="{{ route('articles.comment', $article->id) }}">
            @csrf

            <input type="text" name="name" placeholder="Your name">

            <textarea name="comment" placeholder="Write comment..." required></textarea>

            <button type="submit">Add Comment</button>
        </form>
    </div>

@endsection
