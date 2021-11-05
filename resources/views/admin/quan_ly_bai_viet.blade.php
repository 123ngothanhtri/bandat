@extends('admin.layout')
@section('content')
    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('er'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('er') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <b>Danh sách bài viết</b>
        </div>
        {!! $baiviet->links() !!}
        <div class="card-body">
            <table class="table table-sm">
                <tr class="fw-bold">
                    <td>Hình ảnh</td>
                    <td>Nội dung</td>
                    <td>Ngày tạo</td>
                    <td>Thể loại</td>
                    <td>Thao tác</td>
                </tr>
                @foreach ($baiviet as $i)
                    <tr>
                        <td>
                            @if ($i->hinhanh_baiviet)
                                <img src="{{ asset($i->hinhanh_baiviet) }}" style="width: 50px">
                            @else
                                Không có ảnh
                            @endif
                        </td>
                        <td>{{ $i->noidung_baiviet }}</td>
                        <td>{{ $i->ngaythem_baiviet }}</td>
                        <td>{{ $i->ten_theloai }}</td>
                        <td>
                            <a href="{{ url('xem-bai-viet/' . $i->id_baiviet) }} " class="btn btn-light border">Xem bài viết</a>
                            <a href="{{ url('quan-ly-xoa-bai-viet/' . $i->id_baiviet) }} " class="btn alert-danger border">Xóa</a>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection
