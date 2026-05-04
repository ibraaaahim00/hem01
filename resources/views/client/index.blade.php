@extends('client.layouts')

@section('content')

    <div class="page-title">Latest Articles</div>

    <div class="grid">
        @foreach($articles as $article)
            <div class="card">
                <a href="{{ route('client.articles.show', $article->id) }}">
                    <div class="card-body">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ Str::limit($article->content, 120) }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
