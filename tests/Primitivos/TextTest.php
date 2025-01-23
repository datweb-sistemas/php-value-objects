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

    /**
     * Testa a exceção lançada quando o encoding não é suportado no construtor.
     */
    public function testConstructorThrowsExceptionForUnsupportedEncoding()
    {
        $namespace = 'Datweb\Vo\Primitivos';
        // Create an invalid byte sequence that's not valid in any supported encoding
        $invalidString = "\xFF\xFE\xFF\xFE";

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');

        new Text($invalidString);
    }

    /**
     * Testa a exceção lançada quando a conversão para UTF-8 falha no construtor.
     */
    public function testConstructorThrowsExceptionWhenConversionToUtf8Fails()
    {
        // Create a string with invalid UTF-8 bytes
        $invalidUtf8String = "\xB1\x31";

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');

        new Text($invalidUtf8String);
    }

    /**
     * Testa a conversão de caracteres especiais em diferentes encodings
     */
    public function testSpecialCharactersInDifferentEncodings()
    {
        // Test with special characters that exist in all three encodings
        $specialChars = 'áéíóúàèìòùâêîôûãõñ';
        $text = new Text($specialChars);
        
        // Test UTF-8 preservation
        $this->assertEquals($specialChars, $text->toUtf8());
        
        // Test round-trip conversion through ISO-8859-1
        $iso = $text->toIso88591();
        $backToUtf8 = mb_convert_encoding($iso, 'UTF-8', 'ISO-8859-1');
        $this->assertEquals($specialChars, $backToUtf8);
        
        // Test round-trip conversion through Windows-1252
        $win = $text->toWindows1252();
        $backToUtf8 = mb_convert_encoding($win, 'UTF-8', 'WINDOWS-1252');
        $this->assertEquals($specialChars, $backToUtf8);
    }

    /**
     * Testa a conversão de caracteres que existem apenas em Windows-1252
     */
    public function testWindows1252SpecificCharacters()
    {
        $win1252SpecialChars = [
            0x80 => "\x80", // Euro sign
            0x82 => "\x82", // Single low-9 quotation mark
            0x83 => "\x83", // Latin small letter f with hook
            0x84 => "\x84", // Double low-9 quotation mark
            0x85 => "\x85", // Horizontal ellipsis
            0x86 => "\x86", // Dagger
            0x87 => "\x87", // Double dagger
            0x88 => "\x88", // Modifier letter circumflex accent
            0x89 => "\x89", // Per mille sign
            0x8A => "\x8A", // Latin capital letter S with caron
            0x8B => "\x8B", // Single left-pointing angle quotation mark
            0x8C => "\x8C", // Latin capital ligature OE
            0x8E => "\x8E", // Latin capital letter Z with caron
            0x91 => "\x91", // Left single quotation mark
            0x92 => "\x92", // Right single quotation mark
            0x93 => "\x93", // Left double quotation mark
            0x94 => "\x94", // Right double quotation mark
            0x95 => "\x95", // Bullet
            0x96 => "\x96", // En dash
            0x97 => "\x97", // Em dash
            0x98 => "\x98", // Small tilde
            0x99 => "\x99", // Trade mark sign
            0x9A => "\x9A", // Latin small letter s with caron
            0x9B => "\x9B", // Single right-pointing angle quotation mark
            0x9C => "\x9C", // Latin small ligature oe
            0x9E => "\x9E", // Latin small letter z with caron
            0x9F => "\x9F"  // Latin capital letter Y with diaeresis
        ];

        foreach ($win1252SpecialChars as $code => $char) {
            $text = new Text($char);
            $this->assertSame($char, $text->value(), "Failed to preserve Windows-1252 char 0x" . dechex($code));
            $this->assertSame($char, $text->toWindows1252(), "Failed Windows-1252 round-trip for char 0x" . dechex($code));
        }
    }

    /**
     * Helper method to test individual Windows-1252 characters
     */
    private function checkWindows1252Character(int $code, string $char): void
    {
        // Test each character individually
        $text = new Text($char);
        
        // Test raw byte preservation
        $this->assertSame($char, $text->value(), 
            "Failed to preserve Windows-1252 char 0x" . dechex($code));
        
        // Test Windows-1252 round-trip
        $win = $text->toWindows1252();
        $this->assertSame($char, $win, 
            "Failed Windows-1252 round-trip for char 0x" . dechex($code));
        
        // Test ISO-8859-1 conversion should fail
        try {
            $text->toIso88591();
            $this->fail("Expected ISO-8859-1 conversion to fail for char 0x" . dechex($code));
        } catch (InvalidArgumentException $e) {
            $this->assertTrue(true, 
                "ISO-8859-1 conversion failed as expected for char 0x" . dechex($code));
        }
    }
}
