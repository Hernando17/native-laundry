<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-4" style="margin-top:100px;">
        <h2 class="text-center mb-5">Login Laundry</h2>
        <div class="card" style="
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius:10px;
        ">
            <div class="card-body">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                    }
                }
                ?>
                <form action="../cek_login.php" method="post" class="col-10" style="margin:30px;">
                    <div class="mb-3">
                        <label for="exampleInputusername1" class="form-label">Nama Pengguna</label>
                        <input type="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</footer>

</html>