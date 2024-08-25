@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author')
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                        <td>
                            @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author')
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @elseif(auth()->user()->role === 'viewer')
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
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
