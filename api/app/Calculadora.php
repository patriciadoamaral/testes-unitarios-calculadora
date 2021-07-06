<?php
namespace App;

class Calculadora
{
    public function somar($param1, $param2)
    {
        return $param1 + $param2;
    }

    public function subtrair($param1, $param2)
    {
        return $param1 - $param2;
    }

    public function multiplicar($param1, $param2)
    {
        return $param1 * $param2;
    }

    public function dividir($param1, $param2)
    {
        return $param1 / $param2;
    }
}