<?php

namespace Datweb\Vo\Primitivos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Renda extends ValueObject implements PII
{
    public function __construct(protected float $valor)
    {
        if ($valor < 0) {
            throw new InvalidArgumentException('Renda não pode ser negativa');
        }
    }

    public function value(): float
    {
        return $this->valor;
    }

    public function toString(): string
    {
        return number_format($this->valor, 2, ',', '.');
    }
}
