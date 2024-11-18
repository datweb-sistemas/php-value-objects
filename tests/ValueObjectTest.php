<?php

use Datweb\Vo\ValueObject;
use PHPUnit\Framework\TestCase;

readonly class TestValueObject extends ValueObject
{
    private string $value;

    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new InvalidArgumentException('Value cannot be empty.');
        }
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}

class ValueObjectTest extends TestCase
{
    public function testMakeCreatesInstance()
    {
        $vo = TestValueObject::make('test');
        $this->assertInstanceOf(TestValueObject::class, $vo);
        $this->assertEquals('test', $vo->value());
    }

    public function testFromCreatesInstance()
    {
        $vo = TestValueObject::from('example');
        $this->assertInstanceOf(TestValueObject::class, $vo);
        $this->assertEquals('example', $vo->value());
    }

    public function testMakeOrNullReturnsInstance()
    {
        $vo = TestValueObject::makeOrNull('nullable');
        $this->assertInstanceOf(TestValueObject::class, $vo);
        $this->assertEquals('nullable', $vo->value());
    }

    public function testMakeOrNullReturnsNullOnException()
    {
        $vo = TestValueObject::makeOrNull('');
        $this->assertNull($vo);
    }

    public function testEqualsReturnsTrueForSameValue()
    {
        $vo1 = TestValueObject::make('same');
        $vo2 = TestValueObject::make('same');
        $this->assertTrue($vo1->equals($vo2));
    }

    public function testEqualsReturnsFalseForDifferentValue()
    {
        $vo1 = TestValueObject::make('value1');
        $vo2 = TestValueObject::make('value2');
        $this->assertFalse($vo1->equals($vo2));
    }

    public function testNotEqualsReturnsFalseForSameValue()
    {
        $vo1 = TestValueObject::make('same');
        $vo2 = TestValueObject::make('same');
        $this->assertFalse($vo1->notEquals($vo2));
    }

    public function testNotEqualsReturnsTrueForDifferentValue()
    {
        $vo1 = TestValueObject::make('value1');
        $vo2 = TestValueObject::make('value2');
        $this->assertTrue($vo1->notEquals($vo2));
    }

    public function testToArray()
    {
        $vo = TestValueObject::make('array_test');
        $this->assertEquals(['array_test'], $vo->toArray());
    }

    public function testToString()
    {
        $vo = TestValueObject::make('string_test');
        $this->assertEquals('string_test', $vo->toString());
        $this->assertEquals('string_test', (string)$vo);
    }

    public function testJsonSerialize()
    {
        $vo = TestValueObject::make('json_test');
        $this->assertEquals('"json_test"', json_encode($vo));
    }

    public function testConstructorThrowsExceptionOnEmptyValue()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Value cannot be empty.');
        TestValueObject::make('');
    }
}
