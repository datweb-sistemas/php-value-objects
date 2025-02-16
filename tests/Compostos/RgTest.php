<?php

namespace Compostos;

use Datweb\Vo\Compostos\Rg;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

#[CoversClass(Rg::class)]
class RgTest extends TestCase
{
    public function testRgInitialization()
    {
        $rgValue = '123456789';
        $rg = new Rg($rgValue);

        $this->assertInstanceOf(Rg::class, $rg);
        $this->assertEquals($rgValue, $rg->value());
    }

    public function testRgInitializationWithWhitespace()
    {
        $rgValue = '  123456789  ';
        $rg = new Rg($rgValue);

        $this->assertEquals(trim($rgValue), $rg->value());
    }

    public function testMaskHidesSensitivePortions(): void
    {
        $rg = new Rg('12345678901');
        $this->assertEquals('***********', $rg->getMasked());
        $this->assertEquals('*********01', $rg->getPartiallyMasked());
    }

    public function testMaskHidesSensitivePortionsMin(): void
    {
        $rg = new Rg('12');
        $this->assertEquals('**', $rg->getMasked());
        $this->assertEquals('12', $rg->getPartiallyMasked());
    }

    public function testRgValueImmutability()
    {
        $rg = new Rg('987654321');
        $reflection = new ReflectionClass($rg);
        $this->assertTrue($reflection->isReadOnly());
    }

    public function testRgTrimmedOnInitialization()
    {
        $rg = new Rg('   12345   ');
        $this->assertEquals('12345', $rg->value());
    }

    public function testRgIsString()
    {
        $rg = new Rg('987654321');
        $this->assertIsString($rg->value());
    }
}