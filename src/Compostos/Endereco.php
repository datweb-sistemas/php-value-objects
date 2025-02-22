<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\ValueObject;

readonly class Endereco extends ValueObject
{
    public ?string $cep;
    public ?Estado $estado;
    public ?string $cidade;
    public ?string $bairro;
    public ?string $rua;

    public function __construct(
        ?string $cep = null,
        ?Estado $estado = null,
        ?string $cidade = null,
        ?string $bairro = null,
        ?string $rua = null,
    ) {
        $this->cep = $this->normalizeCep($cep);
        $this->estado = $estado;
        $this->cidade = $this->normalize($cidade);
        $this->bairro = $this->normalize($bairro);
        $this->rua = $this->normalize($rua);
    }

    private function normalize(?string $value): string
    {
        return isset($value) ? ucwords($value) : "";
    }

    public function value()
    {
        return [
            'cep' => $this->cep,
            'estado' => $this->estado->getSigla(),
            'cidade' => $this->cidade,
            'bairro' => $this->bairro,
            'rua' => $this->rua,
        ];
    }

    public function toString(): string
    {
        return "Endereco { cep: {$this->cep}, estado: {$this->estado->getSigla()}, cidade: {$this->cidade}, bairro: {$this->bairro}, rua: {$this->rua}}";
    }

    private function normalizeCep(?string $cep): ?string
    {
        if ($cep === null) {
            return null;
        }

        $cleanedCep = $this->removeNonNumericCharacters($cep);
        return $this->padCepToStandardLength($cleanedCep);
    }

    private function removeNonNumericCharacters(string $value): string
    {
        return preg_replace('/[^0-9]/', '', $value);
    }

    private function padCepToStandardLength(string $cep): string
    {
        return str_pad($cep, 8, '0', STR_PAD_LEFT);
    }
}