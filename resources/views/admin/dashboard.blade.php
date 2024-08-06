@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tất cả sản phẩm</h5>
                    <p class="card-text">{{ $productCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tất cả thư mục</h5>
                    <p class="card-text">{{ $categoryCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng lượt xem</h5>
                    <p class="card-text">{{ $totalViews }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

