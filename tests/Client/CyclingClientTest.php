<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 16:23
 */

namespace App\Tests\Client;


use App\Client\CyclingClient;
use PHPUnit\Framework\TestCase;

class CyclingClientTest extends TestCase
{

    private $client;

    protected function setUp()
    {
        $this->client = new CyclingClient();
    }


    public function testCyclingTimeCorrect() {
        $res = $this->client->drive(100);
        $this->assertEquals(1, $res);
    }

}