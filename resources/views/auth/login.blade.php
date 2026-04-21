<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form" action='{{ route("login") }}' method="POST">
            @csrf
            <h2>Selamat Datang</h2>
            <p>Silakan masuk ke akun Anda</p>
            
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="login-btn">Masuk</button>
            
            <div class="footer-links">
                <a href="#">Lupa password?</a>
                <span>Belum punya akun? <a href="#">Daftar</a></span>
            </div>
        </form>
    </div>
</body>
</html>

program sendiri