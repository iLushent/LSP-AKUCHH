<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniqlo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include 'components/navbar.php' ?>
    <h1 class="text-5xl font-bold text-center my-3 bg-gradient-to-r from-slate-300 to-slate-500 bg-clip-text text-transparent">Update Produk Uniqlo</h1>
    <?php 
        include 'koneksi.php';
        $id = htmlspecialchars($_GET['id']);
        $data = mysqli_query($koneksi ,"SELECT * FROM produk WHERE id_produk = '$id'");
        $produk = mysqli_fetch_array($data);
    ?>
    <form action="service/produk.php" method="post" class="rounded-lg w-1/4 bg-slate-300 p-4 mx-auto" enctype="multipart/form-data">
        <div class="mb-3 flex flex-col">
            <label for="nama_produk">Nama produk</label>
            <input class="border px-4 py-1" placeholder="Nama Produk" type="text" name="nama_produk" id="nama_produk" value="<?= $produk['nama_produk'] ?>">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="harga_produk">Harga produk</label>
            <input class="border px-4 py-1" placeholder="Harga Produk" type="number" name="harga_produk" id="harga_produk" value="<?= $produk['harga_produk'] ?>">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="deskripsi_produk">Deskripsi_produk produk</label>
            <textarea class="border px-4 py-1" placeholder="Deskripsi Produk" type="text" name="deskripsi_produk" id="deskripsi_produk" value="<?= $produk['deskripsi_produk'] ?>"></textarea>
        </div>

        <div class="mb-3 flex flex-col">
            <label for="stok_produk">Stok produk</label>
            <input class="border px-4 py-1" placeholder="Stok Produk" type="number" name="stok_produk" id="stok_produk" value="<?= $produk['stok_produk'] ?>">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="foto_produk">Foto produk</label>
            <div class="flex items-center">
                <input class="border px-4 py-1" placeholder="Foto Produk" type="file" name="foto_produk" id="foto_produk">
                <span><?= $produk['foto_produk'] ?></span>
            </div>
        </div>
        <div class="mb-3 flex flex-col">
            <button type="submit" name="update" class="bg-red-500 text-white rounded-lg px-3 py-2">Update</button>
        </div>
    </form>
</body>
</html>