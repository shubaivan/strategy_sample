<?php

namespace Ivan\MarchTest;

use Ivan\MarchTest\Model\StrategyInterface;

class ProcessingRange
{
    /**
     * @var array
     */
    private $range;

    /**
     * @var DigitHandle
     */
    private $digitHandle;

    /**
     * @param StrategyInterface[] $strategies
     */
    public function __construct(array $strategies, array $range)
    {
        $this->digitHandle = new DigitHandle($strategies);
        $this->range = $range;
    }


    /**
     * @return array
     */
    public function getProcessingRange(): array
    {
        $result = [];

        foreach ($this->range as $number) {
            $result[] = $this->digitHandle->handle($number);
        }

        return $result;
    }
}