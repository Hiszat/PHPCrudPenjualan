<?php
 include "koneksi.php";
 if(isset($_GET['id'])){
    include('koneksi.php');
?>
<h1 class="h3 mb-2 text-gray-800">Input Data Penjualan</h1>
<hr>
<div class="card border-left-success p-3 mb-4 animated--grow-in">
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
        <div class="form-group mb-2">
            <label for="kode_barang" class="text-dark">Kode Barang</label>
            <select id="kode_barang" class="form-control" name="kode_barang">
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
                ?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="kode_pel" class="text-dark">Kode Pelanggan</label>
            <select id="kode_pel" class="form-control" name="kode_pel">
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
        </div>
        <div class="form-group mb-2">
            <label for="jumlah" class="text-dark">Jumlah</label>
            <input id="jumlah" class="form-control" type="text" name="jumlah" value="<?= $row['jumlah'] ?>" placeholder="Masukkan jumlah penjualan..." required/>
        </div>
        <hr class="sidebar-divider mt-4">
        <div class="mx-auto">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Simpan">
            <input type="reset" class="btn btn-danger btn-lg btn-block" value="Batal">
        </div>
    </form>
    <?php
        }   
            ?>
    
</div>

<?php
 }
?>


