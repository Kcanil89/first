@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Post Details</h1>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Back</a>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Post ID: {{ $post->id }}</h5>
            <h5 class="card-title">Title: {{ $post->title }}</h5>
            <p class="card-text">Content: {{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection
