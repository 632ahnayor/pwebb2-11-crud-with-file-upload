<!DOCTYPE html>
<html>
<head>
    <title>CRUD dengan Upload File</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-simpan.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php 
    if(isset($_GET['status'])): 
    //menampilkan status pendaftaran sukses atau gagal
    ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
</body>
<html>
