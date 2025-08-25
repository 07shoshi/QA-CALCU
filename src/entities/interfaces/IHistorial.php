<?php
/*
autor Alyan Abdel Ramírez Pérez contacto aramirezp20@miumg.edu.gt 
*/
namespace App\Entities\Interfaces;

interface IHistorial {
    public function agregarOperacion(string $operacion): void;
    public function obtenerOperaciones(): array;
    public function limpiarHistorial(): void;
}
