<?php
 include "koneksi.php";
?>
    <h1 class="h3 mb-2 text-gray-800">Penjualan</h1>
    <a href="?hal=tambah_penjualan" class="btn btn-primary btn-icon-split mb-4">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Penjualan</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tablePenjualan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Penjualan</th>
                            <th>Kode Barang</th>
                            <th>Kode Pelanggan</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    $result = mysqli_query($konek, "SELECT * FROM penjualan");
                    if ($result) {
                        while ($tampil = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?= $tampil['id_penjualan']?></td>    
                                <td><?= $tampil['kode_barang']?></td>
                                <td><?= $tampil['kode_pelanggan']?></td>
                                <td><?= $tampil['jumlah']?></td>
                                <td>
                                    <a class="fs-1 btn btn-warning" href='editpenjualan.php?id=<?= $tampil['id_penjualan'] ?>'><i class="fas fa-edit fa-fw"></i>Edit</a>
                                    <a class="fs-1 btn btn-danger" href='hapuspenjualan.php?id=<?= $tampil['id_penjualan'] ?>'><i class="fas fa-trash fa-fw"></i>Hapus</a>
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