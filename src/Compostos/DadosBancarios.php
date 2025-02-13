<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class DadosBancarios extends ValueObject implements PII
{
    public function __construct(
        protected string $codigoBanco,
        protected string $tipoContaBancaria,
        protected string $agencia,
        protected string $conta,
        protected string $digitoConta
    ) {
        $this->codigoBanco = $this->normalizeNumero($codigoBanco);
        $this->tipoContaBancaria = strtoupper(trim($tipoContaBancaria));
        $this->agencia = $this->normalizeNumero($agencia);
        $this->conta = $this->normalizeNumero($conta);
        $this->digitoConta = $this->normalizeNumero($digitoConta);

        $this->validate();
    }

    private function validate(): void
    {
        if (!preg_match('/^\d{3}$/', $this->codigoBanco)) {
            throw new InvalidArgumentException('Código do banco inválido. Deve conter 3 dígitos');
        }

        if (!preg_match('/^\d{4}$/', $this->agencia)) {
            throw new InvalidArgumentException('Agência inválida. Deve conter 4 dígitos');
        }

        if (empty($this->conta)) {
            throw new InvalidArgumentException('Conta não pode estar vazia');
        }

        if (empty($this->digitoConta)) {
            throw new InvalidArgumentException('Dígito da conta não pode estar vazio');
        }

        if (empty($this->tipoContaBancaria)) {
            throw new InvalidArgumentException('Tipo de conta bancária não pode estar vazio');
        }
    }

    private function normalizeNumero(string $numero): string
    {
        return preg_replace('/\D/', '', $numero);
    }

    public function value(): array
    {
        return [
            'codigoBanco' => $this->codigoBanco,
            'tipoContaBancaria' => $this->tipoContaBancaria,
            'agencia' => $this->agencia,
            'conta' => $this->conta,
            'digitoConta' => $this->digitoConta,
        ];
    }

    public function toString(): string
    {
        return "Banco {$this->codigoBanco} - Ag: {$this->agencia} - Conta: {$this->conta}-{$this->digitoConta}";
    }
}
