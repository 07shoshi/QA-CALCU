<?php
namespace App\Tests;

use App\Entities\Classes\Historial;
use PHPUnit\Framework\TestCase;

class HistorialTest extends TestCase {
    private $historial;

    protected function setUp(): void {
        $this->historial = new Historial();
    }

    public function testAgregarYObtenerOperaciones() {
        $this->historial->agregarOperacion("1+1=2");
        $operaciones = $this->historial->obtenerOperaciones();
        $this->assertCount(1, $operaciones);
        $this->assertEquals("1+1=2", $operaciones[0]);
    }

    public function testLimpiarHistorial() {
        $this->historial->agregarOperacion("2-1=1");
        $this->historial->limpiarHistorial();
        $this->assertEmpty($this->historial->obtenerOperaciones());
    }
}
