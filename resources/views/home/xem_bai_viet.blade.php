@extends('home.layout')
@section('content')
    <div class="container">
        <a class="btn alert-dark my-2" href="{{ url('/') }}"><i class="fas fa-arrow-alt-left"></i> Trở về</a>
        <div class="p-3 bg-light">

            <p class="fs-5 fw-bold">{{ $baiviet->tieude_baiviet }}</p>
            <div><i class="fas fa-history"></i> {{ \Carbon\Carbon::parse($baiviet->ngaytao_baiviet)->diffForHumans() }}</div>
            <div><i class="fas fa-paper-plane"></i> Đăng bởi: {{ $baiviet->name }}
                <img src="{{ asset($baiviet->image) }}" class="rounded-circle " style="width: 30px;height:30px ;object-fit:cover" />
            </div>

            <hr>
            <div><i class="fas fa-map-marker-alt"></i> Địa chỉ: {{ $baiviet->diachi_baiviet }}</div>
            <div><i class="fas fa-phone-alt"></i> SĐT: {{ $baiviet->sdt_baiviet }}</div>
            <div><i class="fad fa-square-full"></i> Diện tích: {{ $baiviet->dientich_baiviet }}</div>
            <div><i class="fas fa-dollar-sign"></i></i> Giá: {{ $baiviet->gia_baiviet }}</div>
            <div><i class="fas fa-info-circle"></i> Mô tả: {{ $baiviet->mota_baiviet }}</div>
            <br>
            @if ($baiviet->hinhanh_baiviet)
                @php
                    $images = explode('|', $baiviet->hinhanh_baiviet);
                @endphp
                @foreach ($images as $img)
                    <img style="height:200px" src="{{ asset($img) }}" alt="ảnh">
                @endforeach
            @endif
        </div>


    </div>
@endsection
