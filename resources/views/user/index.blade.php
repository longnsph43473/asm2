@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tạo tài khoản mới</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>???</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
