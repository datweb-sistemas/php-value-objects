<?php

namespace Datweb\Vo\Tests\Compostos;

use Datweb\Vo\Compostos\DadosBancarios;
use Datweb\Vo\Compostos\DadosBeneficio;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DadosBeneficioTest extends TestCase
{
    private DadosBancarios $dadosBancarios;

    protected function setUp(): void
    {
        $this->dadosBancarios = new DadosBancarios(
            '001',
            'CORRENTE',
            '1234',
            '123456',
            '7'
        );
    }

    public function testCriaDadosBeneficioValido(): void
    {
        $dadosBeneficio = new DadosBeneficio(
            $this->dadosBancarios,
            '1234567890',
            'APOSENTADORIA'
        );

        $this->assertInstanceOf(DadosBeneficio::class, $dadosBeneficio);
        $this->assertEquals('1234567890', $dadosBeneficio->value()['nb']);
        $this->assertEquals('APOSENTADORIA', $dadosBeneficio->value()['tipo']);
    }

    public function testNormalizaNbComCaracteresEspeciais(): void
    {
        $dadosBeneficio = new DadosBeneficio(
            $this->dadosBancarios,
            '123.456.789-0',
            'APOSENTADORIA'
        );

        $this->assertEquals('1234567890', $dadosBeneficio->value()['nb']);
    }

    public function testValidaNbInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Número do benefício inválido');

        new DadosBeneficio(
            $this->dadosBancarios,
            '123456789',
            'APOSENTADORIA'
        );
    }

    public function testValidaTipoVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Tipo do benefício não pode estar vazio');

        new DadosBeneficio(
            $this->dadosBancarios,
            '1234567890',
            ''
        );
    }

    public function testToString(): void
    {
        $dadosBeneficio = new DadosBeneficio(
            $this->dadosBancarios,
            '1234567890',
            'APOSENTADORIA'
        );

        $this->assertEquals('Benefício 1234567890 - Tipo: APOSENTADORIA', $dadosBeneficio->toString());
    }
}
