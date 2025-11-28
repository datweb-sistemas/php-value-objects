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

    public function testMaskHidesSensitivePortions(): void
    {
        $nome = new Nome('Luiz Gustavo Almeida');
        $this->assertEquals('*** *** ***', $nome->getMasked());
        $this->assertEquals('Luiz *** Almeida', $nome->getPartiallyMasked());
    }

    public function testMaskHidesSensitivePortionsMin(): void
    {
        $nome = new Nome('Pedro');
        $this->assertEquals('*** *** ***', $nome->getMasked());
        $this->assertEquals('Pedro', $nome->getPartiallyMasked());
    }

    #[DataProvider('abreviadoProvider')]
    public function testAbreviado(string $input, int $maxCaracteres, string $expected): void
    {
        $nome = new Nome($input);
        $this->assertEquals($expected, $nome->abreviado($maxCaracteres));
    }

    public function testAbreviadoComValorPadrao(): void
    {
        $nome = new Nome('Maria Fernanda Costa Oliveira');
        $this->assertEquals('Maria Fernanda Costa Oliveira', $nome->abreviado());
    }

    public function testAbreviadoNomeLongoDemais(): void
    {
        $nome = new Nome('Maria Fernanda Costa Santos Oliveira');
        $this->assertEquals('Maria F. C. S. Oliveira', $nome->abreviado());
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

    public static function abreviadoProvider(): array
    {
        return [
            // Nome curto, retorna completo
            ['João Silva', 30, 'João Silva'],
            // Nome exatamente no limite (18 caracteres em UTF-8)
            ['João Carlos Silva', 18, 'João Carlos Silva'],
            // Nome longo, abrevia nomes do meio
            ['João Carlos Silva', 16, 'João C. Silva'],
            // Nome com múltiplos nomes do meio
            ['Maria Fernanda Costa Oliveira', 20, 'Maria F. C. Oliveira'],
            // Nome com preposição (mantém preposição completa)
            ['Pedro Henrique da Silva', 20, 'Pedro H. da Silva'],
            // Nome com preposição "de"
            ['José Carlos de Souza', 15, 'José C. de Souza'],
            // Nome com preposição "do"
            ['Antonio Fernando do Nascimento', 20, 'Antonio F. do Nascimento'],
            // Nome com preposição "dos"
            ['Carlos Alberto dos Santos', 20, 'Carlos A. dos Santos'],
            // Nome com preposição "das"
            ['Ana Maria das Flores', 15, 'Ana M. das Flores'],
            // Nome único - retorna truncado (menos de 3 partes, usa mb_substr)
            ['Sócrates', 5, 'Sócr'],
            // Nome com dois elementos - trunca (mb_substr)
            ['João Silva', 5, 'João'],
            // Nome com limite muito pequeno
            ['Maria Fernanda Costa', 10, 'Maria F. Costa'],
            // Nome longo com muitos nomes do meio
            ['José Carlos Alberto Pereira Santos', 25, 'José C. A. P. Santos'],
        ];
    }
}
