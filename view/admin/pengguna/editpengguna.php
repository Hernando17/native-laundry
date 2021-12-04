    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] != "admin") {
        header("location:index.php?pesan=gagal");
    }
    $id = $_GET['id'];
    require '../../../connection.php';
    include '../../../controller/model.php';

    $model = new model();
    $data = $model->edit_pengguna($id);

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
                            <a class="nav-link" href="../pengguna/index.php">Pengguna</a>
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
                    <h2>Form tambah data pengguna</h2>
                    <form action="../../../controller/process.php" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $data->id ?>" style="width:30%;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data->nama ?>">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $data->username ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= $data->password ?>">
                        </div>
                        <div class="mb-3">
                            <label for="id_outlet" class="form-label">ID Outlet</label>
                            <select id="id_outlet" class="form-select" name="id_outlet">
                                <option><?= $data->id_outlet; ?></option>
                                <?php
                                $result = $model->tampil();
                                foreach ($result as $d) : ?>
                                    <option><?= $d->id; ?></option>
                                <?php endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select id="role" class="form-select" name="role">
                                <option><?= $data->role ?></option>
                                <option>admin</option>
                                <option>kasir</option>
                                <option>owner</option>
                            </select>
                        </div>

                        <a href="index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit_editpengguna" class="btn btn-success" name="submit_editpengguna">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>