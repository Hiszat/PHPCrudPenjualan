<?php
    if(isset($_GET['pelanggan'])){
        include('koneksi.php');

        $result = mysqli_query($konek, "SELECT * FROM pelanggan WHERE kode_pelanggan='$_GET[pelanggan]'");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            ?>
            <form action="updatepelanggan.php" method="post">
                <table align="center" bgcolor="#528deb">
                    <tr>
                        <td>Kode Pelanggan</td>
                        <td>:</td>
                        <td><input type="text" name="kode_pel" value="<?= $row['kode_pelanggan'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Nama Pelanggan</td>
                        <td>:</td>
                        <td><input type="text" name="nama_pel"  value="<?= $row['nama_pelanggan'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jk" id="jkelamin">
                                <option value="Laki-Laki" <?= ($row['jeniskelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                                <option value="Perempuan" <?= ($row['jeniskelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat"  value="<?= $row['alamat'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td>:</td>
                        <td><input type="text" name="no_telp"  value="<?= $row['telp'] ?>"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Update"></td>
                        <td  align="center"><input type="reset" value="Reset"></td>
                    </tr>
                </table>
            </form>
        <?php
        }
    }
?>