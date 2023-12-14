<?php
    if(isset($_GET['kode_barang'])){
        include('koneksi.php');

        $result = mysqli_query($konek, "SELECT * FROM barang WHERE kode_barang='$_GET[kode_barang]'");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
        ?>
        <h1 class="h3 mb-2 text-gray-800">Input Data Barang</h1>
        <hr>
        <div class="card border-left-success p-3 mb-4 animated--grow-in">
            <form action="updatebarang.php" method="post">
                <div class="form-group mb-2">
                    <label for="kode_barang" class="text-dark">Kode Barang</label> 
                    <input id="kode_barang" class="form-control" type="text" name="kode_barang" placeholder="Masukkan kode barang..." value="<?= $row['kode_barang'] ?>" readonly/>
                </div>
                <div class="form-group mb-2">
                    <label for="nama_barang" class="text-dark">Nama Barang</label>
                    <input id="nama_barang" class="form-control" type="text" name="nama_barang" placeholder="Masukkan nama barang..." value="<?= $row['nama_barang'] ?>" required/>
                </div>
                <div class="form-group mb-2">
                    <label for="jumlah" class="text-dark">Jumlah</label>
                    <input id="jumlah" class="form-control" type="text" name="jumlah" placeholder="Masukkan jumlah barang..." value="<?= $row['jumlah'] ?>" required/>
                </div>
                <div class="form-group mb-2">
                    <label for="harga_beli" class="text-dark">Harga Beli</label>
                    <input id="harga_beli" class="form-control" type="text" name="harga_beli" placeholder="Masukkan harga beli..." value="<?= $row['harga_beli'] ?>" required/>
                </div>
                <div class="form-group mb-2">
                    <label for="harga_jual" class="text-dark">Harga Jual</label>
                    <input id="harga_jual" class="form-control" type="text" name="harga_jual" placeholder="Masukkan harga jual..." value="<?= $row['harga_jual'] ?>" required/>
                </div>
                <hr class="sidebar-divider mt-4">
                <div class="mx-auto">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Simpan">
                    <input type="reset" class="btn btn-danger btn-lg btn-block" value="Batal">
                </div>
                </table>
            </form>
        </div>
        <?php
        }
    }
?>