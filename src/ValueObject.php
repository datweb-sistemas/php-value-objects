<?php

namespace Datweb\Vo;

use JsonSerializable;
use ReturnTypeWillChange;
use Throwable;

readonly abstract class ValueObject implements JsonSerializable
{
    abstract public function value();

    public static function make(mixed ...$values): static
    {
        return new static(...$values);
    }

    public static function from(mixed ...$values): static
    {
        return static::make(...$values);
    }

    public static function makeOrNull(mixed ...$values): ?static
    {
        try {
            return static::make(...$values);
        } catch (Throwable) {
            return null;
        }
    }

    public function equals(ValueObject $object): bool
    {
        return $this == $object;
    }

    public function notEquals(ValueObject $object): bool
    {
        return !$this->equals($object);
    }

    public function toArray(): array
    {
        return (array)$this->value();
    }

    public function toString(): string
    {
        return (string)$this->value();
    }

    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toString();
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}