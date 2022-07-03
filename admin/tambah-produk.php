<?php

    session_start();

    require '../function/function.php';

    $_SESSION['isAdmin'] = true;

    if(isset($_GET['logout'])){
        $_SESSION['isAdmin'] = false;
    }

    if(!$_SESSION['isAdmin']){
        header('Location: ./auth/index.php');
    }

    $user_data = query("SELECT * FROM user");

    if(isset($_POST['submit'])){

        $category = $_POST['category'];

        if($category == '0')
            $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id");
        else
            $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE id_kategori = $category");

    } else {
        $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/tambah-produk.css">
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

                <h3>Tambah Produk</h3>

                <div class="form">
                    <form action="../function/add_new_item.php" method="POST" enctype="multipart/form-data">
                        <div class="input-column text">
                            <div class="input-group">
                                <label for="produk">Nama Produk</label>
                                <input type="text" name="produk" id="produk" >
                            </div>
                            <div class="input-group">
                                <label for="harga">Harga Produk</label>
                                <input type="number" name="harga" id="harga" >
                            </div>
                        </div>
                        <div class="input-column radio">
                            <div class="radios">
                                <div class="radio">
                                    <input type="radio" value="1" name="id_kategori" id="pasminah">
                                    <label for="pasminah">pasminah</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" value="2" name="id_kategori" id="rabbani">
                                    <label for="rabbani">rabbani</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" value="3" name="id_kategori" id="bergo">
                                    <label for="bergo">bergo</label>
                                </div>
                            </div>
                            <input type="file" name="gambar" id="">
                        </div>
                        <textarea name="desk_produk" id="" cols="30" rows="10">

                        </textarea>

                        <button type="submit">
                            tambah
                        </button>
                    </form>
                </div>


            </div>

        </div>

    </div>


</body>
</html>