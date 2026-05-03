@extends('admin.layouts.layout')

@section('content')

    <h2 style="margin-bottom:20px;">Edit Article</h2>

    <div class="form-container">

        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Title</label>
            <input type="text" name="title" value="{{ $article->title }}">

            <label>Content</label>
            <textarea name="content">{{ $article->content }}</textarea>

            <label>Date</label>
            <input type="date" name="date" value="{{ $article->date }}">

            <button type="submit">Update Article</button>
        </form>

    </div>

@endsection
