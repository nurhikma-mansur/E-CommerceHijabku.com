<?php

require '../function/function.php';

    $tanggal_pembelian = $_GET['tgl'];

    $data = query(" SELECT * FROM pembelian 
        JOIN user 
        ON user.id = pembelian.user_id
        JOIN hijab
        ON hijab.id = pembelian.produk_id
        WHERE tanggal_pembelian = '$tanggal_pembelian'
    ");

    $total = 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/detail-pembelian.css">
    <title>Dashboard</title>
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

                <a href="./penjualan.php" class="kembali">kembali</a>

                <div class="top">
                    <b>nama pembeli: <?= $data[0]['nama'] ?></b>
                    <a href="" class="btn btn-danger text-white">
                        <i class="bi bi-trash"></i>
                    </a>
                </div>

                <table cellspacing="0">
                    <thead>
                        <th>#</th>
                        <th>produk</th>
                        <th>jumlah</th>
                        <th>harga</th>
                    </thead>

                    
                    <tbody>
                        <?php foreach ($data as $i => $pembelian) : ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $pembelian['produk'] ?></td>
                            <td><?= $pembelian['kuantitas'] ?></td>
                            <td>Rp. <?= number_format($pembelian['harga']) ?></td>
                        </tr>
                        <?php $total += ($pembelian['harga'] * $pembelian['kuantitas']) ?>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="3" >total harga</td>
                            <td><b> Rp. <?= number_format($total) ?> </b> </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</body>
</html>