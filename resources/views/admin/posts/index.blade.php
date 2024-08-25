@extends('layouts.admin')

@section('title', 'Blog Posts')

@section('content')
    @if(auth()->user()->role == 'admin' || auth()->user()->role == 'author')
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
                        <td>
                            @if(auth()->user()->role == 'admin' || auth()->user()->role == 'author')
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @else
                                <span class="text-muted">No Actions Available</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
