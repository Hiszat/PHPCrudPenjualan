<?php
    if(isset($_GET['kode_barang'])){
        include('koneksi.php');

        $result = mysqli_query($konek, "SELECT * FROM barang WHERE kode_barang='$_GET[kode_barang]'");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
        ?>
        <body>
            <form action="updatebarang.php" method="post">
                <table align="center" bgcolor="#528deb">
                    <tr>
                        <td>Kode Barang</td>
                        <td>:</td>
                        <td><input type="text" name="kode_barang" value="<?= $row['kode_barang'] ?>" /></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>:</td>
                        <td><input type="text" name="nama_barang" value="<?= $row['nama_barang'] ?>" /></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><input type="text" name="jumlah" value="<?= $row['jumlah'] ?>"  /></td>
                    </tr>
                    <tr>
                        <td>Harga Beli</td>
                        <td>:</td>
                        <td><input type="text" name="harga_beli" value="<?= $row['harga_beli'] ?>" /></td>
                    </tr>
                    <tr>
                        <td>Harga Jual</td>
                        <td>:</td>
                        <td><input type="text" name="harga_jual" value="<?= $row['harga_jual'] ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Update"></td>
                        <td align="center"><input type="reset" value="Reset"></td>
                    </tr>
                </table>
            </form>
        </body>
        <?php
        }
    }
?>