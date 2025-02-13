<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class DadosBeneficio extends ValueObject implements PII
{
    public function __construct(
        protected DadosBancarios $banco,
        protected string $nb,
        protected string $tipo
    ) {
        $this->nb = $this->normalizeNb($nb);
        $this->tipo = strtoupper(trim($tipo));

        $this->validate();
    }

    private function validate(): void
    {
        if (!preg_match('/^\d{10}$/', $this->nb)) {
            throw new InvalidArgumentException('Número do benefício inválido. Deve conter 10 dígitos');
        }

        if (empty($this->tipo)) {
            throw new InvalidArgumentException('Tipo do benefício não pode estar vazio');
        }
    }

    private function normalizeNb(string $nb): string
    {
        return preg_replace('/\D/', '', $nb);
    }

    public function value(): array
    {
        return [
            'banco' => $this->banco->value(),
            'nb' => $this->nb,
            'tipo' => $this->tipo,
        ];
    }

    public function toString(): string
    {
        return "Benefício {$this->nb} - Tipo: {$this->tipo}";
    }
}
