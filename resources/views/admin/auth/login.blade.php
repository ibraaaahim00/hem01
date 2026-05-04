<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #3b82f6, #6366f1);
        }

        .login-box {
            background: #fff;
            padding: 40px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #111827;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #374151;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            outline: none;
        }

        .input-group input:focus {
            border-color: #3b82f6;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            border: none;
            background: #3b82f6;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #2563eb;
        }

        .extra {
            margin-top: 15px;
            text-align: center;
            font-size: 13px;
        }

        .extra a {
            color: #3b82f6;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <form action="{{ route('admin.login.auth') }}" method="POST">        <!-- Laravel -->
        @csrf

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="extra">
        <a href="#">Forgot Password?</a>
    </div>
</div>

</body>
</html>
