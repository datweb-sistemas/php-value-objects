<?php

namespace Datweb\Vo\Tests\Compostos;

use Datweb\Vo\Compostos\Endereco;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class EnderecoTest extends TestCase
{
    public function testCriaEnderecoValido(): void
    {
        $endereco = new Endereco(
            'RESIDENCIAL',
            '12345-678',
            'São Paulo',
            'Apto 123',
            '100',
            'SP',
            'Rua Teste',
            'Centro'
        );

        $this->assertInstanceOf(Endereco::class, $endereco);
        $this->assertEquals('12345-678', $endereco->value()['cep']);
        $this->assertEquals('SP', $endereco->value()['estado']);
    }

    public function testNormalizaCepSemHifen(): void
    {
        $endereco = new Endereco(
            'RESIDENCIAL',
            '12345678',
            'São Paulo',
            'Apto 123',
            '100',
            'SP',
            'Rua Teste',
            'Centro'
        );

        $this->assertEquals('12345-678', $endereco->value()['cep']);
    }

    public function testValidaCepInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('CEP inválido');

        new Endereco(
            'RESIDENCIAL',
            '1234-567',
            'São Paulo',
            'Apto 123',
            '100',
            'SP',
            'Rua Teste',
            'Centro'
        );
    }

    public function testValidaEstadoInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Estado inválido');

        new Endereco(
            'RESIDENCIAL',
            '12345-678',
            'São Paulo',
            'Apto 123',
            '100',
            'XXX',
            'Rua Teste',
            'Centro'
        );
    }

    public function testToString(): void
    {
        $endereco = new Endereco(
            'RESIDENCIAL',
            '12345-678',
            'São Paulo',
            'Apto 123',
            '100',
            'SP',
            'Rua Teste',
            'Centro'
        );

        $expected = 'Rua Teste, 100 - Apto 123 - Centro - São Paulo/SP - CEP: 12345-678';
        $this->assertEquals($expected, $endereco->toString());
    }

    public function testToStringSemComplemento(): void
    {
        $endereco = new Endereco(
            'RESIDENCIAL',
            '12345-678',
            'São Paulo',
            '',
            '100',
            'SP',
            'Rua Teste',
            'Centro'
        );

        $expected = 'Rua Teste, 100 - Centro - São Paulo/SP - CEP: 12345-678';
        $this->assertEquals($expected, $endereco->toString());
    }
}
