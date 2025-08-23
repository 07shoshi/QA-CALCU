<?php
namespace App\Entities\Interfaces;

interface InterfaceUsuario {
    public function getNombre(): string;
    public function getId(): int;
    public function setPreferencias(array $prefs): void;
}
