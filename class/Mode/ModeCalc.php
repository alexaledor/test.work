<?php
/**
 * Mode
 * https://statanaliz.info/statistica/opisanie-dannyx/moda/
 */

class ModeCalc implements Analitic
{
    private $array, $max;

    function __construct($array)
    {
        ksort($array);
        $this->array = $array;
        $indexMaxCount = array_search(max($this->array), $this->array);
        $this->max = $this->array[$indexMaxCount];
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function calculation(){

        static $result = [];

        if ($value = array_search($this->max, $this->array)) {
            array_push($result, $value);
            unset($this->array[$value]);
            $this -> calculation();
        }

        return $result;
    }
}