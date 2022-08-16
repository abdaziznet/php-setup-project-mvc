<?php

namespace abdaziznet\belajarphpmvc;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = "/products/12345/categories/abcde";

        $pattern = "#^/products/([0-9a-zA-A]*)/categories/([0-9a-zA-A]*)$#";

        $result = preg_match($pattern, $path, $matches);

        self::assertEquals(1,$result);

        var_dump($matches);
    }
}
