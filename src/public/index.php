<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Entities\Classes\Usuario;
use App\Services\CalculadoraService;

$usuario = new Usuario("Juan", 1);
$calculadoraService = new CalculadoraService($usuario);

try {
    $resultado = $calculadoraService->realizarOperacion('sumar', 5, 3);
    echo "Resultado: {$resultado}\n";
    echo "Historial de operaciones:\n";
    print_r($calculadoraService->obtenerHistorial());
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
