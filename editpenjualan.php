<?php
 include "koneksi.php";
 if(isset($_GET['id'])){
    include('koneksi.php');
?>
<body>
    <?php
    $query = "SELECT
    b.kode_barang,
    b.nama_barang,
    p.kode_pelanggan,
    pl.nama_pelanggan,
    p.jumlah
    FROM penjualan p
    JOIN barang b ON p.kode_barang = b.kode_barang
    JOIN pelanggan pl ON p.kode_pelanggan = pl.kode_pelanggan WHERE id_penjualan='$_GET[id]'" ;

        $result = mysqli_query($konek, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            ?>
    <form action="updatepenjualan.php" method="post">
    <input type="hidden" id="id_penjualan" name="id_penjualan" value="<?= $_GET['id'] ?>">
        <table align="center" bgcolor="#528deb">
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td>
                    <select name="kode_bar" id="kode_bar">
                        <option value="<?= $row['kode_barang'] ?>"><?= $row['nama_barang'] ?></option>
                        <?php 
                            $sql = "SELECT kode_barang,nama_barang FROM barang WHERE kode_barang != '$row[kode_barang]'";
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
                <td><select name="kode_pel" id="kode_pel">
                    <option value="<?= $row['kode_pelanggan'] ?>"><?= $row['nama_pelanggan'] ?></option>
                        <?php 
                            $sql = "SELECT kode_pelanggan,nama_pelanggan FROM pelanggan WHERE kode_pelanggan != '$row[kode_pelanggan]' ";
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
                <td><input type="text" name="jumlah" value="<?= $row['jumlah'] ?>"/></td>
            </tr>
           
            <tr>
                <td><input type="submit" value="Update"></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
    <?php
        }   
            ?>
</body>

<?php
 }
?>