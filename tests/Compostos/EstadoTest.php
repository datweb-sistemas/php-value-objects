<?php

namespace Compostos;

use Datweb\Vo\Compostos\Estado;
use PHPUnit\Framework\TestCase;

class EstadoTest extends TestCase
{
    public function testGetNome()
    {
        $this->assertEquals('Acre', Estado::AC->getNome());
        $this->assertEquals('São Paulo', Estado::SP->getNome());
        $this->assertEquals('Rio de Janeiro', Estado::RJ->getNome());
        $this->assertEquals('Minas Gerais', Estado::MG->getNome());
        $this->assertEquals('Paraná', Estado::PR->getNome());
        $this->assertEquals('Tocantins', Estado::TO->getNome());
    }

    public function testGetSigla()
    {
        $this->assertEquals('AC', Estado::AC->getSigla());
        $this->assertEquals('SP', Estado::SP->getSigla());
        $this->assertEquals('RJ', Estado::RJ->getSigla());
        $this->assertEquals('MG', Estado::MG->getSigla());
        $this->assertEquals('PR', Estado::PR->getSigla());
        $this->assertEquals('TO', Estado::TO->getSigla());
    }

    public function testTodasAsSiglas()
    {
        foreach (Estado::cases() as $estado) {
            $this->assertEquals($estado->value, $estado->getSigla());
        }
    }

    public function testTodosOsNomes()
    {
        $esperados = [
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins',
        ];

        foreach (Estado::cases() as $estado) {
            $this->assertEquals($esperados[$estado->value], $estado->getNome());
        }
    }
}
