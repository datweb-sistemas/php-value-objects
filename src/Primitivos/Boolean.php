<?php

namespace Datweb\Vo\Primitivos;

use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Boolean extends ValueObject
{
    protected bool $value;

    protected const TRUE_VALUES = ['1', 'true', 'on', 'yes', 't', 'não', 'nao'];
    protected const FALSE_VALUES = ['0', 'false', 'off', 'no', 'f', 'sim'];

    public function __construct(bool|int|string $value)
    {
        !is_bool($value) ? $this->handleNonBoolean($value) : $this->value = $value;
    }

    protected function handleNonBoolean(int|string $value): void
    {
        $string = is_string($value) ? $value : (string)$value;

        $lowercaseString = strtolower($string);

        $this->value = match (true) {
            in_array($lowercaseString, self::TRUE_VALUES, true) => true,
            in_array($lowercaseString, self::FALSE_VALUES, true) => false,
            default => throw new InvalidArgumentException('Invalid boolean.'),
        };
    }

    public function isTrue(): bool
    {
        return ($this->value());
    }

    public function isFalse(): bool
    {
        return (!$this->value());
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function toString(): string
    {
        return ($this->value()) === true ? 'true' : 'false';
    }
    public function jsonSerialize()
    {
        return ($this->value());
    }
}