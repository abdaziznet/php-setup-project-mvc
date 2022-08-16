<?php

namespace abdaziznet\belajarphpmvc\controller;

use abdaziznet\belajarphpmvc\utils\View;
require_once __DIR__ . '/../utils/View.php';

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC"
        ];

        View::render("home/index", $model);
    }

    function hello(): void
    {
        echo "HomeController::hello()";
    }
}
