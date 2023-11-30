<?php

use PHPUnit\Framework\TestCase;

require_once "app/libs/Base.php";
require_once "app/model/publicar.php";

class publicarTest extends TestCase
{
    private $db;
    
    public function testSubirPublicacion()
    {
        $this->db = new Base;

        // Arrange (Preparar)
        $baseDeDatos = new Base;
        $publicacion = new publicar($datos);

        // Act (Actuar)
        $publicacion->subirPublicacion('Título de prueba', 'Contenido de prueba');

        // Assert (Afirmar)
        $publicaciones = $publicacion->obtenerPublicaciones();
        $this->assertCount(1, $publicaciones);
        $this->assertEquals('Título de prueba', $publicaciones[0]['titulo']);
        $this->assertEquals('Contenido de prueba', $publicaciones[0]['contenido']);
    }
}
?>