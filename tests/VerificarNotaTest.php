<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/verificarNota.php';

class VerificarNotaTest extends TestCase
{
    public function testPrimeraDivisio()
    {
        $this->assertEquals("Primera Divisió", verificarNota(75), "La nota 75 hauria de ser Primera Divisió.");
        $this->assertEquals("Primera Divisió", verificarNota(60), "La nota 60 hauria de ser Primera Divisió.");
    }

    public function testSegonaDivisio()
    {
        $this->assertEquals("Segona Divisió", verificarNota(50), "La nota 50 hauria de ser Segona Divisió.");
        $this->assertEquals("Segona Divisió", verificarNota(45), "La nota 45 hauria de ser Segona Divisió.");
    }

    public function testTerceraDivisio()
    {
        $this->assertEquals("Tercera Divisió", verificarNota(40), "La nota 40 hauria de ser Tercera Divisió.");
        $this->assertEquals("Tercera Divisió", verificarNota(33), "La nota 33 hauria de ser Tercera Divisió.");
    }

    public function testReprovat()
    {
        $this->assertEquals("Reprovat", verificarNota(30), "La nota 30 hauria de ser Reprovat.");
        $this->assertEquals("Reprovat", verificarNota(0), "La nota 0 hauria de ser Reprovat.");
    }
} 
?>
