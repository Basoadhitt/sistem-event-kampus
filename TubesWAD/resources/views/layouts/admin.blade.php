<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f1f5f9;
}

.header {
    background: #1e40af;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.container {
    padding: 30px;
}

.card {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,.1);
}

a.btn {
    padding: 8px 12px;
    border-radius: 6px;
    color: white;
    text-decoration: none;
    font-size: 14px;
}

.btn-add { background: #16a34a; }
.btn-edit { background: #2563eb; }
.btn-delete { background: #dc2626; border: none; cursor: pointer; }

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #e5e7eb;
}

th {
    background: #e5e7eb;
    text-align: left;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border-radius: 6px;
    border: 1px solid #cbd5f5;
}
</style>
</head>

<body>

<div class="header">
    <strong>Admin Panel</strong>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button style="background:#dc2626;color:white;border:none;padding:8px 12px;border-radius:6px">
            Logout
        </button>
    </form>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
