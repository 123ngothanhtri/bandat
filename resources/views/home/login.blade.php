@extends('home.layout')
@section('content')
    <video style="z-index:-1;position:fixed;top:0;left:0;width:100%;height:100vh;object-fit:cover" loop autoplay muted>
        <source src="{{ asset('aov1.mp4') }}" type="video/mp4">
    </video>
    <div style="height:80vh" class="d-flex justify-content-center align-items-center">

        <div class="bg-light rounded p-4" style="width:400px">
            <a href="{{ url('login-admin') }}" class="text-center">
                <p><img src="{{ asset('genshin.png') }}" height="40px" alt="genshin"></p>
            </a>
            <form action="{{ url('post-login-user') }}" method="POST">@csrf
                <input class="form-control mb-3" type="email" placeholder="Tài khoản" name="em" required>
                <input class="form-control mb-3" type="password" placeholder="Mật khẩu" name="pw" required>
                <button type="submit" class="btn btn-dark w-100">Đăng nhập</button>
            </form>
            <hr>
            <a class="btn btn-outline-success w-100" href="{{ url('register-user') }}">Tạo tài khoản mới</a>
        </div>
    </div>
@endsection
