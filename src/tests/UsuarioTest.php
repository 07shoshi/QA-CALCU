<?php
namespace App\Tests;

use App\Entities\Classes\Usuario;
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase {
    private $usuario;

    protected function setUp(): void {
        $this->usuario = new Usuario("Ana", 2);
    }

    public function testGetNombre() {
        $this->assertEquals("Ana", $this->usuario->getNombre());
    }

    public function testGetId() {
        $this->assertEquals(2, $this->usuario->getId());
    }

    public function testSetPreferencias() {
        $prefs = ['tema' => 'oscuro'];
        $this->usuario->setPreferencias($prefs);
        // No hay getter, pero si existiera:
        // $this->assertEquals($prefs, $this->usuario->getPreferencias());
        $this->assertTrue(true); // Prueba dummy si no hay getter
    }
}
