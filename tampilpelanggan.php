<?php
 include "koneksi.php";
?>
<body>
    <table border="1">
        <tr>
            <td>Kode Pelanggan</td>
            <td>Nama Pelanggan</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No. Telp</td>
            <td colspan="2">Keterangan</td>
        </tr>
        <?php
        $barangCountQuery = mysqli_query($konek, "SELECT COUNT(*) as total FROM pelanggan");
        $ttlbarang = mysqli_fetch_assoc($barangCountQuery);
        $result = mysqli_query($konek, "SELECT * FROM pelanggan");

        if ($result) {
            while ($tampil = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$tampil['kode_pelanggan']}</td>    
                        <td>{$tampil['nama_pelanggan']}</td>
                        <td>{$tampil['jeniskelamin']}</td>
                        <td>{$tampil['alamat']}</td>
                        <td>{$tampil['telp']}</td>
                        <td><a href='editpelanggan.php?pelanggan=". $tampil['kode_pelanggan']. "'>Edit</a></td>
                        <td><a href='hapuspelanggan.php?pelanggan=". $tampil['kode_pelanggan']. "'>Hapus</a></td>
                      </tr>";
            }
        }
        ?>
    </table>
    <p>Total Pelanggan: <?php echo $ttlbarang['total']; ?></p>
</body>
