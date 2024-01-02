<?php

namespace App\Parser\Application;

use App\Parser\Domain\FloatValue;
use App\Parser\Domain\IntValue;
use App\Parser\Domain\ParserValue;
use App\Parser\Domain\StringValue;

class GetParserValue
{
    private ParserValue $parserValue;

    public function __construct()
    {
    }

    public function execute(String $tipo, String $value): ParserValue
    {
        return $this->parserValue = $this->switchExcel($tipo, $value);
    }

    private function switchExcel($tipo, $value)
    {
        $result = null;
        switch ($tipo) {
            case 'varchar':
                return new StringValue($value);
                break;
                //Cuando la longitud del campo sea 9
            case 'int':
                return new IntValue($value);
                break;
                //Cuando la longitud del campo > 9
            case 'decimal':
                return new FloatValue($value);
                break;
            default:
                $result = $value;
                break;
        }
    }

    private function parseFormatFloat($valor)
    {
        return (float)(str_replace(",", ".", $valor));
    }

    private function parseFormatInt($valor)
    {
        return intval($valor);
    }

    private function parseFormatBigInt($valor)
    {
        return intval($valor);
    }
}
