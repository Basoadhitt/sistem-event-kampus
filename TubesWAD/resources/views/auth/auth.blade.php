<x-guest-layout>

    <div style="max-width:400px;margin:auto">

        <div style="text-align:center;margin-bottom:20px">
            <button onclick="showLogin()">Login</button>
            <button onclick="showRegister()">Register</button>
        </div>

        <!-- LOGIN FORM -->
        <div id="loginForm">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="email" name="email" placeholder="Email" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>

                <button type="submit">Login</button>
            </form>
        </div>

        <!-- REGISTER FORM -->
        <div id="registerForm" style="display:none">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input type="text" name="name" placeholder="Nama" required><br><br>
                <input type="email" name="email" placeholder="Email" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br><br>

                <button type="submit">Register</button>
            </form>
        </div>

    </div>

    <script>
        function showLogin() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
        }

        function showRegister() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
        }
    </script>

</x-guest-layout>
