    <?php
    session_start();

    if ($_SESSION['role'] != "admin") {
        header("location:#");
    }
    $id = $_GET['id'];
    require '../../../core/init.php';
    $model = new Model();
    $data = $model->edit_member($id);


    $model = new model();

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Laundry | Tambah Pelanggan</title>
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
                    <h2>Form tambah data member</h2>
                    <form action="../../../core/controller.php?id=<?= $id; ?>" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data->nama; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data->alamat; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                <option><?= $data->jenis_kelamin; ?></option>
                                <option>laki-laki</option>
                                <option>perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $data->telepon; ?>">
                        </div>
                        <a href="index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success" name="edit_member">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
    </footer>

    </html>