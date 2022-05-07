<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
</head>

<body>
    <header>
        <h3>Buku Tamu Pengunjung</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Buku Tamu Baru</a><br><br></li>
            <li><a href="list-tamu.php">Lihat Buku Tamu</a></li>
        </ul>
    </nav>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Input daftar buku tamu berhasil! Bisa di cek di Lihat Buku Tamu";
            } else {
                echo "Input buku tamu gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
</body>

</html>