<?php

session_start();

require_once "init.php";


// Auth
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $auth = new Auth();
    $auth->login($username, $password);
}

if (isset($_POST['create_user'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_outlet = $_POST['id_outlet'];
    $role = $_POST['role'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $model = new Model();
    $model->create_user($nama, $username, $password, $id_outlet, $role);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/pengguna/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/pengguna/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/pengguna/index.php");
    }
}

if (isset($_POST['edit_user'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $id_outlet = $_POST['id_outlet'];
    $role = $_POST['role'];
    $model = new Model();
    $model->update_user($id, $nama, $username, $id_outlet, $role);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/pengguna/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/pengguna/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/pengguna/index.php");
    }
}

if (isset($_POST['delete_user'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_user($id);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/pengguna/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/pengguna/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/pengguna/index.php");
    }
}

// Outlet
if (isset($_POST['create_outlet'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->create_outlet($nama, $alamat, $telepon);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/outlet/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/outlet/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/outlet/index.php");
    }
}

if (isset($_POST['edit_outlet'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->update_outlet($id, $nama, $alamat, $telepon);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/outlet/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/outlet/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/outlet/index.php");
    }
}

if (isset($_POST['delete_outlet'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_outlet($id);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/outlet/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/outlet/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/outlet/index.php");
    }
}

// Paket
if (isset($_POST['create_paket'])) {
    $id_outlet = $_POST['id_outlet'];
    $jenis = $_POST['jenis'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->create_paket($id_outlet, $jenis, $nama_paket, $harga);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/paket/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/paket/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/paket/index.php");
    }
}

if (isset($_POST['edit_paket'])) {
    $id = $_GET['id'];
    $id_outlet = $_POST['id_outlet'];
    $jenis = $_POST['jenis'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->update_paket($id, $id_outlet, $jenis, $nama_paket, $harga);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/paket/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/paket/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/paket/index.php");
    }
}

if (isset($_POST['delete_paket'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_paket($id);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/paket/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/paket/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/paket/index.php");
    }
}

// Member
if (isset($_POST['create_member'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->create_member($nama, $alamat, $jenis_kelamin, $telepon);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/member/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/member/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/member/index.php");
    }
}

if (isset($_POST['edit_member'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telepon = $_POST['telepon'];
    $model = new Model();
    $model->update_member($id, $nama, $alamat, $jenis_kelamin, $telepon);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/member/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/member/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/member/index.php");
    }
}

if (isset($_POST['delete_member'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_member($id);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/member/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/member/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/member/index.php");
    }
}

// Transaksi
if (isset($_POST['create_transaksi'])) {
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
    $model->create_transaksi($id_outlet, $kode_invoice, $id_member, $tanggal, $batas_waktu, $tanggal_bayar, $biaya_tambahan, $diskon, $pajak, $status, $dibayar, $id_user);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/transaksi/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/transaksi/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/transaksi/index.php");
    }
}

if (isset($_POST['edit_transaksi'])) {
    $id = $_GET['id'];
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
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/transaksi/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/transaksi/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/transaksi/index.php");
    }
}

if (isset($_POST['delete_transaksi'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_transaksi($id);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/transaksi/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/transaksi/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/transaksi/index.php");
    }
}

// Laporan
if (isset($_POST['create_laporan'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_paket = $_POST['id_paket'];
    $qty = $_POST['qty'];
    $keterangan = $_POST['keterangan'];
    $model = new Model();
    $model->create_laporan($id_transaksi, $id_paket, $qty, $keterangan);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/laporan/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/laporan/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/laporan/index.php");
    }
}

if (isset($_POST['delete_laporan'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_laporan($id);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/laporan/index.php");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/laporan/index.php");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/laporan/index.php");
    }
}

if (isset($_GET['search_transaksi'])) {
    $search_t = $_GET['search_t'];
    $model = new Model();
    $model->search_transaksi($search_t);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/transaksi/search.php?search_t=$search_t");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/transaksi/search.php?search_t=$search_t");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/transaksi/search.php?search_t=$search_t");
    }
}

if (isset($_GET['search_outlet'])) {
    $search_o = $_GET['search_o'];
    $model = new Model();
    $model->search_outlet($search_0);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/outlet/search.php?search_o=$search_o");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/outlet/search.php?search_o=$search_o");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/outlet/search.php?search_o=$search_o");
    }
}

if (isset($_GET['search_laporan'])) {
    $search_l = $_GET['search_l'];
    $model = new Model();
    $model->search_laporan($search_l);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/laporan/search.php?search_l=$search_l");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/laporan/search.php?search_l=$search_l");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/laporan/search.php?search_l=$search_l");
    }
}

if (isset($_GET['search_pengguna'])) {
    $search_pe = $_GET['search_pe'];
    $model = new Model();
    $model->search_pengguna($search_pe);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/pengguna/search.php?search_pe=$search_pe");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/pengguna/search.php?search_pe=$search_pe");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/pengguna/search.php?search_pe=$search_pe");
    }
}

if (isset($_GET['search_paket'])) {
    $search_p = $_GET['search_p'];
    $model = new Model();
    $model->search_laporan($search_p);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/paket/search.php?search_p=$search_p");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/paket/search.php?search_p=$search_p");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/paket/search.php?search_p=$search_p");
    }
}

if (isset($_GET['search_member'])) {
    $search_m = $_GET['search_m'];
    $model = new Model();
    $model->search_member($search_m);
    if ($_SESSION['role'] == "admin") {
        header("location:../view/admin/member/search.php?search_m=$search_m");
    } else if ($_SESSION['role'] == "kasir") {
        header("location:../view/kasir/member/search.php?search_m=$search_m");
    } else if ($_SESSION['role'] == "owner") {
        header("location:../view/owner/member/search.php?search_m=$search_m");
    }
}
