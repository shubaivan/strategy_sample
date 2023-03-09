<?php

namespace Ivan\MarchTest;

class OutputRange
{
    /**
     * @var array<string>
     */
    private array $output;

    private string $separator;

    private string $endOfTheOutput;

    /**
     * @param string[] $output
     * @param string $separator
     * @param string $endOfTheOutput
     */
    public function __construct(array $output, string $separator = ' ', string $endOfTheOutput = PHP_EOL)
    {
        $this->output = $output;
        $this->separator = $separator;
        $this->endOfTheOutput = $endOfTheOutput;
    }

    public function executePrint()
    {
        echo implode($this->separator, $this->output) . $this->endOfTheOutput;
    }
}