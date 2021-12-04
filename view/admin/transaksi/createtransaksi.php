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
                    <h2>Form tambah data paket</h2>
                    <form action="../../../controller/process.php" method="post" class="mt-5">
                        <div class="mb-3">
                            <label for="id_outlet" class="form-label">ID Outlet</label>
                            <select id="id_outlet" class="form-select" name="id_outlet">
                                <?php
                                $result = $model->tampil();
                                foreach ($result as $data) : ?>
                                    <option><?= $data->id; ?></option>
                                <?php endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kode_invoice" class="form-label">Kode Invoice</label>
                            <input type="text" class="form-control" id="kode_invoice" name="kode_invoice">
                        </div>
                        <div class="mb-3">
                            <label for="id_member" class="form-label">ID Member</label>
                            <select id="id_member" class="form-select" name="id_member">
                                <?php
                                $result = $model->member();
                                foreach ($result as $data) : ?>
                                    <option><?= $data->id; ?></option>
                                <?php endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="batas_waktu" class="form-label">Batas Waktu</label>
                            <input type="date" class="form-control" id="batas_waktu" name="batas_waktu">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_bayar" class="form-label">Tanggal Bayar</label>
                            <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar">
                        </div>
                        <div class="mb-3">
                            <label for="biaya_tambahan" class="form-label">Biaya Tambahan</label>
                            <input type="text" class="form-control" id="biaya_tambahan" name="biaya_tambahan">
                        </div>
                        <div class="mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon">
                        </div>
                        <div class="mb-3">
                            <label for="pajak" class="form-label">Pajak</label>
                            <input type="text" class="form-control" id="pajak" name="pajak">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select" name="status">
                                <option>baru</option>
                                <option>proses</option>
                                <option>selesai</option>
                                <option>diambil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dibayar" class="form-label">Dibayar</label>
                            <select id="dibayar" class="form-select" name="dibayar">
                                <option>dibayar</option>
                                <option>belum_dibayar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_user" class="form-label">ID User</label>
                            <select id="id_user" class="form-select" name="id_user">
                                <option><?= $data->id; ?></option>
                            </select>
                        </div>
                        <a href="paket.php" class="btn btn-primary">Kembali</a>
                        <button type="submit_transaksi" class="btn btn-success" name="submit_transaksi">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>