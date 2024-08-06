@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <h1>Đăng kí</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form action="{{ route('post.register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Tài khoản</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Đăng kí</button>
    </form>
</div>
@endsection
