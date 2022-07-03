<?php 

    session_start();

    if(empty($_SESSION['user']))
        header('Location: ./hijab.php?category=all-c&harga=all-p');
    


    if(empty($_SESSION['user'])){
        $is_login = false;
    } else {
        $profile_picture =  ( !is_null($_SESSION['user']['gambar'])) ? './assets/users/'. $_SESSION['user']['gambar'] : null;
        $is_login = true;
        $user = $_SESSION['user'];
    }



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
    <link rel="icon" href="./img/bg.jpg" >
</head>
<body>
    <!-- User -->
    <div id="user">
        <div id="home">
            <nav>
                <h1><a href="./index.php" class="title">Hijabku.com</a></h1>
                <div class="nav-1">
                    <a href="./index.php">Home</a>
                    <a href="./kategori.php?category=all-c&harga=all-p">Ketegori</a>
                    <a href="./">Registrasi</a>
                </div>
                <div class="nav-2">
                    <div class="avatar-container">
                        <img src="<?= $profile_picture ?? 'https://via.placeholder.com/140?text=tidak+ada+foto' ?>" alt="" class="avatar">
                        <div class="drop-item">
                            <ul class="dropdown-menu">
                                <li style="display: <?= ($is_login) ? 'block' : 'none' ?>;" ><a href="./user.php" class="dropdown-item">profil</a></li>
                                <li style="display: <?= ($is_login) ? 'none' : 'block' ?>;"><a href="./login.php" class="dropdown-item">login</a></li>
                                <li style="display: <?= ($is_login) ? 'block' : 'none' ?>;" ><a href="./function/logout.php" class="dropdown-item" >logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="./keranjang.php"><i class="bi bi-cart" margin="5px"></i></a>
                </div>
            </nav>
        </div>
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

    <script>

        var avatar = document.querySelector('img.avatar')
        var dropItem = document.querySelector('div.drop-item')

        avatar.addEventListener('click', () => dropItem.classList.toggle('active'))

    </script>
</body>
</html>