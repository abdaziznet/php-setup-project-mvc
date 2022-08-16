<?php

namespace abdaziznet\belajarphpmvc\utils;

class View
{
    public static function render(string $view, $model)
    {
        require __DIR__ . '/../view/'.$view . '.php';
    }
}
