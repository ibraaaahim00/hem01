@extends('admin.layouts.layout')

@section('content')

    <h2 style="margin-bottom:20px;">Create New Article</h2>

    <div class="form-container">

        <form action="{{ route('admin.articles.store') }}" method="POST">
            @csrf

            <label>Title</label>
            <input type="text" name="title" value="{{@old('title','')}}" placeholder="Enter title">

            <label>Content</label>
            <textarea name="content" placeholder="Enter content"></textarea>
            {{@old('content','')}}
            <label>Date</label>
            <input type="date" name="date">

            <button type="submit">Save Article</button>

        </form>

    </div>

@endsection
