<?php

namespace abdaziznet\belajarphpmvc\controller;

class ProductController
{
    function categories(string $productid, string $categoryId): void
    {
        echo "PRODUCT ID: " . $productid . " CATEGORY ID : " . $categoryId . PHP_EOL;
    }
}