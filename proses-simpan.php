<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    //sesuaikan nama tabel

    //rename nama foto, tambah tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;

    //set path folder tempat simpan file
    $path = "images/".$fotobaru;

    //proses upload
    if(move_uploaded_file($temp, $path)) {  //cek apakah file berhasil diupload
        //proses simpan ke database
        $sql = $pdo->prepare("INSERT INTO siswa(nis, nama, jenis_kelamin, telp, alamat, foto)
        VALUES(:nis, :nama, :jenis_kelamin, :telp, :alamat, :foto)");
        $sql->bindParam(':nis', $nis); //menyesuaikan variabel
        $sql->bindParam(':nama', $nama);
        $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
        $sql->bindParam(':telp', $telp);
        $sql->bindParam(':alamat', $alamat);
        $sql->bindParam(':foto', $fotobaru);
        $sql->execute(); //execute query insert

        if($sql) {  //cek status query insert
            //jika sukses
            header("location: index.php?status=sukses"); //redirect ke halaman index
        } else {
            //jika gagal
            echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='form-simpan.php'>Kembali ke Form</a>";
        }
    } else {
        //jika gambar gagal upload
        echo "Maaf, gambar gagal diupload.";
        echo "<br><a href='form-simpan.php'>Kembali ke Form</a>";

    }

    // // buat query
    // $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    // $query = mysqli_query($db, $sql);

    // // apakah query simpan berhasil?
    // if( $query ) {
    //     // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    //     header('Location: index.php?status=sukses');
    // } else {
    //     // kalau gagal alihkan ke halaman index.php dengan status=gagal
    //     header('Location: index.php?status=gagal');
    // }


} else {
    die("Akses dilarang...");
}

?>