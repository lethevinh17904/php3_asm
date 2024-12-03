@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Đổi mật khẩu</h1>

    <form action="{{ route('user.updatePassword') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="current_password">Mật khẩu hiện tại</label>
            <input type="password" name="current_password" id="current_password" class="form-control">
            @error('current_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="new_password">Mật khẩu mới</label>
            <input type="password" name="new_password" id="new_password" class="form-control">
            @error('new_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="new_password_confirmation">Xác nhận mật khẩu mới</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
            @error('new_password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
        <a href="{{ route('user.profile') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
