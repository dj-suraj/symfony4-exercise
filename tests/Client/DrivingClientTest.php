<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 16:34
 */

namespace App\Tests\Client;


use App\Client\DrivingClient;
use PHPUnit\Framework\TestCase;

class DrivingClientTest extends TestCase
{

    private $client;

    protected function setUp()
    {
        $this->client = new DrivingClient();
    }


    public function testCyclingTimeCorrect() {
        $res = $this->client->drive(500);
        $this->assertEquals(1, $res);
    }

}