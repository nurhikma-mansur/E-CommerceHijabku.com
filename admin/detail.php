<?php

    require '../function/function.php';

    session_start();

    if(isset($_GET['deleteId'])){

        $id = $_GET['deleteId'];
        $result = mysqli_query($db, "SELECT gambar from hijab WHERE id = $id");
        $gambar = mysqli_fetch_assoc($result);
        $gambar = $gambar['gambar'];

        if(unlink("../assets/product/$gambar")){
            mysqli_query($db, "DELETE FROM hijab WHERE id = $id");
        }
        
        header('Location: ./index.php');

    }

    $id = $_GET['id'];

    $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE hijab.id = '$id'");
    $data = $data[0];

    $_SESSION['gambar_tmp'] = $data['gambar'];

    $product_picture =  (!is_null($data['gambar'])) ? '../assets/product/'. $data['gambar'] : 'https://via.placeholder.com/140?text=tidak+ada+foto';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/detail.css">
    <title>Dashboard</title>
    <link rel="icon" href="../img/bg.jpg">
</head>
<body>
    
    <nav>
        dashboard
    </nav>

    <div class="container">

        <div class="left-side">
            <ul>
                <li><a href="./index.php"><i class="bi bi-filter-left"></i>dashboard</a></li>
                <li><a href="./penjualan.php"><i class="bi bi-clipboard"></i>penjualan</a></li>
                <li><a href="./users.php"><i class="bi bi-person"></i>users</a></li>
                <li><a href="./index.php?logout=1"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
            </ul>
        </div>

        <div class="right-side">

        <div class="wrapper">
            <form action="../function/update_item.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <img src="../assets/product/<?= $data['gambar'] ?>" alt="" class="image">
                <input type="file" name="gambar" id="" class="file-input">
    
                <p class="text">
                    Info Produk
                </p>

                <div class="input-group">
                    <label for="produk">Nama Produk</label>
                    <input type="text" name="produk" id="produk" value="<?= $data['produk'] ?>">
                </div>

                <div class="input-column">
                    <div class="input-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" value="<?= $data['harga'] ?>">
                    </div>
                    <div class="input-group">
                        <label for="kategori">Kategori</label>
                        <input type="number" max="3" min="1" name="id_kategori" id="kategori" value="<?= $data['id_kategori'] ?>">
                    </div>
                </div>

                <div class="input-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="desk_produk" id="" cols="30" rows="10">
                        <?= $data['desk_produk'] ?>
                    </textarea>
                </div>

                <div class="input-group">
                    <a href="./detail.php?deleteId=<?= $data['id'] ?>" class="hapus">
                        hapus produk
                    </a>
                    <button type="submit" class="ubah">
                        ubah produk
                    </button>
                </div>
    
            </form>
    
    
            </div>
        </div>

    </div>

</body>
</html>