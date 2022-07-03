<?php

    session_start();

    require '../function/function.php';

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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="../img/bg.jpg">
    <title>Dashboard</title>
</head>
<body>
    
    <nav>
        dashboard
    </nav>

    <div class="container">

        <div class="left-side">
            <ul>
                <li><a href=""><i class="bi bi-filter-left"></i>dashboard</a></li>
                <li><a href="./penjualan.php"><i class="bi bi-clipboard"></i>penjualan</a></li>
                <li><a href="./users.php"><i class="bi bi-person"></i>users</a></li>
                <li><a href="./index.php?logout=1"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
            </ul>
        </div>

        <div class="right-side">

            <div class="wrapper">

                <div class="top-section">
                    <div class="jumlah-produk">
                        <h4>Jumlah produk</h4>
                        <p class="jumlah">7</p>
                        <p class="small">jumlah item</p>
                    </div>
        
                    <div class="jumlah-akun">
                        <h4>Jumlah akun terdaftar</h4>
                        <p class="jumlah">7</p>
                        <p class="small">jumlah pengguna</p>
                    </div>
                </div>
    
                <div class="daftar-produk">
    
                    <div class="title">
    
                        <p class="daftar">
                            Daftar Produk
                        </p>
    
                        <div class="form-group">
                            <form action="" method="post">
                                <select name="category" id="">
                                    <option value="0" class="all">semua</option>
                                    <option value="1" class="pasminah">pasmina</option>
                                    <option value="2" class="rabbani">rabbani</option>
                                    <option value="3" class="bego">bergo</option>
                                </select>
                                <button name="submit" type="submit" >submit</button>
                                <a href="./tambah-produk.php" class="tambah">tambah product</a>
                            </form>
                        </div>
                    </div>

                    <table cellspacing="0" >
                        <tr class="header" >
                            <td>produk</td>
                            <td>harga</td>
                            <td>aksi</td>
                        </tr>

                        <?php foreach($data as $item): ?>

                        <tr class="item">
                            <td class="produk-title" >
                                <img class="img" src="../assets/product/<?= $item['gambar'] ?>" alt="">
                                <div class="title-group">
                                    <p class="produk"><?= $item['produk'] ?></p>
                                    <p class="kategori">kategori : <?= $item['kategori'] ?></p>
                                </div>
                            </td>
                            <td>Rp <?= number_format($item['harga']) ?></td>
                            <td>
                                <a href="./detail.php?id=<?= $item['id'] ?>" class="detail">
                                    detail
                                </a>
                            </td>
                        </tr>

                        <?php endforeach ?>
                    </table>
                </div>

            </div>


        </div>

    </div>

    <script>


        var category_id = '<?= $category ?>'
        var category
        
        switch (category_id) {
            case '0':
                category = "all"
                break;
            case '1':
                category = "pasminah"
                break;
            case '2':
                category = "rabbani"
                break;
            case '3':
                category = "bego"
                break;
        }

        console.log(category)

        var opt = document.querySelector(`option.${category}`)
        console.log(opt)
        opt.setAttribute('selected', 'selected')

    </script>

</body>
</html>