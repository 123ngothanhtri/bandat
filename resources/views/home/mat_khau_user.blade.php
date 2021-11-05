@extends('home.layout')
@section('content')
<div class="container">
    <div class="card mt-2">
        <div class="card-header fw-bold ">
            Đổi mật khẩu
        </div>
        <div class="card-body">
                <form action="{{ url('post-mat-khau-user') }}" method="post">@csrf
                    
                    Mật khẩu cũ
                    <input type="password" name="mkc" required class="form-control" />
                    Mật khẩu mới
                    <input type="password" name="mkm" required class="form-control" />
                    Mật khẩu mới
                    <input type="password" name="mkmm" required class="form-control" />
                    
                    <input class="btn btn-success mt-3" type="submit" value="Lưu">
                    <a href="{{ url('/profile-user') }}" class="btn btn-outline-secondary mt-3">Hủy</a>
                </form>
        </div>
    </div>
</div>
@endsection