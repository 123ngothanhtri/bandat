@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Danh sách người dùng</b>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <tr class="fw-bold">
                    <td>id user</td>
                    <td>Hình ảnh</td>
                    <td>Tên user</td>
                    <td>Email</td>
                    <td>Giới tính</td>
                    <td>Ngày sinh</td>
                    <td>Thao tác</td>
                </tr>
                @foreach ($user as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>
                            @if ($i->image)
                                <img src="{{ asset($i->image) }}" class="alert-secondary rounded-circle" style="width: 50px;height:50px ;object-fit:cover" alt="">
                            @else
                                <img src="{{ asset('avt.jpg') }}" class="rounded-circle" style="width: 50px;height:50px ;object-fit:cover" alt="">
                            @endif
                        </td>
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->email }}</td>
                        <td>
                            @if ($i->gender)
                                {{ $i->gender }}
                            @else
                                Chưa cập nhật
                            @endif

                        </td>
                        <td>
                            @if ($i->birthday)
                                {{ $i->birthday }}
                            @else
                                Chưa cập nhật
                            @endif

                        </td>
                        <td>
                            <a href="{{ url('delete-user/'.$i->id) }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
