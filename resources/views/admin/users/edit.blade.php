@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (Leave blank to keep current)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">Admin</label>
            <select class="form-select" id="is_admin" name="is_admin" required>
                <option value="0" {{ $user->is_admin ? '' : 'selected' }}>No</option>
                <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Yes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection
