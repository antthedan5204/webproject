<?php
// AuthService.php
class AuthService
{
    public static function isLoggedIn()
    {
        session_start();
        return isset($_SESSION['username']);
    }
}
?>