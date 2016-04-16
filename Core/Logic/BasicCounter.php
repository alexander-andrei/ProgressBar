<?php

namespace Core\Logic;

/**
 * Class BasicCounter
 *
 * @package Core\Logic
 * @author alex.andrei.caprar@gmail.com
 */
class BasicCounter implements Counter
{
    /**
     * 100% value
     */
    const FULL_PERCENTAGE = 100;

    /**
     * Count calls
     *
     * @return int
     */
    public function callCount()
    {
        static $count = 0;
        $count ++;

        return $count;
    }

    /**
     * Count array
     *
     * @param array $data
     * @return mixed
     */
    public function arrayCount($data)
    {
        return count($data);
    }

    /**
     * Count percentage
     *
     * @param int $value
     * @param int $size
     * @return mixed
     */
    public function percentageCount($value, $size)
    {
        return round(self::FULL_PERCENTAGE * ($value / $size));
    }
}