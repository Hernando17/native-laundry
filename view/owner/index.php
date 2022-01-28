<?php

session_start();

if ($_SESSION['role'] != "owner") {
    header("location:#");
}

require_once "../../core/init.php";

$model = new Model();
$data = $model->profile();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin | Laundry</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Laundry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../owner/laporan/index.php">Laporan</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['username']; ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="../../view/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
    </nav>


    <div class="container mt-5">
        <div class="card col-8" style="
    margin:50px auto;
    padding:50px;
    border-radius:10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    ">
            <div class="card-body">
                <div class="container">
                    <h3>Selamat datang di situs Laundry</h3>
                    <h5>Anda berhasil login sebagai admin</h5>
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>