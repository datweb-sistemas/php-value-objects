<?php

namespace Datweb\Vo\Tests\Compostos;

use Datweb\Vo\Compostos\DocumentoSocial;
use DateTime;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DocumentoSocialTest extends TestCase
{
    public function testCriaDocumentoSocialValido(): void
    {
        $documento = new DocumentoSocial(
            'RG',
            '12.345.678-9',
            new DateTime('2020-01-01'),
            'SP',
            'SSP'
        );

        $this->assertInstanceOf(DocumentoSocial::class, $documento);
        $this->assertEquals('123456789', $documento->value()['numero']);
        $this->assertEquals('SP', $documento->value()['estadoEmissao']);
        $this->assertEquals('SSP', $documento->value()['orgaoEmissor']);
    }

    public function testNormalizaNumeroComCaracteresEspeciais(): void
    {
        $documento = new DocumentoSocial(
            'RG',
            '12.345.678-9',
            new DateTime('2020-01-01'),
            'SP',
            'SSP'
        );

        $this->assertEquals('123456789', $documento->value()['numero']);
    }

    public function testValidaEstadoEmissaoInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Estado de emissão inválido');

        new DocumentoSocial(
            'RG',
            '123456789',
            new DateTime('2020-01-01'),
            'XXX',
            'SSP'
        );
    }

    public function testValidaOrgaoEmissorVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Órgão emissor não pode estar vazio');

        new DocumentoSocial(
            'RG',
            '123456789',
            new DateTime('2020-01-01'),
            'SP',
            ''
        );
    }

    public function testValidaNumeroVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Número do documento não pode estar vazio');

        new DocumentoSocial(
            'RG',
            '',
            new DateTime('2020-01-01'),
            'SP',
            'SSP'
        );
    }

    public function testValidaDataEmissaoFutura(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Data de emissão não pode ser futura');

        new DocumentoSocial(
            'RG',
            '123456789',
            new DateTime('+1 day'),
            'SP',
            'SSP'
        );
    }

    public function testToString(): void
    {
        $documento = new DocumentoSocial(
            'RG',
            '123456789',
            new DateTime('2020-01-01'),
            'SP',
            'SSP'
        );

        $this->assertEquals('RG 123456789 - SSP/SP', $documento->toString());
    }
}
