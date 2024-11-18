<?php

namespace Primitivos;

use Datweb\Vo\Primitivos\Boolean;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

#[CoversClass(Boolean::class)]
#[UsesClass(ValueObject::class)]
class BooleanTest extends TestCase
{
    #[DataProvider('validBooleanProvider')]
    public function testValidBooleans($input, bool $expected)
    {
        $boolean = new Boolean($input);
        $this->assertSame($expected, $boolean->value());

        if ($expected) {
            $this->assertTrue($boolean->isTrue());
        } else {
            $this->assertTrue($boolean->isFalse());
        }
        $this->assertSame($expected ? 'true' : 'false', $boolean->toString());
    }

    #[DataProvider('invalidBooleanProvider')]
    public function testInvalidBooleans($input)
    {
        $this->expectException(InvalidArgumentException::class);
        new Boolean($input);
    }

    public function testImmutable()
    {
        $boolean = new Boolean(true);
        $reflection = new ReflectionClass($boolean);
        $this->assertTrue($reflection->isReadOnly());
    }

    #[DataProvider('serializationProvider')]
    public function testSerialization(Boolean $boolean, string $expectedSerialized)
    {
        $unserialized = unserialize($expectedSerialized);
        $this->assertInstanceOf(Boolean::class, $unserialized);
        $this->assertSame($boolean->value(), $unserialized->value());
    }

    #[DataProvider('jsonSerializationProvider')]
    public function testJsonSerialization(Boolean $boolean, bool $expectedValue)
    {
        $encodedBooleanClass = json_encode($boolean);
        $encodedNativeBoolean = json_encode($expectedValue);

        $this->assertSame($encodedNativeBoolean, $encodedBooleanClass);

        $this->assertSame($encodedNativeBoolean, $encodedBooleanClass);

        $this->assertSame(json_decode($encodedNativeBoolean), json_decode($encodedBooleanClass));
    }

    public static function serializationProvider(): array
    {
        return [
            [new Boolean(true), serialize(new Boolean(true))],
            [new Boolean(false), serialize(new Boolean(false))],
            [new Boolean(1), serialize(new Boolean(1))],
            [new Boolean(0), serialize(new Boolean(0))],
            [new Boolean('yes'), serialize(new Boolean('yes'))],
            [new Boolean('no'), serialize(new Boolean('no'))],
            [new Boolean('on'), serialize(new Boolean('on'))],
            [new Boolean('off'), serialize(new Boolean('off'))],
            [new Boolean('t'), serialize(new Boolean('t'))],
            [new Boolean('f'), serialize(new Boolean('f'))],
        ];
    }

    public static function jsonSerializationProvider(): array
    {
        return [
            [new Boolean(true), true],
            [new Boolean(false), false],
            [new Boolean(1), true],
            [new Boolean(0), false],
            [new Boolean('yes'), true],
            [new Boolean('no'), false],
            [new Boolean('on'), true],
            [new Boolean('off'), false],
            [new Boolean('t'), true],
            [new Boolean('f'), false],
        ];
    }

    public static function validBooleanProvider(): array
    {
        return [
            // Boolean inputs
            [true, true],
            [false, false],

            // Integer inputs
            [1, true],
            [0, false],

            // String inputs - True values
            ['1', true],
            ['true', true],
            ['TRUE', true],
            ['True', true],
            ['t', true],
            ['T', true],
            ['yes', true],
            ['YES', true],
            ['Yes', true],
            ['on', true],
            ['ON', true],
            ['On', true],

            // String inputs - False values
            ['0', false],
            ['false', false],
            ['FALSE', false],
            ['False', false],
            ['f', false],
            ['F', false],
            ['no', false],
            ['NO', false],
            ['No', false],
            ['off', false],
            ['OFF', false],
            ['Off', false],
        ];
    }

    public static function invalidBooleanProvider()
    {
        return [
            ['maybe'],
            ['2'],
            ['yes please'],
            ['nope'],
            ['tru'],
            ['fals'],
            [2],
            [-1],
        ];
    }
}