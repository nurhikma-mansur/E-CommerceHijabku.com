<?php

    require '../function/function.php';

    $data = query("SELECT * FROM user");

    if(isset($_GET['deleteId'])){

        $id = $_GET['deleteId'];
        mysqli_query($db, "DELETE FROM user WHERE id = $id");
        header('Location: ./users.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/users.css">
    <title>Dashboard</title>
</head>
<body>
    
    <nav>
        dashboard
    </nav>

    <div class="container">

        <div class="left-side">
            <ul>
                <li><a href="./penjualan.php"><i class="bi bi-filter-left"></i>dashboard</a></li>
                <li><a href="./penjualan.php"><i class="bi bi-clipboard"></i>penjualan</a></li>
                <li><a href=""><i class="bi bi-person"></i>users</a></li>
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
                        <th>email</th>
                        <th>aksi</th>
                    </thead>
                    <tbody>

                        <?php foreach($data as $i => $item): ?>

                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['username'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td>
                                <a href="./users.php?deleteId=<?= $item['id'] ?>" class="hapus aksi">
                                    hapus
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