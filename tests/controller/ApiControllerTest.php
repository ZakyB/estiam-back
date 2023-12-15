<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ApiControllerTest extends WebTestCase
{
    public function testAllFestivals()
    {
        $client = static::createClient();
        $client->request('GET', '/festivals');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testLoginWithInvalidCredentials()
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/login_check',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode([
                'username' => 'invalid_username',
                'password' => 'invalid_password'
            ])
        );
    
        $responseContent = $client->getResponse()->getContent();
        $this->assertJson($responseContent, 'Response content is not valid JSON: ' . $responseContent);
        $responseData = json_decode($responseContent, true);
        $this->assertArrayHasKey('message', $responseData, 'Response data does not contain a "message" key: ' . $responseContent);
        $this->assertEquals('Invalid credentials.', $responseData['message'], 'Unexpected message: ' . $responseData['message']);
    }

    public function testLoginWithValidCredentials()
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/login_check',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode([
                'username' => 'zaky',
                'password' => 'test'
            ])
        );
    
        $responseContent = $client->getResponse()->getContent();
        $this->assertJson($responseContent, 'Response content is not valid JSON: ' . $responseContent);
        $responseData = json_decode($responseContent, true);
        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode(), 'Unexpected status code: ' . $responseContent);
        $this->assertArrayHasKey('token', $responseData, 'Response data does not contain a "token" key: ' . $responseContent);
    }
    public function testGetById()
    {
    $client = static::createClient();
    $client->request(
        'GET',
        '/festivals/657bf55c5136311815661b9a'
    );

    $responseContent = $client->getResponse()->getContent();
    $this->assertJson($responseContent, 'Response content is not valid JSON: ' . $responseContent);
    $responseData = json_decode($responseContent, true);
    $this->assertArrayHasKey('id', $responseData, 'Response data does not contain an "id" key: ' . $responseContent);
    $this->assertEquals('657bf55c5136311815661b9a', $responseData['id'], 'Unexpected id: ' . $responseData['id']);
    }

    public function testFilter()
    {
        $client = static::createClient();
        $client->request(
            'GET',
            '/festivals/nom_du_festival/Gamerz'
        );

        $responseContent = $client->getResponse()->getContent();
        $this->assertJson($responseContent, 'Response content is not valid JSON: ' . $responseContent);
        $responseData = json_decode($responseContent, true);
        $this->assertIsArray($responseData, 'Response data is not an array: ' . $responseContent);
        $this->assertNotEmpty($responseData, 'Response data is empty: ' . $responseContent);
    }
}