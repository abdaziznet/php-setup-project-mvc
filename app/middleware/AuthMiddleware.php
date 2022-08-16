<?php

namespace abdaziznet\belajarphpmvc\middleware;
require_once __DIR__ . '/Middleware.php';

class AuthMiddleware implements Middleware
{
    function before(): void
    {
        session_start();
        if(isset($_SESSION['user'])){
            header('Location: /login');
            exit();
        }
    }
}