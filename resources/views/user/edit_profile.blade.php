@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Chỉnh sửa thông tin cá nhân</h1>

    <form action="{{ route('user.updateProfile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="fullname">Họ và tên</label>
            <input type="text" name="fullname" id="fullname" class="form-control" value="{{ old('fullname', $user->fullname) }}">
            @error('fullname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="form-group mb-3">
            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username', $user->username) }}">
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="avatar">Ảnh đại diện</label>
            <input type="file" name="avatar" id="avatar" class="form-control">
            @error('avatar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            @if ($user->avatar)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="100">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        <a href="{{ route('user.profile') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
