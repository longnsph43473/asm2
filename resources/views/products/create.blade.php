@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
<div class="container">
    <h1>Thêm sản phẩm</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Thư mục</label>
            <select class="form-select" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
