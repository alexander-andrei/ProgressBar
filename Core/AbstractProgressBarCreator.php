<?php

namespace Core;

use Core\Bar\ProgressBar;
use Core\Logic\Counter;
use Core\Output\Output;

/**
 * Class AbstractProgressBarCreator
 * Creates the progress bar
 *
 * @package Core
 * @author alex.andrei.caprar@gmail.com
 */
class AbstractProgressBarCreator
{
    /**
     * @var int
     */
    private $size;

    /**
     * @var Counter
     */
    private $counter;

    /**
     * @var Output
     */
    private $output;

    /**
     * @var ProgressBar
     */
    private $bar;

    /**
     * AbstractProgressBarCreator constructor.
     *
     * @param array $size
     * @param Counter $counter
     * @param Output $output
     * @param ProgressBar $bar
     */
    public function __construct($size, Counter $counter, Output $output, ProgressBar $bar)
    {
        $this->counter = $counter;
        $this->output = $output;
        $this->bar = $bar;

        $this->size = $this->counter->arrayCount($size);
    }

    /**
     * Calculates how many times the method
     * Has been called.
     *
     * Creates percentage based on method calls.
     *
     * Load the progress bar
     * Outputs load percentage
     */
    public function load()
    {
        $count = $this->counter->callCount();

        $value = $this->counter->percentageCount($count, $this->size);

        $bar = $this->bar->loadProgressbar($value);

        $this->output->percentage($bar, $value);
    }
}