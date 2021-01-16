<?php

require_once('Analitic.php');

abstract class Statistic
{
    abstract public function calculationMethod();

    public function runCalculation()
    {
        $calc = $this->calculationMethod();
        $result = $calc->calculation();
        return $result;
    }
}
