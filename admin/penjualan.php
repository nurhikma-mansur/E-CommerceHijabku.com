<?php

    require '../function/function.php';

    if(isset($_GET['deleteId'])){
        $tgl = $_GET['deleteId'];
        mysqli_query($db, "DELETE FROM pembelian WHERE tanggal_pembelian = '$tgl'");
        header('location: ./penjualan.php');

    }

    $data = query("SELECT * FROM pembelian JOIN user ON user.id = pembelian.user_id");

    $tanggal_pembelian = query("SELECT DISTINCT tanggal_pembelian FROM pembelian ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/penjualan.css">
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
                <li><a href=""><i class="bi bi-clipboard"></i>penjualan</a></li>
                <li><a href="./users.php"><i class="bi bi-person"></i>users</a></li>
                <li><a href="./index.php?logout=1"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
            </ul>
        </div>

        <div class="right-side">

            <div class="wrapper">

                <table cellspacing="0">
                    <thead>
                        <th>#</th>
                        <th>nama</th>
                        <th>username</th>
                        <th>waktu pembelian</th>
                        <th>aksi</th>
                    </thead>
                    <tbody>

                        <?php foreach($data as $i => $item): ?>

                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['username'] ?></td>
                            <td><?= $item['tanggal_pembelian'] ?></td>
                            <td>
                                <a href="./penjualan.php?deleteId=<?= $item['tanggal_pembelian'] ?>" class="hapus aksi">
                                    hapus
                                </a>
                                <a href="./detail-pembelian.php?tgl=<?= $item['tanggal_pembelian'] ?>" class="detail aksi">
                                    detail
                                </a>
                            </td>
                        </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</body>
</html>