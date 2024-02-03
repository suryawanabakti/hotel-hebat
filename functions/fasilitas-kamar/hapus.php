<?php

require '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM fasilitas_kamar WHERE id =$id");

header("Location: /fasilitas-kamar.php");
