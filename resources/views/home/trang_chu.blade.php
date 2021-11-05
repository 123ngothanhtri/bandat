@extends('home.layout')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mt-2">
            {!! $bv->links() !!}
        </div>
<div class="row">
        @foreach ($bv as $i)
        <div class="col-xl-6">
            <div class="d-flex mb-2 bg-light ">

                @if ($i->hinhanh_baiviet)
                    @php
                        $images = explode('|', $i->hinhanh_baiviet);
                    @endphp
                    <img style="width: 200px;height:200px;object-fit:cover" src="{{ asset($images[0]) }}" alt="ảnh">

                @endif
                <div class="p-3 overflow-hidden text-nowrap">
                    <p><a class="text-decoration-none fw-bold text-success" href="{{ url('xem-bai-viet/' . $i->id_baiviet) }}">{{ $i->tieude_baiviet }}</a></p>
                    <div><i class="fas fa-map-marker-alt"></i> Địa chỉ: {{ $i->diachi_baiviet }}</div>
                    <div><i class="fas fa-vector-square"></i> Diện tích: {{ $i->dientich_baiviet }}</div>
                    <div><i class="fas fa-dollar-sign"></i> Giá: {{ $i->gia_baiviet }}</div>
                    <p><a href="{{ url('xem-bai-viet/' . $i->id_baiviet) }}">Chi tiết &raquo;</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
