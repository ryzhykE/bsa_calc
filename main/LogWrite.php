<?php
namespace main;

class LogWrite{
    private $LogFile = "../log.txt";
	
	function log($LogFile,$operand1,$operand2 $operator, $result) {
            $logW = fopen($LogFile);
            fwrite($logW, date("m.d.y H:i:s").'/'.$operand1.'/'.$operand2.' and '.$operator.', result '.$result."\n");
            fclose($logW);
            return true;
        }
}