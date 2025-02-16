<?php

namespace Compostos;

use Datweb\Vo\Compostos\Email;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Email::class)]
class EmailTest extends TestCase
{
    #[DataProvider('validEmailProvider')]
    public function testCanBeCreatedWithValidEmail(string $emailString)
    {
        $email = new Email($emailString);

        $this->assertInstanceOf(Email::class, $email);
        $this->assertEquals(strtolower(trim($emailString)), $email->value());
        $this->assertTrue($email->isValid(), "E-mail deveria ser válido: $emailString");
    }

    #[DataProvider('invalidEmailProvider')]
    public function testThrowsExceptionWithInvalidEmail(string $invalidEmail)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Invalid Email.");

        new Email($invalidEmail);
    }

    #[DataProvider('validEmailProvider')]
    public function testIsValidReturnsTrueForValidEmails(string $emailString, string $expected)
    {
        $email = new Email($emailString, true);
        $this->assertTrue($email->isValid(), "Falha ao validar e-mail: $emailString");
        $this->assertEquals($expected, $email->value());
    }

    public function testMaskHidesSensitivePortions(): void
    {
        $email = new Email('usuario@exemplo.com', false);
        $this->assertEquals('***@exemplo.com', $email->getMasked());
        $this->assertEquals('u******@exemplo.com', $email->getPartiallyMasked());
    }

    public function testMaskHidesSensitivePortionsMin(): void
    {
        $email = new Email('u@exemplo.com', false);
        $this->assertEquals('***@exemplo.com', $email->getMasked());
        $this->assertEquals('u@exemplo.com', $email->getPartiallyMasked());
    }

    public static function validEmailProvider(): array
    {
        return [
            ["usuario@exemplo.com", "usuario@exemplo.com"],
            ["USUARIO@EXemplo.com", "usuario@exemplo.com"],
            ["USER.NAME+tag@sub.exemplo.co.uk", "user.name+tag@sub.exemplo.co.uk"],
            ["usuario123@exemplo.io", "usuario123@exemplo.io",],
            ["usuario_name@exemplo.org", "usuario_name@exemplo.org",],
            ["usuario-name@exemplo.net", "usuario-name@exemplo.net",],
            ["user.name+tag+sorting@example.com", "user.name+tag+sorting@example.com",],
            ["x@example.com", "x@example.com",],
            ["example-indeed@strange-example.com", "example-indeed@strange-example.com",],
            ["user%example.com@example.org", "user%example.com@example.org",],
        ];
    }


    #[DataProvider('invalidEmailProvider')]
    public function testIsValidReturnsFalseForInvalidEmails(string $invalidEmail)
    {
        $email = new Email($invalidEmail, false); // Desativa validação no construtor
        $this->assertFalse($email->isValid(), "Falha ao identificar e-mail inválido: $invalidEmail");
    }

    #[DataProvider('emailPartsProvider')]
    public function testUsernameAndDomainExtraction(
        string $emailString,
        string $expectedUsername,
        string $expectedDomain
    ) {
        $email = new Email($emailString);

        $this->assertEquals($expectedUsername, $email->username(), "Nome de usuário incorreto para: $emailString");
        $this->assertEquals($expectedDomain, $email->domain(), "Domínio incorreto para: $emailString");
    }

    #[DataProvider('formattingProvider')]
    public function testEmailIsLowercasedAndTrimmed(string $inputEmail, string $expectedEmail)
    {
        $email = new Email($inputEmail);
        $this->assertEquals($expectedEmail, $email->value(), "Formatação incorreta para: '$inputEmail'");
    }

    #[DataProvider('noValidationProvider')]
    public function testCanBeCreatedWithoutValidation(string $emailString, bool $expectedValidity)
    {
        $email = new Email($emailString, false);

        $this->assertInstanceOf(Email::class, $email);
        $this->assertEquals(strtolower(trim($emailString)), $email->value());
        $this->assertEquals(
            $expectedValidity,
            $email->isValid(),
            "Validade esperada: " . ($expectedValidity ? 'Válido' : 'Inválido') . " para: $emailString"
        );
    }

    public static function invalidEmailProvider(): array
    {
        return [
            ["usuario@exemplo"],                  // Sem TLD
            ["usuario@.com"],                     // Domínio começa com ponto
            ["@exemplo.com"],                     // Sem usuário
            ["exemplo.com"],                      // Sem usuário
            ["usuarioexemplo.com"],               // Sem @
            ["usuario@exemplo..com"],             // Domínio com pontos consecutivos
            ["usuario@-exemplo.com"],             // Domínio começa com hífen
            ["usuario@exemplo.com-"],             // Domínio termina com hífen
            ["usuario@exemplo.c"],                // TLD muito curto
            ["usuario@exemplo.toolohhngtld"],     // TLD muito longo
            ["usuário@exemplo.com"],              // Caracteres especiais não permitidos
            ["usuario@sub@exemplo.com"],          // Múltiplos @
            ["user@.com.com"],                    // Domínio com subdomínio vazio
            ["user@com"],                         // Sem subdomínio válido
            ["user@exam_ple.com"],                // Subdomínio com caractere inválido
        ];
    }

    public static function emailPartsProvider(): array
    {
        return [
            ["usuario@exemplo.com", "usuario", "exemplo.com"],
            ["USER.NAME+tag@sub.exemplo.co.uk", "user.name+tag", "sub.exemplo.co.uk"],
            ["usuario123@exemplo.io", "usuario123", "exemplo.io"],
            ["usuario_name@exemplo.org", "usuario_name", "exemplo.org"],
            ["usuario-name@exemplo.net", "usuario-name", "exemplo.net"],
        ];
    }

    public static function formattingProvider(): array
    {
        return [
            ["  USUARIO@ExEmPlO.CoM  ", "usuario@exemplo.com"],
            ["User@Example.COM", "user@example.com"],
            ["  User.Name+Tag@Example.Com  ", "user.name+tag@example.com"],
            ["USER@EXAMPLE.COM ", "user@example.com"],
        ];
    }

    public static function noValidationProvider(): array
    {
        return [
            ["usuario@exemplo", false],
            ["usuario@.com", false],
            ["usuario@exemplo.com", true],
            ["@exemplo.com", false],
            ["usuario@sub@exemplo.com", false],
            ["usuario@exemplo..com", false],
        ];
    }
}