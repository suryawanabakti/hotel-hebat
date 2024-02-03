<?php
require 'functions/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE id = $id");
$fasilitas_kamar = mysqli_fetch_assoc($query);

var_dump($fasilitas_kamar);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="functions/fasilitas-kamar/edit.php" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Type</label>
            <select name="type" id="type" class="form-select">
                <option value="superior">superior</option>
                <option value="deluxe">deluxe</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" name="nama_fasilitas" value="<?= $fasilitas_kamar['nama_fasilitas'] ?>">
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>