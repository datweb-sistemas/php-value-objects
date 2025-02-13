<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;
use DateTime;

readonly class DocumentoSocial extends ValueObject implements PII
{
    public function __construct(
        protected string $tipoDocumento,
        protected string $numero,
        protected DateTime $dataEmissao,
        protected string $estadoEmissao,
        protected string $orgaoEmissor
    ) {
        $this->tipoDocumento = strtoupper(trim($tipoDocumento));
        $this->numero = $this->normalizeNumero($numero);
        $this->estadoEmissao = strtoupper(trim($estadoEmissao));
        $this->orgaoEmissor = strtoupper(trim($orgaoEmissor));

        $this->validate();
    }

    private function validate(): void
    {
        if (!preg_match('/^[A-Z]{2}$/', $this->estadoEmissao)) {
            throw new InvalidArgumentException('Estado de emissão inválido. Use o formato UF (ex: SP, RJ)');
        }

        if (empty($this->orgaoEmissor)) {
            throw new InvalidArgumentException('Órgão emissor não pode estar vazio');
        }

        if (empty($this->numero)) {
            throw new InvalidArgumentException('Número do documento não pode estar vazio');
        }

        if ($this->dataEmissao > new DateTime()) {
            throw new InvalidArgumentException('Data de emissão não pode ser futura');
        }
    }

    private function normalizeNumero(string $numero): string
    {
        return preg_replace('/[^0-9A-Z]/', '', strtoupper($numero));
    }

    public function value(): array
    {
        return [
            'tipoDocumento' => $this->tipoDocumento,
            'numero' => $this->numero,
            'dataEmissao' => $this->dataEmissao->format('Y-m-d'),
            'estadoEmissao' => $this->estadoEmissao,
            'orgaoEmissor' => $this->orgaoEmissor,
        ];
    }

    public function toString(): string
    {
        return "{$this->tipoDocumento} {$this->numero} - {$this->orgaoEmissor}/{$this->estadoEmissao}";
    }
}
