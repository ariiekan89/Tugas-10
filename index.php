<?php include("tersambung.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Operator Crud</title>
</head>

<body>

    <nav>
        <a href="add.php">[+] Tambah Baru</a>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Operator berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
        Hasilnya:
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th></th>
                <th>Kode</th>
                <th>Nama </th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $sql = "SELECT * FROM operator";
        $query = mysqli_query($db, $sql);

        while($op = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$op['kode']."</td>";
            echo "<td>".$op['nama']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$op['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$op['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>