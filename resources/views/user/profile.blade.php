@extends('layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Thông Tin Cá Nhân</h1>

    <!-- Thông tin người dùng -->
    <div class="row">
        <!-- Cột ảnh đại diện và tên người dùng -->
        <div class="col-md-4 text-center">
            <!-- Hiển thị ảnh đại diện -->
            <img src="{{ asset('storage/' . $user->avatar ?? 'https://via.placeholder.com/150') }}" alt="Avatar" class="img-thumbnail rounded-circle" style="width: 150px; height: 150px;">
            <h4 class="mt-3">{{ $user->fullname ?? Auth::user()->name }}</h4>
            <p class="text-muted">Chức vụ : {{ $user->role == 'admin' ? 'Quản trị viên' : 'Người dùng' }}</p>
        </div>

        <!-- Cột thông tin chi tiết người dùng -->
        <div class="col-md-8">
            <h4 class="mb-3">Chi Tiết Thông Tin</h4>
            <table class="table table-borderless">
                <tr>
                    <th scope="row">Email:</th>
                    <td>{{ $user->email ?? Auth::user()->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Tên đăng nhập:</th>
                    <td>{{ $user->username ?? Auth::user()->username }}</td>
                </tr>
                <tr>
                    <th scope="row">Số Điện Thoại:</th>
                    <td>{{ $user->phone ?? 'Chưa cập nhật' }}</td>
                </tr>
                <tr>
                    <th scope="row">Địa Chỉ:</th>
                    <td>{{ $user->address ?? 'Chưa cập nhật' }}</td>
                </tr>
            </table>

            <!-- Nút chỉnh sửa thông tin -->
            <div class="text-end">
                <a href="{{ route('user.editProfile') }}" class="btn btn-primary">Chỉnh Sửa Thông Tin</a>
                <a href="{{ route('user.editPassword') }}" class="btn btn-warning">Đổi Mật Khẩu</a>
            </div>
        </div>
    </div>
</div>
@endsection
