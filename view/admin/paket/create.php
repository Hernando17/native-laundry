    <?php
    session_start();

    if ($_SESSION['role'] != "admin") {
        header("location:#");
    }

    require '../../../core/init.php';

    $model = new model();

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Laundry | Tambah Paket</title>
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
                    <h2>Form tambah data paket</h2>
                    <form action="../../../core/controller.php" method="post" class="mt-5">
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
                            <label for="jenis" class="form-label">Jenis</label>
                            <select id="jenis" class="form-select" name="jenis">
                                <option>kiloan</option>
                                <option>selimut</option>
                                <option>bed_cover</option>
                                <option>kaos</option>
                                <option>lain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_paket" class="form-label">Nama Paket</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                        <a href="index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success" name="create_paket">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>