#este código ha sido generado por Lucas Josué Salomón Silvestre Mendoza
<?php
namespace App\Entities\Interfaces;

interface ICalculadora {
    public function sumar(float $a, float $b): float;
    public function restar(float $a, float $b): float;
    public function multiplicar(float $a, float $b): float;
    public function dividir(float $a, float $b): float;
}
