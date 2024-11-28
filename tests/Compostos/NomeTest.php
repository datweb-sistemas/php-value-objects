<?php

namespace Compostos;

use Datweb\Vo\Compostos\Nome;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Nome::class)]
class NomeTest extends TestCase
{
    #[DataProvider('nomeProvider')]
    public function testCriacaoNome(string $input, string $expectedValue): void
    {
        $nome = new Nome($input);
        $this->assertEquals($expectedValue, $nome->value());
    }

    #[DataProvider('nomeParteProvider')]
    public function testPrimeiroNome(
        string $input,
        string $expectedPrimeiroNome,
        string $expectedUltimoNome,
        string $expectedSobrenome
    ): void {
        $nome = new Nome($input);
        $this->assertEquals($expectedPrimeiroNome, $nome->primeiroNome());
    }

    #[DataProvider('nomeParteProvider')]
    public function testUltimoNome(
        string $input,
        string $expectedPrimeiroNome,
        string $expectedUltimoNome,
        string $expectedSobrenome
    ): void {
        $nome = new Nome($input);
        $this->assertEquals($expectedUltimoNome, $nome->ultimoNome());
    }

    #[DataProvider('nomeParteProvider')]
    public function testSobrenome(
        string $input,
        string $expectedPrimeiroNome,
        string $expectedUltimoNome,
        string $expectedSobrenome
    ): void {
        $nome = new Nome($input);
        $this->assertEquals($expectedSobrenome, $nome->sobrenome());
    }

    #[DataProvider('nomeSplitProvider')]
    public function testSplit(string $input, array $expectedSplit): void
    {
        $nome = new Nome($input);
        $this->assertEquals($expectedSplit, $nome->split());
    }

    #[DataProvider('nomeUnicoProvider')]
    public function testNomeUnico(
        string $input,
        string $expectedValue,
        string $expectedPrimeiroNome,
        string $expectedUltimoNome,
        string $expectedSobrenome
    ): void {
        $nome = new Nome($input);
        $this->assertEquals($expectedValue, $nome->value());
        $this->assertEquals($expectedPrimeiroNome, $nome->primeiroNome());
        $this->assertEquals($expectedUltimoNome, $nome->ultimoNome());
        $this->assertEquals($expectedSobrenome, $nome->sobrenome());
    }

    #[DataProvider('nomeVazioProvider')]
    public function testNomeVazio(
        string $input,
        string $expectedValue,
        string $expectedPrimeiroNome,
        string $expectedUltimoNome,
        string $expectedSobrenome
    ): void {
        $nome = new Nome($input);
        $this->assertEquals($expectedValue, $nome->value());
        $this->assertEquals($expectedPrimeiroNome, $nome->primeiroNome());
        $this->assertEquals($expectedUltimoNome, $nome->ultimoNome());
        $this->assertEquals($expectedSobrenome, $nome->sobrenome());
    }

    #[DataProvider('nomeComMultiplosEspacosProvider')]
    public function testMultiplosEspacos(
        string $input,
        string $expectedValue,
        string $expectedPrimeiroNome,
        string $expectedUltimoNome,
        string $expectedSobrenome
    ): void {
        $nome = new Nome($input);
        $this->assertEquals($expectedValue, $nome->value());
        $this->assertEquals($expectedPrimeiroNome, $nome->primeiroNome());
        $this->assertEquals($expectedUltimoNome, $nome->ultimoNome());
        $this->assertEquals($expectedSobrenome, $nome->sobrenome());
    }

    // Data Providers

    public static function nomeProvider(): array
    {
        return [
            ["  joão carlos SILVA souza  ", "João Carlos Silva Souza"],
            ["Luiz Gustavo Almeida", "Luiz Gustavo Almeida"],
            ["  Pedro   Henrique   da \n \t    Silva  ", "Pedro Henrique da Silva"],
        ];
    }

    public static function nomeParteProvider(): array
    {
        return [
            // [input, expectedPrimeiroNome, expectedUltimoNome, expectedSobrenome]
            ["  joão carlos SILVA souza  ", "João", "Souza", "Carlos Silva Souza"],
            ["Maria Fernanda Oliveira", "Maria", "Oliveira", "Fernanda Oliveira"],
            ["Carlos Eduardo Pereira", "Carlos", "Pereira", "Eduardo Pereira"],
            ["Ana Paula Costa Silva", "Ana", "Silva", "Paula Costa Silva"],
            ["Luiz Gustavo Almeida", "Luiz", "Almeida", "Gustavo Almeida"],
            ["Sócrates", "Sócrates", "Sócrates", ""],
            ["", "", "", ""],
            ["  Pedro   Henrique   da \n \t    Silva  ", "Pedro", "Silva", "Henrique da Silva"],
        ];
    }

    public static function nomeSplitProvider(): array
    {
        return [
            ["Luiz Gustavo Almeida", ["Luiz", "Gustavo", "Almeida"]],
            ["Maria Fernanda Oliveira", ["Maria", "Fernanda", "Oliveira"]],
            ["Carlos Eduardo Pereira", ["Carlos", "Eduardo", "Pereira"]],
            ["Ana Paula Costa Silva", ["Ana", "Paula", "Costa", "Silva"]],
            ["Sócrates", ["Sócrates"]],
            ["", []],
            ["  Pedro   Henrique   da \n \t    Silva  ", ["Pedro", "Henrique", "da", "Silva"]],
        ];
    }

    public static function nomeUnicoProvider(): array
    {
        return [
            [
                "Sócrates",
                "Sócrates",
                "Sócrates",
                "Sócrates",
                ""
            ],
        ];
    }

    public static function nomeVazioProvider(): array
    {
        return [
            [
                "",
                "",
                "",
                "",
                ""
            ],
        ];
    }

    public static function nomeComMultiplosEspacosProvider(): array
    {
        return [
            [
                "  Pedro   Henrique   da \n \t    Silva  ",
                "Pedro Henrique da Silva",
                "Pedro",
                "Silva",
                "Henrique da Silva"
            ],
        ];
    }
}
