<?php
require "header.php";
require 'functions/koneksi.php';

$fasilitas_umum = mysqli_query($conn, "SELECT * FROM fasilitas_umum");
?>
<h1>Fasilitas</h1>
<div class="row">
    <?php foreach ($fasilitas_umum as $data) : ?>
        <div class="col-md-4">
            <img src="/image/fasilitas_umum/<?= $data['gambar'] ?>" alt="" class="img img-fluid">
        </div>
    <?php endforeach; ?>
</div>

<?php require 'footer.php'; ?>