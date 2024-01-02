<?php

namespace App\Parser\Domain;

use App\Parser\Domain\ParserValue;

class FloatValue extends ParserValue
{
    private float $value;

    public function __construct(float $var = null)
    {
        $this->var = $var;
    }
}
