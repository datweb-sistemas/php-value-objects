<?php

namespace Compostos;

use Datweb\Vo\Compostos\Banco;
use PHPUnit\Framework\TestCase;

class BancoTest extends TestCase
{

    public function testBanco()
    {
        $banco = Banco::from('001');

        $this->assertEquals("Banco do Brasil S.A.", $banco->nomeCompleto());
        $this->assertEquals("001", $banco->codigo());
        $this->assertEquals("00000000", $banco->ispb());
        $this->assertEquals("BCO DO BRASIL S.A.", $banco->nomeCurto());
    }
}
