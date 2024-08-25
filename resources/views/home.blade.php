@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <!-- Users Management -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Manage Users
                </div>
                <div class="card-body">
                    <p class="card-text">View, add, edit, or delete users from the system.</p>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Go to Users</a>
                </div>
            </div>
        </div>

        <!-- Posts Management -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    Manage Blog Posts
                </div>
                <div class="card-body">
                    <p class="card-text">Create, update, or delete blog posts.</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-success">Go to Posts</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Message -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Welcome to Dashboard') }} "{{ Auth::user()->name }}"
                </div>
                <div class="card-body">
                    <p>You are logged in as {{ Auth::user()->role }}</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
