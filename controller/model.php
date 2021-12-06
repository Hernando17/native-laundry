<?php

class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM outlet";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function insert($nama, $alamat, $telepon)
    {
        $sql = "INSERT INTO outlet (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
        $this->conn->query($sql);
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM outlet WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update($id, $nama, $alamat, $telepon)
    {
        $sql = "UPDATE outlet SET nama='$nama', alamat='$alamat', telepon='$telepon' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM outlet WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function paket()
    {
        $sql = "SELECT * FROM paket";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function insert_paket($id_outlet, $jenis, $nama_paket, $harga)
    {
        $sql = "INSERT INTO paket (id_outlet, jenis, nama_paket, harga) VALUES ('$id_outlet', '$jenis', '$nama_paket', '$harga')";
        $this->conn->query($sql);
    }

    public function delete_paket($id)
    {
        $sql = "DELETE FROM paket WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function edit_paket($id)
    {
        $sql = "SELECT * FROM paket WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_paket($id, $id_outlet, $jenis, $nama_paket, $harga)
    {
        $sql = "UPDATE paket SET id_outlet='$id_outlet', jenis='$jenis', nama_paket='$nama_paket', harga='$harga' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function pengguna()
    {
        $sql = "SELECT * FROM user";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }

    public function insert_pengguna($nama, $username, $password, $role, $id_outlet)
    {
        $sql = "INSERT INTO user (nama, username, password, role, id_outlet) VALUES ('$nama', '$username', '$password', '$role', '$id_outlet')";
        $bind = $this->conn->query($sql);
    }

    public function edit_pengguna($id)
    {
        $sql = "SELECT * FROM user WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_pengguna($id, $nama, $username, $password, $role, $id_outlet)
    {
        $sql = "UPDATE user SET nama='$nama', username='$username', password='$password', role='$role', id_outlet='$id_outlet' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete_pengguna($id)
    {
        $sql = "DELETE FROM user WHERE id='$id'";
        $bind = $this->conn->query($sql);
    }

    public function member()
    {
        $sql = "SELECT * FROM member";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function insert_member($nama, $alamat, $jenis_kelamin, $telepon)
    {
        $sql = "INSERT INTO member (nama, alamat, jenis_kelamin, telepon) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$telepon')";
        $bind = $this->conn->query($sql);
    }

    public function delete_member($id)
    {
        $sql = "DELETE FROM member WHERE id='$id'";
        $bind = $this->conn->query($sql);
    }

    public function transaksi()
    {
        $sql = "SELECT * FROM transaksi";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function insert_transaksi($id_outlet, $kode_invoice, $id_member, $tanggal, $batas_waktu, $tanggal_bayar, $biaya_tambahan, $diskon, $pajak, $status, $dibayar, $id_user)
    {
        $sql = "INSERT INTO transaksi (id_outlet, kode_invoice, id_member, tanggal, batas_waktu, tanggal_bayar, biaya_tambahan, diskon, pajak, status, dibayar, id_user) VALUES ('$id_outlet', 'LN$kode_invoice', '$id_member', '$tanggal', '$batas_waktu', '$tanggal_bayar', '$biaya_tambahan', '$diskon', '$pajak', '$status', '$dibayar', '$id_user')";
        $bind = $this->conn->query($sql);
    }

    public function edit_transaksi($id)
    {
        $sql = "SELECT * FROM transaksi WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_transaksi($id, $id_outlet, $kode_invoice, $id_member, $tanggal, $batas_waktu, $tanggal_bayar, $biaya_tambahan, $diskon, $pajak, $status, $dibayar, $id_user)
    {
        $sql = "UPDATE transaksi SET id_outlet='$id_outlet', kode_invoice='LN$kode_invoice', id_member='$id_member', tanggal='$tanggal', batas_waktu='$batas_waktu', tanggal_bayar='$tanggal_bayar', biaya_tambahan='$biaya_tambahan', diskon='$diskon', pajak='$pajak', status='$status', dibayar='$dibayar', id_user='$id_user' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete_transaksi($id)
    {
        $sql = "DELETE FROM transaksi WHERE id='$id'";
        $bind = $this->conn->query($sql);
    }

    public function laporan()
    {
        $sql = "SELECT * FROM detail_transaksi";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function insert_laporan($id_transaksi, $id_paket, $qty, $keterangan)
    {
        $sql = "INSERT INTO detail_transaksi (id_transaksi, id_paket, qty, keterangan) VALUES ('$id_transaksi', '$id_paket', '$qty', '$keterangan')";
        $bind = $this->conn->query($sql);
    }

    public function delete_laporan($id)
    {
        $sql = "DELETE FROM detail_transaksi WHERE id='$id'";
        $bind = $this->conn->query($sql);
    }

    public function printlaporan($id)
    {
        $sql = "SELECT * FROM detail_transaksi WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
}
