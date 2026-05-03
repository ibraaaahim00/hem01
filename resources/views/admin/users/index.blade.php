@extends('admin.layouts.layout')

@section('content')

    <h2>Users Overview</h2>

    <div class="container">

        <div class="card">
            <h3>Total Users</h3>
            <p>{{ $totalUsers }}</p>
        </div>


        <div class="card">
            <h3>Total Articles</h3>
            <p>{{ $totalArticles }}</p>
        </div>

    </div>

@endsection
