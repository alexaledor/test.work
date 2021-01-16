<?php


class Generators
{
    private $arr = [];

    function __construct($params)
    {
        $this->min = $params->minValue;
        $this->max = $params->maxValue;
        $this->amount = $params->amountValue;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function randomIntGenerator()
    {
        for ($i = 1; $i <= $this->amount; $i++) {
            $int = mt_rand($this->min, $this->max);
            array_push($this->arr, $int);
        }

        return $this->arr;
    }
}