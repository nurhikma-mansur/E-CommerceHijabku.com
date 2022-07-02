<?php

    session_start();

    $is_login;

    if(empty($_SESSION['user'])){
        $is_login = false;
    } else {
        $profile_picture =  ( !is_null($_SESSION['user']['gambar'])) ? './assets/users/'. $_SESSION['user']['gambar'] : 'https://via.placeholder.com/140?text=tidak+ada+foto';
        $is_login = true;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hijabku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style-hero.css">
    <link rel="stylesheet" href="style/style-container.css">
    <link rel="stylesheet" href="style/style-footer.css">
</head>
<body>

    <!--------------HERO--------------->

    <div id="home">
        <nav>
            <h1><a href="./index.php" class="title">Hijabku.com</a></h1>
            <div class="nav-1">
                <a href="./index.php">Home</a>
                <a href="./kategori.php?category=all-c&harga=all-p">Ketegori</a>
                <a href="#registrasi">Registrasi</a>
            </div>
            <div class="nav-2">
                <div class="avatar-container">
                    <img src="<?= $profile_picture ?>" alt="" class="avatar">
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

    <div class="hero">

    </div>

    <!-----------------CONTAINER------------------>
    <div id="container">
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button><p>detail</p></button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
        <div class="card">
            <img src="./img/bg.jpg" alt="">
            <div class="card-content">
                <p>Hijab Cantik By Hikma</p>
                <p>Bella Square</p>
                <h5>Rp 50.000</h5>
                <button>detail</button><i class="bi bi-cart"></i>
            </div>
        </div>
    </div>

    <!----------------FOOTER---------------------->
    <div id="footer">
        <h1>Hijabku.com</h1>
        <div class="contact">
            <p class="contact-us">contact us</p>
            <p><i class="bi bi-instagram" style="margin-right: 10px;"></i>hijabku.com</p>
            <p><i class="bi bi-envelope" style="margin-right: 10px;"></i>hijabku@gmail.com</p>
            <p> <i class="bi bi-whatsapp" style="margin-right: 10px;"></i>082347951057</p>
        </div>
        <div class="owner">
            <p class="owner-hijab">owner of hijabku.com</p>
            <p>Nurhikma</p>
        </div>
    </div>

    <script>

        var avatar = document.querySelector('img.avatar')
        var dropItem = document.querySelector('div.drop-item')

        avatar.addEventListener('click', () => dropItem.classList.toggle('active'))

    </script>
</body>
</html>