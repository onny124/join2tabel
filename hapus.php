<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$id = $_GET['id_barang'];

//menghapus data dari database
mysqli_query($db, "DELETE from tb_karyawan where id_karyawan ='$id'");
mysqli_query($db, "DELETE from tb_barang where id_barang ='$id'");

//mengalihkan halaman kembali ke index.php
header("location:join_tabel.php");
?>