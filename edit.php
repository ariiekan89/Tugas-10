<?php

include("tersambung.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM operator WHERE id=$id";
$query = mysqli_query($db, $sql);
$kode = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $kode['id'] ?>" />

            <p>
                <label for="nama">Kode: </label>
                <input type="text" name="kode" placeholder="Masukkan Kode" value="<?php echo $kode['kode'] ?>" />
            </p>
            <p>
                <label for="nim">Nama: </label>
                <input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $kode['nama'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>