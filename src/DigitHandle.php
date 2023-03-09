<?php

namespace Ivan\MarchTest;

use Ivan\MarchTest\Model\DecisionBuilder;
use Ivan\MarchTest\Model\StrategyInterface;

class DigitHandle
{
    /**
     * @var StrategyInterface[]
     */
    private $setOfStrategy;

    /**
     * @param StrategyInterface[] $setOfStrategy
     */
    public function __construct(array $setOfStrategy)
    {
        $this->setOfStrategy = $setOfStrategy;
    }

    /**
     * @param int $digit
     * @return string
     */
    public function handle(int $digit): string {
        $decisionBuilder = new DecisionBuilder($digit);

        foreach ($this->setOfStrategy as $strategyModel) {
            $decisionBuilder->append($strategyModel->executeStrategy($digit));
        }

        return $decisionBuilder->build();
    }
}