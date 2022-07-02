<?php 

    session_start();

    if(empty($_SESSION['user']))
        header('Location: ./hijab.php?category=all-c&harga=all-p');
    
    $user = $_SESSION['user'];

    $profile_picture =  ( !is_null($user['gambar'])) ? './assets/users/'. $user['gambar'] : 'https://via.placeholder.com/140?text=tidak+ada+foto';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/user.css">
</head>
<body>
    <!-- User -->
    <div id="user">
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
        <form action="./function/update_profile.php" method="post" enctype="multipart/form-data  ">

            <input type="hidden" name="id" value="<?= $user['id'] ?>">

            <div class="user-item">
                <div class="item-img">
                    <img src="<?= $profile_picture ?>" alt="<?= $profile_picture ?>"> <br>
                    <input type="file" name="gambar">
                </div>
    
                <hr>
                
                <div class="item-input">
                    <div class="input-satu">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="<?= $user['nama'] ?>">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="<?= $user['username'] ?>">
                        <label for="password_transaksi" >Password Transaksi</label>
                        <input type="text" id="password_transaksi" name="password_transaksi" value="<?= $user['password_transaksi'] ?>">
                    </div>
                    <div class="input-dua">
                        <label>Email</label>
                        <input type="text" name="email" value="<?= $user['email'] ?>">
                        <label>Password</label>
                        <input type="text" name="password" value="<?= $user['password'] ?>"> <br>
                        <button>ubah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>