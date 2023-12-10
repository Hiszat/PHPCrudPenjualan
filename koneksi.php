<?php
    $server = "localhost";
    $user = "root";
    $pw = "";
    $db = "tokoonline-tic";

    $konek = mysqli_connect($server, $user, $pw, $db);
    if(!$konek){
        echo "Database tidak ditemukan";
    }
?>
