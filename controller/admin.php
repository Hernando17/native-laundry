<?php
include 'model.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->insert($nama, $alamat, $telepon);
    header('location:view/outlet.php');
}
