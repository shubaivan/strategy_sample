<?php

namespace Ivan\MarchTest\Model\Strategies;

use Ivan\MarchTest\Model\StrategyInterface;

class GreatStrategy extends StrategyInterface
{
    /**
     * @var int
     */
    private int $greatToValue;

    /**
     * @param string $replaceTo
     * @param int $greatToValue
     */
    public function __construct(int $greatToValue, string $replaceTo)
    {
        parent::__construct($replaceTo);
        $this->greatToValue = $greatToValue;
    }

    /**
     * {@inheritDoc}
     */
    function executeStrategy(int $digit)
    {
        return $digit>$this->greatToValue ? $this->replaceTo : null;
    }
}