<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Exodus</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
                    <span class="navbar-text">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Kamar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Fasilitas</a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </nav>
        <img src="image/hero.jpeg" alt="" style="height: 60vh; width:100%;">

        <form action="functions/pemesanan/tambah-pemesanan.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Check In</label>
                        <input type="date" class="form-control" name="check_in">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Check Out</label>
                        <input type="date" class="form-control" name="check_out">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah_kamar">
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- <button class="btn btn-primary mt-4">Pesan</button> -->
                </div>
            </div>

            <h1 class="text-center">Form Pemesanan</h1>
            <center>
                <table cellpadding="10">
                    <tr>
                        <td width="200">Nama Pemesan</td>
                        <td><input type="text" class="form-control" name="nama_pemesan"></td>
                    </tr>
                    <tr>
                        <td width="200">Email</td>
                        <td><input type="text" class="form-control" name="email"></td>
                    </tr>
                    <tr>
                        <td width="200">No Handphone</td>
                        <td><input type="text" class="form-control" name="no_handphone"></td>
                    </tr>
                    <tr>
                        <td width="200">Nama Tamu</td>
                        <td><input type="text" class="form-control" name="nama_tamu"></td>
                    </tr>
                    <tr>
                        <td width="200">Tipe Kamar</td>
                        <td>
                            <select name="type" id="type" class="form-select">
                                <option value="superior">superior</option>
                                <option value="deluxe">deluxe</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <button class="btn btn-primary mb-3" type="submit">Konfirmasi Pemesanan</button>

            </center>




        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>