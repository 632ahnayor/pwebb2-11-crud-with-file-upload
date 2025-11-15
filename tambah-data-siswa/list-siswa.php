<?php 
include("config.php");
//impor file config agar bisa akses variabel $db
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD dengan Upload File</title>
    </head>
    
    <body>
        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>
        
    <nav><a href="form-simpan.php">[+] Tambah Baru</a></nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Foto</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //melakukan query untuk mengambil data siswa pada tabel calon_siswa
                $sql = $pdo->prepare("SELECT * FROM siswa");
                $sql->execute();

                while($data = $sql->fetch()) {
                    echo "<tr>";

                    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
                    echo "<td>".$data['nis']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['jenis_kelamin']."</td>";
                    echo "<td>".$data['telp']."</td>";
                    echo "<td>".$data['alamat']."</td>";

                    echo "<td><a href='form-ubah.php?id=".$data['id']."'>Ubah</a></td>";
                    echo "<td><a href='proses-hapus.php?id=".$data['id']."'>Hapus</a></td>";
                    
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>
