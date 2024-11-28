<?php

namespace Datweb\Vo;

/**
 * @codeCoverageIgnore
 */
enum Encoding: string
{
    case UTF8 = 'UTF-8';
    case ISO_8859_1 = 'ISO-8859-1';
    case WINDOWS_1252 = 'WINDOWS-1252';

    public static function all(): array
    {
        return array_map(fn($encoding) => $encoding->value, self::cases());
    }
}