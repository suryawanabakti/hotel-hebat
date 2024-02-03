<?php
require '../functions/koneksi.php';

$fasilitas_umum = mysqli_query($conn, "SELECT * FROM fasilitas_umum");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Fasilitas Umum</h1>
        <form action="../functions/fasilitas-umum/tambah.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Nama Fasilitas</label>
                <input type="text" class="form-control" name="nama_fasilitas">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fasilitas_umum as $data) : ?>
                    <tr>
                        <td><?= $data['nama_fasilitas'] ?></td>
                        <td><?= $data['keterangan'] ?></td>
                        <td>
                            <img src="/image/fasilitas_umum/<?= $data['gambar'] ?>" alt="" width="100">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>