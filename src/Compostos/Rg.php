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

    use \Datweb\Vo\PIITrait;

    public function mask(): string
    {
        return '12.***.678-9';
    }

    protected function getMaskPattern(): string
    {
        return '/^(\d{2})\.(\d{3})\.(\d{3})-(\d{1})$/';
    }

    public function value(): string
    {
        return $this->value;
    }
}
