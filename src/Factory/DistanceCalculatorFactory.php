<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 13:19
 */

namespace App\Factory;


use App\Client\CyclingClient;
use App\Client\DrivingClient;
use App\Client\WalkingClient;

class DistanceCalculatorFactory
{

    /**
     * @param $mode
     * @return mixed
     */
    public static function build($mode)
    {

        switch ($mode) {
            case 1:
                $modeClient = new WalkingClient();
                break;
            case 2:
                $modeClient = new CyclingClient();
                break;
            case 3:
                $modeClient = new DrivingClient();
                break;
            default:
//                throw new MethodNotImplementedException('This method is still not implemented.');
                return null;
                break;
        }

        return $modeClient;
    }
}