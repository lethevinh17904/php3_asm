@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Chi Tiết Sản Phẩm</h1>

        @if ($product)
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Mô tả: {{ $product->description }}</p>
                        <p class="card-text">Giá: {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
                        <p class="card-text">Số lượng: {{ $product->quantity }}</p>
                        <p class="card-text">Danh mục: {{ $product->category_name }}</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-success me-2">Thêm vào giỏ hàng</a>
                            <a href="#" class="btn btn-warning">Đặt Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-danger mt-4">
                Sản phẩm không tồn tại.
            </div>
        @endif
    </div>
@endsection
