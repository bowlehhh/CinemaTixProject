<?php
// koneksi.php
$host = "localhost";
$db = "cinematicket";
$user = "root";
$pass = "Dzakwann03";

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $mysqli = new mysqli($host, $user, $pass, $db);
    
    // Set charset untuk prevent encoding issues
    $mysqli->set_charset("utf8mb4");
    
    // echo "Koneksi berhasil!"; // Comment ini untuk production
} catch (mysqli_sql_exception $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}
?>