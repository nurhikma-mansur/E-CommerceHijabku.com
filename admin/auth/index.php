<?php 

	if(isset($_POST['submit'])){

		if($_POST['username'] == 'admin'){

			if($_POST['password'] == 'password'){
				
				session_start();
				$_SESSION['isAdmin'] = true;

				echo"
					<script>
						alert('login berhasil')
						window.location.href = '../index.php'
					</script>
				";


			} else {

				echo"
					<script>
						alert('login gagal')
						window.location.href = './index.php'
					</script>
				";
			}


		}

	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h3>admin dashboard</h3>

        <form action="" method="post">
            <input type="text" name="username" id="" placeholder="username" autocomplete="off">
            <input type="text" name="password" id="" placeholder="password" autocomplete="off">
            <button type="submit" name="submit">
                masuk
            </button>
        </form>

    </div>
    
</body>
</html>