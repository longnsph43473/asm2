@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="container">
    <h1>Sửa thư mục</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên thư mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
