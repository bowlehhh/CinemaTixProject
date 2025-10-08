<?php
// controller/AdminController.php

class AdminController
{
    // Method default: dashboard admin
    public function panel()
    {
        include 'view/admin/panel.php';
    }

    // Menampilkan halaman kelola film
    public function kelolaFilm()
    {
        echo "ini anjaiii";
    }
    public function kelolaTiket()
    {
        // nanti bisa ambil data tiket dari database di sini
        include 'view/admin/kelolaTiket.php';
    }

    // Menambahkan film baru (contoh sederhana)
    public function tambahFilm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // contoh sederhana — nanti disambung ke database
            $judul = $_POST['judul'] ?? '';
            $genre = $_POST['genre'] ?? '';
            $durasi = $_POST['durasi'] ?? '';

            // misal simpan ke database di sini...
            echo "<p>Film '$judul' berhasil ditambahkan!</p>";
        }

        include 'view/admin/tambahFilm.php';
    }
}
