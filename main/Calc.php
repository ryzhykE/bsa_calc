<?php

declare(strict_types=1);
namespace main;

class Calc {

    function Add(int $operand1, int $operand2) : int{
        $res = $operand1 + $operand2;
        LogWrite::log()($result, $number1, $number2, $res);
        return $res;
    }

    function Min(int $operand1, int $operand2) : int{
        $res = $operand1 - $operand2;
        LogWrite::log()($result, $number1, $number2, $res);
        return $res;
    }
	function Mul(int $operand1, int $operand2) : int{
        $res = $operand1 * $operand2;
        LogWrite::log()($result, $number1, $number2, $res);
        return $res;
    }
	
    function Div(int $operand1, int $operand2):int{
        $res = intdiv($operand1, $operand2);
        LogWrite::log()($result, $number1, $number2, $res);
        return $tmp;
    }

    function Pow(int $operand1):int{
        $res = $operand1 **2;
        LogWrite::log()($result, $number1, $number2, $res);
        return $tmp;
    }
} 