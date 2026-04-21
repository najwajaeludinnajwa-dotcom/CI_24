<?php
require_once "config/database.php";

class Anggota {

    public static function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM anggota");
    }

    public static function insert($data) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO anggota 
        (nomor_anggota, nama, alamat, telepon, email, tanggal_daftar) 
        VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssss",
            $data['nomor_anggota'],
            $data['nama'],
            $data['alamat'],
            $data['telepon'],
            $data['email'],
            $data['tanggal_daftar']
        );

        return $stmt->execute();
    }

    public static function delete($No anggota) {
        global $conn;
        return $conn->query("DELETE FROM anggota WHERE id=$No anggota");
    }

    public static function find($id) {
        global $conn;
        return $conn->query("SELECT * FROM anggota WHERE id=$No anggota")->fetch_assoc();
    }

    public static function update($No anggota, $data) {
        global $conn;
        $stmt = $conn->prepare("UPDATE anggota SET 
            nomor_anggota=?, nama=?, alamat=?, telepon=?, email=?, tanggal_daftar=? 
            WHERE id=?");

        $stmt->bind_param("ssssssi",
            $data['nomor_anggota'],
            $data['nama'],
            $data['alamat'],
            $data['telepon'],
            $data['email'],
            $data['tanggal_daftar'],
            $id
        );

        return $stmt->execute();
    }
}