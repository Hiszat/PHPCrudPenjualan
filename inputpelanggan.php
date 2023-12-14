<h1 class="h3 mb-2 text-gray-800">Input Data Pelanggan</h1>
<hr>
<div class="card border-left-success p-3 mb-4 animated--grow-in">
    <form action="simpanpelanggan.php" method="post">
        <div class="form-group mb-2">
            <label for="kode_pel" class="text-dark">Kode Pelanggan</label> 
            <input id="kode_pel" class="form-control" type="text" name="kode_pel" placeholder="Masukkan kode pelanggan..." required/>
        </div>
        <div class="form-group mb-2">
            <label for="nama_pel" class="text-dark">Nama Pelanggan</label>
            <input id="nama_pel" class="form-control" type="text" name="nama_pel" placeholder="Masukkan nama pelanggan..." required/>
        </div>
        <div class="form-group mb-2">
            <label for="jk" class="text-dark">Jenis Kelamin</label>
            <select id="jk" class="form-control" name="jk">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="alamat" class="text-dark">Alamat</label>
            <input id="alamat" class="form-control" type="text" name="alamat" placeholder="Masukkan alamat pelanggan..." required/>
        </div>
        <div class="form-group mb-2">
            <label for="no_telp" class="text-dark">No. Telp</label>
            <input id="no_telp" class="form-control" type="text" name="no_telp" placeholder="Masukkan nomor telepon pelanggan..." required/>
        </div>
        <hr class="sidebar-divider mt-4">
        <div class="mx-auto">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Simpan">
            <input type="reset" class="btn btn-danger btn-lg btn-block" value="Batal">
        </div>
    </form>
</div>
