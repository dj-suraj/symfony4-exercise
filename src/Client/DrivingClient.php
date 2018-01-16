<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 14:44
 */

namespace App\Factory;


class DrivingClient
{

    public const SPEED = 500;

    public function drive($distance)
    {
        return $distance/self::SPEED;
    }
}