<?php
require '../connection.php';
include 'model.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->insert($nama, $alamat, $telepon);
    header('location:../view/admin/outlet.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:../view/admin/outlet.php');
}

if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->update($id, $nama, $alamat, $telepon);
    header('location:../view/admin/outlet.php');
}
