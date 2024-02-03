<?php require 'header.php' ?>
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

<div class="text-center">
    <h1>Tentang Kami</h1>
</div>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ex et necessitatibus, voluptates, architecto magnam iusto similique vitae earum voluptatem, voluptate qui aut? Obcaecati corporis facere ut culpa placeat modi. Laboriosam deserunt, sapiente iusto vero maxime, alias beatae dolores odio distinctio nulla corporis? Molestiae, qui quaerat totam iusto odio aspernatur est! Suscipit nostrum sapiente facilis nesciunt, iure vitae eos nisi placeat, quis voluptas accusamus omnis eum! Est corrupti sint facilis dolorem, hic alias deserunt et tempora libero aliquam enim, optio dolores maiores, dolore facere placeat exercitationem at blanditiis porro earum veritatis nostrum cum. Consequatur quidem ex neque, distinctio possimus vel!
</p>
</div>
<?php require 'footer.php' ?>