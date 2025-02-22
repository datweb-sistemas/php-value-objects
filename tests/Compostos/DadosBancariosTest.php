<?php

namespace Compostos;

use Datweb\Vo\Compostos\Banco;
use Datweb\Vo\Compostos\DadosBancarios;
use PHPUnit\Framework\TestCase;

class DadosBancariosTest extends TestCase
{

    public function testDadosBancarios(){
        $dados = new DadosBancarios(
            Banco::from('001'),
            "1",
            "2",
            "222",
        );
        $this->assertEquals([
            'codBanco' => "001",
            'codTipoConta' => "1",
            'agencia' => "2",
            'conta' => "222",
        ],$dados->value());
    }

    public function testOptionalArguments(){
        $dado = new DadosBancarios(
            banco: Banco::from('001'),
            agencia: "1",
            conta: "222",
        );
        $this->assertEquals([
            'codBanco' => "001",
            'codTipoConta' => null,
            'agencia' => "1",
            'conta' => "222",
        ],$dado->value());
    }
}
