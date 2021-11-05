@extends('admin.layout')
@section('content')
<div style="height:60vh" >
    <p class="display-4 ">Thông tin tài khoản Admin</p>
    <div class="d-flex border rounded-lg w-75">
        <div class="m-3">
            <i style="font-size: 100px" class="fas fa-user"></i>
        </div>
        <div class="m-3">
            <p>Xin chào <strong>{{ $uu->name }}</strong> !</p>
            <p>Email: <strong>{{$uu->email }}</strong></p>
            <p>id: <strong>{{$uu->id_admin }}</strong></p>
        </div> 
    </div>
    <a class="btn btn-info m-3" href="/giohang"> Xem giỏ hàng <i class="fas fa-shopping-cart"></i></a>
    <a class="btn btn-info m-3" href="{{ url('logout-admin') }}">Đăng xuất <i class="fas fa-sign-out-alt"></i></a>
</div>
@endsection