@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Blog Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" cols="30" rows="10" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
