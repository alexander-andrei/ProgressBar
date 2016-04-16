<?php

namespace Core\Logic;

/**
 * Interface Counter
 *
 * Count method calls
 *
 * Count array size
 *
 * Count percentage based on how manny
 * Times the method has been called
 *
 * @package Core\Logic
 * @author alex.andrei.caprar@gmail.com
 */
interface Counter
{
    /**
     * Calculate how manny times the method is called
     *
     * @return int
     */
    public function callCount();

    /**
     * Count array size
     *
     * @param array $data
     * @return int
     */
    public function arrayCount($data);

    /**
     * Calculate the percentage based on how manny times
     * The method has been called.
     *
     * @param int $value
     * @param int $size
     * @return int
     */
    public function percentageCount($value, $size);
}