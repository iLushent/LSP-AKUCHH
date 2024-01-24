<?php

if(isset($_POST['tambah'])){
    tambahData();
}

function tambahData(){
    $name = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];
    $deskripsi = $_POST['deskripsi_produk'];
    $foto = $_FILES['foto_produk']['name'];

    $targetUpload = '../uploads/';
    $targetFile = $targetUpload. basename($foto);

    $fileType = $_FILES['foto_produk']['type'];
    if($fileType == 'image/jpg' || $fileType == 'image/jpeg' || $fileType == 'image/png'){
        if(move_uploaded_file($_FILES['foto_produk']
        ['tmp_name'], $targetFile)){
            //tambah data
            include '../koneksi.php';
            $sql = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga_produk, stok_produk, deskripsi_produk, foto_produk) VALUES ('$name', '$harga', '$stok', '$deskripsi', '$foto')");
            echo "<script>
            alert('Produk berhasil ditambahkan');
            window.location.href = '../produk.php';
            </script>";
        }
    }else{
         echo $fileType;
    }
   
}
function EditData(){
    $name = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];
    $deskripsi = $_POST['deskripsi_produk'];
    $foto = $_FILES['foto_produk']['name'];

    $targetUpload = '../uploads/';
    $targetFile = $targetUpload. basename($foto);

    $fileType = $_FILES['foto_produk']['type'];
    if($fileType == 'image/jpg' || $fileType == 'image/jpeg' || $fileType == 'image/png'){
        if(move_uploaded_file($_FILES['foto_produk']
        ['tmp_name'], $targetFile)){
            //tambah data
            include '../koneksi.php';
            $sql = mysqli_query($koneksi, "UPDATE FROM produk (nama_produk, harga_produk, stok_produk, deskripsi_produk, foto_produk) VALUES ('$name', '$harga', '$stok', '$deskripsi', '$foto') WHERE id_produk = '$id'");
            echo "<script>
            alert('Produk berhasil ditambahkan');
            window.location.href = '../produk.php';
            </script>";
        }
    }else{
         echo $fileType;
    }
   
}

?>