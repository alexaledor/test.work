<?php

require_once('./class/Statistic.php');
require_once('ModeCalc.php');

class Mode extends Statistic
{
    private $array;

    function __construct($array)
    {
        $this->array = $array;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function calculationMethod()
    {
        return new ModeCalc($this->array);
    }
}