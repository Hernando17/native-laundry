<?php
session_start();

if ($_SESSION['role'] != "admin") {
    header("location:#");
}

require '../../../core/init.php';

$model = new Model();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry | Data Paket</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>
    <?php
    require "../templates/navbar.php";
    ?>
    <div class="container" style="margin-top:50px; width:100%;">
        <div class="card" style="
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius:10px;
        margin:30px auto;
        ">
            <form action="../../../core/controller.php" method="get">
                <input type="text" class="form-control" name="search_p" />
                <button type="submit" class="btn btn-dark" name="search_paket">cari</button>
            </form>
            <div class="container">
                <a href="create.php" class="btn btn-success mt-3" style="margin-left:10px;">+</a>
                <div class="card" style="
        border-radius:10px;
        margin:20px auto;
        width:98%;
        ">
                    <table class="table" style="
            width:95%;
            margin:40px auto;

            ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Outlet </th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Harga</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $model->search_paket($_GET['search_p']);
                            foreach ($result as $data) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><?= $data->id_outlet ?></td>
                                    <td><?= $data->jenis ?></td>
                                    <td><?= $data->nama_paket ?></td>
                                    <td><?= $data->harga ?></td>
                                    <td>
                                        <a href="../../../view/admin/paket/edit.php?id=<?= $data->id ?>" class="btn btn-primary">Ubah</a>
                                        <form action="../../../core/controller.php?id=<?= $data->id ?>" method="post" class="mt-5 d-inline">
                                            <button type="submit" class="btn btn-danger" name="delete_paket" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach;

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>