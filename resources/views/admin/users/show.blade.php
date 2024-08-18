@extends('layouts.admin')

@section('content')
    <h1>View User</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Admin:</strong> {{ $user->is_admin ? 'Yes' : 'No' }}</p>
        </div>
    </div>

    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
@endsection
