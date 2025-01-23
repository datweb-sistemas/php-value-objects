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
        $cleanValue = preg_replace('/\D/', '', $input);
        $cleanValue = str_pad($cleanValue, Cpf::LENGTH, '0', STR_PAD_LEFT);
        $this->assertTrue($cpf->isValid(), "O CPF {$input} deveria ser válido.");
        $this->assertEquals($expectedFormatted, $cpf->getFormatted(), "A formatação do CPF está incorreta.");
        $this->assertEquals(
            $cleanValue,
            $cpf->value(),
            "O valor armazenado do CPF está incorreto."
        );
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
            ['849328055', '008.493.280-55'],
        ];
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

    public function testMaskHidesSensitivePortions(): void
    {
        $cpf = new Cpf('12345678901', false);
        $this->assertEquals('***.***.***.01', $cpf->mask());
    }

    public function testGetAuditLogReturnsCorrectFormat(): void
    {
        $cpf = new Cpf('82095443063', false);
        $log = $cpf->getAuditLog();

        $this->assertArrayHasKey('type', $log);
        $this->assertArrayHasKey('masked_value', $log);
        $this->assertArrayHasKey('timestamp', $log);
        $this->assertArrayHasKey('operation', $log);
        
        $this->assertEquals('CPF', $log['type']);
        $this->assertEquals('***.***.***.63', $log['masked_value']);
        $this->assertEquals('create', $log['operation']);
        
        // Test operation tracking
        $cpf->value();
        $this->assertEquals('create', $cpf->getAuditLog()['operation']);
    }

    public static function invalidCpfProvider(): array
    {
        return [
            // CPFs com comprimento incorreto
            ['123.456.789-000'],    // 12 dígitos
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
