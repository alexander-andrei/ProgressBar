<?php

namespace Core\Bar;

/**
 * Interface ProgressBar
 *
 * Load the progress bar
 *
 * Create the progress bar
 *
 * @package Core\Bar
 * @author alex.andrei.caprar@gmail.com
 */
interface ProgressBar
{
    /**
     * Load progress bar using the created progress bar as a map
     * Updates bar using ASCII characters
     *
     * @param $asciiBefore
     * @return mixed
     */
    public function loadProgressbar($asciiBefore);

    /**
     * Create progress bar using ASCII characters
     *
     * @return mixed
     */
    public function createProgressBar();
}