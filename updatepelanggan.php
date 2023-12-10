<?php
    include "koneksi.php";

    $query = "UPDATE pelanggan SET nama_pelanggan='$_POST[nama_pel]', jeniskelamin='$_POST[jk]', alamat='$_POST[alamat]', telp='$_POST[no_telp]' WHERE kode_pelanggan='$_POST[kode_pel]'";

    // Melakukan eksekusi query
    if (mysqli_query($konek, $query)) {
        echo "<script type='text/javascript'>
        window.location.href='tampilpelanggan.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>


