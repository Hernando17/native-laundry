    <?php
    session_start();

    if ($_SESSION['role'] != "admin") {
        header("location:#");
    }

    require '../../../core/init.php';

    $model = new Model();

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Laundry | Tambah Pengguna</title>
        <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    </head>

    <body>
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
                    <form action="../../../core/controller.php" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="id_outlet" class="form-label">ID Outlet</label>
                            <select id="id_outlet" class="form-select" name="id_outlet">
                                <?php
                                $result = $model->outlet();
                                foreach ($result as $data) : ?>
                                    <option><?= $data->id; ?></option>
                                <?php endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select id="role" class="form-select" name="role">
                                <option>admin</option>
                                <option>kasir</option>
                                <option>owner</option>
                            </select>
                        </div>

                        <a href="index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success" name="create_user">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>