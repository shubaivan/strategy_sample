<?php

namespace Ivan\MarchTest\Model;

abstract class StrategyInterface
{
    /**
     * @var string
     */
    protected string $replaceTo;

    /**
     * @param string $replaceTo
     */
    public function __construct(string $replaceTo)
    {
        $this->replaceTo = $replaceTo;
    }

    /**
     * @param int $digit
     * @return string|null
     */
    abstract function executeStrategy(int $digit);
}