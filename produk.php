<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-[poppins]" >
    <?php include 'components/navbar.php';?>
    <h1 class=" text-3xl font-bold text-center my-3 bg-gradient-to-r from-indigo-400 to-cyan-500 bg-clip-text text-transparent">Produk terbaik HnM</h1>

    <a href="tambahproduk.php" class="bg-black text-white rounded-lg px-3 py-2">Tambah Produk</a>
<div class="grid grid-cols-3">

    <?php
        include 'koneksi.php';
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        ?>
            <div class="mt-3 bg-slate-200 rounded-md px-4 py-3 m-2 overflow-hidden ">
                <img src="uploads/<?= $data ['foto_produk'] ?>" alt="<?= $data['nama_produk'] ?> " class="w-full h-40 object-cover"> 
                
            <h1><?= $data['nama_produk']; ?></h1>
            <div class="flex justify-between">
                <div>Rp <?= $data['harga_produk']; ?></div>
                <div>Stok <?= $data['stok_produk']; ?></div>
            </div>
            <div class="mt-3"><?= $data['deskripsi_produk'];?></div>
            <hr>
            <div class="flex justify-between mt-3" >
                <a href="update-produk.php?id=<?= $data
                ['id_produk']; ?>" class="bg-blue-600 text-white rounded-lg px-3 py-2">UUPDATES DATSSSS </a>
            
                <a href="service/produk.php?id=<?= $data
                ['id_produk']; ?>" class="bg-red-600 text-white rounded-lg px-3 py-2">HAPUES DATSS</a>
            </div>
        </div>

        <?php } ?>
</div>
</body>
</html>