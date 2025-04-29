<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM crud_160 WHERE id=$id");
header("Location: index.php");
?>
