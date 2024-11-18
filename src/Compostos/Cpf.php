<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Cpf extends ValueObject implements PII
{
    public const LENGTH = 11;
    public const REGEX_PATTERN = '/^([\d]{3})([\d]{3})([\d]{3})([\d]{2})$/';
    protected string $value;

    public function __construct(string $value, bool $validate = true)
    {
        $this->value = preg_replace('/\D/', '', $value);

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
        if (strlen($this->value()) !== self::LENGTH) {
            return false;
        }
        if (preg_match('/(\d)\1{10}/', $this->value())) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $this->value()[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($this->value()[$c] != $d) {
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