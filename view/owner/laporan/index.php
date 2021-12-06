<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] != "owner") {
    header("location:index.php?pesan=gagal");
}
require '../../../connection.php';
include '../../../controller/model.php';
$model = new Model();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry | Data Laporan</title>
    <link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Laundry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../halaman_owner.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../laporan/index.php">Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top:50px; width:100%;">
        <div class="card" style="
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius:10px;
        margin:30px auto;
        ">
            <div class="container">
                <div class="card" style="
        border-radius:10px;
        margin:20px auto;
        margin-top:50px;
        width:98%;
        ">
                    <table class="table" style="
            width:95%;
            margin:40px auto;
            ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">ID Paket</th>
                                <th scope="col">Qty</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $model->laporan();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                                    <tr>
                                        <th scope="row"><?= $index++ ?></th>
                                        <td><?= $data->id_transaksi ?></td>
                                        <td><?= $data->id_paket ?></td>
                                        <td><?= $data->qty ?></td>
                                        <td>

                                            <a href="printlaporan.php?id=<?= $data->id ?>" class="btn btn-dark">Print</a>
                                            <form action="../../../controller/process.php?id=<?= $data->id ?>" method="post" class="mt-5 d-inline">
                                                <button type="submit_deletelaporan" class="btn btn-danger" name="submit_deletelaporan" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else { ?>
                                </tr>
                                <td colspan="9">Belum ada data pada tabel outlet</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>