<?php
 include "koneksi.php";
?>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Barang</h1>
    <a href="?hal=tambah_barang" class="btn btn-primary btn-icon-split mb-4">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Barang</span>
                    </a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableBarang" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    $result = mysqli_query($konek, "SELECT * FROM barang");
                    if ($result) {
                        while ($tampil = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?= $tampil['kode_barang'] ?></td>
                                <td><?= $tampil['nama_barang'] ?></td>
                                <td><?= $tampil['jumlah'] ?></td>
                                <td><?= $tampil['harga_jual'] ?></td>
                                <td><?= $tampil['harga_beli'] ?></td>
                                <td>
                                    <a class="fs-1 btn btn-warning" href='?hal=ubah_barang&kode_barang=<?= $tampil['kode_barang'] ?>'><i class="fas fa-edit fa-fw"></i>Edit</a>
                                    <a class="fs-1 btn btn-danger" href='hapusbarang.php?kode_barang=<?= $tampil['kode_barang'] ?>'><i class="fas fa-trash fa-fw"></i>Hapus</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
