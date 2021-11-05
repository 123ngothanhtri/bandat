@extends('home.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <b>Chỉnh sửa tin</b>
            </div>
            <div class="card-body">
                <form action="{{ url('post-sua-bai-viet') }}" method="post" enctype="multipart/form-data">@csrf
                    <input type="hidden" value="{{ $bv->id_baiviet }}" name="id_baiviet">
                    Tiêu đề
                    <input type="text" value="{{ $bv->tieude_baiviet }}" name="tieude" required class="form-control" >
                    Mô tả
                    <textarea name="mota" cols="30" rows="3" class="form-control">{{ $bv->mota_baiviet }}</textarea>
                    Số điện thoại
                    <input type="number" value="{{ $bv->sdt_baiviet }}" name="sdt" required class="form-control" >
                    Địa chỉ 
                    <input type="text" value="{{ $bv->diachi_baiviet }}" name="diachi" required class="form-control" >
                    Diện tích
                    <input type="text" value="{{ $bv->dientich_baiviet }}" name="dientich" required class="form-control" >
                    Giá 
                    <input type="text" value="{{ $bv->gia_baiviet }}" name="gia" required class="form-control" >
                    Hình ảnh
                    <input type="file" name="hinhanh[]" multiple  accept="image/*" class="form-control" >
                    <br>
                    <button class="btn btn-success" type="submit">Lưu</button>
                    <a href="{{ url('/profile-user') }}" class="btn btn-outline-secondary">Hủy</a>
                </form>
            </div>
        </div>

    </div>
    {{-- <script type="text/javascript">
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script> --}}
@endsection
