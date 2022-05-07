<?php

include("config.php");

//cek apakah tombol daftar sudah di klik atau belum
if (isset($_POST['daftar'])) {

    //ambil data dari formulir
    $id_bt = $_POST['id_bt'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    //buat query
    $sql = "INSERT INTO buku_tamu (id_bt, nama, email, isi) VALUE ('$id_bt', '$nama', '$email', '$isi')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status = sukses
        header('Location: index.php?status=sukses');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status = gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
