<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] != "kasir") {
    header("location:index.php?pesan=gagal");
}
$id = $_GET['id'];
require '../../../connection.php';
include '../../../controller/model.php';
$model = new Model();
$data = $model->printlaporan($id);
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="judul">LAUNDRY CUCI BERSIH</h1>
        <hr>
        <h2 class="judul">LAPORAN</h2>
        <br>
        <table class="panjang">
            <tr>
                <th>ID Transaksi</th>
                <th>ID Paket</th>
                <th>Qty</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td><?= $data->id_transaksi ?></td>
                <td><?= $data->id_paket ?></td>
                <td><?= $data->qty ?></td>
                <td><?= $data->keterangan ?></td>
            </tr>
        </table>
    </div>
</body>
<footer>
    <script>
        window.print();
    </script>
</footer>

</html>