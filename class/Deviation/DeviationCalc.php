<?php
/**
 * standardDeviation
 * https://www.nexus.ua/standartnoe-otklonenie-standard-deviation
 */

class DeviationCalc implements Analitic
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

    public function calculation()
    {
        $result = 0;
        foreach ($this->array as $item) {
            $result += ($item - $this->average) ** 2;
        }
        $result = sqrt($result / ($this -> lengthArr - 1));
        $result = round($result,4);

        return $result;
    }
}