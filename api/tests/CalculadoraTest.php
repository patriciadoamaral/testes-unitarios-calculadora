<?php

use App\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    protected $calculadora;

    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }

    public function testSomar()
    {
        $soma = $this->calculadora->somar(2,2);

        $this->assertEquals($soma, 4);
    }

    public function testSubtrair()
    {
        $subtracao = $this->calculadora->subtrair(2,1);

        $this->assertEquals($subtracao, 1);
    }

    public function testMultiplicar()
    {
        $multiplicacao = $this->calculadora->multiplicar(2,2);

        $this->assertEquals($multiplicacao, 4);
    }

    public function testDividir()
    {
        $divisao = $this->calculadora->dividir(4,2);

        $this->assertEquals($divisao, 2);
    }
}