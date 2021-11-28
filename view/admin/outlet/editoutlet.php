    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] != "admin") {
        header("location:index.php?pesan=gagal");
    }
    $id = $_GET['id'];
    require '../../../connection.php';
    include '../../../controller/model.php';
    $model = new Model();
    $data = $model->edit($id);
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
                            <a class="nav-link active" aria-current="page" href="halaman_admin.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../outlet/index.php">Outlet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../paket/index.php">Paket</a>
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

        <div class="container" style="margin:50px auto; width:80%;">
            <div class="card" style="
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius:10px;
        margin:50px auto;
        width:80%;
        padding:50px;
        ">
                <div class="card-body">
                    <h2>Form tambah data outlet</h2>
                    <form action="../../../controller/process.php" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID Outlet</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $data->id ?>" style="width:30%;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Outlet</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data->nama ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Outlet</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data->alamat ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon Outlet</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $data->telepon ?>">
                        </div>
                        <a href="../outlet/index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success" name="submit_edit">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>