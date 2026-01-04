<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Register</title>

<style>
body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(135deg, #16a34a, #15803d);
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

.card {
    width: 380px;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,.2);
}

.card h2 {
    text-align: center;
    margin-bottom: 5px;
}

.card p {
    text-align: center;
    color: #64748b;
    font-size: 14px;
    margin-bottom: 25px;
}

input {
    width: 100%;
    padding: 12px;
    margin-bottom: 14px;
    border-radius: 6px;
    border: 1px solid #cbd5f5;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 12px;
    background: #16a34a;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
}

button:hover {
    background: #15803d;
}

.error {
    background: #fee2e2;
    color: #991b1b;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 14px;
}

.footer {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
}
.footer a {
    color: #16a34a;
    text-decoration: none;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="card">
    <h2>Registrasi Akun</h2>
    <p>Buat akun untuk mendaftar event</p>

    {{-- ERROR MESSAGE --}}
    @if ($errors->any())
        <div class="error">
            <ul style="margin:0;padding-left:18px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

        <button type="submit">Daftar</button>
    </form>

    <div class="footer">
        Sudah punya akun?
        <a href="{{ route('login') }}">Login</a>
    </div>
</div>

</body>
</html>
