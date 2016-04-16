<?php

namespace Core\Bar;

/**
 * Class BasicProgressBar
 *
 * @package Core\Bar
 * @author alex.andrei.caprar@gmail.com
 */
class BasicProgressBar implements ProgressBar
{
    /**
     * 100% percentage
     */
    const FULL_PERCENTAGE = 100;

    /**
     * Number of units for the
     * Progress bar
     */
    const NUMBER_OF_UNITS = 50;

    /**
     * ASCII characters used
     * After load
     */
    const ASCII_AFTER_LOAD = 178;


    /**
     * ASCII characters used
     * Before load
     */
    const ASCII_BEFORE_LOAD = 177;

    /**
     * Glue value
     */
    const GLUE = "";

    /**
     * @var mixed
     */
    private $progressBar;

    /**
     * BasicProgressBar constructor.
     */
    public function __construct()
    {
        $this->progressBar = $this->createProgressBar();
    }

    /**
     * Load the progress bar
     *
     * @param int $asciiBefore
     * @return string
     */
    public function loadProgressbar($asciiBefore)
    {
        $asciiAfter= chr(self::ASCII_AFTER_LOAD);

        $deCount = round(($asciiBefore / self::FULL_PERCENTAGE) * self::NUMBER_OF_UNITS - 1);

        $splitString = str_split($this->getImplode());

        for($x = 0; $x <= $deCount; $x++)
        {
            $splitString[$x] = $asciiAfter;
        }

        $finalImplode = implode(self::GLUE, $splitString);

        $this->setImplode($finalImplode);

        return $this->getImplode();
    }

    /**
     * Create the progress bar
     *
     * @return string
     */
    public function createProgressBar()
    {
        $asciiBefore = chr(self::ASCII_BEFORE_LOAD);

        $characters = array_fill(1, self::NUMBER_OF_UNITS, $asciiBefore);
        $implode = implode(self::GLUE, $characters);

        return $implode;
    }

    /**
     * Set the progress bar
     *
     * @param string $progressBar
     */
    public function setImplode($progressBar)
    {
        $this->progressBar = $progressBar;
    }

    /**
     * Get the progress bar
     *
     * @return string
     */
    public function getImplode()
    {
        return $this->progressBar;
    }
}