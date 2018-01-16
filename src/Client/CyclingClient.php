<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 14:50
 */

namespace App\Client;


use App\Interfaces\DistanceInterface;

class CyclingClient implements DistanceInterface
{
    public const SPEED = 100;

    /**
     * Calculates the time needed to reach the location
     * @param $distance
     * @return float|int
     */
    public function drive($distance)
    {
        return $distance / self::SPEED;
    }
}