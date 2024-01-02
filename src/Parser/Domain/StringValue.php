<?php

namespace App\Parser\Domain;

use App\Parser\Domain\ParserValue;

class StringValue extends ParserValue
{
    private String $value;

    public function __construct(String $var = null)
    {
        $this->var = $var;
    }
}
