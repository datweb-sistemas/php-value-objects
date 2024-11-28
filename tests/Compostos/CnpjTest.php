<?php

namespace Compostos;

use Datweb\Vo\Compostos\Cnpj;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Cnpj::class)]
class CnpjTest extends TestCase
{
    #[DataProvider('validCnpjProvider')]
    public function testValidCnpj(string $input, string $expectedFormatted): void
    {
        $cleanValue = preg_replace('/\D/', '', $input);
        $cleanValue = str_pad($cleanValue, Cnpj::LENGTH, '0', STR_PAD_LEFT);

        $cnpj = new Cnpj($input);
        $this->assertTrue($cnpj->isValid(), "O CNPJ {$input} deveria ser válido.");
        $this->assertEquals($expectedFormatted, $cnpj->getFormatted(), "O CNPJ formatado não corresponde ao esperado.");
        $this->assertEquals(
            $cleanValue,
            $cnpj->value(),
            "O valor armazenado do CNPJ não corresponde ao esperado."
        );
    }

    public static function validCnpjProvider(): array
    {
        return [
            ['11222333000181', '11.222.333/0001-81'],
            ['00.310.333/0001-17', '00.310.333/0001-17'],
            ['310.333/0001-17', '00.310.333/0001-17'],//pad zeros
            ['11444777000161', '11.444.777/0001-61'],
            ['401033070001-32', '40.103.307/0001-32'],
            ['12345678/000195', '12.345.678/0001-95'],
            ['12672297/000110', '12.672.297/0001-10'],
            ['40.688.134/0001-61', '40.688.134/0001-61'],
            ['40688134000161', '40.688.134/0001-61'],
        ];
    }

    #[DataProvider('invalidCnpjProvider')]
    public function testInvalidCnpj(string $input): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Cnpj($input);
    }

    public function testCnpjWithoutValidation(): void
    {
        $invalidCnpj = "11.111.111/1111-11";
        $cnpj = new Cnpj($invalidCnpj, false);
        $this->assertFalse($cnpj->isValid(), "O CNPJ {$invalidCnpj} deveria ser inválido.");
        $this->assertEquals(
            '11111111111111',
            $cnpj->value(),
            "O valor armazenado do CNPJ não corresponde ao esperado."
        );
    }


    public static function invalidCnpjProvider(): array
    {
        return [
            ['11.111.111/1111-11'], // Todos os dígitos iguais
            ['00000000000000'],      // Todos os dígitos iguais
            ['12345678901234'],      // Dígitos inválidos
            ['11222333000180'],      // Dígito verificador incorreto
            ['1144477700016'],       // Tamanho incorreto
            ['114447770001611'],     // Tamanho incorreto
            ['abcdefghijklmno'],     // Não numérico
            [''],                     // Vazio
            ['2953676300014a'],      // Contém caracteres não numéricos
        ];
    }
}
