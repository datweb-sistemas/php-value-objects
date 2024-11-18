<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Cnpj extends ValueObject implements PII
{
    public const LENGTH = 14;
    public const REGEX_PATTERN = '/^([\d]{2})([\d]{3})([\d]{3})([\d]{4})([\d]{2})$/';
    protected string $value;

    public function __construct(string $value, bool $validate = true)
    {
        $this->value = preg_replace('/\D/', '', $value);

        if ($validate && !$this->isValid()) {
            throw new InvalidArgumentException("Invalid Cnpj.");
        }
    }

    public function getFormatted(): string
    {
        return preg_replace(self::REGEX_PATTERN, '$1.$2.$3/$4-$5', $this->value());
    }

    public function isValid(): bool
    {
        if (strlen($this->value()) !== self::LENGTH) {
            return false;
        }
        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{13}/', $this->value())) {
            return false;
        }

        // Cálculo do primeiro dígito verificador
        $peso = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        $soma = 0;

        for ($i = 0; $i < 12; $i++) {
            $soma += $this->value()[$i] * $peso[$i];
        }

        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;

        // Cálculo do segundo dígito verificador
        $peso = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        $soma = 0;

        for ($i = 0; $i < 13; $i++) {
            $soma += $this->value()[$i] * $peso[$i];
        }

        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;

        // Verifica se os dígitos calculados conferem com os dígitos informados
        return ($this->value()[12] == $digito1 && $this->value()[13] == $digito2);
    }

    public function value(): string
    {
        return $this->value;
    }
}