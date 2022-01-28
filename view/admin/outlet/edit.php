    <?php
    session_start();

    if ($_SESSION['role'] != "admin") {
        header("location:#");
    }

    $id = $_GET['id'];
    require '../../../core/init.php';

    $model = new Model();
    $data = $model->edit_outlet($id);
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Laundry | Ubah Outlet</title>
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
                    <h2>Form ubah data outlet</h2>
                    <form action="../../../core/controller.php?id=<?= $id; ?>" method="post" class="mt-5">
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
                        <button type="submit" class="btn btn-success" name="edit_outlet">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>