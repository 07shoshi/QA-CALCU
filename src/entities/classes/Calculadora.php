<?php
namespace App\Entities\Classes;

use App\Entities\Interfaces\ICalculadora;

class Calculadora implements ICalculadora {
    public function sumar(float $a, float $b): float {
        return $a + $b;
    }

    public function restar(float $a, float $b): float {
        return $a - $b;
    }

    public function multiplicar(float $a, float $b): float {
        return $a * $b;
    }

    public function dividir(float $a, float $b): float {
        if ($b == 0) throw new \Exception("División por cero");
        return $a / $b;
    }
}
