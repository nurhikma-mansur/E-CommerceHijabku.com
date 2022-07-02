<?php 

    require './function/function.php';

    session_start();

    $data = query("SELECT * FROM hijab WHERE id = $_GET[id]");

    $is_login;

    if(empty($_SESSION['user'])){
        $is_login = false;
    } else {
        $profile_picture =  ( !is_null($_SESSION['user']['gambar'])) ? '../assets/users/'. $_SESSION['user']['gambar'] : 'https://via.placeholder.com/140?text=tidak+ada+foto';
        $is_login = true;
    }

    if(isset($_POST['submit'])){
        if(addItem($_POST['id'], $_SESSION['user']['id'], $_POST['kuantitas'] ?? 1) > 0){
            header('Location: ./detail.php?id=' . $_GET['id']);
        }
    }

    $data = $data[0];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/detail.css">
</head>
<body>
    <!-- Detail -->
    <div id="detail">
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
                            <li style="display: <?= ($is_login) ? 'block' : 'none' ?>;" ><a href="./profile.php" class="dropdown-item">profil</a></li>
                            <li style="display: <?= ($is_login) ? 'none' : 'block' ?>;"><a href="./login.php" class="dropdown-item">login</a></li>
                            <li style="display: <?= ($is_login) ? 'block' : 'none' ?>;" ><a href="../function/logout.php" class="dropdown-item" >logout</a></li>
                        </ul>
                    </div>
                </div>
                <a href="./keranjang.php"><i class="bi bi-cart" margin="5px"></i></a>
            </div>
        </nav>
    </div>

        <div class="detail-item">
            <img src="./img/hero.jpg" alt="">
            <div class="item">
                <h1><?= $data['produk'] ?></h1>
                <h4>Rp <?= number_format($data['harga']) ?>,00</h4>
                <p><?= $data['desk_produk'] ?></p>
                <div class="detail-button">
                    <a href="./function/add_item.php?id=<?= $data['id'] ?>" class="button-2">Tambah keranjang</a>
                </div>
                <p>perhatian*</p>
            </div>
        </div>
    </div>

    <script>

        var avatar = document.querySelector('img.avatar')
        var dropItem = document.querySelector('div.drop-item')

        avatar.addEventListener('click', () => dropItem.classList.toggle('active'))

    </script>
</body>
</html>