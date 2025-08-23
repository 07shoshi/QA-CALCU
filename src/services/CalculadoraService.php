<?php
namespace App\Services;

use App\Entities\Classes\Calculadora;
use App\Entities\Classes\Historial;
use App\Entities\Classes\Usuario;

class CalculadoraService {
    private $calculadora;
    private $historial;
    private $usuario;

    public function __construct(Usuario $usuario) {
        $this->calculadora = new Calculadora();
        $this->historial = new Historial();
        $this->usuario = $usuario;
    }

    public function realizarOperacion(string $operacion, float $a, float $b): float {
        $resultado = 0;
        switch ($operacion) {
            case 'sumar':
                $resultado = $this->calculadora->sumar($a, $b);
                break;
            case 'restar':
                $resultado = $this->calculadora->restar($a, $b);
                break;
            case 'multiplicar':
                $resultado = $this->calculadora->multiplicar($a, $b);
                break;
            case 'dividir':
                $resultado = $this->calculadora->dividir($a, $b);
                break;
            default:
                throw new \Exception("Operación no válida");
        }

        $this->historial->agregarOperacion("{$a} {$operacion} {$b} = {$resultado}");
        return $resultado;
    }

    public function obtenerHistorial(): array {
        return $this->historial->obtenerOperaciones();
    }
}
