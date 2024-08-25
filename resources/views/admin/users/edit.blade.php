@extends('layouts.admin')

@section('title', 'Update User')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Update User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <small class="form-text text-muted">Leave blank if you don't want to change the password</small>
                                @error('password')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password Confirmation -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            </div>

                            <!-- Is Admin -->
                            <div class="mb-3">
                                <label for="is_admin" class="form-label">Is Admin</label>
                                <select id="is_admin" name="is_admin" class="form-select" required>
                                    <option value="1" {{ old('is_admin', $user->is_admin) == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('is_admin', $user->is_admin) == '0' ? 'selected' : '' }}>No</option>
                                </select>
                                @error('is_admin')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Role -->
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select id="role" name="role" class="form-select" required>
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="author" {{ old('role', $user->role) == 'author' ? 'selected' : '' }}>Author</option>
                                    <option value="viewer" {{ old('role', $user->role) == 'viewer' ? 'selected' : '' }}>Viewer</option>
                                </select>
                                @error('role')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Update User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
