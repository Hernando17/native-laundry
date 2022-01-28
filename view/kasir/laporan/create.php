    <?php
    session_start();

    if ($_SESSION['role'] != "kasir") {
        header("location:#");
    }

    require '../../../core/init.php';

    $model = new model();

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Laundry | Tambah Laporan</title>
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
                    <h2>Form tambah data laporan</h2>
                    <form action="../../../core/controller.php" method="post" class="mt-5">
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
                        <a href="index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success" name="create_laporan">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>