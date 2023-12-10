<?php
    include "koneksi.php";

    $query = "INSERT INTO barang (kode_barang, nama_barang, jumlah, harga_beli, harga_jual) VALUES ('$_POST[kode_barang]', '$_POST[nama_barang]','$_POST[jumlah]', '$_POST[harga_beli]', '$_POST[harga_jual]')";

    // Melakukan eksekusi query
    if (mysqli_query($konek, $query)) {
        echo "<script type='text/javascript'>
        window.location.href='tampilbarang.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>


