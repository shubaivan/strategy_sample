<?php

namespace Ivan\MarchTest\Model\Strategies;

use Ivan\MarchTest\Model\StrategyInterface;

class InStrategy extends StrategyInterface
{
    /**
     * @var array
     */
    private array $range;

    /**
     * @param array $range
     * @param string $replaceTo
     */
    public function __construct(array $range, string $replaceTo)
    {
        parent::__construct($replaceTo);
        $this->range = $range;
    }

    /**
     * {@inheritDoc}
     */
    public function executeStrategy(int $digit)
    {
        return in_array($digit, $this->range, true) ? $this->replaceTo : null;
    }
}