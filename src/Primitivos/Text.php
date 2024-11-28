<?php

namespace Datweb\Vo\Primitivos;

use Datweb\Vo\Encoding;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

/**@codeCoverageIgnore */
readonly class Text extends ValueObject
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = self::normalize($value);
    }

    private static function normalize(string $value): string
    {
        $detectedEncoding = mb_detect_encoding($value, Encoding::all(), true);

        if ($detectedEncoding === false) {
            throw new InvalidArgumentException('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
        }

        $convertedValue = mb_convert_encoding($value, 'UTF-8', $detectedEncoding);

        if ($convertedValue === false) {
            throw new InvalidArgumentException(
                "Failed to convert from {$detectedEncoding} to UTF-8."
            );
        }

        return $convertedValue;
    }

    public function toEncoding(Encoding $targetEncoding): string
    {
        $converted = mb_convert_encoding($this->value, $targetEncoding->value, 'UTF-8');

        if ($converted === false) {
            throw new InvalidArgumentException(
                "Failed to convert from UTF-8 to {$targetEncoding->value}."
            );
        }

        return $converted;
    }

    public function toUtf8(): string
    {
        return $this->value;
    }

    public function toIso88591(): string
    {
        return $this->toEncoding(Encoding::ISO_8859_1);
    }

    public function toWindows1252(): string
    {
        return $this->toEncoding(Encoding::WINDOWS_1252);
    }

    public function value(): string
    {
        return $this->value;
    }
}
