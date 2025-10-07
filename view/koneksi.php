<?php
$host = "localhost";
$db = "cinematicket";
$user = "root";
$pass = "Dzakwann033";

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli($host, $user, $pass, $db);

    echo "Koneksi berhasil!";
} catch (mysqli_sql_exception $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}
