<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mycss.css') }}">
    <script src="https://kit.fontawesome.com/a597e9f72c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/admincss.css') }}">
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/sidebarAdmin.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/summernote/summernote-bs4.css') }}" />
    <script src="{{ asset('/summernote/summernote-bs4.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
    <script src="/js/select2.min.js"></script>
</head>

<body>

    <div class="sidebar">
        <div>
            <div class="card">
                <div class="text-center algin-center m-2">
                    <p class="align-middle mt-2">
                        @if (Auth::check())
                            {{ auth()->user()->name }}
                        @else
                            Tài khoản
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <a href="{{ route('indexAdmin') }}" id="home">Trang chủ</a>
        <a href="{{ route('customer') }}" id="customer">Khách hàng</a>
        <a href="{{ route('brandIndex') }}" id="brand">Thương hiệu</a>
        <a href="{{ route('indexCategory') }}" id="category">Loại điện thoại</a>
        <a href="{{ route('productsIndex', ['type' => 2]) }}" id="products">Điện thoại</a>
        <a href="{{ route('orderedCart') }}" id="orderedCart">Đơn hàng</a>
        <a class="btn-logout-admin" data-bs-toggle="modal" data-bs-target="#logoutAdmin">Đăng xuất</a>
    </div>
    <div class="content">