<?php
// model/TicketController.php
class TicketController {
    public function index() {
        // Tampilkan halaman utama/list film
        include 'view/ticket/index.php';
    }
    
    public function detail() {
        // Tampilkan detail film
        include 'view/ticket/detail.php';
    }
    
    public function checkout() {
        // Proses checkout tiket
        include 'view/ticket/checkout.php';
    }
}
?>