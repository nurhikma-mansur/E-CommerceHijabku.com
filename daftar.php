<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/daftar.css">
</head>
<body>
    <!-- Daftar -->
    <div id="daftar">
        <nav>
            <h1 class="hijab"><a href="#home">Hijabku.com</a></h1>
            <div class="nav-1">
                <a href="#home">Home</a>
                <a href="#kategori">Ketegori</a>
                <a href="#registrasi">Registrasi</a>
            </div>
            <div class="nav-2">
                <a href="#profile"><i class="bi bi-circle"></i></a>
                <a href="#keranjang"><i class="bi bi-cart" margin="5px"></i></a>
            </div>
        </nav>
        
        <div class="form-daftar">
            <form action="./function/registrasi.php" method="POST">
                <h2>Daftar</h2>

                <hr>
                
                <div class="user">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                    <label for="password">Password</label>
                    <input type="text" name="password">
                    <label for="password-transaksi">Password Transaksi</label>
                    <input type="password" name="password_transaksi">
                    <div class="button">
                        <button type="submit">Daftar</button>
                        <p>sudah punya akun? ayo <a href="#">Masuk</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>