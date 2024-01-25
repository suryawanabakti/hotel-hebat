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
        <h1>Fasilitas Kamar</h1>
        <form action="functions/fasilitas-kamar/tambah.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Type</label>
                <select name="type" id="type" class="form-select">
                    <option value="superior">superior</option>
                    <option value="deluxe">deluxe</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Fasilitas</label>
                <input type="text" class="form-control" name="nama_fasilitas">
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>