<?php
    include "koneksi.php";
    $query = "INSERT INTO penjualan (id_penjualan, kode_barang, kode_pelanggan, jumlah) VALUES ('', '$_POST[kode_barang]','$_POST[kode_pel]', '$_POST[jumlah]')";

    // Melakukan eksekusi query
    if (mysqli_query($konek, $query)) {
        echo "<script type='text/javascript'>
        window.location.href='index.php?hal=penjualan';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>