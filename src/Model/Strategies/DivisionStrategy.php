<?php

namespace Ivan\MarchTest\Model\Strategies;

use Ivan\MarchTest\Model\StrategyInterface;

class DivisionStrategy extends StrategyInterface
{
    /**
     * @var int
     */
    private int $divideTo;

    /**
     * @param int $divideTo
     * @param string $replaceTo
     */
    public function __construct(int $divideTo, string $replaceTo)
    {
        parent::__construct($replaceTo);
        $this->divideTo = $divideTo;
    }

    /**
     * {@inheritdoc}
     */
    public function executeStrategy(int $digit) {
        return $digit%$this->divideTo === 0 ? $this->replaceTo : null;
    }
}