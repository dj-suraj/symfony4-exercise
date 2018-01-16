<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 16:35
 */

namespace App\Tests\Client;


use App\Client\WalkingClient;
use PHPUnit\Framework\TestCase;

class WalkingClientTest extends TestCase
{

    private $client;

    protected function setUp()
    {
        $this->client = new WalkingClient();
    }


    public function testCyclingTimeCorrect() {
        $res = $this->client->drive(50);
        $this->assertEquals(1, $res);
    }

}