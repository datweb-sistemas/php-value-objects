<?php

namespace Datweb\Vo;

/**
 * Interface for handling Personally Identifiable Information (PII).
 * 
 * This interface defines methods for secure handling of PII data,
 * including masking and audit logging capabilities.
 * 
 * @package Datweb\Vo
 */
interface PII
{
    /**
     * Returns a masked version of the PII value.
     * 
     * @return string The masked value with sensitive parts hidden
     */
    public function mask(): string;

    /**
     * Returns audit log data for this PII value.
     * 
     * @return array{
     *   type: string,
     *   masked_value: string,
     *   timestamp: string,
     *   operation: string
     * } Audit information about the PII value
     */
    public function getAuditLog(): array;
}
