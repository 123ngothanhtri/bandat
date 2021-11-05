@extends('home.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <b>Tạo tin</b>
            </div>
            <div class="card-body">
                <form action="{{ url('post-them-bai-viet') }}" method="post" enctype="multipart/form-data">@csrf
                    Tiêu đề
                    <input type="text" name="tieude" required class="form-control" >
                    Mô tả
                    <textarea name="mota" cols="30" rows="3" class="form-control"></textarea>
                    Số điện thoại
                    <input type="number" name="sdt" required class="form-control" >
                    Địa chỉ 
                    <input type="text" name="diachi" required class="form-control" >
                    Diện tích
                    <input type="text" name="dientich" required class="form-control" >
                    Giá 
                    <input type="number" name="gia" required class="form-control" >
                    
                    
                    Hình ảnh
                    <input type="file" name="hinhanh[]" multiple  accept="image/*" class="form-control" >
                    <br>
                    <button class="btn btn-success" type="submit"><i class="fas fa-paper-plane"></i> Đăng</button />
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
