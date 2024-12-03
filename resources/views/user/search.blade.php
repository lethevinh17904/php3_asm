@extends('layout')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Kết quả tìm kiếm cho "{{ $keyword }}"</h1>

        @if ($products->isEmpty())
            <div class="alert alert-warning" role="alert">
                Không tìm thấy sản phẩm nào!
            </div>
        @else
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('user.detail', $product->id) }}">
                            <div class="card">
                                <div class="card-img-top-container">
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Giá: {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
                                    <p class="card-text">Số lượng: {{ $product->quantity }}</p>
                                    <p class="card-text">Danh mục: {{ $product->category_name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
