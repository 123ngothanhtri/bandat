@extends('home.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header fw-bold">
            Cập nhật thông tin tài khoản
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if (Auth::guard('web')->user()->image)
                    <img src="{{ Auth::guard('web')->user()->image }}" id="output_image" class="rounded-circle" style="width: 200px;height:200px ;object-fit:cover" />
                   
                    @else
                        <img src="{{ asset(avt.jpg) }}" class="rounded-circle" style="width: 200px;height:200px ;object-fit:cover" alt="">
                    @endif
                    
                </div>
                <div class="col-md-8">
                    <form action="{{ url('post-cap-nhat-user') }}" method="post" enctype="multipart/form-data">@csrf
                        <input type="hidden" value="{{ Auth::guard('web')->user()->id }}" name="iduser">
     
                        Ảnh đại diện
                            <input type="file" name="hinhanh" id="upload" onchange="preview_image(event)" accept="image/*" class="form-control" >     
                        Họ tên
                        <input type="text" value="{{ Auth::guard('web')->user()->name }}" name="hoten" required class="form-control" />
                        Giới tính
                        <select class="form-select" name="gioitinh">
                            <option value="Nam" @if(Auth::guard('web')->user()->gender=='Nam') selected @endif>Nam</option>
                            <option value="Nữ" @if(Auth::guard('web')->user()->gender=='Nữ') selected @endif>Nữ</option>
                            
                        </select>
                        Ngày sinh
                        <input type="date" value="{{ Auth::guard('web')->user()->birthday }}" min="1950-01-01" max="2016-01-01" name="ngaysinh" required class="form-control"">
    
                        <br>
                        <input class="btn btn-success" type="submit" value="Lưu">
                        <a href="{{ url('profile-user') }}" class="btn btn-outline-secondary">Hủy</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection