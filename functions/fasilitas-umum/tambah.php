<?php
require '../koneksi.php';

$nama_fasilitas = $_POST['nama_fasilitas'];
$keterangan = $_POST['keterangan'];

$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg', 'webp');
$namaGambar = $_FILES['gambar']['name'];
$x = explode('.', $namaGambar);
$ekstensi = strtolower(end($x));
$ukuran    = $_FILES['gambar']['size'];

$file_tmp = $_FILES['gambar']['tmp_name'];

if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
        move_uploaded_file($file_tmp, '../../image/fasilitas_umum/' . $namaGambar);

        $query = mysqli_query($conn, "INSERT INTO fasilitas_umum (nama_fasilitas,keterangan,gambar) VALUES ('$nama_fasilitas', '$keterangan' , '$namaGambar')");

        if ($query) {
            echo "<script>
                alert('Berhasil tambah fasilitas umum');
                location.href = '/admin/fasilitas-umum.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal tambah fasilitasu umum');
            location.reload();
        </script>";
        }
    } else {
        echo 'UKURAN FILE TERLALU BESAR';
    }
} else {
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
