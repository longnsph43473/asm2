@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="container">
    <h1>Thêm thư mục</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên thư mục</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
