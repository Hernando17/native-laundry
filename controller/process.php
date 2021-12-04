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

if (isset($_POST['submit_editpengguna'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id_outlet = $_POST['id_outlet'];
    $model = new Model();
    $model->update_pengguna($id, $nama, $username, $password, $role, $id_outlet);
    header('location:../view/admin/pengguna/index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_pengguna($id);
    header('location:../view/admin/pengguna/index.php');
}

// Pelanggan
if (isset($_POST['submit_member'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->insert_member($nama, $alamat, $jenis_kelamin, $telepon);
    header('location:../view/admin/member/index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_member($id);
    header('location:../view/admin/member/index.php');
}

// Transaksi
if (isset($_POST['submit_transaksi'])) {
    $id_outlet = $_POST['id_outlet'];
    $kode_invoice = $_POST['kode_invoice'];
    $id_member = $_POST['id_member'];
    $tanggal = $_POST['tanggal'];
    $batas_waktu = $_POST['batas_waktu'];
    $tanggal_bayar = $_POST['tanggal_bayar'];
    $biaya_tambahan = $_POST['biaya_tambahan'];
    $diskon = $_POST['diskon'];
    $pajak = $_POST['pajak'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $id_user = $_POST['id_user'];
    $model = new Model();
    $model->insert_transaksi($id_outlet, $kode_invoice, $id_member, $tanggal, $batas_waktu, $tanggal_bayar, $biaya_tambahan, $diskon, $pajak, $status, $dibayar, $id_user);
    header('location:../view/admin/transaksi/index.php');
}

if (isset($_POST['submit_edittransaksi'])) {
    $id = $_POST['id'];
    $id_outlet = $_POST['id_outlet'];
    $kode_invoice = $_POST['kode_invoice'];
    $id_member = $_POST['id_member'];
    $tanggal = $_POST['tanggal'];
    $batas_waktu = $_POST['batas_waktu'];
    $tanggal_bayar = $_POST['tanggal_bayar'];
    $biaya_tambahan = $_POST['biaya_tambahan'];
    $diskon = $_POST['diskon'];
    $pajak = $_POST['pajak'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $id_user = $_POST['id_user'];
    $model = new Model();
    $model->update_transaksi($id, $id_outlet, $kode_invoice, $id_member, $tanggal, $batas_waktu, $tanggal_bayar, $biaya_tambahan, $diskon, $pajak, $status, $dibayar, $id_user);
    header('location:../view/admin/transaksi/index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_transaksi($id);
    header('location:../view/admin/transaksi/index.php');
}
