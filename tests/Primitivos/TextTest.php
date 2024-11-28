<?php

namespace Primitivos;

use Datweb\Vo\Encoding;
use Datweb\Vo\Primitivos\Text;
use InvalidArgumentException;
use phpmock\phpunit\PHPMock;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Text::class)]
class TextTest extends TestCase
{
    use PHPMock;

    /**
     * Testa a criação de um objeto Text com encoding UTF-8
     */
    public function testCreateWithUtf8()
    {
        $utf8String = 'Olá, mundo!'; // UTF-8 by default
        $text = new Text($utf8String);

        $this->assertInstanceOf(Text::class, $text);
        $this->assertEquals($utf8String, $text->toUtf8());
    }

    /**
     * Testa a criação de um objeto Text com encoding ISO-8859-1
     */
    public function testCreateWithIso88591()
    {
        $isoString = iconv('UTF-8', 'ISO-8859-1', 'Olá, mundo!');
        $text = new Text($isoString);

        $expectedUtf8 = 'Olá, mundo!';
        $this->assertEquals($expectedUtf8, $text->toUtf8());
    }

    /**
     * Testa a criação de um objeto Text com encoding WINDOWS-1252
     */
    public function testCreateWithWindows1252()
    {
        $windows1252String = iconv('UTF-8', 'WINDOWS-1252', 'Olá, mundo!');
        $text = new Text($windows1252String);

        $expectedUtf8 = 'Olá, mundo!';
        $this->assertEquals($expectedUtf8, $text->toUtf8());
    }

    /**
     * Testa a conversão para ISO-8859-1
     */
    public function testToIso88591()
    {
        $utf8String = 'Olá, mundo!';
        $text = new Text($utf8String);

        $expectedIso = iconv('UTF-8', 'ISO-8859-1', $utf8String);
        $this->assertEquals($expectedIso, $text->toIso88591());
    }

    /**
     * Testa a conversão para WINDOWS-1252
     */
    public function testToWindows1252()
    {
        $utf8String = 'Olá, mundo!';
        $text = new Text($utf8String);

        $expectedWindows1252 = iconv('UTF-8', 'WINDOWS-1252', $utf8String);
        $this->assertEquals($expectedWindows1252, $text->toWindows1252());
    }

    /**
     * Testa a conversão para UTF-8
     */
    public function testToUtf8()
    {
        $utf8String = 'Olá, mundo!';
        $text = new Text($utf8String);

        $this->assertEquals($utf8String, $text->toUtf8());
    }

    /**
     * Testa o método value()
     */
    public function testValueMethod()
    {
        $utf8String = 'Olá, mundo!';
        $text = new Text($utf8String);

        $this->assertEquals($utf8String, $text->value());
    }

//    /**
//     * Testa a exceção lançada quando o encoding não é suportado no construtor.
//     */
//    public function testConstructorThrowsExceptionForUnsupportedEncoding()
//    {
//        $namespace = 'Datweb\Vo\Primitivos';
//        // Supomos que 'ASCII' não está entre os encodings suportados
//        $unsupportedString = mb_convert_encoding('Teste', 'ASCII');
//
//        // Cria um mock para mb_detect_encoding dentro do namespace da classe Text
//        $mbDetectEncodingMock = $this->getFunctionMock($namespace, 'mb_detect_encoding');
//
//        $mbDetectEncodingMock->expects($this->once())->with(
//            $unsupportedString,
//            Encoding::all(),
//            true
//        )->willReturn(false);
//
//        $this->expectException(InvalidArgumentException::class);
//        $this->expectExceptionMessage('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
//
//        new Text($unsupportedString);
//    }
//
//    /**
//     * Testa a exceção lançada quando a conversão para UTF-8 falha no construtor.
//     */
//    public function testConstructorThrowsExceptionWhenConversionToUtf8Fails()
//    {
//        // Mocka uma string com bytes inválidos para UTF-8
//        $invalidUtf8String = "\xB1\x31";
//
//        $this->expectException(InvalidArgumentException::class);
//        $this->expectExceptionMessage('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
//
//        new Text($invalidUtf8String);
//    }
}
