@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container">
    <h1>Tất cả sản phẩm</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Giá</th>
                <th>Thư mục</th>
                <th>???</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
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