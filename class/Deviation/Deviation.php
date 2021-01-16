<?php

require_once('./class/Statistic.php');
require_once('DeviationCalc.php');

class Deviation extends Statistic
{
    private $array, $average, $lengthArr;

    function __construct($array, $average, $lengthArr)
    {
        $this->array = $array;
        $this->average = $average;
        $this->lengthArr = $lengthArr;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function calculationMethod()
    {
        return new DeviationCalc(
            $this->array,
            $this->average,
            $this->lengthArr
        );
    }
}