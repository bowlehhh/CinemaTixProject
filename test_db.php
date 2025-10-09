
<?php
// test_db.php - letakkan di folder utama
require_once 'koneksi.php';
echo "Koneksi database berhasil!";

// Test query sederhana
$result = $mysqli->query("SELECT 1");
if ($result) {
    echo "<br>Query test berhasil!";
} else {
    echo "<br>Query test gagal: " . $mysqli->error;
}
?>