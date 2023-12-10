<?php
    include "koneksi.php";
    $query = "INSERT INTO pelanggan (kode_pelanggan, nama_pelanggan, jeniskelamin, alamat, telp) VALUES ('$_POST[kode_pel]', '$_POST[nama_pel]','$_POST[jk]', '$_POST[alamat]', '$_POST[no_telp]')";

    // Melakukan eksekusi query
    if (mysqli_query($konek, $query)) {
        echo "<script type='text/javascript'>
        window.location.href='tampilpelanggan.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>