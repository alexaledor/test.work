<?php
/**
 * Median
 * https://statanaliz.info/statistica/opisanie-dannyx/mediana-v-statistike/
 */

class MedianCalc implements Analitic
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

    public function calculation()
    {
        $median = 0;
        $lengthCountValArr = count($this->array);
        $indexMedian = ($lengthCountValArr + 1) / 2;

        $i = 1;
        if ($lengthCountValArr % 2 == 0) { //two input value

            $firstIndexMediana = intval($indexMedian);
            $secondIndexMediana = $firstIndexMediana + 1;
            $median = 0;

            foreach ($this->array as $key => $item) {
                if ($i == $firstIndexMediana || $i == $secondIndexMediana) {
                    $median += $key;
                }
                $i++;
            }

            $median = $median / 2;

        } else { //one input value

            foreach ($this->array as $key => $item) {
                if ($i == $indexMedian) {
                    $median = $key;
                }
                $i++;
            }
        }

        return $median;
    }
}