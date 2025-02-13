<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Telefone extends ValueObject implements PII
{
    public function __construct(
        protected string $ddd,
        protected string $numero,
        protected string $tipo
    ) {
        $this->ddd = $this->normalizeDdd($ddd);
        $this->numero = $this->normalizeNumero($numero);
        $this->tipo = strtoupper(trim($tipo));

        $this->validate();
    }

    private function validate(): void
    {
        if (!preg_match('/^\d{2}$/', $this->ddd)) {
            throw new InvalidArgumentException('DDD inválido. Deve conter 2 dígitos');
        }

        if (!preg_match('/^\d{8,9}$/', $this->numero)) {
            throw new InvalidArgumentException('Número de telefone inválido. Deve conter 8 ou 9 dígitos');
        }
    }

    private function normalizeDdd(string $ddd): string
    {
        return preg_replace('/\D/', '', $ddd);
    }

    private function normalizeNumero(string $numero): string
    {
        return preg_replace('/\D/', '', $numero);
    }

    public function value(): array
    {
        return [
            'ddd' => $this->ddd,
            'numero' => $this->numero,
            'tipo' => $this->tipo,
        ];
    }

    public function toString(): string
    {
        return "({$this->ddd}) " . substr($this->numero, 0, -4) . "-" . substr($this->numero, -4);
    }
}
