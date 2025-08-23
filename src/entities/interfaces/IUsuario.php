// autor: Allan Emanuel Mendez Mendez
<?php
namespace App\Entities\Interfaces;

interface IUsuario {
    public function getNombre(): string;
    public function getId(): int;
    public function setPreferencias(array $prefs): void;
}
