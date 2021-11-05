<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    @if (session('msg'))
        <div id="alerthome" class="alert alert-success animate__animated animate__fadeInDown " style="position:fixed;top:0;left:50%;z-index:9999">
            <i class="fas fa-check-circle"></i> {{ session('msg') }}
        </div>
    @elseif(session('er'))
        <div id="alerthome" class="alert alert-danger animate__animated animate__fadeInDown " style="position:fixed;top:0;left:50%;z-index:9999">
            {{ session('er') }}
        </div>
    @else
        <span id="alerthome"></span>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                </ul>
                <a href="{{ url('logout-admin') }}" class="btn btn-dark">Đăng xuất</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <a href="{{ url('quan-ly-bai-viet') }}" class="my-1 btn btn-secondary fw-bold">Quản lý bài viết</a>
                    <a href="{{ url('quan-ly-user') }}" class="my-1 btn btn-secondary fw-bold">Quản lý người dùng</a>
                </ul>
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        setTimeout(() => {
            var x = document.getElementById('alerthome').style.display = 'none';
        }, 5000);
    </script>
</body>

</html>
