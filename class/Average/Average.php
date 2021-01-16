<?php

require_once('./class/Statistic.php');
require_once('AverageCalc.php');

class Average extends Statistic
{
    private $array, $lengthArr;

    function __construct($array, $lengthArr)
    {
        $this->array = $array;
        $this->lengthArr = $lengthArr;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function calculationMethod()
    {
        return new AverageCalc($this->array, $this->lengthArr);
    }
}
