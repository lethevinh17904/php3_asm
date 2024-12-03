@extends('layout')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Đăng Ký</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('postRegister') }}" method="POST" class="border p-4 rounded shadow" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Họ và Tên:</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="Nhập họ và tên của bạn" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Tên tài khoản:</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Nhập tên tài khoản" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Nhập email của bạn" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
        </div>        
        <div class="mb-3">
            <label for="avatar" class="form-label">Ảnh đại diện (tùy chọn):</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
        <p class="mt-3 text-center">
            Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập ngay</a>.
        </p>
    </form>
</div>
@endsection
