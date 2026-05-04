<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    <style>

        .comments-title {
            font-size: 22px;
            margin: 25px 0 15px;
            font-weight: bold;
            color: #0f172a;
        }

        /* comment box */
        .comment {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.2s;
        }

        .comment:hover {
            transform: translateY(-2px);
        }

        .comment strong {
            color: #0f172a;
        }

        .comment p {
            margin: 8px 0 0;
            color: #64748b;
        }

        /* form */
        .comment-form {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-top: 20px;
        }

        .comment-form input,
        .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        .comment-form input:focus,
        .comment-form textarea:focus {
            border-color: #38bdf8;
        }

        .comment-form button {
            background: #0f172a;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        .comment-form button:hover {
            background: #38bdf8;
            color: #0f172a;
        }
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Arial;
            background: #f4f6fb;
            color: #111827;
        }

        /* NAVBAR */
        nav {
            background: #0f172a;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }

        nav a {
            color: #cbd5e1;
            text-decoration: none;
            margin-left: 15px;
            font-weight: 500;
        }

        nav a:hover {
            color: #38bdf8;
        }

        /* CONTAINER */
        .container {
            width: 85%;
            margin: 40px auto;
        }

        /* PAGE TITLE */
        .page-title {
            font-size: 28px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        /* GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        /* CARD */
        .card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .card-body {
            padding: 18px;
        }

        .card h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #0f172a;
        }

        .card p {
            font-size: 14px;
            color: #64748b;
            line-height: 1.5;
        }

        .card a {
            text-decoration: none;
            color: inherit;
        }

        /* SHOW PAGE */
        .show-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }

        .show-box h1 {
            margin-top: 0;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            background: #0f172a;
            color: #94a3b8;
        }
    </style>

</head>
<body>

<nav>
    <div class="logo">My Blog</div>
    <div>
        <a href="/articles">Home</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    © 2026 My Blog - All Rights Reserved
</footer>

</body>
</html>
