<?php
namespace Datweb\Vo\Compostos;

use Datweb\Vo\MaskablePII;
use Datweb\Vo\ValueObject;
use SensitiveParameter;

readonly class Nome extends ValueObject implements MaskablePII
{
    protected string $value;

    private const PREPOSICOES = ['da', 'de', 'do', 'dos', 'das'];

    public function __construct(#[SensitiveParameter] string $nome)
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

    public function abreviado(int $maxCaracteres = 30): string
    {
        // Se o nome já está dentro do limite, retorna completo
        if (mb_strlen($this->value) <= $maxCaracteres) {
            return $this->value;
        }

        $partes = $this->split();

        // Se tem menos de 3 partes, trunca o nome
        if (count($partes) < 3) {
            return mb_substr($this->value, 0, $maxCaracteres);
        }

        $resultado = [$this->primeiroNome()];

        // Abrevia os nomes do meio (exceto preposições e o último nome)
        for ($i = 1; $i < count($partes) - 1; $i++) {
            $parte = $partes[$i];

            if (in_array(mb_strtolower($parte), self::PREPOSICOES)) {
                $resultado[] = $parte; // Mantém preposições completas
            } else {
                $resultado[] = mb_strtoupper(mb_substr($parte, 0, 1)) . '.'; // Abrevia
            }
        }

        // Adiciona o último nome completo
        $resultado[] = $this->ultimoNome();

        return implode(' ', $resultado);
    }

    public function getMasked(): string
    {
        return '*** *** ***';
    }

    public function getPartiallyMasked(): string
    {
        $partes = $this->split();

        if (count($partes) <= 1) {
            return $this->primeiroNome();
        }

        $primeiro = $this->primeiroNome();
        $ultimo = $this->ultimoNome();

        return $primeiro . ' *** ' . $ultimo;
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
        $string = preg_replace('/\s+/', ' ', trim(strtolower($nome)));
        $partes = array_values(array_filter(explode(' ', $string)));

        $partes = array_map(function ($parte) {
            // Verifica se a palavra está na lista de exceções
            if (in_array($parte, self::PREPOSICOES, true)) {
                return $parte;
            }

            return ucwords($parte);
        }, $partes);

        return implode(' ', $partes);
    }
}