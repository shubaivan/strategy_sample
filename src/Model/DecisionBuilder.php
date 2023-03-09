<?php

namespace Ivan\MarchTest\Model;

class DecisionBuilder
{
    /**
     * @var string
     */
    private string $result = "";

    /**
     * @var string
     */
    private string $inputDigit;

    public function __construct(string $inputDigit)
    {
        $this->inputDigit = $inputDigit;
    }

    /**
     * @param string|null $piece
     * @return void
     */
    public function append(?string $piece) {
        is_null($piece) ?: $this->result .= $piece;
    }

    /**
     * @return string
     */
    public function build() {
        return $this->result ?: $this->inputDigit;
    }
}