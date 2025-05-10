<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Page - SMPN 12 Pekalongan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('Assets/Backend/css/bootstrap.css')}}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #002147, #002147, #002147);
            position: relative;
            overflow: hidden;
        }
        
       body::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: url('Assets/Frontend/img/about/smp12edit.png') no-repeat center center/cover;
        filter: blur(5px);
        z-index: -1;
        top: 0;
        left: 0;
    }


        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
        }
        
        .login-container h2 {
            margin-bottom: 1rem;
            color: #333;
        }
        
        .form-group {
            text-align: left;
        }
        
        .btn-primary {
            background-color: #002147;
            border: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Absensi Page</h2>
        <p>Website SMPN 12 Pekalongan</p>
        <form class="auth-login-form mt-2" action="{{route('cek.absensi')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="login-email">NISN</label>
                <input class="form-control" id="login-nisn" type="text" name="nisn" placeholder="Masukan NISN" required>
            </div>
            <div class="form-group">
                <label for="login-password">Kelas</label>
                <input class="form-control" id="login-kelas" type="password" name="password" placeholder="••••••••" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            <button class="btn btn-primary btn-block">Cek</button>
        </form>
    </div>
</body>
</html>