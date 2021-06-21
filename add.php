<!DOCTYPE html>
<html>

<head>
    <title>Tambah Operator</title>
</head>

<body>
    <header>
        <h3>Menambahkan Operator baru</h3>
    </header>

    <form action="proses-add.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Kode: </label>
                <input type="text" name="kode" placeholder="Masukkan Kode" />
            </p>
            <p>
                <label for="alamat">Nama: </label>
                <textarea name="nama"></textarea>
            </p>
            <p>
                <input type="submit" value="Tambahkan Kode" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>