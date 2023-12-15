<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testAllFestivals()
    {
        $client = static::createClient();
        $client->request('GET', '/festivals');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}