<?php 

    require './function/function.php';

    session_start();

    $is_login;

    if(empty($_SESSION['user'])){
        $is_login = false;
    } else {
        $is_login = true;
        $profile_picture =  ( !is_null($_SESSION['user']['gambar'])) ? '../assets/users/'. $_SESSION['user']['gambar'] : 'https://via.placeholder.com/140?text=tidak+ada+foto';
    }


    $categori = $_GET['category'];
    $harga = $_GET['harga'];

    if($_GET['category'] == 'pasminah'){
        $categori = 1;
    } 

    if($_GET['category'] == 'rabbani'){
        $categori = 2;
    } 

    if($_GET['category'] == 'bego'){
        $categori = 3;
    } 

    if($_GET['harga'] == 'under-50'){
        $harga = 50000;
    } 

    if($_GET['harga'] == 'under-100'){
        $harga = 100000;
    } 

    if( ($categori == 'all-c') && ($harga == 'all-p') ){
        $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id");
    } else if( ($categori == 'all-c') && ($harga != 'all-p') ) {

        if($harga == 'above-100')
            $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE harga >= 100000 ");
        else
            $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE harga <= $harga ");

    } else if( ($categori != 'all-c') && ($harga == 'all-p') ) {
        $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE id_kategori = $categori ");
    } else {

        if($harga == 'above-100')
            $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE id_kategori = $categori AND harga >= 100000");
        else
            $data = query("SELECT * FROM kategori JOIN hijab ON hijab.id_kategori = kategori.id WHERE id_kategori = $categori AND harga <= $harga");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/kategori.css">
    <title>Hijab</title>
</head>
<body>

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

    <div class="container">

        <div class="left-side">

            <h3><i class="bi bi-filter-left"></i> category</h3>

            <form action="">
                <div class="input-group">
                    <input class="radio" id="all-c" name="category" type="radio" value="all-c" >
                    <label class="radio" for="all-c">semua</label>
                </div>
                <div class="input-group">
                    <input class="radio" id="pasminah" name="category" type="radio" value="pasminah"  >
                    <label class="radio" for="pasminah">pasminah</label>
                </div>
                <div class="input-group">
                    <input class="radio" id="rabbani" name="category" type="radio" value="rabbani" >
                    <label class="radio" for="rabbani">rabbani</label>
                </div>
                <div class="input-group">
                    <input class="radio" id="bego" name="category" type="radio" value="bego" >
                    <label class="radio" for="bego">bego'</label>
                </div>
                
                <hr>

                <div class="input-group">
                    <input class="form-check-input me-2 radio" id="all-p" name="harga" type="radio" value="all-p" >
                    <label class="radio" for="all-p">semua harga</label>
                </div>
                <div class="input-group">
                    <input class="form-check-input me-2 radio" id="under-50" name="harga" type="radio" value="under-50" >
                    <label class="radio" for="under-50">0 < 50,000</label>
                </div>
                <div class="input-group">
                    <input class="form-check-input me-2 radio" id="under-100" name="harga" type="radio" value="under-100" >
                    <label class="radio" for="under-100">< 100,000</label>
                </div>
                <div class="input-group">
                    <input class="form-check-input me-2 radio" id="above-100" name="harga" type="radio" value="above-100" >
                    <label class="radio" for="above-100">>100,000</label>
                </div>

                <button type="submit">terapkan filter</button>
            </form>

        </div>

        <div class="right-side">

            <?php foreach($data as $item): ?>

            <div class="card">

                <div class="wrapper">
                    <img src="./img/bg.jpg  " alt="">
                    <p class="item-name"><?= $item['produk'] ?></p>
                    <p class="price">Rp <?= number_format($item['harga']) ?>,00</p>
                </div>

                <div class="button-group">
                    <a href="./detail.php?id=<?= $item['id'] ?>" class="detail">detail</a>
                    <a href="./function/add_item.php?id=<?= $item['id'] ?>" class="keranjang">
                        <i class="bi bi-cart"></i>
                    </a>
                </div>

            </div>

            <?php endforeach ?>

        </div>

    </div>

    <script>

        var category = '<?php echo $_GET['category'] ?>'                        
        var price = '<?php echo $_GET['harga'] ?>'                        
        var c = document.querySelector(`input#${category}`)
        var p = document.querySelector(`input#${price}`)
        c.setAttribute('checked', 'checked')
        p.setAttribute('checked', 'checked')
        
    </script>
    <script>

        var avatar = document.querySelector('img.avatar')
        var dropItem = document.querySelector('div.drop-item')

        avatar.addEventListener('click', () => dropItem.classList.toggle('active'))

    </script>
</body>
</html>