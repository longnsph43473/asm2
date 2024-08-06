@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <h1>Chỉnh sửa hồ sơ</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu (Không được để trống)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
