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
}
