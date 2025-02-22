<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\ValueObject;

readonly class DadosBancarios extends ValueObject
{

    public ?Banco $banco;
    public ?string $codTipoConta;
    public ?string $agencia;
    public ?string $conta;

    public function __construct(
        ?Banco $banco = null,
        ?string $codTipoConta = null,
        ?string $agencia = null,
        ?string $conta = null,
    ) {
        $this->banco = $banco;
        $this->codTipoConta = $codTipoConta;
        $this->agencia = $agencia;
        $this->conta = $conta;
    }


    public function value()
    {
        return [
            'codBanco' => $this->banco->codigo(),
            'codTipoConta' => $this->codTipoConta,
            'agencia' => $this->agencia,
            'conta' => $this->conta,
        ];
    }
}