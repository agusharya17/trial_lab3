<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <title>Data Barang</title>
  <style>
    h1 {
      font-size: 28px;
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      border: 1px solid #ccc;
    }

    th {
      background-color: #4098BD;
      color: white;
    }

    td img {
      width: 50px;
      height: 50px;
    }

    td a {
      background-color: #3D494E;
      color: white;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 4px;
    }

    .button {
      background-color: #3D494E;
      font-size: 14px;
      color: white;
      padding: 8px 10px;
      text-align: center;
      text-decoration: none;
      border-radius: 4px;
      margin-top: 20px;
      float: right;
    }

    .preview img {
      width: 150%;
      height: auto;
    }

    </style
    </head>
    <body>
      <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
        
          <table>
          <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Katagori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
          <?php if ($result) : ?>
          <?php while ($row = mysqli_fetch_array($result)) : ?>
          <tr>
            <td><img src="<?= $row['Gambar']; ?>" alt="<?=
      $row['Nama']; ?>"></td>
            <td><?= $row['Nama']; ?></td>
            <td><?= $row['Kategori']; ?></td>
            <td><?= $row['Harga_Jual']; ?></td>
            <td><?= $row['Harga_Beli']; ?></td>
            <td><?= $row['Stok']; ?></td>
            <td><a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a> <a href="hapus.php?id=<?= $row['id_barang']; ?>">Hapus</a></td>
          </tr>
          <?php endwhile; else : ?>
          <tr>
            <td colspan="7">Belum ada data</td>
          </tr>
          <?php endif; ?>
          </table>
          <td><a class="button" href="tambah.php">Tambah Barang</a> 
        </div>
      </div>
    </body>
</html>