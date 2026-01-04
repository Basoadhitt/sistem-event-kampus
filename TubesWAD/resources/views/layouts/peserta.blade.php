<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f8fafc;
}

.header {
    background: #2563eb;
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
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,.1);
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.btn {
    display: inline-block;
    padding: 8px 12px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    color: white;
}

.btn-primary { background: #2563eb; }
.btn-danger { background: #dc2626; }

.badge {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    background: #16a34a;
    color: white;
}

input {
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
    <strong>Event Kampus</strong>

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
