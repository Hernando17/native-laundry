<?php

require "../core/init.php";

$auth = new Auth();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laundry</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center" style="padding:3%;">Login</h3>
        <div class="card col-8" style="
        width:40%;
        margin:50px auto;
        margin-top:1%;
        border-radius:10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        ">
            <div class="card-body">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "usernamesalah") {
                        echo "<div class='alert alert-danger'>Username salah</div>";
                    } else if ($_GET['pesan'] == "passwordsalah") {
                        echo "<div class='alert alert-danger'>Password salah</div>";
                    }
                }
                ?>
                <form action="../core/controller.php" method="post">
                    <div class="container col-10 mt-4 mb-4">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


<footer>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>