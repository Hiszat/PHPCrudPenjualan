<?php
 include "koneksi.php";
?>
<body>
    <table border="1">
        <tr>
            <td>ID Penjualan</td>
            <td>Kode Barang</td>
            <td>Kode Pelanggan</td>
            <td>Jumlah</td>
        </tr>
        <?php
        $barangCountQuery = mysqli_query($konek, "SELECT COUNT(*) as total FROM penjualan");
        $ttlbarang = mysqli_fetch_assoc($barangCountQuery);
        // $stockQuery = mysqli_query($konek, "SELECT SUM(jumlah) as total_stock FROM barang");
        // $stock = mysqli_fetch_assoc($stockQuery);
        $result = mysqli_query($konek, "SELECT * FROM penjualan");

        if ($result) {
            while ($tampil = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$tampil['id_penjualan']}</td>
                        <td>{$tampil['kode_barang']}</td>
                        <td>{$tampil['kode_pelanggan']}</td>
                        <td>{$tampil['jumlah']}</td>
                      </tr>";
            }
        }
        ?>
    </table>
    <p>Total Penjualan: <?php echo $ttlbarang['total']; ?></p>
</body>
