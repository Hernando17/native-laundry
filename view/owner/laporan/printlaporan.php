<?php
session_start();

if ($_SESSION['role'] != "owner") {
    header("location:#");
}

$id = $_GET['id'];
require '../../../core/init.php';
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
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>

    <h1>LAUNDRY CUCI BERSIH</h1>
    <hr>
    <h2>LAPORAN</h2>
    <br>

    <table class="table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Paket</th>
                <th>Qty</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $data->id_transaksi ?></td>
                <td><?= $data->id_paket ?></td>
                <td><?= $data->qty ?></td>
                <td><?= $data->keterangan ?></td>
            </tr>
        </tbody>
    </table>

</body>
<footer>
    <script>
        window.print();
    </script>
</footer>

</html>