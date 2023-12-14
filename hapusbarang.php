<?php
include"koneksi.php";
$sql=mysqli_query($konek ,"DELETE FROM barang WHERE kode_barang='$_GET[kode_barang]'");
if($sql)
{
	echo "<script type='text/javascript'>
        window.location.href='index.php?hal=barang';
    </script>";
}
else
	echo"Gagal Simpan";
?>
