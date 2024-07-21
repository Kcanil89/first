@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-0">{{ __('Blog Post Details') }}</h1>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">{{ __('Back') }}</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ __('Post ID') }}: {{ $post->id }}</h5>
                    <h5 class="card-title">{{ __('Title') }}: {{ $post->title }}</h5>
                    <p class="card-text">{{ __('Content') }}: {{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
