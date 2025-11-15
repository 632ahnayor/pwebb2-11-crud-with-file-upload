<!DOCTYPE html>
<html>
<head>
    <title>CRUD dengan Upload File</title>
</head>
    
<body>
    <header><h1>Tambah Data Siswa</h1></header>

    <hr>
        
    <form action="proses-simpan.php" method="POST" enctype="multipart/form-data">

        <table cellpadding="8">
            <tr>
                <td><label for="nis">NIS: </label></td>
                <td><input type="text" name="nis" placeholder="NIS" /></td>
            </tr>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" /></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
                <td>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"/>Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan</label> 
                <!--pakai label tag, agar text bisa diklik-->
                </td>
            </tr>
            <tr>
                <td><label for="telepon">Telepon: </label></td>
                <td><input type="text" name="telepon" placeholder="08xxxxxxxxxx" /></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td><label for="foto">Foto: </label></td>
                <td><input type="file" name="foto"></td>
            </tr>
        </table>
        
        <hr>

        <input type="submit" value=" Simpan " name="simpan">
        <a href="index.php"><input type="button" value=" Batal "></a>

    </form>


</body>
</html>
