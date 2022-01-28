    <?php
    session_start();

    if ($_SESSION['role'] != "admin") {
        header("location:#");
    }

    $id = $_GET['id'];
    require '../../../core/init.php';

    $model = new Model();
    $data = $model->edit_user($id);

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Laundry | Ubah Pengguna</title>
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
                    <form action="../../../core/controller.php?id=<?= $data->id; ?>" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data->nama ?>">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $data->username ?>">
                        </div>
                        <div class="mb-3">
                            <label for="id_outlet" class="form-label">ID Outlet</label>
                            <select id="id_outlet" class="form-select" name="id_outlet">
                                <option><?= $data->id_outlet; ?></option>
                                <?php
                                $result = $model->outlet();
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
                        <button type="submit" class="btn btn-success" name="edit_user">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
    </footer>

    </html>