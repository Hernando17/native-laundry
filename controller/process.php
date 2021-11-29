<?php
require '../connection.php';
include 'model.php';

// Outlet 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->insert($nama, $alamat, $telepon);
    header('location:../view/admin/outlet/index.php');
}

if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->update($id, $nama, $alamat, $telepon);
    header('location:../view/admin/outlet/index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:../view/admin/outlet/index.php');
}

// Paket
if (isset($_POST['submit_paket'])) {
    $id_outlet = $_POST['id_outlet'];
    $jenis = $_POST['jenis'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->insert_paket($id_outlet, $jenis, $nama_paket, $harga);
    header('location:../view/admin/paket/index.php');
}

if (isset($_POST['submit_editpaket'])) {
    $id = $_POST['id'];
    $id_outlet = $_POST['id_outlet'];
    $jenis = $_POST['jenis'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->update_paket($id, $id_outlet, $jenis, $nama_paket, $harga);
    header('location:../view/admin/paket/index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_paket($id);
    header('location:../view/admin/paket/index.php');
}

// Pengguna
if (isset($_POST['submit_pengguna'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id_outlet = $_POST['id_outlet'];
    $model = new Model();
    $model->insert_pengguna($nama, $username, $password, $role, $id_outlet);
    header('location:../view/admin/pengguna/index.php');
}
