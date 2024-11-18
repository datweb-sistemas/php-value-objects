<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;

readonly class Rg extends ValueObject implements PII
{
    protected string $value;

    public function __construct(string $rg)
    {
        $this->value = trim($rg);
    }

    public function value(): string
    {
        return $this->value;
    }
}