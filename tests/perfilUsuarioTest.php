<?php

use PHPUnit\Framework\TestCase;

require_once "app/libs/Base.php";
require_once "app/model/perfilUsuario.php";

class perfilUsuarioTest extends TestCase
{
    public function testEditarPerfil()
    {
        // Arrange (Preparar)
        $baseDeDatos = new Base();
        $baseDeDatos->actualizarPerfil(1, 'Juan', 'juan@example.com');
        $perfil = new perfilUsuario($Base, 1);

        // Act (Actuar)
        $perfil->editarPerfil('Pedro', 'pedro@example.com');

        // Assert (Afirmar)
        $this->assertEquals('Pedro', $perfil->obtenerNombre());
        $this->assertEquals('pedro@example.com', $perfil->obtenerCorreo());
    }
}
?>