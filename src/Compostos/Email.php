<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\MaskablePII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Email extends ValueObject implements MaskablePII
{
    protected string $value;

    public function __construct(string $value, bool $validate = true)
    {
        $this->value = strtolower(trim($value));

        if ($validate && !$this->isValid()) {
            throw new InvalidArgumentException("Invalid Email.");
        }
    }

    public function getMasked(): string
    {
        return '***@' . $this->domain();
    }

    public function getPartiallyMasked(): string
    {
        $username = $this->username();
        $domain = $this->domain();

        if (strlen($username) <= 1) {
            return $this->value();
        }

        $maskedUsername = $username[0] . str_repeat('*', strlen($username) - 1);
        return $maskedUsername . '@' . $domain;
    }

    public function isValid(): bool
    {
        if (!filter_var($this->value(), FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $domainParts = explode('.', $this->domain());
        $tld = end($domainParts);

        $tldLength = strlen($tld);
        return !($tldLength < 2 || $tldLength > 10);
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