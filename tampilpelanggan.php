<?php
    include "koneksi.php";
    $barangCountQuery = mysqli_query($konek, "SELECT COUNT(*) as total FROM pelanggan");
    $ttlbarang = mysqli_fetch_assoc($barangCountQuery);
?>
    <h1 class="h3 mb-2 text-gray-800">Pelanggan</h1>
    <a href="?hal=tambah_pelanggan" class="btn btn-primary btn-icon-split mb-4">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Pelanggan</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Total Pelanggan : <?= $ttlbarang['total']; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tablePelanggan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Kode Pelanggan</td>
                            <td>Nama Pelanggan</td>
                            <td>Jenis Kelamin</td>
                            <td>Alamat</td>
                            <td>No. Telp</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    $result = mysqli_query($konek, "SELECT * FROM pelanggan");
                    if ($result) {
                        while ($tampil = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?= $tampil['kode_pelanggan']?></td>    
                                <td><?= $tampil['nama_pelanggan']?></td>
                                <td><?= $tampil['jeniskelamin']?></td>
                                <td><?= $tampil['alamat']?></td>
                                <td><?= $tampil['telp']?></td>
                                <td>
                                    <a class="fs-1 btn btn-warning" href='?hal=ubah_pelanggan&pelanggan=<?= $tampil['kode_pelanggan'] ?>'><i class="fas fa-edit fa-fw"></i>Edit</a>
                                    <a class="fs-1 btn btn-danger" href='hapuspelanggan.php?pelanggan=<?= $tampil['kode_pelanggan'] ?>'><i class="fas fa-trash fa-fw"></i>Hapus</a>
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