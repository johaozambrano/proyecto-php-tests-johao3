<?php

namespace App;

class Usuario
{
    public function crearNombreCompleto(string $nombre, string $apellido): string
    {
        return trim($nombre . ' ' . $apellido);
    }

    public function esEmailValido(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
