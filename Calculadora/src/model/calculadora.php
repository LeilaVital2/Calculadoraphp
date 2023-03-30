<?php

namespace APP\model;

class calculadora
{
    public static function somar (int $a, int $b): int 
    {
        return $a + $b;
    }

    public static function subtrair(int $a, int $b): int
    {
        return $a - $b;
    }

    public static function multiplicar(int $a, int $b): int
    {
        return $a * $b;
    }

    public static function divisao(int $a, int $b): int
    {
        if ($b == 0) {
             throw new \InvalidArgumentException('Division by zero');
        }
        return $a / $b;
    }
}