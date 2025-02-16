<?php

namespace Datweb\Vo;

interface MaskablePII extends PII
{
    public function getMasked(): string;

    public function getPartiallyMasked(): string;
}