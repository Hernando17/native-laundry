<?php
require '../../connection.php';
include '../../controller/model.php';
$model = new Model();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry | Data Outlet</title>
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Laundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="outlet.php">Outlet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Laporan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    <div class="container" style="margin:50px auto; width:80%;">
        <table class="table">
            <a href="#" class="btn btn-success mb-3">+</a>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <th scope="row"><?= $index++ ?></th>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->telepon ?></td>
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
</body>

</html>