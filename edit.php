<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Tugas 10 | Apriansyah Rizqi Setiawan</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <p>
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="Nama Produk" />
        </p>
        <p>
            <label for="keterangan">Keterangan Produk: </label>
            <textarea name="keterangan"></textarea>
        </p>
        <p>
            <label for="harga">Harga Produk: </label>
            <input type="number" name="harga" placeholder="Harga Produk" />
        </p>
        <p>
            <label for="jumlah">Jumlah Produk: </label>
            <input type="number" name="jumlah" placeholder="Jumlah Produk" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>