<?php

namespace Datweb\Vo\Tests\Compostos;

use Datweb\Vo\Compostos\Telefone;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class TelefoneTest extends TestCase
{
    public function testCriaTelefoneValidoCom8Digitos(): void
    {
        $telefone = new Telefone('11', '12345678', 'RESIDENCIAL');

        $this->assertInstanceOf(Telefone::class, $telefone);
        $this->assertEquals('11', $telefone->value()['ddd']);
        $this->assertEquals('12345678', $telefone->value()['numero']);
    }

    public function testCriaTelefoneValidoCom9Digitos(): void
    {
        $telefone = new Telefone('11', '912345678', 'CELULAR');

        $this->assertInstanceOf(Telefone::class, $telefone);
        $this->assertEquals('11', $telefone->value()['ddd']);
        $this->assertEquals('912345678', $telefone->value()['numero']);
    }

    public function testNormalizaDddComCaracteresEspeciais(): void
    {
        $telefone = new Telefone('(11)', '12345678', 'RESIDENCIAL');

        $this->assertEquals('11', $telefone->value()['ddd']);
    }

    public function testNormalizaNumeroComCaracteresEspeciais(): void
    {
        $telefone = new Telefone('11', '1234-5678', 'RESIDENCIAL');

        $this->assertEquals('12345678', $telefone->value()['numero']);
    }

    public function testValidaDddInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('DDD inválido');

        new Telefone('1', '12345678', 'RESIDENCIAL');
    }

    public function testValidaNumeroInvalidoCurto(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Número de telefone inválido');

        new Telefone('11', '1234567', 'RESIDENCIAL');
    }

    public function testValidaNumeroInvalidoLongo(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Número de telefone inválido');

        new Telefone('11', '1234567890', 'RESIDENCIAL');
    }

    public function testToString(): void
    {
        $telefone = new Telefone('11', '912345678', 'CELULAR');
        $this->assertEquals('(11) 91234-5678', $telefone->toString());

        $telefone = new Telefone('11', '12345678', 'RESIDENCIAL');
        $this->assertEquals('(11) 1234-5678', $telefone->toString());
    }
}
