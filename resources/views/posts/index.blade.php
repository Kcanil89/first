@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
    
    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul class="list-group">
            @foreach ($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </div>
                <div>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
