@extends('admin.layouts.layout')

@section('content')

    <h2 style="margin-bottom:20px;">Articles</h2>

    <a href="/admin/articles/create" class="add-btn">+ Add Article</a>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($Articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>{{ $article->date }}</td>

                <td>
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="edit">
                        Edit
                    </a>

                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete" onclick="return confirm('Delete this article?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
