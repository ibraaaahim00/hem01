<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial';
        }

        body {
            display: flex;
            background: #f5f7fb;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: #111827;
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 30px;
            color: #fff;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #9ca3af;
            padding: 10px;
            display: block;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #1f2937;
            color: #fff;
        }

        /* Main */
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Topbar */
        .topbar {
            height: 60px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .topbar h3 {
            font-size: 16px;
            color: #111;
        }

        /* Content */
        .content {
            padding: 25px;
        }
        .logout-btn {
            background: #ef4444;
            color: #fff;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #dc2626;
        }
        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .card h4 {
            color: #6b7280;
            font-size: 14px;
        }

        .card p {
            font-size: 22px;
            margin-top: 10px;
            font-weight: bold;
            color: #111;
        }


        .title {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #111827;
        }

        /* Card-style table container */
        .table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        /* Header */
        .table thead {
            background: linear-gradient(135deg, #111827, #1f2937);
            color: #fff;
        }

        .table th {
            padding: 16px;
            font-size: 14px;
            text-align: left;
        }

        /* Body */
        .table td {
            padding: 16px;
            font-size: 14px;
            color: #374151;
            border-bottom: 1px solid #f1f1f1;
        }

        /* Hover row */
        .table tbody tr {
            transition: 0.25s;
        }

        .table tbody tr:hover {
            background: #f9fafb;
            transform: scale(1.01);
        }

        /* Buttons */
        .edit {
            background: #2563eb;
            color: white;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
            margin-right: 5px;
        }

        .delete {
            background: #ef4444;
            color: white;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
        }

        .edit:hover {
            background: #1d4ed8;
        }

        .delete:hover {
            background: #dc2626;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 16px;
            background: #10b981;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #059669;
        }

        .form-container {
            width: 450px;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-container input,
        .form-container textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
        }

        .form-container textarea {
            height: 120px;
            resize: none;
        }

        .form-container button {
            background: #10b981;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .form-container button:hover {
            background: #059669;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #6b7280;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 26px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>⚡ Admin</h2>

    <ul>
        <li><a href="{{route('admin.home')}}">🏠 Dashboard</a></li>
        <li><a href="{{route('admin.articles')}}">📝 Articles</a></li>
        <li><a href="{{route('admin.users')}}">👤 Users</a></li>
        <li><a href="#">⚙️ Settings</a></li>
    </ul>
</div>

<!-- Main -->
<div class="main">

    <div class="topbar">
        <h3>Admin Panel</h3>

        <div style="display:flex; align-items:center; gap:15px;">

            <span>Welcome 👋</span>

            <!-- 🔴 Logout -->
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">
                    Logout
                </button>
            </form>

        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>
