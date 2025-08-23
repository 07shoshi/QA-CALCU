<?php
namespace App\Tests;

use App\Entities\Classes\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase {
    private $calculadora;

    protected function setUp(): void {
        $this->calculadora = new Calculadora();
    }

    public function testSumar() { $this->assertEquals(5, $this->calculadora->sumar(2, 3)); }
    public function testRestar() { $this->assertEquals(1, $this->calculadora->restar(3, 2)); }
    public function testMultiplicar() { $this->assertEquals(6, $this->calculadora->multiplicar(2, 3)); }
    public function testDividir() { $this->assertEquals(2, $this->calculadora->dividir(6, 3)); }
    public function testDividirPorCero() {
        $this->expectException(\Exception::class);
        $this->calculadora->dividir(6, 0);
    }
}
