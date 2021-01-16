<?php
/**
 * Average
 * https://www.nexus.ua/standartnoe-otklonenie-standard-deviation
 */

class AverageCalc implements Analitic
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

    public function calculation()
    {
        try {
            $average = array_sum($this->array) / $this->lengthArr;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }

        return round($average, 4);
    }
}