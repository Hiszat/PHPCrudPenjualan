<?php
    include "koneksi.php";

    $query = "UPDATE barang SET nama_barang='$_POST[nama_barang]', jumlah='$_POST[jumlah]', harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]' WHERE kode_barang='$_POST[kode_barang]'";

    // Melakukan eksekusi query
    if (mysqli_query($konek, $query)) {
        echo "<script type='text/javascript'>
        window.location.href='?hal=barang';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>


