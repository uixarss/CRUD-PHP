<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 10 | Apriansyah Rizqi Setiawan</title>
</head>

<body>
<form action="proses-input.php" method="POST">

<fieldset>

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
    <input type="submit" value="Daftar" name="simpan" />
</p>

</fieldset>

</form>

<br>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$produk['id']."</td>";
            echo "<td>".$produk['nama_produk']."</td>";
            echo "<td>".$produk['keterangan']."</td>";
            echo "<td>".$produk['harga']."</td>";
            echo "<td>".$produk['jumlah']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$produk['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$produk['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>