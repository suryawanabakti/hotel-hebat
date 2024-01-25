<?php
require '../koneksi.php';
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$jumlah_kamar = $_POST['jumlah_kamar'];
$nama_pemesan = $_POST['nama_pemesan'];
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$nama_tamu = $_POST['nama_tamu'];
$type = $_POST['type'];

$query = mysqli_query($conn, "INSERT INTO pemesanan (nama_pemesan,email,no_handphone,nama_tamu,type,check_in,check_out,jumlah_kamar) VALUES ('$nama_pemesan', '$email','$no_handphone', '$nama_tamu', '$type', '$check_in' , '$check_out', '$jumlah_kamar')");

if ($query) {
    header("Location: /index.php");
} else {
    echo "Something error";
}
