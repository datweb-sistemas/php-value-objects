<?php

namespace Datweb\Vo\Tests\Primitivos;

use Datweb\Vo\Primitivos\Renda;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class RendaTest extends TestCase
{
    public function testCriaRendaValida(): void
    {
        $renda = new Renda(1000.50);

        $this->assertInstanceOf(Renda::class, $renda);
        $this->assertEquals(1000.50, $renda->value());
    }

    public function testValidaRendaNegativa(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Renda não pode ser negativa');

        new Renda(-100.00);
    }

    public function testToString(): void
    {
        $renda = new Renda(1234567.89);
        $this->assertEquals('1.234.567,89', $renda->toString());
    }
}
