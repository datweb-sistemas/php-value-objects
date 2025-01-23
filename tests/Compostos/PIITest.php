<?php

namespace Compostos;

use Datweb\Vo\Compostos\{Cpf, Cnpj, Email, Nome, Rg};
use PHPUnit\Framework\TestCase;

class PIITest extends TestCase
{
    public function testCpfMaskingAndAuditLog()
    {
        $cpf = new Cpf('123.456.789-00', false);
        $this->assertEquals('***.***.***.00', $cpf->mask());
        
        $log = $cpf->getAuditLog();
        $this->assertArrayHasKey('type', $log);
        $this->assertArrayHasKey('masked_value', $log);
        $this->assertArrayHasKey('timestamp', $log);
        $this->assertArrayHasKey('operation', $log);
        $this->assertEquals('CPF', $log['type']);
        $this->assertEquals('create', $log['operation']);
    }

    public function testCnpjMaskingAndAuditLog()
    {
        $cnpj = new Cnpj('12.345.678/0001-90', false);
        $this->assertEquals('12.345.****/0001-90', $cnpj->mask());
        
        $log = $cnpj->getAuditLog();
        $this->assertEquals('CNPJ', $log['type']);
        $this->assertEquals('read', $log['operation']);
    }

    public function testEmailMaskingAndAuditLog()
    {
        $email = new Email('user@example.com', false);
        $this->assertEquals('us****@example.com', $email->mask());
        
        $log = $email->getAuditLog();
        $this->assertEquals('EMAIL', $log['type']);
        $this->assertEquals('read', $log['operation']);
    }

    public function testNomeMaskingAndAuditLog()
    {
        $nome = new Nome('John Doe');
        $this->assertEquals('Jo****', $nome->mask());
        
        $log = $nome->getAuditLog();
        $this->assertEquals('NOME', $log['type']);
        $this->assertEquals('read', $log['operation']);
    }

    public function testRgMaskingAndAuditLog()
    {
        $rg = new Rg('12.345.678-9');
        $this->assertEquals('12.***.678-9', $rg->mask());
        
        $log = $rg->getAuditLog();
        $this->assertEquals('RG', $log['type']);
        $this->assertEquals('read', $log['operation']);
    }
}
