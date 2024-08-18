@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">Admin</label>
            <select class="form-select" id="is_admin" name="is_admin" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection
