<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;
use SensitiveParameter;

readonly class Cpf extends ValueObject implements PII
{
    public const int LENGTH = 11;
    public const string REGEX_PATTERN = '/^(\d{3})(\d{3})(\d{3})(\d{2})$/';

    protected string $value;

    public function __construct(#[SensitiveParameter] string $value, bool $validate = true)
    {
        $cleanValue = preg_replace('/\D/', '', $value);
        if (strlen($cleanValue) < self::LENGTH) {
            $cleanValue = str_pad($cleanValue, self::LENGTH, '0', STR_PAD_LEFT);
        }
        $this->value = $cleanValue;

        if ($validate && !$this->isValid()) {
            throw new InvalidArgumentException("Invalid Cpf.");
        }
    }

    public function getFormatted(): string
    {
        return preg_replace(self::REGEX_PATTERN, '$1.$2.$3-$4', $this->value());
    }

    public function isValid(): bool
    {
        return $this->hasValidLength()
            && $this->hasUniqueDigits()
            && $this->hasValidCheckDigits();
    }

    private function hasValidLength(): bool
    {
        return strlen($this->value()) === self::LENGTH;
    }

    private function hasUniqueDigits(): bool
    {
        return !preg_match('/^(\d)\1{10}$/', $this->value());
    }

    private function hasValidCheckDigits(): bool
    {
        for ($t = 9; $t < 11; $t++) {
            $sum = 0;
            for ($c = 0; $c < $t; $c++) {
                $sum += (int)$this->value()[$c] * (($t + 1) - $c);
            }

            $remainder = ($sum * 10) % 11;
            $calculatedDigit = $remainder === 10 ? 0 : $remainder;

            if ((int)$this->value()[$c] !== $calculatedDigit) {
                return false;
            }
        }

        return true;
    }

    public function value(): string
    {
        return $this->value;
    }
}