<?php

namespace Compostos;

use Datweb\Vo\Compostos\Nome;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;


#[CoversClass(Nome::class)]
class NomeTest extends TestCase
{
    public function testCriacaoNome(): void
    {
        $nomeInput = "  joão carlos SILVA souza  ";
        $nome = new Nome($nomeInput);

        $this->assertEquals("João Carlos Silva Souza", $nome->value());
    }

    public function testPrimeiroNome(): void
    {
        $nome = new Nome("Maria Fernanda Oliveira");

        $this->assertEquals("Maria", $nome->primeiroNome());
    }

    public function testUltimoNome(): void
    {
        $nome = new Nome("Carlos Eduardo Pereira");

        $this->assertEquals("Pereira", $nome->ultimoNome());
    }

    public function testSobrenome(): void
    {
        $nome = new Nome("Ana Paula Costa Silva");

        $this->assertEquals("Paula Costa Silva", $nome->sobrenome());
    }

    public function testSplit(): void
    {
        $nome = new Nome("Luiz Gustavo Almeida");

        $expected = ["Luiz", "Gustavo", "Almeida"];
        $this->assertEquals($expected, $nome->split());
    }

    public function testNomeUnico(): void
    {
        $nome = new Nome("Sócrates");

        $this->assertEquals("Sócrates", $nome->value());
        $this->assertEquals("Sócrates", $nome->primeiroNome());
        $this->assertEquals("Sócrates", $nome->ultimoNome());
        $this->assertEquals("", $nome->sobrenome());
    }

    public function testNomeVazio(): void
    {
        $nome = new Nome("");

        $this->assertEquals("", $nome->value());
        $this->assertEquals("", $nome->primeiroNome());
        $this->assertEquals("", $nome->ultimoNome());
        $this->assertEquals("", $nome->sobrenome());
    }

    public function testMultiplosEspacos(): void
    {
        $nome = new Nome("  Pedro   Henrique   da   Silva  ");

        $this->assertEquals("Pedro Henrique Da Silva", $nome->value());
        $this->assertEquals("Pedro", $nome->primeiroNome());
        $this->assertEquals("Silva", $nome->ultimoNome());
        $this->assertEquals("Henrique Da Silva", $nome->sobrenome());
    }
}