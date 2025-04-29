<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM crud_160 WHERE id=$id"));

if (isset($_POST['update'])) {
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];
    $no_hp   = $_POST['no_hp'];

    mysqli_query($conn, "UPDATE crud_160 SET 
        nama='$nama', email='$email', jurusan='$jurusan', alamat='$alamat', no_hp='$no_hp' 
        WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>
        Email: <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>
        Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br><br>
        Alamat: <textarea name="alamat"><?= $data['alamat'] ?></textarea><br><br>
        No HP: <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
