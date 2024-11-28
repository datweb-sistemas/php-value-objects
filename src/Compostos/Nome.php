<?php

namespace Datweb\Vo\Compostos;

use Datweb\Vo\PII;
use Datweb\Vo\ValueObject;

readonly class Nome extends ValueObject implements PII
{
    protected string $value;

    public function __construct(string $nome)
    {
        $this->value = $this->normalize($nome);
    }

    public function primeiroNome(): string
    {
        return $this->split()[0] ?? '';
    }

    public function sobrenome(): string
    {
        $split = $this->split();
        // Remove o primeiro nome
        array_shift($split);
        // Retorna os sobrenomes concatenados ou uma string vazia se não houver
        return implode(' ', $split);
    }

    public function ultimoNome(): string
    {
        $split = $this->split();
        return end($split) ?: '';
    }

    public function split(): array
    {
        return array_values(array_filter(explode(' ', $this->value)));
    }

    public function value(): string
    {
        return $this->value;
    }

    private function normalize(string $nome): string
    {
        $excecoes = ['da', 'de', 'do', 'dos', 'das'];

        $string = preg_replace('/\s+/', ' ', trim(strtolower($nome)));

        $partes = array_values(array_filter(explode(' ', $string)));

        $partes = array_map(function ($parte) use ($excecoes) {
            // Verifica se a palavra está na lista de exceções
            if (in_array($parte, $excecoes)) {
                return $parte;
            } else {
                return ucwords($parte);
            }
        }, $partes);

        return implode(' ', $partes);
    }
}