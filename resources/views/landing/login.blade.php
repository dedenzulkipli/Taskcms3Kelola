<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: url('{{ asset('landing/assets/img/japanese-culture-house-entrance-with-fence.jpg') }}') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        /* Overlay agar teks lebih kontras */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        .container {
            display: flex;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            width: 800px;
            height: 500px;
            z-index: 1;
            position: relative;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .illustration {
            background: rgba(74, 144, 226, 0.9);
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .illustration img {
            width: 300px;
        }

        .login-form {
            width: 50%;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-form h2 {
            color: #000000;
            margin-bottom: 20px;
            font-size: 32px;
        }

        .login-form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
        }

        .login-form button, .login-form input[type="submit"] {
            background-color: #4A90E2;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .login-form button:hover, .login-form input[type="submit"]:hover {
            background-color: #357ABD;
        }

        .login-form a {
            color: #4A90E2;
            font-size: 16px;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="illustration">
            <img src="{{ asset('landing/assets/login2.png') }}" alt="Illustration">
        </div>
        <div class="login-form">
            <h2>Welcome</h2>
            <form method="POST" action="{{ route('auth') }}">
                @csrf
                <input name="email" type="text" placeholder="Email " required>
                <input name='password' type="password" placeholder="Password" required>
                <input type="submit" value="login">
                <a href="#">Forgot Password?</a>
                <a href="#">Create Account</a>
            </form>
        </div>
    </div>
</body>
</html>
