<?php

namespace Core\Output;

/**
 * Class Output
 *
 * Outputs the progress bar
 * Outputs load percentage
 *
 * @package Core\Output
 * @author alex.andrei.caprar@gmail.com
 */
class Output
{
    /**
     * @param string $bar
     * @param int $value
     */
    public function percentage($bar, $value)
    {
        echo "\033[43m \033[10000D \033[0m Progress: $bar \033[32m $value% \033[0m";
    }
}