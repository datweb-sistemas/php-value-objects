<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Email extends ValueObject implements PII
{
    protected string $value;

    public function __construct(string $value, bool $validate = true)
    {
        $this->value = strtolower(trim($value));

        if ($validate && !$this->isValid()) {
            throw new InvalidArgumentException("Invalid Email.");
        }
    }

    public function isValid(): bool
    {
        if (!filter_var($this->value(), FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $domainParts = explode('.', $this->domain());
        $tld = end($domainParts);

        $tldLength = strlen($tld);
        if ($tldLength < 2 || $tldLength > 10) {
            return false;
        }

        return true;
    }

    public function username(): string
    {
        return $this->split()[0];
    }

    public function domain(): string
    {
        return $this->split()[1];
    }

    public function value(): string
    {
        return $this->value;
    }

    protected function split(): array
    {
        return explode('@', $this->value());
    }
}