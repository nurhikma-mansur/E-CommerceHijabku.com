<?php 

    require './function/function.php';

    session_start();
    
    $is_login;
    
    if(empty($_SESSION['user'])){
        $is_login = false;
        header('Location: ./index.php');
    } else {
        $is_login = true;
    }

    $userId = $_SESSION['user']['id'];
    $total = 0;

    $data = query("SELECT * FROM keranjang JOIN hijab ON keranjang.id_produk = hijab.id WHERE id_user = '$userId'");

    $_SESSION['keranjang'] = $data;

    $profile_picture =  ( !is_null($_SESSION['user']['gambar'])) ? './assets/users/'. $_SESSION['user']['gambar'] : 'https://via.placeholder.com/140?text=tidak+ada+foto';

    if(isset($_GET['id']) && isset($_GET['produkId'])){

        if(deleteItem($_GET['produkId'], $_GET['id']) > 0){
            header('Location: ./keranjang.php');
        }

    }

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trolly</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/trolly.css">
    <link rel="icon" href="./img/bg.jpg" >
</head>
<body>
    <!-- Trolly -->
    <div id="trolly">

    <div id="home">
        <nav>
            <h1><a href="./index.php" class="title">Hijabku.com</a></h1>
            <div class="nav-1">
                <a href="./index.php">Home</a>
                <a href="./kategori.php?category=all-c&harga=all-p">Ketegori</a>
                <a href="./daftar.php">Registrasi</a>
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

        <div class="trolly-item">
            <div class="item-1">
                <form action="./function/transaction.php" method="post">
                    <div class="wrapper">
                        <p class="cart"><i class="bi bi-cart2"></i>Keranjang</p>
                        <p class="detail">Detail</p>
                        <div class="nama">
                            <div class="input-group">
                                <label for="nama-penerima">nama</label>
                                <input type="text"  name="nama">
                            </div>
                            <div class="input-group">
                                <label for="no-hp">no hp</label>
                                <input type="text"  name="nohp">
                            </div>
                        </div>
                        <div class="input-group-alamat">
                            <label for="alamat">alamat</label>
                            <input type="text"  name="alamat">
                        </div>
                        <div class="input-group-transaksi">
                            <label for="password">password</label>
                            <input type="text"  name="password_transaksi">
                            <button type="submit">Checkout</button> 
                        </div>
                    </div>
                </form>
            </div>
            <div class="item-2">

                <div class="wrapper">
                    <p class="heading-title">Orderan Anda</p>
                    <hr>

                    <?php foreach($data as $item): ?>
                        
                        <div class="item">
                            <img src="./img/hero.jpg" alt="" class="item-img">
                            <div class="item-text">
                                <p class="item-name"><?= $item['produk'] ?></p>
                                <p class="item-quantity">jumlah :<?= $item['kuantitas'] ?> item</p>
                                <p class="item-price">Rp <?= number_format($item    ['harga']) ?></p>
                            </div>
                        </div> 
                        
                        <?php $total+= ($item['harga'] * $item['kuantitas'] ) ?>
                        
                        <hr>

                    <?php endforeach ?>


                    <div class="total">
                        <p>total</p>
                        <p>Rp <?= number_format($total) ?></p>
                    </div>
                </div>

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