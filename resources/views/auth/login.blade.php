@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <h1>Đăng nhập</h1>
    @if (session('errorLogin'))
        <div class="alert alert-danger">
            {{ session('errorLogin') }}
        </div>
    @endif
    <form action="{{ route('post.login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Tài khoản</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
@endsection
