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
                            <th>Nama Barang</th>
                            <th>Nama Pelanggan</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    $query = "SELECT
                    p.id_penjualan,
                    b.nama_barang,
                    pl.nama_pelanggan,
                    p.jumlah
                    FROM penjualan p
                    JOIN barang b ON p.kode_barang = b.kode_barang
                    JOIN pelanggan pl ON p.kode_pelanggan = pl.kode_pelanggan" ;
                    // $stockQuery = mysqli_query($konek, "SELECT SUM(jumlah) as total_stock FROM barang");
                    // $stock = mysqli_fetch_assoc($stockQuery);
                    $result = mysqli_query($konek, $query);
                    if ($result) {
                        while ($tampil = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?= $tampil['id_penjualan']?></td>    
                                <td><?= $tampil['nama_barang']?></td>
                                <td><?= $tampil['nama_pelanggan']?></td>
                                <td><?= $tampil['jumlah']?></td>
                                <td>
                                    <a class="fs-1 btn btn-warning" href='?hal=ubah_penjualan&id=<?= $tampil['id_penjualan'] ?>'><i class="fas fa-edit fa-fw"></i>Edit</a>
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