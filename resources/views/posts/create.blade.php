@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Blog Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" cols="30" rows="10" required>{{ old('content', $post->content) }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
