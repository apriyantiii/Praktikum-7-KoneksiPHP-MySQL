<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku Tamu</title>
</head>

<body>
    <header>
        <h3>Tamu yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM buku_tamu";
            $query = mysqli_query($db, $sql);

            while ($tamu = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $tamu['id_bt'] . "</td>";
                echo "<td>" . $tamu['nama'] . "</td>";
                echo "<td>" . $tamu['email'] . "</td>";
                echo "<td>" . $tamu['isi'] . "</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=" . $tamu['id_bt'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $tamu['id_bt'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>