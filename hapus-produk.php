<?php

require 'koneksi.php';
$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = '$id'");



?>