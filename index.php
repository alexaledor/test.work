<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 3600);

require_once('class/Generators.php');
require_once('class/Average/Average.php');
require_once('class/Deviation/Deviation.php');
require_once('class/Mode/Mode.php');
require_once('class/Median/Median.php');
require_once('class/Statistic.php');

$inputData = [];
$response = [];

$post = json_decode(file_get_contents('php://input'));

if (isset($post->params)) {
    $generator = new Generators($post->params);
    $inputData = $generator->randomIntGenerator();
    $generator = null;
} else {
    echo 'You need to send parameters';
    return;
}

function calculator(Statistic $statistic)
{
    return $statistic->runCalculation();
}

$lengthArr = count($inputData);

/**
 * Average
 */
$average = calculator(new Average($inputData, $lengthArr));

/**
 * standardDeviation
 */
$deviation = calculator(new Deviation($inputData, $average, $lengthArr));

/**
 * Mode
 */
$countValArr = array_count_values($inputData);
unset($inputData);

$mode = calculator(new Mode($countValArr));

/**
 * Median
 */
$median = calculator(new Median($countValArr));
unset($countValArr);

//Result array
array_push($response,
    ['average' => $average],
    ['deviation' => $deviation],
    ['mode' => $mode],
    ['median' => $median]
);

echo json_encode($response);
