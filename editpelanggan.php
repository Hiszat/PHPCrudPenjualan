<?php
    if(isset($_GET['pelanggan'])){
        include('koneksi.php');
        ?>
        
<h1 class="h3 mb-2 text-gray-800">Edit Data Pelanggan</h1>
<hr>
<div class="card border-left-success p-3 mb-4 animated--grow-in">
        <?php
        $result = mysqli_query($konek, "SELECT * FROM pelanggan WHERE kode_pelanggan='$_GET[pelanggan]'");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            ?>
            <form action="updatepelanggan.php" method="post">
                <div class="form-group mb-2">
                    <label for="kode_pel" class="text-dark">Kode Pelanggan</label> 
                    <input id="kode_pel" class="form-control" type="text" name="kode_pel"  value="<?= $row['kode_pelanggan'] ?>" placeholder="Masukkan kode pelanggan..." readonly/>
                </div>
                <div class="form-group mb-2">
                    <label for="nama_pel" class="text-dark">Nama Pelanggan</label>
                    <input id="nama_pel" class="form-control" type="text" name="nama_pel" placeholder="Masukkan nama pelanggan..." value="<?= $row['nama_pelanggan'] ?>" required/>
                </div>
                <div class="form-group mb-2">
                    <label for="jk" class="text-dark">Jenis Kelamin</label>
                    <select id="jk" class="form-control" name="jk">
                        <option value="Laki-Laki" <?= ($row['jeniskelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                        <option value="Perempuan" <?= ($row['jeniskelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="alamat" class="text-dark">Alamat</label>
                    <input id="alamat" class="form-control" type="text" name="alamat" placeholder="Masukkan alamat pelanggan..." value="<?= $row['alamat'] ?>" required/>
                </div>
                <div class="form-group mb-2">
                    <label for="no_telp" class="text-dark">No. Telp</label>
                    <input id="no_telp" class="form-control" type="text" name="no_telp" placeholder="Masukkan nomor telepon pelanggan..." value="<?= $row['telp'] ?>" required/>
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