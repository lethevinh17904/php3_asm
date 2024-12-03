<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            display: flex;
        }

        .main {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
            background-color: #fff;
            min-width: 0;
        }

        #sidebar {
            width: 70px;
            min-width: 70px;
            z-index: 1000;
            transition: all .25s ease-in-out;
            background-color: #0e2238;
            display: flex;
            flex-direction: column;
        }

        #sidebar.expand {
            width: 260px;
            min-width: 260px;
        }

        #toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
            padding: 1rem 1.5rem;
        }

        #toggle-btn i {
            font-size: 1.5rem;
            color: #fff;
        }

        .sidebar-logo {
            margin: auto 0;
        }

        .sidebar-logo a {
            color: #FFF;
            font-size: 1.15rem;
            font-weight: 600;
        }

        #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span {
            display: none;
        }

        #sidebar.expand .sidebar-logo,
        #sidebar.expand a.sidebar-link span {
            animation: fadeIn .25s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .sidebar-nav {
            padding: 2rem 0;
            flex: 1 1 auto;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #FFF;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i,
        .dropdown-item i {
            font-size: 1.1rem;
            margin-right: .75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, .075);
            border-left: 3px solid #3b7ddd;
        }

        .sidebar-item {
            position: relative;
        }

        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 70px;
            background-color: #0e2238;
            padding: 0;
            min-width: 15rem;
            display: none;
        }

        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
            display: block;
            max-height: 15em;
            width: 100%;
            opacity: 1;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;
        }

        .navbar {
            background-color: #f5f5f5;
            box-shadow: 0 0 2rem 0 rgba(33, 37, 41, .1);
        }

        .navbar-expand .navbar-collapse {
            min-width: 200px;
        }

        .avatar {
            height: 40px;
            width: 40px;
        }

        .card {
            background-color: #f5f5f5;
            transition: .4s;
            cursor: pointer;
            color: #000;
            margin-bottom: 1rem;
        }

        .card:hover {
            background-color: #293b5f;
            color: #FFF;
            transform: translateY(-10.5px);
        }


        .text-success {
            background-color: #71c664;
            padding: 0.25rem 0.35rem;
            font-size: 0.715rem;
            color: #FFF !important;
            border-radius: 5px;
        }

        .table>thead tr {
            color: #FFF;
            text-align: left;
        }

        tr.highlight th {
            background-color: #293b5f;
            color: #FFF;
        }

        .content {
            flex: 1 1 auto;
        }

        footer {
            background-color: #f5f5f5;
            padding: 1rem .875rem;
        }

        @media (min-width: 768px) {
            .navbar form {
                max-width: 320px;
            }

            .input-group-navbar .form-control:focus {
                outline: none;
                box-shadow: 0 0 0 0 rgba(255, 255, 255);
                border: none;
            }

            .input-group-navbar .form-control {
                color: #3e4455;
            }

            .form-control::placeholder {
                background-color: #fff;
            }

            .input-group-navbar .btn {
                background-color: #727cf5;
                color: #FFF;
                font-family: 'Poppins', sans-serif;
                cursor: pointer;
                z-index: 10000;
            }

            .navbar-expand .navbar-nav .dropdown-menu {
                box-shadow: 0 .1rem .2rem rgba(0, 0, 0, .05);
            }
        }

        .carousel-inner {
            height: 600px;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-img-top-container {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="bi bi-grid"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="{{ route('user.index') }}">LeViShop</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{ route('user.index') }}" class="sidebar-link">
                        <i class="bi bi-box"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>

                <!-- Products Link -->
                <li class="sidebar-item">
                    <a href="{{ route('user.list') }}" class="sidebar-link">
                        <i class="bi bi-box2"></i>
                        <span>Danh sách</span>
                    </a>
                </li>
                <!-- Authentication Dropdown -->
                {{-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-bookmark-check"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('login') }}" class="sidebar-link">Đăng nhập</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('register') }}" class="sidebar-link">Đăng ký</a>
                        </li>
                    </ul>
                </li>

                <!-- Multi-level Dropdown -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="bi bi-columns"></i>
                        <span>Multi-level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="{{ route('link1') }}" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('link2') }}" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- Notification Link -->
                <li class="sidebar-item">
                    <a href="{{ route('admin.notifications') }}" class="sidebar-link">
                        <i class="bi bi-box2"></i>
                        <span>Notification</span>
                    </a>
                </li>

                <!-- Setting Link -->
                <li class="sidebar-item">
                    <a href="{{ route('admin.settings') }}" class="sidebar-link">
                        <i class="bi bi-box2"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul> --}}
                {{-- <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </div> --}}
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="container-fluid">

                    <form action="{{ route('user.search') }}" method="GET"
                        class="d-none d-sm-inline-block flex-grow-1">
                        <div class="input-group input-group-navbar">
                            <input type="text" class="form-control border-0 rounded-0" placeholder="Search..."
                                name="keyword" value="{{ request('keyword') }}">
                            <button class="btn border-0 rounded-0" type="submit">Search</button>
                        </div>
                    </form>

                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav ms-auto">
                            <div class="sidebar-logo">
                                <a href="{{ route('user.index') }}" class="text-dark me-4">LeViShop</a>
                            </div>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-icon pd-md-0" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="https://static.vecteezy.com/system/resources/previews/005/005/788/non_2x/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg"
                                        class="avatar img-fluid rounded-circle" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end rounded">
                                    @if (Auth::check())
                                        <li>
                                            <a href="{{ route('user.profile') }}" class="dropdown-item">
                                                <span>Trang cá nhân</span>
                                            </a>
                                        </li>
                                        <!-- Kiểm tra nếu người dùng là admin -->
                                        @if (Auth::user()->hasRole('admin'))
                                            <li>
                                                <a href="{{ route('admin.products.index') }}" class="dropdown-item">
                                                    <span>Quản lý sản phẩm</span>
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{ route('logout') }}" class="dropdown-item">
                                                <span>Đăng xuất</span>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('register') }}" class="dropdown-item">
                                                <span>Đăng ký</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('login') }}" class="dropdown-item">
                                                <span>Đăng nhập</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start">
                            <a href="#" class="text-body-secondary">
                                <strong>LeViShop</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">About us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script>
    const hamburger = document.querySelector("#toggle-btn");
    const sidebar = document.querySelector("#sidebar");

    if (hamburger && sidebar) {
        hamburger.addEventListener("click", function() {
            sidebar.classList.toggle("expand");
        });
    }
</script>

</html>
