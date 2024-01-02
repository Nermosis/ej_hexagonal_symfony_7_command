<?php

namespace App\Parser\Domain;

use App\Parser\Domain\ParserValue;

class IntValue extends ParserValue
{
    private int $value;

    public function __construct(int $var = null)
    {
        $this->var = $var;
    }
}
