<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class Endereco extends ValueObject implements PII
{
    public function __construct(
        protected string $tipoEndereco,
        protected string $cep,
        protected string $cidade,
        protected string $complemento,
        protected string $numero,
        protected string $estado,
        protected string $logradouro,
        protected string $bairro
    ) {
        $this->cep = $this->normalizeCep($cep);
        $this->estado = strtoupper($estado);
        $this->cidade = trim($cidade);
        $this->bairro = trim($bairro);
        $this->logradouro = trim($logradouro);
        $this->numero = trim($numero);
        $this->complemento = trim($complemento);
        $this->tipoEndereco = trim($tipoEndereco);

        $this->validate();
    }

    private function validate(): void
    {
        if (!preg_match('/^\d{5}-\d{3}$/', $this->cep)) {
            throw new InvalidArgumentException('CEP inválido. Formato esperado: 00000-000');
        }

        if (!preg_match('/^[A-Z]{2}$/', $this->estado)) {
            throw new InvalidArgumentException('Estado inválido. Use o formato UF (ex: SP, RJ)');
        }

        if (empty($this->cidade)) {
            throw new InvalidArgumentException('Cidade não pode estar vazia');
        }

        if (empty($this->logradouro)) {
            throw new InvalidArgumentException('Logradouro não pode estar vazio');
        }

        if (empty($this->numero)) {
            throw new InvalidArgumentException('Número não pode estar vazio');
        }
    }

    private function normalizeCep(string $cep): string
    {
        $cep = preg_replace('/\D/', '', $cep);
        return substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
    }

    public function value(): array
    {
        return [
            'tipoEndereco' => $this->tipoEndereco,
            'cep' => $this->cep,
            'cidade' => $this->cidade,
            'complemento' => $this->complemento,
            'numero' => $this->numero,
            'estado' => $this->estado,
            'logradouro' => $this->logradouro,
            'bairro' => $this->bairro,
        ];
    }

    public function toString(): string
    {
        $endereco = "{$this->logradouro}, {$this->numero}";
        if (!empty($this->complemento)) {
            $endereco .= " - {$this->complemento}";
        }
        $endereco .= " - {$this->bairro}";
        $endereco .= " - {$this->cidade}/{$this->estado}";
        $endereco .= " - CEP: {$this->cep}";
        return $endereco;
    }
}
