<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'connection.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['role'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:view/admin/halaman_admin.php");

        // cek jika user login sebagai kasir
    } else if ($data['role'] == "kasir") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "kasir";
        // alihkan ke halaman dashboard kasir
        header("location:view/kasir/halaman_kasir.php");

        // cek jika user login sebagai owner
    } else if ($data['role'] == "owner") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "owner";
        // alihkan ke halaman dashboard owner
        header("location:view/owner/halaman_owner.php");
    }
} else {
    header("location:view/index.php?pesan=gagal");
}
