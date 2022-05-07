<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Buku Tamu</title>
</head>

<body>
    <header>
        <h3>Formulir Buku Tamu</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
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
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>

</html>