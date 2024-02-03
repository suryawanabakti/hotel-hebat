<?php
require 'functions/koneksi.php';

$tipe_superior = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE type = 'superior'");
$tipe_deluxe = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE type = 'deluxe' ");
?>

<?php require 'header.php' ?>
<img src="image/superior.jpg" alt="" width="100%">
<h1>Tipe Superior</h1>
<?php foreach ($tipe_superior as $superior) : ?>
    <p><?= $superior['nama_fasilitas'] ?></p>
<?php endforeach ?>
<img src="image/deluxe.jpg" alt="" width="100%">
<h1>Tipe Deluxe</h1>
<?php foreach ($tipe_deluxe as $deluxe) : ?>
    <p><?= $deluxe['nama_fasilitas'] ?></p>
<?php endforeach ?>

<?php require 'footer.php' ?>