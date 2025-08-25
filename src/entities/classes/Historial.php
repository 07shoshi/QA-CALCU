<?php

/*
autor Alyan Abdel Ramírez Pérez contacto aramirezp20@miumg.edu.gt 
*/
namespace App\Entities\Classes;

use App\Entities\Interfaces\IHistorial;

class Historial implements IHistorial {
    private $operaciones = [];

    public function agregarOperacion(string $operacion): void {
        $this->operaciones[] = $operacion;
    }

    public function obtenerOperaciones(): array {
        return $this->operaciones;
    }

    public function limpiarHistorial(): void {
        $this->operaciones = [];
    }
}
