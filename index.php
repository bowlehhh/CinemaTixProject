<?php
// index.php — entry point utama

// 1️⃣ Panggil semua controller yang dibutuhkan
require_once 'controller/TicketController.php';
require_once 'controller/AuthController.php';
require_once 'controller/AdminController.php';


// 2️⃣ Ambil parameter "page" dari URL (contoh: index.php?page=checkout)
$action = $_GET['action'] ?? 'home';

// 3️⃣ Tentukan controller mana yang harus dijalankan
switch ($action) {
    case 'login':
        (new AuthController())->login();
        break;

    case 'checkout':
        (new TicketController())->checkout();
        break;

    case 'detail':
        (new TicketController())->detail();
        break;
    
    case 'admin':
            (new AdminController())->panel();
        break;

    case 'kelolafilm':
        (new AdminController())->kelolafilm();
        break;

    case 'kelolatiket':
        (new AdminController())->kelolatiket();
        break;

    case 'panel':
        (new AdminController())->panel();
        break;

    case 'register':
        (new AuthController())->register();
        break;

    default:
        (new TicketController())->index();
        break;

    
}
 
?>
