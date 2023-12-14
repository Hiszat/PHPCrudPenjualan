<?php
 include "koneksi.php";
?>
<h1 class="h3 mb-2 text-gray-800">Input Data Penjualan</h1>
<hr>
<div class="card border-left-success p-3 mb-4 animated--grow-in">
    <form action="simpanpenjualan.php" method="post">
        <div class="form-group mb-2">
            <label for="kode_barang" class="text-dark">Kode Barang</label>
            <select id="kode_barang" class="form-control" name="kode_barang">
                <?php 
                    $sql_barang = "SELECT kode_barang, nama_barang FROM barang";
                    $result_barang = mysqli_query($konek, $sql_barang);
                    if ($result_barang) {
                        while ($tampil_barang = mysqli_fetch_assoc($result_barang)) {
                            echo "<option value='". $tampil_barang['kode_barang'] ."'>" . $tampil_barang['nama_barang'] . "</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="kode_pel" class="text-dark">Kode Pelanggan</label>
            <select id="kode_pel" class="form-control" name="kode_pel">
                <?php 
                    $sql_pelanggan = "SELECT kode_pelanggan, nama_pelanggan FROM pelanggan";
                    $result_pelanggan = mysqli_query($konek, $sql_pelanggan);
                    if ($result_pelanggan) {
                        while ($tampil_pelanggan = mysqli_fetch_assoc($result_pelanggan)) {
                            echo "<option value='". $tampil_pelanggan['kode_pelanggan'] ."'>" . $tampil_pelanggan['nama_pelanggan'] . "</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="jumlah" class="text-dark">Jumlah</label>
            <input id="jumlah" class="form-control" type="text" name="jumlah" placeholder="Masukkan jumlah penjualan..." required/>
        </div>
        <hr class="sidebar-divider mt-4">
        <div class="mx-auto">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Simpan">
            <input type="reset" class="btn btn-danger btn-lg btn-block" value="Batal">
        </div>
    </form>
</div>
