<?php

session_start();

class Auth extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function login($username, $password)
    {
        $admin = "SELECT * FROM user WHERE username='$username'";
        $bind = $this->conn->query($admin);
        $num = mysqli_num_rows($bind);

        if ($num > 0) {
            while ($obj = mysqli_fetch_array($bind)) {
                if (password_verify($password, $obj['password'])) {
                    if ($obj['role'] == "admin") {
                        $_SESSION['username'] = $username;
                        $_SESSION['role'] = "admin";
                        header("location:../view/admin/index.php");
                    }
                    if ($obj['role'] == "kasir") {
                        $_SESSION['username'] = $username;
                        $_SESSION['role'] = "kasir";
                        header("location:../view/kasir/index.php");
                    }
                    if ($obj['role'] == "owner") {
                        $_SESSION['username'] = $username;
                        $_SESSION['role'] = "owner";
                        header("location:../view/owner/index.php");
                    }
                } else if (!password_verify($password, $obj['password'])) {
                    header("location:../view/login.php?pesan=passwordsalah");
                }
            }
        } else {
            header("location:../view/login.php?pesan=usernamesalah");
        }
    }
}
