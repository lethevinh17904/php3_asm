@extends('layout')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Danh sách các sản phẩm</h1>

        <div class="mb-4">
            <form action="{{ route('user.list') }}" method="GET">
                <label for="category" class="form-label">Lọc theo danh mục:</label>
                <select name="category_id" id="category" class="form-select" onchange="this.form.submit()">
                    <option value="">Chọn danh mục</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        @if ($products->isEmpty())
            <div class="alert alert-warning" role="alert">
                Hiện tại không có sản phẩm nào!
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
