
<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan Minimarket</title>
</head>
<body>
    <h1>TUGAS MATERI PERTEMUAN 10</h1>
    <h1>Data Penjualan Minimarket</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>

        <?php
        // Loop untuk menampilkan data penjualan
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td>" . $row['nama_barang'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['jumlah'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>





<!DOCTYPE html>
<html>
<head>
    <title>Input Data Penjualan Minimarket</title>
</head>
<body>
    <h1>Input Data Penjualan Minimarket</h1>

    <form method="post">
        <label> Tanggal:</label>
        <input type="date" name="tanggal"  required><br>

        <label> Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label>Harga:</label>
        <input type="number" name="harga"   required><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah"  required><br>

        <input type="submit" value="Simpan">
    </form>

</body>
</html>






<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Penjualan Minimarket</title>
</head>
<body>
    <h1>TUGAS MATERI PERTEMUAN 11 </h1>
    <h1>Edit Data Penjualan Minimarket</h1>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" required><br>

        <label>Nama Barang:</label>
        <input type="number" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required><br>

        <label>Harga:</label>
        <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>" required><br>

        <input type="submit" name="edit" value="Update">
    </form>

</body>
</html>












