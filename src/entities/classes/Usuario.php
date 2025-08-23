<?php
namespace App\Entities\Classes;

use App\Entities\Interfaces\IUsuario;

class Usuario implements IUsuario {
    private $nombre;
    private $id;
    private $preferencias = [];

    public function __construct(string $nombre, int $id) {
        $this->nombre = $nombre;
        $this->id = $id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setPreferencias(array $prefs): void {
        $this->preferencias = $prefs;
    }
}
