<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_siswa";
$port = 3307; //port number beda

//koneksi ke MySQL dengan mysqli
// $db = mysqli_connect($server, $user, $password, $nama_database, $port);
// if( !$db ){
//     die("Gagal terhubung dengan database: " . mysqli_connect_error());
// }

//koneksi ke MySQL dengan PDO
$pdo = new PDO("mysql:host=$server;port=$port;dbname=$nama_database", $user, $password);


// try {
//     $pdo = new PDO("mysql:host=$server;port=$port;dbname=$nama_database", $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Koneksi berhasil!";
// } catch (PDOException $e) {
//     die("Koneksi gagal: " . $e->getMessage());
// }


?>