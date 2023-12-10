<?php
 include "koneksi.php";
?>
<body>
    <table align="center" border="1">
        <tr>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Jumlah</td>
            <td>Harga Jual</td>
            <td>Harga Beli</td>
            <td colspan="2">Keterangan</td>
        </tr>
        <?php
        // $barangCountQuery = mysqli_query($konek, "SELECT COUNT(*) as total FROM barang");
        // $ttlbarang = mysqli_fetch_assoc($barangCountQuery);
        // $stockQuery = mysqli_query($konek, "SELECT SUM(jumlah) as total_stock FROM barang");
        // $stock = mysqli_fetch_assoc($stockQuery);
        $result = mysqli_query($konek, "SELECT * FROM barang");

        if ($result) {
            while ($tampil = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$tampil['kode_barang']}</td>
                        <td>{$tampil['nama_barang']}</td>
                        <td>{$tampil['jumlah']}</td>
                        <td>{$tampil['harga_jual']}</td>
                        <td>{$tampil['harga_beli']}</td>
                        <td><a href='editbarang.php?kode_barang=". $tampil['kode_barang']. "'>Edit</a></td>
                        <td><a href='hapusbarang.php?kode_barang=". $tampil['kode_barang']. "'>Hapus</a></td>
                      </tr>";
            } 
        }
        ?>
    </table>
    <!-- <p>Total Barang: <?php echo $ttlbarang['total']; ?></p>
    <p>Total Stock: <?php echo $stock['total_stock']; ?></p> -->
</body>