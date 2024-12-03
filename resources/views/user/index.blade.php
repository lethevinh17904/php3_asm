@extends('layout')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.pikbest.com/templates/20240624/supermarket-store-bottled-fruit-beverage-banner_10635348.jpg!w700wp"
                    class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.saokim.com.vn/wp-content/uploads/2019/01/Mau-thiet-ke-banner-nuoc-giai-khat-Tan-Do.jpg"
                    class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.vlance.vn/uploads/portfolio/1200x630/thiet-ke-banner-quang-cao-nuoc-giai-khat-78938.jpeg"
                    class="d-block w-100 carousel-image" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <h1 class="my-4 text-center">Chào mừng đến với cửa hàng của chúng tôi!</h1>

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

            <nav aria-label="Page navigation example">
                {{ $products->links('pagination::bootstrap-5') }}
            </nav>
        @endif
    </div>
@endsection
