<?php

namespace Compostos;

use Datweb\Vo\Compostos\Endereco;
use Datweb\Vo\Compostos\Estado;
use PHPUnit\Framework\TestCase;

class EnderecoTest extends TestCase
{
    public function testCriacaoEnderecoComValoresValidos()
    {
        $endereco = new Endereco(
            "12345-678",
            Estado::SP,
            "são paulo",
            "centro",
            "rua das flores"
        );

        $this->assertEquals("12345678", $endereco->cep);
        $this->assertEquals(Estado::SP, $endereco->estado);
        $this->assertEquals("São Paulo", $endereco->cidade);
        $this->assertEquals("Centro", $endereco->bairro);
        $this->assertEquals("Rua Das Flores", $endereco->rua);
    }

    public function testCriacaoEnderecoComValoresNulos()
    {
        $endereco = new Endereco();

        $this->assertNull($endereco->cep);
        $this->assertEquals("", $endereco->estado);
        $this->assertEquals("", $endereco->cidade);
        $this->assertEquals("", $endereco->bairro);
        $this->assertEquals("", $endereco->rua);
    }

    public function testNormalizacaoDeCep()
    {
        $endereco = new Endereco("12.345-678");
        $this->assertEquals("12345678", $endereco->cep);

        $endereco = new Endereco("1234");
        $this->assertEquals("00001234", $endereco->cep);

        $endereco = new Endereco(null);
        $this->assertNull($endereco->cep);
    }

    public function testNormalizacaoDeCampos()
    {
        $endereco = new Endereco(null, Estado::SP, "são paulo", "centro", "rua das flores");

        $this->assertEquals(Estado::SP, $endereco->estado);
        $this->assertEquals("São Paulo", $endereco->cidade);
        $this->assertEquals("Centro", $endereco->bairro);
        $this->assertEquals("Rua Das Flores", $endereco->rua);
    }

    public function testMetodoValue()
    {
        $endereco = new Endereco("12345-678", Estado::SP, "são paulo", "centro", "rua das flores");

        $expected = [
            'cep' => "12345678",
            'estado' => "SP",
            'cidade' => "São Paulo",
            'bairro' => "Centro",
            'rua' => "Rua Das Flores",
        ];

        $this->assertEquals($expected, $endereco->value());
    }

    public function testMetodoToString()
    {
        $endereco = new Endereco("12345-678", Estado::SP, "são paulo", "centro", "rua das flores");

        $expected = "Endereco { cep: 12345678, estado: SP, cidade: São Paulo, bairro: Centro, rua: Rua Das Flores}";
        $this->assertEquals($expected, $endereco->toString());
    }
}
