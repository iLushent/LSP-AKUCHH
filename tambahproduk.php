<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php include 'components/navbar.php';?>
    <h1 class=" text-3xl font-bold text-center my-3 bg-gradient-to-r from-indigo-400 to-cyan-500 bg-clip-text text-transparent">Tambah Produk terbaik HnM</h1>
    <form action="service/produk.php" class=" bg-slate-300 w-1/4 rounded-lg p-4 mx-auto" method="post" enctype="multipart/form-data">
        <div class="mb-3 flex flex-col">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk" class="border px-4 py-2">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="Harga_produk">Harga Produk</label>
            <input type="number" name="harga_produk" id="harga_produk" placeholder="Harga Produk" class="border px-4 py-2">
        </div>
        
        <div class="mb-3 flex flex-col">
            <label for="stok_produk">Stok Produk</label>
            <input type="number" name="stok_produk" id="stok_produk" placeholder="Stok Produk" class="border px-4 py-2">
        </div>


        <div class="mb-3 flex flex-col">
            <label for="deskripsi_produk">Deskripsi Produk</label>
            <textarea name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="3" placeholder="deskripsi_produk" class="px-4 py-2"></textarea>
</div>

        <div class="mb-3 flex flex-col">
            <label for="foto_produk">Foto Produk</label>
            <input type="file" name="foto_produk" id="foto_produk" placeholder="Foto Produk" class="border px-4 py-2">
        </div>

        <div class="mb-3 flex flex-col">
            <button type="submit" name="tambah" class="bg-red-600 text-white rounded-lg px-3 py-2 ">Tambah</button>
        </div>
</body>
</html>