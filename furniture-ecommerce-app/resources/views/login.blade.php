<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    <script src="https://kit.fontawesome.com/16ffd14b17.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .border-red {
            border: 1px solid red;
        }
    </style>
</head>

<body class="login-page-body border-red">

    <section class="border-red">
        @if (session()->has('error'))
            <div class="alert alert-danger mb-3">
                {{ session()->get('error') }}
            </div>
        @endif

        <div class="wrapper border-red">
            <form action="/sesi/login" method="post">
                @csrf
                <h1 class="login-title">Login</h1>
                <div class="input-box">
                    <input type="email" placeholder="mail.com" name="email" id="email" required value="{{ Session::get('email') }}">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" id="password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="remember-forgot-password">
                    <label for=""><input type="checkbox">Remember Me</label>
                    <a href="#">Forget password</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <div class="register">
                    <p>Don't have an accout? <a href="#">Register</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</body>
</html>
