<?php

namespace Datweb\Vo\Tests\Compostos;

use Datweb\Vo\Compostos\RedeSocial;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class RedeSocialTest extends TestCase
{
    public function testCriaRedeSocialValida(): void
    {
        $redeSocial = new RedeSocial(
            '123',
            'Facebook',
            'https://facebook.com/profile'
        );

        $this->assertInstanceOf(RedeSocial::class, $redeSocial);
        $this->assertEquals('123', $redeSocial->value()['id']);
        $this->assertEquals('Facebook', $redeSocial->value()['nome']);
        $this->assertEquals('https://facebook.com/profile', $redeSocial->value()['link']);
    }

    public function testValidaIdVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('ID não pode estar vazio');

        new RedeSocial(
            '',
            'Facebook',
            'https://facebook.com/profile'
        );
    }

    public function testValidaNomeVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Nome não pode estar vazio');

        new RedeSocial(
            '123',
            '',
            'https://facebook.com/profile'
        );
    }

    public function testValidaLinkInvalido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Link inválido');

        new RedeSocial(
            '123',
            'Facebook',
            'invalid-url'
        );
    }

    public function testToString(): void
    {
        $redeSocial = new RedeSocial(
            '123',
            'Facebook',
            'https://facebook.com/profile'
        );

        $this->assertEquals('Facebook: https://facebook.com/profile', $redeSocial->toString());
    }
}
