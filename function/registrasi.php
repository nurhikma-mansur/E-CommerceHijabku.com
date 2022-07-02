<?php

    require './function.php';

    if(registration($_POST) > 0){

        echo "
            <script>
                alert('registrasi berhasil')
                window.location.href = '../index.php'
            </script>
        ";
        
        header('Location: ../index.php');
    } else {
        echo "
            <script>
                alert('registrasi gagal')
                window.location.href = '../index.php'
            </script>
        ";
        
    }

?>