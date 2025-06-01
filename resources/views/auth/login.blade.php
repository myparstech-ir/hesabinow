<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود | حسابینو</title>
    <link rel="icon" href="/favicon.ico">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #e0e7ff 0%, #fff 100%);
        }
        .login-container {
            display: flex;
            min-height: 100vh;
            align-items: stretch;
            justify-content: center;
        }
        .login-image {
            flex: 1.2;
            background: #f1f5f9 url('/images/login-illustration.png') no-repeat center/cover;
            border-left: 8px solid #2563eb22;
            min-width: 340px;
        }
        .login-form {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 2rem;
            background: #fff;
            box-shadow: 0 2px 24px #2563eb22;
            border-radius: 2em;
            margin: 2.5rem 0;
        }
        .login-form-inner {
            width: 100%;
            max-width: 410px;
        }
        .login-title {
            font-size: 2rem;
            font-weight: 900;
            color: #2563eb;
            margin-bottom: 1.7rem;
            text-align: right;
        }
        label {
            font-weight: bold;
            color: #2563eb;
            margin-bottom: 0.3rem;
        }
        input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid #dbeafe;
            border-radius: 1em;
            font-size: 1.08rem;
            margin-bottom: 1.1rem;
            font-family: inherit;
            transition: border 0.2s;
            background: #f8fafc;
        }
        input:focus {
            outline: none;
            border-color: #2563eb;
            background: #fff;
        }
        .input-group {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            left: 1.1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #64748b;
            font-size: 1.2rem;
            user-select: none;
        }
        .error-message {
            color: #dc2626;
            font-size: 0.96rem;
            margin-top: -0.8rem;
            margin-bottom: 1rem;
            text-align: right;
        }
        .login-btn {
            width: 100%;
            background: #2563eb;
            color: #fff;
            padding: 0.85rem 0;
            border: none;
            border-radius: 1em;
            font-size: 1.15rem;
            font-weight: 900;
            margin-top: 0.7rem;
            transition: background 0.18s;
            box-shadow: 0 2px 10px #2563eb22;
        }
        .login-btn:hover {
            background: #1d4fd7;
        }
        .reg-link, .forgot-link {
            display: block;
            text-align: center;
            margin-top: 1.3rem;
            color: #2563eb;
            font-weight: bold;
            font-size: 1rem;
            text-decoration: none;
        }
        .forgot-link {
            margin-top: 0.2rem;
            margin-bottom: 0.7rem;
            font-size: 0.98rem;
            font-weight: 600;
            color: #3b82f6;
        }
        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.1rem;
        }
        .remember-me label {
            color: #2563eb;
            font-weight: 500;
            font-size: 1rem;
            margin-bottom: 0;
        }
        @media (max-width: 900px) {
            .login-container { flex-direction: column-reverse; min-height: auto; }
            .login-image { min-height: 240px; border-left: none; border-top: 8px solid #2563eb22; }
            .login-form { border-radius: 2em 2em 0 0; margin: 0; padding: 2rem 1rem; }
        }
    </style>
</head>
<body>
<div class="login-container">
    <!-- فرم ورود -->
    <div class="login-form">
        <form class="login-form-inner" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-title">ورود به حسابینو</div>

            <label for="login">نام کاربری یا ایمیل</label>
            <input id="login" name="login" type="text" value="{{ old('login') }}" required autofocus autocomplete="username" placeholder="نام کاربری یا ایمیل را وارد کنید">
            @error('login')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <label for="password">رمز عبور</label>
                <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="رمز عبور">
                <span class="toggle-password" onclick="togglePassword('password')">&#128065;</span>
            </div>
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} style="width: 1rem; height: 1rem;">
                <label for="remember">مرا به خاطر بسپار</label>
            </div>

            <a href="{{ route('password.request') }}" class="forgot-link">رمز عبور را فراموش کرده‌اید؟</a>
            <button class="login-btn" type="submit">ورود</button>
            <a href="{{ route('register') }}" class="reg-link">حساب کاربری ندارید؟ ثبت‌نام کنید</a>
        </form>
    </div>
    <!-- تصویر سمت چپ -->
    <div class="login-image"></div>
</div>
<script>
    function togglePassword(fieldId) {
        const input = document.getElementById(fieldId);
        input.type = input.type === 'password' ? 'text' : 'password';
    }
</script>
</body>
</html>
