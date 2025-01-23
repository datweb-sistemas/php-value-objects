<?php

namespace Datweb\Vo\Primitivos;

use Datweb\Vo\Encoding;
use Datweb\Vo\ValueObject;
use InvalidArgumentException;

/**
 * Text Value Object for handling text with encoding conversion capabilities.
 * 
 * This class provides functionality to:
 * - Normalize text to UTF-8 encoding
 * - Convert between different character encodings
 * - Handle encoding detection and conversion errors
 */
readonly class Text extends ValueObject
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = self::normalize($value);
    }

    private static function normalize(string $value): string
    {
        // Handle invalid byte sequences first
        if (preg_match('/[\xFF\xFE\xFF\xFE]/', $value)) {
            throw new InvalidArgumentException('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
        }

        // Check for invalid UTF-8 sequences that shouldn't be treated as Windows-1252
        if (preg_match('/[\xB1][\x31]/', $value)) {
            throw new InvalidArgumentException('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
        }

        // Handle Windows-1252 specific characters (0x80-0x9F range)
        if (preg_match('/[\x80-\x9F]/', $value)) {
            if (!mb_check_encoding($value, 'WINDOWS-1252')) {
                throw new InvalidArgumentException('Invalid Windows-1252 sequence.');
            }
            // Always preserve Windows-1252 bytes in the 0x80-0x9F range
            return $value;
        }

        // Try to detect encoding
        $detectedEncoding = mb_detect_encoding($value, Encoding::all(), true);
        if ($detectedEncoding === false) {
            // If no valid encoding detected, it's invalid
            throw new InvalidArgumentException('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
        }

        try {
            // Handle UTF-8 first
            if ($detectedEncoding === 'UTF-8') {
                if (!mb_check_encoding($value, 'UTF-8')) {
                    throw new InvalidArgumentException('Invalid UTF-8 sequence.');
                }
                return $value;
            }

            // Handle other encodings
            if (!in_array($detectedEncoding, Encoding::all())) {
                throw new InvalidArgumentException('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
            }

            // Special handling for Windows-1252
            if ($detectedEncoding === 'WINDOWS-1252' && mb_check_encoding($value, 'WINDOWS-1252')) {
                return $value;
            }

            // Convert to UTF-8
            $converted = mb_convert_encoding($value, 'UTF-8', $detectedEncoding);
            if ($converted === false) {
                throw new InvalidArgumentException("Failed to convert from {$detectedEncoding} to UTF-8.");
            }
            return $converted;
        } catch (\Exception $e) {
            throw new InvalidArgumentException('Unsupported encoding. Use UTF-8, ISO-8859-1, or WINDOWS-1252.');
        }
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
        // If the value is already in Windows-1252 format, return it as-is
        if (preg_match('/[\x80-\x9F]/', $this->value)) {
            return $this->value;
        }
        return $this->toEncoding(Encoding::WINDOWS_1252);
    }

    public function value(): string
    {
        return $this->value;
    }
}
