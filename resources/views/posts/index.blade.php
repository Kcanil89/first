@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog Posts') }}</div>

                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
                    
                    @if($posts->isEmpty())
                        <p class="text-center">No posts available.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($posts as $post)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                    </div>
                                    <div>
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
