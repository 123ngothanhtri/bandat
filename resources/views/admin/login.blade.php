<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    <video style="z-index:-1;position:fixed;top:0;left:0;width:100%;height:100vh;object-fit:cover" loop autoplay muted>
        <source src="{{ asset('aov.mp4') }}" type="video/mp4">
    </video>
    <div style="height:130vh" class="d-flex justify-content-center align-items-center">   
            <div class="bg-light rounded p-4 mx-auto" style="width:400px">
                
                <p class="text-center">
                    <a href="{{ url('/') }}" class="text-dark text-decoration-none fw-bold my-2">ADMIN</a>
                </p>
                @if (session('er'))
                    <div class="alert alert-danger"> {{ session('er') }}</div>
                @endif
                @if (session('msg'))
                    <div class="alert alert-info">{{ session('msg') }}</div>
                @endif
                <form action="{{ url('post-login-admin') }}" method="POST">@csrf
                    <input class="form-control mb-3" type="email" placeholder="Tài khoản" name="em" required>
                    <input class="form-control mb-3" type="password" placeholder="Mật khẩu" name="pw" required>
                    <button type="submit" class="btn btn-dark w-100">Đăng nhập</button>
                </form>
        </div>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>