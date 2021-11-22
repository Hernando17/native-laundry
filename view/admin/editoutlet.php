    <!DOCTYPE html>
    <html>

    <head>
        <title>Halaman admin</title>
        <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
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
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="outlet.php">Outlet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Paket</a>
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
            <h2>Form ubah data outlet</h2>
            <form action="#" method="post" class="mt-5">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Outlet</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Outlet</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon Outlet</label>
                    <input type="text" class="form-control" id="telepon">
                </div>
                <button type="submit" class="btn btn-success">Selesai</button>
            </form>
        </div>


    </body>

    </html>