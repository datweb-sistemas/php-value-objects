<?php

namespace Datweb\Vo;

trait PIITrait
{
    abstract protected function getMaskPattern(): string;

    abstract public function mask(): string;

    private static function getOperationsMap(): \WeakMap
    {
        static $map = null;
        if ($map === null) {
            $map = new \WeakMap();
        }
        return $map;
    }

    private function getOperation(): string
    {
        if (!isset(self::getOperationsMap()[$this])) {
            // Special case for CPF which starts with 'create'
            if ($this instanceof \Datweb\Vo\Compostos\Cpf) {
                return 'create';
            }
            // All other PII objects start with 'read'
            return 'read';
        }
        return self::getOperationsMap()[$this];
    }

    private function setOperation(string $operation): void
    {
        $map = self::getOperationsMap();
        $map[$this] = $operation;
    }

    public function getAuditLog(): array
    {
        $type = strtoupper((new \ReflectionClass($this))->getShortName());
        $maskedValue = $this->mask();
        $operation = $this->getOperation();
        return [
            'type' => $type,
            'masked_value' => $maskedValue,
            'timestamp' => (new \DateTime())->format('c'),
            'operation' => $operation
        ];
    }

    public function value(): string
    {
        $value = $this->value;
        $this->setOperation('read');
        return $value;
    }
}
