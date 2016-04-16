<?php

namespace Core;

use Core\Bar\BasicProgressBar;
use Core\Logic\BasicCounter;
use Core\Output\Output;

/**
 * Class GeneralProgressBarCreator
 * Less flexible than FlexibleProgressBarCreator
 *
 * Creates the progress bar
 * 
 * @package Core
 * @author alex.andrei.caprar@gmail.com
 */
class GeneralProgressBarCreator extends AbstractProgressBarCreator
{
    /**
     * @var BasicCounter
     */
    private $counter;

    /**
     * @var Output
     */
    private $output;

    /**
     * @var BasicProgressBar
     */
    private $bar;

    /**
     * GeneralProgressBarCreator constructor.
     *
     * @param array $size
     */
    public function __construct($size)
    {
        $this->counter = new BasicCounter();
        $this->output = new Output();
        $this->bar = new BasicProgressBar();

        parent::__construct($size, $this->counter, $this->output, $this->bar);
    }
}
