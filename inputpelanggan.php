<body>
    <form action="simpanpelanggan.php" method="post">
        <table align="center" bgcolor="#528deb">
            <tr>
                <td>Kode Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="kode_pel" /></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="nama_pel" /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name="jk" id="jkelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td>:</td>
                <td><input type="text" name="no_telp" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>