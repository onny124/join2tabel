<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Barang</title>
</head>
<body>
    <table border = "0">
        <h1>Input Data Barang</h1>
        <form action = "proses_tambah.php" method = "POST">
            <form>
                <fieldset>
                    <p>
                    <label for="nama_barang">Nama Barang :</label>
                    <input type="text" name="nama_barang"/>
</p>
<p>
    <label for="kategori_barang">Kategori Barang :</label>
    <input type="text" name="kategori_barang"/>
</p>
<p>
    <label for="nama_karyawan">Nama Karyawan :</label>
    <input type="text" name="nama_karyawan"/>
</p>
<p>
    <label for="divisi">Divisi :</label>
    <input type="text" name="divisi"/>
</p>
<p>
    <label for="jabatan">Jabatan :</label>
    <input type="text" name="jabatan"/>
</p>
<p>
    <input type="submit" value="kirim data" name="kirim_data"/>
</p>
</fieldset>
</form>
</body>
</html>