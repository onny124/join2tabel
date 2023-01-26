<!DOCTYPE html>
<html lang="en">
<head>
    <title>Join Tabel</title>
</head>
<body>
    <a href="tambah.php"><input type="button" value="tambah"></a>
<table border="1">
    <tr>
        <td>No.</td>
        <td>Nama Barang</td>
        <td>Kategori Barang</td>
        <td>Nama Karyawan</td>
        <td>Divisi</td>
        <td>Jabatan</td>
        <td>Aksi</td>
</tr>
<?php
include("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_barang 
INNER JOIN tb_karyawan ON tb_barang.id_karyawan = tb_karyawan.id_karyawan");
$no = 1;
foreach ($query as $row):
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_barang']; ?></td>
    <td><?= $row['kategori_barang']; ?></td>
    <td><?= $row['nama_karyawan']; ?></td>
    <td><?= $row['divisi']; ?></td>
    <td><?= $row['jabatan']; ?></td>
    <td>
        <a href="edit.php?id_barang=<?php echo $row['id_barang']; ?>">EDIT||</a>
        <a href="hapus.php?id_barang=<?php echo $row['id_barang']; ?>">HAPUS||</a>
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>