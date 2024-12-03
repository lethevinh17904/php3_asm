@extends('layout')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Đăng Nhập</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('postLogin') }}" method="POST" class="border p-4 rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Tên đăng nhập:</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Nhập tên đăng nhập của bạn" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu của bạn" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
        <p class="mt-3 text-center">
            Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a>.
        </p>
    </form>
</div>
@endsection
