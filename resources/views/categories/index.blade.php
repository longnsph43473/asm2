@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="container">
    <h1>Thư mục</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm thư mục</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Tên thư mục</th>
                <th>???</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
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
