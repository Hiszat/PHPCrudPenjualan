<?php
    include "koneksi.php";

    $query = "UPDATE penjualan SET kode_barang='$_POST[kode_bar]', kode_pelanggan='$_POST[kode_pel]', jumlah='$_POST[jumlah]' WHERE id_penjualan='$_POST[id_penjualan]'";

    // Melakukan eksekusi query
    if (mysqli_query($konek, $query)) {
        echo "<script type='text/javascript'>
        window.location.href='tampilpenjualan.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>


