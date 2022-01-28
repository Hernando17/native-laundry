<?php

class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function profile()
    {
        $sql = "SELECT * FROM user";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function create_user($nama, $username, $password, $id_outlet, $role)
    {
        $sql = "INSERT INTO user (nama, username, password, id_outlet, role) VALUES ('$nama', '$username', '$password', '$id_outlet', '$role')";
        $bind = $this->conn->query($sql);
    }

    public function edit_user($id)
    {
        $sql = "SELECT * FROM user WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_user($id, $nama, $username, $id_outlet, $role)
    {
        $sql = "UPDATE user SET nama='$nama', username='$username', role='$role', id_outlet='$id_outlet' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete_user($id)
    {
        $sql = "DELETE FROM user WHERE id='$id'";
        $bind = $this->conn->query($sql);
    }

    public function outlet()
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

    public function create_outlet($nama, $alamat, $telepon)
    {
        $sql = "INSERT INTO outlet (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
        $this->conn->query($sql);
    }

    public function edit_outlet($id)
    {
        $sql = "SELECT * FROM outlet WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_outlet($id, $nama, $alamat, $telepon)
    {
        $sql = "UPDATE outlet SET nama='$nama', alamat='$alamat', telepon='$telepon' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete_outlet($id)
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

    public function create_paket($id_outlet, $jenis, $nama_paket, $harga)
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

        if (!empty($baris)) {
            return $baris;
        }
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

    public function edit_member()
    {
        $sql = "SELECT * FROM member";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_member($id, $nama, $alamat, $jenis_kelamin, $telepon)
    {
        $sql = "UPDATE member SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', telepon='$telepon' WHERE id='$id'";
        $bind = $this->conn->query($sql);
    }

    public function create_member($nama, $alamat, $jenis_kelamin, $telepon)
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

    public function create_transaksi($id_outlet, $kode_invoice, $id_member, $tanggal, $batas_waktu, $tanggal_bayar, $biaya_tambahan, $diskon, $pajak, $status, $dibayar, $id_user)
    {
        $sql = "INSERT INTO transaksi (id_outlet, kode_invoice, id_member, tanggal, batas_waktu, tanggal_bayar, biaya_tambahan, diskon, pajak, status, dibayar, id_user) VALUES ('$id_outlet', '$kode_invoice', '$id_member', '$tanggal', '$batas_waktu', '$tanggal_bayar', '$biaya_tambahan', '$diskon', '$pajak', '$status', '$dibayar', '$id_user')";
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

    public function create_laporan($id_transaksi, $id_paket, $qty, $keterangan)
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

    public function search_transaksi($search_t)
    {
        $sql = "SELECT * FROM transaksi WHERE id_outlet LIKE '%$search_t%' OR kode_invoice LIKE '%$search_t%' OR id_member LIKE '%$search_t%' OR tanggal LIKE '%$search_t%' OR batas_waktu LIKE '%$search_t%' OR tanggal_bayar LIKE '%$search_t%' OR status LIKE '%$search_t%' OR dibayar LIKE '%$search_t%' OR id_user LIKE '%$search_t%'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }

    public function search_outlet($search_o)
    {
        $sql = "SELECT * FROM outlet WHERE id LIKE '%$search_o%' OR nama LIKE '%$search_o' OR alamat LIKE '%$search_o' OR telepon LIKE '%$search_o'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }

    public function search_laporan($search_l)
    {
        $sql = "SELECT * FROM detail_transaksi WHERE id LIKE '%$search_l%' OR id_transaksi LIKE '%$search_l%' OR qty LIKE '%$search_l%'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }

    public function search_pengguna($search_pe)
    {
        $sql = "SELECT * FROM user WHERE id LIKE '%$search_pe%' OR nama LIKE '%$search_pe%' OR username LIKE '%$search_pe%' OR id_outlet LIKE '%$search_pe%' OR role LIKE '%$search_pe%' ";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }

    public function search_paket($search_p)
    {
        $sql = "SELECT * FROM paket WHERE id LIKE '%$search_p%' OR id_outlet LIKE '%$search_p%' OR jenis LIKE '%$search_p%' OR nama_paket LIKE '%$search_p%' OR harga LIKE '%$search_p%' ";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }

    public function search_member($search_m)
    {
        $sql = "SELECT * FROM member WHERE id LIKE '%$search_m%' OR nama LIKE '%$search_m%' OR alamat LIKE '%$search_m%' OR jenis_kelamin LIKE '%$search_m%' OR telepon LIKE '%$search_m%'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }
}
