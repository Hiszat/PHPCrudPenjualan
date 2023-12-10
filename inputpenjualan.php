<?php
 include "koneksi.php";
?>
<body>
    <form action="simpanpenjualan.php" method="post">
        <table align="center" bgcolor="#528deb">
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td>
                    <select name="kode_barang" id="jkelamin">
                        <?php 
                            $sql = "SELECT kode_barang,nama_barang FROM barang";
                            $result = mysqli_query($konek, $sql);
                            if ($result) {
                                while ($tampil = mysqli_fetch_assoc($result)) {
                                    echo "<option value='". $tampil['kode_barang'] ."'>" . $tampil['nama_barang'] . "</option>";
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kode Pelanggan</td>
                <td>:</td>
                <td><select name="kode_pel" id="jkelamin">
                        <?php 
                            $sql = "SELECT kode_pelanggan,nama_pelanggan FROM pelanggan";
                            $result = mysqli_query($konek, $sql);
                            if ($result) {
                                while ($tampil = mysqli_fetch_assoc($result)) {
                                    echo "<option value='". $tampil['kode_pelanggan'] ."'>" . $tampil['nama_pelanggan'] . "</option>";
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>