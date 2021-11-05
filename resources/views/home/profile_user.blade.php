@extends('home.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-light my-2 p-3">
                    <img src="{{ asset(Auth::guard('web')->user()->image) }}" class="rounded-circle" style="width: 50px;height:50px ;object-fit:cover" />
                    <b class="m-3 fs-5">{{ Auth::guard('web')->user()->name }}</b>
                    <div>{{ Auth::guard('web')->user()->email }}</div>
                    <a class="btn btn-sm alert-secondary my-1" href="{{ url('them-bai-viet') }}"><i class="fas fa-plus"></i> Đăng tin</a>
                    <a class="btn btn-sm alert-secondary my-1" href="{{ url('cap-nhat-user') }}"><i class="fas fa-user-edit"></i> Cập nhật thông tin</a>
                    <a class="btn btn-sm alert-secondary my-1" href="{{ url('mat-khau-user') }}"><i class="fas fa-lock"></i> Đổi mật khẩu</a>
                    <a class="btn btn-sm alert-secondary my-1" href="{{ url('logout-user') }}"><i class="fas fa-power-off"></i> Đăng xuất</a>

                </div>

            </div>
            <div class="col-lg-8">

                @foreach ($bv as $i)
                    <div class="d-flex my-2 bg-light">

                        @if ($i->hinhanh_baiviet)
                            @php
                                $images = explode('|', $i->hinhanh_baiviet);
                            @endphp
                            <img style="width: 200px;height:200px;object-fit:cover" src="{{ asset($images[0]) }}" alt="ảnh">

                        @endif
                        <div class="p-3 w-100 overflow-hidden text-nowrap">
                            <a class="text-decoration-none fw-bold text-success" href="{{ url('xem-bai-viet/' . $i->id_baiviet) }}">{{ $i->tieude_baiviet }}</a>
                            <div><i class="fas fa-map-marker-alt"></i> Địa chỉ: {{ $i->diachi_baiviet }}</div>
                            <div><i class="fas fa-vector-square"></i> Diện tích: {{ $i->dientich_baiviet }}</div>
                            <div>Giá: {{ $i->gia_baiviet }}</div>
                            <div><a href="{{ url('xem-bai-viet/' . $i->id_baiviet) }}">Chi tiết &raquo;</a></div>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-sm alert-dark me-1" href="{{ url('sua-bai-viet/' . $i->id_baiviet) }}"><i class="fas fa-edit"></i> Sửa</a>
                                <a class="btn btn-sm alert-dark" href="{{ url('xoa-bai-viet/' . $i->id_baiviet) }}"><i class="fas fa-trash-alt"></i> Xóa</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                @if (count($bv) == 0)
                    <h3 class="p-5 my-2 bg-light text-center">Bạn chưa có tin nào cả :(</h3>
                @endif
            </div>
        </div>


    </div>





@endsection
