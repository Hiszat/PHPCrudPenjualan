<?php
function route($page)
{ 
    $pages = [
        'pelanggan' => 'tampilpelanggan.php',
        'barang' => 'tampilbarang.php',
        'penjualan' => 'tampilpenjualan.php',
        'tambah_barang' => 'inputbarang.php',
        'tambah_pelanggan' => 'inputpelanggan.php',
        'tambah_penjualan' => 'inputpenjualan.php',
        'ubah_barang' => 'editbarang.php',
        'ubah_pelanggan' => 'editpelanggan.php',
        'ubah_penjualan' => 'editpenjualan.php'
    ];

    if (array_key_exists($page, $pages)) {
        include "{$pages[$page]}";
    } else {
        show404();
    }
}

function show404()
{
    echo '<div class="text-center mt-5">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="index.html">&larr; Back to Dashboard</a>
    </div>';
}
?>
