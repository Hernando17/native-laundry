<?php

$koneksi = mysqli_connect("localhost", "root", "", "laundry3");

// Check Connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

class Connection
{
    public function get_connection()
    {
        $host = "localhost";
        $database = "laundry3";
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
