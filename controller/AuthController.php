<?php
class AuthController {
    public function login() {
        include 'view/auth/login.php';  // Bisa ke folder auth
    }
    public function register() {
        include 'view/auth/register.php';  // Bisa ke folder auth
    }
}