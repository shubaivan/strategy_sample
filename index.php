<?php
require_once __DIR__ . '/bootstrap.php';
?>
<?php

use Ivan\MarchTest\Model\Strategies;
use Ivan\MarchTest\OutputRange;
use Ivan\MarchTest\ProcessingRange;

$command = new ProcessingRange([
    new Strategies\InStrategy([1, 4, 9], 'joff'),
    new Strategies\GreatStrategy(5, 'tchoff')
], range(1, 10));

$processingRange = $command->getProcessingRange();

$outputRange = new OutputRange($processingRange, '-');

$outputRange->executePrint();
