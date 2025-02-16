<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\MaskablePII;
use Datweb\Vo\ValueObject;
use SensitiveParameter;

readonly class Rg extends ValueObject implements MaskablePII
{
    protected string $value;

    public function __construct(#[SensitiveParameter] string $rg)
    {
        $this->value = trim($rg);
    }

    public function getMasked(): string
    {
        return str_repeat('*', strlen($this->value));
    }

    public function getPartiallyMasked(): string
    {
        $length = strlen($this->value);
        if ($length <= 2) {
            return $this->value;
        }
        return str_repeat('*', $length - 2) . substr($this->value, -2);
    }

    public function value(): string
    {
        return $this->value;
    }
}