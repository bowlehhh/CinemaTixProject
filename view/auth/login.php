<?php
// Start session untuk menyimpan login state
session_start();

// Cek jika user sudah login, redirect ke halaman sesuai role
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: ?action=panel');
    } else {
        header('Location: ?action=index');
    }
    exit;
}

// Variabel untuk pesan error
$error = '';
$username = '';

// Proses form login ketika di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Validasi input
    if (empty($username) || empty($password)) {
        $error = 'Username dan password harus diisi!';
    } else {
        try {
            // Include koneksi database - SESUAIKAN PATH
            require_once '../koneksi.php'; // ← PERBAIKI PATH INI
            
            // Cek jika koneksi berhasil
            if ($mysqli->connect_error) {
                throw new Exception("Database connection failed: " . $mysqli->connect_error);
            }
            
            // Prepared statement untuk mencegah SQL injection
            $stmt = $mysqli->prepare("SELECT id, username, password, role FROM users WHERE username = ? OR email = ?");
            $stmt->bind_param("ss", $username, $username);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                
                // Verify password (pastikan password di database di-hash)
                if (password_verify($password, $user['password'])) {
                    // Login sukses - set session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['login_time'] = time();
                    
                    // Redirect berdasarkan role
                    if ($user['role'] === 'admin') {
                        header('Location: ?action=panel');
                    } else {
                        header('Location: ?action=index');
                    }
                    exit;
                } else {
                    $error = 'Password salah!';
                }
            } else {
                $error = 'Username/email tidak ditemukan!';
            }
            
            $stmt->close();
            
        } catch (Exception $e) {
            $error = 'Terjadi kesalahan sistem: ' . $e->getMessage();
        }
    }
}
?>