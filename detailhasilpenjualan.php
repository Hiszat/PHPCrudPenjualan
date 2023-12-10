<?php
    include('koneksi.php');


    

?>


<table border="1" align="center">
    <tr>
        <td>Kode</td>
        <td>Kode Barang</td>
        <td>Nama Barang</td>
        <td>Harga Jual</td>
        <td>Kode Pelanggan</td>
        <td>Nama Pelanggan</td>
        <td>Alamat Pelanggan</td>
        <td>Jumlah</td>
        <td>Total Belanja</td>
    </tr>
    <?php
    $query = "SELECT
    p.id_penjualan,
    b.kode_barang,
    b.harga_jual,
    b.nama_barang,
    p.kode_pelanggan,
    pl.nama_pelanggan,
    pl.jeniskelamin,
    pl.alamat,
    p.jumlah,
    b.harga_jual * p.jumlah AS total_harga
    FROM penjualan p
    JOIN barang b ON p.kode_barang = b.kode_barang
    JOIN pelanggan pl ON p.kode_pelanggan = pl.kode_pelanggan" ;
    $result = mysqli_query($konek, $query);
    $transaksi = 0;
    $jumlah = 0;
    if ($result) {
        while ($tampil = mysqli_fetch_assoc($result)) {
            $transaksi++;
            $jumlah +=$tampil['jumlah'];
    ?>
    <tr>
        <td><?= $tampil['id_penjualan']?></td>
        <td><?= $tampil['kode_barang']?></td>
        <td><?= $tampil['nama_barang']?></td>
        <td><?= $tampil['harga_jual']?></td>
        <td><?= $tampil['kode_pelanggan']?></td>
        <td><?= $tampil['nama_pelanggan']?></td>
        <td><?= $tampil['alamat']?></td>
        <td><?= $tampil['jumlah']?></td>
        <td><?= $tampil['total_harga']?></td>
    </tr>
    <?php
        }
    }
    ?>
    <tr>
        <td colspan="3">Jumlah <br> Penjualan</td>
        <td colspan="2" align="center"><?= $jumlah ?></td>
    </tr>
    <tr>
        <td colspan="3">Jumlah <br> Transaksi</td>
        <td colspan="2" align="center"><?= $transaksi ?></td>
    </tr>
</table>