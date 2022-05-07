<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-tamu.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM buku_tamu WHERE id_bt=$id";
$query = mysqli_query($db, $sql);
$tamu = mysqli_fetch_assoc($query);

// jika data yang di edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku Tamu</title>
</head>

<body>
    <header>
        <h3>Edit Buku Tamu</h3>
    </header>
    <form action="proses-edit.php" method="POST">

        <fieldset>
            <input type="hidden" name="id" value="<?php echo $tamu['id_bt'] ?>" />
            <p>
                <label for="id_bt">ID : </label>
                <input type="text" name="id_bt" placeholder="ID buku tamu">
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="nama lengkap">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="text" name="email" placeholder="email">
            </p>
            <p>
                <label for="isi">Isi : </label>
                <textarea name="isi" placeholder="tuliskan kesan dan pesan"></textarea>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>
    </form>
</body>

</html>