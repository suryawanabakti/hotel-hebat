<?php

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
        <form action="functions/fasilitas-umum/tambah.php" method="POST">

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
                <input type="text" class="form-control" name="gambar">
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>