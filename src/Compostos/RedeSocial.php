<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\ValueObject;
use InvalidArgumentException;

readonly class RedeSocial extends ValueObject
{
    public function __construct(
        protected string $id,
        protected string $nome,
        protected string $link
    ) {
        $this->id = trim($id);
        $this->nome = trim($nome);
        $this->link = trim($link);

        $this->validate();
    }

    private function validate(): void
    {
        if (empty($this->id)) {
            throw new InvalidArgumentException('ID não pode estar vazio');
        }

        if (empty($this->nome)) {
            throw new InvalidArgumentException('Nome não pode estar vazio');
        }

        if (!filter_var($this->link, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException('Link inválido. Deve ser uma URL válida');
        }
    }

    public function value(): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'link' => $this->link,
        ];
    }

    public function toString(): string
    {
        return "{$this->nome}: {$this->link}";
    }
}
