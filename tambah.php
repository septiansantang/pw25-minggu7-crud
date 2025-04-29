<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];
    $no_hp   = $_POST['no_hp'];

    mysqli_query($conn, "INSERT INTO crud_160 (nama, email, jurusan, alamat, no_hp) 
                         VALUES ('$nama', '$email', '$jurusan', '$alamat', '$no_hp')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="post">
        Nama: <input type="text" name="nama" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Alamat: <textarea name="alamat" required></textarea><br><br>
        No HP: <input type="text" name="no_hp" required><br><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>
