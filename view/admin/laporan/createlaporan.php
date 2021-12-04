    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] != "admin") {
        header("location:index.php?pesan=gagal");
    }

    require '../../../connection.php';
    include '../../../controller/model.php';

    $model = new model();

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Halaman admin</title>
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
                            <a class="nav-link active" aria-current="page" href="../../../view/admin/halaman_admin.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../outlet/index.php">Outlet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../paket/index.php">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pengguna/index.php">Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../member/index.php">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../transaksi/index.php">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../laporan/index.php">Laporan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin:50px auto; width:80%;">
            <div class="card" style="
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius:10px;
        margin:50px auto;
        width:80%;
        padding:50px;
        ">
                <div class="card-body">
                    <h2>Form tambah data laporan</h2>
                    <form action="../../../controller/process.php" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="id_transaksi" class="form-label">ID Transaksi</label>
                            <select id="id_transaksi" class="form-select" name="id_transaksi">
                                <?php
                                $result = $model->transaksi();
                                foreach ($result as $data) : ?>
                                    <option><?= $data->id; ?></option>
                                <?php endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_paket" class="form-label">ID Paket</label>
                            <select id="id_paket" class="form-select" name="id_paket">
                                <?php
                                $result = $model->paket();
                                foreach ($result as $data) : ?>
                                    <option><?= $data->id; ?></option>
                                <?php endforeach;
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="qty" class="form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <a href="paket.php" class="btn btn-primary">Kembali</a>
                        <button type="submit_laporan" class="btn btn-success" name="submit_laporan">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>