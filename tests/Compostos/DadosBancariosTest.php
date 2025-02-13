<?php

namespace Datweb\Vo\Tests\Compostos;

use Datweb\Vo\Compostos\DadosBancarios;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DadosBancariosTest extends TestCase
{
    public function testCriaDadosBancariosValidos(): void
    {
        $dadosBancarios = new DadosBancarios(
            '001',
            'CORRENTE',
            '1234',
            '123456',
            '7'
        );

        $this->assertInstanceOf(DadosBancarios::class, $dadosBancarios);
        $this->assertEquals('001', $dadosBancarios->value()['codigoBanco']);
        $this->assertEquals('1234', $dadosBancarios->value()['agencia']);
        $this->assertEquals('123456', $dadosBancarios->value()['conta']);
        $this->assertEquals('7', $dadosBancarios->value()['digitoConta']);
    }

    public function testNormalizaCodigoBancoComCaracteresEspeciais(): void
    {
        $dadosBancarios = new DadosBancarios(
            '0-0.1',
            'CORRENTE',
            '1234',
            '123456',
            '7'
        );

        $this->assertEquals('001', $dadosBancarios->value()['codigoBanco']);
    }

    public function testValidaCodigoBancoInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Código do banco inválido');

        new DadosBancarios(
            '1',
            'CORRENTE',
            '1234',
            '123456',
            '7'
        );
    }

    public function testValidaAgenciaInvalida(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Agência inválida');

        new DadosBancarios(
            '001',
            'CORRENTE',
            '123',
            '123456',
            '7'
        );
    }

    public function testValidaContaVazia(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Conta não pode estar vazia');

        new DadosBancarios(
            '001',
            'CORRENTE',
            '1234',
            '',
            '7'
        );
    }

    public function testValidaDigitoContaVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Dígito da conta não pode estar vazio');

        new DadosBancarios(
            '001',
            'CORRENTE',
            '1234',
            '123456',
            ''
        );
    }

    public function testValidaTipoContaBancariaVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Tipo de conta bancária não pode estar vazio');

        new DadosBancarios(
            '001',
            '',
            '1234',
            '123456',
            '7'
        );
    }

    public function testToString(): void
    {
        $dadosBancarios = new DadosBancarios(
            '001',
            'CORRENTE',
            '1234',
            '123456',
            '7'
        );

        $this->assertEquals('Banco 001 - Ag: 1234 - Conta: 123456-7', $dadosBancarios->toString());
    }
}
