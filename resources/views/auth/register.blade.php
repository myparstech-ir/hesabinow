<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت‌نام | حسابینو</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.ico">
    <style>
        body {
            background: linear-gradient(120deg, #e0e7ff 0%, #fff 100%);
        }
        .register-container {
            display: flex;
            min-height: 100vh;
            align-items: stretch;
            justify-content: center;
        }
        .register-image {
            flex: 1.2;
            background: #f1f5f9 url('/images/register-illustration.png') no-repeat center/cover;
            border-left: 8px solid #2563eb22;
            min-width: 340px;
        }
        .register-form {
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
        .register-form-inner {
            width: 100%;
            max-width: 410px;
        }
        .register-title {
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
        .register-btn {
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
        .register-btn:hover {
            background: #1d4fd7;
        }
        .login-link {
            display: block;
            text-align: center;
            margin-top: 1.3rem;
            color: #2563eb;
            font-weight: bold;
            font-size: 1rem;
            text-decoration: none;
        }
        @media (max-width: 900px) {
            .register-container { flex-direction: column-reverse; min-height: auto; }
            .register-image { min-height: 240px; border-left: none; border-top: 8px solid #2563eb22; }
            .register-form { border-radius: 2em 2em 0 0; margin: 0; padding: 2rem 1rem; }
        }
    </style>
</head>
<body>
<div class="register-container">
    <!-- فرم ثبت نام -->
    <div class="register-form">
        <form class="register-form-inner" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-title">ثبت‌نام در حسابینو</div>

            <label for="first_name">نام</label>
            <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" required autofocus autocomplete="given-name" placeholder="نام خود را وارد کنید">
            @error('first_name')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="last_name">نام خانوادگی</label>
            <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required autocomplete="family-name" placeholder="نام خانوادگی خود را وارد کنید">
            @error('last_name')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="username">نام کاربری</label>
            <input id="username" name="username" type="text" value="{{ old('username') }}" required autocomplete="username" placeholder="یک نام کاربری انتخاب کنید">
            @error('username')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="email">ایمیل</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ایمیل خود را وارد کنید">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <label for="password">رمز عبور</label>
                <input id="password" name="password" type="password" required autocomplete="new-password" placeholder="رمز عبور حداقل ۸ کاراکتر">
                <span class="toggle-password" onclick="togglePassword('password')">&#128065;</span>
            </div>
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <label for="password_confirmation">تأیید رمز عبور</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="رمز عبور را مجدد وارد کنید">
                <span class="toggle-password" onclick="togglePassword('password_confirmation')">&#128065;</span>
            </div>

            <button class="register-btn" type="submit">ثبت‌نام</button>
            <a href="{{ route('login') }}" class="login-link">قبلاً حساب کاربری دارید؟ ورود</a>
        </form>
    </div>
    <!-- تصویر سمت چپ -->
    <div class="register-image"></div>
</div>
<script>
    function togglePassword(fieldId) {
        const input = document.getElementById(fieldId);
        input.type = input.type === 'password' ? 'text' : 'password';
    }
</script>
</body>
</html>
