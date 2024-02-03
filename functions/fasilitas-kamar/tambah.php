<?php

require '../koneksi.php';

$nama_fasilitas = $_POST['nama_fasilitas'];
$type = $_POST['type'];

$query = mysqli_query($conn, "INSERT INTO fasilitas_kamar (type, nama_fasilitas) VALUES ('$type', '$nama_fasilitas')");

if ($query) {
    header("Location: /admin/fasilitas-kamar.php");
} else {
    echo "Something Error";
}
