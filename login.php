<?php 

    require './function/function.php';

    session_start();

    if(!empty($_SESSION['user'])){
        header('Location: ./hijab.php?category=all-c&harga=all-p');
        die;
    }

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $pass = $_POST['password'];

        $data = query("SELECT * FROM `user` WHERE username = '$username'");

        if(count($data) == 1 ){

            if($data[0]['password'] == $pass){

                $_SESSION['user']= [
                    'id' => $data[0]['id'],
                    'nama' => $data[0]['nama'],
                    'gambar' => $data[0]['gambar'],
                    'email' => $data[0]['email'],
                    'username' => $data[0]['username'],
                    'password' => $data[0]['password'],
                    'password_transaksi' => $data[0]['password_transaksi'],
                ];

                $_SESSION['first_login'] = true;
                header('Location: ./kategori.php?category=all-c&harga=all-p');

            } else {
                echo "
                    <script>
                        alert('login gagal')
                        window.location.href = './login.php'
                    </script>
                ";
            }

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <!-- Login -->
    <div id="login">
        <nav>
            <h1 class="hijab"><a href="#home">Hijabku.com</a></h1>
            <div class="nav-1">
                <a href="./index.php">Home</a>
                <a href="../kategori.php?category=all-c&harga=all-p">Kategori</a>
                <a href="./daftar.php">Registrasi</a>
            </div>
        </nav>
        <div class="form-login">
            <form action="" method="POST">
                <h2>Masuk</h2>

                <hr>
                
                <p class="item">Silahkan Anda masuk agar dapat membeli produk kami</p>
                <div class="user">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <div class="button">
                        <button type="submit" name="login">masuk</button>
                        <p>belum punya akun? ayo <a href="./daftar.php">Daftar</a></p>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</body>
</html>