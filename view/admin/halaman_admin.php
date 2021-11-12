    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Halaman admin</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
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
                            <a class="nav-link" href="#">Outlet</a>
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
        <h1>Halaman Admin</h1>

        <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
        <a href="../logout.php">LOGOUT</a>

    </body>

    </html>