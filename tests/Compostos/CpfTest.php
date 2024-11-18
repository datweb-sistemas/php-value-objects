<?php

namespace Compostos;

use Datweb\Vo\Compostos\Cpf;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Cpf::class)]
class CpfTest extends TestCase
{
    #[DataProvider('validCpfProvider')]
    public function testValidCpf(string $input, string $expectedFormatted)
    {
        $cpf = new Cpf($input);
        $this->assertTrue($cpf->isValid(), "O CPF {$input} deveria ser válido.");
        $this->assertEquals($expectedFormatted, $cpf->getFormatted(), "A formatação do CPF está incorreta.");
        $this->assertEquals(
            preg_replace('/\D/', '', $input),
            $cpf->value(),
            "O valor armazenado do CPF está incorreto."
        );
    }


    #[DataProvider('invalidCpfProvider')]
    public function testInvalidCpf(string $input)
    {
        $this->expectException(InvalidArgumentException::class);
        new Cpf($input);
    }

    public function testCpfWithoutValidation()
    {
        // Mesmo que o CPF seja inválido, não deve lançar exceção quando validate = false
        $cpf = new Cpf('12345678900', false);
        $this->assertFalse($cpf->isValid(), "O CPF deveria ser inválido.");
        $this->assertEquals('12345678900', $cpf->value(), "O valor armazenado do CPF está incorreto.");
    }

    public static function validCpfProvider(): array
    {
        return [
            // Formato com pontuação
            ['131.630.570-80', '131.630.570-80'],
            ['313.399.170-17', '313.399.170-17'], // Exemplo válido
            // Formato sem pontuação
            ['82095443063', '820.954.430-63'],
            ['57329074080', '573.290.740-80'],
        ];
    }

    public static function invalidCpfProvider(): array
    {
        return [
            // CPFs com comprimento incorreto
            ['123.456.789-0'],      // 11 dígitos
            ['123.456.789-000'],    // 12 dígitos
            ['1234567890'],         // 10 dígitos
            // CPFs com todos os dígitos iguais
            ['000.000.000-00'],
            ['11111111111'],
            ['22222222222'],
            // CPFs com dígitos verificadores inválidos
            ['529.982.247-24'], // Último dígito incorreto
            ['123.456.789-08'],
            ['52998224724'],
            ['12345678908'],
            // CPFs com caracteres inválidos
            ['529.982.247-2A'],
            ['ABC.DEF.GHI-JK'],
            ['!@#.$%^.&*()-_'],
            // Strings vazias
            [''],
            // Nulos (se aplicável)
            // [null], // Depende de como a classe lida com nulos
        ];
    }
}