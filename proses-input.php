<?php

include("config.php");

if(isset($_POST['simpan'])){

    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUE ('$nama_produk', '$keterangan', '$harga', '$jumlah')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>