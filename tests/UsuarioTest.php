<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Usuario;

class UsuarioTest extends TestCase
{
    public function testCrearNombreCompleto(): void
    {
        $usuario = new Usuario();

        $resultado = $usuario->crearNombreCompleto('Juan', 'Pérez');

        $this->assertEquals('Juan Pérez', $resultado);
    }

    public function testEmailValido(): void
    {
        $usuario = new Usuario();

        $this->assertTrue($usuario->esEmailValido('juan@correo.com'));
    }

    public function testEmailInvalido(): void
    {
        $usuario = new Usuario();

        $this->assertFalse($usuario->esEmailValido('correo-mal'));
    }
}
