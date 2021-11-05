@extends('home.layout')
@section('content')

    <div style="width:100%;height:90vh" class="container"> 
        @if (session('er'))
        <div class="alert alert-danger"> {{session('er')}}</div>
        @endif
        @if (session('msg'))
            <div class="mb-0 btn alert-success"> {{ session('msg') }}</div>
        @endif
        <form style="max-width:500px" action="{{ url('post-register-user') }}" method="post" class="mx-auto mt-5 p-3 rounded bg-light">@csrf
            <h3 class="text-center">Tạo tài khoản mới</h3>
            <input type="text" class="form-control" placeholder="Họ tên" name="hoten" required min="3" max="30" autocomplete="on">
            @error('hoten')<code>{{ $message }}</code>@enderror <br>
            <input type="email" class="form-control " placeholder="Email" name="email" required min="5" max="90" autocomplete="on">
            @error('email')<code>{{ $message }}</code>@enderror <br>
            <input type="password" class="form-control" placeholder="Mật khẩu" name="pwd" required min="3" max="30" >
            @error('pwd')<code>{{ $message }}</code>@enderror <br>
            <button type="submit" class="btn btn-dark mb-3">Đăng ký</button>

            <p>Bạn đã là thành viên? <a href="{{ url('login-user') }}">Đăng nhập tại đây</a></p>
        </form>
    </div>
@endsection